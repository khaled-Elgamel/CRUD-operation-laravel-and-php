<?php

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
Route::get('/orders',[App\Http\Controllers\OrderController::class,'index'])->name('orders.index');
Route::delete('/orders/delete/{id}',[App\Http\Controllers\OrderController::class,'destroy'])->name('orders.destroy');
Route::get('/orders/create',[App\Http\Controllers\OrderController::class,'create'])->name('orders.create');
Route::post('/orders/submit',[App\Http\Controllers\OrderController::class,'save'])->name('orders.submit');

Route::get('/orders/update/{id}',[App\Http\Controllers\OrderController::class,'edit'])->name('orders.update');
Route::put('orders/save/{id}',[App\Http\Controllers\OrderController::class,'update'])->name('orders.updated');


Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
