var operación;
var claveObjetivo;
function bajaAltaCantidad(claveObjetivo, operación) {
    var spanObjetivo = "";
    var cantidadObjetivoActual = 0;
    spanObjetivo = ("cantidad" + claveObjetivo);
    cantidadObjetivoActual = parseInt(document.getElementById(spanObjetivo).outerText);

    switch (operación) {
        case "alta":
            document.getElementById(spanObjetivo).innerHTML = (cantidadObjetivoActual++);
            break;
        case "baja":
            document.getElementById(spanObjetivo).innerHTML = (cantidadObjetivoActual--);
            break;
        default:
            console.error("Error al recibir el valor del parámetro 'operación'.")
            break;
    }
}