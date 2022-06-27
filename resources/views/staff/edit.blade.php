<!-- Page to edit the staff details -->
@extends('dashboard.nav')
@section('content')
<div style = "padding:30px">
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Staff Details</h2>
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
    <form action="#" method="#">
        <div style = "padding:30px">
            <div class="form-group row">
                First Name:
                <div class="col-sm-2">
                    <input type="text" name="firstname" class="form-control" value="#">
                </div>
                &emsp;&emsp;Last Name: 
                <div class="col-sm-2">
                    <input type="text" name="lastname" class="form-control" value="#">
                </div>
            </div>
            <br>
            <div class="form-group row">
            &emsp;&emsp;E-mail:
                <div class="col-sm-2">
                    <input type="email" name="email" class="form-control" value="#">
                </div>
                &emsp;&emsp;&emsp;Gender: 
                <div class="col-sm-2">
                    <input type="text" name="gender" class="form-control" value="#">
                </div>
            </div>
            <br>
            <div class="form-group row">
            &emsp;Address:
                <div class="col-sm-2">
                    <input type="text" name="address" class="form-control" value="#">
                </div>
                &emsp;&emsp;Mobile No: 
                <div class="col-sm-2">
                    <input type="text" name="mobile" class="form-control" value="#">
                </div>
            </div>
            <br>
            <div class="form-group row">
               
                <div class="col-sm-2"></div>
                
                <div class="col-sm-4">
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <button type="submit" class="btn btn-success col-sm-4">Edit</button>
                </div>
            </div>
        </div>
    </form>
    <!-- end of form -->
</div>
@endsection