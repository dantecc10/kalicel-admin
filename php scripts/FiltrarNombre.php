<?php

$Nombre = strval($_GET['Nombre']);
//  $ModoFiltro = ($_GET['ModoFiltro']);
$sql;
/*
  Declaración de funciones -------------------------------------------------------------------------------------------------------------------------------------------
  */

// echo ("ID es: " . $ID . "<br>");
$SQLBase = "SELECT * FROM `equipos administrativos` WHERE ";
$SQLBase = ($SQLBase . " Nombre = '" . $Nombre . "'");
$sql = $SQLBase;
ConstruirTabla($sql);

function ConstruirTabla($sql)
{
  require('Conexión.php');
  // echo $sql;
  echo ("<table id='InsertarResultados'>");
  $result = mysqli_query($conexión, $sql) or die("Error en la consulta a la base de datos");
  echo "<tr>";
  echo "<th>ID</th>";
  echo "<th>Usuario</th>";
  echo "<th>Nombre</th>";
  echo "<th>Puesto</th>";
  echo "<th>Dependencia</th>";
  echo "<th>IP</th>";
  echo "<th>Servidor</th>";
  echo "<th>Inventario</th>";
  echo "<th>Procesador</th>";
  echo "<th>Frecuencia</th>";
  echo "<th>RAM</th>";
  echo "<th>Sistema Operativo</th>";
  echo "<th>Marca</th>";
  echo "<th>Modelo</th>";
  echo "<th>ECOSYS 3145</th>";
  echo "<th>TASKalfa</th>";
  echo "<th>M5521</th>";
  echo "<th>Estado</th>";
  echo "</tr>";
  while ($columna = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $columna['ID'] . "</td>";
    echo "<td>" . $columna['Usuario'] . "</td>";
    echo "<td>" . $columna['Nombre'] . "</td>";
    echo "<td>" . $columna['Puesto'] . "</td>";
    echo "<td>" . $columna['Dependencia'] . "</td>";
    echo "<td>" . $columna['IP'] . "</td>";
    echo "<td>" . $columna['Servidor'] . "</td>";
    echo "<td>" . $columna['Inventario'] . "</td>";
    echo "<td>" . $columna['Procesador'] . "</td>";
    echo "<td>" . $columna['Frecuencia'] . "</td>";
    echo "<td>" . $columna['RAM'] . "</td>";
    echo "<td>" . $columna['Sistema Operativo'] . "</td>";
    echo "<td>" . $columna['Marca'] . "</td>";
    echo "<td>" . $columna['Modelo'] . "</td>";
    echo "<td>" . $columna['ECOSYS 3145'] . "</td>";
    echo "<td>" . $columna['TASKalfa'] . "</td>";
    echo "<td>" . $columna['M5521'] . "</td>";
    echo "<td>" . $columna['Estado'] . "</td>";
    echo "</tr>";
  }
  echo "</table>";
  mysqli_close($conexión);
};
