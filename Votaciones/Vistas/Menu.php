<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Menu Votaciones</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300i,400,700" rel="stylesheet">
    <link rel="stylesheet" href="photon/fonts/icomoon/style.css">

    <link rel="stylesheet" href="photon/css/bootstrap.min.css">
    <link rel="stylesheet" href="photon/css/magnific-popup.css">
    <link rel="stylesheet" href="photon/css/jquery-ui.css">
    <link rel="stylesheet" href="photon/css/owl.carousel.min.css">
    <link rel="stylesheet" href="photon/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="photon/css/lightgallery.min.css">    
    
    <link rel="stylesheet" href="photon/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="photon/fonts/flaticon/font/flaticon.css">
    
    <link rel="stylesheet" href="photon/css/swiper.css">

    <link rel="stylesheet" href="photon/css/aos.css">

    <link rel="stylesheet" href="photon/css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">
    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    <header class="site-navbar py-3" role="banner">
      <div class="container-fluid">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2" data-aos="fade-down">
              <h1 class="mb-0"><a href="Principal.php" class="text-black h2 mb-0">SELECTSALV</a></h1>
          </div>
          <div class="col-10 col-md-8 d-none d-xl-block" data-aos="fade-down">
            <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">
                <?php require 'validar.php';?>
              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                  <li class="has-children">
                    <a>ACTA</a>
                    <ul class="dropdown">
                        <li><a href="Acta.php">NUEVA ACTA</a></li>
                    </ul>
                  </li>
                <li class="has-children">
                  <a>USUARIO</a>
                  <ul class="dropdown">
                    <li><a href="#">NUEVO USUARIO</a></li>
                    <li><a href="reporteUsuarios.php">MOSTRAR USUARIOS</a></li>
                  </ul>
                </li>
                <li class="has-children">
                    <a>GRAFICAS</a>
                    <ul class="dropdown">
                        <li><a href="Grafica.php">MOSTRAR GRAFICA</a></li>
                    </ul>
                </li>
                <li class="has-children">
                    <a>REPORTES</a>
                    <ul class="dropdown">
                        <li><a href="reporteCiudadano.php">REPORTE CIUDADANOS</a></li>
                        <li><a href="reporteUsuarios.php">REPORTE USUARIOS</a></li>
                  </ul>
                </li>
                <li><a href="Menu.php?c=cerrar">SALIR</a></li>
              </ul>
            </nav>
          </div>

          <div class="col-6 col-xl-2 text-right" data-aos="fade-down">
            <div class="d-none d-xl-inline-block">
              <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
                <li>
                  <a href="https://www.facebook.com/" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                </li>
                <li>
                  <a href="https://twitter.com/login?lang=es" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                </li>
                <li>
                  <a href="https://www.instagram.com/accounts/login/?hl=es-la" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                </li>
              </ul>
            </div>

            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>



  <div class="container-fluid" data-aos="fade" data-aos-delay="500">
    <div class="swiper-container images-carousel">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="image-wrap">
                <div class="image-info">
                </div>
                  <img src="photon/images/1.jpg" alt="Image">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="image-wrap">
                <div class="image-info">
                </div>
                  <img src="photon/images/2.png" alt="Image">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="image-wrap">
                <div class="image-info">
                </div>
                  <img src="photon/images/3.jpg" alt="Image">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="image-wrap">
                <div class="image-info">
                </div>
                  <img src="photon/images/4.jpg" alt="Image">
              </div>
            </div>
        </div>

        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-scrollbar"></div>
    </div>
  </div>

  <div class="footer py-4">
    <div class="container-fluid">
      <p>
      </p>
    </div>
  </div>

    

    
    
  </div>

    <script src="photon/js/jquery-3.3.1.min.js"></script>
    <script src="photon/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="photon/js/jquery-ui.js"></script>
    <script src="photon/js/popper.min.js"></script>
    <script src="photon/js/bootstrap.min.js"></script>
    <script src="photon/js/owl.carousel.min.js"></script>
    <script src="photon/js/jquery.stellar.min.js"></script>
    <script src="photon/js/jquery.countdown.min.js"></script>
    <script src="photon/js/jquery.magnific-popup.min.js"></script>
    <script src="photon/js/bootstrap-datepicker.min.js"></script>
    <script src="photon/js/swiper.min.js"></script>
    <script src="photon/js/aos.js"></script>
    <script src="photon/js/picturefill.min.js"></script>
    <script src="photon/js/lightgallery-all.min.js"></script>
    <script src="photon/js/jquery.mousewheel.min.js"></script>

    <script src="photon/js/main.js"></script>
  
  <script>
    $(document).ready(function(){
      $('#lightgallery').lightGallery();
    });
  </script>
    
  </body>
</html>