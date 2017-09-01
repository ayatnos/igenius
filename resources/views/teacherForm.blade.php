@extends('layouts.app')
<style>
form input{display:inline;margin:10px;margin-bottom: 20px;}
</style>

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

<div style="background-color:#ffffff;padding:10px;border-radius:10px;">
  <form action="teacherForm" method="post" >
    ชื่อผู้สอน <input type="text" name="teaName" required><span style="color:red;font-size:2.5em;">*</span>
    นามสกุล <input type="text" name="teaLastname" required><span style="color:red;font-size:2.5em;">*</span><br>
    เบอร์โทรศัพท์1 <input type="number" name="teaTel1" maxlength="10" required><span style="color:red;font-size:2.5em;">*</span><br>
    เบอร์โทรศัพท์2 <input type="number" name="teaTel2" maxlength="10" ><br>
    Email<input type="email" name="teaEmail" >
    Line ID<input type="text" name="teaLine" required><span style="color:red;font-size:2.5em;">*</span>
<br>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="submit" name="submit" value="บันทึก" class="btn btn-primary">
    

  </form>
</div>
</div>
</div>
</div>

@endsection
