<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
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

        return view("home_login");
    }

    
}
