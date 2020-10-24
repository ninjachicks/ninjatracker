<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function get_dashboard() {

        session(['off'=>'1, ']);

        if (Auth::check()) {
            return view("dashboard");
        } else {
            return redirect('/');
        }
    }

    public function add_category(Request $request) {

        if ($request->post()) {
            $newCategory = new Category();
            $newCategory -> name = $request -> post("name");
            $newCategory -> save ();
            return redirect("/dashboard");
        }

        return view("dashboard_add_category", ['user' => session('user')]);

    }

}
