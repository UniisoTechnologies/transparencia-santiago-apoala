
	
		<?php
	include ("../conexion.php");	

	EliminarArchivo($_GET['ruta'],$con);

	function EliminarArchivo($ruta,$con)
	{
	    $sentencia="DELETE FROM metasyobjetivos WHERE ruta like'".$ruta."'";

	    mysqli_query($con,$sentencia);
	    
	    unlink('upload/'.$ruta);
	    
	}

			header("Location:../Transparencia/MetasYobjetivos.php");
		exit;
?>



