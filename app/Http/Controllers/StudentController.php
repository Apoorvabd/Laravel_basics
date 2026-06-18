<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students=Student::all();
        return view('student',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function addStudent(){
        Student::create([
            "name"=>"Apoorv abd",
            "email"=>"mrapoorv2007@gmail.com",
            "course"=>"b voc",
        ]);
        Student::create([
            "name"=>"Apoorv 123",
            "email"=>"mrapoorv2007@gmail.com",
            "course"=>"b voc",
        ]);
        return "student added successfully";
    }
   
    public function create(){
        return view('create-student');
    }
    
    public function store(Request $request)
    {
        Student::create([
            "name"=>$request->name,
            "email"=>$request->email,
            "course"=>$request->course,
        ]);
        return redirect('/students');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
