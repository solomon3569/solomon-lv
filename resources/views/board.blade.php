@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="page-header">
            <h1>排名</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <table class="table table-hover col-xs-12">
                <thead>
                    <tr>
                        <th>名次</th>
                        <th>學號</th>
                        <th>姓名</th>
                        <th>國文</th>
                        <th>英文</th>
                        <th>數學</th>
                        <th>總分</th>
                        <th>動作</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1</th>
                        <th>s1234567890</th>
                        <th>小名</th>
                        <th>60</th>
                        <th>60</th>
                        <th>60</th>
                        <th>180</th>
                        <th>
                            <a class="btn btn-default btn-sm" href="{{route('student',['student_no'=>'s1234567890'])}}">
                                查看學生資料
                            </a>
                        </th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection
