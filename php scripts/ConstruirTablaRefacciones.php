<?php
session_start();
$búsqueda = $_GET['Búsqueda'];

function ConstruirTablaCarga()
{
    $conexión = mysqli_connect("localhost", "kalicel", "kalicelrepair", "kalicel");
    $comilla = '"';
    $consulta = "SELECT * FROM `displays`";
    $resultado = mysqli_query($conexión, $consulta) or die("Error en la consulta a la base de datos");

    echo ("<table class='table my-0' id='dataTable'>
    <thead>
        <tr>
        <th>ID</th>
            <th>Modelo</th>
            <th>Marca</th>
            <th>Color</th>
            <th>Cantidad</th>
            <th>Caja</th>
            <th>Calidad</th>
            <th>Versión</th>
            </tr>
            </thead>
    <tbody id='cuerpoTabla'>");
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
    echo ("</tbody>
    <tfoot>
        <tr>
        <td><strong>ID</strong></td>
            <td><strong>Modelo</strong></td>
            <td><strong>Marca</strong></td>
            <td><strong>Color</strong></td>
            <td><strong>Cantidad</strong></td>
            <td><strong>Caja</strong></td>
            <td>Calidad</td>
            <td>Versión</td>
            </tr>
            </tfoot>
            </table>");

    mysqli_close($conexión);
}

# ConstruirTablaCarga();


function ConstruirTablaBúsqueda($búsqueda)
{
    $conexión = mysqli_connect("localhost", "kalicel", "kalicelrepair", "kalicel");
    $comilla = '"';
    $columnas = ["id_display", "modelo_display", "marca_display", "color_display", "cantidad_display", "versión_display", "caja_display"];

    // Diseño de lógica de filtros
    $where = "WHERE (";
    $cuenta = count($columnas);
    for ($i = 0; $i < $cuenta; $i++) {
        $where .= $columnas[$i] . " LIKE '%" . $búsqueda . "%' OR ";
    }
    $where = substr_replace($where, "", -3);
    $where .= ")";



    $consulta = "SELECT * FROM `displays` $where";
    echo $consulta;
    $resultado = mysqli_query($conexión, $consulta) or die("Error en la consulta a la base de datos");

    echo ("<table class='table my-0' id='dataTable'>
    <thead>
    <tr>
    <th>ID</th>
    <th>Modelo</th>
    <th>Marca</th>
    <th>Color</th>
            <th>Cantidad</th>
            <th>Caja</th>
            <th>Calidad</th>
            <th>Versión</th>
            </tr>
    </thead>
    <tbody id='cuerpoTabla'>");
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
    echo ("</tbody>
    <tfoot>
    <tr>
    <td><strong>ID</strong></td>
    <td><strong>Modelo</strong></td>
    <td><strong>Marca</strong></td>
    <td><strong>Color</strong></td>
    <td><strong>Cantidad</strong></td>
    <td><strong>Caja</strong></td>
    <td>Calidad</td>
    <td>Versión</td>
    </tr>
    </tfoot>
    </table>");

    mysqli_close($conexión);
}

if ($búsqueda != "" ||  $búsqueda != null) {
    ConstruirTablaBúsqueda($búsqueda);
} else {
    echo "Filtro desactivado";
}
