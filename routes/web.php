<?php

use Illuminate\Support\Facades\Route;
use App\jmgenyPermisos\models\Role;
use App\jmgenyPermisos\models\Permission;
use Illuminate\Support\Facades\Gate;
use App\User;




Route::get('/test', function(){
	
	$user = User::find(1);

	// Gate::authorize('haveaccess','role.index');
	// return $user->havePermission('role.index');
	return $user;

})->name('test');

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

Route::get('/', function () {
    
    // $roles = Role::orderBy('id','desc')->paginate(10);
    // return view('role.index',compact('roles'));
    return view('welcome');
    
});

Auth::routes();

	Route::get('/home', 'HomeController@index')->name('home');


	Route::resource('/role','RoleController')->names('role');
	Route::resource('/user','UserController')->except(['create','store'])->names('user');