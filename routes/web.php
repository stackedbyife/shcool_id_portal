<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
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
Route::post('/register', 'App\Http\Controllers\RegistrationController@register');
Route::post('/login', 'App\Http\Controllers\LoginController@login');
Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index');
Route::get('/logout', 'App\Http\Controllers\LoginController@logout');
