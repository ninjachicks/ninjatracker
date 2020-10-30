<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{

    public function get_dashboard() {

        if (Auth::check()) {
            $categories = DB::select('select * from categories where parent_id=0');
            return view("dashboard")->with('categories', $categories);
        } else {
            return redirect('/');
        }
    }

    public function add_category(Request $request) {

        if ($request->post()) {
            $newCategory = new Category();
            $newCategory -> name = $request -> post("name");
            $newCategory -> save ();
            $categories = DB::select('select * from categories where parent_id=0');
            return redirect("/dashboard")->with('categories', $categories);
        }

        return view("dashboard_add_category", ['user' => session('user')]);

    }

}
