<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Task;
use App\Models\Project;
use App\Models\User;
use Auth;

use Redirect;





class TasksController extends Controller
{ 



    public function index(Request $request)
    {   
        $getTask = Task::all()->sortBy("deadline_t");
        if($request->input('isearch')){
            $getTask = DB::table('tasks')
                        ->where('description_t', 'like', "%" . $request->isearch . "%")
                        ->get();}
                        // $task = Task::find($id);
                        // $project_id=$task->project_id;
                        // $project = Project::find($project_id);

        

        // return view('admin.alltask', ['Tasks' => $Tasks,'project_id' => $project_id,'project' => $project]);
                return view('admin.alltask', ['getTask' => $getTask]);


    }

    public function pindex($id,Request $request)
    {   
        $project = Project::find($id);

        $getTask = Project::find($id)->getTask()->get()->sortBy("deadline_t");

       // $profile = Profile::find(1);
        if($request->input('isearch')){
            $getTask = Project::find($id)->getTask()
                        ->where('description_t', 'like', "%" . $request->isearch . "%")
                        ->get();}
 
       
         return view('admin.taskindex',['project_id' => $id,'getTask' => $getTask,'project' => $project]);
       
    }     
       
        // $conn = db_connect();

        // $Tasks= $conn->query("select * from tasks where project_id ='$id'");
 
        // //  foreach ($getTask as $task) {
        // //     $Tasks = Task::all()->sortBy("number");
     
        // //  }

       
        

        // return view('admin.taskindex', ['Tasks' => $Tasks]);
    

        public function upindex($id,Request $request)
        {   
            $project = Project::find($id);

            $getTask = Project::find($id)->getTask()->get()->sortBy("deadline_t");
    
           // $profile = Profile::find(1);
           if($request->input('isearch')){
            $getTask = Project::find($id)->getTask()
                        ->where('description_t', 'like', "%" . $request->isearch . "%")
                        ->get();}
     
           
             return view('user.taskindex',['project_id' => $id,'getTask' => $getTask,'project' => $project]);
           
        }     
    public function uindex(Request $request)
    {
        $getTask = Task::all()->sortBy("deadline_t");
        if($request->input('isearch')){
            $getTask = DB::table('tasks')
                        ->where('description_t', 'like', "%" . $request->isearch . "%")
                        ->get();}
        
        

        return view('user.alltask', ['getTask' => $getTask]);
    }
    

    public function yourtasks(Request $request)
    {
        $Tasks = Task::all()->sortBy("deadline_t");
        $iduser= Auth::id();
        $getTask = User::find($iduser)->getTask()->get()->sortBy("deadline_t");
    
        // $profile = Profile::find(1);
        if($request->input('isearch')){
         $getTask = User::find($iduser)->getTask()
                     ->where('description_t', 'like', "%" . $request->isearch . "%")
                     ->get();}
  
        
        

        return view('user.yourtasks', ['getTask' => $getTask]);
    }

    public function show ($project_id,$id)
    {
        $task = Task::find($id);
        $getproject = Task::find($id)->getproject()->get();
        $getUser = Task::find($id)->getUser()->get();

        return view('admin.taskshow', ['project_id' => $project_id,'task' => $task,'getproject' => $getproject,'getUser' => $getUser]);
    }

    public function ushow ($id)
    {
        $task = Task::find($id);
        $getproject = Task::find($id)->getproject()->get();
        $getUser = Task::find($id)->getUser()->get();

        return view('user.taskshow', ['task' => $task,'getproject' => $getproject,'getUser' => $getUser]);
    }
 


    public function create()
    {
        $Users = User::all();

        return view('admin.taskadd',['Users' => $Users]);
    }
    
    
    public function pcreate($id)

    {
        $Users = User::all();
        $project = Project::find($id);
        return view('admin.ptaskadd',['project_id' => $id],['Users' => $Users]);
    }

//     public function savetask(Request $request, $id)
// {
//     $project = Project::find($id);

//     $project->getTask()->create([

//     'number' =>$request->number,
//     'description_t' => $request->description_t,
//     'deadline_t' => $request->deadline_t

//     // Saving related model
//     ]);
//     return Redirect::back();
// }
    
    public function store(Request $request,$id)
    
    {   
        
        $project = Project::find($id);
        request()->validate([
            'number' => 'required',
            'description_t' => 'required', 
            'deadline_t' => 'required',
            'user_id' => 'nullable', 

           

        ]);

        Task::create([
            'number' => request('number'),
            'description_t'=> request('description_t'),
            'deadline_t'=> request('deadline_t'),
            'user_id'=> request('user_id'),
            'project_id' => $request->input("project_id",$id),
        ]);
        $getTask = Project::find($id)->getTask()->get();
        if($request->input('isearch')){
            $getTask = Project::find($id)->getTask()
                        ->where('description_t', 'like', "%" . $request->isearch . "%")
                        ->get();}
 



        return view('admin.taskindex',['project_id' => $id,'getTask' => $getTask,'project' => $project]);
        
    }

    public function edit($project_id,$id)

    {   $task = Task::find($id);
        $Users = User::all();
        $getUser = Task::find($id)->getUser()->get();


        

        
        return view('admin.taskupdate', ['project_id' => $project_id,'task' => $task,'Users' => $Users,'getUser' => $getUser]);
    }



    public function update( $project_id,Task $task,Request $request )
    {
        request()->validate([
            'number' => 'required',
            'description_t' => 'required', 
            'deadline_t' => 'required',
            'user_id' => 'nullable',

        ]);

        $task->update([
            'number' => request('number'),
            'description_t'=> request('description_t'),
            'deadline_t' =>request('deadline_t'),
            'user_id'=> request('user_id'),
           
        ]);
        $project = Project::find($project_id);
        $getTask = Project::find($project_id)->getTask()->get();
        if($request->input('isearch')){
            $getTask = Project::find($id)->getTask()
                        ->where('description_t', 'like', "%" . $request->isearch . "%")
                        ->get();}
 
       return view('admin.taskindex',['project_id' => $project_id,'getTask' => $getTask,'project' => $project]);}

       public function takecom( $project_id,Task $task,Request $request )
    {
        
        

        $task->update([
                'completed_at' => now(),
            ]);
       


        $project = Project::find($project_id);
        $getTask = Project::find($project_id)->getTask()->get();
        if($request->input('isearch')){
            $getTask = Project::find($id)->getTask()
                        ->where('description_t', 'like', "%" . $request->isearch . "%")
                        ->get();}
 
       return view('admin.taskindex',['project_id' => $project_id,'getTask' => $getTask,'project' => $project]);

    }

    public function takecomall( $project_id,Task $task,Request $request )
    {
        
        

        $task->update([
                'completed_at' => now(),
            ]);
       


        $project = Project::find($project_id);
        $getTask = Project::find($project_id)->getTask()->get();
        if($request->input('isearch')){
            $getTask = Project::find($id)->getTask()
                        ->where('description_t', 'like', "%" . $request->isearch . "%")
                        ->get();}
 
       return view('admin.alltask',['project_id' => $project_id,'getTask' => $getTask,'project' => $project]);

    }

    public function utakecom2($id)
    {
        
        $task=Task::find($id);

        $task->update([
                'completed_at' => now(),
            ]);
       
 
       return redirect('/yourtasks');


    }

    

    public function utakecom( $project_id,Task $task,Request $request )
    {
        
             $iduser= Auth::id();

             if ($task->user_id==$iduser){
             $task->update([
                'completed_at' => now(),
            ]);
       
        $project = Project::find($project_id);
        $getTask = Project::find($project_id)->getTask()->get();
        if($request->input('isearch')){
            $getTask = Project::find($id)->getTask()
                        ->where('description_t', 'like', "%" . $request->isearch . "%")
                        ->get();}
 
       return view('user.taskindex',['project_id' => $project_id,'getTask' => $getTask,'project' => $project]); }

        else{
            
        $project = Project::find($project_id);
        $getTask = Project::find($project_id)->getTask()->get();
        if($request->input('isearch')){
            $getTask = Project::find($id)->getTask()
                        ->where('description_t', 'like', "%" . $request->isearch . "%")
                        ->get();}
            return view('user.taskindex',['project_id' => $project_id,'getTask' => $getTask,'project' => $project])->with('message','This is not your task!') ;
        }
       


    }

    public function utakecomall( $project_id,Task $task,Request $request )
    {
        
             $iduser= Auth::id();

             if ($task->user_id==$iduser){
             $task->update([
                'completed_at' => now(),
            ]);
       
        $project = Project::find($project_id);
        $getTask = Project::find($project_id)->getTask()->get();
        if($request->input('isearch')){
            $getTask = Project::find($id)->getTask()
                        ->where('description_t', 'like', "%" . $request->isearch . "%")
                        ->get();}
 
       return view('user.alltask',['project_id' => $project_id,'getTask' => $getTask,'project' => $project]); }

        else{
            
        $project = Project::find($project_id);
        $getTask = Project::find($project_id)->getTask()->get();
        if($request->input('isearch')){
            $getTask = Project::find($id)->getTask()
                        ->where('description_t', 'like', "%" . $request->isearch . "%")
                        ->get();}
            return view('user.alltask',['project_id' => $project_id,'getTask' => $getTask,'project' => $project])->with('message','This is not your task!') ;
        }
       


    }


//     public function update(Request $request, $id)
// {
//         $validatedData = $request->validate([
//             'title' => 'required|max:255',
//             'description' => 'required',
//             'client' => 'required'
//         ]);
//         Game::whereId($id)->update($validatedData);

//         return redirect('/taskindex/update')->with('success', 'Game Data is successfully updated');
// }

    
    public function destroy($project_id,$id,Request $request)
    {   $task = Task::find($id);
        $task->delete();
        $project = Project::find($project_id);
        $getTask = Project::find($project_id)->getTask()->get();
        if($request->input('isearch')){
            $getTask = Project::find($id)->getTask()
                        ->where('description_t', 'like', "%" . $request->isearch . "%")
                        ->get();}
 


    

        return view('admin.taskindex',['project_id' => $project_id,'getTask' => $getTask,'project' => $project]);
       
        // return redirect('/projectindex/{project}/taskindex
        // ')->with('flash_message', 'Task deleted!');  
    
        //return view('admin.taskindex',['project_id' => $id,'getTask' => $getTask]->with('flash_message', 'Task deleted!'));
    }

        

        
      
    
}
