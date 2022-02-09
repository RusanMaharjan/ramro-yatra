<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function searchBus() {
        return view('user.searchBus');
    }
}
