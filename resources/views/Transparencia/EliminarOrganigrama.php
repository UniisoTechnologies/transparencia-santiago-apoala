	<?php
	include ("../conexion.php");	
/*
	$consulta_texto = 'select from organigrama where id_org = $_GET['url']';
            $resultado = $con->query($consulta_texto);
           $row = mysqli_fetch_array($resultado)*/
	EliminarArchivo($_GET['url'],$con);

	


	function EliminarArchivo($ruta,$con)
	{
	    $sentencia="DELETE FROM organigrama WHERE id_org = '".$ruta."'";

	    mysqli_query($con,$sentencia);
	    
	    //unlink('fotos/'.$img);
	    
	}

			header("Location:../Transparencia/Organigrama.php");
		exit;
?>
