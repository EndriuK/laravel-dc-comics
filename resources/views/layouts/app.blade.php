<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comics App</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Aggiungi il tuo file CSS qui -->
    @vite('resources/js/app.js')
</head>
<body>
    <header>
        <nav>
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ route('comics.index') }}">Comics List</a>
            <a href="{{ route('comics.create') }}">Add New Comic</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2024 Comics App</p>
    </footer>
</body>
</html>
