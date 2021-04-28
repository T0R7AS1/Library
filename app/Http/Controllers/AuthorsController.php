<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Authors;
use Illuminate\Support\Facades\DB;
use function PHPUnit\Framework\isEmpty;
use Illuminate\Database\Schema\Blueprint;

class AuthorsController extends Controller
{
    public function index(){
        $authors = authors::paginate(10);
        return view('authors.index', compact('authors'));
    }

    public function show($id){
        $authors = authors::where('id',$id)->first();
        return view('authors.show', compact('authors'));
    }

    public function create(){
        return view('authors.create');
    }
    
    public function store(Request $request){
        $this->validate(request(),[
            'name' => 'required|between:0,64',
            'surname' => 'required|between:0,64'
        ]);
        $data = [];
        $data['name'] = $request->name;
        $data['surname'] = $request->surname;

        $authors = authors::insert($data);
        return redirect()->route('authors.index')->with('success', 'Author added successfully');

    }

    public function edit($id){

        $authors = authors::where('id',$id)->first();
        return view('authors.edit',compact('authors'));
    }

    public function update(Request $request, $id){
        $this->validate(request(),[
            'name' => 'required|between:0,64',
            'surname' => 'required|between:0,64'
        ]);
        $data = [];
        $data['name'] = $request->name;
        $data['surname'] = $request->surname;

        $authors = authors::where('id', $id)->update($data);
        return redirect()->route('authors.index')->with('success', 'Author updated successfully');
    }


    public function delete($id){

        $data = authors::where('id', $id)->first();
        $authors = authors::where('id', $id)->delete();
        return redirect()->route('authors.index')->with('success', 'Author deleted successfully');
    }
}
