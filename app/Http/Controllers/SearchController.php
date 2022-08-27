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

// class SearchController extends Controller
// {

//     public function search(Request $request)
//      {
//     //     $data = \DB::table('projects');

//     //     if( $request->input('search')){
//     //         $data = $project->where('title', 'LIKE', "%" . $request->search . "%");
//     //         // $data = $data->get();


//     //     }
        
//     if($request->input('isearch')){
//     $Projects = DB::table('projects')
//                 ->where('title', 'like', "%" . $request->isearch . "%")
//                 ->get();
                     
//         return view('admin.projectindex', ['Projects'=> $Projects]);}
                
    
//         elseif($request->input('isearch')){
//             $Clients = DB::table('clients')
//             ->where('name', 'like', "%" . $request->isearch . "%")
//             ->get();

           
//         return view('admin.clientindex', ['Clients'=> $Clients]);}
           

        
    
   
//         elseif($request->input('isearch')){
//          $Users = DB::table('users')
//          ->where('name', 'like', "%" . $request->isearch . "%")
//          ->get();
//           return view('admin.userindex', ['Users'=> $Users]);}





//         else{
    
//         return  redirect()->back();
//     }



//    }
//   }





