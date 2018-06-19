
function comprobarInsertar(){

  var correo = document.getElementById('correo').value;
  var nombre = document.getElementById('nombre').value;
  var apellidos = document.getElementById('apellidos').value;
  var edad = document.getElementById('edad').value;
  var curso = document.getElementById('curso').value;



  if (correo.length == 0) {
    alert ("No has rellenado el campo CORREO");
    return false;
  }

  if (nombre.length == 0) {
    alert ("No has rellenado el campo NOMBRE");
    return false;
  }

  if (apellidos.length == 0) {
    alert ("No has rellenado el campo APELLIDOS");
    return false;
  }

  if (edad.length == 0) {
    alert ("No has rellenado el campo EDAD");
    return false;
  }

  if (curso.length == 0) {
    alert ("No has rellenado el campo CURSO");
    return false;
  }

}
