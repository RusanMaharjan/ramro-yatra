<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\Operator;
use App\Models\Route;
use Carbon\Carbon;
use Illuminate\Http\Request;
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

    public function searchBus(Request $request) {
        $search = $request['search'] ?? "";
        $search1 = $request['search1'] ?? "";
        $search2 = $request['search2'] ?? "";
        $search3 = $request['search3'] ?? "";
        if($search != "") {
            $buses = Bus::where('bus_name', 'LIKE', "%$search%")->get();
        }elseif ($search1 != "") {
            $buses = Bus::where('time', 'LIKE', "%$search1")->get();
        }elseif ($search2 != "") {
            $buses = Bus::where('price', 'LIKE', "%$search2")->get();
        }elseif ($search3 != "") {
            $buses = Bus::where('date', 'LIKE', "%$search3")->get();
        }else {
            $buses = Bus::orderBy('bus_id', 'Asc')->get();
        }
        return view('user.searchBus', compact('buses'));
    }
}
