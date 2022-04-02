<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;
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

/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [IndexController::class,'index']);
Route::get('/resume', [IndexController::class,'show']);
Route::get('/persons', [IndexController::class,'getNameStage']);
Route::get('/stage', [IndexController::class,'getNameStageDeveloper']);
Route::get('/count', [IndexController::class,'getCountResumes']);
Route::get('/staff', [IndexController::class,'getStaff']);


/*Route::get('home', function () {
    return view('home');
});*/
