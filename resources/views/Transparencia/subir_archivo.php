<?php
include '../conexion.php';
include("../Inicio/encabezado.php");

if (isset($_POST['submit'])) {
    if(is_uploaded_file($_FILES['fichero']['tmp_name'])) {


      // creamos las variables para subir a la db
        $ruta = "upload/";
        $nombrefinal= trim ($_FILES['fichero']['name']); //Eliminamos los espacios en blanco
      //  $nombrefinal= ereg_replace (" ", "", $nombrefinal);//Sustituye una expresión regular
        $upload= $ruta . $nombrefinal;



        if(move_uploaded_file($_FILES['fichero']['tmp_name'], $upload)) { //movemos el archivo a su ubicacion

                       $nombre  = $_POST["nombre"];
                   $description  = $_POST["description"];


                  $query = "INSERT INTO archivos (name,description,ruta,tipo,size)
    VALUES ('".$nombrefinal."','$description','".$nombrefinal."','".$_FILES['fichero']['type']."','".$_FILES['fichero']['size']."')";

    $resultado=mysqli_query($con,$query);

    

        }
    }
 }
 header("Location:../Transparencia/Transparencia.php");
    exit;
?>



