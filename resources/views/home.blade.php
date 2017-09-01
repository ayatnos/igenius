
@extends('layouts.app')
<style>
ul.student-info {display: inline-block;list-style:none;}
ul.student-info li{margin: 15px;}
input{display: block;}
button{background-color: lightblue;}
</style>
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" style="width:100%;padding:20px;display:inline-block;">
              <div style="float:left;width:32%;">
                <div class="panel-heading">บันทึกนักเรียน</div>

                <div class="panel-body">
                    <a href="/studentForm">STUDENT FORM</a>
                </div>
                <div class="panel-body">
                    <a href="/corseSelect">CORSE SELECT</a>
                </div>
                <div class="panel-body">
                    <a href="/classRecord">CLASS RECORD</a>
                </div>

              </div>
              <div style="float:left;width:32%;">
                <div class="panel-heading">บันทึกผู้สอน</div>
                <div class="panel-body">
                    <a href="/corseForm">CORSE FORM</a>
                </div>
                <div class="panel-body">
                    <a href="/teacherForm">TEACHER FORM</a>
                </div>
              </div>
              <div style="float:left;width:32%;">
                <div class="panel-heading">รายงาน</div>
              <div class="panel-body">
                  <a href="/reportForm">CLASSTIME REPORT</a>
              </div>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
