@extends('layouts.app')

@section('header')

@endsection()

<main class="contendor-compra">

    <h2 class="fw-200 centrartexto">finalizar compra</h2>

<div class="contenedor-facturacion">


<form action="">

    <h3 class="fw-300 centrartexto">Detalles de facturación</h3>

    <div class="formulario-compra">

        <label for="nombre">Nombre:</label>
        <input type="text"  id="nombre" placeholder="Tu nombre">

        <label for="apellido">Apellido:</label>
        <input type="text"  id="apellido" placeholder="Tu apellido">

        <label for="correo">Correo electronico:</label>
        <input type="email" id="correo" placeholder="Tu correo electronico">

        <label for="cedula">Documento de identidad:</label>
        <input type="id" id="cedula" placeholder="Tu numero de identificación">

        <label for="ciudad">Ciudad de residencia:</label>
        <input type="text" id="ciudad" placeholder="Tu ciudad de residencia">

        <label for="direccion">Direccion de residencia:</label>
        <input type="text" id="direccion" placeholder="Tu direccion de residencia">

        <label for="telefono">Telefono:</label>
        <input type="tel" id="telefono" placeholder="Tu telefono">

    </div>
</form>

    <div class="formulario-pedido">
    <div class="titulo-pedido">
        <h3 class="fw-300 centrartexto">Productos</h3>
    </div>

    <div class="contenido-pedido">
        <p>Inventario</p>

        <p class="linea-debajo">Subtotal</p>
    </div>


    <div class="contenido-pedido">
        <p> {{$Productoss->nombre}} </p>

        <p class="linea-debajo">{{$Productoss->precio}}</p>
    </div>

    <div class="boton-compra">
        <a href="/compra.html" class="boton-producto">Finalizar compra</a>
    </div>

    </div>

</div>

</main>

@section('logout')
@endsection()