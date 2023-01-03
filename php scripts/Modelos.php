<?php

$Marca = strval($_GET['Marca']);
$Modelo = strval($_GET['Modelo']);
$Color = strval($_GET['Color']);
//  $ModoFiltro = ($_GET['ModoFiltro']);

añadirOpciones($Marca, $Modelo);
if ($Marca != "" || $Marca != null) {
} else {
  # code...
}




/*
Declaración de funciones -------------------------------------------------------------------------------------------------------------------------------------------
*/

// echo ("ID es: " . $ID . "<br>");

#consulta = ("SELECT `modelo_display` FROM `displays` WHERE `marca_display` = '" + Marca + "'"); //PHP


function añadirOpciones($Marca, $Modelo)
{
  if ($Modelo != "" || $Modelo != null) {
    $sql = ("SELECT `color_display` FROM `displays` WHERE (`marca_display` = '" . $Marca . "' AND `modelo_display` = '" . $Modelo . "')");
  } else {
    $sql = ("SELECT `modelo_display` FROM `displays` WHERE `marca_display` = '" . $Marca . "'");
  }

  require('Conexión.php');
  // echo $sql;
  $result = mysqli_query($conexión, $sql) or die("Error en la consulta a la base de datos");
  echo ("<option value=''></option>");
  while ($columna = mysqli_fetch_array($result)) {
    echo "<option value='" . $columna['modelo_display'] . "'>";
    echo ($columna['modelo_display']);
    echo "</option>";
  }
  mysqli_close($conexión);
};
