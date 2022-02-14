<?php

namespace App\Http\Controllers;

use App\Models\Seat;
use App\Models\User;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index() {
        $seats = Seat::all();
        $users = User::all();
        return view('payment.payment', compact('seats', 'users'));
    }

    public function paymentDetails() {
        return view('payment.paymentDetails');
    }
}
