function bajaAltaCantidadDebug(claveObjetivo, operación) {
    //var spanObjetivo = "";
    //var cantidadObjetivoActual = 0;
    var spanObjetivo = ("cantidad" + claveObjetivo);
    var cantidadObjetivoActual = parseInt(document.getElementById(spanObjetivo).outerText);
    console.log("La cantidad " + claveObjetivo + " actual es de " + cantidadObjetivoActual);

    switch (operación) {
        case "alta":
            document.getElementById(spanObjetivo).innerHTML = "";
            document.getElementById(spanObjetivo).innerHTML = (cantidadObjetivoActual++);
            console.log("Se solicitó un alta en la cantidad " + claveObjetivo + "a " + (cantidadObjetivoActual++));
            break;
        case "baja":
            document.getElementById(spanObjetivo).innerHTML = "";
            console.log("Se solicitó un alta en la cantidad " + claveObjetivo + "a " + (cantidadObjetivoActual--));
            console.log("Se solicitó una baja en la cantidad " + claveObjetivo);
            break;
        default:
            console.error("Error al recibir el valor del parámetro 'operación'.");
            break;
    }
}