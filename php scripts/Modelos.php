<?php

$Marca = strval($_GET['Marca']);
//  $ModoFiltro = ($_GET['ModoFiltro']);
$sql;
/*
  Declaración de funciones -------------------------------------------------------------------------------------------------------------------------------------------
  */

// echo ("ID es: " . $ID . "<br>");

#consulta = ("SELECT `modelo_display` FROM `displays` WHERE `marca_display` = '" + Marca + "'"); //PHP

$sql = ("SELECT `modelo_display` FROM `displays` WHERE `marca_display` = '" . $Marca . "'");

ConstruirTabla($sql);

function ConstruirTabla($sql)
{
  require('Conexión.php');
  // echo $sql;
  echo ("<table class='table my-0' id='dataTable'");
  $result = mysqli_query($conexión, $sql) or die("Error en la consulta a la base de datos");

  while ($columna = mysqli_fetch_array($result)) {
    echo "<option value='" . $columna['modelo_display'] . "'>";
    echo ($columna['modelo_display']);
    echo "</option>";
  }
  mysqli_close($conexión);
};
