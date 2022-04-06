<?php

namespace App\Http\Controllers;

use App\Models\Payment;
class TicketController extends Controller
{
    // getting payment details id and go to ticket page
    public function index($invoice_id) {
        $this->invoice_id = $invoice_id;
        $invoice = Payment::where('invoice_id',$this->invoice_id)->first();
        return view('ticket.ticket', compact('invoice'));
    }    
}
