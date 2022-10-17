<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function get_all_student(){
        $students = Student::all();
        return view('student.manage',['students' => $students]);
    }
    public function get_student_by_id($id){
        $student = Student::findOrFail($id);
        return view('student.edit',['student' => $student]);
    }
    public function edit(Request $request, $id){
        $student = Student::findOrFail($id);
        $student->fullname = $request->txtFullName;
        $student->birthday = $request->txtBirthday;
        $student->address = $request->txtAddress;
        $student->save();
        return redirect('/students');
    }
    public function create(){
        return view('student.add');
    }
    public function add(Request $request){
        $student = new Student;
        $student->fullname = $request->txtFullName;
        $student->birthday = $request->txtBirthday;
        $student->address = $request->txtAddress;
        $student->save();
        return redirect('/students');
    }
}
