@extends('layouts.app')
<style>
form input{display:inline;margin:10px;margin-bottom: 20px;}
</style>

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <div style="background-color:#ffffff;padding:10px;border-radius:10px;">
            <form action="corseSelect" method="post">
            นักเรียน
            <select name="std" id="std" style="width:200px;margin:10px;padding:3px;">
            @foreach($students as $row)

                  <option value= "{{ $row->std_id }}">รหัส: {{$row->std_id}} ชื่อ: {{$row->std_name}}</option>

            @endforeach
            </select>
<br>
            เลือกคอร์สเรียน
            <select name="corse" id="corse" style="display:inline-block;width:400px;margin:10px;padding:3px;">
            @foreach($corses as $row)

            <option value="{{ $row->corse_name }}">{{$row->corse_name}}</option>

                <br>
            @endforeach
          </select>
          <br>
          <input type="radio" name="day" id="day1" value="วันเสาร์" checked style="margin:10px;">
          <label for="day1">วันเสาร์</label>
          <input type="radio" name="day" id="day2" value="วันอาทิตย์" style="margin:10px;">
          <label for="day2">วันอาทิตย์</label>
            <br>เวลา
            <ul style="list-style:none;">
              <li>
            <input type="radio" name="time" id="time1" value="12.00 - 14.00">
            <label for="time1">12.00 - 14.00</label></li>
            <li>
            <input type="radio" name="time" id="time2" value="14.00 - 16.00">
            <label for="time2">14.00 - 16.00</label></li>
            <li>
            <input type="radio" name="time" id="time3" value="16.00 - 18.00">
            <label for="time3">16.00 - 18.00</label></li></ul>

            <!--<select name="time" id="time" style="width:200px;margin:10px;padding:3px;">
              <option value="12.00 - 14.00">12.00 - 14.00</option>
              <option value="14.00 - 16.00">14.00 - 16.00</option>
              <option value="16.00 - 18.00">16.00 - 18.00</option>
            </select>-->

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <br><input type="submit" name="submit" value="บันทึก" class="btn btn-primary">

          </form>
          </div>
        </div>
      </div>
    </div>

    @endsection
