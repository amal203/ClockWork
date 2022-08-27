<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Models\Project; 
use App\Models\Client;
use App\Models\Task; 

 


// $getTask = Project::find(1)->getTask;
 
//     foreach ($getTask as $task) {
//     //
// }

class ProjectsController extends Controller
{
    public function index(Request $request)
    {
        $Projects = Project::all();
        if($request->input('isearch')){
            $Projects = DB::table('projects')
                        ->where('title', 'like', "%" . $request->isearch . "%")
                        ->get();}
                             
                

     return view('admin.projectindex', ['Projects' => $Projects]);
    }

    public function uindex(Request $request)
    {
      
        $Projects = Project::all();
        if($request->input('isearch')){
            $Projects = DB::table('projects')
                        ->where('title', 'like', "%" . $request->isearch . "%")
                        ->get();}
                             
        

        return view('user.projectindex', ['Projects' => $Projects]);
    }
    
    
    public function cpindex($id,Request $request)
    {   
        $client = Client::find($id);

        $cgetProject = Client::find($id)->cgetProject()->get()->sortBy("id");

       // $profile = Profile::find(1);
       if($request->input('isearch')){
        $cgetProject = DB::table('projects')
                    ->where('title', 'like', "%" . $request->isearch . "%")
                    ->where('client_id',$client->id)
                    ->get();}
                         
       
         return view('admin.cprojectindex',['client_id' => $id,'cgetProject' => $cgetProject,'client' => $client]);
    
 
    }

    public function ucpindex($id,Request $request)
    {   
        $client = Client::find($id);

        $cgetProject = Client::find($id)->cgetProject()->get()->sortBy("id");

       // $profile = Profile::find(1);
       if($request->input('isearch')){
        $cgetProject = DB::table('projects')
                    ->where('title', 'like', "%" . $request->isearch . "%")
                    ->where('client_id',$client->id)
                    ->get();}
                         
       
         return view('user.cprojectindex',['client_id' => $id,'cgetProject' => $cgetProject,'client' => $client]);
    
 
    }

  

    public function create()
        
    {  

        $Clients = Client::all();
        return view('admin.projectadd',['Clients' =>$Clients]);
    }


    public function show ($id)
    {
        $project = Project::find($id);
        $getTask = Project::find($id)->getTask()->get()->sortBy("number");
        $getClient = Project::find($id)->getClient()->get();
        // $Clients = Client::all();

    


        //$client = Client::find($project->client_id);
       // $cgetProject = Client::find($project->client_id)->cgetProject()->get();
        // $getClient = DB::select('select * from clients where id = ?', [$project->client_id]);

    
        return view('admin.projectshow', ['project' => $project,'getTask' => $getTask,'getClient' =>$getClient]);
        //['client_id' => $id,'cgetProject' => $cgetProject],['getClient' => $getClient]
    }

    public function ushow ($id)
    {
        $project = Project::find($id);
        $getTask = Project::find($id)->getTask()->get()->sortBy("number");
        $getClient = Project::find($id)->getClient()->get();

        return view('user.projectshow', ['project' => $project,'getTask' => $getTask,'getClient' =>$getClient]);
    }

    public function store()
    {   
        
        
        request()->validate([
            'title' => 'required',
            'description' => 'required', 
            'client_id' => 'nullable', 
            'deadline' => 'required',
            

        ]);

        Project::create([
            'title' => request('title'),
            'description'=> request('description'),
            'client_id'=> request('client_id'), 
            'deadline'=> request('deadline'),
            
        ]);
            
            
            // $client = Client::find('client_id');

            // $cgetProject = Client::find('client_id')->cgetProject()->get();
        
        


        // return view('projectindex'->with('success', 'Project added with success:)');   
        return redirect('/projectindex'); 

        
    }

    public function edit($id)

    {   $project = Project::find($id);
        $getClient = Project::find($id)->getClient()->get();
        $Clients = Client::all();


        
        return view('admin.projectupdate', ['project' => $project,'getClient' =>$getClient,'Clients' =>$Clients]);
    }



    public function update( Project $project)
    {
        request()->validate([
            'title' => 'required',
            'description' => 'required', 
            'client_id' => 'nullable' , 
            'deadline' => 'required',

        ]);

        $project->update([
            'title' => request('title'),
            'description'=> request('description'),
            'client_id'=> request('client_id'), 
            'deadline'=> request('deadline'),
           
        ]);

        return redirect('/projectindex');
    }


//     public function update(Request $request, $id)
// {
//         $validatedData = $request->validate([
//             'title' => 'required|max:255',
//             'description' => 'required',
//             'client' => 'required'
//         ]);
//         Game::whereId($id)->update($validatedData);

//         return redirect('/projectindex/update')->with('success', 'Game Data is successfully updated');
// }

    
    public function destroy(Project $project)
    {

        $getTask = $project->getTask()->delete();
        $project->delete();
        
       
        return redirect('/projectindex')->with('flash_message', 'Project deleted!');  
        

        
        
    }


    public function cpedit($client_id,$id)

    {   $project = Project::find($id);
        $getClient = Project::find($id)->getClient()->get();
        $Clients = Client::all();


        
        return view('admin.cprojectupdate', ['client_id' => $client_id,'project' => $project,'getClient' =>$getClient,'Clients' =>$Clients]);
    }



    public function cpupdate($client_id, Project $project,Request $request)
    {
        request()->validate([
            'title' => 'required',
            'description' => 'required', 
            'client_id' => 'nullable' , 
            'deadline' => 'required',

        ]);

        $project->update([
            'title' => request('title'),
            'description'=> request('description'),
            'client_id'=> request('client_id'), 
            'deadline'=> request('deadline'),
           
        ]);
        $client = Client::find($client_id);

        $cgetProject = Client::find($client_id)->cgetProject()->get()->sortBy("id");

       // $profile = Profile::find(1);
       if($request->input('isearch')){
        $cgetProject = DB::table('projects')
                    ->where('title', 'like', "%" . $request->isearch . "%")
                    ->where('client_id',$client->id)
                    ->get();}
                         
       
         return view('admin.cprojectindex',['client_id' => $client_id,'cgetProject' => $cgetProject,'client' => $client]);
    
    }



    
    public function cpdestroy($client_id,Project $project,Request $request)
    {

        $getTask = $project->getTask()->delete();
        $project->delete();
        $client = Client::find($client_id);

        $cgetProject = Client::find($client_id)->cgetProject()->get()->sortBy("id");

       // $profile = Profile::find(1);
       if($request->input('isearch')){
        $cgetProject = DB::table('projects')
                    ->where('title', 'like', "%" . $request->isearch . "%")
                    ->where('client_id',$client->id)
                    ->get();}


    

        return view('admin.cprojectindex',['client_id' => $client_id,'cgetProject' => $cgetProject,'client' => $client]);

        
       
        

        
        
    }

 
}
