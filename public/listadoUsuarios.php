<?php
require __DIR__.'/../vendor/autoload.php';
use Daw\models\Consulta;
use Daw\models\Sesion;


$consulta = new Consulta();

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista Usuarios</title>
  </head>
  <style>
table, th, td {
  border: 2px solid black;
  border-collapse: collapse;
}

th {
  background-color: #0D9D0F;
  }
td {
  background-color: #9FE99F;
  text-align: center;
}
</style>
  <body>
    <h1 text align="center">Listado de usuarios</h1>
  </body>

  <?php
/*
  if (isset($_POST["Registros"]))

  {
      $consulta->insertarUsuario();

  }
*/
      if (isset($_POST["actualizar"])) {
        $consulta->actualizarUsuario();

        }

      if (isset($_POST["eliminar"])) {
        $consulta->borrar();

        }
      ?>











    <table style="width:60%" align="center">
    <tr>
        <th >CORREO</th>
        <th >NOMBRE</th>
        <th >APELLIDOS</th>
        <th >EDAD</th>
        <th >CURSO</th>
        <th >PUNTUACIÓN</th>
    </tr>
    <?php

$seleccion = $consulta->getUsuarios();
      foreach ($seleccion as $fila) {

        echo "<tr>"."<td>"
        .$fila['correo']."</td>"."<td>"
        .$fila['nombre']."</td>"."<td>"
        .$fila['apellidos']."</td>"."<td>"
        .$fila['edad']."</td>"."<td>"
        .$fila['curso']."</td>"."<td>"
        .$fila['puntuacion']."</td>"."</tr>";
    }

    ?>

    </table>
    <table style="width:33%" align="center">
      <br></br>
    <tr>
        <th ><a href="actualizarUsuario.php">Actualizar usuario</a></th>
        <th ><a href="borrarUsuario.php">Borrar usuario</a></th>
        <th ><a href="insertarUsuario.php">Nuevo usuario</a></th>
    </tr>
</table>
<br></br>
<br></br>
</html>
