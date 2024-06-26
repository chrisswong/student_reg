<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\View\View;

class StudentController extends Controller
{
    //
    public function showAll(): View {
        return view('student/showAll', [
            'students' => Student::all() 
        ]); 
    }

    public function show($id) : View {
        $student = Student::find($id);
        return view('student/show', [
            'student' => $student 
        ]);   
    }
}
