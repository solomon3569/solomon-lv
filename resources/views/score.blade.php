@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="page-header">
            <h1>詳細資料</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <table class="table table-hover col-xs-12">
                <p>
                    學號：{{ $student_no }}
                </p>
                <p>
                    姓名：小名
                </p>
                <p>
                    電話：0912345678
                </p>
                @if(is_null($subject) ||$subjuct=='chinese')
                <p>
                    國文：60
                </p>
                @endif
                @if(is_null($subject) ||$subjuct=='english')
                <p>
                    英文：60
                </p>
                @endif
                @if(is_null($subject) ||$subjuct=='math')
                <p>
                    數學：60
                </p>
                @endif
            </table>
        </div>
    </div>

@endsection
