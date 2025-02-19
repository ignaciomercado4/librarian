<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // GET
    public function create() {
    
        return view('books_create');
    }

    public function index() {
        $books = Book::all();
        
        return view('books_index', compact('books'));
    }

    // POST
    public function store(Request $request) {
        $book = Book::create($request->all());
        $book->save();

        return redirect()->route('books');
    }

    
}
