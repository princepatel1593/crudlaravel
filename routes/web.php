<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('user-form',[UserController::class,'create'])->name('user.create');
Route::get('user-list',[UserController::class,'index'])->name('user.index');
Route::post('user-store',[UserController::class,'store'])->name('user.store');
Route::get('user/edit/{id}',[UserController::class,'edit'])->name('user.edit');
Route::put('user/update/{id}',[UserController::class,'update'])->name('user.update');
Route::delete('user/delete/{id}',[UserController::class,'destroy'])->name('user.destroy');

