<?php
	
	include("../conexion.php");
	include("../Inicio/encabezado.php");
	include("../Login/mantenerSesion.php");
	
	
?>

<CENTER>
	
<div class="col-md-4" style="margin-top: 2%;">
	<hr>	<h3>FINANZAS</h3> <hr>
	</div>
	

<div class="col-md-7" style="margin-top: 3%;">
	<?php  
		$sql="Select * from finanza order by id desc";
		$result=mysqli_query($con,$sql);

		$cant =mysqli_num_rows($result);

		if ($cant>0) {
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
		$sql="Select * from finanza order by id desc";
		$result=mysqli_query($con,$sql);
		while($mostrar=mysqli_fetch_array($result)){
	?>
	<tr>
		
		<td><?php echo $mostrar['name']?></td>
		<td><?php echo $mostrar['description']?></td>
		<td><?php echo $mostrar['size']?> bytes</td>
		<td align="center"><a href="../Finanzas/Archivos/<?php echo $mostrar['ruta']?>"><i class="fas fa-download" style="color: #2ECC71  ;"></i></a>
		</td>
		<?php 
			if ($estado ==true) {
			
			?>
			
			<td align="center"><a href="../Finanzas/eliminar.php?ruta=<?php echo $mostrar['ruta'];?>"><i class="fas fa-trash-alt" style="color: red;"></i></a>
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
}
	else{
		?>
		<h1> ...Por el momento no tenemos información, estamos trabajando en ello :( ...</h1>
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


              
</div>
</CENTER>

<center>
<div id="creditos" style="margin-top: 10%;"> 
    <footer class="container"  >
     <div class="col-md-6 right"  >
      <p>© 2018 Todos los Derechos Reservados.</p>
        
    </div>
    <div class="col-md-6 right">
    <i> <img src="../imagen/logo2.ICO" style="width:40px; height: 40px;"></i> <a>Yeedani A.C.</a>
  </div>
    </footer>
  </div>
    <hr></center>
<div style="height: 5px;"></div>


<?php 
if ($cant<=4) {
	# code...
	?>
	<div style="height: 250px;"></div>

<?php 
}

 ?>


 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Finanzas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="Subir.php" method="post" enctype="multipart/form-data">
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