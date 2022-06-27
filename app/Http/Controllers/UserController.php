<?php

namespace App\Http\Controllers;
use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function checklogin(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        $user_data =[
            'email'=>$request->email,
            'password'=>$request->password,
        ];

        if(Auth::attempt($user_data))
        {
            if(Auth::user()->role == 'librarian')
            {
                return view('dashboard.librarian');
            }
            else if(Auth::user()->role == 'staff')
            {
                return view('dashboard.staff');
            }
            else if(Auth::user()->role == 'member')
            {
                return view('dashboard.member');
            }
        }
        else
        {
            return back();
        }


    }

    public function registerpage()
    {
        
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'lastname'=>'required',
            'firstname'=>'required',
            'email'=>'required|email',
            'gender'=>'required',
            'address'=>'required',
            'mobile'=>'required',
            'password'=>'required|alphaNum|min:8',
        ]);


        User::insert([
            'lastname'=>$request->lastname,
            'firstname'=>$request->firstname,
            'email'=>$request->email,
            'gender'=>$request->gender,
            'address'=>$request->address,
            'mobile'=>$request->mobile,
            'password'=>Hash::make($request->password),
            'role'=>'member'
        ]);

        $user_data =[
            'email'=>$request->email,
            'password'=>$request->password,
        ];

        if(Auth::attempt($user_data))
        {
            if(Auth::user()->role == 'librarian')
            {
                return view('dashboard.librarian');
            }
            else if(Auth::user()->role == 'staff')
            {
                return view('dashboard.staff');
            }
            else if(Auth::user()->role == 'member')
            {
                return view('dashboard.member');
            }
        }
        else
        {
            return back();
        }

    }
}
