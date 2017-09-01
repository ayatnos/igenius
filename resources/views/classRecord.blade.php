@extends('layouts.app')
<style>
form input{display:inline;margin:10px;margin-bottom: 20px;}
</style>

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <form action="classRecord" method="post" >
        <div style="background-color:#ffffff;padding:10px;border-radius:10px;">

          นักเรียน

          <select name="classStdId" style="width:300px;padding:5px; margin:10px;">
            @foreach($studyClasses as $r)
            <option value="{{ $r->std_id }}"> {{$r->std_name}} corse {{$r->corse_name}}</option>
            @endforeach
            </select>
          </div><br>
          <div style="background-color:#ffffff;padding:10px;border-radius:10px;">
              วันที่
              <input type="date" name="classDate" required>
              เวลา
              <select name="classTime" style="width:200px;padding:4px; margin:10px;">
                <option value="12.00-14.00" >12.00-14.00</option>
                <option value="14.00-16.00" >14.00-16.00</option>
                <option value="16.00-18.00" >16.00-18.00</option>
              </select>
              <br><br>
              หลักสูตร
              <input type="text" name="classSubject" size="50" required>
              ผู้สอน
              <select name="classTeacher" style="width:200px;padding:4px; margin:10px;">
                @foreach($teachers as $row)
                <option value="{{$row->tea_name}}">{{$row->tea_name}}</option>
                @endforeach
              </select>
              <br><br>
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="submit" name="submit" value="บันทึก" class="btn btn-primary">
            </form>

        </div>
      </div>
    </div>
  </div>
  @endsection
