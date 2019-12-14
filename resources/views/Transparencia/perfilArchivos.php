<?php
 include '../conexion.php';
include("../Inicio/encabezado.php");
            if ($_GET){
   				$idArch=$_GET['id'];

    $consulta= 'SELECT id, name, description FROM archivos WHERE id='.$idArch;
    $resultado = $con->query($consulta);
    $archivo = mysqli_fetch_array($resultado);
 }
  ?>
  <!--obtengo los datos del lugar seleccionado para posteriormente reflejarlo en el sifuiente formulario -->

<!DOCTYPE html>
<html >
<body>
      <form   method="POST" action="http://localhost/subirArchivos_apoala/modificar.php">
      <table>
        ID ARCHIVO: <input name="id" type="text" size="150" maxlength="150"  value="<?php echo $archivo['id']; ?>"  required>
        <tr>
        <br><br> <td>NOMBRE ARCHIVO: <input name="nombre" type="text" size="70" maxlength="70" placeholder="nombre archivo"  value="<?php echo $archivo['name']; ?>"  required></td>
      </tr>
      <tr>
        <br><br> <td>Descripcion ARCHIVO: <input name="description" type="text" size="100" maxlength="250" placeholder="descripcion archivo" value="<?php echo $archivo['description']; ?>"  required></td>
      </tr>
        <br><br>

        <tr>
      <td><input name="submit" type="submit" value="actualizar archivo"></td>

    </tr>

    <tr>
                 <td><a href="descargar_Archivos.php" class="button"> regresar</a><td>
               </tr>
    </table>
 </form>

  </body>

</html>
