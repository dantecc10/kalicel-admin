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

añadirOpciones($sql);

function añadirOpciones($sql)
{
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
