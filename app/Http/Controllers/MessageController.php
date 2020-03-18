<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Notifications\Notifiable;
use App\Notifications\adminMessage;
use App\Notifications\teacherMessage;
use App\Notifications\studentMessage;
use Carbon\Carbon;
use Session;


class MessageController extends Controller
{
    public function index()
    {
        $allUser=User::all();
        return view('admin.adminMessage.all',compact('allUser'));
    }

    public function view($id)
    {
        $data=User::where('id',$id)->get();
        //return $data;
        return view('admin.adminMessage.add',compact('data'));
    }


    public function store(Request $request)
    {
      $data=new Message();
      $data->name=$request->name;
      $data->email=$request->email;
      $data->role=$request->role;
      $data->subject=$request->subject;
      $data->description=$request->description;
      $data->save();

      $data->notify(new adminMessage($data));

      Session::flash('success','Message Send successfull');
      return redirect()->back();

      Session::flash('error','Message Send failed');
      return redirect()->back();
    }

    public function show(Message $message)
    {

    }

    public function allMessageView( $id )
    {
      $message=Message::where('id',$id)->get();
      return view('admin.adminMessage.view',compact('message'));
    }



    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        //
    }

    public function allStudent()
    {
        $allUser=User::where('role_id',3)->get();
        //return $allUser;
        return view('admin.teacherMessage.all',compact('allUser'));
    }

    public function viewTeacher($id)
    {
        $data=User::where('id',$id)->get();
        //return $data;
        return view('admin.teacherMessage.add',compact('data'));
    }

    public function sendTeacher(Request $request){
      $data=new Message();
      $data->name=$request->name;
      $data->email=$request->email;
      $data->role=$request->role;
      $data->subject=$request->subject;
      $data->description=$request->description;
      $data->save();

      $data->notify(new teacherMessage($data));

      Session::flash('success','Message Send successfull');
      return redirect()->back();

      Session::flash('error','Message Send failed');
      return redirect()->back();
    }




    public function allTeacher()
    {
        $allUser=User::where('role_id',2)->get();
        //return $allUser;
        return view('admin.studentMessage.all',compact('allUser'));
    }

    public function viewStudent($id)
    {
        $data=User::where('id',$id)->get();
        //return $data;
        return view('admin.studentMessage.add',compact('data'));
    }

    public function sendStudent(Request $request){
      $data=new Message();
      $data->name=$request->name;
      $data->email=$request->email;
      $data->role=$request->role;
      $data->subject=$request->subject;
      $data->description=$request->description;
      $data->save();

      $data->notify(new studentMessage($data));

      Session::flash('success','Message Send successfull');
      return redirect()->back();

      Session::flash('error','Message Send failed');
      return redirect()->back();
    }

    public function allMessage()
    {
      $data=Message::all();
      return view('admin.adminMessage.allMessage',compact('data'));
    }
}
