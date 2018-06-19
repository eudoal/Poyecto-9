<?php
require __DIR__.'/../vendor/autoload.php';
use Daw\models\Consulta;
use Daw\models\Sesion;
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro</title>

  </head>
  <body>
    <h1 text align="center">Introduce tus datos</h1><br>
      <center><form action="listadoUsuarios.php" method="post" onsubmit="return comprobarInsertar()">

        <p text align="center">Introduce el tu Nombre y cambia los demás campos</p>

        <p text align="center">Email</p>
        <input type="text" value="" id="correo" name="correo">

        <p text align="center">Nombre</p>
        <input type="text" value="" id="nombre" name="newNombre">

        <p text align="center">Apellidos</p>
        <input type="text" value="" id="apellidos" name="newApellidos">

        <p text align="center">Edad</p>
        <input type="text" value="" id="edad" name="newEdad">

        <p text align="center">Curso</p>
        <input type="text" value="" id="curso" name="newCurso"><br><br>

        <input type="submit" name="actualizar" value="Actualizar"> </form></center>

      <script src="js/comprobarInsertar.js"></script>
  </body>
</html>
