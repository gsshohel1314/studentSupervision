<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Routine;
use App\Teacher;
use App\RequestCounselling;
use Carbon\Carbon;
use Session;

class CounsellingRoutineController extends Controller
{
  public function index()
  {
      $data=Teacher::orderBy('id','DESC')->get();
      return view('admin.counsellingRoutine.all',compact('data'));
  }

  public function view($initial){
    $data=Routine::where('initial',$initial)->get();
    return view('admin.counsellingRoutine.view',compact('data'));
  }

}
