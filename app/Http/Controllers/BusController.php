<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\Operator;
use App\Models\Route;
use Illuminate\Http\Request;

class BusController extends Controller
{
    //function to display Bus page
    public function addBus() {
        $routes = Route::all();
        $operators = Operator::all();
        return view('admin.bus.addBus',compact('routes','operators'));
    }

    //function for adding bus data in database
    public function createBus(Request $request) {
        $request->validate([
            'bus_name' => 'required',
            'facilities' => 'required',
            'time' => 'required',
            'bus_number' => 'required',
            'date' => 'required',
            'price' => 'required',
            'driver_name' => 'required',
            'seat' => 'required',
            'route_id' => 'required',
            'operator_id' => 'required',
            'img' => 'required'
        ]);
        $buses = new Bus();
        $buses->bus_name = $request->bus_name;
        $buses->facilities = $request->facilities;
        $buses->time = $request->time;
        $buses->date = $request->date;
        $buses->price = $request->price;
        $buses->driver_name = $request->driver_name;
        $buses->bus_number = $request->bus_number;
        $buses->seat = $request->seat;
        $buses->route_id = $request->route_id;
        $buses->operator_id = $request->operator_id;

        $img = $request->file;
        $imageName = time().'.'.$img->getClientoriginalExtension();
        $request->file->move('img',$imageName);
        $buses->img = $imageName;

        $buses->save();
        return back()->with('message', 'Bus added successfully;');

    }

    public function getBus() {
        return view('admin.bus.allBus');
    }

    public function editBus() {
        return view('admin.bus.editBus');
    }
}
