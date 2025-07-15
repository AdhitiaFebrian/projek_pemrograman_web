@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
    <h1>Daftar Buku</h1>

    {{-- Form Pencarian --}}
    <form method="GET" action="{{ route('books.index') }}" style="margin-bottom: 15px;">
        <input type="text" name="keyword" placeholder="Cari judul buku..." value="{{ request('keyword') }}">
        <button type="submit">Cari</button>
        <a href="{{ route('books.index') }}">Reset</a>
    </form>

    {{-- Tabel Buku --}}
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($books as $index => $book)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $book->judul }}</td>
                    <td>{{ $book->penulis }}</td>
                    <td>{{ $book->stok }}</td>
                    <td>
                        <a href="{{ route('books.edit', $book->id) }}">Edit</a>

                        <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus buku ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" style="text-align: center;">Tidak ada data buku</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
