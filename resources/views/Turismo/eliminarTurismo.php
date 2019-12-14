	<?php
	include ("../conexion.php");	

	EliminarArchivo($_GET['url'],$con);

	function EliminarArchivo($ruta,$con)
	{
	    $sentencia="DELETE FROM lugar WHERE imagen like'".$ruta."'";

	    mysqli_query($con,$sentencia);
	    
	    unlink('Archivos/'.$ruta);
	    
	}

			header("Location:../Turismo/turismo.php");
		exit;
?>