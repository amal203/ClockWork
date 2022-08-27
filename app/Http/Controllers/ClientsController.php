<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Client; 
use App\Models\Project; 


// $getProject = Client::find(1)->getProject;
 
// foreach ($getProject as $client) {
// //
// }


class ClientsController extends Controller
{
    public function index(Request $request)
    {
       $Clients = Client::all();
       if($request->input('isearch')){
        $Clients = DB::table('clients')
        ->where('name', 'like', "%" . $request->isearch . "%")
        ->get();}

        

        return view('admin.clientindex', ['Clients' =>$Clients]);
    }

    // public function dropdownindex()
    // {
    //    $Clients = Client::all();
       
    //     return (['Clients' =>$Clients]);
    // }

    public function uindex(Request $request)
    {
       $Clients = Client::all();
       $Clients = Client::all();
       if($request->input('isearch')){
        $Clients = DB::table('clients')
        ->where('name', 'like', "%" . $request->isearch . "%")
        ->get();}
        

        return view('user.clientindex', ['Clients' =>$Clients]);
    }
    

    public function show ($id)
    {
        $client = Client::find($id);
        $cgetProject = Client::find($id)->cgetProject()->get()->sortBy("updated_at");
        return view('admin.clientshow', ['client' => $client,'cgetProject' => $cgetProject]);
    }
    public function ushow ($id)
    {
        $client = Client::find($id);
        $cgetProject = Client::find($id)->cgetProject()->get()->sortBy("updated_at");
        return view('user.clientshow', ['client' => $client,'cgetProject' => $cgetProject]);
    }
 


    public function create()
    {
        return view('admin.clientadd');
    }

    public function store()
    {
        request()->validate([
            'name' => 'required',
            'num_phone' => 'required', 
            'adress' => 'required' , 
            'mail' => 'required',
            

        ]);

        Client::create([
            'name' => request('name'),
            'num_phone'=> request('num_phone'),
            'adress'=> request('adress'), 
            'mail'=> request('mail'),
           
        ]);

        return redirect('/clientindex')->with('success', 'Client added with success:)');   
        
    }

    public function edit($id)

    {   $client = Client::find($id);
        
        return view('admin.clientupdate', ['client' => $client]);
    }



    public function update( Client $client)
    {
        request()->validate([
            'name' => 'required',
            'num_phone' => 'required', 
            'adress' => 'required' , 
            'mail' => 'required',

        ]);

        $client->update([
            'name' => request('name'),
            'num_phone'=> request('num_phone'),
            'adress'=> request('adress'), 
            'mail'=> request('mail'),
           
        ]);

        return redirect('/clientindex');
    }



    
    public function destroy(Client $client)
    {   

        $cgetProject = $client->cgetProject()->delete();
        $client->delete();
       
        return redirect('/clientindex')->with('flash_message', 'Client deleted!');  
        

        
        
    }
}

