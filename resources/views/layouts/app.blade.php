<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>

<body>
    <header>
        <h2>Sistem Informasi Surat</h2>

        <nav>
            <a href="{{ route('dashboard') }}">
                Dashboard |
            </a>
            <a href="{{ route('surat-masuk.index') }}">Surat Masuk |</a>
            </a>
            <a href="{{ route('surat-masuk.index') }}">Surat Keluar |</a>
        </nav>

        <hr>

    </header>

    <main>
        @yield('content')
    </main>

    <hr>

    <footer>
        <p>Sistem Informasi Surat</p>
    </footer>

</body>

</html>
