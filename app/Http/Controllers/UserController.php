<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function show($id)
    {
        $user = User::findorFail($id);
        //dd($user);
        return view('users.show', compact('user'));
    }
}
