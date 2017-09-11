@extends('layouts.app')
<style>
ul.student-info {display: inline-block;list-style:none;}
ul.student-info li{margin: 15px;}
input{display: block;}
button{background-color: lightblue;}
tr{border:1px solid #ccc;margin:10px 5px;}
table{width:100%;margin:auto;}
tr td{padding: 10px;}
</style>
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div style="background-color:#ffffff;padding:10px;border-radius:10px;">
          <form action="reportForm" method="post" >
            ชื่อนักเรียน
            <!--<input type="text" name="getId" style="display:inline;" required>-->
            <select name="getId" id="std" style="width:200px;margin:10px;padding:3px;">
                    <option selected>กรุณาเลือก</option>
            @foreach($students as $row)

                  <option value= "{{ $row->std_id }}">{{ $row->std_name }} {{$row->std_lastname}}({{$row->std_nickname}})  </option>

            @endforeach
            </select>

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" name="submit" value="ค้นหา" class="btn btn-primary">
          </form>
        </div>
        <div style="background-color:#ffffff;padding:10px;border-radius:10px;margin-top:5px;">
            <table>
              @foreach($stdInfos as $row)
              <tr style="border:none;"><td>ชื่อ</td><td>{{ $row->std_name }}</td><td>นามสกุล</td><td>{{ $row->std_lastname }}</td></tr>
              <tr style="border:none;" collspan="4"><td>ชื่อเล่น</td><td>{{ $row->std_nickname}}</td></tr>
              <tr style="border:none;" collspan="3">
                <td>คอร์สเรียน</td>
              @foreach($getCorses as $row)
                <td>{{ $row->corse_name}}</td></tr>
              @endforeach

              <tr ><td>ครั้งที่</td><td>วันที่เรียน</td><td>เวลาที่เรียน</td><td>เนื้อหาที่เรียน</td><td>ผู้สอน</td></tr>
              @foreach($getClasses as $row)
              <tr><td>{{$row->class_num}}</td><td>{{$row->class_date}}</td><td>{{$row->class_time}}</td><td>{{$row->class_subject}}</td>
                <td>{{$row->class_teacher}}</td>
              </tr>
              @endforeach


            </table>
            @endforeach
          </div>
        </div>
    </div>
</div>
@endsection
