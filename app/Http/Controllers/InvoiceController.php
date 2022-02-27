<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Seat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvoiceController extends Controller
{
    // public function index() {
    //     $seats = Seat::all();
    //     $users = User::all();
    //     return view('payment.payment', compact('seats', 'users'));
    // }

    public function createPayment(Request $request) {
        $request->validate([
            
        ]);
        $payment = new Payment();
        //request payment data
        $payment->user_id = $request->user()->id;
        $payment->seat_id = $request->seat_id;
        $payment->name = $request->user()->name;
        $payment->email = $request->user()->email;
        $payment->phone = $request->user()->phone;
        $payment->bus_name = $request->bus_name;
        $payment->selected_seat = $request->selected_seat;
        $payment->total_price = $request->total_price;
        $payment->from = $request->from;-
        $payment->to = $request->to;
        $payment->operator = $request->operator;
        $payment->date = $request->date;
        $payment->payment_id = $request->payment_id;
        $payment->save();
        //show message after payment is successfull.
        return back()->with('message', 'Payment Successfull.');
    }

    public function paymentDetails() {
        $payments = Payment::orderBy('created_at','DESC')->where('user_id',Auth::user()->id)->get();
        return view('payment.paymentDetails',compact('payments'));
    }
}
