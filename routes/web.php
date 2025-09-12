<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;

Route::get('/login', function () {
    return view('index');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/preview', function () {
    return view('preview');
});
Route::get('/congrat', function () {
    return view('congrat');
});

Route::post('/register', [RegistrationController::class, 'register'])->name('register.submit');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
