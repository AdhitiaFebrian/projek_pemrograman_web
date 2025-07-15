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
            background-color: #c6f6d5;
            border: 1px solid #38a169;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <nav>
            <a href="{{ route('books.index') }}">Home</a> |
            <a href="{{ route('books.create') }}">Tambah Buku</a>
        </nav>

        @if (session('success'))
            <div class="alert">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </div>
</body>
</html>
