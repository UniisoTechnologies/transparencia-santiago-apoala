<?php 
include("../Inicio/encabezado.php");
include 'config.php';
 
     
 
if ($_POST){  
  $nombres  = $_POST['nombres'];
  $cargo = $_POST['cargo'];
  $lugarorigen = $_POST['lugarorigen'];
  $periodo = $_POST['periodo'];

      if(is_uploaded_file($_FILES['fichero']['tmp_name'])) {

      // creamos las variables para subir a la db
        $ruta = "../Transparencia/fotos/";
        $temporal = $_FILES['fichero']['tmp_name'];

        

        $nombrefinal= trim ($_FILES['fichero']['name']); //Eliminamos los espacios en blanco
      //  $nombrefinal= ereg_replace (" ", "", $nombrefinal);//Sustituye una expresión regular
        $tipo = $_FILES['fichero']['type'];

        //ABRIR LA FOTO ORIGINAL
        if($tipo == 'image/png' || $tipo == 'IMAGE/PNG'){
       $original = imagecreatefrompng($temporal);
     }

     if($tipo == 'image/jpg'|| $tipo =='IMAGE/JPG'){
        $original = imagecreatefromjpg($temporal);
     }
      if($tipo == 'image/jpeg'|| $tipo =='IMAGE/JPEG'){
        $original = imagecreatefromjpeg($temporal);
     }
       
       $anchooriginal = imagesx($original);
       $altooriginal = imagesy($original);


        //CREAR UN LIENZO
       $copia = imagecreatetruecolor(900, 900);

       //copiar original -> copia

       imagecopyresampled($copia,$original,0,0,0,0, 900, 900,$anchooriginal,$altooriginal);

       imagejpeg($copia,"../Transparencia/fotos/".$nombrefinal,100);

       // $upload= $ruta . $nombrefinal;

        //if(move_uploaded_file($_FILES['fichero']['tmp_name'], $upload)) { //movemos el archivo a su ubicacion
              

   $query = "INSERT INTO organigrama (nombres,cargo,lugarorigen,periodo,imagen)  VALUES ('$nombres','$cargo','$lugarorigen','$periodo','".$nombrefinal."')";
   $resultado=mysqli_query($con,$query);
   $con->close();
 

        
    //}
    
 }
}
header("Location:../Transparencia/Organigrama.php"); //regresa a la pagina donde muestra todas los lugares
 exit();
 
?>



