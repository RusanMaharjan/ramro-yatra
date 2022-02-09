<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperatorController extends Controller
{
    public function addOperator() {
        return view('admin.operator.addOperator');
    }

    public function getOperator() {
        return view('admin.operator.allOperator');
    }

    public function editOperator() {
        return view('admin.operator.editOperator');
    }
}
