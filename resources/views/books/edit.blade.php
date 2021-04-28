@extends('layouts.admin')

@section('content')
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main class="bg-white">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <a href="{{ route('books.index')}}" class="btn btn-primary btn-block m-0 ">Back</a>
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit a book</h3></div>
                            <div class="card-body">
                                <form action="{{ url('update/books'. $books->id) }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label class="mb-1" for="inputProjectname">Book Title</label>
                                        <input type="text" class="form-control" name="title" autocomplete="off" value="{{$books->title}}">
                                    </div>
                                    <div class="mb-3 text-danger">
                                        @error('title') Book title must be valid @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class=" mb-1" for="inputProjectname">Isbn</label>
                                        <input class="form-control" name="isbn" autocomplete="off" value="{{$books->isbn}}">
                                    </div>
                                    <div class="mb-3 text-danger">
                                        @error('isbn') Isbn must be valid @enderror
                                    </div>
                                    <div class="form-group"> 
                                        <label class=" mb-1" for="inputProjectname">Amount of pages</label>
                                        <input type="text" class="form-control" name="pages" autocomplete="off" value="{{$books->pages}}">
                                    </div>
                                    <div class="mb-3 text-danger">
                                        @error('pages') The amount of pages must be valid @enderror
                                    </div>
                                    <div class="form-group"> 
                                        <label class=" mb-1" for="inputProjectname">Description about a book</label>
                                        <textarea type="text" class="form-control" name="about" id="about" autocomplete="off">{{$books->about}}
                                        </textarea>
                                    </div>
                                    <div class="mb-3 text-danger">
                                        @error('about') Book description must be valid @enderror
                                    </div>
                                    <div class="form-group"> 
                                        <select name="author_id" id="" class="form-control">
                                            <option> {{$books->author_id}}</option>
                                            @foreach ($authors as $val)
                                            <option name="author_id">{{ $val -> name }} {{ $val -> surname }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3 text-danger">
                                        @error('author_id') Book author must be selected @enderror
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
<script src="{{URL::to('js/tinymce/js/tinymce/tinymce.min.js')}}"></script>
<script>
        tinyMCE.init({
        selector: 'textarea',
        plugins: 'link code',
        menubar: false
    });
    </script>
@endsection