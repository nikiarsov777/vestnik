<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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

        return Validator::make($data,
            [
                'name' => ['required', 'string', 'max:255'],
                'school' => ['required', 'numeric', 'gt:0'],
                'group' => ['required', 'numeric', 'gt:0'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'min:8', 'confirmed'],
                'password_confirmation' => ['required', 'min:8'],
            ],
            [
                'school.gt' => 'Моля, изберете училище!',
                'school.required' => 'Моля, изберете училище!',
                'group.gt' => 'Моля, изберете паралелка!',
                'group.required' => 'Моля, изберете паралелка!',
                'email.required' => 'Моля, изберете ел. поща!',
                'email.unique' => 'Тази поща вече е заета!',
                'password.required' => 'Моля, въведете парола!',
                'password.confirmed' => 'Паролите не съвпадат!',
                'password_confirmation.required' => 'Моля, въведете парола за потвърждение!',
            ]
        );
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        dd($data);
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
