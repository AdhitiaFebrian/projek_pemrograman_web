<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Aplikasi Buku')</title>
    <style>
        body {
            font-family: sans-serif;
            padding: 20px;
        }
        nav {
            margin-bottom: 20px;
        }
        .container {
            max-width: 800px;
            margin: auto;
        }
        .alert {
            padding: 10px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        {{-- Navigasi --}}
        <nav>
            <a href="{{ route('books.index') }}">Home</a> |
            <a href="{{ route('books.create') }}">Tambah Buku</a>
        </nav>

        {{-- Pesan Sukses --}}
        @if (session('success'))
            <div class="alert" style="background-color: #c6f6d5; border: 1px solid #38a169;">
                {{ session('success') }}
            </div>
        @endif

        {{-- Pesan Error --}}
        @if (session('error'))
            <div class="alert" style="background-color: #fed7d7; border: 1px solid #e53e3e;">
                {{ session('error') }}
            </div>
        @endif

        {{-- Konten Utama --}}
        @yield('content')
    </div>
</body>
</html>
