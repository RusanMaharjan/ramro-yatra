<?php

namespace App\Http\Controllers;

use App\Models\Route;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    //function to display route page
    public function addRoute() {
        return view('admin.route.addRoute');
    }

    //function for adding route in database
    public function createRoute(Request $request) {
        $request->validate([
            'from' => 'required',
            'to' => 'required'
        ]);

        $route = new Route();
        $route->from = $request->from;
        $route->to = $request->to;
        $route->save();
        return back()->with('message','Route added successfully.');
    }

    public function getRoute() {
        // $routes = Route::orderBy('route_id', 'ASC')->get();
        return view('admin.route.allRoute');
    }

    public function editRoute() {
        return view('admin.route.editRoute');
    }
}
