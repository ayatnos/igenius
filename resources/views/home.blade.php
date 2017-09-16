<<<<<<< HEAD
﻿
=======
>>>>>>> e931e79da319f74053855275f3a216313dbee629
@extends('layouts.app')
@section('content')
<style>
ul.student-info {display: inline-block;list-style:none;}
ul.student-info li{margin: 15px;}
input{display: block;}
button{background-color: lightblue;}
</style>
<div class="container">

    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default" style="width:100%;padding:20px;display:inline-block;">

              <div style="float:left;width:32%;">

                <div class="panel-heading">บันทึกนักเรียน</div>



                <div class="panel-body">
<<<<<<< HEAD

                    <a href="{{ url('/studentForm')}}">STUDENT FORM</a>

                </div>
                <div class="panel-body">

                    <a href="{{ url('/corseSelect')}}">CORSE SELECT</a>

                </div>
                <div class="panel-body">

                    <a href="{{ url('/classRecord')}}">CLASS RECORD</a>
 
               </div>
=======
                    <a href="{{ url('/studentForm')}}">STUDENT FORM</a>
                </div>
                <div class="panel-body">
                    <a href="{{ url('/corseSelect')}}">CORSE SELECT</a>
                </div>
                <div class="panel-body">
                    <a href="{{ url('/classRecord')}}">CLASS RECORD</a>
                </div>
>>>>>>> e931e79da319f74053855275f3a216313dbee629

              </div>

              <div style="float:left;width:32%;">
                <div class="panel-heading">บันทึกผู้สอน</div>

                <div class="panel-body">
<<<<<<< HEAD

                    <a href="{{ url('/corseForm')}}">CORSE FORM</a>
 
               </div>
                <div class="panel-body">

                    <a href="{{ url('/teacherForm')}}">TEACHER FORM</a>
 
               </div>
=======
                    <a href="{{ url('/corseForm')}}">CORSE FORM</a>
                </div>
                <div class="panel-body">
                    <a href="{{ url('/teacherForm')}}">TEACHER FORM</a>
                </div>
>>>>>>> e931e79da319f74053855275f3a216313dbee629
              </div>
              
<div style="float:left;width:32%;">
                
<div class="panel-heading">รายงาน</div>
              <div class="panel-body">
<<<<<<< HEAD
 
                 <a href="{{ url('/reportForm')}}">CLASSTIME REPORT</a>
             
 </div>
=======
                  <a href="{{ url('/reportForm')}}">CLASSTIME REPORT</a>
              </div>
>>>>>>> e931e79da319f74053855275f3a216313dbee629
              </div>
            </div>
        </div>
   
 </div>
</div>
@endsection
