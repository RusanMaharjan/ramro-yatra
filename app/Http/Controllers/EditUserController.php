<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditUserController extends Controller
{
    public function editUser() {
        return view('admin.users.updateUserRole');
    }

    public function getUsers() {
        return view('admin.users.allUser');
    }
}
