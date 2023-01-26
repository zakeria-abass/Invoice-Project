<?php

namespace App\Http\Controllers\payment;

use App\Http\Controllers\Controller;
use App\Models\InvDetails;
use App\Models\Invoice\Invoice;
use http\Env\Url;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    //check_out
    public function check_out(Request $request ,$id){

        $Invoice= Invoice::with('details')->find($id);

            if ($Invoice->status == 2){

                $url = "https://eu-test.oppwa.com/v1/checkouts";
                $data = "entityId=8a8294174b7ecb28014b9699220015ca" .
                    "&amount=$Invoice->total" .
                    "&currency=USD" .
                    "&paymentType=DB";

                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    'Authorization:Bearer OGE4Mjk0MTc0YjdlY2IyODAxNGI5Njk5MjIwMDE1Y2N8c3k2S0pzVDg='));
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);// this should be set to true in production
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $responseData = curl_exec($ch);
                if(curl_errno($ch)) {
                    return curl_error($ch);
                }
                curl_close($ch);
                $responseData=json_decode($responseData , true);
                $id =$responseData['id'];
                return view('main.check_out',compact('id','Invoice'));
            }else{
                return view('main.can_not_visit');
            }



    }

    //payment

    public function payment_payment(Request $request,$id){

        $resourcePath=$request->resourcePath;

        $url = "https://eu-test.oppwa.com$resourcePath";
        $url .= "?entityId=8a8294174b7ecb28014b9699220015ca";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization:Bearer OGE4Mjk0MTc0YjdlY2IyODAxNGI5Njk5MjIwMDE1Y2N8c3k2S0pzVDg='));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);// this should be set to true in production
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $responseData = curl_exec($ch);
        if(curl_errno($ch)) {
            return curl_error($ch);
        }
        curl_close($ch);
        $responseData =json_decode($responseData,true);

        $code= $responseData['result']['code'];
        $transaction_id= $responseData['id'];





        if ($code =='000.100.110'){
            DB::beginTransaction();
            try {
                DB::commit();

                Invoice::where('id',$id)->update([
                    'status'=>1,
                ]);
                $Invoice_create= Invoice::with('section')->find($id);
                InvDetails::create([
                    'invoice_id'=>$Invoice_create->id,
                    'product'=>$Invoice_create->product,
                    'section_id'=>$Invoice_create->section->id,
                    'status'=>1,
                    'note'=>$Invoice_create->note,
                    'payment_date'=>date('Y-m-d'),
                    'transaction_id'=>$transaction_id,


                ]);

                $details=InvDetails::with('section','invoice')->latest()->first();

                return view('main.receipt',compact('details','transaction_id'));;

            }catch (\Exception $e){
                DB::rollBack();
                return "Ere";
            }
        }else{

        }
    }


    public function receipt(){

        return view('main.receipt');
    }


    public function check_invoice($id){
        $print= Invoice::with('section')->find($id);
        return view('main.check_invoice',compact('print'));
    }







}
