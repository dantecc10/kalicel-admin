<?php
$conexión = mysqli_connect("localhost", "kalicel", "kalicelrepair", "kalicel");

$comilla = '"';
$consulta = "SELECT * FROM `displays`";
$resultado = mysqli_query($conexión, $consulta) or die("Error en la consulta a la base de datos");
while ($columna = mysqli_fetch_array($resultado)) {
    echo "<tr>";
    echo "<td>" . $columna['id_display'] . "</td>";
    echo "<td>" . $columna['modelo_display'] . "</td>";
    echo "<td>" . $columna['marca_display'] . "</td>";
    echo "<td>" . $columna['color_display'] . "</td>";
    echo "<td><button id='baja" . $columna['id_display'] . "' class='btn btn-primary btn-baja' onclick='javascript:bajaAltaCantidad(" . $columna['id_display'] . ", " . $comilla . "baja" . $comilla . ");' type='button'>-</button><span id='cantidad" . $columna['id_display'] .  "'>" . $columna['cantidad_display'] . "</span><button id='alta" . $columna['id_display'] . "' class='btn btn-primary btn-alta' onclick='javascript:bajaAltaCantidad(" . $columna['id_display'] . ", " . $comilla . "alta" . $comilla . ");' type='button'>+</button></td>";
    echo "<td>" . $columna['caja_display'] . "</td>";
    echo "<td>" . $columna['calidad_display'] . "</td>";
    echo "<td>" . $columna['versión_display'] . "</td>";
    echo "</tr>";
}

mysqli_close($conexión);