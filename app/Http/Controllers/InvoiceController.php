<?php

namespace App\Http\Controllers;

use App\Models\Payment;
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

    public function createPayment(Request $request) {
        $request->validate([
            'address' => 'required',
            'city' => 'required',
            'province' => 'required',
            'country' => 'required',
            'pincode' => 'required'
        ]);
        $payment = new Payment();
        $payment->user_id = $request->user_id;
        $payment->seat_id = $payment->seat_id;
        $payment->name = $request->name;
        $payment->email = $request->email;
        $payment->phone = $request->phone;
        $payment->address = $request->address;
        $payment->city = $request->city;
        $payment->province = $request->province;
        $payment->country = $request->country;
        $payment->pincode = $request->pincode;
        $payment->bus_name = $request->bus_name;
        $payment->selected_seat = $request->selected_seat;
        $payment->total_price = $request->total_price;
        $payment->payment_id = $request->payment_id;
        $payment->save();
        return back()->with('message', 'Payment Successfull.');
    }

    public function paymentDetails() {
        return view('payment.paymentDetails');
    }
}
