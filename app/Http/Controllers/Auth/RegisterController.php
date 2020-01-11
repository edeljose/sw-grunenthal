<?php

namespace Grunenthal\Http\Controllers\Auth;

use Grunenthal\Models\User;
use Grunenthal\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Input;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'names' => ['required', 'string', 'max:255'],
            'surnames' => ['required', 'string', 'max:255'],
            'age' => ['required','max:2'],
            //'image' => ['required','image','max:2048'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \Grunenthal\Models\User
     */
    protected function create(array $data)
    {
        $image = Input::file('image');
        $newName = rand() . '.' . $image->getClientOriginalExtension(); 
        $image->move(public_path('images'), $newName);

        return User::create([
            'names' => $data['names'],
            'surnames' => $data['surnames'],
            'age' => $data['age'],
            'image' => $newName,
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
