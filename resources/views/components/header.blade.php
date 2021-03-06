<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/formulario.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>@yield('title')</title>
</head>

<body>
    <header>
        <div class="container">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('img/lapis-e-regua.png') }}" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('index') }}">HOME</a>
                            </li>
                            <li><a class="nav-link" href="{{ route('formulario') }}">CADASTRAR</a></li>
                            <li><a class="nav-link" href="{{ route('todos') }}">VER TODOS</a></li>
                        </ul>
                       
                    </div>
                    <ul class="navbar-nav">
                        @if (session(key: 'usuario'))
                        <li class="nav-item">
                            <a class="btn btn-link text-muted vnav-link " aria-current="page" href="{{ route('informacao') }}">Informa????es</a>
                        </li>
                            <li class="nav-item">
                                <a class="btn btn-danger " aria-current="page" href="{{ route('sair') }}">sair</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="btn btn-danger " aria-current="page" href="{{ route('login') }}">Login</a>
                            </li>
                        @endif

                    </ul>
                </div>
            </nav>
        </div>

    </header>
