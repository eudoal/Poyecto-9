<?php
require __DIR__.'/../vendor/autoload.php';
use Daw\models\Consulta;
use Daw\models\Sesion;

$consulta = new Consulta();
$sesion  = new Sesion();
$sesion->start();
if ($sesion->get('nombre') != "admin") {
    header("Location: index.php");
}
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Borrar Usuario</title>
  </head>
  <body>
    <h1 text align="center">Introduce tu Nombre para borrar tu usuario<br></h1>

    <center><form action="listadoUsuarios.php" method="post" onsubmit="return comprobarInsertar()">

          <input type="text" name="newNombre" id="nombre" placeholder="Nombre usuario:">

      <input type="submit" name="eliminar" value="Borrar usuario">
    </form></center>

  <script src="js/comprobarInsertar.js"></script>
  </body>
</html>
