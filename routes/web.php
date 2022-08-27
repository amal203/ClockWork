<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\dashboardController;









/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes(['register'=>false]);


// Route::get('useradd', function () {
//     return view('admin.useradd');
// });  
// Auth::routes();

Route::get('login', function () {
    return view('auth.login');
});  

Route::get('lo', function () {
    return view('login');
});  

Route::get('login2', function () {
    return view('auth.login2');
});  


Route::get('forgot-password', function () {
    return view('forgot-password');
});  

Route::prefix('')->middleware(['auth','isAdmin'])->group(function(){

    Route::get('/projectindex', [ProjectsController::class, 'index']);
Route::post('/projectindex', [ProjectsController::class, 'store']);
Route::get('/projectadd', [ProjectsController::class, 'create']);

Route::get('/projectindex/{project}/show', [ProjectsController::class, 'show']);

Route::get('/projectindex/{project}/edit', [ProjectsController::class, 'edit']);
Route::put('/projectindex/{project}', [ProjectsController::class, 'update']);
Route::delete('/projectindex/{project}', [ProjectsController::class, 'destroy']);

Route::get('/clientindex/{client}/projectindex/{project}/edit', [ProjectsController::class, 'cpedit']);
Route::put('/clientindex/{client}/projectindex/{project}', [ProjectsController::class, 'cpupdate']);
Route::get('/clientindex/{client}/projectindex/{project}', [ProjectsController::class, 'cpupdate']);
Route::delete('/clientindex/{client}/projectindex/{project}', [ProjectsController::class, 'cpdestroy']);
Route::get('/clientindex/{client}/projectindex/{project}', [ProjectsController::class, 'cpdestroy']);



Route::get('/clientindex/{client}/projectindex', [ProjectsController::class, 'cpindex']);



//admintask//


Route::get('/projectindex/{project}/ptaskindex', [TasksController::class, 'pindex']);
Route::get('/alltaskindex', [TasksController::class, 'index']);

// Route::get('/projectindex/{project}/uptaskindex', [TasksController::class, 'upindex']);

Route::post('/projectindex/{project}/ptaskindex', [TasksController::class, 'store']);
//Route::post('/projectindex/{project}/taskindex', [TasksController::class, 'savetask']);
Route::get('/projectindex/{project}/ptaskadd', [TasksController::class, 'pcreate']);

Route::get('/projectindex/{project}/ptaskindex/{task}/show', [TasksController::class, 'show']);

Route::get('/projectindex/{project}/ptaskindex/{task}/edit', [TasksController::class, 'edit']);
Route::put('/projectindex/{project}/ptaskindex/{task}', [TasksController::class, 'update']);
Route::delete('/projectindex/{project}/ptaskindex/{task}', [TasksController::class, 'destroy']);
Route::patch('/projectindex/{project}/ptaskindex/{task}', [TasksController::class, 'takecom']);
Route::patch('/projectindex/{project}/ptaskindex/{task}', [TasksController::class, 'takecomall']);



//adminuser//
Route::get('/userindex', [UsersController::class, 'index']);
Route::post('/userindex', [UsersController::class, 'store']);
Route::get('/useradd', [UsersController::class, 'create']);
Route::get('/userindex/{user}/edit', [UsersController::class, 'edit']);
Route::put('/userindex/{user}', [UsersController::class, 'update']);
Route::delete('/userindex/{user}', [UsersController::class, 'destroy']);


// adminclient//

Route::get('/clientindex', [ClientsController::class, 'index']);
Route::post('/clientindex', [ClientsController::class, 'store']);
Route::get('/clientadd', [ClientsController::class, 'create']);

Route::get('/clientindex/{client}/show', [ClientsController::class, 'show']);

Route::get('/clientindex/{client}/edit', [ClientsController::class, 'edit']);
Route::put('/clientindex/{client}', [ClientsController::class, 'update']);
Route::delete('/clientindex/{client}', [ClientsController::class, 'destroy']);


Route::get('acceuil', function () {
    return view('layout.temp');
});




Route::get('/dashboard', [dashboardController::class, 'dash']);



Route::get('top', function () {
    return view('layout.topbar');
});  





// Route::post('/userindex', [RegisterController::class, 'store']);
// Route::get('/useradd', [RegisterController::class, 'create']);

});





 //user//

Route::get('/uuserindex', [UsersController::class, 'uindex']);
Route::get('/uuserondex/{project}/show', [UsersController::class, 'ushow']);


Route::get('/uprojectindex', [ProjectsController::class, 'uindex']);
Route::get('/uprojectindex/{project}/show', [ProjectsController::class, 'ushow']);

Route::get('/uprojectindex/{project}/uptaskindex', [TasksController::class, 'upindex']);
Route::get('/yourtasks', [TasksController::class, 'yourtasks']);

Route::get('/utaskindex/{task}/show', [TasksController::class, 'ushow']);
Route::get('/uprojectindex/{project}/show', [ProjectsController::class, 'ushow']);
Route::get('/uclientindex/{project}/show', [ClientsController::class, 'ushow']);

Route::get('/uclientindex/{client}/projectindex', [ProjectsController::class, 'ucpindex']);
Route::patch('/uprojectindex/{project}/uptaskindex/{task}', [TasksController::class, 'utakecom']);
Route::patch('/uprojectindex/{project}/uptaskindex/{task}', [TasksController::class, 'utakecomall']);

Route::patch('/yourtasks/{task}', [TasksController::class, 'utakecom2']);
Route::get('/ualltaskindex', [TasksController::class, 'uindex']);






/*
Route::get('/taskindex', function () {
    return view('admin.taskindex');
});

Route::get('/taskadd', function () {
    return view('admin.taskadd');
});

Route::get('/taskupdate', function () {
    return view('admin.taskudate');
});*/




 //userclient//
Route::get('/uclientindex', [ClientsController::class, 'uindex']);

Route::get('/login', function () {
    return view('auth.login');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

