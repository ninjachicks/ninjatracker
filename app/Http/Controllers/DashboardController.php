<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    public function get_dashboard() {

        session(['off'=>'1, ']);
        echo (session('off'));

        if (session('user')) {
            echo (session('user'));
            return view(
                "dashboard", 
                ['username' => session('username'), 
                'user' => session('user')]);
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
