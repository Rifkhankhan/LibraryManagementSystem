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
        <th>Book Name</th>
        <th>Author</th>
        <th>Total Copies</th>
        <th>Available Copies</th>
    </tr>
    @foreach($books as $book)
    <tr>
        <td>{{$book->id}}</td>
        <td>{{$book->title}}</td>
        <td>{{$book->author}}</td>
        <td>{{$book->totalcopies}}</td>
        <td>{{$book->availablecopies}}</td>
        <td>
            @if($book->availablecopies == 1)
                <a>Read only</a>
                <a href="" class="btn btn-success">Return</a>
            @else
                <a href="" class="btn btn-primary">Borrow</a>
                <a href="" class="btn btn-success">Return</a>
                @endif
        </td>
    </tr>

    @endforeach

</table>

@endsection

