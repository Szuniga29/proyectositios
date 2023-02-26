<div class="container-fluid">
    <div class="row">
        <div class="col-sm-auto bg-light sticky-top">
            <div class="d-flex flex-sm-column flex-row flex-nowrap bg-light align-items-center sticky-top">
                <ul class="nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap mb-auto mx-auto text-center align-items-center">
                    <li class="nav-item">
                        <a href="./home.php" class="nav-link py-3 px-2" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Home">
                            <i class="fa-solid fa-house"></i>
                        </a>
                    </li>
                    <li>
                        <a href="./mail.php" class="nav-link py-3 px-2" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Mails">
                            <i class="fa-solid fa-envelope"></i>
                        </a>
                    </li>
                    <li>
                        <a href="./settings.php" class="nav-link py-3 px-2" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Settings">
                            <i class="fa-solid fa-gear"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-sm p-3 min-vh-100">
            <?php if($_SESSION['contenido']=='Home'){
                require('./contentHome.php'); 
            }elseif($_SESSION['contenido']=='Mail'){
                require('./contentMail.php'); 
            }elseif($_SESSION['contenido']=='Settings'){
                require('./contentSettings.php'); 
            } ?>
        </div>
    </div>
</div>