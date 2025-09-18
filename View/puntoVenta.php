
<?php
 include('layout.php')
 
?>

<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Óptica Grisol</title>
   <?php IncluirCSS();?>
</head>
    <body>
       <?php MostrarMenu();?>

<main class="container py-5">
    <h2 class="text-center mb-4">Punto de Venta</h2>

   
    <div class="row">
      
    <div class="mb-4">
        <input type="text" id="search-product" class="form-control" placeholder="Buscar producto...">
    </div>

    <div class="row">
       
        <div class="col-lg-7">
            <div class="row" id="productos-container">
             
            </div>
        </div>

       <!-- Carrito -->
<div class="col-lg-5">
    <div class="cart p-3 bg-light rounded shadow">
        <h4>Carrito de Compra</h4>
        <div class="cart-headers d-flex fw-bold mb-2">
            <div class="cart-col-nombre">Nombre</div>
            <div class="cart-col-cantidad text-center">Cantidad</div>
            <div class="cart-col-descuento text-center">Descuento</div>
            <div class="cart-col-eliminar text-center">Eliminar</div>
        </div>
        <div id="cart-items">
            <p class="text-muted">No hay productos agregados.</p>
        </div>
        
        <div class="cart-totals mt-3">
            <table class="table table-borderless mb-0">
                <tbody>
                    <tr>
                        <th>Subtotal:</th>
                        <td>₡<span id="cart-subtotal">0.00</span></td>
                    </tr>
                    <tr>
                        <th>Descuento:</th>
                        <td>₡<span id="cart-discount">0.00</span></td>
                    </tr>
                    <tr>
                        <th>IVA (13%):</th>
                        <td>₡<span id="cart-tax">0.00</span></td>
                    </tr>
                    <tr>
                        <th>Total:</th>
                        <td>₡<span id="cart-total">0.00</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
       <button class="btn btn-primary-custom w-100 mt-3" id="checkout-btn">Finalizar Venta</button>
       
        <button id="toggle-calculator" class="btn btn-secondary mt-3 w-100">
            <i class="bi bi-calculator"></i> Calculadora
        </button>

        <!-- Calculadora -->
        <div id="calculator" class="calculator bg-light p-3 rounded shadow mt-2" style="display:none;">
            <input type="text" id="calc-display" class="form-control mb-2 text-end" readonly>
            <div class="d-grid gap-1">
                <div class="d-flex gap-1">
                    <button class="btn btn-dark btn-sm calc-btn">7</button>
                    <button class="btn btn-dark btn-sm calc-btn">8</button>
                    <button class="btn btn-dark btn-sm calc-btn">9</button>
                    <button class="btn btn-warning btn-sm calc-btn">C</button>
                </div>
                <div class="d-flex gap-1">
                    <button class="btn btn-dark btn-sm calc-btn">4</button>
                    <button class="btn btn-dark btn-sm calc-btn">5</button>
                    <button class="btn btn-dark btn-sm calc-btn">6</button>
                </div>
                <div class="d-flex gap-1">
                    <button class="btn btn-dark btn-sm calc-btn">1</button>
                    <button class="btn btn-dark btn-sm calc-btn">2</button>
                    <button class="btn btn-dark btn-sm calc-btn">3</button>
                </div>
                <div class="d-flex gap-1">
                    <button class="btn btn-dark btn-sm calc-btn">0</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
const productos = [
    {id:1, nombre:"Lentes de Sol Ray-Ban", precio:12000},
    {id:2, nombre:"Lentes Oftálmicos Essilor", precio:20000},
    {id:3, nombre:"Armazón Gucci", precio:35000},
    {id:4, nombre:"Lentes de Contacto Acuvue", precio:5000}
];

let cart = [];

const productosContainer = document.getElementById("productos-container");
const cartItemsContainer = document.getElementById("cart-items");
const searchInput = document.getElementById("search-product");

function renderProductos() {
    const search = searchInput.value.toLowerCase();
    productosContainer.innerHTML = "";
    productos
        .filter(p => p.nombre.toLowerCase().includes(search))
        .forEach(producto => {
            const card = document.createElement("div");
            card.className = "col-md-4 mb-3";
            card.innerHTML = `
                <div class="card h-100 shadow-sm">
                    <div class="card-body d-flex flex-column">
                        <h6 class="card-title">${producto.nombre}</h6>
                        <p class="card-text fw-bold text-dark mb-2">₡${producto.precio.toLocaleString()}</p>
                        <button class="btn btn-primary-custom w-100 mt-3 mt-auto" onclick="agregarAlCarrito(${producto.id})">Agregar</button>
                    </div>
                </div>
            `;
            productosContainer.appendChild(card);
        });
}

function agregarAlCarrito(productId) {
    const producto = productos.find(p => p.id === productId);
    const itemEnCarrito = cart.find(i => i.id === productId);
    if(itemEnCarrito){
        itemEnCarrito.cantidad += 1;
    } else {
        cart.push({...producto, cantidad:1, descuento:0});
    }
    renderCarrito();
}

function actualizarCantidad(id, cantidad){
    const item = cart.find(i => i.id === id);
    if(item){
        item.cantidad = parseInt(cantidad) || 1;
        renderCarrito();
    }
}

function actualizarDescuento(id, descuento){
    const item = cart.find(i => i.id === id);
    if(item){
        item.descuento = parseFloat(descuento) || 0;
        renderCarrito();
    }
}

function eliminarProducto(id){
    cart = cart.filter(i => i.id !== id);
    renderCarrito();
}

function renderCarrito(){
    cartItemsContainer.innerHTML = "";
    if(cart.length === 0){
        cartItemsContainer.innerHTML = '<p class="text-muted">No hay productos agregados.</p>';
        return;
    }

    cart.forEach(item => {
        const div = document.createElement("div");
        div.className = "cart-item d-flex align-items-center mb-2";
        div.innerHTML = `
            <div class="cart-col-nombre">${item.nombre}</div>
            <div class="cart-col-cantidad text-center">
                <input type="number" min="1" value="${item.cantidad}" onchange="actualizarCantidad(${item.id}, this.value)">
            </div>
            <div class="cart-col-descuento text-center">
              <input type="number" min="0" value="${item.descuento}" class="descuento">
            </div>
            <div class="cart-col-eliminar text-center">
                <i class="bi bi-trash text-danger" style="cursor:pointer;" onclick="eliminarProducto(${item.id})"></i>
            </div>
        `;
        cartItemsContainer.appendChild(div);
    });
}

// Filtro de productos
searchInput.addEventListener("input", renderProductos);

// Calculadora
const toggleBtn = document.getElementById("toggle-calculator");
const calculator = document.getElementById("calculator");
toggleBtn.addEventListener("click", () => {
    calculator.style.display = calculator.style.display === "none" ? "block" : "none";
});

const display = document.getElementById("calc-display");
const buttons = calculator.querySelectorAll(".calc-btn");
buttons.forEach(btn => {
    btn.addEventListener("click", () => {
        const val = btn.textContent;
        if(val === "C") {
            display.value = "";
        } else {
            display.value += val;
        }
    });
});


renderProductos();
</script>



 </main>
        <?php MostrarFooter(); ?>
    <?php IncluirScripts(); ?>
    </body>
</html>

