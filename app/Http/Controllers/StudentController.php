<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Student;

use View;

class StudentController extends Controller
{
    public function index()
    {
        return view('board');
    }

    public function getStudentData($student_no)
    {
        $student=Student::where('no',$student_no)->firstOrFail();
        return view('student',[
            'student'=>$student,
            'user'=>$student->user,
            'score'=>$student->score,
            'subject'=>null
            ]);
    }

    public function getStudentScore($student_no, $subject = null)
    {
        $student=Student::where('no',$student_no)->firstOrFail();
        return view('student',[
            'student'=>$student,
            'user'=>$student->user,
            'score'=>$student->score,
            'subject'=>$subject
            ]);
    }
}
