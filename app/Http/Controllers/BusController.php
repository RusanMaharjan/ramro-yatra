<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusController extends Controller
{
    public function addBus() {
        return view('admin.bus.addBus');
    }

    public function getBus() {
        return view('admin.bus.allBus');
    }

    public function editBus() {
        return view('admin.bus.editBus');
    }
}
