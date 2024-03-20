@extends('layouts.app')


@section('header')


@endsection()



<main class="contenedor-producto">
    <div class="contenido-producto">
        <div class="imagen-producto">
            <img src="{{ asset('storage/img/' . $Productoss->url) }}" alt="">
        </div>
        <div class="texto-producto">
            <h2 class="titulo-productos">{{$Productoss->nombre}}</h2>
            <h4> {{$Productoss->precio}}</h4>
            <p class="texto-productos">¡Renueva tu mirada con nuestros lentes de contacto sin bordes! <br>
                ✅ Lentes ultra naturales.<br>
                ✅ Durabilidad de 1 año.<br>
                ✅ Comodidad y suavidad de última tecnología.<br>
                ✅ ¡CONTRAENTREGA! 🛵<br>
                Resalta tu belleza única y atrévete a lucir esa tonalidad que siempre quisiste. ¿Quieres experimentar la
                diferencia? ¡Ordénalos ahora y cambia tu mirada en segundos!</p>

            <ul>
                <a href="#" class="material-symbols-outlined icono-producto">shopping_cart</a>
                <a href="#" class="material-symbols-outlined icono-producto">favorite</a>
            </ul>

            <a href="{{route("compra.pr", ["id_productos" => $Productoss -> id_producto])}}" class="boton-producto">Comprar</a>

        </div>

    </div>

</main>


@section('footer')
    @endsection

</main>

@section('logout')
@endsection()
