<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body class="bg-dark text-light">
    <nav class="navbar bg-secondary">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold text-danger fs-3"> movieeees</a>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-danger" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <h1 class="text-danger text-center my-3"> MOVIE CHE PASSIONE!!!</h1>
    <div class="container">
        @yield('content')
    </div>
</body>

</html>
