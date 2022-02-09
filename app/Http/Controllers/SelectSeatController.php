<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SelectSeatController extends Controller
{
    public function selectSeat() {
        return view('user.busDetails');
    }
}
