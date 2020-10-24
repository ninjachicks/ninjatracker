<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;


class HomeController extends Controller
{

    public function startApp() {
        return view("home_index", ['user' => session('user')]);
    }

    public function openTestsite() {
        return view("test", ['user' => session('user')]);
    }

    public function login(Request $request) {

        if ($request->post()) {
            $user = User::where("nickname", $request->post("nickname"))->first();
            if ($user->count()) {
                session(['user' => $user['id'], 'username' => $user['nickname']]);
                return redirect("/dashboard");
            } else {
                return redirect("/login");
            }
        }

        return view("home_login", ['user' => session('user')]);
    }

    public function register(Request $request) {

        if ($request->post()) {
            $newUser = new User();
            $newUser -> nickname = $request -> post("nickname");
            $newUser -> password = $request -> post("password");
            $newUser -> save ();
            return redirect()->route("home");
            /*return redirect("/")*/
        }

        /*print_r($request->post());*/
        return view("home_register", ['user' => session('user')]);
        
    }

}
