<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function index() {
        return view("home_index", ['user' => session('user')]);
    }

}
