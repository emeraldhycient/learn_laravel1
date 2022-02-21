<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\Learnblade;
use App\Http\Controllers\UsersController;

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
    return view('hello');
});

/*Route::get('about/{id}',function ($id){
    $arr = array(
        ['name' => "ade",'id'=>$id]
    );

   return View('about',['arr' => $arr]);
});
*/


Route::get('about/{id}',[Users::class,'about']);


Route::get('/learnblade',[Learnblade::class,'learnblade']);

Route::get('/login',[usersController::class,'index']);
Route::post('/login',[usersController::class,'login']);

