<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request)
{
    $keyword = $request->input('keyword');

    $books = Book::when($keyword, function ($query, $keyword) {
        return $query->where('judul', 'like', "%{$keyword}%");
    })->get();

    return view('books.index', compact('books', 'keyword'));
}


    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'judul' => 'required|max:100',
        'penulis' => 'required|max:50',
        'stok' => 'required|integer|min:1'
    ]);

    Book::create($request->all());

    return redirect()->route('books.index')->with('success', 'Buku berhasil ditambahkan.');
}

        public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, Book $book)
{
    $request->validate([
        'judul' => 'required|max:100',
        'penulis' => 'required|max:50',
        'stok' => 'required|integer|min:1'
    ]);

    $book->update($request->all());

    return redirect()->route('books.index')->with('success', 'Buku berhasil diperbarui.');
}


    public function destroy(Book $book)
{
    $book->delete();

    return redirect()->route('books.index')->with('success', 'Buku berhasil dihapus.');
}
}
