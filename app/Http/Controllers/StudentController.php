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

    
    public function edit($id){
        $student=Student::find($id);
        return view('edit-student',compact('student'));
    }
   
    public function update(Request $request, $id)
    {
        $student=Student::find($id);
        $student->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'course'=>$request->course,
        ]);
        return redirect('/students');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id){
        $student=Student::findOrFail($id);
        $student->delete();
        return redirect('/students');
    }
    
}
