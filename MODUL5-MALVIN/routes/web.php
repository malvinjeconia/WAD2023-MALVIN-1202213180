<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\ShowroomController;

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
    return view('home');
});

Route::get('/Showroom', [app\Http\Controllers\ShowroomController::class,'index'])->name('showroom.index');
Route::get('/Showroom/create', [app\Http\Controllers\ShowroomController::class,'create'])->name('showroom.create');
Route::post('/Showroom/store', [app\Http\Controllers\ShowroomController::class,'index'])->name('showroom.index');