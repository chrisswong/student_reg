<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CourseController extends Controller
{
    //
    public function showAll(): View {
        return view('course/showAll', [
            'courses' => Course::all() 
        ]); 
    }
}