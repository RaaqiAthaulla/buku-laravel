<?php

use App\Http\Controllers\BukuController;
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
    return view('welcome');
});

Route::get('/list',[BukuController::class,'index']);
Route::get('/add',[BukuController::class,'create']);
Route::get('/edit/{id}',[BukuController::class,'edit']);
Route::get('/detail/{id}',[BukuController::class,'show']);
Route::get('/delete/{id}',[BukuController::class,'destroy']);
Route::resource('buku',BukuController::class);