<?php

use Illuminate\Support\Facades\Route;

Route::get('/', "App\Http\Controllers\HomeController@startApp");

Route::get('/login', "App\Http\Controllers\HomeController@login");

Route::post('/login', "App\Http\Controllers\HomeController@login");

Route::get('/register', "App\Http\Controllers\HomeController@register");

Route::post('/register', "App\Http\Controllers\HomeController@register");

Route::get('/logout', function() {
    session()->flush();
    return redirect('/');
});

Route::get('/dashboard', "App\Http\Controllers\DashboardController@get_dashboard");

Route::get('/add_category', "App\Http\Controllers\DashboardController@add_category");

Route::post('/add_category', "App\Http\Controllers\DashboardController@add_category");


