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
            <select  name="newNombre">
                <option value="">Elige usuario</option>
                <?php
                $listado = $consulta->getUsuarios();
                foreach ($listado as $fila) {
                    ?>
                    <option value="<?= $fila['nombre'] ?>">
                        <?php echo $fila['nombre']?>
                    </option>
                <?php } ?>
            </select>
    <br><br>
      <input type="submit" name="eliminar" value="Borrar usuario">
    </form></center>

  <script src="js/comprobarInsertar.js"></script>

    <form action="index.php">
        <p align="center">
            <input type="submit" value="LogOut" />
        </p>
    </form>
  </body>
</html>
