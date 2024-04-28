@extends('layouts.app')


@section('header')


<main class="sectionsinbordes">

    <div class="contenedorcatalogo" id="contenedorcatalogo">
        @foreach ($Productoss as $producto)
            <div id="PrimerLente" class="referenciaslentecatalogo">
                <img src="{{ asset('storage/img/' . $producto->url) }}" alt="">
                <div  id="Primercontenedor" class="contenidomain">
                    <h4>{{ $producto->nombre }}</h4>
                    <ul>
                        <a href="#" id="{{$producto->id_producto}}" class="agregar-carrito Material-symbols-outlined">shopping_cart</a>
                        <p class="id_tarjeta">{{$producto->id_producto}}</p>
                        <a href="#" class="material-symbols-outlined">favorite</a>
                    </ul>
                    <a href="{{route("descripcion.pr", ["id_productos" => $producto -> id_producto])}}"  class="boton">{{ $producto->precio }}</a>
                </div>
            </div>
        @endforeach
    </div>

    @endsection()


    @section('footer')
    @endsection

</main>

@section('logout')
@endsection()
