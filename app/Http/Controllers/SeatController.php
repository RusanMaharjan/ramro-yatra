<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\Seat;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SeatController extends Controller
{
    //function to show add seat page and to get data of added seat by user
    public function addSeat($bus_id) {
        $this->bus_id = $bus_id;
        $bus = Bus::where('bus_id',$this->bus_id)->first();
        $seats = Seat::orderBy('created_at', 'DESC')
            ->where('user_id', Auth::user()->id)
            ->whereDate('created_at', date('Y-m-d'))
            ->get();
        return view('user.seat', compact('bus', 'seats'));
    }
    
    //function to add seat details of user to database
    public function createSeat(Request $request) {
        //validate method for validating seat
        $request->validate([
            'selected_seat' => 'required',
            'total_price' => 'required'
        ]);
        $seats = new Seat();
        $seats->bus_name = $request->bus_name;
        $seats->route = $request->route;
        $seats->operator = $request->operator;
        $seats->selected_seat = $request->selected_seat;
        $seats->price = $request->price;
        $seats->total_price = $request->total_price;
        $seats->bus_id = $request->bus_id;
        $seats->user_id = $request->user_id;
        $seats->save();
        $bus = Bus::where('bus_id', $seats->bus_id)->first();
        $bus->seat = $bus->seat - $request->selected_seat;
        $bus->save();
        return back()->with('message', 'Seat details added to your record successfully.');
    }
    
    //function to cancel seat
    public function cancelSeat($seat_id) {
        Seat::where('seat_id',$seat_id)->delete();
        return back()->with('cancelled', 'Seat Cancelled.');
    }

    //function to go to payment page
    public function goToPayment($seat_id) {
        $this->seat_id = $seat_id;
        $seat = Seat::where('seat_id', $this->seat_id)->first();
        $seats = Seat::all();
        $users = User::all();
        return view('payment.payment', compact('seat', 'seats', 'users'));
    }
}
