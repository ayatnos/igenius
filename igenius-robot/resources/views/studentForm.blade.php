@extends('layouts.app')
<style>
div input{display: inline;margin: 10px;}
</style>
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
<div style="background-color:#ffffff;padding:10px;border-radius:10px;">
  
<form action="studentForm" method="post">
  <div >
    ชื่อนักเรียน&nbsp;
    <input type="radio" name="stdSex" value="ด.ช." id="boy" required><label for="boy">&nbsp;ด.ช.</label>
    <input type="radio" name="stdSex" value="ด.ญ." id="girl" required><label for="girl">&nbsp;ด.ญ.</label>
    <input type="text" name='stdName' required><span style="color:red;font-size:2.5em;">*</span>
    นามสกุล<input type="text" name="stdLastName" required><span style="color:red;font-size:2.5em;">*</span><br>
    ชื่อเล่น<input type="text" name="stdNickName" required size="10"><span style="color:red;font-size:2.5em;">*</span>
    วันเกิด<input type="date" name="stdBirthdate" required><span style="color:red;font-size:2.5em;">*</span>
    อายุ<input type="text" name="stdAge" required>ปี<span style="color:red;font-size:2.5em;">*</span><br>
    โรงเรียน<input type="text" name="stdSchool" required size="50"><span style="color:red;font-size:2.5em;">*</span>
    ระดับชั้น<input type="text" name="stdGrade" required><span style="color:red;font-size:2.5em;">*</span><br>
    เบอร์โทรศัพท์1<input type="number" name="stdTel1" maxlength="10"><br>
    เบอร์โทรศัพท์2<input type="number" name="stdTel2" maxlength="10"><br>
    Email<input type="email" name="stdEmail">
    Line ID<input type="text" name="stdLine" >
    Facebook<input type="text" name="stdFacebook">
  </div><hr>
  <div >
    ชื่อผู้ปกครอง<input type="text" name="parName" required><span style="color:red;font-size:2.5em;">*</span>
    นามสกุล<input type="text" name="parLastName" required><span style="color:red;font-size:2.5em;">*</span><br>
    ที่อยู่<input type="text" name="parAddress" size="90" required><span style="color:red;font-size:2.5em;">*</span><br>
    เบอร์โทรศัพท์1<input type="number" name="parTel1" maxlength="10" required><span style="color:red;font-size:2.5em;">*</span><br>
    เบอร์โทรศัพท์2<input type="number" name="parTel2" maxlength="10" ><br>
    Email<input type="email" name="parEmail">
    Line ID<input type="text" name="parLine" require><span style="color:red;font-size:2.5em;">*</span>
    Facebook<input type="text" name="parFacebook">
  </div>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="submit" name="submit" value="บันทึก" class="btn btn-primary">
</form>
</div>
</div>
</div>
</div>
@endsection
