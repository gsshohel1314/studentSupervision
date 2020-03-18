<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\NewCounsellingRequest;
use App\Routine;
use App\User;
use App\Teacher;
use App\RequestCounselling;
use Carbon\Carbon;
use Session;

class CounsellingController extends Controller
{
  public function index()
  {
      $data=Teacher::orderBy('id','DESC')->get();
      return view('admin.counselling.all',compact('data'));
  }

  public function view($initial){
    $data=Routine::where('initial',$initial)->get();
    //$data=Routine::join('teachers','routines.initial','=','teachers.initial')->get();
    //return $data;
    return view('admin.counselling.view',compact('data'));
  }

  public function show($id){
    $data=Routine::where('id',$id)->get();
    return view('admin.counselling.add',compact('data'));
  }

  public function add(){
    return view('admin.counselling.add');
  }

  public function insert(Request $request){
    $insert=new RequestCounselling();
    $insert->tName=$request->tName;
    $insert->tEmail=$request->tEmail;
    $insert->sName=$request->sName;
    $insert->sEmail=$request->sEmail;
    $insert->day=$request->day;
    $insert->time=$request->time;
    $insert->save();


    // $teachers=Teacher::all();
    // foreach ($teachers as $teacher) {
    //   // if($insert->tEmai){
    //   //   $insert->notify(new NewCounsellingRequest($insert));
    //   // }
    //
    // }

    Notification::route('mail', $insert->tEmail)->notify(new NewCounsellingRequest($insert));

    Session::flash('success','User registration successfull');
    return back();

    Session::flash('error','User registration failed');
    return back();

  }
}
