<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request) {

        if ($request->post()) {
            $username = User::where("nickname", $request->post("nickname"))->get();
            if ($username->count()) {
                return redirect("/dashboard");
            } else {
                return redirect("/login");
            }
        }

        return view("home_login");
    }
}
