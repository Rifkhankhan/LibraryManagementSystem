<!-- Page to do actions on books according to borrower Figure 13 -->
@extends('dashboard.nav')
@section('content')
<div style="padding:30px">
    <!-- message --> 
    @if ($message = Session::get('success'))
        <div>
            <p>{{ $message }}</p>
        </div>
    @endif
    <!-- end of message -->

    <h4 style="text-align:center"> Book Details </h4>
    <!-- table view to show the book details with actions -->
    <table  class="table table-bordered">
        <!-- table heading  start-->
        <tr>
            <th>Book Id</th>
            <th>Book Title</th>
            <th>Author</th>
            <th>Available copies</th>
            <th width="280px">Actions</th>
        </tr>
        <!-- table heading end -->
        <!-- table rows start -->
        <tr>
            <td><!-- id --></td>
            <td><!-- title --></td>
            <td><!-- author --></td>
            <td><!-- available copies --></td>
            <td>
                <!-- actions -->
            </td>
        </tr>
        <!-- table rows end -->
    </table>
 
</div>    
@endsection
