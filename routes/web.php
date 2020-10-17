<?php

use GuzzleHttp\Psr7\Request;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', "App\Http\Controllers\HomeController@index")->name("home");

Route::get('/login', "App\Http\Controllers\LoginController@login");

Route::post('/login', "App\Http\Controllers\LoginController@login");

Route::get('/register', "App\Http\Controllers\RegisterController@register");

Route::post('/register', "App\Http\Controllers\RegisterController@register");

Route::get('/logout', function() {
    session()->flush();
    return redirect('/');
});

Route::get('/dashboard', "App\Http\Controllers\DashboardController@get_dashboard");

Route::get('/add_category', "App\Http\Controllers\DashboardController@add_category");

Route::post('/add_category', "App\Http\Controllers\DashboardController@add_category");
