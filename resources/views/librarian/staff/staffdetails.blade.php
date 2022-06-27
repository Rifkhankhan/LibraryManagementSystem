<!-- Page to show the details of the book -->

@extends('dashboard.nav')
@section('content')
<div class="row" style="padding:30px">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>staff Details</h2>
            </div>
           
        </div>
    </div>
   <!-- template to show the details -->
    <div class="row" style="padding:30px">

    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>id:</strong>
                {{$staff->id}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>firstname:</strong>
                {{$staff->firstname}}
            </div>
        </div>
        <br>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>lastname:</strong>
                {{$staff->lastname}}
            </div>
        </div>
        <br>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>email:</strong>
                {{$staff->email}}
            </div>
        </div>
        <br>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>genter :</strong>
                {{$staff->genter}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>address :</strong>
                {{$staff->address}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>mobile :</strong>
                {{$staff->mobile}}
            </div>
        </div>
       
    </div>
@endsection

