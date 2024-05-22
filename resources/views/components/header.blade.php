<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Cuando se selecciona html 5 nos incluye esta función la cual determina la compatibilidad de idioma y el título de la página-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty Shop</title>
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap-icons/font/bootstrap-icons.min.css')}}">
    @stack('styles')

</head>

<body>
    <!--Navegador Nav barra superior de la página-->

    <nav class="navbar navbar-expand-lg " style="background-color: #9900fff5;">
        <!--Style para cambiar color del navegador-->
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="{{ route('inicio.index') }}">Beauty Shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    {{-- <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="#">Belleza</a>
                        <!--Text para cambiar color del texto opciones-->
                    </li> --}}

                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('inicio.categorias') }}">Categorias</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('inicio.catalogo') }}">Catalogo</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('inicio.contactanos') }}">Contáctanos</a>
                    </li>


                </ul>
                <form class="d-flex d-none" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button> <!--Outline cambiar el boton-->
                </form>
            </div>
        </div>
    </nav>
