<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
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
        return view("home_register");
        
    }
}
