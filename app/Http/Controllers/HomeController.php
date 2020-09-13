<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view("home_index");
    }

    public function login() {
        return view("home_login");
    }

    public function register(Request $request) {
        print_r($request);
        return view("home_register");
    }

}
