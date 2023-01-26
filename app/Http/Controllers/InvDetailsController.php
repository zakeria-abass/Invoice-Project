<?php

namespace App\Http\Controllers;

use App\Models\inv_attachments\inv_attachments;
use App\Models\InvDetails;
use App\Models\Invoice\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class InvDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InvDetails  $invDetails
     * @return \Illuminate\Http\Response
     */
    public function show(InvDetails $invDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InvDetails  $invDetails
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Invoices=Invoice::with('section')->where('id',$id)->first();
        $Details=InvDetails::with('invoice','section')->where('invoice_id',$id)->get();
        $Attachments=inv_attachments::with('invoice')->where('invoice_id',$id)->get();
        return view('admin_dashboard.invoice.inv_details',compact('Invoices','Details','Attachments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InvDetails  $invDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InvDetails $invDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InvDetails  $invDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request ,$id)
    {
        $invoices = inv_attachments::with('invoice')->where('id',$id)->first();
        $invoices->delete();
        File::delete(public_path('Attachments/'.$invoices->invoice->invoice_number.'/'.$invoices->file_name));
        return back();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InvDetails  $invDetails
     * @return \Illuminate\Http\Response
     */


    public function add_details(Request $request ,$id){
        $det=InvDetails::with('invoice')->where('invoice_id',$id)->first();

        $img =rand().time().$request->file('pic')->getClientOriginalName();
        $request->file('pic')->move(public_path('Attachments/'.$det->invoice->invoice_number),$img);

        inv_attachments::create([
            'file_name'=>$img ,
            'invoice_id'=>$det->invoice_id ,
            'name_user'=>auth()->user()->name,
        ]);

        return back();
    }
}
