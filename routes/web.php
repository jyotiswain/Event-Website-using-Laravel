<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::post("/login",[UserController::class,'login']);
Route::get("/",[EventController::class,'index']);
Route::get("/detail/{id}",[EventController::class,'detail']);
// Route::get("search", [EventController::class,'search']);
Route::post("saved_for_later", [EventController::class,'saveforlater']);
Route::get("savedevents", [EventController::class,'savedEvents']);
Route::get("remove/{id}", [EventController::class,'reMove']);
Route::get("registernow", [EventController::class,'registerNow']);
