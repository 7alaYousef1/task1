<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StartController;


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



Route::get('/',[StartController::class,'sign_in'])->name('sign_in');
Route::post('/',[StartController::class,'sign_in_data'])->name('sign_in_data');
// Route::get('layout',[StartController::class,'layout'])->name('layout');

Route::get('conact',[StartController::class,'conact'])->name('conact');
Route::post('conact',[StartController::class,'conact_data'])->name('conact_data');

Route::get('home_final',[StartController::class,'home'])->name('home');
Route::get('item',[StartController::class,'item'])->name('item');
Route::get('category',[StartController::class,'category'])->name('category');
