// var operación;
// var claveObjetivo;
function bajaAltaCantidad(claveObjetivo, operación) {
    var spanObjetivo = "";
    var cantidadObjetivoActual = 0;
    spanObjetivo = ("cantidad" + claveObjetivo);
    cantidadObjetivoActual = parseInt(document.getElementById(spanObjetivo).outerText);
    console.log("La cantidad " + claveObjetivo + " actual es de " + cantidadObjetivoActual);

    switch (operación) {
        case "alta":
            document.getElementById(spanObjetivo).innerHTML = (cantidadObjetivoActual++);
            console.log("Se solicitó un alta en la cantidad " + claveObjetivo);
            break;
        case "baja":
            document.getElementById(spanObjetivo).innerHTML = (cantidadObjetivoActual--);
            console.log("Se solicitó una baja en la cantidad " + claveObjetivo);
            break;
        default:
            console.error("Error al recibir el valor del parámetro 'operación'.");
            break;
    }
}