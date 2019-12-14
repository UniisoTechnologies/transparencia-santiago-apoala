<?php
include '../conexion.php';
include("../Inicio/encabezado.php");

if (isset($_POST['submit'])) {
    if(is_uploaded_file($_FILES['fichero']['tmp_name'])) {


      // creamos las variables para subir a la db
        $ruta = "Archivos/";
        $nombrefinal= trim ($_FILES['fichero']['name']); //Eliminamos los espacios en blanco
      //  $nombrefinal= ereg_replace (" ", "", $nombrefinal);//Sustituye una expresión regular
        $upload= $ruta . $nombrefinal;



        if(move_uploaded_file($_FILES['fichero']['tmp_name'], $upload)) { //movemos el archivo a su ubicacion

                       $nombre  = $_POST["nombre"];
                   $description  = $_POST["description"];


                  $query = "INSERT INTO finanza (name,description,ruta,tipo,size)
    VALUES ('".$nombrefinal."','$description','".$nombrefinal."','".$_FILES['fichero']['type']."','".$_FILES['fichero']['size']."')";

    $resultado=mysqli_query($con,$query);

    header("Location:../Finanzas/vista.php");
    exit;

        }
    }
 }
?>



<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data" style="margin-top: 5%;">

  <table border="0" align="center">
    <tr>
      <td>Seleccione archivo: </td>
      <td><input name="fichero" type="file" size="150" maxlength="150"></td>
    </tr>

    <tr>
      <td>
        Descripcion: 
      </td>
      <td>
        <input name="description" rows="10" cols="20" wrap="soft" type="text" size="100" maxlength="250" placeholder="descripcion archivo" style="height:60px;">
      </td>
    </tr>
    
  </table>
  <center>
<div class="boton">
<input name="submit" type="submit" value="SUBIR ARCHIVO">
</div>
    </center>
    
    
  
  
</form>

