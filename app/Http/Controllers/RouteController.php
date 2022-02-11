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
        //This is used to validate fields
        $request->validate([
            'from' => 'required',
            'to' => 'required'
        ]);

        //$route = new Route(); -> this line will make new object for route
        $route = new Route();
        $route->from = $request->from;
        $route->to = $request->to;
        $route->save();
        return back()->with('message','Route added successfully.');
    }

    //function to get all routes
    public function getRoute() {
        $routes = Route::orderBy('route_id', 'ASC')->get();
        return view('admin.route.allRoute',compact('routes'));
    }

    //function to edit route
    public function editRoute($route_id) {
        $route = Route::find($route_id);
        return view('admin.route.editRoute', compact('route'));
    }

    //function for updating route
    public function updateRoute(Request $request) {
        $request->validate([
            'from' => 'required',
            'to' => 'required'
        ]);

        $route = Route::find($request->route_id);
        $route->from = $request->from;
        $route->to = $request->to;
        $route->save();
        return back()->with('message', 'Route updated successfully.');
    }

    //function to delete route
    public function deleteRoute($route_id) {
        Route::where('route_id', $route_id)->delete();
        return back()->with('message', 'Route deleted successfully.');
    }
}
