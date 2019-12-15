<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Santiago Apoala</title>
    <!-- Add meta tags for mobile and IE -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link href="css/bootstrap.css" rel="stylesheet" />
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!-- <link href="css/style.css" rel="stylesheet" /> -->

</head>
<body>
    
<header>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class = "row">
                    <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                        <a href="{{ route('index') }}"><img src="images/APOALA.JPG" alt="" style="width:55%"/></a>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <a href="{{ route('index') }}"><img src="images/r3.png" alt="" style="width:100%"/></a>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <a href="{{ route('index') }}"><img src="images/logo.png" alt="" style="width:110%"/></a>
                    </div>
                    <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                        <a href="{{ route('index') }}"><img src="images/Gobierno.png" alt="" style="width:55%"/></a>
                    </div>
                </div> 	
            </div>
        </div>
    </div>
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <div class="navbar-nav mr-auto ml-auto text-center">
                    <a class="nav-item nav-link active" href="../Inicio/inicio.php"><i class="fa fa-home"></i> Inicio</a>
                    <a class="nav-item nav-link" href="../Transparencia/Transparencia.php"><i class="fa fa-gavel"></i> Transparencia</a>
                    <a class="nav-item nav-link" href="../Finanzas/vista.php"><i class="fa fa-database"></i> Finanzas</a>
                    <a class="nav-item nav-link" href="../Tramite/vistaTramite.php"><i class="fa fa-id-card"></i> Tramites</a>
                    <a class="nav-item nav-link" href="../Galeria/galeriaUsuario.php"><i class="fas fa-book-open"></i> Galería</a>
                    <a class="nav-item nav-link" href="../Turismo/turismo.php"><i class="fa fa-bus"></i> Turismo</a>
                    <a class="nav-item nav-link" href="../Login/login.php"><i class="fas fa-arrow-alt-circle-right"></i> Acceder</a>
                    <a class="nav-item nav-link" href="../Login/Usuario.php"><i class="fa fa-eye"></i> Usuarios</a>
                    </div>
                </div>
            </nav>
        </div>
</header>	
<div class="container-fluid">
        @yield('seccion')
</div>

    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>
</html>



