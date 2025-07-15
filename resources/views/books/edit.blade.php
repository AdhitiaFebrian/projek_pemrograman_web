@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')
    <h1>Edit Buku</h1>

    {{-- Tampilkan error validasi --}}
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="judul">Judul:</label>
            <input type="text" name="judul" value="{{ old('judul', $book->judul) }}">
        </div>
        <div>
            <label for="penulis">Penulis:</label>
            <input type="text" name="penulis" value="{{ old('penulis', $book->penulis) }}">
        </div>
        <div>
            <label for="stok">Stok:</label>
            <input type="number" name="stok" value="{{ old('stok', $book->stok) }}">
        </div>
        <br>
        <button type="submit">Perbarui</button>
        <a href="{{ route('books.index') }}">Batal</a>
    </form>
@endsection
