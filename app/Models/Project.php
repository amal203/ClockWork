<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Task;
use Illuminate\Database\Eloquent\Model as Eloquent;
use App\Models\Client;


class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'description', 'client' , 'deadline' , 'client_id' ,
    ];
    
    protected $table = 'projects';
    protected $primaryKey = 'id';

    public function getTask(){
    return $this->hasMany(Task::class, 'project_id', 'id');
    }

    public function getClient()
    {
        return $this->belongsTo(Client::class, 'client_id', 'id');
    }



}
