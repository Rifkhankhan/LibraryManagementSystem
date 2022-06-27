<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LibrarianController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\MemberController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', function () {
    return view('index');
});

Route::resource('books',  BookController::class);

Route::post('checklogin',[UserController::class,'checklogin'])->name('checklogin');
Route::get('registerpage',[UserController::class,'registerpage'])->name('registerpage');
Route::post('register',[UserController::class,'register'])->name('register');

Route::prefix('librarian')->group(function(){
    Route::get('dashboard',[LibrarianController::class,'dashboard'])->name('librarian.dashboard');
    Route::get('createstaff',[LibrarianController::class,'index'])->name('librarian.createstaff');
    Route::get('showstaff',[LibrarianController::class,'showstaff'])->name('librarian.showstaff');
    Route::get('staffdetails/{id}',[LibrarianController::class,'staffdetails'])->name('librarian.staffdetails');
    Route::get('staffedit/{id}',[LibrarianController::class,'staffedit'])->name('librarian.staffedit');
    Route::get('staffdelete/{id}',[LibrarianController::class,'staffdelete'])->name('librarian.staffdelete');
    Route::post('staffupdate/{id}',[LibrarianController::class,'staffupdate'])->name('librarian.staffupdate');
    Route::post('createStaff',[LibrarianController::class,'createStaff'])->name('librarian.createStaff');
    Route::post('createbook',[LibrarianController::class,'createbook'])->name('librarian.createbook');
});
Route::get('logout',[LibrarianController::class,'logout'])->name('logout');


Route::prefix('staff')->group(function(){
    Route::get('/',[StaffController::class,'index'])->name('staff.dashboard');
    Route::get('/showbooks',[StaffController::class,'showbooks'])->name('staff.showbooks');
    Route::get('/resetpasswordpage',[StaffController::class,'resetpasswordpage'])->name('staff.resetpasswordpage');
    Route::get('/updatepassword',[StaffController::class,'updatepassword'])->name('staff.updatepassword');
});

Route::prefix('member')->group(function(){
    Route::get('/',[MemberController::class,'index'])->name('member.dashboard');
    Route::get('/showbooks',[MemberController::class,'showbooks'])->name('member.showbooks');
});
