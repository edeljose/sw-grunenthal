<?php

namespace Grunenthal\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\View;

use Grunenthal\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all()->where('state_id','=',3);
        return View::make('user/validation', compact('users'));
    }
    public function perfil()
    {
        $users = User::all();
        return View::make('user/perfil');
    }
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back();  
    }
    public function editV($id)
    {
        $user = User::find($id);
        $user->state_id = 1;
        $user->save();
        return redirect('validation');
    }
}
