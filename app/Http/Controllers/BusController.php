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
            'bus_name' => 'required|unique:buses',
            'facilities' => 'required',
            'time' => 'required',
            'bus_number' => 'required|unique:buses',
            'date' => 'required',
            'price' => 'required',
            'driver_name' => 'required',
            'seat' => 'required',
            'route_id' => 'required',
            'operator_id' => 'required',
        ]);
        $buses = new bus();
        $buses->bus_name = $request->bus_name;
        $buses->facilities = $request->facilities;
        $buses->time = $request->time;
        $buses->date = $request->date;
        $buses->price = $request->price;
        $buses->driver_name = $request->driver_name;
        $buses->bus_number = $request->bus_number;
        $buses->route_id = $request->route_id;
        $buses->operator_id = $request->operator_id;
        $buses->seat = $request->seat;
        
        //for requesting image type file
        $img = $request->file;
        $imageName=time().'.'.$img->getClientoriginalExtension();
        $request->file->move('img',$imageName);
        $buses->img=$imageName;

        $buses->save();
        return back()->with('message', 'Bus added successfully.');
    }

    //function to get data of all bus
    public function getBus() {
        $buses = Bus::orderBy('bus_id', 'Asc')->paginate(5);
        return view('admin.bus.allBus',compact('buses'));
    }

    //function to edit bus
    public function editBus($bus_id) {
        $bus = Bus::find($bus_id);
        $routes = Route::all();
        $operators = Operator::all();
        return view('admin.bus.editBus', compact('bus', 'routes', 'operators'));
    }

    //function to update bus details
    public function updateBus(Request $request) {
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
        ]);
        $bus = Bus::find($request->bus_id);
        $bus->bus_name = $request->bus_name;
        $bus->facilities = $request->facilities;
        $bus->time = $request->time;
        $bus->bus_number = $request->bus_number;
        $bus->date = $request->date;
        $bus->price = $request->price;
        $bus->driver_name = $request->driver_name;
        $bus->seat = $request->seat;
        $bus->route_id = $request->route_id;
        $bus->operator_id = $request->operator_id;

        //for requesting image type file
        $img = $request->file;
        if($img) {
            $imageName=time().'.'.$img->getClientoriginalExtension();
            $request->file->move('img',$imageName);
            $bus->img=$imageName;
        }

        $bus->save();
        return back()->with('message', 'Bus updated successfully.');
    }

    //function for deleting bus data
    public function deleteBus($bus_id) {
        Bus::where('bus_id', $bus_id)->delete();
        return back()->with('message', 'Bus deleted successfully.');
    }
}
