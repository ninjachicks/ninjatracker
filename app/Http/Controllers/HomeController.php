<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class HomeController extends Controller
{
    public function index() {
        return view("home_index");
    }

    public function login() {
        return view("home_login");
    }

    public function register(Request $request) {

        if ($request->post()) {
            $newUser = new User();
            $newUser -> nickname = $request -> post("nickname");
            $newUser -> password = $request -> post("password");
            $newUser -> save ();
        }

        /*print_r($request->post());*/
        return view("home_register");
        
    }

}
