<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <a href="{{ route('books.create') }}">Tambah Buku</a>

    <ul>
        @foreach($books as $book)
            <li>{{ $book->judul }} - {{ $book->penulis }} (Stok: {{ $book->stok }})</li>
        @endforeach
    </ul>
</body>
</html>
