<?php
function get_last_insert_id($connection)
{
    return $connection->insert_id;
}
function logout($redirect_url)
{
    session_start();
    session_destroy();
    (isset($redirect_url)) ? header("Location: ../" . $redirect_url) : header("Location: ../index.html");
}
function flag_replacer($text, $flag, $data_array, $indexes_array)
{
    $chars = strlen($flag); // Longitud de la "flag" que se ha de reemplazar
    $n = substr_count($text, $flag);  // Número de veces que aparece la "flag" en el texto
    if ($n == sizeof($indexes_array)) { // Las apariciones de la "flag" en la cadena son las mismas que la longitud del arreglo de índices
        for ($i = 0; $i < $n; $i++) {
            $position = strpos($text, $flag);
            $text = substr_replace($text, $data_array[$indexes_array[$i]], $position, $chars);
        }
        return $text;
    } else {
        return null;
    }
}
// Datos de ejemplo
/*
$txt = "Hola, mi nombre es FLAG, y vivo en FLAG. Tengo FLAG años y estudio en FLAG.", $datos = ["Dante", "Puebla", 18, "BUAP"], $indexes = [0, 1, 2, 3], $flag = "FLAG";
echo (flag_replacer($txt, $flag, $datos, $indexes));
*/
function fetch_fields($table, $fields, $id, $custom_query)
{
    #$connection = new mysqli("localhost", "cuinos_fc", "CuinosFC24!!", "cuinos_fc");
    include_once "connection.php";
    //session_start();
    //(($_SESSION['email'] == "demo_user@system.com") or ($_SESSION['user'] == "demo_user")) ? $connection = new mysqli("localhost", "comercial_demo", $data[1], ($table . "_demo")):(false);
    if ($custom_query != "" && $custom_query != null) {
        $query = $custom_query;
    } else {
        if ($id == "" or $id == null) {
            $query = "SELECT * FROM `$table`";
        } else {
            $query_field = ($fields[0]);
            $query = "SELECT * FROM `$table` WHERE `$query_field` = '$id'";
        }
    }

    $result = mysqli_query($connection, $query) or die("Error en la consulta a la base de datos");
    $data = array();

    // Comprobar si las filas son mayores que 0
    $result = $connection->query($query);
    // Verificar si se encontró un usuario válido
    if ($result->num_rows > 0) {
        if ((stripos($query, "UPDATE") === false) && (stripos($query, "INSERT") === false)) {
            $i = 0;
            // Hacer fetch a los datos
            while ($row = $result->fetch_array()) {
                // Procesar cada registro obtenido
                $n = sizeof($fields);
                for ($j = 0; $j < $n; $j++) {
                    ($id == "" or $id == null) ? $data[$i][$j] = $row[$fields[$j]] : $data[$j] = $row[$fields[$j]];
                }
                $i++;
            }
            return $data;
        }
    } else {
        // No hay registros en la tabla, o la consulta hizo una actualización: devolver null
        $connection->close();
        return null;
    }
}
function contains_string($main_string, $substring)
{
    // strpos devuelve la posición donde se encuentra la subcadena
    // Si no se encuentra, devuelve false
    return strpos($main_string, $substring) !== false;
}
function splitter($urls, $splitter)
{
    if (contains_string($urls, $splitter)) {
        $img_urls = array();
        $img_urls = explode($splitter, $urls);
    } else {
        $img_urls = [$urls];
    }
    return $img_urls; // Usar como $data = split_urls($cadena_con_urls); (Validar con length)
}
function positions_proccesor($string_index, $strings_array)
{
    return ((intval($string_index) >= 0) && (intval($string_index) < sizeof($strings_array))) ? ($strings_array[intval($string_index)]) : "";
}
function table_builder($name)
{
    switch ($name) {
        case 'pendiente':
            $sql_query = "SELECT * FROM `fix_orders` WHERE (`status_fix_order` = 1)";
            $dom_dynamic_number = 2;
            break;
        case 'listo':
            $sql_query = "SELECT * FROM `fix_orders` WHERE (`status_fix_order` = 2)";
            $dom_dynamic_number = 3;
            break;
        case 'entregado':
            $sql_query = "SELECT * FROM `fix_orders` WHERE (`status_fix_order` = 3)";
            $dom_dynamic_number = 4;
            break;
        default:
            $sql_query = "SELECT * FROM `fix_orders`";
            $dom_dynamic_number = 1;
            break;
    }

    $basic_dom = '<div id="tab-1" class="tab-pane active" role="tabpanel">
    <div class="row py-2">
        <div class="col align-items-center"><div class="input-group col-8"><span class="input-group-text p-1" style="font-size: small;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor"><!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. --><path d="M3.853 54.87C10.47 40.9 24.54 32 40 32H472C487.5 32 501.5 40.9 508.1 54.87C514.8 68.84 512.7 85.37 502.1 97.33L320 320.9V448C320 460.1 313.2 471.2 302.3 476.6C291.5 482 278.5 480.9 268.8 473.6L204.8 425.6C196.7 419.6 192 410.1 192 400V320.9L9.042 97.33C-.745 85.37-2.765 68.84 3.854 54.87L3.853 54.87z"></path></svg></span><input class="form-control" type="search" placeholder="Buscar reparación" /></div></div>
    </div>
    <div id="dataTable-1" class="table-responsive table mt-2" role="grid" aria-describedby="dataTable_info">
        <table id="dataTable" class="table my-0 text-center">
            <thead>
                <tr>
                    <th>#</th> <th>Equipo</th> <th style="min-width: 110px !important;">Status</th> <th class="col-1">Cliente</th> <th>Recepción</th> <th>Cotización</th> <th style="min-width: 300px !important;">Detalles</th>
                </tr>
            </thead>
            <tbody>
                <tr class="small align-middle">
                    <td>1</td>
                    <td>OPPO Reno 7</td>
                    <td class="pending-cell px-1 py-1">
                        <div class="row m-0">
                            <div class="col col-12 mb-1 border-0 p-0"><button class="btn btn-primary btn-status px-1 border-0 col-12 py-0" type="button" onmouseover="javascript:changeText(1, &#39;listo&#39;);" onmouseout="javascript:restore_animation(this);"><span id="status-1" class="status-listo" style="font-size: smaller;">Listo</span></button></div>
                            <div class="col col-12 p-0"><button class="btn btn-primary btn-status border-0 col-12 py-0" type="button" style="background-color: yellow !important;color: darkgray !important;" onmouseover="javascript:changeText(1, &#39;pendiente&#39;);" onmouseout="javascript:resetText(1, &#39;pendiente&#39;);"><span class="text-nowrap" style="font-size: smaller;line-height: 0 !important;"><i class="fas fa-bell" style="font-size: small;"></i> Notificar</span></button></div>
                        </div>
                    </td>
                    <td class="px-3">
                        <div class="col">
                            <div class="row">
                                <div class="col px-0"><span><svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor" color="#25d366">
                                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                            <path d="M224 122.8c-72.7 0-131.8 59.1-131.9 131.8 0 24.9 7 49.2 20.2 70.1l3.1 5-13.3 48.6 49.9-13.1 4.8 2.9c20.2 12 43.4 18.4 67.1 18.4h.1c72.6 0 133.3-59.1 133.3-131.8 0-35.2-15.2-68.3-40.1-93.2-25-25-58-38.7-93.2-38.7zm77.5 188.4c-3.3 9.3-19.1 17.7-26.7 18.8-12.6 1.9-22.4.9-47.5-9.9-39.7-17.2-65.7-57.2-67.7-59.8-2-2.6-16.2-21.5-16.2-41s10.2-29.1 13.9-33.1c3.6-4 7.9-5 10.6-5 2.6 0 5.3 0 7.6.1 2.4.1 5.7-.9 8.9 6.8 3.3 7.9 11.2 27.4 12.2 29.4s1.7 4.3.3 6.9c-7.6 15.2-15.7 14.6-11.6 21.6 15.3 26.3 30.6 35.4 53.9 47.1 4 2 6.3 1.7 8.6-1 2.3-2.6 9.9-11.6 12.5-15.5 2.6-4 5.3-3.3 8.9-2 3.6 1.3 23.1 10.9 27.1 12.9s6.6 3 7.6 4.6c.9 1.9.9 9.9-2.4 19.1zM400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM223.9 413.2c-26.6 0-52.7-6.7-75.8-19.3L64 416l22.5-82.2c-13.9-24-21.2-51.3-21.2-79.3C65.4 167.1 136.5 96 223.9 96c42.4 0 82.2 16.5 112.2 46.5 29.9 30 47.9 69.8 47.9 112.2 0 87.4-72.7 158.5-160.1 158.5z"></path>
                                        </svg><a href="https://wa.me/527971227810">Dante Castelán Carpinteyro</a></span></div>
                            </div>
                            <div class="row">
                                <div class="col"><span class="text-nowrap"><i class="fas fa-phone-square-alt" style="color: orange;"></i><a href="tel:7971227810" target="_blank">7979773095</a></span></div>
                            </div>
                            <div class="row px-0 mx-0">
                                <div class="col px-1"><span class="text-truncate text-nowrap text-xs"><i class="fas fa-envelope-square" style="color: #1a9ce2;font-size: small !important;"></i><a href="mailto:edithcarpinteyro@yahoo.com.mx" target="_blank">dante@castelancarpinteyro.com</a></span></div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="col">
                            <div class="row">
                                <div class="col"><span class="text-nowrap"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-64 0 512 512" width="1em" height="1em" fill="currentColor">
                                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                            <path d="M336 64h-53.88C268.9 26.8 233.7 0 192 0S115.1 26.8 101.9 64H48C21.5 64 0 85.48 0 112v352C0 490.5 21.5 512 48 512h288c26.5 0 48-21.48 48-48v-352C384 85.48 362.5 64 336 64zM192 64c17.67 0 32 14.33 32 32c0 17.67-14.33 32-32 32S160 113.7 160 96C160 78.33 174.3 64 192 64zM192 192c35.35 0 64 28.65 64 64s-28.65 64-64 64S128 291.3 128 256S156.7 192 192 192zM288 448H96c-8.836 0-16-7.164-16-16C80 387.8 115.8 352 160 352h64c44.18 0 80 35.82 80 80C304 440.8 296.8 448 288 448z"></path>
                                        </svg> Rosalba Nazareth</span></div>
                            </div>
                            <div class="row">
                                <div class="col"><span class="text-nowrap"><i class="far fa-calendar-alt"></i> 2024-15-03</span></div>
                            </div>
                            <div class="row">
                                <div class="col"><span class="text-nowrap"><i class="far fa-clock"></i> 13:05:45</span></div>
                            </div>
                        </div>
                    </td>
                    <td class="p-1">
                        <div class="col">
                            <div class="row m-0 px-0">
                                <div class="col px-0"><span>$ <input class="col-10 col-lg-6" type="number" value="300" disabled /></span></div>
                            </div>
                        </div>
                    </td>
                    <td class="p-1">
                        <div class="row">
                            <div class="col col-6 col-lg-5 align-items-center align-self-center px-1" style="min-width: 70px;"><span>Mantenimiento</span>
                                <hr class="m-0" /><span>Limpieza</span>
                            </div>
                            <div class="col col-6 col-lg-7 px-1" style="max-height: 100% !important;overflow-y: auto !important;"><span>No se han añadido comentarios</span></div>
                        </div>
                    </td>
                </tr>
                <tr class="small align-middle">
                    <td>2</td>
                    <td>LG K22+</td>
                    <td class="pending-cell px-1 py-1">
                        <div class="row m-0">
                            <div class="col col-12 mb-1 border-0 p-0"><button class="btn btn-primary btn-status px-1 border-0 col-12 py-0" type="button" onmouseover="javascript:changeText(2, &#39;pendiente&#39;);" onmouseout="javascript:restore_animation(this);" onclick="javascript:get_service_id(this);"><span id="status-2" class="status-pendiente" style="font-size: smaller;">Pendiente</span></button></div>
                            <div class="col col-12 p-0"><button class="btn btn-primary btn-status border-0 col-12 py-0" type="button" style="background-color: yellow !important;color: darkgray !important;" onmouseover="javascript:changeText(1, &#39;pendiente&#39;);" onmouseout="javascript:resetText(1, &#39;pendiente&#39;);"><span class="text-nowrap" style="font-size: smaller;line-height: 0 !important;"><i class="fas fa-bell" style="font-size: small;"></i> Notificar</span></button></div>
                        </div>
                    </td>
                    <td class="px-3">
                        <div class="col">
                            <div class="row">
                                <div class="col px-0"><span><svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor" color="#25d366">
                                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                            <path d="M224 122.8c-72.7 0-131.8 59.1-131.9 131.8 0 24.9 7 49.2 20.2 70.1l3.1 5-13.3 48.6 49.9-13.1 4.8 2.9c20.2 12 43.4 18.4 67.1 18.4h.1c72.6 0 133.3-59.1 133.3-131.8 0-35.2-15.2-68.3-40.1-93.2-25-25-58-38.7-93.2-38.7zm77.5 188.4c-3.3 9.3-19.1 17.7-26.7 18.8-12.6 1.9-22.4.9-47.5-9.9-39.7-17.2-65.7-57.2-67.7-59.8-2-2.6-16.2-21.5-16.2-41s10.2-29.1 13.9-33.1c3.6-4 7.9-5 10.6-5 2.6 0 5.3 0 7.6.1 2.4.1 5.7-.9 8.9 6.8 3.3 7.9 11.2 27.4 12.2 29.4s1.7 4.3.3 6.9c-7.6 15.2-15.7 14.6-11.6 21.6 15.3 26.3 30.6 35.4 53.9 47.1 4 2 6.3 1.7 8.6-1 2.3-2.6 9.9-11.6 12.5-15.5 2.6-4 5.3-3.3 8.9-2 3.6 1.3 23.1 10.9 27.1 12.9s6.6 3 7.6 4.6c.9 1.9.9 9.9-2.4 19.1zM400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM223.9 413.2c-26.6 0-52.7-6.7-75.8-19.3L64 416l22.5-82.2c-13.9-24-21.2-51.3-21.2-79.3C65.4 167.1 136.5 96 223.9 96c42.4 0 82.2 16.5 112.2 46.5 29.9 30 47.9 69.8 47.9 112.2 0 87.4-72.7 158.5-160.1 158.5z"></path>
                                        </svg><a href="https://wa.me/527971227810">Edith Carpinteyro López</a></span></div>
                            </div>
                            <div class="row">
                                <div class="col"><span class="text-nowrap"><i class="fas fa-phone-square-alt" style="color: orange;"></i><a href="tel:7971227810" target="_blank">7971227810</a></span></div>
                            </div>
                            <div class="row px-0 mx-0">
                                <div class="col px-1"><span class="text-truncate text-nowrap text-xs"><i class="fas fa-envelope-square" style="color: #1a9ce2;font-size: small !important;"></i><a href="mailto:edithcarpinteyro@yahoo.com.mx" target="_blank">edithcarpinteyro@yahoo.com.mx</a></span></div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="col">
                            <div class="row">
                                <div class="col"><span class="text-nowrap"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-64 0 512 512" width="1em" height="1em" fill="currentColor">
                                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                            <path d="M336 64h-53.88C268.9 26.8 233.7 0 192 0S115.1 26.8 101.9 64H48C21.5 64 0 85.48 0 112v352C0 490.5 21.5 512 48 512h288c26.5 0 48-21.48 48-48v-352C384 85.48 362.5 64 336 64zM192 64c17.67 0 32 14.33 32 32c0 17.67-14.33 32-32 32S160 113.7 160 96C160 78.33 174.3 64 192 64zM192 192c35.35 0 64 28.65 64 64s-28.65 64-64 64S128 291.3 128 256S156.7 192 192 192zM288 448H96c-8.836 0-16-7.164-16-16C80 387.8 115.8 352 160 352h64c44.18 0 80 35.82 80 80C304 440.8 296.8 448 288 448z"></path>
                                        </svg> Luis Enrique</span></div>
                            </div>
                            <div class="row">
                                <div class="col"><span class="text-nowrap"><i class="far fa-calendar-alt"></i> 2024-15-03</span></div>
                            </div>
                            <div class="row">
                                <div class="col"><span class="text-nowrap"><i class="far fa-clock"></i> 13:05:45</span></div>
                            </div>
                        </div>
                    </td>
                    <td class="p-1">
                        <div class="col">
                            <div class="row m-0 px-0">
                                <div class="col px-0"><span>$ <input class="col-10 col-lg-6" type="number" disabled /></span></div>
                            </div>
                        </div>
                    </td>
                    <td class="p-1">
                        <div class="row">
                            <div class="col col-6 col-lg-5 align-items-center align-self-center px-1" style="min-width: 70px;"><span>Display estrellado</span>
                                <hr class="m-0" /><span>Cambio de display</span>
                            </div>
                            <div class="col col-6 col-lg-7 px-1" style="max-height: 100% !important;overflow-y: auto !important;"><span>Esperando refacción (touch)</span></div>
                        </div>
                    </td>
                </tr>
                <tr class="small align-middle">
                    <td>3</td>
                    <td>Motorola G81</td>
                    <td class="pending-cell px-1 py-1">
                        <div class="row m-0">
                            <div class="col col-12 mb-1 border-0 p-0"><button class="btn btn-primary btn-status px-1 border-0 col-12 py-0" type="button" onmouseover="javascript:changeText(3, &#39;entregado&#39;);" onmouseout="javascript:restore_animation(this);"><span id="status-3" class="status-entregado" style="font-size: smaller;">Entregado</span></button></div>
                            <div class="col col-12 p-0"><button class="btn btn-primary btn-status border-0 col-12 py-0" type="button" style="background-color: yellow !important;color: darkgray !important;" onmouseover="javascript:changeText(1, &#39;pendiente&#39;);" onmouseout="javascript:resetText(1, &#39;pendiente&#39;);"><span class="text-nowrap" style="font-size: smaller;line-height: 0 !important;"><i class="fas fa-bell" style="font-size: small;"></i> Notificar</span></button></div>
                        </div>
                    </td>
                    <td class="px-3">
                        <div class="col">
                            <div class="row">
                                <div class="col px-0"><span><svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor" color="#25d366">
                                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                            <path d="M224 122.8c-72.7 0-131.8 59.1-131.9 131.8 0 24.9 7 49.2 20.2 70.1l3.1 5-13.3 48.6 49.9-13.1 4.8 2.9c20.2 12 43.4 18.4 67.1 18.4h.1c72.6 0 133.3-59.1 133.3-131.8 0-35.2-15.2-68.3-40.1-93.2-25-25-58-38.7-93.2-38.7zm77.5 188.4c-3.3 9.3-19.1 17.7-26.7 18.8-12.6 1.9-22.4.9-47.5-9.9-39.7-17.2-65.7-57.2-67.7-59.8-2-2.6-16.2-21.5-16.2-41s10.2-29.1 13.9-33.1c3.6-4 7.9-5 10.6-5 2.6 0 5.3 0 7.6.1 2.4.1 5.7-.9 8.9 6.8 3.3 7.9 11.2 27.4 12.2 29.4s1.7 4.3.3 6.9c-7.6 15.2-15.7 14.6-11.6 21.6 15.3 26.3 30.6 35.4 53.9 47.1 4 2 6.3 1.7 8.6-1 2.3-2.6 9.9-11.6 12.5-15.5 2.6-4 5.3-3.3 8.9-2 3.6 1.3 23.1 10.9 27.1 12.9s6.6 3 7.6 4.6c.9 1.9.9 9.9-2.4 19.1zM400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM223.9 413.2c-26.6 0-52.7-6.7-75.8-19.3L64 416l22.5-82.2c-13.9-24-21.2-51.3-21.2-79.3C65.4 167.1 136.5 96 223.9 96c42.4 0 82.2 16.5 112.2 46.5 29.9 30 47.9 69.8 47.9 112.2 0 87.4-72.7 158.5-160.1 158.5z"></path>
                                        </svg><a href="https://wa.me/527971227810">Emiliano Castelán Carpinteyro</a></span></div>
                            </div>
                            <div class="row">
                                <div class="col"><span class="text-nowrap"><i class="fas fa-phone-square-alt" style="color: orange;"></i><a href="tel:7971227810" target="_blank">7971196751</a></span></div>
                            </div>
                            <div class="row px-0 mx-0">
                                <div class="col px-1"><span class="text-truncate text-nowrap text-xs"><i class="fas fa-envelope-square" style="color: #1a9ce2;font-size: small !important;"></i><a href="mailto:edithcarpinteyro@yahoo.com.mx" target="_blank">emicc1000@gmail.com</a></span></div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="col">
                            <div class="row">
                                <div class="col"><span class="text-nowrap"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-64 0 512 512" width="1em" height="1em" fill="currentColor">
                                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                            <path d="M336 64h-53.88C268.9 26.8 233.7 0 192 0S115.1 26.8 101.9 64H48C21.5 64 0 85.48 0 112v352C0 490.5 21.5 512 48 512h288c26.5 0 48-21.48 48-48v-352C384 85.48 362.5 64 336 64zM192 64c17.67 0 32 14.33 32 32c0 17.67-14.33 32-32 32S160 113.7 160 96C160 78.33 174.3 64 192 64zM192 192c35.35 0 64 28.65 64 64s-28.65 64-64 64S128 291.3 128 256S156.7 192 192 192zM288 448H96c-8.836 0-16-7.164-16-16C80 387.8 115.8 352 160 352h64c44.18 0 80 35.82 80 80C304 440.8 296.8 448 288 448z"></path>
                                        </svg> Luis Enrique</span></div>
                            </div>
                            <div class="row">
                                <div class="col"><span class="text-nowrap"><i class="far fa-calendar-alt"></i> 2024-15-03</span></div>
                            </div>
                            <div class="row">
                                <div class="col"><span class="text-nowrap"><i class="far fa-clock"></i> 13:05:45</span></div>
                            </div>
                        </div>
                    </td>
                    <td class="p-1">
                        <div class="col">
                            <div class="row m-0 px-0">
                                <div class="col px-0"><span>$ <input class="col-10 col-lg-6" type="number" disabled /></span></div>
                            </div>
                        </div>
                    </td>
                    <td class="p-1">
                        <div class="row">
                            <div class="col col-6 col-lg-5 align-items-center align-self-center px-1" style="min-width: 70px;"><span>Dispositivo mojado</span>
                                <hr class="m-0" /><span>Secado y reparación</span>
                            </div>
                            <div class="col col-6 col-lg-7 px-1" style="max-height: 100% !important;overflow-y: auto !important;"><span>Se reconstruyeron líneas en corto</span></div>
                        </div>
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td><strong>#</strong></td>
                    <td><strong>Equipo</strong></td>
                    <td><strong>Status</strong></td>
                    <td><strong>Cliente</strong></td>
                    <td><strong>Recepción</strong></td>
                    <td><strong>Cotización</strong></td>
                    <td><strong>Detalles</strong></td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>';
}

$table = "fix_orders";
$fields = array();
$fields = [
    "id_fix_order",
    "brand_fix_order",
    "model_fix_order",
    "status_fix_order",
    "customer_fix_order",
    "mobile_fix_order",
    "email_fix_order",
    "receiver_fix_order",
    "date_fix_order",
    "time_fix_order",
    "cost_fix_order",
    "paid_amount_fix_order",
    "fail_fix_order",
    "work_fix_order",
    "comments_fix_order"
];

$fetched_fix_orders = fetch_fields($table, $fields, null, null);
print_r($fetched_fix_orders);
echo ('<br>');
// Pruebas de validaciones:
($fetched_fix_orders[0][5] == null) ? $msg = "No se estableció un número telefónico" : $msg = ("Hay un teléfono: " . $fetched_fix_orders[0][5]);
echo ($msg);
echo ('<br>');
($fetched_fix_orders[0][8] == null) ? $msg = "Fecha nula" : $msg = ("Fecha: " . date("d/m/Y", strtotime($fetched_fix_orders[0][8])));
echo ($msg);
