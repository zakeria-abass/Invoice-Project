<?php

namespace App\Http\Controllers\Invoice;

use App\Http\Controllers\Controller;
use App\Http\Requests\InvoiceValidate;
use App\Models\inv_attachments\inv_attachments;
use App\Models\InvDetails;
use App\Models\Invoice\Invoice;
use App\Models\Product\Products;
use Illuminate\Http\Request;


class InvoiceContrller extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin_dashboard.invoice.show_invoice');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin_dashboard.invoice.add_invoice');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InvoiceValidate $request)
    {




        Invoice::create([
            'invoice_number'=>$request->invoice_number,
            'invoice_date'=>$request->invoice_Date,
            'due_date'=>$request->Due_date,
            'product'=>$request->product,
            'section_id'=>$request->Section,
            'amount_collection'=>$request->Amount_collection,
            'amount_commission'=>$request->Amount_Commission,
            'discount'=>$request->Discount,
            'rate_vat'=>$request->Rate_VAT,
            'value_vat'=>$request->Value_VAT,
            'total'=>$request->Total,
            'note'=>$request->note,
            'user'=>auth()->user()->name,

        ]);

        $invoice_id=Invoice::latest()->first();


        InvDetails::create([
            'invoice_id'=>$invoice_id->id,
        'product'=>$request->product,
        'section_id'=>$invoice_id->section_id,
        'status'=>2 ,
        'note'=>$request->note ,
        'name_user'=>auth()->user()->name,
        ]);

        $img =$invoice_id->invoice_number.$request->file('pic')->getClientOriginalName();
        $request->file('pic')->move(public_path('Attachments/'.$invoice_id->invoice_number),$img);

        inv_attachments::create([
            'file_name'=>$img ,
        'invoice_id'=>$invoice_id->id ,
            'name_user'=>auth()->user()->name,
        ]);



        return back() ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $Invoice=Invoice::with('section')->where('id',$id)->first();
        return view('admin_dashboard.invoice.edit_invoice',compact('Invoice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Invoice::where('id',$id)->update([
            'invoice_number'=>$request->invoice_number,
            'invoice_date'=>$request->invoice_Date,
            'due_date'=>$request->Due_date,
            'product'=>$request->product,
            'section_id'=>$request->Section,
            'amount_collection'=>$request->Amount_collection,
            'amount_commission'=>$request->Amount_Commission,
            'discount'=>$request->Discount,
            'rate_vat'=>$request->Rate_VAT,
            'value_vat'=>$request->Value_VAT,
            'total'=>$request->Total,
            'note'=>$request->note,
            'user'=>auth()->user()->name,

        ]);

        $invoice_id=Invoice::latest()->first();

        InvDetails::where('invoice_id',$id)->update([
            'product'=>$request->product,
            'section_id'=>$invoice_id->section_id,
            'note'=>$request->note ,
            'name_user'=>auth()->user()->name,
        ]);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Invoice::destroy($id);
        return redirect()->route('invoice.index')->with('invoice_delete','تم نق للارشيف بنجاح');
    }


    public function delete_all_invoice($id)
    {
        $inv= Invoice::find($id);
        $inv->forceDelete();
        return back() ;
    }


    public function print_invoice($id)
    {
        $print= Invoice::with('section')->find($id);
     return view('admin_dashboard.invoice.print_invoice',compact('print'));
    }


    //payment
    public function payment($id){
       $invoices= Invoice::with('section')->find($id);
        return view('admin_dashboard.invoice.payment_invoice',compact('invoices')) ;
    }
    public function payment_update(Request $request,$id){

        Invoice::where('id',$id)->update([
            'status'=>$request->status,
        ]);

        InvDetails::create([
          'invoice_id'=>$id,
            'product'=>$request->product,
            'section_id'=>$request->Section,
            'status'=>$request->status,
            'note'=>$request->note,
            'payment_date'=>date('Y-m-d'),
            'residual'=>$request->residual,
            'name_user'=>auth()->user()->name,

        ]);
        return back();
    }


    //===========getproducts
    public function getproducts($id){

        $products=Products::where('sections_id',$id)->pluck('prouduct_name','id');

        return json_encode($products) ;
    }



}
