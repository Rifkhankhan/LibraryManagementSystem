<!-- registration page for members-->
@include('layout')
<div class="container-lg " style=" text-align:center;background:#9e5618;color:white" ><b>Member Registration</b></div>
<div class="container-lg " style=" text-align:center;background:#cfd1cd" >

@if ($errors->any())
    <div >
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<br>
<br>
<!-- registration form for the member -->
<form action="{{route('register')}}" method="post">
    @csrf
    First Name: 
    <input type="text" name="firstname" class="col-sm-2"><br><br>
    Last Name: 
    <input type="text" name="lastname" class="col-sm-2"><br><br>
    E-mail:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
    <input type="email" name="email" class="col-sm-2"><br><br>
    Gender: &nbsp;&nbsp;&nbsp;&nbsp;  
    <select name="gender" class="col-sm-2">
        <option selected> </option>
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select><br><br>
    Address: &nbsp;&nbsp;&nbsp;
    <input type="text" name="address" class="col-sm-2"><br><br>
    Mobile:&nbsp;&nbsp;&nbsp;&nbsp; 
    <input type="text" name="mobile" class="col-sm-2"><br><br>
   
    Password:&nbsp; 
    <input type="password" class="col-sm-2" name="password"><br><br>
    <button type="submit" name="btn" class="btn btn-primary">Sign Up</button>
</form>
<br>
</div>