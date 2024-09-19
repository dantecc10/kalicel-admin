<?php
session_start();

function onload_table()
{
    include_once "connection.php";
    $table_dom = "";
    $comilla = '"';
    $data_query = "SELECT * FROM `displays` WHERE ((`cantidad_display` <> 0));";

    $table_dom .= ("
    <table class='table my-0' id='dataTable'>
        <thead>
            <tr>
                <th>Modelo</th>
                <th>Marca</th>
                <th>Cantidad</th>
                <th>Calidad</th>
                <th>Color</th>
                <th>Versión</th>
            </tr>
        </thead>
        <tbody id='cuerpoTabla'>
            <td>Comienza a escribir para ver resultados de búsqueda</td>
        </tbody>
        <tfoot>
            <tr>
                <td><strong>Modelo</strong></td>
                <td><strong>Marca</strong></td>
                <td><strong>Cantidad</strong></td>
                <td><strong>Calidad</strong></td>
                <td><strong>Color</strong></td>
                <td><strong>Versión</strong></td>
            </tr>
        </tfoot>
    </table>");
    return $table_dom;
}

# ConstruirTablaCarga();
function search_displays($query)
{
    include_once "connection.php";
    $comilla = '"';
    //$columnas = ["id_display", "modelo_display", "marca_display", "color_display", "cantidad_display", "calidad_display", "versión_display", "caja_display"];
    $columnas = ["modelo_display", "marca_display", "cantidad_display", "calidad_display", "color_display", "versión_display"];

    // Diseño de lógica de filtros
    $sql_query = "SELECT * FROM `displays` ";
    $where = "WHERE (";
    $n = "";
    $queries_array = [];
    foreach ($columnas as $columna) {
        $where .= "`$columna` LIKE '%$query%' OR ";
        $n .= "s";
        $queries_array[] = $query;
    }
    $where = substr($where, 0, -3) . ");";

    $sql_query .= $where;
    //echo $sql_query;
    $stmt = $connection->prepare($sql_query);
    //$stmt->bind_param("s", $queries_array);
    $stmt->execute();
    $result = $stmt->get_result();

    $table_dom = ("
    <table class='table my-0' id='dataTable'>
        <thead>
            <tr>
                <th>Modelo</th>
                <th>Marca</th>
                <th>Cantidad</th>
                <th>Calidad</th>
                <th>Color</th>
                <th>Versión</th>
            </tr>
        </thead>
        <tbody id='cuerpoTabla'>");

    while ($row = $result->fetch_assoc()) {
        $table_dom .= ("
            <tr>
                <td>$row[modelo_display]</td>
                <td>$row[marca_display]</td>
                <td>$row[cantidad_display]</td>
                <td>$row[calidad_display]</td>
                <td>$row[color_display]</td>
                <td>$row[versión_display]</td>
            </tr>");
    }
    $table_dom .= ("
        </tbody>
        <tfoot>
            <tr>
                <td><strong>Modelo</strong></td>
                <td><strong>Marca</strong></td>
                <td><strong>Cantidad</strong></td>
                <td><strong>Calidad</strong></td>
                <td><strong>Color</strong></td>
                <td><strong>Versión</strong></td>
            </tr>
        </tfoot>
    </table>");
    $stmt->close();
    $connection->close();
    return $table_dom;
}

echo (isset($_GET['query'])) ? search_displays($_GET['query']) : onload_table();
