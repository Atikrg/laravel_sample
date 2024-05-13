<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('users');
});


Route::delete('/users/{user}', [UserController::class,'destroy'])->name('users.destroy');
Route::get('/users', [UserController::class, 'index']);