<!-- Page to do register when someone borrow a book Figure 14-->
@extends('dashboard.nav')
@section('content')
<div style="padding:30px">
    <!-- message --> 
    @if ($message = Session::get('success'))
        <div>
            <p>{{ $message }}</p>
        </div>
    @endif
    <!-- end of message -->

    <h4 style="text-align:center"> Borrow a Book! </h4>
  
    <div style="padding:30px">
    <!-- form to fill when a member borrows a book -->
    <form action="#" method="#">

        <div class="form-group row">
        Book Id : <!-- book id -->
        <input type="number" name="book_id" value="#" hidden> 
        </div>
        <br>
        <div class="form-group row">
                Book Title: <!-- book title -->
        </div>
        <br>
        <div class="form-group row">
                Borrower id:
                <div class="col-sm-2">
                <input type="number" name="member_id"  class="form-control">
                </div>
        </div>
        <br>
        <div class="col-xs-12 col-sm-12 col-md-12 ">
                &emsp;&emsp; &emsp;&emsp;   <button type="submit" class="btn btn-success">Submit</button>
        </div>

    </form>
</div>
</div>    
@endsection
