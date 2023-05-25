<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('room',function(){
    return view('room');
})->name('room');
Route::get('subscribe',function(){
    return view('subscribe');
})->name('subscribe');
Route::get('message',function(){
    
});
Auth::routes();
Route::controller(HomeController::class)->group(function(){
    Route::get('/home', 'index')->name('home');
    Route::post('student/code','verifiycode')->name('lesson.code');
    Route::get('lesson/{id}','lesson')->name('lesson')->middleware('HasAccess');
    Route::post('lesson/play/{name}','play')->name('lesson.play');
});

