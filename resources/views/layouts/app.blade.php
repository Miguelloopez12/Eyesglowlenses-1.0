@yield('header')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>


        <!-- Dentro de tu archivo de vista .blade.php -->
        <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@300&display=swap" rel="stylesheet">


    </head>

    <body>
        <div class="inicio">

            <header class="iniciodos">
                <div class="menuuno">
                    <h1 class="titulo">EyesGlowLenses</h1>

                    <nav class="menunavegacion">
                        <a href="{{ asset('home') }}">Inicio</a>
                        <a href="#">Buscar</a>

                    </nav>

                    <div class="container-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="icon-cart">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                        </svg>
                        <div class="count-products">
                            <span id="contador-productos">0</span>
                        </div>
                    </div>

            </header>


            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="botonFinalizar" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                    {{ 'Finalizar sesión' }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>





            <header class="headerdos">
                <div class="menudos">
                    <nav class="menudecategoria">
                        <a href="{{ route('conbordes') }}">Lentes con bordes</a>
                        <a href="{{ route('sinbordes') }}">Lentes sin bordes</a>
                        <a href="{{ route('sinbordes') }}">Lentes tricolor</a>
                    </nav>
                </div>
            </header>
        </div>
        </svg>

        <div class="container-cart-products hidden-cart">
            <div class="row-product">

                <div class="cart-product">
                    <div id="info-cart-product" class="info-cart-product">
                        <span class="cantidad-producto-carrito"></span>
                        <p class="titulo-producto-carrito"></p>
                        <span class="precio-producto-carrito"></span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" id="icon-x" class="icon-close">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>

                </div>


            </div>

            <div class="cart-total">
                <h3>Total:</h3>
                <span class="total-pagar"></span>
            </div>
            <a href="{{route("compra")}}"class="boton-producto-carrito">Comprar</a>
        </div>
        </div>


        @yield('footer')


        <footer class="footerunoclass contenedor">
            <div class="footeruno fw-300">
                <a href="/">
                    <img src="{{ asset('storage/img/Diseño sin título (2).svg') }}" alt="">
                </a>
                <a href="/">
                    <img src="{{ asset('storage/img/Diseño sin título (3).svg') }}" alt="">
                </a>
                <a href="/">
                    <img src="{{ asset('storage/img/Diseño sin título (5).svg') }}" alt="">
                </a>
                <p class="derechos">Todos los derechos reservados 2023 &copy;</p>
            </div>
        </footer>

        <script src="{{ asset('assets/index.js') }}"></script>


    </body>

    </html>

</body>

</html>
