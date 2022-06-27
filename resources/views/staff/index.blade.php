<!-- index page for the staff -->
@extends('dashboard.nav')
@section('content')
<div style="padding:30px">
    <div>
                <a class="btn btn-success" href="#"> Enroll new Staff</a>
   
    </div>
   <!-- message segment -->
    @if ($message = Session::get('success'))
        <div>
            <p>{{ $message }}</p>
        </div>
    @endif
   <!-- end of message segment -->
   <h4 style="text-align:center"> Staff Details </h4>

   <!-- table view to show the staff details with actions -->
    <table  class="table table-bordered">
        <!-- table heading  start-->
        <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>Mobile</th>
           
            <th width="280px">Actions</th>
        </tr>
        <!-- table heading end -->
        <!-- table rows start -->
        <tr>
            <td><!-- id --></td>
            <td><!-- First Name --></td>
            <td><!-- Last Name --></td>
            <td><!-- Address --></td>
            <td><!-- Mobile--></td>
           
            <td>
                <!-- actions -->
            </td>
        </tr>
        <!-- table rows end -->
    </table>
</div>
@endsection
