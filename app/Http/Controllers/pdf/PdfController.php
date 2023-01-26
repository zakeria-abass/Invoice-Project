<?php

namespace App\Http\Controllers\pdf;

use App\Http\Controllers\Controller;
use App\Models\Invoice\Invoice;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    /*
     *
     *
     */
    public function pdf_invoice(){
        $invoices =Invoice::with('section')->get();
        $pdf = Pdf::loadView('admin_dashboard.pdf.invoice',compact('invoices'));
        return $pdf->download('admin_dashboard.invoice.pdf');

    }

    public function pdf_condition(Request $request){

        $invoices =Invoice::with('section')->where('status',$request->condition)
            ->where('section_id',$request->sections)->get();
        $pdf = Pdf::loadView('admin_dashboard.pdf.invoice',compact('invoices'));
        return $pdf->download('admin_dashboard.invoice.pdf');

    }
}
