<?php

namespace App\Http\Controllers;

use App\Models\Payment;

class TicketController extends Controller
{
    public function index($invoice_id) {
        $this->invoice_id = $invoice_id;
        $invoice = Payment::where('invoice_id',$this->invoice_id)->first();
        return view('ticket.ticket', compact('invoice'));
    }

    
}
