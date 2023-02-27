<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Date's Lab-Contacto</title>
    <?php
        require('assets/custom/links.php');
    ?>
</head>

<body>

    <?php
    $_SESSION['nav'] = basename(__FILE__, ".php");
    include_once('./assets/custom/nav.php');
    require('assets/custom/modals.php');
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
                        <form id="formInfo">
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <h4>Nombre</h4>
                                    <input type="text" id="nombreC" class="form-control inputsM" placeholder="Nombre Completo" />
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <h4>E-Mail</h4>
                                    <input type="text" id="correoC" class="form-control inputsM" placeholder="Correo electrónico @" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <h4>Mensaje</h4>
                                    <input type="text" id="mensajeC" class="form-control inputsM" placeholder="¿Cómo podemos mejorar?" />
                                </div>
                            </div>
                            <hr>
                            <center>
                                <button class="btnmodificadoRegistro" id="btnEnviaCorreo">Enviar Mensaje</button>
                            </center>
                        </form>
                    </div>
                </div>


            </div>
        </section>

    </main>


    <?php
        require('assets/custom/footer.php')
    ?>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>

    <?php
        require('assets/custom/js.php')
    ?>
</body>

</html>