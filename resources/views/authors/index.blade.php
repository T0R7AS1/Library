@extends('layouts.admin')


@section('content')
<div class="card m-0">
    <div class="card-header ">
      <h4 class="card-title d-inline-block"> Authors Table</h4>
      <a href="{{ route('create.authors')}}" class="btn btn-primary float-right mt-2">Add a new author</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table">
          <thead class=" text-primary">
            <th scope="col"> Name</th>
            <th scope="col"> Surname </th>
            <th class="text-right"> Actions </th>
          </thead>
          <tbody>
            @foreach($authors as $value)
            <tr>
                <td class="w-25"> {{ $value -> name}} </td>
                <td class="w-25"> {{ $value -> surname}} </td>
                <td class="text-right">
                    <a href="{{ URL::to('show/authors'.$value->id) }}" class="btn btn-info">Show</a>
                    <a href="{{ URL::to('edit/authors'.$value->id) }}" class="btn btn-primary">Edit</a>
                    <a href="{{ URL::to('delete/authors'.$value->id) }}" onclick="return confirm('Are u sure?')" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {!! $authors->appends(Request::except('page'))->render() !!}
      </div>
    </div>
</div>
@endsection