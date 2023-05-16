<?php
session_start();
$búsqueda = $_GET['búsqueda'];
/*
<div class='card shadow'>
                        <div class='card-header py-3'>
                            <p class='text-primary m-0 fw-bold'>Información de reparaciones</p>
                            <div>
                                <ul class='nav nav-tabs' role="tablist">
                                    <li class='nav-item' role='presentation'><a class='nav-link active' role='tab' data-bs-toggle='tab' href='#tab-1'>Todas</a></li>
                                    <li class='nav-item' role='presentation'><a class='nav-link' role='tab' data-bs-toggle='tab' href='#tab-2'>Pendiente</a></li>
                                    <li class='nav-item' role='presentation'><a class='nav-link' role='tab' data-bs-toggle='tab' href='#tab-3'>Listo</a></li>
                                    <li class='nav-item' role='presentation'><a class='nav-link' role='tab' data-bs-toggle='tab' href='#tab-4'>Entregado</a></li>
                                </ul>
                                <div class='tab-content'>
                                    <div class='tab-pane active' role='tabpanel' id='tab-1'>
                                        <div class='row'>
                                            <div class='col-md-6 text-nowrap'>
                                                <div id='dataTable_length-1' class='dataTables_length' aria-controls='dataTable'><label class='form-label'>Mostrar<select class='d-inline-block form-select form-select-sm'>
                                                            <option value='10' selected="">10</option>
                                                            <option value='25'>25</option>
                                                            <option value='50'>50</option>
                                                            <option value='100'>100</option>
                                                        </select>&nbsp;</label></div>
                                            </div>
                                            <div class='col-md-6'>
                                                <div class='text-md-end dataTables_filter' id='dataTable_filter-1'><label class='form-label'><input type='search' class='form-control form-control-sm' aria-controls='dataTable' placeholder='Search'></label></div>
                                            </div>
                                        </div>
                                        <div class='table-responsive table mt-2' id='dataTable-1' role='grid' aria-describedby='dataTable_info'>
                                        //////////
                                        ///////
                                        /////////
                                        ///////
                                        /////////
                                        </div>
                                        <div class='row'>
                                            <div class='col-md-6 align-self-center'>
                                                <p id='dataTable_info-1' class='dataTables_info' role='status' aria-live='polite'>Mostrando de x a y</p>
                                            </div>
                                            <div class='col-md-6'>
                                                <nav class='d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers'>
                                                    <ul class='pagination'>
                                                        <li class='page-item disabled'><a class='page-link' aria-label='Previous' href='#'><span aria-hidden='true'>«</span></a></li>
                                                        <li class='page-item active'><a class='page-link' href='#'>1</a></li>
                                                        <li class='page-item'><a class='page-link' href='#'>2</a></li>
                                                        <li class='page-item'><a class='page-link' href='#'>3</a></li>
                                                        <li class='page-item'><a class='page-link' aria-label='Next' href='#'><span aria-hidden='true'>»</span></a></li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
*/

function ConstruirTablaCarga($status)
{
    $conexión = mysqli_connect("localhost", "kalicel", "kalicelrepair", "kalicel");
    $comilla = '"';

    switch ($status) {
        case 1:
            $consulta = "SELECT * FROM `reparaciones`";
            break;
        case 2:
            $consulta = "SELECT * FROM `reparaciones` WHERE (`status_reparación` = 'Pendiente') ORDER BY (`id_reparación`) DESC";
            break;
        case 3:
            $consulta = "SELECT * FROM `reparaciones` WHERE (`status_reparación` = 'Listo') ORDER BY (`id_reparación`) DESC";
            break;
        case 4:
            $consulta = "SELECT * FROM `reparaciones` WHERE (`status_reparación` = 'Entregado') ORDER BY (`id_reparación`) DESC";
            break;

        default:
            # code...
            break;
    }

    $resultado = mysqli_query($conexión, $consulta) or die("Error en la consulta a la base de datos");

    echo ("<table class='table my-0' id='dataTable'>
    <thead>
        <tr>
            <th>ID</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Falla</th>
            <th>Status</th>
            <th>Trabajo</th>
            <th>Estado previo</th>
            <th>Cotización</th>
            <th>Abono</th>
            <th>Recibido</th>
            <th>Recibió</th>
            <th>Comentarios</th>
            <th>Nombre</th>
            <th>Teléfono</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody class='cuerpoTabla'>");
    while ($columna = mysqli_fetch_array($resultado)) {
        echo "<tr>";
        echo "<td>" . $columna['id_reparación'] . "</td>";
        echo "<td>" . $columna['marca_reparación'] . "</td>";
        echo "<td>" . $columna['modelo_reparación'] . "</td>";
        echo "<td>" . $columna['falla_reparación'] . "</td>";
        echo ("
        <td class='pending-cell'>
            <div class='btn-group' role='group'>
            <button class='btn btn-primary btn-status' type='button' " .
            "onmouseover=" . $comilla . "javascript:changeText(" . $columna['id_reparación'] . ", '" . lcfirst($columna['status_reparación']) . "');" . $comilla .
            " onmouseout=" . $comilla . "javascript:resetText(" . $columna['id_reparación'] . ", '" . lcfirst($columna['status_reparación']) . "');" . $comilla .
            " <span id='status" . $columna['id_reparación'] . "' class='status-" . lcfirst($columna['status_reparación']) . "'>" . $columna['status_reparación'] .
            "</span></button></div>
        </td>");

        echo "<td>" . $columna['trabajo_reparación'] . "</td>";
        echo "<td>" . $columna['estadoPrevio_reparación'] . "</td>";
        echo "<td>$" . $columna['cotización_reparación'] . "</td>";
        echo "<td>$" . $columna['abono_reparación'] . "</td>";
        echo "<td>" . $columna['fecha_recibida_reparación'] . "</td>";
        echo "<td>" . $columna['recibió_reparación'] . "</td>";
        echo "<td>" . $columna['comentarios_reparación'] . "</td>";
        echo "<td>" . $columna['nombre_reparación'] . "</td>";
        echo ("<td>
            <a href='https://wa.me/" . $columna['teléfono_reparación'] . "' target='_blank'>" .
            $columna['teléfono_reparación'] .
            "</a>
            </td>");
        echo "<td>" . $columna['email_reparación'] . "</td>";
        echo "</tr>";
    }
    echo ("</tbody>
    <tfoot>
        <tr>
            <td><strong>ID</strong></td>
            <td><strong>Marca</strong></td>
            <td><strong>Modelo</strong></td>
            <td><strong>Falla</strong></td>
            <td><strong>Status</strong></td>
            <td><strong>Trabajo</strong></td>
            <td><strong>Estado</strong></td>
            <td><strong>Cotización</strong></td>
            <td><strong>Abono</strong></td>
            <td><strong>Recibido</strong></td>
            <td><strong>Recibió</strong></td>
            <td><strong>Comentarios</strong></td>
            <td><strong>Nombre</strong></td>
            <td><strong>Teléfono</strong></td>
            <td><strong>Email</strong></td>
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
    #echo $consulta;
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
}/* else {
    ConstruirTablaCarga($búsqueda);
    #echo "Filtro desactivado";
}
*/