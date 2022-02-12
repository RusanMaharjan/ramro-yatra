<?php

namespace App\Http\Controllers;

use App\Models\Seat;
use Illuminate\Http\Request;

class SeatController extends Controller
{
    public function createSeat(Request $request) {

        $seats = new Seat();
        $seats->selected_seat = $request->selected_seat;
        $seats->total_price = $request->total_price;
        $seats->bus_id = $request->bus_id;
        $seats->save();
        return back()->with('message', 'Seat details added to your record successfully.');

    }
}
