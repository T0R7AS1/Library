@extends('layouts.admin')

@section('content')
    <div class="container mt-5 jumbotron text-center">
        <div id="invoice">
        <p class="h5" ><b>Book title:</b> <br> {{$books->title}}</p>
        <p class="h5" ><b>Book Isbn:</b> <br>{{$books->isbn}}</p>
        <p class="h5" ><b>Books amount of pages:</b> <br>{{$books->pages}}</p>
        <p class="h5" ><b>About a book:</b> <br>{!!$books->about!!}</p>
        <p class="h5" ><b>Book Author:</b> <br>{{$books->author_id}}</p>
        <hr>
        </div>
    <a href="/edit/books{{$books->id}}" class="btn btn-warning">Edit</a>
    <a href="{{ URL::to('delete/books'.$books->id) }}" onclick="return confirm('Are u sure?')" class="btn btn-danger">Delete</a>
    <a href="{{ route('books.index')}}" class="btn btn-primary"> Back</a>
    </div>
@endsection