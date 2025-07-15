@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')
    <h1>Tambah Buku</h1>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div>
            <label for="judul">Judul:</label>
            <input type="text" name="judul" value="{{ old('judul') }}">
            @error('judul')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="penulis">Penulis:</label>
            <input type="text" name="penulis" value="{{ old('penulis') }}">
            @error('penulis')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="stok">Stok:</label>
            <input type="number" name="stok" value="{{ old('stok') }}">
            @error('stok')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <button type="submit">Simpan</button>
        <a href="{{ route('books.index') }}">Batal</a>
    </form>
@endsection
