<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Notification;
use App\Notifications\RegisterNewUser;

use Carbon\Carbon;
use Session;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = 'admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'role'     => 'required',
            'password' => 'required|string|min:6|confirmed',
        ],
        [
          'name.required' =>'Please enter your name',
          'email.required'=>'Please enter your email',
          'role.required' =>'Please select user role',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $create= User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'role_id' => $data['role'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);

        //Notification send
        $users=User::where('role_id',1)->get();
        Notification::send($users, new RegisterNewUser ($create));
        //Notification send end

        if($create){
          Session::flash('success','User registration successfull');
          return redirect()->back();
        }else{
          Session::flash('error','User registration failed');
          return redirect()->back();
        }
    }
}
