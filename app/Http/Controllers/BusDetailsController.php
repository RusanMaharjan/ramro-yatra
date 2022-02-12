<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\Seat;
use Illuminate\Http\Request;

class BusDetailsController extends Controller
{
    public function index($bus_id) {
        $this->bus_id = $bus_id;
        $bus = Bus::where('bus_id',$this->bus_id)->first();
        return view('user.busDetails', ['bus'=>$bus]);
    }

    
}
