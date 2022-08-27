<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model as Eloquent;
use App\Models\Project;
use App\Models\User;
use Carbon\Carbon;


class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        'number', 'description_t', 'deadline_t', 'project_id','user_id','completed_at'
    ];
    
    public function getproject()
    {
        return $this->belongsTo(Project::class, 'project_id', 'id');
    }
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
    public function getUser()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function isCompleted()
    {
        return $this->completed_at!==null;
    }

    public function isToday()
    {
        $mytime = Carbon::now();
        $mytime->toDateString();
        
        
        return $this->deadline_t== date_format(date_create($mytime),"Y-m-d");
    }
}
