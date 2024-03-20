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
                </div>

            </header>
        </div>



        <div class="containerlogin">
            <div class="login">
                <h2 class="btntitulo">Registrarse</h2>

                <form class="formlogin" method="POST" action="{{route ('register')}}">
                    @csrf

                    <input type="text" placeholder="Ingrese su nombre" name="name" value="{{ old("name") }}">
                    @error("name")
                    <p class="error">{{ $message }}</p>
                    @enderror
                    <input type="email" placeholder="Ingrese su correo electronico" name="email" value="{{ old("email") }}">
                    @error("email")
                    <p class="error">{{$message}}</p>
                    @enderror
                    <input type="password" placeholder="Contraseña" name="password">
                    <input type="password" placeholder="Confirmar contraseña" name="password_confirmation">
                    @error("password")
                    <p class="error">{{$message}}</p>
                    @enderror
                    <button class="botonlogin"  type="submit">Registrarse</button>
                    <a  href="{{route ('login')}}" class="regiss botonblanco" type="button">Ir al login</a>

                </form>
            </div>
        </div>



        <footer class="footerunoclass contenedor">
            <div class="footeruno fw-300">
                <a href="/">
                    <img src="img/Diseño sin título (2).svg" alt="">
                </a>
                <a href="/">
                    <img src="img/Diseño sin título (3).svg" alt="">
                </a>
                <a href="/">
                    <img src="img/Diseño sin título (5).svg" alt="">
                </a>
                <p class="derechos">Todos los derechos reservados 2023 &copy;</p>
            </div>
        </footer>



        <script src="index.js"></script>

    </body>

    </html>

</body>

</html>
