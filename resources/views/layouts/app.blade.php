<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comics App</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite('resources/js/app.js')
</head>
<body>
    <header class="bg-dark py-3">
        <nav class="container navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="{{ url('/') }}">Comics App</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('comics.index') }}">Comics List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('comics.create') }}">Add New Comic</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="container mt-4">
        @yield('content')
    </main>

    
</body>
</html>
