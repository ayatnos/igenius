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
            <input type="text" name="insNickname" size="50">

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" name="submit" value="ค้นหา" class="btn btn-primary">
          </form>
        </div>
        <div style="background-color:#ffffff;padding:10px;border-radius:10px;margin-top:5px;">
            <table>
              @if(!empty($datas))
              <tr>
                <td>ลำดับ</td>
                <td>ชื่อเล่น</td>
                <td>ชื่อจริง</td>
                <td>นามสกุล</td>
                <td>อายุ</td>
                <td>ผู้ปกครอง</td>
                <td>เบอร์โทรศัพท์</td>
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
              </tr>
              @endforeach
              @endif
            </table>
        </div>
        </div>
    </div>
</div>
@endsection
