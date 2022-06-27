@extends('dashboard.nav')
@section('content')
<div style="padding:30px">
        <div>
        <a href="{{route('librarian.createstaff')}}" class="btn btn-success">Entroll new Staff</a>
        </div>
    
    <!-- message --> 
    @if ($message = Session::get('success'))
        <div>
            <p>{{ $message }}</p>
        </div>
    @endif
    <!-- end of message -->
    <h4 style="text-align:center"> Staff Details </h4>

<table  class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last name</th>
        <th>address</th>
        <th>mobile</th>
        <th>action</th>
    </tr>
    @foreach($staffs as $staff)
    <tr>
        <td>{{$staff->id}}</td>
        <td>{{$staff->firstname}}</td>
        <td>{{$staff->lastname}}</td>
        <td>{{$staff->address}}</td>
        <td>{{$staff->mobile}}</td>
        <td>
            <a href="{{route('librarian.staffdetails',$staff->id)}}" class="btn btn-primary">Show</a>
            <a href="{{route('librarian.staffedit',$staff->id)}}" class="btn btn-success">Edit</a>
            <a href="{{route('librarian.staffdelete',$staff->id)}}" class="btn btn-danger">Delete</a>
        </td>
    </tr>
    @endforeach

</table>

@endsection

