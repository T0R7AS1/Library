<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Books;
use App\Models\Authors;
use Illuminate\Support\Facades\DB;
use function PHPUnit\Framework\isEmpty;
use Illuminate\Database\Schema\Blueprint;

class BooksController extends Controller
{

    public function index(){
        $books = books::sortable()->paginate(10);
        return view('books.index', compact('books'));
    }

    public function show($id){
        $data = books::where('id',$id)->first();
        return view('books.show', compact('data'));
    }

    public function create(){

        $authors = authors::all();

        return view('books.create')->with('authors', $authors);
    }
    
    public function store(Request $request){
        $this->validate(request(),[
            'title' => 'required|between:0,255',
            'isbn' => 'required|between:14,20',
            'pages' => 'required|between:0,4',
            'about' => 'required',
            'author_id' => 'required',
            
        ]);
        $data = [];
        $data['title'] = $request->title;
        $data['isbn'] = $request->isbn;
        $data['pages'] = $request->pages;
        $data['about'] = $request->about;
        $data['author_id'] = $request->author_id;

        $books = books::insert($data);
        return redirect()->route('books.index')->with('success', 'Book added successfully');

    }

    public function edit($id){
        $authors = authors::all();
        $books = books::where('id',$id)->first();
        return view('books.edit',compact('books'))->with('authors', $authors);
    }

    public function update(Request $request, $id){
        $this->validate(request(),[
            'title' => 'required|between:0,255',
            'isbn' => 'required|between:14,20',
            'pages' => 'required|between:0,4',
            'about' => 'required',
            'author_id' => 'required',
        ]);
        $data = [];
        $data['title'] = $request->title;
        $data['isbn'] = $request->isbn;
        $data['pages'] = $request->pages;
        $data['about'] = $request->about;
        $data['author_id'] = $request->author_id;

        $books = books::where('id', $id)->update($data);
        return redirect()->route('books.index')->with('success', 'Book updated successfully');

    }


    public function delete($id){

        $data = books::where('id', $id)->first();
        $books = books::where('id', $id)->delete();
        return redirect()->route('books.index')->with('success', 'Book deleted successfully');
    }
}
