<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login - Administrador</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.3.0/css/all.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>



    <section id="hero">
        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
            </defs>
            <g class="wave1">
                <use xlink:href="#wave-path" x="30" y="3" fill="rgba(255,255,255, .1)">
            </g>
            <g class="wave2">
                <use xlink:href="#wave-path" x="30" y="0" fill="rgba(255,255,255, .2)">
            </g>
            <g class="wave3">
                <use xlink:href="#wave-path" x="30" y="9" fill="#fff">
            </g>
        </svg>

    </section>
    <!------------------------------FIN HERO-->


    <main id="main">
        <section>
            <div class="container mt-3">
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <div class="card" id="cartapasos">
                            <div class="card-body">
                                <h2 class="text-center">Date's Administración</h2>
                                <hr>
                                <form id="loginAdmin">
                                    <div class="mb-3 mt-3">
                                        <p>
                                            <label for="usuario">Usuario:</label>
                                        </p>
                                        <input type="text" class="form-control inputsM" id="usuario" placeholder="Ingrese su Usuario*" name="usuario">
                                    </div>

                                    <div class="mb-3">
                                    <p>
                                        <label for="pass">Contraseña:</label>
                                    </p>
                                        <input type="password" class="form-control inputsM" id="pass" placeholder="Ingrese su Contraseña*" name="pass">
                                    </div>
                                    <hr>
                                    <a href="./home.php">
                                        <center>
                                            <button type="button" class="btnmodificadoRegistro">Iniciar Sesión</button>
                                        </center>
                                    </a>
                                </form>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-3"></div>
                </div>
            </div>
            </div>

            </div>
        </section>
    </main><!-- End #main -->

    <footer id="footer">
        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>Date's Lab</span></strong>. Todos los derechos reservados
            </div>

        </div>
    </footer>

</body>

</html>