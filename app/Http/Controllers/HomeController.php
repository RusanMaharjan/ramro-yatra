<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\Operator;
use App\Models\Route;
use Carbon\Carbon;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        //get all record of bus
        $buses = Bus::all();
        $count_bus = DB::table('buses')->count();

        //get all record of route
        $routes = Route::all();
        $count_route = DB::table('routes')->count();

        //get all record of operators
        $operators = Operator::all();
        
        //count users
        $count_users = DB::table('users')->count();

        //get record of current date
        $today_bus = Bus::whereDate('date', date('Y-m-d'))->get();
        return view('user.index', compact('buses', 'routes', 'operators', 'today_bus', 'count_bus', 'count_route', 'count_users'));
    }

    public function searchBus() {
        return view('user.searchBus');
    }
}
