<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Date's Lab-Inicio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css" />

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <?php
    require('nav.php')  
  ?> 

  <!------------------------------HERO-->
  <section id="hero">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1><span>La mejor manera para encontrar a tu pareja</span></h1>
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto">Registrarse</a>

              <a href="#about" class="btn-get-started">¿Cómo funciona?</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="assets/img/DateLab.svg" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section>
  <!------------------------------FIN HERO-->

  <main id="main">

    <!------------------------------INFORMACIÓN EMPRESA-->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
            <!-- <a href="https://www.youtube.com/watch?v=StpBR2W8G5A" class="glightbox play-btn mb-4"></a> -->
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
            <h3>Presentámos una solución revolucionaria</h3>
            <p>Únete hoy a nuestra comunidad y experimenta los beneficios.</p>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon"><i class="fa-duotone fa-timer"></i></div>
              <h4 class="title"><a href="">Chats Volátiles</a></h4>
              <p class="description">Envía y recibe mensajes durante 30 minutos sin preocupación de que haya historial.</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon"><i class="fa-duotone fa-camera-web"></i></div>
              <h4 class="title"><a href="">Video LLamadas</a></h4>
              <p class="description">Anímate a dar un paso más e interactua con la persona que hablas.</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon"><i class="fa-duotone fa-eye-slash"></i></div>
              <h4 class="title"><a href="">Modo incógnito</a></h4>
              <p class="description">Da likes y suspiros a los demás sin que se enteren quién eres.</p>
            </div>

          </div>
        </div>
      </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">

      <div class="container">
        <div class="row" data-aos="fade-up">
          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="fa-solid fa-users"></i>
              <span data-purecounter-start="0" data-purecounter-end="4732" data-purecounter-duration="1" class="purecounter"></span>
              <p>Usuarios</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="fa-solid fa-heart"></i>
              <span data-purecounter-start="0" data-purecounter-end="11289" data-purecounter-duration="1" class="purecounter"></span>
              <p>Likes</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fa-regular fa-calendar-heart"></i>
              <span data-purecounter-start="0" data-purecounter-end="5223" data-purecounter-duration="1" class="purecounter"></span>
              <p>Citas</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fa-solid fa-fire-flame-curved"></i>
              <span data-purecounter-start="0" data-purecounter-end="9890" data-purecounter-duration="1" class="purecounter"></span>
              <p>Suspiros</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Details Section ======= -->
    <section id="details" class="details">
      <div class="container">

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="assets/img/Img01.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-4" data-aos="fade-up">
            <h3>Relaciones de éxito que empiezan por internet</h3>
            <p>
              Las relaciones sólidas constuidas por intermedio de Match empiezan por las afinidades en comun que las parejas descubren mientras navegan por el sitio.
            </p>
            <p>
              Aquí es el comienzo de todo y por eso, surgen más de 6 mil relatos por año de relaciones exitosas.
            </p>
            <button id="btnmodificadoInfo">Probrar Ahora</button>
          </div>

        </div>

        <div class="row content">
          <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="assets/img/Img02.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3>Tecnología y interactividad reunen miles de solteros</h3>
            <p>
              Uno de los diferenciales de Match es la cantidad de personas y de oportunidades que ofrece. Son millones de personas cadastradas disponibles para un compromiso serio.
            </p>
            <p>
              Por eso, somos capaces de concilar tus necesidades con nuestras herramientas de búsqueda para que sea posible encontrar perfiles que sean compatibles con el tuyo.
            </p>
            <button id="btnmodificadoInfo">Probrar Ahora</button>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="assets/img/Matchs.gif" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5" data-aos="fade-up">
            <h3>¡Match es líder en Citas!</h3>
            <p>
              Match existe para juntar las personas que están solteros y que desean una relacion seria. Nuestro servicio ayuda en la búsqueda por aquella persona que va a hacer parte de los momentos más importantes de tu vida.
            </p>
            <button id="btnmodificadoInfo">Probrar Ahora</button>
          </div>
        </div>
      </div>
    </section><!-- End Details Section -->


    <section class="section-bg">
      <div class="container mt-3">
        <div class="row">
          <div class="card" id="cartapasos">
            <div class="card-body">
              <div class="row">
                <div class="col-6-sm">
                  <div class="section-title" data-aos="fade-up">
                    <p>¿Cómo unirse a nuestra comunidad?</p>
                    <h5>Solo 3 sencillos pasos para encontrar a tu amor.</h5>
                    <button id="btnmodificadoRegistro" href="#team">Registrarse Ahora</button>
                  </div>

                </div>
                <div class="col-6-sm">
                  <h2>Paso <i class="fa-solid fa-circle-1"></i></h2>
                  <p>Crear una cuenta dentro de la aplicación.</p>
                  <hr>
                  <h2>Paso <i class="fa-solid fa-circle-2"></i></h2>
                  <p>Completar los datos solicitados para agregar al perfil.</p>
                  <hr>
                  <h2>Paso <i class="fa-solid fa-circle-3"></i></h2>
                  <p>Listo! Comience la busqueda de personas.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">
        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/Img01.jpg" class="testimonial-img" alt="">
                <h3>Pedro Martínez</h3>
                <h4>Usuario Frecuente</h4>
                <p>
                  "En la aplicación pude indicar lo que buscaba, gracias a eso hoy encontré a mi pareja"
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/Img03.jpg" class="testimonial-img" alt="">
                <h3>Sara Lopez</h3>
                <h4>Usuario Frecuente</h4>
                <p>
                  "Gracias a la aplicación encontré a la persona indicada"
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/Img04.jpg" class="testimonial-img" alt="">
                <h3>Oscar Álvarez</h3>
                <h4>Usuario Frecuente</h4>
                <p>
                  "Gracias a las pruebas de personalidad encontré personas con mi caracter parecido."
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->



 
    <section>
      <div class="container mt-3">

        <div class="card" id="cartapasos">
          <div class="card-body">

            <div class="row content justify-content-center">
              <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
                <img src="assets/img/LogoBlanco.svg" class="img-fluid" alt="">
              </div>


              <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-up">
                <br>
                <br>
                <br>
                <h1>Comience con Date's Lab hoy</h1>
                <h3 id="titulosopen">
                  Haz química con la persona que elijas.
                </h3>
                <br>
                <button id="btnmodificadoRegistro" href="#team">Registrarse</button>
              </div>

            </div>

          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>Bootslander</h3>
              <p class="pb-3"><em>Qui repudiandae et eum dolores alias sed ea. Qui suscipit veniam excepturi quod.</em></p>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Bootslander</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>