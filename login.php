<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Date's Lab-Login</title>
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
    $_SESSION['nav'] = basename(__FILE__, ".php");
    include_once('./nav.php');
    require('modals.php');
    ?>
    <!------------------------------HERO-->
    <section id="hero">

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

        <section>
            <div class="container mt-3">
                <div class="section-title" data-aos="fade-up">
                    <h2>Plataforma</h2>
                    <p>Login</p>
                </div>
                <div class="card" id="cartapasos">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-lg-6" data-aos="fade-up" style="text-align:center;">
                                <img src="assets/img/LogoFooter.svg" class="img-fluid" alt="">
                            </div>

                            <div class="col-lg-6" data-aos="fade-up" style="margin-top: 55px;">

                                <h3 class="mb-2">Inicio Sesión</h3> 
                                <p style="color: #78A0FF;">Hola de nuevo! Es un placer tenerte aquí.</p>
                            
                                <div class="form-group mb-3">
                                    <h4>Usuario</h4>
                                    <input type="text" class="form-control inputsM" placeholder="Ingrese su Usuario" />
                                </div>

                                <div class="form-group mb-3">
                                    <h4>Contraseña</h4>
                                    <input type="text" class="form-control inputsM" placeholder="Ingrese su Contraseña" />
                                </div>

                                <div class="form-group mb-3">
                                    <button type="button" id="btnlogin" class="form-control btnmodificadoRegistro">Ingresar <i class="fa-solid fa-right-to-bracket"></i></button>
                                </div>

                                <hr>

                                <div class="d-flex justify-content-between">
                                <a data-bs-toggle="modal" class="aper2" data-bs-target="#recuperaContra" style="text-align:left"> Olvidó su contraseña?</a>
                                <a data-bs-toggle="modal" data-bs-target="#registroNuevo" class="aper">Registrese Aquí</a>

                                </div>
          
                            </div>



                        </div>

                    </div>
                </div>
            </div>
        </section>


    </main><!-- End #main -->

    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Date's Lab</h3>
                        <p>
                            Desarrollado por <a href="https://cuc.ac.cr.com/">TI-162 G3</a>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Enlaces Útiles</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Inicio</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="acerca.php">Sobre Nosotros</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="login.php">Iniciar Sesión</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="contacto.php">Contacto</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Nuestros Servicios</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a data-bs-toggle="modal" data-bs-target="#registroNuevo">Registrarse</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="index.php#informacion">Información</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="index.php#testimonios">Testimonios</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Nuestras Redes Sociales</h4>
                        <p>Próximamente</p>
                        <div class="social-links mt-3">
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>Date's Lab</span></strong>. Todos los derechos reservados
            </div>

        </div>
    </footer>

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