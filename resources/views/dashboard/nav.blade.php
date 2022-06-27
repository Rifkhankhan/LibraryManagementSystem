
@extends('layout')
@section('con1')
<!-- here you can use your own logic to navigate the appropriate menu bar for the respective user -->
<!-- menu bar/nav bar for librarian -->
    @if(Auth::user()->role == 'librarian')
    <div class="btn-warning"><button type="button" class="col-sm-3 btn btn-warning"><!-- lib_name--></button>
    <a href="{{route('librarian.dashboard')}}"><button type="button" class="col-sm-4 btn btn-warning">{{Auth::user()->firstname}}</button></a>
    <a href="{{route('librarian.showstaff')}}"><button type="button" class="col-sm-4 btn btn-warning">Staff</button></a>
        <a href="{{url('books')}}"><button type="button" class="col-sm-4 btn btn-warning">Books</button></a> 
        <a style="float:right" href="{{route('logout')}}"><button type="button"  class=" btn btn-warning">logout</button></a> 
    </div>

<!-- menu bar/nav bar for staff -->
    @elseif(Auth::user()->role == 'staff')
    <div class="btn-warning"><button type="button" class="col-sm-2 btn btn-warning"><!-- staff_name--></button>
        <a href="#"><button type="button" class="col-sm-2 btn btn-warning">Books</button></a>
        <a href="#"><button type="button" class="col-sm-3 btn btn-warning">Borrowed Details</button></a> 
        <a href="#"><button type="button" class="col-sm-3 btn btn-warning">Reset Password</button></a> 
        <a style="float:right" href="{{route('logout')}}"><button type="button"  class=" btn btn-warning">logout</button></a> 
    </div>

<!-- menu bar/nav bar for member -->
    @elseif(Auth::user()->role == 'member')

    <div class="btn-warning"><button type="button" class="col-sm-4 btn btn-warning"><!-- member_name--></button>
        <a href="#"><button type="button" class="col-sm-4 btn btn-warning">Available Books</button></a>
        <a style="float:right" href="{{route('logout')}}"><button type="button"  class=" btn btn-warning">logout</button></a> 
    </div>

    @endif

    @yield('content')
 @endsection

