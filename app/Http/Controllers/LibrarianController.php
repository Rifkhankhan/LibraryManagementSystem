<?php

namespace App\Http\Controllers;
use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;

class LibrarianController extends Controller
{
    public function index()
    {
        return view('librarian.createstaff');
    }

    public function dashboard()
    {
        return view('dashboard.librarian');
    }

    public function showstaff()
    {
        $staffs = User::where('role','staff')->get();
        return view('librarian.staff.showstaff',compact('staffs'));
    }


    public function createStaff(Request $request)
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
            'role'=>'staff'
        ]);

        $staffs = User::where('role','staff')->get();
        return view('librarian.staff.showstaff',compact('staffs'));
    }


    public function logout()
    {
        Auth::logout();

        return view('index');
    }

    public function staffdetails($id)
    {
        $staff = User::find($id);

        return view('librarian.staff.staffdetails',compact('staff'));
    }

    public function staffedit($id)
    {
        $staff = User::find($id);

        return view('librarian.staff.staffedit',compact('staff'));
    }

    public function staffupdate(Request $request,$id)
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


        User::where('id',$id)->update([
            'lastname'=>$request->lastname,
            'firstname'=>$request->firstname,
            'email'=>$request->email,
            'gender'=>$request->gender,
            'address'=>$request->address,
            'mobile'=>$request->mobile,
            'password'=>Hash::make($request->password),
        ]);

        return redirect()->route('librarian.showstaff');
    }

    public function staffdelete($id)
    {

        User::where('id',$id)->delete();
        return back();
    }
}
