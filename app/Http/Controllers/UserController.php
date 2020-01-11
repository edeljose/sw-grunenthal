<?php

namespace Grunenthal\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Support\Facades\View;

use Illuminate\Support\Facades\Auth;

use Grunenthal\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return View::make('user/validation', compact('users'));
    }
    
}
