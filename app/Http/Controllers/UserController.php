<?php

namespace App\Http\Controllers;

use App\Notifications\CreateNewUser;
use Illuminate\Support\Facades\Notification;
use App\Notifications\ConfirmNewUser;
use App\Notifications\DenyRegistration;

use Illuminate\Notifications\Notifiable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Hash;
use Brian2694\Toastr\Facades\Toastr;

use Illuminate\Support\Facades\Crypt;

use App\UserRole;
use App\User;
use Carbon\Carbon;
use Session;

class UserController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
      $this->middleware('admin');
    }

    public function index()
    {
      $allUser=User::orderBy('id','DESC')->get();
      return view('admin.user.all',compact('allUser'));
    }


    public function create()
    {
      $allRole=UserRole::where('role_status',1)->get();
      return view('admin.user.add',compact('allRole'));
    }

    public function store(Request $request)
    {
      $this->validate($request,[
        'name'=>'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'role' => 'required',
        //'phone' => 'required|min:11|regex:/^01[3-9]\d{8}$/|unique:users',
        'password' => 'required|string|min:6|confirmed',
      ],[
        'name.required'=>'Please enter your name.',
        'email.required'=>'Please enter your email address.',
        'role.required'=>'Please select user role.',
        //'phone.required'=>'Please enter your phone number.',
      ]);

        $user = new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->role_id=$request->role;
        $user->phone=$request->phone;
        $user->password=Hash::make($request->password);
        $insert=$user->save();

        // $user->notify(new CreateNewUser($user));

        if($insert){
          Session::flash('success','User registration successfull');
          return redirect()->back();
        }else{
          Session::flash('error','User registration failed');
          return redirect()->back();
        }
    }

    public function show(User $user)
    {
      return view('admin.user.view',compact('user'));
    }

    public function edit(User $user)
    {

    }

    public function update(Request $request, User $user)
    {

    }

    public function destroy(User $user)
    {

    }

    public function status($id){
      $data=User::find($id);
      if($data->status==false){
        $data->status=true;
        $data->save();

        //notification send
        $data->notify(new ConfirmNewUser($data));
        //notification end

        Session::flash('success','Request approved Successfull');
        return redirect()->back();
      }else{
        $data->status=false;
        $data->save();

        //notification send
        $data->notify(new DenyRegistration($data));
        //notification end

        Session::flash('success','Request rejected');
        return redirect()->back();
      }
    }
}
