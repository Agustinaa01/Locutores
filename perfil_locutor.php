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

    <script src="https://cdn.tiny.cloud/1/kzsfc38d3u5dp7sjgvmf2hcx6fb977kroujv9cursql5m6ro/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
 
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
    <!-- Header Start -->
    <div class="header-area header-transparent">
      <div class="main-header">
        <div class="header-bottom header-sticky">
          <div class="container-fluid">
            <div class="row align-items-center">
              <!-- Logo -->
              <div class="col-xl-2 col-lg-2">
                <div class="logo">
                  <a href="locutor_index.html"
                    ><img src="assets/img/logo/logo.png" alt=""
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
                          <a
                            href="
                          locutor_index.html"
                            >Home</a
                          >
                        </li>
                        <li>
                          <a href="historial_locutor.html">Historial</a>
                        </li>
                        <li>
                          <a href="pagos.html">Pagos</a>
                        </li>
                        <li>
                          <a href="comentarios.html">Comentarios</a>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                        <li class="button-header">
                          <a href="perfil_locutor.html" class="btn btn3">Perfil</a>
                        </li>
                        <?php if ($email): ?>
                              <a onclick="cerrarSesion()" class="genric-btn primary-border circle">Cerrar sesión</a>
                          <?php else: ?>
                              <a href="https://hugoluis.com/locutores/login.html" class="genric-btn primary-border circle">Iniciar sesión</a>
                          <?php endif; ?>
                      </ul>
                    </nav>
                  </div>
                </div>
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
    <main>
      <!--? slider Area Start-->
      <section class="slider-area slider-area2">
        <div class="slider-active">
          <!-- Single Slider -->
          <div class="single-slider slider-height2">
            <div class="container">
              <div class="row">
                <div class="col-xl-8 col-lg-11 col-md-12">
                  <div class="hero__caption hero__caption2">
                    <h1 data-animation="bounceIn" data-delay="0.2s">Perfil</h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <!-- About Area End -->
      <!--? Team -->
      <section class="team-area section-padding40 fix">
        <div class="container">
            <div class="single-cat text-center">
              <div class="cat-icon">
                <img src="assets/img/gallery/team2.png" alt="" />
              </div>
              <div class="cat-cap" id="profile-info">
                <h1 id="nombre"></h1>                
                <div class="plan">
                <h2><i class="fas fa-calendar-check"></i> Plan: Premium</h2>
                <p> Inico: 00/00/000 </br> Fin: 00/00/0000</p>
              </div>
                <h3 id="email"><i class="fas fa-envelope"></i></h3>
                <h3 id="pais"><i class="fas fa-map-marker-alt"></i></h3>
                <h3 id="fecha_nac"><i class="fas fa-birthday-cake"></i></h3>
                <p id="idioma"><i class="fas fa-language"></i></p>
                <p id="genero"><i class="fas fa-venus-mars"></i></p>
                <p id="tono_voz"><i class="fas fa-microphone"></i></p>
                <p id="edad_de_voz"><i class="fas fa-microphone"></i></p>
                <p id="descripcion"><i class="fas fa-credit-card"></i></p></br>
                <h3><i class="fas fa-headphones"></i> Demos</h3>
                  <div id="demos"></div>
               <div id="profile-alert" style="display: none; margin-top: 20px; padding: 10px; background-color: #ffcccc; color: #cc0000; border-radius: 5px; margin-bottom: 10px;">
                      ¡Completa tu perfil para aprovechar al máximo nuestra plataforma y acceder a todas las funciones! Actualiza tus datos ahora.
                  </div>
                  <div id="mensaje"></div>
                </br>
                <a href="#" class="genric-btn primary-border circle" onclick=" cargarEdicionPerfilLocutor()">Editar</a>
                <a href="#" class="genric-btn primary-border circle" onclick="mostratForm()">Subir Demo</a>
              </div>
              <div id="edit-form" style="display: none;">
                <form role="form">
                    <div class="form-group" style="display: flex; flex-direction: column; align-items: flex-start; ">
                      <label for="edit_nombre" class="form-label">Nombre</label>
                        <input type="text" id="edit_nombre" class="single-input">
                    </div>
                    <div class="form-group" style="display: flex; flex-direction: column; align-items: flex-start; ">
                      <label for="edit_apellido" class="form-label">Apellido</label>
                        <input type="text" id="edit_apellido" class="single-input">
                    </div>
                    <div class="form-group" style="display: flex; flex-direction: column; align-items: flex-start; ">
                      <label for="edit_email" class="form-label">Email</label>
                        <input type="email" id="edit_email" class="single-input">
                    </div>
                    <div class="form-group" style="display: flex; flex-direction: column; align-items: flex-start; ">
                      <label for="edit_password" class="form-label">Contraseña</label>
                      <input id="edit_password" type="pais" class="single-input">
                    </div>
                    <div class="form-group" style="display: flex; flex-direction: column; align-items: flex-start; ">
                      <label for="edit_tono_voz" class="form-label">Tono de voz</label>
                      <input type="text" id="edit_tono_voz" 
                      class="single-input">
                  </div>
                  <div class="form-group" style="display: flex; flex-direction: column; align-items: flex-start; ">
                      <label for="edit_genero_voz" class="form-label">Genero de voz</label>
                    <input type="text" id="edit_genero_voz" class="single-input">
                </div>
                <div class="form-group" style="display: flex; flex-direction: column; align-items: flex-start; ">
                      <label for="edit_edad_voz" class="form-label">Edad de la voz</label>
                      <input type="text" id="edit_edad_voz"
                      class="single-input">
              </div>
                  <div class="form-group" style="display: flex; flex-direction: column; align-items: flex-start; ">
                      <label for="edit_idioma" class="form-label">Idioma</label>
                    <input type="text" id="edit_idioma"
                    class="single-input">
                </div>
                  <div class="form-group" style="display: flex; flex-direction: column; align-items: flex-start; margin-left: 20px;">
                    <label for="pais" style="font-size: 10px;">País</label>
                    <select name="pais" id="country" class="country"></select>
                  </div>
                  <div class="form-group" style="display: flex; flex-direction: column; align-items: flex-start; ">
                      <label for="edit_provincia" class="form-label">Provincia</label>
                      <input id="edit_provincia" type="pais" class="single-input">
                  </div>
                  <div class="form-group" style="display: flex; flex-direction: column; align-items: flex-start; ">
                      <label for="edit_ciudad" class="form-label">Ciudad</label>
                      <input id="edit_ciudad" type="pais" class="single-input">
                  </div>
                  <div class="form-group" style="display: flex; flex-direction: column; align-items: flex-start;">
                      <label for="edit_telefono" class="form-label">Telefono</label>
                      <input id="edit_telefono" type="text" class="single-input">
                  </div>
                <div class="input-group-icon mt-10">
                     <div class="form-group" style="display: flex; flex-direction: column; align-items: flex-start;">
                      <label for="edit_llego_web" class="form-label">Como llego a la web</label>
                        <select id="edit_llego_web" class="form-group" style="display: flex; flex-direction: column; align-items: flex-start; margin-left: 20px;">
                          <option value="">Seleccione una opcion</option>
                            <option value="Instagram">Instagram</option>
                            <option value="X">X</option>
                            <option value="TikTok">Tiktok</option>
                            <option value="Otra">Otra</option>
                        </select>
                    </div>
                </div>
                <div class="form-group" style="display: flex; flex-direction: column; align-items: flex-start;">
                  <label for="edit_fecha_nac" class="form-label">Fecha de nacimiento</label>
                    <input type="text" id="edit_fecha_nac" placeholder="Fecha de nacimiento"
                      onfocus="(this.type='date')" onblur="if (this.value=='') {this.type='text'}" required class="single-input">
                </div>
                <div class="input-group-icon mt-10">
                  <div class="form-group" style="display: flex; flex-direction: column; align-items: flex-start;">
                   <label for="edit_metodo_pago" class="form-label">Metodo de pago</label>
                  <select id="edit_metodo_pago" onchange="showPaymentDetails()" class="form-group" style="display: flex; flex-direction: column; align-items: flex-start; margin-left: 20px;">  
                    <label for="edit_fecha_nac" class="form-label">Metodo de pago</label>
                          <option value="-">Seleccione una opcion</option>
                          <option value="Paypal">Paypal</option>
                      </select>
                  </div>
              </div>
              
                <div class="form-group" style="display: flex; flex-direction: column; align-items: flex-start;">
                  <label for="edit_fecha_nac" class="form-label">Descripcion</label>
                  <textarea id="edit_descripcion"
                      type="text"
                      class="single-input">
                  </textarea>
                  <script>
                    tinymce.init({
                        selector: '#mytextarea'
                    });
                </script>
              </div>
                  <div id="message-container" style="display: none;" class="      form-message-container">
                  </div>

                  <div id="success-message" style="display: none;" class="form-success-message">
                      ¡Por favor, complete todos los datos!
                  </div>
                  <a href="perfil_locutor.php" class="genric-btn primary-border circle">Cancelar</a>
                  <a onclick="editar_guardar_locutor()" class="genric-btn primary-border circle">Guardar</a>
                </form>
              </div>
            </div>
          </div>
          
          <script>
          function editProfile() {
            document.getElementById('profile-info').style.display = 'none';
            document.getElementById('edit-form').style.display = 'block';
          }
          </script>
          <div id="loading" style="display: none;">
              <p>Cargando...</p>
          </div>
          <div id="demo-success-message" style="display: none;">
              <p>Demo cargada correctamente.</p>
          </div>
          <div id="error-message" style="display: none;">
              <p>Debes seleccionar un archivo de audio.</p>
          </div>
          <div id="subirDemo" style="display: none;">
            <form>
                <div class="mt-10" style="text-align: left;">
                    <p class="form-title">Subir demos</p>
                    <div class="form-group" style="display: flex; flex-direction: column; align-items: flex-start;">
                      <label class="form-label">Titulo</label>
                      <input id="title" type="text" class="single-input">
                  </div>
                    <input type="file" class="form-audio" id="audio-upload" name="audio-upload" accept="audio/*">
                </div></br>
                <div style="text-align: center;">
                    <a href="#" class="genric-btn primary-border circle">Cancelar</a>
                </div>
                <div style="text-align: center;">
                    <a onclick="subirDemo()"  class="genric-btn primary-border circle">Guardar</a>
                </div>
            </form>
          </div>
          <script>
            function mostratForm() {
                document.getElementById('profile-info').style.display = 'none';
                document.getElementById('subirDemo').style.display = 'block';
            }
          </script>

      </section>
      <!-- Services End -->
    </main>
    <footer>
      <div class="footer-wrappper footer-bg">
        <!-- Footer Start-->
        <div class="footer-area footer-padding">
          <div class="container">
            <div class="row justify-content-between">
              <div class="col-xl-4 col-lg-5 col-md-4 col-sm-6">
                <div class="single-footer-caption mb-50">
                  <div class="single-footer-caption mb-30">
                    <!-- logo -->
                    <div class="footer-logo mb-25">
                      <a href="locutor_index.html"
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
    <script src="./assets/js/perfil_locutor.js"></script>
    <script src="./assets/js/edit_perfil_locutor.js"></script>
    <script src="./assets/js/cargarPaises.js"></script>
    <script src="./assets/js/subirDemo.js"></script>
    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
  </body>
</html>
