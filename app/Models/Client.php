<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;


class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'adress', 'num_phone' , 'mail' ,
    ];
    
    protected $table = 'clients';
    protected $primaryKey = 'id';


    // public function cgetProject(){
    // return $this->hasMany(Project::class, 'client_id', 'id');
    // }

    public function cgetproject()
    {
        return $this->hasMany(Project::class, 'client_id', 'id');
    }
}
