var ModoFiltro;
function FiltrarProductos() {
    var ID = document.getElementById("CampoFiltroID").value;
    var Marca = document.getElementById("CampoFiltroMarca").value;
    var LíneaSerie = document.getElementById("CampoFiltroLíneaSerie").value;
    var Modelo = document.getElementById("CampoFiltroModelo").value;
    var Barras = document.getElementById("CampoFiltroBarras").value;
    var SKU = document.getElementById("CampoFiltroSKU").value;
    if (ID == "" && Marca == "" && LíneaSerie == "" && Modelo == "" && Barras == "" && SKU == "") {
        document.getElementById("DivTablaID").innerHTML = "";
        return;
    } else {
        var urlCompuesta, urlVariables = "", uriPHP;
        uriPHP = "Scripts PHP/Filtrar.php";
        urlVariables = ("?ID=" + ID + "&Marca=" + Marca + "&LíneaSerie=" + LíneaSerie + "&Modelo=" + Modelo + "&Barras=" + Barras + "&SKU=" + SKU);
        urlCompuesta = (uriPHP + urlVariables);

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("DivTablaID").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", urlCompuesta, true);
        console.log("URL: " + urlCompuesta + "\nURL Variables: " + urlVariables);
        console.log("ModoFiltro: " + ModoFiltro);
        xmlhttp.send();
    }
}
function FiltroID() {
    var ID = document.getElementById("CampoFiltroID").value;
    if (ID != "" || ID != null) {
        var urlCompuesta, urlVariables = "", uriPHP;
        uriPHP = "Scripts PHP/FiltrarID.php";
        urlVariables = ("?ID=" + ID);
        urlCompuesta = (uriPHP + urlVariables);

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("DivTablaID").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", urlCompuesta, true);
        console.log("URL: " + urlCompuesta + "\nURL Variables: " + urlVariables);
        console.log("ModoFiltro: " + ModoFiltro);
        xmlhttp.send();
    }
    else {
        document.getElementById("DivTablaID").innerHTML = "";
        return;
    }
}

function FiltroNombre() {
    var Nombre = document.getElementById("CampoFiltroNombre").value;
    if (Nombre != "" || Nombre != null || Nombre != "Todas") {
        var urlCompuesta, urlVariables = "", uriPHP;
        uriPHP = "Scripts PHP/FiltrarNombre.php";
        urlVariables = ("?Nombre=" + Nombre);
        urlCompuesta = (uriPHP + urlVariables);

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("DivTablaID").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", urlCompuesta, true);
        console.log("URL: " + urlCompuesta + "\nURL Variables: " + urlVariables);
        console.log("ModoFiltro: " + ModoFiltro);
        xmlhttp.send();
    }
    else {
        document.getElementById("DivTablaID").innerHTML = "";
        return;
    }
}
function FiltroPuesto() {
    var Puesto = document.getElementById("CampoFiltroPuesto").value;
    if (Puesto != "" || Puesto != null) {
        var urlCompuesta, urlVariables = "", uriPHP;
        uriPHP = "Scripts PHP/FiltrarPuesto.php";
        urlVariables = ("?Puesto=" + Puesto);
        urlCompuesta = (uriPHP + urlVariables);

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("DivTablaID").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", urlCompuesta, true);
        console.log("URL: " + urlCompuesta + "\nURL Variables: " + urlVariables);
        console.log("ModoFiltro: " + ModoFiltro);
        xmlhttp.send();
    }
    else {
        document.getElementById("DivTablaID").innerHTML = "";
        return;
    }
}
function FiltroDependencia() {
    var Dependencia = document.getElementById("CampoFiltroDependencia").value;
    if (Dependencia != "" || Dependencia != null) {
        var urlCompuesta, urlVariables = "", uriPHP;
        uriPHP = "Scripts PHP/FiltrarDependencia.php";
        urlVariables = ("?Dependencia=" + Dependencia);
        urlCompuesta = (uriPHP + urlVariables);

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("DivTablaID").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", urlCompuesta, true);
        console.log("URL: " + urlCompuesta + "\nURL Variables: " + urlVariables);
        console.log("ModoFiltro: " + ModoFiltro);
        xmlhttp.send();
    }
    else {
        document.getElementById("DivTablaID").innerHTML = "";
        return;
    }
}
function FiltroMarca() {
    var Marca = document.getElementById("CampoFiltroMarca").value;
    if (Marca != "" || Marca != null) {
        var urlCompuesta, urlVariables = "", uriPHP;
        uriPHP = "Scripts PHP/FiltrarMarca.php";
        urlVariables = ("?Marca=" + Marca);
        urlCompuesta = (uriPHP + urlVariables);

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("DivTablaID").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", urlCompuesta, true);
        console.log("URL: " + urlCompuesta + "\nURL Variables: " + urlVariables);
        console.log("ModoFiltro: " + ModoFiltro);
        xmlhttp.send();
    }
    else {
        document.getElementById("DivTablaID").innerHTML = "";
        return;
    }
}
function FiltroModelo() {
    var Modelo = document.getElementById("CampoFiltroModelo").value;
    if (Modelo != "" || Modelo != null) {
        var urlCompuesta, urlVariables = "", uriPHP;
        uriPHP = "Scripts PHP/FiltrarModelo.php";
        urlVariables = ("?Modelo=" + Modelo);
        urlCompuesta = (uriPHP + urlVariables);

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("DivTablaID").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", urlCompuesta, true);
        console.log("URL: " + urlCompuesta + "\nURL Variables: " + urlVariables);
        console.log("ModoFiltro: " + ModoFiltro);
        xmlhttp.send();
    }
    else {
        document.getElementById("DivTablaID").innerHTML = "";
        return;
    }
}