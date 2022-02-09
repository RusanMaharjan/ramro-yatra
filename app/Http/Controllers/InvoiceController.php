<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index() {
        return view('payment.payment');
    }

    public function paymentDetails() {
        return view('payment.paymentDetails');
    }
}
