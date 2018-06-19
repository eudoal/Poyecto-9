<?php
require __DIR__.'/../vendor/autoload.php';
use Daw\models\Consulta;
use Daw\models\Sesion;
use Daw\models\Db;

$consulta = new Consulta();
$sesion  = new Sesion();
$sesion->start();
$sesion->set('nombre', $_POST['usuario']);




?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
   <!-- <center><input type="button" value="reiniciar" onclick="javascript:window.location.reload();"/></center> -->
    <h1>Hola <?php echo $sesion->get('nombre'); ?></h1>
    <h1 ALIGN=center id="parrafo1"><b>Bienvenido al juego del AHORCADO</b></h1>
    <p ALIGN=center id="parrafo2">tu puntuación actual es de: <?php echo $consulta->getPuntuacion(); ?> </p>
    <p ALIGN=center id="parrafo2">ADIVINA LA PALABRA</p>
    <h1 ALIGN=center id="intentos"></h1>

    <center><form name ="formulario" id="formulario">
        <input type="text" value="" id="letraFormulario">
        <input type="button" name="boton" id=boton onclick="interactuar()" value="Enviar">
    </form></center>
    <br>
    <br>
    <p ALIGN=center id="plantilla"></p>
    <br>
    <br>
    <h1 ALIGN=center id="acertado"><b><b></h1>
    <p ALIGN=center id="fallado"></p>
    <p ALIGN=center id="numeroIntentos"></p>
    <p ALIGN=center id="palabraAleatoria"></p>
    <h1 ALIGN=center id="palabraCorrecta"><b></b></h1>
    <h1 ALIGN=center id="fin"><b></b></h1>

    <script type="text/javascript" src="js/ahorcado_dom.js">
    </script>

  </body>
</html>
