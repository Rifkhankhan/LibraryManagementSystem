<!-- index page for the book detail -->

@extends('dashboard.nav')
@section('content')
<div style="padding:30px">
        <div>
            <a class="btn btn-success" href="{{ route('books.create') }}"> Add new Book</a>
        </div>
    

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
            <th>Title</th>
            <th>Author</th>
           
            <th width="280px">Actions</th>
        </tr>
        <!-- table heading end -->
        <!-- table rows start -->
        @foreach ($books as $book)
        <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author }}</td>
            <td>
                <form action="{{ route('books.destroy',$book->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('books.show',$book->id) }}">Show</a>
                    <a  class="btn btn-warning" href="{{ route('books.edit',$book->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit" >Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        <!-- table rows end -->
    </table>
 
</div>    
@endsection