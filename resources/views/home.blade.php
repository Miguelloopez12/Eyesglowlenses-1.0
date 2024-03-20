@extends('layouts.app')


@section('header')


@endsection()


<main class="sectionsinbordes">

    <section class="sectionuno">
        <div class="container">
            <img src="{{asset("assets/img/bannerprincipal/BANNERPRINCIPAL.svg")}}" alt="">
        </div>
    </section>

    <main class="session contenedor mainuno">
        <h2 class="fw-300 centrartexto">Lentes más exitosos </h2>

        <div class="contenedormain">

            <div class="referenciaslentes">
                <img src="{{asset("storage/img/GRAFHITE2.jpg")}}" alt="">
                <div class="contenidomain">
                    <h2>Lentes más vendidos del mes</h2>
                    <h4>Lentes cristal</h4>
                    <ul>
                        <a href="#" class="material-symbols-outlined">shopping_cart</a>
                        <a href="#" class="material-symbols-outlined">favorite</a>
                    </ul>
                    <a href="#" class="boton">65,000</a>
                </div>
            </div>

            <div class="referenciaslentes">
                <img src="{{asset("storage/img/azul.jpg")}}" alt="">
                <div class="contenidomain">
                    <h2>Lentes más vendidos en el año</h2>
                    <h4>Lentes Quarzt</h4>
                    <ul>
                        <a href="#" class="material-symbols-outlined">shopping_cart</a>
                        <a href="#" class="material-symbols-outlined">favorite</a>
                    </ul>
                    <a href="#" class="boton">65,000</a>
                </div>
            </div>

            <div class="referenciaslentes">
                <img src="{{asset("storage/img/GRAFHITE1.jpg")}}" alt="">
                <div class="contenidomain">
                    <h2>Lentes más naturales</h2>
                    <h4>Lentes avela</h4>
                    <ul>
                        <a href="#" class="material-symbols-outlined">shopping_cart</a>
                        <a href="#" class="material-symbols-outlined">favorite</a>
                    </ul>
                    <a href="#" class="boton">65,000</a>
                </div>
            </div>

        </div>
    </main>


<section class="banner">
    <img src="{{asset("assets/img/bannersegundario/BANNERSEGUNDARIO.svg")}}" alt="">
<div class="boton-banner">
    <a href="#" class="botonblanco botonbanner">¡Lo quiero!</a>

</div>
</section>


<div class="sectiondosfinal contenedor">
    <section class="sectiondos">
        <h2 class="sectionacticle fw-300 centrartexto">Nuestros kits son los más completos del mercado</h2>

        <article class="articlefinal">
            <div class="imgarticle1">
                <img src="{{asset("storage/img/Gotas Humectantes1.png")}}" alt="">
                <h3>Kit completo </h3>
                <p>Este kit incluye lentes sin bordes, portalentes, líquido de limpieza y pinzas para lentes</p>
            </div>


            <div class="imgarticle1">
                <img src="{{asset("storage/img/Gotas Humectantes1.png")}}" alt="">
                <h3>Kit clásico </h3>
                <p>Este kit incluye lentes sin bordes, portalentes y líquido de limpieza</p>
            </div>
        </article>
    </section>

    <div class="gif-lentes">
        <img src="{{asset("storage/img/Diseño sin título.gif")}}" alt="">

    </div>
</div>






    @section('footer')
    @endsection

</main>

@section('logout')
@endsection()
