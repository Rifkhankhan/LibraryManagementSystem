<!-- login page -->
@include('layout')

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
<form action ="{{route('checklogin')}}" method = "post">
    @csrf
    <br><br>
    Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "email" name ="email" ><br><br> 
    Password: <input type ="password" name = "password"><br><br>
    <button type = "submit" class="btn btn-primary" name = "logbtn">Login </button><br><br>
    Don't have an Account yet?
    <a href ="{{route('registerpage')}}"> Register </a>
</form>
<br><br>
</div>



</body>
</html>
