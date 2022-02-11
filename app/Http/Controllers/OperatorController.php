<?php

namespace App\Http\Controllers;

use App\Models\Operator;
use Illuminate\Http\Request;

class OperatorController extends Controller
{
    //function to display operator page
    public function addOperator() {
        return view('admin.operator.addOperator');
    }

    //function for adding route in database
    public function createOperator(Request $request) {
        $request->validate([
            'operator_name' => 'required|unique:operators,operator_id'
        ]);

        $operators = new Operator();
        $operators->operator_name = $request->operator_name;
        $operators->save();
        return back()->with('message', 'Operator added successfully.');
    }

    //function for getting all operator
    public function getOperator() {
        $operators = Operator::orderBy('operator_id', 'Asc')->get();
        return view('admin.operator.allOperator', compact('operators'));
    }

    //function for edit operator
    public function editOperator($operator_id) {
        $operator = Operator::find($operator_id);
        return view('admin.operator.editOperator', compact('operator'));
    }

    //function for updating operator
    public function updateOperator(Request $request) {
        $request->validate([
            'operator_name' => 'required'
        ]);
        $operator = Operator::find($request->operator_id);
        $operator->operator_name = $request->operator_name;
        $operator->save();
        return back()->with('message', 'Operator updated successfully.');
    }

    //function for deleting operator
    public function deleteOperator($operator_id) {
        Operator::where('operator_id',$operator_id)->delete();
        return back()->with('message', 'Operator deleted successfully.');
    }
}
