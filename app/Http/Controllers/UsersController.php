<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User; 
use Illuminate\Support\Facades\Hash;


class UsersController extends Controller{
    public function index(Request $request)
    {   
        $Users = User::all();

        // $iduser= Auth::id();

        // if ($user->id==$iduser){
        // if (Auth::check()) {
       
        // }
        if($request->input('isearch')){
                     $Users = DB::table('users')
                     ->where('name', 'like', "%" . $request->isearch . "%")
                     ->get();
                      }
        
        
        return view('admin.userindex', ['Users' => $Users]);
    
    }

    public function uindex(Request $request)
    {
        $Users = User::all();
        if($request->input('isearch')){
            $Users = DB::table('users')
            ->where('name', 'like', "%" . $request->isearch . "%")
            ->get();
             }

        return view('user.userindex', ['Users' => $Users]);
    }
    

    public function show ($id)
    {
        $user = User::find($id);
        return view('admin.usershow', ['user' => $user]);
    }

    public function ushow ($id)
    {
        $user = User::find($id);
        return view('user.usershow', ['user' => $user]);
    }
 


    public function create()
    {
        return view('admin.useradd');
    }

    public function store(Request $request){
        
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8','confirmed'],
        ]);
        // request()->validate([
        //     'name'=> 'required',
        //     'email'=> 'required',
        //     'password'=> ['required', 'string', 'min:8', 'confirmed'],
        //     'post'=> 'required',
        //     'gender'=> 'nullable',
        //     'adress'=> 'required',
        //     'birthdate'=> 'required',
        //     'avatar'=> 'nullable',
        //     'phone_number'=> 'required',


        // ]);
        // User::create([
        //     'name'  => request('name'),
        //     'email'=> request('email'),
        //     'password'=> request('password'),
        //     'post' => request('post'),
        //     'gender'=> request('gender'),
        //     'adress'=> request('adress'),
        //     'birthdate'=> request('birthdate'),
        //     'avatar'=> request('avatar'),
        //     'phone_number'=>request('phone_number'),
           
        // ]);

        
        
        $inputs=$request->all();
    
        $inputs['password']=Hash::make($inputs['password']);
        User::create($inputs);
    
        return redirect('/userindex');
        
    }

    public function edit($id)

    {   $user = User::find($id);
        
        return view('admin.userupdate', ['user' => $user]);
    }



    public function update( Request $request,User $user)
    {
        request()->validate([

             'name' => ['required', 'string', 'max:255'],
            // 'email' => 'required', 
            'password' => ['required', 'string', 'min:8','confirmed'],
            'post'=> 'nullable',
            'gender'=> 'nullable',
            'adress'=> 'nullable',
            'birthdate'=> 'nullable',
            'avatar'=> 'nullable',
            'phone_number'=> 'nullable',

        ]);

        $user->update([
            'name'  => request('name'),
            // 'email'=> request('email'),
            'password'=> request('password'),
            'post' => request('post'),
            'gender'=> request('gender'),
            'adress'=> request('adress'),
            'birthdate'=> request('birthdate'),
            'avatar'=> request('avatar'),
            'phone_number'=> request('phone_number'),
           
        ]);

        

        return redirect('/userindex');
    }




    
    public function destroy(User $user)
    {
        $user->delete();
       
        return redirect('/userindex');  
        

        
        
    }


}