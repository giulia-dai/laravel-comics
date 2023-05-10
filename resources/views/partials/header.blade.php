<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary mb-4">
            <div class="container-fluid justify-content-between d-flex">
                <div class="navbar-brand wrapper">
                    <img class="wrapped" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo dc-comics">

                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="ms_list">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">CHARACTERS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('comic') }}">COMICS</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">MOVIES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">TV</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">GAMES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">COLLECTIBLES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">VIDEOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">FANS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">NEWS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">SHOP</a>
                        </li>
                </div>
                <div id="ms_search">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="jumbo">
                <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="">
            </div>
        </div>

    </header>

</body>

</html>
