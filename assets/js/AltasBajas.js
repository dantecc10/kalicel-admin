var claveObjetivo = 0;
function bajaCantidad(claveObjetivo) {
    var spanObjetivo = ("cantidad" + claveObjetivo);
    var cantidadObjetivoActual = parseInt(document.getElementById(spanObjetivo).outerText);

    document.getElementById(spanObjetivo).innerHTML = cantidadObjetivoActual++;
}