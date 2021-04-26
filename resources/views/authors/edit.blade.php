@extends('layouts.admin')

@section('content')
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main class="bg-white">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <a href="{{ route('authors.index')}}" class="btn btn-primary btn-block m-0 ">Back</a>
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit a Author</h3></div>
                            <div class="card-body">
                                <form action="{{ url('update/authors'. $authors->id) }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label class="mb-1" for="inputProjectname">Author name</label>
                                        <input type="text" class="form-control" name="name" autocomplete="off" value="{{$authors->name}}">
                                    </div>
                                    <div class="mb-3 text-danger">
                                        @error('name')Author name must be valid @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class=" mb-1" for="inputProjectname">Author surname</label>
                                        <input class="form-control" name="surname" autocomplete="off" value="{{$authors->surname}}">
                                    </div>
                                    <div class="mb-3 text-danger">
                                        @error('surname')Author surname must be valid @enderror
                                    </div>
                                    <input type="submit" class="btn btn-success btn-block mt-4" name="add" value="Add editing">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </main>
    </div>
</div>
@endsection