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
                        $Lugar = $_POST["Lugar"];
                        $ubicacion = $_POST["Ubicacion"];
                        $desc_img =$_POST["desc_img"];
                   $description  = $_POST["description"];


                  $query = "INSERT INTO lugar(nombre,ubicacion,descripcion,imagen,desc_imagen)
    VALUES ('".$Lugar."','".$ubicacion."','".$description."','".$nombrefinal."','".$desc_img."')";

    $resultado=mysqli_query($con,$query);  
        }
    }
 }
 header("Location:../Turismo/turismo.php");
    exit;
?>
