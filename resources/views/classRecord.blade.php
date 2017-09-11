@extends('layouts.app')
<style>
form input{display:inline;margin:10px;margin-bottom: 20px;}
table{padding: 5px;}
tr{border:1px solid #ccc;}
tr td{padding:5px;}
</style>

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

    <form action="classRecord" method="post" name="search">

        <div style="background-color:#ffffff;padding:10px;border-radius:10px;">
          นักเรียน
          <select name="classStdId" style="width:500px;padding:5px; margin:10px;" onchange="this.form.submit()">
            <option>กรุณาเลือก</option>
            @if(!empty($studyClasses))
            @foreach($studyClasses as $r)
            <option value="{{ $r->std_id }}">&nbsp; ({{ $r->std_nickname }})&nbsp;&nbsp; {{$r->std_name}}&nbsp; {{ $r->std_lastname }}</option>
            @endforeach
            @endif
            </select>
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="hidden" name="search" value="ค้นหา" class="btn btn-primary">
    </form>

      <table>
    @if(!empty($stds))
    @foreach($stds as $row)
        <tr style="border:none;"><td>ชื่อ :</td><td>&nbsp;{{$row->std_name}}</td><td>&nbsp;{{$row->std_lastname}}</td><td>&nbsp;({{$row->std_nickname}})</td></tr>
    @endforeach
    @endif
    @if(!empty($stdStudys))
    @foreach($stdStudys as $row)
        <tr style="border:none;"><td>คอร์ส :</td><td colspan="3">&nbsp;{{$row->corse_name}}</td></tr>
        <tr style="border:none;"><td>รอบที่เลือกเรียน :</td><td>&nbsp;{{$row->stu_date}}</td><td>&nbsp;{{$row->stu_time}}</td><td></td></tr>

      </table>
    @endforeach
    @endif
    <br>
    <table width="100%">
      <tr>
        <td>ครั้งที่</td><td>วันที่เรียน</td><td>เวลาที่เรียน</td><td>เนื้อหาที่เรียน</td><td>ผู้สอน</td></tr>
      @if(!empty($getClasses))
      @foreach($getClasses as $row)
      <tr>
        <td>{{$row->class_num}}</td>
        <td>{{$row->class_date}}</td>
        <td>{{$row->class_time}}</td>
        <td>{{$row->class_subject}}</td>
        <td>{{$row->class_teacher}}</td>
      </tr>
      @endforeach
      @endif

    </table>

    </div>
      <br>
      <div style="background-color:#ffffff;padding:10px;border-radius:10px;">
        <form action="classRecord" method="post" name="save">
          @if(!empty($stds))
          @foreach($stds as $row)
          <input type="hidden" value="{{$row->std_id}}" name="stdId">
          @endforeach
          @endif

          @if(!empty($stdStudys))
          @foreach($stdStudys as $row)
          <input type="hidden" value="{{$row->corse_name}}" name="corse">
          @endforeach
          @endif

              ครั้งที่
          <input type="number"  name="classNum"  background-color="#ccc"
          @if(!empty($getNums))
          value="{{$getNums}}"
          @endif
          readonly style="width:40px;padding:5px;background-color:#ccc;border:none;">

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
              <input type="text" name="classSubject" required>
              ผู้สอน
              <select name="classTeacher" style="width:200px;padding:4px; margin:10px;">
                @if(!empty($teachers))
                @foreach($teachers as $row)
                <option value="{{$row->tea_name}}">{{$row->tea_name}}</option>
                @endforeach
                @endif
              </select>
              <br><br>
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="submit" name="save" value="บันทึก" class="btn btn-primary">
            </form>
        </div>
      </div>
    </div>
  </div>
  @endsection
