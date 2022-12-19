function opcionesModelos() {
    var Marca = document.getElementById("FiltroMarca").value;

    if (Marca != "" || Marca != null) {
        var urlCompuesta, urlVariables = "", uriPHP;
        uriPHP = "php scripts/Modelos.php";
        urlVariables = ("?Marca=" + Marca);
        urlCompuesta = (uriPHP + urlVariables);

        //Petición AJAX
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("FiltroModelo").innerHTML = this.responseText;
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
    }
    filtrarMarca();
}
function filtrarMarca() {
    var Marca = document.getElementById("FiltroMarca").value;

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