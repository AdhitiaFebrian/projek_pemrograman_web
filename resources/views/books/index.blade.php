<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>

    @if (session('success'))
        <div style="color: green">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('books.create') }}">Tambah Buku</a>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        @foreach ($books as $index => $book)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $book->judul }}</td>
            <td>{{ $book->penulis }}</td>
            <td>{{ $book->stok }}</td>
            <td>
                <a href="{{ route('books.edit', $book->id) }}">Edit</a>

                <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline" onsubmit="return confirm('Yakin ingin hapus?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
