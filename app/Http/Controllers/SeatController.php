<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\Seat;
use Illuminate\Http\Request;

class SeatController extends Controller
{
    public function addSeat($bus_id) {
        $this->bus_id = $bus_id;
        $bus = Bus::where('bus_id',$this->bus_id)->first();
        return view('user.seat', compact('bus'));
    }
    
    public function createSeat(Request $request) {
        $seats = new Seat();
        $seats->bus_name = $request->bus_name;
        $seats->route = $request->route;
        $seats->operator = $request->operator;
        $seats->selected_seat = $request->selected_seat;
        $seats->price = $request->price;
        $seats->total_price = $request->total_price;
        $seats->bus_id = $request->bus_id;
        $seats->save();
        return back()->with('message', 'Seat details added to your record successfully.');
    }
}
