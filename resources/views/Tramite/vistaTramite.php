<?php

	include("../conexion.php");
	include("../Inicio/encabezado.php");
	require_once("../Login/mantenerSesion.php");
	
?>

<CENTER>
	
	
<div class="col-md-4" style="margin-top: 2%;">
	<hr>	<h3>TRAMITES</h3> <hr>
	</div>

<div class="col-md-7" style="margin-top: 3%;">
	<?php
		$sql="Select * from tramite order by id desc";
		$result=mysqli_query($con,$sql);

		$cont =  mysqli_num_rows($result);
		if($cont >0){

				?>
<table align="center" cellspacing="5" class="table table-responsive">
	<tr>
		<td>Nombre</td>
		<td>Descripcion</td>
		<td>Tamaño</td>
		<td>Descargar</td>
		<?php 
			if ($estado ==true) {
			
			?>
		
		<td>Eliminar</td>
		<?php
	}
	?>
	</tr>
	<?php
		while($mostrar=mysqli_fetch_array($result)){
	?>
	<tr>
		
		<td><?php echo $mostrar['name']?></td>
		<td><?php echo $mostrar['description']?></td>
		<td><?php echo $mostrar['size']?> bytes</td>
		<td align="center"><a href="../Tramite/Archivos/<?php echo $mostrar['ruta']?>"><i class="fas fa-download" style="color: #2ECC71;"></i></a>
		</td>
		<?php 
			if ($estado ==true) {
			
			?>
			<td align="center"><a href="../Tramite/eliminarTramite.php?ruta=<?php echo $mostrar['ruta'];?>"><i class="fas fa-trash-alt" style="color: red;"></i></a>
			</td>
			<?php
			}
		 ?>
	</tr>
	<?php
	}
	?>
</table>

<?php 
}else{
	?>
	<h1> por el momento no tenemos información, estamos trabajando en ello :(</h1>
	<?php 
}
			if ($estado ==true) {
			
			?>
<div class="col-md-4" style="float: right;">
		<!--<form action="subir_archivo.php">
	<input type="submit" name="Enviar" value="Subir Archivo" class="btn btn-default btn-lg btn-block"style="float: right; " data-target="#cuadro-dialogo" data-toggle="modal">
	<!--</form>-->

	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Subir Archivo</button>

	</div>
		<?php
			}
		 ?>

		 

</div>

</CENTER>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tramites</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="subirTramite.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Seleccione el arcivo:</label>
            <input type="file" class="form-control" id="recipient-name" name="fichero">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Descripción:</label>
            <textarea class="form-control" id="message-text" name="description"></textarea>
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <input type="submit" class="btn btn-primary" name="submit" value="Subir Archivo">
      </div>
        </form>
      </div>
      
    </div>
  </div>
</div>