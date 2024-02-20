<?php
session_start();
$email = '';
if(isset($_SESSION['email'])) { 
    $email = $_SESSION['email'];
}
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Courses | Education</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="manifest" href="site.webmanifest" />
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="assets/img/favicon.ico"
    />

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/slicknav.css" />
    <link rel="stylesheet" href="assets/css/flaticon.css" />
    <link rel="stylesheet" href="assets/css/progressbar_barfiller.css" />
    <link rel="stylesheet" href="assets/css/gijgo.css" />
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <link rel="stylesheet" href="assets/css/animated-headline.css" />
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css" />
    <link rel="stylesheet" href="assets/css/themify-icons.css" />
    <link rel="stylesheet" href="assets/css/slick.css" />
    <link rel="stylesheet" href="assets/css/nice-select.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>

  <body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
      <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
          <div class="preloader-circle"></div>
          <div class="preloader-img pere-text">
            <img src="assets/img/logo/loder.png" alt="" />
          </div>
        </div>
      </div>
    </div>
    <!-- Preloader Start -->
    <header>
      <!-- Header Start -->
      <div class="header-area header-transparent">
        <div class="main-header">
          <div class="header-bottom header-sticky">
            <div class="container-fluid">
              <div class="row align-items-center">
                <!-- Logo -->
                <div class="col-xl-2 col-lg-2">
                  <div class="logo">
                    <a href="cliente_index.html"
                      ><img  class="logo" src="assets/img/logo/ondas.png" alt=""
                    /></a>
                  </div>
                </div>
                <div class="col-xl-10 col-lg-10">
                  <div
                    class="menu-wrapper d-flex align-items-center justify-content-end"
                  >
                    <!-- Main-menu -->
<div class="main-menu d-none d-lg-block">
  <nav>
    <ul id="navigation">
      <li class="active">
        <a href="cliente_index.html">Home</a>
      </li>
      <li><a href="publicaciones.html">Publicaciones</a></li>
            <li><a href="about.html">Perfil</a></li>
      <li><a href="contact.html">Contact</a></li>

      <?php if ($email): ?>
        <li class="button-header">
          <a href="#"  class="btn btn3" onclick="cerrarSesion()">Cerrar sesión</a>
        </li>
      <?php else: ?>
        <li class="button-header">
          <a href="https://hugoluis.com/locutores/login.html" class="btn btn3">Iniciar sesión</a>
        </li>
      <?php endif; ?>
    </ul>
  </nav>
</div>

                <!-- Mobile Menu -->
                <div class="col-12">
                  <div class="mobile_menu d-block d-lg-none"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Header End -->
    </header>
    <main>
      <!--? slider Area Start-->
      <section class="slider-area">
        <div class="slider-active">
          <!-- Single Slider -->
          <div class="single-slider slider-height d-flex align-items-center">
            <div class="container">
              <div class="row">
                <div class="col-xl-6 col-lg-7 col-md-12">
                  <div class="hero__caption">
                    <h1 data-animation="fadeInLeft" data-delay="0.2s">
                      Publica tu proyecto<br />
                    </h1>
                    <p data-animation="fadeInLeft" data-delay="0.4s">
                      ¡Sube tu trabajo y llamaremos a los mejores para una
                      prueba! ¡En nada, tendrás respuestas y precios!
                    </p>
                    <a
                      href="proyecto.html"
                      class="btn hero-btn"
                      data-animation="fadeInLeft"
                      data-delay="0.7s"
                      >Publica tu proyecto</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ? services-area -->
      <div class="services-area">
        <div class="container">
          <div class="row justify-content-sm-center">
            <div class="col-lg-4 col-md-6 col-sm-8">
              <div class="single-services mb-30">
                <div class="features-icon">
                  <img src="assets/img/icon/icon1.png" alt="" />
                </div>
                <div class="features-caption">
                  <h3>Amplia visibilidad</h3>
                  <p>
                    Tu proyecto será visible para una gran cantidad de locutores
                    profesionales.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
              <div class="single-services mb-30">
                <div class="features-icon">
                  <img src="assets/img/icon/icon2.png" alt="" />
                </div>
                <div class="features-caption">
                  <h3>Control de precios</h3>
                  <p>
                    Tienes la libertad de aceptar la oferta que mejor se ajuste
                    a tu presupuesto.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
              <div class="single-services mb-30">
                <div class="features-icon">
                  <img src="assets/img/icon/icon3.svg" alt="" />
                </div>
                <div class="features-caption">
                  <h3>Proceso sencillo</h3>
                  <p>
                    Publicar tu proyecto y recibir ofertas es un proceso rápido
                    y sin complicaciones.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Courses area start -->
      <div class="courses-area section-padding40 fix">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8">
              <div class="section-tittle text-center mb-55">
                <h2>Locutores</h2>
              </div>
            </div>
          </div>
          <div class="courses-actives">
            <!-- Single -->
            <div class="properties pb-20">
              <div class="properties__card">
                <div class="properties__img overlay1">
                  <a href="#"
                    ><img src="assets/img/gallery/featured1.jpg" alt=""
                  /></a>
                </div>
                <div class="properties__caption">
                  <h3>
                    <a href="#">Locutor 1</a>
                  </h3>
                  <p>
                    The automated process all your website tasks. Discover tools
                    and techniques to engage effectively with vulnerable
                    children and young people.
                  </p>
                  <div
                    class="properties__footer d-flex justify-content-between align-items-center"
                  >
                    <div class="restaurant-name">
                      <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                      </div>
                    </div>
                  </div>
                  <a href="details_locutores.html" class="border-btn border-btn2">Ver Más</a>
                </div>
              </div>
            </div>
            <!-- Single -->
            <!-- Single -->
            <div class="properties pb-20">
              <div class="properties__card">
                <div class="properties__img overlay1">
                  <a href="#"
                    ><img src="assets/img/gallery/featured2.jpg" alt=""
                  /></a>
                </div>
                <div class="properties__caption">
                  <h3>
                    <a href="#">Locutor 2</a>
                  </h3>
                  <p>
                    The automated process all your website tasks. Discover tools
                    and techniques to engage effectively with vulnerable
                    children and young people.
                  </p>
                  <div
                    class="properties__footer d-flex justify-content-between align-items-center"
                  >
                    <div class="restaurant-name">
                      <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                      </div>
                    </div>
                  </div>
                  <a href="details_locutores.html" class="border-btn border-btn2">Ver Más</a>
                </div>
              </div>
            </div>
            <!-- Single -->
            <!-- Single -->
            <div class="properties pb-20">
              <div class="properties__card">
                <div class="properties__img overlay1">
                  <a href="#"
                    ><img src="assets/img/gallery/featured3.jpg" alt=""
                  /></a>
                </div>
                <div class="properties__caption">
                  <h3>
                    <a href="#">Locutor 3</a>
                  </h3>
                  <p>
                    The automated process all your website tasks. Discover tools
                    and techniques to engage effectively with vulnerable
                    children and young people.
                  </p>
                  <div
                    class="properties__footer d-flex justify-content-between align-items-center"
                  >
                    <div class="restaurant-name">
                      <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                      </div>
                    </div>
                    <div class="price"></div>
                  </div>
                  <a href="details_locutores.html" class="border-btn border-btn2">Ver Más</a>
                </div>
              </div>
            </div>
            <!-- Single -->
            <!-- Single -->
            <div class="properties pb-20">
              <div class="properties__card">
                <div class="properties__img overlay1">
                  <a href="#"
                    ><img src="assets/img/gallery/featured2.jpg" alt=""
                  /></a>
                </div>
                <div class="properties__caption">
                  <h3>
                    <a href="#">Locutor 4</a>
                  </h3>
                  <p>
                    The automated process all your website tasks. Discover tools
                    and techniques to engage effectively with vulnerable
                    children and young people.
                  </p>
                  <div
                    class="properties__footer d-flex justify-content-between align-items-center"
                  >
                    <div class="restaurant-name">
                      <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                      </div>
                    </div>
                    <div class="price"></div>
                  </div>
                  <a href="details_locutores.html" class="border-btn border-btn2">Ver Más</a>
                </div>
              </div>
            </div>
            <!-- Single -->
          </div>
        </div>
      </div>

        <div class="footer-area footer-padding">
          <div class="container">
            <div class="row justify-content-between">
              <div class="col-xl-4 col-lg-5 col-md-4 col-sm-6">
                <div class="single-footer-caption mb-50">
                  <div class="single-footer-caption mb-30">
                    <!-- logo -->
                    <div class="footer-logo mb-25">
                      <a href="cliente_index.html"
                        ><img src="assets/img/logo/logo2_footer.png" alt=""
                      /></a>
                    </div>
                    <div class="footer-tittle">
                      <div class="footer-pera">
                        <p>
                          The automated process starts as soon as your clothes
                          go into the machine.
                        </p>
                      </div>
                    </div>
                    <!-- social -->
                    <div class="footer-social">
                      <a href="#"><i class="fab fa-twitter"></i></a>
                      <a href="https://bit.ly/sai4ull"
                        ><i class="fab fa-facebook-f"></i
                      ></a>
                      <a href="#"><i class="fab fa-pinterest-p"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-2 col-lg-3 col-md-4 col-sm-5">
                <div class="single-footer-caption mb-50">
                  <div class="footer-tittle">
                    <h4>Our solutions</h4>
                    <ul>
                      <li><a href="#">Design & creatives</a></li>
                      <li><a href="#">Telecommunication</a></li>
                      <li><a href="#">Restaurant</a></li>
                      <li><a href="#">Programing</a></li>
                      <li><a href="#">Architecture</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6">
                <div class="single-footer-caption mb-50">
                  <div class="footer-tittle">
                    <h4>Support</h4>
                    <ul>
                      <li><a href="#">Design & creatives</a></li>
                      <li><a href="#">Telecommunication</a></li>
                      <li><a href="#">Restaurant</a></li>
                      <li><a href="#">Programing</a></li>
                      <li><a href="#">Architecture</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                <div class="single-footer-caption mb-50">
                  <div class="footer-tittle">
                    <h4>Company</h4>
                    <ul>
                      <li><a href="#">Design & creatives</a></li>
                      <li><a href="#">Telecommunication</a></li>
                      <li><a href="#">Restaurant</a></li>
                      <li><a href="#">Programing</a></li>
                      <li><a href="#">Architecture</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area">
          <div class="container">
            <div class="footer-border">
              <div class="row d-flex align-items-center">
                <div class="col-xl-12">
                  <div class="footer-copy-right text-center">
                    <p>
                      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                      Copyright &copy;
                      <script>
                        document.write(new Date().getFullYear());
                      </script>
                      All rights reserved | This template is made with
                      <i class="fa fa-heart" aria-hidden="true"></i> by
                      <a href="https://colorlib.com" target="_blank"
                        >Colorlib</a
                      >
                      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Footer End-->
      </div>
    </footer>
    <!-- Scroll Up -->
    <div id="back-top">
      <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->
    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    <!-- Progress -->
    <script src="./assets/js/jquery.barfiller.js"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    <script src="./assets/js/jquery.countdown.min.js"></script>
    <script src="./assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="./assets/js/logOut.js"></script>
    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
  </body>
</html>
