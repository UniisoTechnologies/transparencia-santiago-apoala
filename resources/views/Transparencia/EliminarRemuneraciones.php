
	
		<?php
	include ("../conexion.php");	

	EliminarArchivo($_GET['ruta'],$con);

	function EliminarArchivo($ruta,$con)
	{
	    $sentencia="DELETE FROM remuneraciones WHERE ruta like'".$ruta."'";

	    mysqli_query($con,$sentencia);
	    
	    unlink('upload/'.$ruta);
	    
	}

			header("Location:../Transparencia/Remuneraciones.php");
		exit;
?>



