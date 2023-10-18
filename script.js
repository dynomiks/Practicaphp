function validar() {
  var nombre = document.getElementById("nombre").value;
  var apellido = document.getElementById("apellido").value;
  var edad = document.getElementById("edad").value;
  var carrera = document.getElementById("carrera").value;
  var nombre = document.getElementById("nombre").value;
  var formulario = document.getElementById("formulario");

  


if(nombre=="" || apellido=="" || edad < 18 || carrera==""){
  alert("Todos los campos son obligatorios");

  }else{
  formulario.submit()
}
}