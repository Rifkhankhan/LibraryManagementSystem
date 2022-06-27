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
    <h4 style="text-align:center"> Staff Details </h4>

<table  class="table table-bordered">
    <tr>
        <th>Book ID</th>
        <th>Book Title</th>
        <th>Author</th>
        <th>Availabilty</th>
    </tr>
    @foreach($books as $book)
    <tr>
        <td>{{$book->id}}</td>
        <td>{{$book->title}}</td>
        <td>{{$book->author}}</td>
        <td>{{$book->availablecopies}}</td>
        <td>
            @if($book->availablecopies == 1)
                <a>Available to Read Only</a>
            @else
                <a>Available to Borrow</a>
            @endif
        </td>
    </tr>

    @endforeach

</table>

@endsection

