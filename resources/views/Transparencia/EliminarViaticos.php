
	
		<?php
	include ("../conexion.php");	

	EliminarArchivo($_GET['ruta'],$con);

	function EliminarArchivo($ruta,$con)
	{
	    $sentencia="DELETE FROM viaticos WHERE ruta like'".$ruta."'";

	    mysqli_query($con,$sentencia);
	    
	    unlink('upload/'.$ruta);
	    
	}

			header("Location:../Transparencia/Viaticos.php");
		exit;
?>



