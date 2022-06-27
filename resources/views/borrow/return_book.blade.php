<!-- Page to do register when someone returns a book Figure 16-->
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

    <h4 style="text-align:center"> Return a Book! </h4>
    <!-- form to fill when someone returns a borrowed book -->
    <div style="padding:30px">
        <form action="#" method="#">

        <div class="form-group row">
                Book Id : <!-- book id -->
                <input type="number" name="book_id" value="#" hidden> 
                </div>
        </div>
        <br>
        <div class="form-group row">
                Book Title: <!-- book title -->
        </div>
        <br>
        <div class="form-group row">
                Borrower id:
                <div class="col-sm-2">
                    <select name="member_id">
                        <option></option>
                    </select>
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
