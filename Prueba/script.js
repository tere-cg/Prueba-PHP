var listaproductos = [];
var galletas = 0;
var paqueteGalletas = 0;
var cafeChicoCantidad = 0;
var cafeMedianoCantidad = 0;
var cafeGrandeCantidad = 0;
var cafeJumboCantidad = 0;

function addCafeChico() {
  var cant = parseInt(document.getElementById('cafeChicoCant').value);
  var producto = 10 * cant;
  listaproductos.push(producto);
  cafeChicoCantidad += cant;
  cafeChicoCant.value = 0;
}

function addCafeMediano() {
  var cant = parseInt(document.getElementById('cafeMedianoCant').value);
  var producto = 15 * cant;
  listaproductos.push(producto);
  galletas += 3 * cant;
  updateGalletas();
  cafeMedianoCantidad += cant;
  cafeMedianoCant.value = 0;
}

function addCafeGrande() {
  var cant = parseInt(document.getElementById('cafeGrandeCant').value);
  var producto = 20 * cant;
  listaproductos.push(producto);
  galletas += 6 * cant;
  updateGalletas();
  cafeGrandeCantidad += cant;
  cafeGrandeCant.value = 0;
}

function addCafeJumbo() {
  var cant = parseInt(document.getElementById('cafeJumboCant').value);
  var producto = 25 * cant;
  listaproductos.push(producto);
  paqueteGalletas += cant;
  updatePaqueteGalletas();
  cafeJumboCantidad += cant;
  cafeJumboCant.value = 0;
}

function updateGalletas() {
  document.getElementById('galletas-regaladas').textContent = galletas;
}

function updatePaqueteGalletas() {
  document.getElementById('paquete-galletas-regaladas').textContent = paqueteGalletas;
}

function mostrarTotal() {
    //Se guardan los productos comprados en variables
    var cafeChicoComprado = cafeChicoCantidad;
    var cafeMedianoComprado = cafeMedianoCantidad;
    var cafeGrandeComprado = cafeGrandeCantidad;
    var cafeJumboComprado = cafeJumboCantidad;
  
    // Calcular el total y mostrar el resultado de galletas a dar
    var total = 0;
    for (var i = 0; i < listaproductos.length; i++) {
      total += listaproductos[i];
    }
    document.getElementById('resultado').textContent = total.toFixed(2);
    document.getElementById('galletas-regaladas').textContent = galletas;
    document.getElementById('paquete-galletas-regaladas').textContent = paqueteGalletas;
  
    // Actualizar los elementos del modal con las cantidades compradas
    document.getElementById('cafeChicoComprado').textContent = cafeChicoComprado;
    document.getElementById('cafeMedianoComprado').textContent = cafeMedianoComprado;
    document.getElementById('cafeGrandeComprado').textContent = cafeGrandeComprado;
    document.getElementById('cafeJumboComprado').textContent = cafeJumboComprado;
  
    // Reiniciar las listas y cantidades
    listaproductos = [];
    cafeChicoCantidad = 0;
    cafeMedianoCantidad = 0;
    cafeGrandeCantidad = 0;
    cafeJumboCantidad = 0;
    galletas = 0;
    paqueteGalletas = 0;
}
  

function mostrarCarrito(){
    document.getElementById('cafeChicoComprado').textContent = cafeChicoCantidad;
    document.getElementById('cafeMedianoComprado').textContent = cafeMedianoCantidad;
    document.getElementById('cafeGrandeComprado').textContent = cafeGrandeCantidad;
    document.getElementById('cafeJumboComprado').textContent = cafeJumboCantidad;
}