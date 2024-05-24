@extends('layouts.app')

@section('header')
@endsection()

<main class="contendor-compra">

    <h2 class="fw-200 centrartexto">finalizar compra</h2>

    <div class="contenedor-facturacion">


        <div class="formulario-pedido">
            <div class="titulo-pedido">
                <h3 class="fw-300 centrartexto">Productos</h3>
            </div>

            <div class="contenido-pedido">
                <p>Inventario</p>
                <p class="linea-debajo">Subtotal</p>
            </div>

            <div id="contenidocompra" class="row-compra">
                @foreach ( $resumencompra as $compra )

                <p class="Nombre-compra">{{ $compra->id_compra}}</p>
                <p class="Nombre-compra">{{ $compra->monto_total}}</p>

                @endforeach

                @foreach ( $resumencompra as $compra )

                <p class="Nombre-compra">{{ $compra->id_compra}}</p>
                <p class="Nombre-compra">{{ $compra->monto_total}}</p>
                <p class="Nombre-compra">{{ $compra->nombre}}</p>

                @endforeach

            </div>

            <div class="cart-total">
                <h3>Total a pagar:</h3>
                <span class="fin-total-pagar"></span>
                <div id="mensaje"></div>
            </div>

        </div>

    </div>

</main>

@section('logout')
@endsection()
