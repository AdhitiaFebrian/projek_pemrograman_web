@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')
    <h1>Tambah Buku</h1>

    {{-- Tampilkan validasi error --}}
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div>
            <label for="judul">Judul:</label>
            <input type="text" name="judul" value="{{ old('judul') }}">
        </div>
        <div>
            <label for="penulis">Penulis:</label>
            <input type="text" name="penulis" value="{{ old('penulis') }}">
        </div>
        <div>
            <label for="stok">Stok:</label>
            <input type="number" name="stok" value="{{ old('stok') }}">
        </div>
        <br>
        <button type="submit">Simpan</button>
        <a href="{{ route('books.index') }}">Batal</a>
    </form>
@endsection
