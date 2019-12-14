		<?php
	include ("../conexion.php");	

	EliminarArchivo($_GET['ruta'],$con);

	function EliminarArchivo($ruta,$con)
	{
	    $sentencia="DELETE FROM tramite WHERE ruta like'".$ruta."'";

	    mysqli_query($con,$sentencia);
	    
	    unlink('Archivos/'.$ruta);
	    
	}

			header("Location:../Tramite/vistaTramite.php");
		exit;
?>
				
		



