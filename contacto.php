<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Date's Lab-Contacto</title>
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
                <use xlink:href="#wave-path" x="50" y="9" fill="#f5f5ff">
            </g>
        </svg>

    </section>
    <!------------------------------FIN HERO-->



    <main id="main">
        <section id="contact" class="contact section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Contacto</h2>
                    <p>Contáctanos</p>
                </div>


                <div class="row content">
                    <div class="col-md-6" data-aos="fade-right">
                        <img src="assets/img/Contacto.svg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6 pt-5" data-aos="fade-up">
                        <h2 id="titulosopen">Explora el futuro con nosotros.
                            Siéntete libre de mantenerte en contacto.</h2>
                        <br>
                        <div class="col-12">
                            <div class="form-group mb-3">
                                <h4>Nombre</h4>
                                <input type="text" class="form-control inputsM" placeholder="Nombre Completo" />
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group mb-3">
                                <h4>E-Mail</h4>
                                <input type="text" class="form-control inputsM" placeholder="Correo electrónico @" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group mb-3">
                                <h4>Mensaje</h4>
                                <input type="text" class="form-control inputsM" placeholder="¿Cómo podemos mejorar?" />
                            </div>
                        </div>
                        <hr>
                        <center>
                            <button class="btnmodificadoRegistro">Enviar Mensaje</button>
                        </center>
                    </div>
                </div>


            </div>
        </section>

    </main><!-- End #main -->


    <?php
    require('footer.php')
    ?>

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