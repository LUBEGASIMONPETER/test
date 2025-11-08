<?php

use App\Http\Controllers\RachealController;
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
    return view('index');
});
Route::get('/index',[RachealController::class,'index']);
Route::post('/store',[RachealController::class,'store'])->name('racheal.store');
Route::get('/display',[RachealController::class,'display'])->name('racheal.display');
Route::delete('/delete/{id}',[RachealController::class,'destroy'])->name('racheal.destroy');
Route::get('/edit/{id}',[RachealController::class,'edit'])->name('racheal.edit');
Route::patch('/update/{id}',[RachealController::class,'update'])->name('racheal.update');

