
(function () {
    'use strict';
    document.addEventListener('DOMContentLoaded', function () {

        const btnCart = document.querySelector('.container-icon')
        const containerCartProducts = document.querySelector('.container-cart-products')

        btnCart.addEventListener('click', () => {
            containerCartProducts.classList.toggle('hidden-cart')
        })


        const cartProduct = document.querySelector(".cart-product");
        const rowProduct = document.querySelector(".row-product");


        //Lista de los productos

        const ProductList = document.querySelector(".contenedorcatalogo");


        // variable de arreglos de productos

        let allProducts =  JSON.parse(localStorage.getItem("carrito")) || [];

        const totalpagar = document.querySelector(".total-pagar");

        var contador_productos = document.getElementById("contador-productos");


        ProductList.addEventListener("click", e => {
            if (e.target.classList.contains("agregar-carrito")) {
                const product = e.target.parentElement.parentElement

                const infocartproduct = {
                    cantidad: 1,
                    titulo: product.querySelector("h4").textContent,
                    precio: product.querySelector(".boton").textContent,
                };




                // funcion para sumar la cantidad de los articulos agregados al carrito

                const exits = allProducts.some(product => product.titulo === infocartproduct.titulo)

                if (exits) {
                    const products = allProducts.map(product => {
                        if (product.titulo === infocartproduct.titulo) {
                            product.cantidad++;
                            return product
                        } else {
                            return product
                        }
                    });
                    allProducts = [...products];
                } else {
                    allProducts = [...allProducts, infocartproduct];

                }
                savelocal();

                showHTML();
            }

        });

        // eliminar productos


        rowProduct.addEventListener("click", e => {
            if (e.target.classList.contains("icon-close")) {
                const product = e.target.parentElement;
                const titulo = product.querySelector("p").textContent;


                allProducts = allProducts.filter(
                    product => product.titulo !== titulo
                );

                console.log(allProducts)
                showHTML();
            }
        })

        const showHTML = () => {


            //limpiar HTML

            rowProduct.innerHTML = "";

            let total = 0;
            let total10ofproduct = 0;

            allProducts.forEach(product => {
                const containerProduct = document.createElement("div");
                containerProduct.classList.add("cart-product")

                containerProduct.innerHTML = `

                    <div id="info-cart-product" class="info-cart-product">
                        <span class="cantidad-producto-carrito">${product.cantidad}</span>
                        <p class="titulo-producto-carrito">${product.titulo}</p>
                        <span class="precio-producto-carrito">${product.precio}</span>
                </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"  id="icon-x" class="icon-close">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M6 18L18 6M6 6l12 12"
                    />
                </svg>

        `;

                rowProduct.append(containerProduct);



                total = total + parseFloat(product.cantidad * product.precio);


                total10ofproduct = total10ofproduct + product.cantidad;

            });

            totalpagar.innerText = ` $${total}`;

            contador_productos.innerText = total10ofproduct;

        }

        const savelocal = () => {
            localStorage.setItem("carrito", JSON.stringify(allProducts));
        };



    });
})();



