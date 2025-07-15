<!DOCTYPE html>
<html>
<head>
    <title>Tambah Buku</title>
</head>
<body>
    <h1>Form Tambah Buku</h1>
    <form method="POST" action="{{ route('books.store') }}">
        @csrf
        <label>Judul:</label><br>
        <input type="text" name="judul"><br>

        <label>Penulis:</label><br>
        <input type="text" name="penulis"><br>

        <label>Stok:</label><br>
        <input type="number" name="stok"><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
