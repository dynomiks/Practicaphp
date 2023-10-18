
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
  /* crear una tabla*/
$connection = new SQLite3("estudiantes.db");
/*me conecto a la tabla*/
if (!$connection){
  die("No se pudo conectar")
}
/*la creo si es que no hay tabla*/
$connection->exec(
  'CREATE TABLE IF NO EXISTS usuario(
    id INTEGER PRIMARY KEY,
    nombre TEXT,
    apellido TEXT,
    edad TEXT,
    carrera TEXT
    )'
);

$query = "INSERT INTO usuario (nombre,apellido,edad,carrera) VALUES ('$nombre','$apellido','$edad','$carrera')";

$resultado = $connection->exec($query);
if(!$resultado){
  echo"Se guardo correctamente!";
}

?>