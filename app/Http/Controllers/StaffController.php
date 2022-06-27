<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\User;
use Hash;
use Auth;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
        return view('dashboard.staff');
    }

    public function showbooks()
    {
        $books = Book::all();

        return view('staff.bookpage',compact('books'));
    }

    public function resetpasswordpage()
    {
        return view('staff.resetpsw');
    }

    public function updatepassword(Request $request)
    {

        $request->validate([
            'password'=>'required|alphaNum|min:8',
            'npassword'=>'required|alphaNum|min:8',
            'cpassword'=>'required|alphaNum|min:8'
        ]);

        if(Hash::check($request->password,Auth::user()->password))
        {
            if($request->npassword == $request->cpassword)
            {
                User::where('id',Auth::user()->id)->update([
                    'password'=>Hash::make($request->npassword)
                ]);

                return back();
            }
            else
            {
                return back()->with('error','Your Confirmation password not match');
            }

        }
        else
        {
            return back()->with('error','Your Password is Incorrect');
        }

    }
}
