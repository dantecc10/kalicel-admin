function opcionesModelos(Marca) {
    Marca = document.getElementById("FiltroMarca").value;

    consulta = ("SELECT `modelo_display` FROM `displays` WHERE `marca_display` = '" + Marca + "'"); //PHP

    if (Marca != "" || Marca != null) {
        var urlCompuesta, urlVariables = "", uriPHP;
        uriPHP = "php scripts/FiltrarMarca.php";
        urlVariables = ("?Marca=" + Marca);
        urlCompuesta = (uriPHP + urlVariables);

        //Petición AJAX

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("tablaFiltrada").innerHTML = this.responseText;
            }
        };

        //Procesamiento AJAX

        xmlhttp.open("GET", urlCompuesta, true);
        console.log("URL: " + urlCompuesta + "\nURL Variables: " + urlVariables);
        //console.log("ModoFiltro: " + ModoFiltro);
        xmlhttp.send();
    }
    else {
        document.getElementById("tablaFiltrada").innerHTML = "";
        return;
    }
}