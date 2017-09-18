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

    return view('reportForm',['stdinfos' => $stdinfo]);
  }

  function searchInfo(Request $req)
  {
    $result = $req->input('search');

    $data = DB::table('student')->where('std_nickname','LIKE','%'.$result.'%')->get();

    return view('reportForm',['datas'=>$data]);
  }
}
