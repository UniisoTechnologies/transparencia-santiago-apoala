<?php

	include("../conexion.php");
	include("../Inicio/encabezado.php");
	require_once("../Login/mantenerSesion.php");
	
?>

<div class="container-fluid">

<CENTER>
	
<div class="col-md-4" style="margin-top: 2%;">

	<hr>	<h3>Obligaciones de Transparencia</h3> <hr>
	</div>

	<div class="col-md-9">
		En este portal se encuentran la información pública del H. Ayuntamiento del Municipio de Santiago Apoala, Nochixtlán, Oaxaca. En apego a la Ley General de Transparencia y Acceso a la Información Pública, así como a la Ley de Transparencia y Acceso a la Información Pública para el Estado de Oaxaca
	</div>
</CENTER>
<div class="row" style="margin-top: 2%;margin-left: 5%;">
	<div style="height:100%; 
				width:20%;
				float: left;
				">
		<div style="margin-top:5%; margin-left:5%;">
			<a href="Transparencia.php" style="color:#C0392B;font-weight:bold;">Marco Normativo</a>
		</div>
		<div style="margin-top:5%; margin-left:5%;">
			<a href="Organigrama.php" style="color:#C0392B;font-weight:bold;">Estructura Orgánica</a>
		</div>
		<div style="margin-top:5%; margin-left:5%;">
			<a href="Facultades.php" style="color:#C0392B;font-weight:bold;">Facultades</a>
		</div>
		<div style="margin-top:5%; margin-left:5%;">
			<a href="MetasYobjetivos.php" style="color:#C0392B;font-weight:bold;">Metas y Objetivos</a>
		</div>
		<div style="margin-top:5%; margin-left:5%;">
			<a href="IndicadoresPublicos.php" style="color:#C0392B;font-weight:bold;">Indicadores Públicos</a>
		</div>	
		<div style="margin-top:5%; margin-left:5%;">
			<a href="IndicadoresResultados.php" style="color:#C0392B;font-weight:bold;">Indicadores de Resultados</a>
		</div>
		<div style="margin-top:5%; margin-left:5%;">
			<a href="Directorio.php" style="color:#C0392B;font-weight:bold;">Directorio</a>
		</div>
		<div style="margin-top:5%; margin-left:5%;">
			<a href="Remuneraciones.php" style="color:#C0392B;font-weight:bold;">Remuneraciones</a>
		</div>
		<div style="margin-top:5%; margin-left:5%;">
			<a href="Viaticos.php" style="color:#C0392B;font-weight:bold;">Viáticos</a>
		</div>
		<div style="margin-top:5%; margin-left:5%;">
			<a href="" style="color:#C0392B;font-weight:bold;">Plazas Administrativas</a>
		</div>
		<div style="margin-top:5%; margin-left:5%;">
			<a href="" style="color:#C0392B;font-weight:bold;">Contrataciones</a>
		</div>
		<div style="margin-top:5%; margin-left:5%;">
			<a href="" style="color:#C0392B;font-weight:bold;">Declaraciones Patrimoniales</a>
		</div>
		<div style="margin-top:5%; margin-left:5%;">
			<a href="" style="color:#C0392B;font-weight:bold;">Unidad de Trasparencia</a>
		</div>
		<div style="margin-top:5%; margin-left:5%;">
			<a href="" style="color:#C0392B;font-weight:bold;">Convocatorias</a>
		</div>
		<div style="margin-top:5%; margin-left:5%;">
			<a href="" style="color:#C0392B;font-weight:bold;">Programas Sociales</a>
		</div>
		<div style="margin-top:5%; margin-left:5%;">
			<a href="" style="color:#C0392B;font-weight:bold;">Relaciones Laborales</a>
		</div>
		<div style="margin-top:5%; margin-left:5%;">
			<a href="" style="color:#C0392B;font-weight:bold;">Información Curricular</a>
		</div>
		<div style="margin-top:5%; margin-left:5%;">
			<a href="" style="color:#C0392B;font-weight:bold;">Sanciones</a>
		</div>
		<div style="margin-top:5%; margin-left:5%;">
			<a href="" style="color:#C0392B;font-weight:bold;">Servicios</a>
		</div>
		<div style="margin-top:5%; margin-left:5%;">
			<a href="" style="color:#C0392B;font-weight:bold;">Tramites</a>
		</div>
		<div style="margin-top:5%; margin-left:5%;">
			<a href="" style="color:#C0392B;font-weight:bold;">Información Financiera</a>
		</div>
		<div style="margin-top:5%; margin-left:5%;">
			<a href="" style="color:#C0392B;font-weight:bold;">Deuda Pública</a>
		</div>
		<div style="margin-top:5%; margin-left:5%;">
			<a href="" style="color:#C0392B;font-weight:bold;">Contratos</a>
		</div>
		
		
	</div>
	<div style="height: 100%;
				width: 80%;
				position: relative;
				float: right;
				">

		
		<div class="col-md-5" style="margin-top: 2%;margin-left: 25%;">
			<h4>REMUNERACIONES</h4>
		</div>
		

		<div class="col-md-16" style="margin-left: 15%;margin-top:5%;">
			<?php
		$sql="SELECT * from remuneraciones order by id desc";
		$result=mysqli_query($con,$sql);

		$cant = mysqli_num_rows($result);

		if ($cant >=1) {
			# code...
		
		?>


	
<table align="center" cellspacing="4" class="table table-responsive">
	<tr>
		<td>Nombre</td>
		<td>Descripción</td>
		<td>Ver</td>
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
		<td align="center"><a href="../Transparencia/upload/<?php echo $mostrar['ruta']?>"><i class="fas fa-download" style="color: #2ECC71;"></i> ver</a>
		</td>
		<?php 
			if ($estado ==true) {
			
			?>
			
			<td align="center"><a href="../Transparencia/EliminarRemuneraciones.php?ruta=<?php echo $mostrar['ruta']?>"><i class="fas fa-trash-alt" style="color: red;"></i></a>
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

	<h5> por el momento no tenemos información, estamos trabajando en ello :(</h5>

<?php 

}
			if ($estado ==true) {
			
			?>
	<div class="col-md-4" style="float: right;">
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Subir Archivo</button>

	</div>
	<?php
			}
		 ?>
		</div>
	</div>
</div>

</div>



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Transparencia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="AgregarRemuneraciones.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Seleccione el arcivo:</label>
            <input type="file" class="form-control" id="recipient-name" name="fichero" required>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Descripción:</label>
            <textarea class="form-control" id="message-text" name="description" required></textarea>
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