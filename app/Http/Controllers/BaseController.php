<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function index() {
        return view("base_index");
    }

    public function login() {
        return view("base_login");
    }

    public function register() {
        return view("base_register");
    }

}