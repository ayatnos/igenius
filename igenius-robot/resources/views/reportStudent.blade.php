@extends('layouts.app')
<style>
table{width:100%;border-radius:5px;}

table tr td{ padding: 10px;}
input{border:none;padding:5px;background-color: #ccc;}

</style>
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div style="background-color:#ffffff;padding:10px;border-radius:10px;">
            <h2 style="display:block;text-align: center;">ข้อมูลน้กเรียน</h2>
              @if(!empty($students))
              @foreach($students as $row)
              <table>
                <tr>
                  <td>รหัส</td>
                  <td><input type="text" value="{{$row->std_id}}" size="5" readonly></td>
                  <td width="80px">ชื่อเล่น</td>
                  <td><input type="text" value="{{$row->std_nickname}}" size="6" readonly></td>
                  <td></td>

                </tr>
                <tr>
                  <td width="80px">ชื่อ</td>
                  <td><input type="text" value="{{$row->std_name}}" readonly></td>
                  <td>นามสกุล</td>
                  <td><input type="text" value="{{$row->std_lastname}}" readonly></td>
                  <td></td>

                </tr>
                <tr>
                  <td >วันเกิด</td>
                  <td><input type="text" value="{{$row->std_birthdate}}" readonly></td>
                  <td>อายุ</td>
                  <td><input type="text" value="{{$row->std_age}} ปี" size="5" readonly></td>
                  <td></td>

                </tr>
                <tr>
                  <td >โรงเรียน</td>
                  <td colspan="2"><input type="text" value="{{$row->std_school}}" style="width:100%;"></td>
                  <td>ระดับชั้น <input type="text" value="{{$row->std_grade}}" readonly size="10"></td>
                  <td></td>

                </tr>
                <tr>
                  <td >เบอร์โทรศัพท์2</td>
                  <td><input type="text" value="{{$row->std_tel_1}}" readonly></td>
                  <td>เบอร์โทรศัพท์2</td>
                  <td><input type="text" value="{{$row->std_tel_2}}" readonly></td>
                  <td></td>

                </tr>
                <tr>
                  <td>Email</td>
                  <td><input type="text" value="{{$row->std_email}}" readonly></td>
                  <td>Line ID</td>
                  <td><input type="text" value="{{$row->std_line}}" readonly></td>
                  <td></td>

                </tr>
                <tr>
                  <td>Facebook</td>
                  <td><input type="text" value="{{$row->std_facebook}}" readonly></td>
                  <td></td>
                  <td></td>
                  <td></td>

                </tr>
              </table>
            </div>
            <p></p>
              <div style="background-color:#ffffff;padding:10px;border-radius:10px;">
                <h2 style="display:block;text-align: center;">ข้อมูลผู้ปกครอง</h2>
              <table>
                <tr>
                  <td>ชื่อ</td>
                  <td><input type="text" value="{{$row->std_parent_name}}"></td>
                  <td>นามสกุล</td>
                  <td><input type="text" value="{{$row->std_parent_lastname}}"></td>
                  <td></td>
                </tr>
                <tr>
                  <td>ที่อยู่</td>
                  <td colspan="4"><input type="text" value="{{$row->std_parent_address}}" style="width:100%"></td>
                </tr>
                <tr>
                  <td>เบอร์โทรศัพท์ 1</td>
                  <td><input type="text" value="{{$row->std_parent_tel_1}}"></td>
                  <td>เบอร์โทรศัพท์ 2</td>
                  <td><input type="text" value="{{$row->std_parent_tel_2}}"></td>
                  <td></td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td><input type="text" value="{{$row->std_parent_email}}"></td>
                  <td>Line ID</td>
                  <td><input type="text" value="{{$row->std_parent_line}}"></td>
                  <td></td>
                </tr>
                <tr>
                  <td>Facebook</td>
                  <td><input type="text" value="{{$row->std_parent_facebook}}"></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </table>
            </div>
              @endforeach
              @endif
        </div>
      </div>
    </div>


@endsection
