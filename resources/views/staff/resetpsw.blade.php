<!-- Page for adding a new staff to the system -->

@extends('dashboard.nav')

@section('content')
<div style="padding:30px">
<div>
            <h2>Reset your password</h2>

</div>
<!-- error messages -->
@if (session('error'))
   <div class="alert alert-danger">
      <strong>Whoops!</strong> {{session('error')}}<br><br>
    <ul>
        @foreach ($errors->all() as $error)
            <p></p>{{ $error }}</p>
        @endforeach
    </ul>
  </div>
@endif
 <!-- end of message -->

<div style="padding:30px">
<!-- form to fill up to change the password -->
<form action="{{route('staff.updatepassword')}}" method="#">

        <div class="form-group row">
            Current Password:
            &emsp; &emsp;<div class="col-sm-2">
                <input type="password" name="password" class="form-control">
            </div>
        </div>
        <br>
        <div class="form-group row">
        New Password:
        &emsp; &emsp;  &emsp;<div class="col-sm-2">
                <input type="password" name="npassword" class="form-control">
            </div>
        </div>
        <br>
        <div class="form-group row">
        Confirm New Password:
            <div class="col-sm-2">
                <input type="password" name="cpassword" class="form-control">
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
