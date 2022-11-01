<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('login');
});


Route::get('create',[UserController::class,'create']);
Route::post('loginsubmit',[UserController::class,'loginsubmit']);
Route::post('createsubmit',[UserController::class,'createsubmit']);

Route::group(['middleware'=>['logCheck']], function(){
    Route::get('list',[UserController::class,'list']);
});

