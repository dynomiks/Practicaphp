<html>
  <head>
    <title>PHP Test</title>
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
      <label> Formulario </label>
    <form action="envio.php" method="post" id="formulario"> 
      <label for="nombre">Nombre:</label>
      <input id="nombre" name="nombre" type="text">
       <label for="apellido">Apellido:</label>
      <input id="apellido" name="apellido" type="text">
      <label for="edad">Edad:</label>
      <input id="edad" name="edad" type="text">
      <label for="carrera">Carrera:</label>
     <!--siempre cambiar el value con el nombre--> 
    <select name="carrera" id="carrera">
      <option value="Diseño Multimedia">Diseño Multimedia</option>
      <option value="Cosplay">Cosplay</option>
      <option value="Enología">Enologia</option>
    </select>
      <button type=button onclick="validar()">Enviar</button>
      
      
    </form>

  </body>
</html>