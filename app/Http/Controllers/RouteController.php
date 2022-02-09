<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function addRoute() {
        return view('admin.route.addRoute');
    }

    public function getRoute() {
        return view('admin.route.allRoute');
    }

    public function editRoute() {
        return view('admin.route.editRoute');
    }
}
