<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use Session;

class AdminController extends Controller
{
    public function adminDashboard()
    {
        $options = [
            'chart_title' => 'Students by year level',
            'report_type' => 'group_by_string',
            'model' => 'App\Models\Student',
            'group_by_field' => 'year_level',
            'chart_type' => 'bar',
            'chart_color' => '0,255,255',
            'style_class' => 'chart'
        ];

        $chart = new LaravelChart($options);

        $options = [
            'chart_title' => 'Students by gender',
            'report_type' => 'group_by_string',
            'model' => 'App\Models\Student',
            'group_by_field' => 'gender',
            'chart_type' => 'pie',
            'style_class' => 'chart'
        ];

        $chart1 = new LaravelChart($options);

        if (Session::get("role") == "admin") {
            return view('admin', compact('chart', 'chart1'));
        } else {
            return view("errors/401");
        }
    }

    public function showAdminRegister()
    {
        if (Session::get("role") == "admin") {
            return view('admin_register');
        } else {
            return view("errors/401");
        }
    }

    public function adminRegister(Request $request)
    {
        if (Session::get("role") == "admin") {
            $user = new User;
            $user->first_name = $request->input("first_name");
            $user->last_name = $request->input("last_name");
            $user->email = $request->input("email");
            $user->password = Hash::make($request->input("password"));
            $user->role = "admin";
            $user->student_id = 0;
            $user->save();

            return redirect("/admin");
        } else {
            return view("errors/401");
        }
    }

}