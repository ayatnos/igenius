@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
<div style="background-color:#ffffff;padding:10px;border-radius:10px;">
<form action="corseForm" method="post">
  ชื่อคอร์ส<input type="text" name="corseName" style="width:400px;display:inline;margin:10px;" required>
  เวลาเรียน<input type="number" name="corseTime" style="display:inline;margin:10px;" required>ครั้ง
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <br>
  <br>
  <input type="submit" name="submit" value="บันทึก" class="btn btn-primary" style="margin:auto;">
</form>
</div>
</div>
</div>
</div>
@endsection
