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
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Add a book</h3></div>
                            <div class="card-body">
                                <form action="{{ route('books.store')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label class="mb-1" for="inputProjectname">Book Title</label>
                                        <input type="text" class="form-control" placeholder="Enter a book title" name="title" autocomplete="off">
                                    </div>
                                    <div class="mb-3 text-danger">
                                        @error('title') Book title must be valid @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class=" mb-1" for="inputProjectname">Isbn</label>
                                        <input class="form-control" placeholder="Enter book isbn" name="isbn" autocomplete="off">
                                    </div>
                                    <div class="mb-3 text-danger">
                                        @error('isbn') Isbn must be valid @enderror
                                    </div>
                                    <div class="form-group"> 
                                        <label class=" mb-1" for="inputProjectname">Amount of pages</label>
                                        <input type="text" class="form-control" placeholder="Enter how many pages does a book contain" name="pages" autocomplete="off">
                                    </div>
                                    <div class="mb-3 text-danger">
                                        @error('pages') The amount of pages must be valid @enderror
                                    </div>
                                    <div class="form-group"> 
                                        <label class=" mb-1" for="inputProjectname">Description about a book</label>
                                        <textarea type="text" class="form-control" placeholder="Enter the description about a book" name="about" autocomplete="off"></textarea>
                                    </div>
                                    <div class="mb-3 text-danger">
                                        @error('about') Book description must be valid @enderror
                                    </div>
                                    <div class="form-group"> 
                                        <label class=" mb-1" for="inputProjectname">Book author</label>
                                        <select name="author_id" id="" class="form-control">
                                            <option disabled> Select</option>
                                            @foreach ($authors as $val)
                                            <option name="author_id">{{ $val -> name }} {{ $val -> surname }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3 text-danger">
                                        @error('author_id') Book author must be selected @enderror
                                    </div>
                                    <input type="submit" class="btn btn-success btn-block mt-4" name="add" value="Add">
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