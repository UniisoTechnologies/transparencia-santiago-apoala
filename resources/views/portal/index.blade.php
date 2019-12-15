
@extends('plantilla')
@section('seccion')
<div class="container">
 
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src=".../800x400?auto=yes&bg=777&fg=555&text=First slide" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src=".../800x400?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src=".../800x400?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
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
</div>
<center>

<div class="col-md-10 alert alert-secondary" role="alert" style="margin-top: 2%;">
  <center>
        <h3>
        Santiago Apoala, Oax.
        </h3>
  </center>
</div>
</center>
 <center>
 <div class="blog-post col-md-9">
            <p>Santiago Apoala población que pertenece al municipio Nochixtlán en el estado de Oaxaca (región Mixteca)</p>
            <hr>
            <p>Santiago Apoala se localiza a 125 kilómetros al poniente de la ciudad de Oaxaca.</p>
            <p>Apoala ofrece al visitante bellezas naturales sin igual: peñas, cañones, cascadas y valles, cuevas con amplias galerías y miradores naturales.</p>
            <div class="container">
  <div class="row">
    <div class="col-sm">
     <center><img src="images/cascadas/cascada.jpg" alt="Responsive image" class="img-thumbnail" style="width: 400px"></center>
    </div>
    <div class="col-sm">
     <center><img src="images/cascadas/santiago2.jpg" alt="Responsive image" class="img-thumbnail" style="width: 400px"></center>
    </div>
    
  </div>
</div>
            
            <blockquote>
              <p style="margin-top: 1%;"><strong>Apoala</strong> que significa: donde reparten el agua en mixteco.</p>
            </blockquote>
            <p>Como complemento a sus bellezas naturales, las manifestaciones de la cultura de Apoala hallan uno de sus mejores ejemplos en el templo de Santiago Apóstol, probablemente erigido en el siglo XVI. De pequeñas dimensiones, su fachada principal está compuesta por una portada y una torre con un campanario de un solo cuerpo. En las esquinas del atrio existen capillas posas, comunes en la época de su construcción.


              <p><strong>Santiago Apoala se localiza a 125 kilómetros al poniente de la ciudad de Oaxaca.</strong></p>
            
          </div><!-- /.blog-post -->
        </div>
</center>

<div class="container mt-4"> <!--/.div contenedor de seccion-->

<section>
       <!--Grid fila-->
         <div class="row">
                   <!--Grid columna-->
                    <div class="col-md-6 mb-4">
                        <!--Card-->
                        <div class="card">
                            <!--Card contenido-->
                            <div class="card-body text-center">
                                <h4 class="font-up font-bold deep-purple-text mb-3"><strong>Ubicanos:</strong></h4>
                                <!--Google mapa-->
                                <div id="map-responsive" class="z-depth-1" style="height: 400px">
                                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15208.163228465033!2d-97.1445807796377!3d17.648226204662823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c663cce175f115%3A0x5c4169323d49a9f8!2sSantiago+Apoala%2C+Oax.!5e0!3m2!1ses-419!2smx!4v1539052680100" width="400" height="350" frameborder="0" style="border:0; padding-top: 1em;" allowfullscreen></iframe>
                                </div>
                            </div>
                           <!--/.Card contenido-->
                        </div>
                        <!--/.Card-->
                    </div>

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





