<!-- registration page for members-->
@extends('dashboard.nav')
@section('content')


<!-- registration form for the member -->
<form action="{{route('librarian.staffupdate',$staff->id)}}" method="post">
    @csrf
    First Name: 
    <input type="text" name="firstname" class="col-sm-2" value="{{$staff->firstname}}"><br><br>
    Last Name: 
    <input type="text" name="lastname" class="col-sm-2" value="{{$staff->lastname}}"><br><br>
    E-mail:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
    <input type="email" name="email" class="col-sm-2" value="{{$staff->email}}"><br><br>
    Gender: &nbsp;&nbsp;&nbsp;&nbsp;  
    <select name="gender" class="col-sm-2">
        <option selected> </option>
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select><br><br>
    Address: &nbsp;&nbsp;&nbsp;
    <input type="text" name="address" class="col-sm-2" value="{{$staff->address}}"><br><br>
    <input type="hidden" name="role" class="col-sm-2" value="{{$staff->role}}"><br><br>
    Mobile:&nbsp;&nbsp;&nbsp;&nbsp; 
    <input type="text" name="mobile" class="col-sm-2" value="{{$staff->mobile}}"><br><br>
   
    Password:&nbsp; 
    <input type="password" class="col-sm-2" name="password"><br><br>
    <button type="submit" name="btn" class="btn btn-primary">update</button>
</form>
<br>
</div>

@endsection
