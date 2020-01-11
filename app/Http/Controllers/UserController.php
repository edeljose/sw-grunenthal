<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return \View::make('user/validation', compact('users'));
    }

    public function perfil()
    {
        $users = User::all();
        return \View::make('user/perfil', compact('users'));
    }
}
