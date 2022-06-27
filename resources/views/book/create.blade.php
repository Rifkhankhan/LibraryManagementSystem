<!-- Page for adding a new book to the system -->

@extends('dashboard.nav')
@section('content')
<div>
<div>
            <h2>Add new Book</h2>
 
<div style="padding:30px">
<!-- error messages -->
@if ($errors->any())
    <div>
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 <!-- end of message -->
   
<!-- form to fill up to add a new book -->

<form action="{{route('books.store')}}" method="post">
    @csrf
    <div class="form-group row">
            Title:
            &emsp; &emsp;&emsp;<div class="col-sm-2">
             <input type="text" name="title" class="form-control">
            </div>
    </div>
    <br>
    <div class="form-group row">
            Author:
            &emsp;&emsp;<div class="col-sm-2">
                <input type="text" name="author" class="form-control">
            </div>
    </div>
    <br>
    <div class="form-group row">
            Total copies:
            <div class="col-sm-2">
                <input type="number" name="totalcopies" class="form-control">
            </div>
    </div>
    <br>
    <div class="col-xs-12 col-sm-12 col-md-12 ">
            &emsp;&emsp; &emsp;&emsp;   <button type="submit" class="btn btn-success">Add</button>
    </div>
   
</form>
</div>
<!-- end of form -->
@endsection
