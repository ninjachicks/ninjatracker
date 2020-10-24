<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function startApp() {
        return view("home_index");
    }

    public function openTestsite() {
        return view("test");
    }

    public function login(Request $request) {

        if ($request->post()) {
            $credentials = $request -> only('name', 'password');
            if (Auth::attempt($credentials)) { /** add this to register */
                return redirect("/dashboard");
            }
        }

        return view("home_login");
    }

    public function register(Request $request) {

        if ($request->post()) {
            $newUser = new User();
            $newUser -> name = $request -> post("name");
            $newUser -> password = password_hash($request -> post("password"), PASSWORD_DEFAULT);
            $newUser -> save ();
            return redirect("/");
        }

        /*print_r($request->post());*/
        return view("home_register");
        
    }

}
