<!-- Page for members to view the book status Figure 19-->

@extends('dashboard.nav')
@section('content')
<div style="padding:30px">
    
    <!-- table view to show the borrowed book details -->
    <table  class="table table-bordered">
        <!-- table heading  start-->
        <tr>
            <th>Book Id</th>
            <th>Book Title</th>
            <th>Author</th>
            <th>Availability</th>  
        </tr>
        <!-- table heading end -->
        <!-- table rows start -->
        <tr>
            <td><!-- id --></td>
            <td><!-- title --></td>
            <td><!-- author --></td>
            <td><!-- availability --></td>
        </tr>
        <!-- table rows end -->
    </table>
 
</div>    
@endsection