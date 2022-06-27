<!-- Page for adding a new staff to the system -->

@extends('dashboard.nav')

@section('content')
<div style="padding:30px">
<div>
            <h2>Reset your password</h2>
 
</div>
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
 
<div style="padding:30px">  
<!-- form to fill up to change the password -->
<form action="#" method="#">
     
        <div class="form-group row">
            Current Password:
            &emsp; &emsp;<div class="col-sm-2">
                <input type="password" name="psw" class="form-control">
            </div>
        </div>
        <br>
        <div class="form-group row">
        New Password:
        &emsp; &emsp;  &emsp;<div class="col-sm-2">
                <input type="password" name="password" class="form-control">
            </div>
        </div>
        <br>
        <div class="form-group row">
        Confirm New Password:
            <div class="col-sm-2">
                <input type="password" name="npsw" class="form-control">
            </div>
        </div>
        <br>
        <div class="form-group row">
            
            <div class="col-sm-4">
            &emsp;&emsp;&emsp;&emsp; <button type="submit" class="btn btn-primary col-sm-4">Change</button>
            </div>
        </div>
      
    
   
</form>
</div>
</div>
<!-- end of form -->
@endsection