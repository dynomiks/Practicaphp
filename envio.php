
<html>
  <head>
    <title>PHP Test</title>
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
  </head>

<?php

  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $edad = $_POST['edad'];
  $carrera = $_POST['carrera'];
  
  echo "<div id=\"formulario\">";

  echo "Nombre: {$nombre} ";
  echo " Apellido: {$apellido}";
  echo "Edad: {$edad}";
  echo "Carrera: {$carrera}";

  echo "</div>";
  echo "<a href=\"index.php\"> Volver a inicio </a>";
?>