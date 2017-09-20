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
<<<<<<< HEAD
          <form action="reportForm" method="post" >
            ชื่อนักเรียน
            <!--<input type="text" name="getId" style="display:inline;" required>-->
            <select name="getId" id="std" style="width:200px;margin:10px;padding:3px;">
                    <option selected>กรุณาเลือก</option>
            @foreach($students as $row)

                  <option value= "{{ $row->std_id }}">{{ $row->std_name }} {{$row->std_lastname}}({{$row->std_nickname}})  </option>
=======
>>>>>>> 932cdfc5c308113db06246cf874e90ba7a56e078

          <form action="reportForm" method="post" >
            <input type="text" name="insNickname" size="50">

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" name="search" value="ค้นหา" class="btn btn-primary">
          </form>
        </div>
        <div style="background-color:#ffffff;padding:10px;border-radius:10px;margin-top:5px;">
          <form action="reportForm" method="post" name="stdSelect">
            <table >
              @if(!empty($datas))
              <tr>
                <td>ลำดับ</td>
                <td>ชื่อเล่น</td>
                <td>ชื่อจริง</td>
                <td>นามสกุล</td>
                <td>อายุ</td>
                <td>ผู้ปกครอง</td>
                <td>เบอร์โทรศัพท์</td>
                <td>&nbsp;</td>
              </tr>
              @foreach($datas as $row)

              <tr>
                <td>{{$row->std_id}}</td>
                <td>{{$row->std_nickname}}</td>
                <td>{{$row->std_name}}</td>
                <td>{{$row->std_lastname}}</td>
                <td>{{$row->std_age}}</td>
                <td>{{$row->std_parent_name}}</td>
                <td>{{$row->std_parent_tel_1}}</td>
                <td>

                <label for="select{{$row->std_id}}" style="cursor:pointer;">เพิ่มเติม</label>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="checkbox" name="select" value="{{$row->std_id}}"
                style="float:left;margin:5px;display:none;" onclick="this.form.submit()" id="select{{$row->std_id}}">
                </td>
              </form>
              </tr>

              @endforeach
              @endif
            </table>
        </div>
        </div>
    </div>
</div>
@endsection
