<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function ticket() {
        return view('ticket.ticket');
    }
}
