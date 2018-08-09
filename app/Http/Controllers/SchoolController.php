<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Student as StudentEloquent;
use Validator;
use View;
class SchoolController extends Controller
{
    public function getEdit($student_no)
    {
        $student = StudentEloquent::where('no',$student_no)->firstOrFail();
        return view('edit',['student' => $student]);
    }

    public function postEdit($student_no,Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|string',
                'tel' => 'required|string'
            ],
            [
                'required' => '不可為空白',
                'string' => '須為字串'
            ]
        );
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }else{
            $student = StudentEloquent::where('no',$student_no)->firstOrFail();
            $student->tel = $request->tel;
            $student->user->save();
            $student->save();
            return view('edit',['student' =>$student,'msg' => '修改成功']);
        }
    }
}
