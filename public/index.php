<?php
require __DIR__.'/../vendor/autoload.php';
use Daw\models\Consulta;
use Daw\models\Sesion;

$consulta= new Consulta();


if (isset($_POST["Registros"])) {
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
<form action="ahorcado_dom.php" method="post">
    <p>INICIO DE SESIÓN
    <select name="usuario">
        <option value="">¿que usuario eres?</option>
        <?php
        $listado = $consulta->getUsuarios();
        foreach ($listado as $fila) {
        ?>
        <option value="<?php $fila['nombre'] ?>">
            <?php echo $fila['nombre']?>
        </option>
        <?php } ?>
    </select>
        <input type="submit" value="play">
    </p>

</form>

<a href="insertarUsuario.php">Regístrate</a>
</body>
</html>