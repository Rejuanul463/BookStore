<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function index(Request $request){

        if($request-> has('search')){
            $books = Book::where('title','like','%'. $request->search.'%')
                    ->orWhere('author','like','%'. $request->search.'%')
                    ->paginate(10);
            return view('books.index')
                    ->with('books',$books);
        }else{
            $books = Book::paginate(10);

            return view('books.index')
                ->with('books', $books);
        }
    }

    public function show($bookId){
        $book = Book::find($bookId);

        return view('books.showBook')
            ->with('book',$book);
    }

    public function create(){
        return view('books.create');
    }

    public function store(Request $request){
        $rules = [
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'isbn' => 'required|numeric|digits:13',
            'stock' => 'required|numeric|integer|min:0',
            'price' => 'required|numeric',
        ];
        
        $this->validate($request,$rules);

        $book = new Book();

        $book->title = $request->title;
        $book->author = $request->author;
        $book->isbn = $request->isbn;
        $book->stock = $request->stock;
        $book->price = $request->price;
        $book->save();
        
        return redirect()->route('book.show',$book->id);
    }

    public function edit($bookId){
        $book = Book::find($bookId);

        return view('books.edit')
            ->with('book',$book);
    }

    public function update(Request $request){
        $rules = [
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'isbn' => 'required|numeric|digits:13',
            'stock' => 'required|numeric|integer|min:0',
            'price' => 'required|numeric',
        ];
        
        $this->validate($request,$rules);

        $book = Book::find($request->id);

        $book->title = $request->title;
        $book->author = $request->author;
        $book->isbn = $request->isbn;
        $book->stock = $request->stock;
        $book->price = $request->price;
        $book->save();

        return redirect()->route('book.show',$book->id);
    }

    public function destroy(Request $request){
        $book = Book::find($request->id);

        $book->delete();

        return redirect()->route('book.index');
    }
}
