function bajaAltaCantidad(claveObjetivo, operación) {
    //var spanObjetivo = "";
    //var cantidadObjetivoActual = 0;
    var spanObjetivo = ("cantidad" + claveObjetivo);
    var cantidadObjetivoActual = parseInt(document.getElementById(spanObjetivo).innerHTML);
    console.log("La cantidad " + claveObjetivo + " actual es de " + cantidadObjetivoActual);

    function bajaAltaSQL(idDisplay, cantidadActual, operación) {
        var id = idDisplay;
        var cantidad = cantidadActual;

        if (id != "" || id != null) {
            var urlCompuesta, urlVariables = ("?id=" + id + "&cantidad=" + cantidad + "&operación=" + operación), uriPHP = "php-scripts/AltasBajas.php";
            urlCompuesta = (uriPHP + urlVariables);

            //Petición AJAX
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById(spanObjetivo).innerHTML = this.responseText;
                }
            };

            //Procesamiento AJAX
            xmlhttp.open("GET", urlCompuesta, true);
            console.log("URL: " + urlCompuesta + "\nURL Variables: " + urlVariables);
            //console.log("ModoFiltro: " + ModoFiltro);
            xmlhttp.send();

        }
        else {
            document.getElementById(spanObjetivo).innerHTML = "¡Error en el AJAX!";
        }
    }


    switch (operación) {
        case "alta":
            // document.getElementById(spanObjetivo).innerHTML = "";
            console.log("Se solicitó un alta en la cantidad " + claveObjetivo + " a: " + (cantidadObjetivoActual + 1));
            document.getElementById(spanObjetivo).innerHTML = ("" + (cantidadObjetivoActual + 1));

            bajaAltaSQL(claveObjetivo, cantidadObjetivoActual, "alta");
            break;
        case "baja":
            // document.getElementById(spanObjetivo).innerHTML = "";
            console.log("Se solicitó una baja en la cantidad " + claveObjetivo + " a: " + (cantidadObjetivoActual - 1));
            document.getElementById(spanObjetivo).innerHTML = ("" + (cantidadObjetivoActual - 1));

            bajaAltaSQL(claveObjetivo, cantidadObjetivoActual, "baja");
            break;
        default:
            console.error("Error al recibir el valor del parámetro 'operación'.");
            break;
    }
}