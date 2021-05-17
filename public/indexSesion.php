<?php
require __DIR__ . './../src/Entity/autoloader.php';

$security = new Security();
$loginMessage = $security->doLogin();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/main_page.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Permanent+Marker&display=swap" rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Play&display=swap" rel="stylesheet">
  <link href="preloader.css" rel="stylesheet">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="preloader.js"></script>
  <title>Legendary Motorsport</title>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark transparent_black fixed-top">
    <div class="container">

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link effect-shine fuente_navbar" href="#">Inicio
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link effect-shine fuente_navbar" href="#">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link effect-shine fuente_navbar" href="formulario_venta.php">Vende tu coche</a>
          </li>
          <li class="nav-item">
            <a class="nav-link effect-shine fuente_navbar" href="#">Contáctanos</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link effect-shine fuente_navbar">Bienvenido: <?= $security->getUserData(); ?></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <div class="shimmer">
          <h1 class=" my-4 title"><span class="titleWhite">L</span>egendary <span class="titleWhite">M</span>otorsport</h1>
        </div>

        <h2 class="my-3 fuente_navbar">Filtrar</h2>
        <div class="list-group bordes ">
          <a href="#" class="list-group-item more_transparent_black">0 - 500$</a>
          <a href="#" class="list-group-item more_transparent_black">500 - 10000$</a>
          <a href="#" class="list-group-item more_transparent_black">10000$ - ∞</a>
        </div>

      </div>


      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4 bordes " data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="media/mercedes.png" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="media/gtr.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="media/lambo.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="media/about-4.jpeg" alt="Third slide">
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

        <div class="col-lg-3">

        </div>

        <div class="col">
          <h1 class="my-4 title effect-underline fuente_navbar">Anuncios Activos</h1>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 lista bordes">
              <img class="card-img-top" src="anuncios/picasso.jpg" alt="">
              <div class="card-body">

                <p class="items">Citroen Picasso</p>
                <h5>2.200 €</h5>
                <ul class="card-text descripcion_coche">
                  <li>*Alicante</li>
                  <li>*230.818 Km</li>
                  <li>*2003</li>
                  <li>*Diésel</li>
                  <li>*90 cv</li>
                </ul>
              </div>
              <div class="card-footer center fuente_navbar">
                <button class="btn btn--radius-2 btn--red" data-toggle="modal" data-target="#exampleModalCenter">Comprar</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 lista bordes">
              <img class="card-img-top" src="anuncios/peugeot.jpg" alt="">
              <div class="card-body">

                <p class="items">Peugeot 206</p>
                <h5>1.450 €</h5>
                <ul class="card-text descripcion_coche">
                  <li>*Madrid</li>
                  <li>*166.000 km</li>
                  <li>*2005</li>
                  <li>*Gasolina</li>
                  <li>*75 cv</li>
                </ul>
              </div>
              <div class="card-footer center fuente_navbar">
                <button class="btn btn--radius-2 btn--red" data-toggle="modal" data-target="#exampleModalCenter">Comprar</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 lista bordes">
              <img class="card-img-top" src="anuncios/astra.jpg" alt="">
              <div class="card-body">

                <p class="items">Opel Astra</p>
                <h5>2.490 €</h5>
                <ul class="card-text descripcion_coche">
                  <li>*Madrid</li>
                  <li>*249.000 Km</li>
                  <li>*2009</li>
                  <li>*Diésel</li>
                  <li>*100 cv</li>
                </ul>
              </div>
              <div class="card-footer center fuente_navbar">
                <button class="btn btn--radius-2 btn--red" data-toggle="modal" data-target="#exampleModalCenter">Comprar</button>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 lista bordes">
              <img class="card-img-top" src="anuncios/golf.jpg" alt="">
              <div class="card-body">

                <p class="items">Volkswagen Golf R</p>
                <h5>25.490 €</h5>
                <ul class="card-text descripcion_coche">
                  <li>*Barcelona</li>
                  <li>*81.500 Km</li>
                  <li>*2014</li>
                  <li>*Gasolina</li>
                  <li>*300 cv</li>
                </ul>
              </div>
              <div class="card-footer center fuente_navbar">
                <button class="btn btn--radius-2 btn--red" data-toggle="modal" data-target="#exampleModalCenter">Comprar</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 lista bordes">
              <img class="card-img-top" src="anuncios/bmw.jpg" alt="">
              <div class="card-body">

                <p class="items">BMW Serie 3 318d</p>
                <h5>21.300 €</h5>
                <ul class="card-text descripcion_coche">
                  <li>*Albacete</li>
                  <li>*64.755 Km</li>
                  <li>*2017</li>
                  <li>*Diésel</li>
                  <li>*150 cv</li>
                </ul>
              </div>
              <div class="card-footer center fuente_navbar">
                <button class="btn btn--radius-2 btn--red" data-toggle="modal" data-target="#exampleModalCenter">Comprar</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 lista bordes">
              <img class="card-img-top" src="anuncios/audi.jpg" alt="">
              <div class="card-body">

                <p class="items">Audi A7 Sportback</p>
                <h5>30.990 €</h5>
                <ul class="card-text descripcion_coche">
                  <li>*Almería</li>
                  <li>*135.000 Km</li>
                  <li>*2014</li>
                  <li>*Diésel</li>
                  <li>*313 cv</li>
                </ul>
              </div>
              <div class="card-footer center fuente_navbar">
                <button class="btn btn--radius-2 btn--red" data-toggle="modal" data-target="#exampleModalCenter">Comprar</button>
              </div>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 lista bordes">
              <img class="card-img-top" src="anuncios/porsche.jpg" alt="">
              <div class="card-body">

                <p class="items">Porsche Panamera</p>
                <h5>154.999 €</h5>
                <ul class="card-text descripcion_coche">
                  <li>*Valencia</li>
                  <li>*9.000 Km</li>
                  <li>*2019</li>
                  <li>*Híbrido enchufable</li>
                  <li>*680 cv</li>
                </ul>
              </div>
              <div class="card-footer center fuente_navbar">
                <button class="btn btn--radius-2 btn--red" data-toggle="modal" data-target="#exampleModalCenter">Comprar</button>
              </div>
            </div>

          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 lista bordes">
              <img class="card-img-top" src="anuncios/ferra.jpg" alt="">
              <div class="card-body">

                <p class="items">Ferrari 488 Pista</p>
                <h5>389.999 €</h5>
                <ul class="card-text descripcion_coche">
                  <li>*Valencia</li>
                  <li>*1.700 Km</li>
                  <li>*2019</li>
                  <li>*Gasolina</li>
                  <li>*720 cv</li>
                </ul>
              </div>
              <div class="card-footer center fuente_navbar">
                <button class="btn btn--radius-2 btn--red" data-toggle="modal" data-target="#exampleModalCenter">Comprar</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 lista bordes">
              <a href="" data-toggle="modal" data-target="#exampleModalCenter" data-toggle="modal" data-target="#exampleModalCenter"><img class="card-img-top" src="anuncios/lambo.jpg" alt=""></a>
              <div class="card-body">

                <p class="items">Lamborghini Urus</p>
                <h5>319.999 €</h5>
                <ul class="card-text descripcion_coche">
                  <li>*Valencia</li>
                  <li>*12.000 Km</li>
                  <li>*2019</li>
                  <li>*Gasolina</li>
                  <li>*610 cv</li>
                </ul>
              </div>
              <div class="card-footer center fuente_navbar">
                <button class="btn btn--radius-2 btn--red" data-toggle="modal" data-target="#exampleModalCenter">Comprar</button>
              </div>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 lista bordes">
              <a href="" data-toggle="modal" data-target="#exampleModalCenter" data-toggle="modal" data-target="#exampleModalCenter"><img class="card-img-top" src="anuncios/bugatti.jpg" alt=""></a>
              <div class="card-body">

                <p class="items">Bugatti Chiron</p>
                <h5>2.413.793 €</h5>
                <ul class="card-text descripcion_coche">
                  <li>*Baesweiler</li>
                  <li>*750 Km</li>
                  <li>*2018</li>
                  <li>*Gasolina</li>
                  <li>*1.500 cv</li>
                </ul>
              </div>
              <div class="card-footer center fuente_navbar">
                <button class="btn btn--radius-2 btn--red" data-toggle="modal" data-target="#exampleModalCenter">Comprar</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 lista bordes">
              <a href="" data-toggle="modal" data-target="#exampleModalCenter"><img class="card-img-top" src="anuncios/regera.jpg" alt=""></a>
              <div class="card-body">

                <p class="items">Koenigsegg Regera</p>
                <h5>3.193.000 €</h5>
                <ul class="card-text descripcion_coche">
                  <li>*Baesweiler</li>
                  <li>*53 Km</li>
                  <li>*2021</li>
                  <li>*Gasolina</li>
                  <li>*1155 cv</li>
                </ul>
              </div>
              <div class="card-footer center fuente_navbar">
                <button class="btn btn--radius-2 btn--red" data-toggle="modal" data-target="#exampleModalCenter">Comprar</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 lista bordes">
              <img class="card-img-top" src="anuncios/laferra.jpg" alt="">
              <div class="card-body">

                <p class="items">Ferrari LaFerrari</p>
                <h5>2.386.371 €</h5>
                <ul class="card-text descripcion_coche">
                  <li>*Beverly Hills</li>
                  <li>*2515 Km</li>
                  <li>*2014</li>
                  <li>*Gasolina</li>
                  <li>*960 cv</li>
                </ul>
              </div>
              <div class="card-footer center fuente_navbar">
                <button class="btn btn--radius-2 btn--red" data-toggle="modal" data-target="#exampleModalCenter">Comprar</button>
              </div>
            </div>
          </div>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.col-lg-9 -->

  </div>
  <!-- /.row -->

  </div>
  <!-- /.container -->
  <!-- Button trigger modal -->

  <!-- Modal -->
  <!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title center" id="exampleModalLongTitle">Confirmación de compra</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ¿Está seguro de que quiere realizar la compra?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-small btn--no" data-dismiss="modal">No</button>
          <button type="button" class="btn btn-small btn--green">Si</button>
        </div>
      </div>
    </div>
  </div>




  <!-- Footer -->
  <footer class="py-3 transparent_black">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Legendary Motorsports 2021</p>
    </div>

  </footer>


  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script>

  </script>

</body>

</html>