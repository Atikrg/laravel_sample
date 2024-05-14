<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', [UserController::class, 'viewUsers'])->name('users.view');

//list
Route::get('/users', [UserController::class, 'index'])->name('users.index');

//create
Route::post('/users', [UserController::class, 'store'])->name('users.store');

Route::get('/users', [UserController::class, 'edit']);

//delete
Route::delete('/users/{user}', [UserController::class,'destroy'])->name('users.destroy');
Route::get('/users', [UserController::class, 'index']);