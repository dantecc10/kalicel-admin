<?php

$Marca = strval($_GET['Marca']);
//  $ModoFiltro = ($_GET['ModoFiltro']);
$sql;
/*
  Declaración de funciones -------------------------------------------------------------------------------------------------------------------------------------------
  */

// echo ("ID es: " . $ID . "<br>");

$sql = ("SELECT * FROM `displays` WHERE `Marca`= '" . $Marca . "'");

ConstruirTabla($sql);

function ConstruirTabla($sql)
{
  require('Conexión.php');
  // echo $sql;
  echo ("<table class='table my-0' id='dataTable'");
  $result = mysqli_query($conexión, $sql) or die("Error en la consulta a la base de datos");
  echo "<thead><tr>";
  echo "<th>ID</th>";
  echo "<th>Modelo</th>";
  echo "<th>Marca</th>";
  echo "<th>Color</th>";
  echo "<th>Cantidad</th>";
  echo "<th>Caja</th>";
  echo "<th>Calidad</th>";
  echo "<th>Versión</th>";
  echo "</tr></thead>";
  echo "<tbody>";

  while ($columna = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $columna['id_display'] . "</td>";
    echo "<td>" . $columna['modelo_display'] . "</td>";
    echo "<td>" . $columna['marca_display'] . "</td>";
    echo "<td>" . $columna['color_display'] . "</td>";
    echo "<td>" . $columna['cantidad_display'] . "</td>";
    echo "<td>" . $columna['caja_display'] . "</td>";
    echo "<td>" . $columna['calidad_display'] . "</td>";
    echo "<td>" . $columna['versión_display'] . "</td>";
    echo "</tr>";
  }
  echo "</tbody>";
  echo "</table>";
  mysqli_close($conexión);
};
