<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\Operator;
use App\Models\Route;

class HomeController extends Controller
{
    public function index()
    {
        $buses = Bus::all();
        $routes = Route::all();
        $operators = Operator::all();
        return view('user.index', compact('buses', 'routes', 'operators'));
    }

    public function searchBus() {
        return view('user.searchBus');
    }
}
