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
<div class="row" style="margin-top: 2%;margin-left: 7%;">
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
      <a href="Viaticos.php" style="color:#C0392B;font-weight:bold;">Remuneraciones</a>
    </div>
    <div style="margin-top:5%; margin-left:5%;">
      <a href="Remuneraciones.php" style="color:#C0392B;font-weight:bold;">Viáticos</a>
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
	<div class="row" style="height: 100%;
				width: 80%;
				position: relative;
				float: right;
				">

		<div class="col-md-5" style="margin-top: 2%;margin-left: 25%;">
			<h4>ESTRUCTURA ORGÁNICA</h4>
		</div> 

<div class="container" style="margin-left: 5%;margin-right: 15%;">
	<div class="row">
		<div class="row" >



            <?php 
            $consulta_texto = 'select * from organigrama order by id_org desc';
            $resultado = $con->query($consulta_texto);
            while ($row = mysqli_fetch_array($resultado))  {          
           ?>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="<?php echo $row['nombres'];?>"
                   data-image="../Transparencia/fotos/<?php echo $row['imagen'] ?>"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="../Transparencia/fotos/<?php echo $row['imagen'] ?>"
                         alt="Another alt text">
                </a>

                	<div style="font-weight: bold;">
            <label for="message-text" class="col-form-label" style="font-weight: lighter;">Nombre: </label>
                		<?php 

                			echo $row['nombres'];

                		 ?>
                	</div>
                	<div style="font-weight: bold;">
                		 <label for="message-text" class="col-form-label" style="font-weight: lighter;">Cargo: </label>
                		<?php 

                			echo $row['cargo'];

                		 ?>
                	</div>
                	<div style="font-weight: bold;">
                		 <label for="message-text" class="col-form-label" style="font-weight: lighter;">Lugar de origen: </label>
                		<?php 

                			echo $row['lugarorigen'];

                		 ?>
                	</div>
                	<div style="font-weight: bold;">
                		 <label for="message-text" class="col-form-label" style="font-weight: lighter;">Periodo: </label>
                		<?php 

                			echo $row['periodo'];

                		 ?>
                	</div>
                <?php

                  if ($estado==true){
                 ?>
                <center>
                <a href="eliminarOrganigrama.php?url=<?php echo $row['id_org'];?>"><i class="fas fa-trash-alt" style="color: red;"></i> Eliminar</a>
                </center>

                <?php
                  }

                  ?>
            </div>



                    <?php             
                  }                                                                      
                 $con->close();
       ?>
      </div>


        <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="image-gallery-title"></h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                        </button>

                        <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>



<?php
  if ($estado == true) {
    
  ?>
<div class="col-md-3" style="float: right;">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Subir Archivo</button>
</div>
  <?php 
    }
   ?>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Galería</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="guardarOrganigrama.php" method="post" enctype="multipart/form-data">
         
          <div class="form-group">
            <label for="message-text" class="col-form-label">Seleccione la imagen:</label>
          <input type="file" class="form-control" id="recipient-name" name="fichero" required>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nombres:</label>
            <input type="text" class="form-control" id="recipient-name" name="nombres" required>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Cargo:</label>
            <input type="text" class="form-control" id="recipient-name" name="cargo" required>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Lugar de origen:</label>
            <input type="text" class="form-control" id="recipient-name" name="lugarorigen" required>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Periodo:</label>
            <input type="text" class="form-control" id="recipient-name" name="periodo" required>
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
        <form action="subir_archivo.php" method="post" enctype="multipart/form-data">
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