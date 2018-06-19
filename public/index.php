<?php
require __DIR__.'/../vendor/autoload.php';
use Daw\models\Consulta;
use Daw\models\Sesion;

$consulta= new Consulta();




if (isset($_POST["Registros"]))
{
    $consulta->insertarUsuario();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>JUGAR A AHORACADO DE LAS PALABROTAS</title>
</head>
<body>
<h1 align="center">EL AHORCADO DE LAS PALABROTAS</h1>
<br>
<form action="ahorcado_dom.php" method="POST">
    <p ALIGN=center>INICIO DE SESIÓN</p>
    <p align="center">
    <select  name="usuario">
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
    </p>
    <p align="center">
        <input type="submit" value="play">
    </p>


</form>

<br>
<h3 align="center">¿no estás registrado?</h3>

<form action="insertarUsuario.php">
    <p align="center">
    <input type="submit" value="Regístrate" />
    </p>
</form>



</body>
</html>