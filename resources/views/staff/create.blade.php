<!-- Page for adding a new staff to the system -->

@extends('dashboard.nav')

@section('content')
<div>
            <h2>Add new Staff</h2>
 
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
<!-- form to fill up to add a new staff -->
<form action="#" method="#">
     
        <div class="form-group row">
            First Name:
            <div class="col-sm-2">
                <input type="text" name="firstname" class="form-control">
            </div>
            &emsp;&emsp;Last Name: 
            <div class="col-sm-2">
                <input type="text" name="lastname" class="form-control">
            </div>
        </div>
        <br>
        <div class="form-group row">
        &emsp;&emsp;E-mail:
            <div class="col-sm-2">
                <input type="email" name="email" class="form-control">
            </div>
            &emsp;&emsp;&emsp;Gender: 
            <div class="col-sm-2">
                <select name="gender"  class="form-control">
                    <option selected> </option>
                    <option value="m">Male</option>
                    <option value="f">Female</option>
                </select>
            </div>
        </div>
        <br>
        <div class="form-group row">
        &emsp;Address:
            <div class="col-sm-2">
                <input type="text" name="address" class="form-control">
            </div>
            &emsp;&emsp;Mobile No: 
            <div class="col-sm-2">
                <input type="text" name="mobile" class="form-control">
            </div>
        </div>
        <br>
        <div class="form-group row">
            Password:
            <div class="col-sm-2">
                <input type="password" name="password" class="form-control">
            </div>
            
            <div class="col-sm-4">
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <button type="submit" class="btn btn-success col-sm-4">Enroll</button>
            </div>
        </div>
      
    
   
</form>
</div>
<!-- end of form -->
@endsection