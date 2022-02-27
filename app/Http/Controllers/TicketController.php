<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use PDF;
class TicketController extends Controller
{
    // getting payment details id and go to ticket page
    public function index($invoice_id) {
        $this->invoice_id = $invoice_id;
        $invoice = Payment::where('invoice_id',$this->invoice_id)->first();
        return view('ticket.ticket', compact('invoice'));
    }

    //function to generate pdf
    public function generatePdf($invoice_id) {
        $invoices = Payment::all();
        $this->invoice_id = $invoice_id;
        $invoice = Payment::where('invoice_id',$this->invoice_id)->first();
        $pdf = PDF::loadView('ticket.ticket', compact('invoices', 'invoice'))->setOptions(['defaultFont' => 'Arial']);
        return $pdf->download('ticket.pdf');
    }

    
}
