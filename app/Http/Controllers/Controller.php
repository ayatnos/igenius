<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function insertStudent(Request $req)

    {
      $stdSex = $req->input('stdSex');
      $stdName = $req->input('stdName');
      $stdLastName = $req->input('stdLastName');
      $stdNickName = $req->input('stdNickName');
      $stdBirthdate = $req->input('stdBirthdate');
      $stdAge = $req->input('stdAge');
      $stdSchool = $req->input('stdSchool');
      $stdGrade = $req->input('stdGrade');
      $stdTel1 = $req->input('stdTel1');
      $stdTel2 = $req->input('stdTel2');
      $stdEmail = $req->input('stdEmail');
      $stdLine = $req->input('stdLine');
      $stdFacebook = $req->input('stdFacebook');
      $parName = $req->input('parName');
      $parLastName = $req->input('parLastName');
      $parAddress = $req->input('parAddress');
      $parTel1 = $req->input('parTel1');
      $parTel2 = $req->input('parTel2');
      $parEmail = $req->input('parEmail');
      $parLine = $req->input('parLine');
      $parFacebook = $req->input('parFacebook');

      $data  = array(
        'std_name' => $stdSex . $stdName,
        'std_lastname' => $stdLastName,
        'std_nickname' => $stdNickName,
        'std_birthdate' => $stdBirthdate,
        'std_age' => $stdAge,
        'std_school' => $stdSchool,
        'std_grade' => $stdGrade,
        'std_tel_1' => $stdTel1,
        'std_tel_2' => $stdTel2,
        'std_email' => $stdEmail,
        'std_line' => $stdLine,
        'std_facebook' => $stdFacebook,
        'std_parent_name' => $parName,
        'std_parent_lastname' => $parLastName,
        'std_parent_address' => $parAddress,
        'std_parent_tel_1' => $parTel1,
        'std_parent_tel_2' => $parTel2,
        'std_parent_email' => $parEmail,
        'std_parent_line' => $parLine,
        'std_parent_facebook' => $parFacebook

      );

      DB::table('student')->insertGetId($data);

return redirect('corseSelect');

  }

   function insertCorse(Request $req)
  {
    $corseName = $req->input('corseName');
    $corseTime = $req->input('corseTime');

    $data = array('corse_name' => $corseName,'corse_time' => $corseTime );

    DB::table('corse')->insertGetId($data);

    echo "Sucsess";

    return redirect('corseForm');

  }
   function insertTeacher(Request $req)
  {
    $teaName = $req->input('teaName');
    $teaLastName = $req->input('teaLastname');
    $teaTel1 = $req->input('teaTel1');
    $teaTel2 = $req->input('teaTel2');
    $teaEmail = $req->input('teaEmail');
    $teaLine = $req->input('teaLine');

    $data = array(
      'tea_name' => $teaName,
      'tea_lastname' => $teaLastName,
      'tea_tel_1' => $teaTel1,
      'tea_tel_2' => $teaTel2,
      'tea_email' => $teaEmail,
      'tea_line' => $teaLine
    );

    DB::table('teacher')->insertGetId($data);

    $msg = "Sucsess";
    echo "<script type='text/javascript'>alert('$msg');</script>";


    return redirect('teacherForm');
  }

   function selectStd()
  {
    $student = DB::table('student')->orderBy('std_id', 'desc')->get();
    $corse = DB::table('corse')->get();

    return view('corseSelect',['students' => $student,'corses'=>$corse]);

  }
   function insertStudy(Request $req)
 {
    $stdId = $req->input('std');
    $corseId = $req->input('corse');
    $day = $req->input('day');
    $stuTime = $req->input('time');
    $stuExp = 0;

    $data = array(
      'std_id' => $stdId,
      'corse_name' => $corseId,
      'stu_date' => $day,
      'stu_time' => $stuTime,
      'stu_exp' => $stuExp
     );
    DB::table('study')->insertGetId($data);

    return redirect('home')->with('status', 'Sucsess');
 }
  function selectStdClass ()
 {

   $teacher = DB::table('teacher')->get();

   $study = DB::table('study')
              ->join('student','student.std_id', '=' ,'study.std_id')
              ->get();



   return view('classRecord',['studyClasses'=>$study,'teachers'=>$teacher]);


 }

<<<<<<< HEAD
  function insertClassRecord(Request $r)
 {
	print_r($_POST);


   $stdId = $r->input('classStdId');
   $corseName = DB::table('study')->select('corse_name')->where('std_id','=',$stdId)->get();
   $corse = '';
   foreach($corseName as $row){
     $corse = $row->corse_name;
   }
   $classNum = DB::table('class')->select('class_num')->where('std_id','=',$stdId)->get();
   $num ='1';
   foreach ($classNum as $row){

     if(!empty($row->class_num)){
       $num = $row->class_num + 1;
     }else{
       $num = '1';
     }
=======
   function insertClassRecord(Request $r)
 {


   foreach ($_POST as $key => $value) {
>>>>>>> e931e79da319f74053855275f3a216313dbee629
   }

   if(!empty($key == 'search')){
 $stdIdSearch = $r->input('classStdId');

     $stdStudy = DB::table('study')->where('std_id','=', $stdIdSearch)->get();
     $std = DB::table('student')->where('std_id','=',$stdIdSearch)->get();
     $teacher = DB::table('teacher')->get();

     $study = DB::table('study')
                ->join('student','student.std_id', '=' ,'study.std_id')
                ->get();
    $getClass = DB::table('class')->where('std_id','=',$stdIdSearch)->get();
    $getNum = DB::table('class')->where('std_id','=',$stdIdSearch)->max('class_num');

if(!empty($getNum)){
  $getNum+=1;
}else {
  $getNum = 1;
}

    return view('classRecord',['getNums'=>$getNum,'getClasses'=>$getClass,'stds'=> $std,'studyClasses'=>$study,'teachers'=>$teacher,'stdStudys'=>$stdStudy])->with('message','hello wold');

   }else if(!empty($key == 'save')){
     $stdId = $r->input('stdId');
     $classNum = $r->input('classNum');
     $corse = $r->input('corse');
   $classDate = $r->input('classDate');
   $classTime = $r->input('classTime');
   $classSubject = $r->input('classSubject');
   $classTeacher = $r->input('classTeacher');

   $data  = array(
     'std_id' => $stdId,
      'corse_name' => $corse,
      'class_num' => $classNum,
      'class_date' => $classDate,
      'class_time' => $classTime,
      'class_subject' => $classSubject,
      'class_teacher' => $classTeacher
    );

    DB::table('class')->insertGetId($data);
<<<<<<< HEAD
	
      return redirect('classRecord')->with('messege','Sucsess');
}
 


   function insStdReport(Request $req)
=======

      return redirect('classRecord')->with('message','Sucsess');
    }
 }



  public function insStdReport(Request $req)
>>>>>>> e931e79da319f74053855275f3a216313dbee629
 {
   $getId = $req->input('getId');
   $student = DB::table('student')->get();
   $getstdInfo = DB::table('student')->where('std_id','=', $getId)->orderBy('std_nickname','asc')->get();//ข้อมูลนักเรียน
   $getClass = DB::table('class')->where('std_id','=', $getId)->get();//ข้อมูลเรียน


   $datas = '';

     foreach($getClass as $row)
     {

       $datas = $row->corse_name;
     }
   //$getTea = DB::table('teacher')->select('tea_name')->where('tea_id','=', $data)->get();//ดึงชื่ออาจารย์
   $getCorse = DB::table('study')->where('std_id','=', $getId)->get();//ดึงชื่อคอร์ส




   //$query = DB::table('users')->select('name');

  //$users = $query->addSelect('age')->get();
// $userRecord = Model::where('email', '=', $email)->where('password', '=', $password)->get();
   return view('reportForm',['stdInfos' => $getstdInfo, 'getClasses' => $getClass,
   'getCorses' => $getCorse,'students'=> $student]);


 }

}
