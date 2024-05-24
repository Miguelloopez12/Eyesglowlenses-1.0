@extends('layouts.app')

@section('header')
@endsection()

<main class="contendor-compra">

    <h2 class="fw-200 centrartexto">finalizar compra</h2>

    <div class="contenedor-facturacion">
        <form  id="form-finalizar-compra" action="{{ route('compra') }}" method="POST">
            @csrf

            <h3 class="fw-300 centrartexto">Detalles de facturación</h3>

            <div class="formulario-compra">

                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre"placeholder="Tu nombre" value="{{ old(" nombre") }}" required>

                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" placeholder="Tu apellido" required>

                <label for="correo">Correo electronico:</label>
                <input type="email" id="correo" name="correo" placeholder="Tu correo electronico" required>
                @error('correo')
                        <p class="style: color: bg-red-400">{{ $message }}</p>
                    @enderror

                <label for="cedula">Documento de identidad:</label>
                <input type="id" id="cedula" name="cedula" placeholder="Tu numero de identificación" required>

                <label for="ciudad">Ciudad de residencia:</label>
                <input type="text" id="ciudad" name="ciudad" placeholder="Tu ciudad de residencia" required>

                <label for="direccion">Direccion de residencia:</label>
                <input type="text" id="direccion" name="direccion" placeholder="Tu direccion de residencia" required>

                <label for="telefono">Telefono:</label>
                <input type="tel" id="telefono" name="telefono" placeholder="Tu telefono" required>

            </div>

            <div class="boton-compra">
                <button class="boton-producto" type="submit">Finalizar compra</button>
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

            <div id="contenidocompra" class="row-compra">
                    <p class="Nombre-compra"></p>
                    <p class="linea-debajo"></p>
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
