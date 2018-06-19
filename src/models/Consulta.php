<?php
namespace Daw\models;


class Consulta
{
  private $db;
  private $conector;

  function __construct()
  {
  $this->db=new Db();
  $this->db->conectar();
  $this->conector=$this->db->getConector();
  }

  public function insertarUsuario()
{


     if ($this->conector->connect_errno) {
        echo "Fallo al conectar a MySQL: " . $conector->connect_errno;
      }else  {
        $registro = "INSERT INTO juegos.usuarios (correo, nombre, apellidos, edad, curso)
        VALUES ('$_POST[correo]', '$_POST[nombre]', '$_POST[apellidos]', '$_POST[edad]','$_POST[curso]')";

        if ($this->conector->query($registro) === TRUE) {
          echo "<br><h1 align = center>Registro Completado</h1><br>";

        }else {
          ?>
          <center><img src="images/8C1.gif" alt="AGGGGHHHHHH" /></center>
          <?php
          echo "<br><h1 align = center>Registo Fallido</h1><br>";

        }

    }
}


  public function actualizarUsuario()
{


  if (isset($_POST["actualizar"])) {
     if ($this->conector->connect_errno) {
        echo "Fallo al conectar a MySQL: " . $conector->connect_errno;
      }

      else {

        $nombre=$_POST["newNombre"];
        $buscarUsuario = "SELECT * FROM usuarios WHERE nombre = '$_POST[newNombre]' ";
        $result = $this->conector->query($buscarUsuario);
        $count = mysqli_num_rows($result);

        if ($count == 0) {
          echo "<br><h1 align = center>No hay usuario que Actualizar</h1>";
          ?>
          <center><img src="images/meme_pc_wtf.gif" /></center>
          <?php
          echo "<h1 align = center>Por favor, introduce un Nombre válido</h1><br>";

       }

      else  {
        $actualiza = "UPDATE usuarios SET nombre = '$_POST[newNombre]', correo = '$_POST[correo]', apellidos= '$_POST[newApellidos]', edad = '$_POST[newEdad]', curso= '$_POST[newCurso]' WHERE nombre = '$_POST[newNombre]'";

        if ($this->conector->query($actualiza) === TRUE) {
          echo "<br><h1 align = center>Actualización Correcta</h1><br>";
        }
    }
  }
  }
}

  public function borrar()
{
  if (isset($_POST["eliminar"])) {

    if ($this->conector->connect_errno) {
       echo "Fallo al conectar a MySQL: " . $conector->connect_errno;
     }
     else {

       $nombre=$_POST["newNombre"];
       $buscarUsuario = "SELECT * FROM usuarios WHERE nombre = '$_POST[newNombre]' ";
       $result = $this->conector->query($buscarUsuario);
       $count = mysqli_num_rows($result);

       if ($count == 0) {
         echo "<br><h1 align = center>No hay usuario que borrar</h1><br>";
         ?>
         <center><img src="images/8C1.gif" /></center>
         <?php
         echo "<h1 align = center>Por favor, introduce un Nombre válido</h1><br>";
      }
          else {
          $borrar = "DELETE FROM usuarios WHERE nombre = '$_POST[newNombre]'";

            if ($this->conector->query($borrar) === TRUE) {
              echo "<br><h1 align = center>Has sido borrado</h1><br>";
            }
          }
    }
  }
}
  public function getUsuarios()
  {
      $resultado = $this->conector->query("SELECT * FROM usuarios");
      return $resultado;
  }
    public function getPuntuacion()
    {
        $result = $this->conector->query("SELECT puntuacion FROM usuarios WHERE nombre = '$_POST[usuario]'");
        while ($fila = $result->fetch_assoc()) {
            return $fila['puntuacion'];
        }


    }


}
?>
