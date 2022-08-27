<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Models\Project; 
use App\Models\Client;
use App\Models\Task; 


class dashboardController extends Controller
{
    public function dash(Request $request)
    {
        $nbtaskdone = DB::table('tasks')
                        ->whereNotNull('completed_at')
                        ->count();
     $nballtask = DB::table('tasks')
     ->count();      
     
     $perctask=(($nbtaskdone*100)/$nballtask);
     $perctask=round($perctask);

     
     
     return view('admin.dashboard', ['perctask' => $perctask]);
        


    }

}