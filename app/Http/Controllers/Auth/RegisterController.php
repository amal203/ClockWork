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
     * 

   
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','isAdmin']);
    }

    public function create()
    {
        return view('admin.useradd');
    }

    public function store()
    {
        request()->validate([
            'name'=> 'required',
            'email'=> 'required',
            'password'=> ['required', 'string', 'min:8', 'confirmed'],
            'post'=> 'required',
            'gender'=> 'required',
            'adress'=> 'required',
            'birthdate'=> 'required',
            'avatar'=> 'nullable',
            'phone_number'=> 'required',


        ]);
        User::create([
            'name'  => request('name'),
            'email'=> request('email'),
            'password'=> request('password'),
            'post' => request('post'),
            'gender'=> request('gender'),
            'adress'=> request('adress'),
            'birthdate'=> request('birthdate'),
            'avatar'=> request('avatar'),
            'phone_number'=>request('phone_number'),
           
        ]);

        return redirect('/userindex');
        
    
    }
}