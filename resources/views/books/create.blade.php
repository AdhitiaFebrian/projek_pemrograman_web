<!DOCTYPE html>
<html>
<head>
    <title>Tambah Buku</title>
</head>
<body>
    <h1>Tambah Buku</h1>

    @if ($errors->any())
        <div style="color: red; margin-bottom: 10px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <label>Judul:</label><br>
        <input type="text" name="judul" value="{{ old('judul') }}" placeholder="Masukkan judul buku" autofocus><br><br>

        <label>Penulis:</label><br>
        <input type="text" name="penulis" value="{{ old('penulis') }}" placeholder="Masukkan nama penulis"><br><br>

        <label>Stok:</label><br>
        <input type="number" name="stok" value="{{ old('stok') }}" placeholder="Masukkan jumlah stok"><br><br>

        <button type="submit">Simpan</button>
    </form>

    <br>
    <a href="{{ route('books.index') }}">← Kembali</a>
</body>
</html>
