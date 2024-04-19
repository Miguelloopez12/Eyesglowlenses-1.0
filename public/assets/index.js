/*

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

*/

(function () {
    'use strict';

    // Función para mostrar los productos del carrito

        const rowProduct = document.querySelector(".row-product");


        const showCartProducts = (containerSelector) => {
            const container = document.querySelector(containerSelector);

            if (!container) return; // Verificar si se encontró el contenedor


        let allProducts = JSON.parse(localStorage.getItem("carrito")) || [];
        container.innerHTML = "";

        let total = 0;
        let totalProducts = 0;

        allProducts.forEach(product => {
            const containerProduct = document.createElement("div");
            containerProduct.classList.add("cart-product");

            containerProduct.innerHTML = `
                <div class="info-cart-product">
                    <span class="cantidad-producto-carrito">${product.cantidad}</span>
                    <p class="titulo-producto-carrito">${product.titulo}</p>
                    <span class="precio-producto-carrito">${product.precio}</span>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"  class="icon-close">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                </svg>`;

            container.append(containerProduct);

            total += parseFloat(product.cantidad * product.precio);
            totalProducts += product.cantidad;
        });

        const totalpagar = document.querySelector(".total-pagar");
        const contador_productos = document.getElementById("contador-productos");

        if (totalpagar) totalpagar.innerText = `$${total}`;
        if (contador_productos) contador_productos.innerText = totalProducts;
    };

    // Función para guardar los productos en el almacenamiento local
    const saveLocal = (products) => {
        localStorage.setItem("carrito", JSON.stringify(products));
    };

    // Agregar producto al carrito
    const addToCart = (product) => {
        let allProducts = JSON.parse(localStorage.getItem("carrito")) || [];

        const exists = allProducts.some(p => p.titulo === product.titulo);

        if (exists) {
            allProducts.forEach(p => {
                if (p.titulo === product.titulo) {
                    p.cantidad++;
                }
            });
        } else {
            allProducts.push({...product, cantidad: 1});
        }

        saveLocal(allProducts);
        showCartProducts(".row-product");
    };



    const showProductsCompra = (containerSelector) => {
        const container = document.querySelector(containerSelector);

        if (!container) return; // Verificar si se encontró el contenedor


    let allProducts = JSON.parse(localStorage.getItem("carrito")) || [];
    container.innerHTML = "";

    let total = 0;
    let totalProducts = 0;

    allProducts.forEach(product => {
        const containerProduct = document.createElement("div");
        containerProduct.classList.add("contenidopedidoo");

        containerProduct.innerHTML = `

            <div class="contenidopedido">
                <span class="cantidad-producto-carrito">${product.cantidad}</span>
                <p class="Nombre-compra">${product.titulo}</p>
                <p class="linea-debajo">${product.precio}</p>

            </div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"  class="icon-close">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                </svg>`;


        container.append(containerProduct);

        total += parseFloat(product.cantidad * product.precio);
        totalProducts += product.cantidad;
    });

};



    // Eliminar producto del carrito
    const removeFromCart = (title) => {
        let allProducts = JSON.parse(localStorage.getItem("carrito")) || [];

        allProducts = allProducts.filter(product => product.titulo !== title);

        saveLocal(allProducts);
        showProductsCompra("#contenidocompra");
        showCartProducts(".row-product");
    };



    const contenido_compra = document.querySelector("#contenidocompra");
        if(contenido_compra) {
            obtenerCompra();
        }


        function obtenerCompra() {
            const Buy = JSON.parse(localStorage.getItem("carrito")) || [];
            if (Buy.length) {
                // Llama a showCartProducts sin ningún argumento
                showProductsCompra("#contenidocompra");
                return;    }

            const notBuy = document.createElement("p");
            notBuy.classList.add("titulo");

            notBuy.textContent = "Añade productos para comprar";
            contenido_compra.appendChild(notBuy);
        }


    document.addEventListener('DOMContentLoaded', function () {
        const btnCart = document.querySelector('.container-icon');
        const containerCartProducts = document.querySelector('.container-cart-products');

        btnCart.addEventListener('click', () => {
            containerCartProducts.classList.toggle('hidden-cart');
        });

        const ProductList = document.querySelector(".contenedorcatalogo");
        if (ProductList) {
            ProductList.addEventListener("click", e => {
                if (e.target.classList.contains("agregar-carrito")) {
                    const product = e.target.parentElement.parentElement;
                    const infocartproduct = {
                        cantidad: 1,
                        titulo: product.querySelector("h4").textContent,
                        precio: product.querySelector(".boton").textContent,
                    };

                    addToCart(infocartproduct);
                }
            });
        }

        function handleRowClick(event) {
            if (event.target.classList.contains("icon-close")) {
                const product = event.target.parentElement;
                const title = product.querySelector("p").textContent;
                removeFromCart(title);
            }
        }

        const rowProduct = document.querySelector(".row-product");
        if (rowProduct) {
            rowProduct.addEventListener("click", handleRowClick);
        }

        const rowProductcompra = document.querySelector(".row-compra");
        if (rowProductcompra) {
            rowProductcompra.addEventListener("click", handleRowClick);
        }


        // Mostrar los productos del carrito al cargar la página
        showCartProducts(".row-product");


    });
})();




