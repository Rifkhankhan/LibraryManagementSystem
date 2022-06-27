<!-- Page to edit the content of book details -->

@extends('dashboard.nav')
@section('content')
<div style = "padding:30px">
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit book Details</h2>
            </div>
           
        </div>
    </div>
   
   <!-- error messages --> 
   @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <!-- end of error message -->
  
    <!-- form to edit the book details -->
    <form action="{{route('books.update',$book->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="row" style = "padding:30px">
            <div class="form-group row">
                    Title:
                    &emsp; &emsp;&emsp;&emsp;&emsp;<div class="col-sm-2">
                    <input type="text" name="title" value="{{$book->title}}" class="form-control">
                    </div>
            </div>
            <br><br>
            <div class="form-group row">
                    Author:
                    &emsp;&emsp;&emsp;&emsp;<div class="col-sm-2">
                    <input type="text" name="author" value="{{$book->author}}" class="form-control">
                    </div>
            </div>
            <br><br>
            <div class="form-group row">
                    Total copies:
                    &emsp;&emsp;<div class="col-sm-2">
                    <input type="number" name="totalcopies" value="{{$book->totalcopies}}" class="form-control">
                    </div>
            </div>
            <br><br>
            <div class="form-group row">
                    Available copies:
                    &nbsp;<div class="col-sm-2">
                    <input type="number" name="availablecopies" value="{{$book->availablecopies}}" class="form-control">
                    </div>
            </div>
            <br><br>
            <div class="col-xs-12 col-sm-12 col-md-12">
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<button type="submit" class="btn btn-success col-sm-1">Edit</button>
            </div>
        </div>
   
    </form>
    <!-- end of form -->
</div>
@endsection