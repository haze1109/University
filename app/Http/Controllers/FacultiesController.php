<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculty;
use Session;
use DB;

class FacultiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Session::get("role") == "admin") {
            $faculties = DB::select("SELECT * FROM faculties ORDER BY faculty_id DESC LIMIT 20");
            return view('faculties', compact('faculties'));
        } else {
            return view("errors/401");
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Session::get("role") == "admin") {
            return view('faculties_create');
        } else {
            return view("errors/401");
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Session::get("role") == "admin") {
            $faculty = new Faculty;
            $faculty->first_name = $request->input('first_name');
            $faculty->last_name = $request->input('last_name');
            $faculty->birthdate = $request->input('birthdate');
            $faculty->gender = $request->input("gender");
            $faculty->mobile_number = $request->input("mobile_number");
            $faculty->email_address = $request->input("email_address");
            $faculty->date_entered = $request->input("date_entered");
            $faculty->position = $request->input("position");
            $faculty->department = $request->input("department");
            $faculty->save();

            return redirect("admin/faculties");
        } else {
            return view("errors/401");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Session::get("role") == "admin") {
            $faculty = DB::select("SELECT f.faculty_id AS f_id, first_name, last_name, birthdate, gender, mobile_number, email_address, date_entered, position, department, unders_enrolled, unders_year_received,  has_masters, masters_enrolled, masters_year_received, has_doctors, doctors_enrolled, doctors_year_received FROM faculties AS f INNER JOIN faculties_educ AS fe ON f.faculty_id = fe.faculty_id WHERE f.faculty_id = " . $id);
            return view('faculties_show', compact('faculty'));
        } else {
            return view("errors/401");
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Session::get("role") == "admin") {
            $faculty = DB::select("SELECT * FROM faculties WHERE faculty_id = " . $id);
            return view('faculties_edit', compact('faculty'));
        } else {
            return view("errors/401");
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (Session::get("role") == "admin") {
            $faculty = Faculty::where('faculty_id', $id)
                ->update([
                    'first_name' => $request->input('first_name'),
                    'last_name' => $request->input('last_name'),
                    'birthdate' => $request->input('birthdate'),
                    'gender' => $request->input('gender'),
                    'mobile_number' => $request->input('mobile_number'),
                    'email_address' => $request->input('email_address'),
                    'date_entered' => $request->input('date_entered'),
                    'position' => $request->input('position'),
                    'department' => $request->input('department')
                ]);

            return redirect('admin/faculties');
        } else {
            return view("errors/401");
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Session::get("role") == "admin") {
            $class = Faculty::where('faculty_id', $id)->delete();

            return redirect('/admin/faculties');
        } else {
            return view("errors/401");
        }
    }
}