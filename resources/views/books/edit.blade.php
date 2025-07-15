<!DOCTYPE html>
<html>
<head>
    <title>Edit Buku</title>
</head>
<body>
    <h1>Edit Buku</h1>

    @if ($errors->any())
        <div style="color: red; margin-bottom: 10px;">
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

        <label>Judul:</label><br>
        <input type="text" name="judul" value="{{ old('judul', $book->judul) }}" placeholder="Masukkan judul buku" autofocus><br><br>

        <label>Penulis:</label><br>
        <input type="text" name="penulis" value="{{ old('penulis', $book->penulis) }}" placeholder="Masukkan nama penulis"><br><br>

        <label>Stok:</label><br>
        <input type="number" name="stok" value="{{ old('stok', $book->stok) }}" placeholder="Masukkan jumlah stok"><br><br>

        <button type="submit">Simpan</button>
    </form>

    <br>
    <a href="{{ route('books.index') }}">← Kembali</a>
</body>
</html>
