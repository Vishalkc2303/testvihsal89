<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function add()
    {
        return view('student-crud.addstudent');
    }

    public function addstudent(Request $request)
    {
        $request->validate([
            'firstname' => 'required|alpha',
            'lastname' => 'required|alpha',
            'address' => 'required|alpha',
            'email' => 'required|email|unique:student',
            'contactnumber' => 'required|numeric|min:10',

        ]);

        // store data into database
        $student = new Student; //Student = model name
        $student->firstname = $request->firstname;
        $student->lastname = $request->lastname;
        $student->address = $request->address;
        $student->email = $request->email;
        $student->contactnumber = $request->contactnumber;
        $student->gender = $request->gender;
        $student->dob = $request->dob;
        $student->courses = $request->courses;
        $student->semester = $request->semester;
        $student->section = $request->section;
        $result = $student->save();

        return redirect(route('add'))->with('success', 'Student added successfully');
    }

    public function display()
    {
        $student = Student::all();
        return view('afterloginpage', ['data' => $student]);
        // return view('afterloginpage');
    }
    

    // public function delete($id){
    //     Student::destroy($id);
    //     return redirect();
    // }



}
