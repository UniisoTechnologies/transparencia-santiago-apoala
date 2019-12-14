<?php
include("../conexion.php");
include("../Inicio/encabezado.php");
 include("../Login/mantenerSesion.php");
  ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	
		#jumbo {

width: 85%; 

margin:0 auto;
line-height: 1.4em;
}

.caja{
  margin-top: 3%;
  border-left-style: solid;
  border-right-style: solid;
  border-top-style: solid;
  border-bottom-style: solid;
}

</style>
<body>

<div>
  <?php
    $sql="SELECT * from lugar order by id_l desc";
    $result=mysqli_query($con,$sql);

    $cant = mysqli_num_rows($result);

    if ($cant >=1) {
      # code...
      while($mostrar=mysqli_fetch_array($result)){
    
    ?>


    <div class="row caja" style="background: red;margin-left:5%;margin-right: 5%;margin-top: 2%; background:#F0F4F5;border-radius:2%;"> 

      <div class="col-sm" style="margin-top: 2%;">
        <center>
          <br>
         <h1 ><?php echo $mostrar["nombre"];?></h1>
         </center>

         </div>
         <div class="row">

         <div class="col-md-5 " style="height: 40em; margin-top: 3%;margin-left:2%;">
        <img class="card-img-top" src="upload/<?php echo $mostrar["imagen"]; ?>" alt="Card image cap" style="height:80%;">
         <div class="card-body">
          <center>    
           <p class="card-text"><?php echo $mostrar["desc_imagen"]; ?></p>
          </center>
            </div>

            <div class="col-md-12" style="margin-top: 5%;">
  <h4>Ubicación: </h4>
  <?php echo $mostrar["ubicacion"]; ?>

</div>

          </div>

      
<div class="col-md-6" style="margin-left: 2%;margin-top: 2%;">
        <p class="mb-0" align="justify"><?php echo $mostrar["descripcion"];?></p>
                                  <?php
if ($estado==true) {
  # code...
?>
<center>

  <div style="margin-top:5%;float: right;">
         <center>
          <i class="fas fa-trash-alt" style="color: red;"></i>
                <a href="eliminarTurismo.php?url=<?php echo $mostrar['imagen'];?>" class="btn btn-danger"> Eliminar</a>
                </center>

         </div>

</center>
<?php
}
?>
      </div>

  
    </div>
          

<div style="height: 80px; "></div>


      </div>
<?php
}
}
  if ($estado == true) {
    
  ?>
<div style="float: right; margin-top: 3%;margin-right: 5%;">
   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Subir Archivo</button>
</div>
  <?php 
    }
   ?>
<div style="margin-top:2%;height: 80px; "></div>
</div>

      



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Turismo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="AgregarTur.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Lugar:</label>
            <input type="text" class="form-control" id="recipient-name" name="Lugar" required>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Ubicacion:</label>
            <input type="text" class="form-control" id="recipient-name" name="Ubicacion" required>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Selecciona una imagen:</label>
            <input type="file" class="form-control" id="recipient-name" name="fichero" required>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Descripción de la imagen:</label>
            <input type="text" class="form-control" id="recipient-name" name="desc_img" required>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Descripción:</label>
            <textarea class="form-control" id="message-text" name="description" required  style="height: 330px;"></textarea>

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


</body>

</html>