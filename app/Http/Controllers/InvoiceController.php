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
            'address' => 'required',
            'city' => 'required',
            'province' => 'required',
            'country' => 'required',
            'pincode' => 'required',
        ]);
        $payment = new Payment();
        $payment->user_id = $request->user_id;
        $payment->seat_id = $request->seat_id;
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
        return redirect('paymentDetails');
        // return back()->with('message', 'Payment Successfull.');
    }

    public function paymentDetails() {
        $payments = Payment::orderBy('created_at','DESC')->where('user_id',Auth::user()->id)->get();
        return view('payment.paymentDetails',compact('payments'));
    }
}
