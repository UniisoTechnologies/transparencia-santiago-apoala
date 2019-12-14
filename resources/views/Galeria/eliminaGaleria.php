	<?php
	include ("../conexion.php");	

	EliminarArchivo($_GET['url'],$con);

	function EliminarArchivo($ruta,$con)
	{
	    $sentencia="DELETE FROM galeria WHERE url like'".$ruta."'";

	    mysqli_query($con,$sentencia);
	    
	    unlink('Archivos/'.$ruta);
	    
	}

			header("Location:../Galeria/galeriaUsuario.php");
		exit;
?>
