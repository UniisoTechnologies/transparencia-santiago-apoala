
@extends('plantilla')
@section('seccion')
 <!--carrusel  -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="images/cascadas/IMG_3382.JPG">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/cascadas/CAM03291.jpg">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/cascadas/CAM02978.jpg">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
<!--/.Carousel Wrapper-->
<div class="container">
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class = "row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 alert alert-secondary" role="alert" style="margin-top: 2%;">
                    <h3 class="text-center">Santiago Apoala, Oax.</h3>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <p>Población que pertenece al municipio de Nochixtlán en el estado de Oaxaca (región Mixteca)</p>
                <hr>
                <p>Se localiza a 125 kilómetros al poniente de la ciudad de Oaxaca.</p>
                <p>Ofrece al visitante bellezas naturales sin igual: peñas, cañones, cascadas y valles, cuevas con amplias galerías y miradores naturales.</p>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <blockquote><p style="margin-top: 1%;"><strong>Apoala</strong> que significa: donde reparten el agua en mixteco.</p></blockquote>
                <p>Como complemento a sus bellezas naturales, las manifestaciones de la cultura de Apoala hallan uno de sus mejores
                    ejemplos en el templo de Santiago Apóstol, probablemente erigido en el siglo XVI. De pequeñas dimensiones, 
                    su fachada principal está compuesta por una portada y una torre con un campanario de un solo cuerpo. 
                    En las esquinas del atrio existen capillas posas, comunes en la época de su construcción.</p>
            </div>
        </div> 	
    </div>
</div>
<div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class = "row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 alert alert-secondary" role="alert" style="margin-top: 2%;">
                        <h3 class="text-center">Sección de noticias</h3>
                        <h4 class="text-center">Entérate de las noticias de nuestro municipio</h4>
                </div>
                <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    <div class="card">
                         <img class="card-img-top" src="images/noticias/cabildo.jpeg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    <div class="card">
                            <img class="card-img-top" src="images/noticias/foto-transformador-1024x683.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Renueva el transformador que operaba en Camino santa Inés pozo #2</h5>
                            <p class="card-text">El Honorable Ayuntamiento en coordinación con la Regiduria de Agua Potable 
                                                 Renueva el transformador que operaba en
                                                 Camino santa Inés pozo #2 por uno más eficaz,ahora de 112.5 Kva…..</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    <div class="card">
                            <img class="card-img-top" src="images/cabildo.jpeg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                
            </div> 	
        </div>
</div>






</div>


<div class="container mt-4"> <!--/.div contenedor de seccion-->

<section>
       <!--Grid fila-->
         <div class="row">


                    <div class="col-md-6 mb-4">
                        <!--Card-->
                        <div class="card">
                            <!--Card contenido-->
                            <div class="card-body text-center">
                                <h4 class="font-up font-bold deep-purple-text mb-3"><strong>Contacto:</strong></h4>
                                <!--Google mapa-->
                                <div id="container-other" class="z-depth-1" style="height: 400px">
                                  <div class="wow fadeInUp contact-info" data-wow-delay="0.4s">
                         <div class="section-title">
                                
                              <p style="padding-top: 4em;"><strong>Para Mayores Informes, Dudas o Sugerencias:</p></strong>
                         </div>
                         
                        <p><i class="fa fa-map-marker"></i> Palacio municipal S/N,Santiago Apoala, Oax.</p>
                         <p><i class="fa fa-comment"></i> <a href="mailto:apoala-17@outlook.com">apoala-17@outlook.com</a></p>
                         <p><i class="fa fa-envelope-o"></i> C.P. 69625</p>
                         <p><i class="fa fa-phone"></i> 951 211 0333</p>
                    </div>
                                </div>
                            </div>
                           <!--/.Card contenido-->
                        </div>
                        <!--/.Card-->
                    </div>
              </div>
     </section>

</div>
<hr>
<center>
<div id="creditos" > 
    <footer class="container"  >
     <div class="col-md-6 right"  >
      <p>© 2018 Todos los Derechos Reservados.</p>
    </div>
    <div class="col-md-6 right"  >
    <i> <img src="images/logo2.ICO" style="width:40px; height: 40px;"></i> <a>Yeedani A.C.</a>
  </div>
    </footer>
  </div>
    <hr></center>
<div style="height: 5px;"></div>
@endsection





