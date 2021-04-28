@extends('layouts.admin')

@section('content')
    <div class="container mt-5 jumbotron text-center">
        <div id="invoice">
        <p class="h5" ><b>Author name:</b> <br> {{$authors->name}}</p>
        <p class="h5" ><b>Author surname:</b> <br>{{$authors->surname}}</p>
        <hr>
        </div>
    <a href="/edit/authors{{$authors->id}}" class="btn btn-warning">Edit</a>
    <a href="{{ URL::to('delete/authors'.$authors->id) }}" onclick="return confirm('Are u sure?')" class="btn btn-danger">Delete</a>
    <a href="{{ route('authors.index')}}" class="btn btn-primary"> Back</a>
    </div>
@endsection