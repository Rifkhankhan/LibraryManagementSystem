<!-- Page to show the details of the book -->

@extends('dashboard.nav')
@section('content')
<div class="row" style="padding:30px">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Book Details</h2>
            </div>
           
        </div>
    </div>
   <!-- template to show the details -->
    <div class="row" style="padding:30px">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                {{$book->title}}
            </div>
        </div>
        <br>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Author:</strong>
                {{$book->author}}
            </div>
        </div>
        <br>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Total copies:</strong>
                {{$book->totalcopies}}
            </div>
        </div>
        <br>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Available copies:</strong>
                {{$book->availablecopies}}
            </div>
        </div>
        <div class="form-group row">
               
               <div class="col-sm-2"></div>
               <div class="col-sm-3">
              <a  href="{{route('books.index')}}" class="btn btn-success col-sm-4">Ok</a>
               </div>
        </div>
    </div>
@endsection

