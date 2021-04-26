@extends('layouts.admin')


@section('content')
<div class="card m-0">
    <div class="card-header ">
      <h4 class="card-title d-inline-block"> Books Table</h4>
      <a href="{{ route('create.books')}}" class="btn btn-primary float-right mt-2">Add a new book</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table">
          <thead class=" text-primary">
            <th> @sortablelink('title')</th>
            <th> Isbn </th>
            <th> Pages </th>
            <th> About </th>
            <th> @sortablelink('author_id') </th>
            <th class="text-right"> Actions </th>
          </thead>
          <tbody>
            @foreach($books as $value)
            <tr>
                <td> {{ $value -> title}} </td>
                <td> {{ $value -> isbn}} </td>
                <td> {{ $value -> pages}} </td>
                <td class="w-25"> {{ $value -> about}} </td>
                <td> {{ $value -> author_id}} </td>
                <td class="text-right">
                    <a href="{{ URL::to('show/books'.$value->id) }}" class="btn btn-info">Show</a>
                    <a href="{{ URL::to('edit/books'.$value->id) }}" class="btn btn-primary">Edit</a>
                    <a href="{{ URL::to('delete/books'.$value->id) }}" onclick="return confirm('Are u sure?')" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {!! $books->appends(Request::except('page'))->render() !!}
      </div>
    </div>
</div>
@endsection