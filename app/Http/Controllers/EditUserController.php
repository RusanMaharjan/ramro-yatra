<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class EditUserController extends Controller
{
    //function for getting all users
    public function getUsers() {
        $users = User::orderBy('id', 'Asc')->get();
        return view('admin.users.allUser', compact('users'));
    }

    //function for editing user
    public function editUser($id) {
        $user = User::find($id);
        return view('admin.users.updateUserRole', compact('user'));
    }

    //function for updating user data
    public function updateUser(Request $request) {
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->roles = $request->roles;
        $user->save();
        return back()->with('message', 'User updated successfully.');
    }
}
