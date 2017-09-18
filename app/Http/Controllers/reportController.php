<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;

class reportController extends Controller
{
    function selectStudent ()
  {
    $stdinfo = DB::table('student')->get();

    return view('reportForm');
  }

  function searchInfo(Request $req)
  { 

    foreach ($_POST as $key => $value) {

    }

   if(!empty($key == 'search')){
    $result = $req->input('insNickname');

    $data = DB::table('student')->where('std_nickname','LIKE','%'.$result.'%')->get();

    return view('reportForm',['datas'=>$data]);

  }else if(!empty($key == 'select')) {

    $stdSelect = $req->input('select');

    $student = DB::table('student')->where('std_id','=',$stdSelect)->get();

    return view('reportStudent',['students' =>$student]);

  }
  }
}
