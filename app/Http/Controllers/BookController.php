<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // GET
    public function create() {
    
        return view('books/books_create');
    }

    public function index() {
        $books = Book::all();
        
        return view('books/books_index', compact('books'));
    }

    // POST, PUT/PATCH, DELETE
    public function store(Request $request) {
        $book = Book::create($request->all());
        $book->save();

        return redirect()->route('books');
    }

    public function update(Request $request, $bookId) {
        $book = Book::findOrFail($bookId);
        $book->update($request->except(['_token', '_method']));
    
        return redirect()->route('books');
    }    
}
