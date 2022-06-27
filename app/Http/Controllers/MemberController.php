<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
class MemberController extends Controller
{
    public function index(){
        return view('dashboard.member');
    }

    public function showbooks()
    {
        $books = Book::all();

        return view('member.showbooks',compact('books'));
    }
}
