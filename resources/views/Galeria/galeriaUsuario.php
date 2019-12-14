<?php
  
  include ('../conexion.php');
  include("../Inicio/encabezado.php");
  require_once("../Login/mantenerSesion.php");
    ?>


<div class="container">
	<div class="row">
		<div class="row">



            <?php 
            $consulta_texto = 'select id, nombre, url from galeria order by id desc';
            $resultado = $con->query($consulta_texto);
            while ($row = mysqli_fetch_array($resultado))  {          
           ?>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="<?php echo $row['nombre'];?>"
                   data-image="../imagen/FotosApoala/<?php echo $row['url'] ?>"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="../imagen/FotosApoala/<?php echo $row['url'] ?>"
                         alt="Another alt text">
                </a>

                <?php 
                  if ($estado==true){
                 ?>
                <center>
                <a href="eliminaGaleria.php?url=<?php echo $row['url'];?>"><i class="fas fa-trash-alt" style="color: red;"></i> Eliminar</a>
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

  <center>
<div id="creditos" style="margin-top: 4%;"> 
 
    <footer class="container"  >
      <hr>
     <div class="col-md-6 right"  >

      <p>© 2018 Todos los Derechos Reservados.</p>
        
    </div>
    <div class="col-md-6 right"  >
    <i> <img src="../imagen/logo2.ico" style="width:40px; height: 40px;"></i> <a>Yeedani A.C.</a>
  </div>
    </footer>
  </div>
    <hr></center>


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
        <form action="agregarGaleria.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nombre:</label>
            <input type="text" class="form-control" id="recipient-name" name="nombre" required>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Seleccione la imagen:</label>
          <input type="file" class="form-control" id="recipient-name" name="fichero" required>
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