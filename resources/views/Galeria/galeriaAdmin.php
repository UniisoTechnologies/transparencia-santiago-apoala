<?php

  include ('../conexion.php');
  include("../Inicio/encabezado.php");
  
    ?>


<div class="container" style="margin-top: 3%;">
	<div class="row" >
  
    
      <form action="../Galeria/agregarGaleria.php?" method="post" enctype="multipart/form-data" >
        <div> 
        Nombre: <input type="text"  name="nombre" id="nombre" placeholder="Nombre de la imagen"  value=""  required>
        </div> <br>        
        <div >
          Seleccione archivo: <input name="fichero" type="file" size="150" maxlength="150">
        </div> <br>  
      <div class="boton">  <input name="submit" type="submit" value="Subir">  </div>
      <br> 
       </form>
    

		
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

