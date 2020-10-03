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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', "App\Http\Controllers\HomeController@index");

Route::get('/login', "App\Http\Controllers\HomeController@login");

Route::get('/register', "App\Http\Controllers\HomeController@register");

Route::post('/register', function(){
    return view("home_index");
    /*return redirect()->route("/");*/
});
