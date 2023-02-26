<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link">Date´s Lab Administrador</a>
            </li>
        </ul>

        <div class="text-center">
            <form class="d-flex">
                <input class="form-control me-2" type="text" style="background: #E1E1E1; color: #000;" placeholder="Buscar recursos..">
                <button class="btn btn-dark" type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>

        <div class="d-flex flex-row-reverse bd-highlight">
            <div class="p-2 bd-highlight">
                <div class="dropdown">
                    <button class="btn btn-dark" type="button"><i class="fa-regular fa-pencil"></i></button>
                    <button class="btn btn-dark" type="button"><i class="fa-solid fa-bell"></i></button>
                    <button class="btn btn-dark" type="button" id="drop" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-user"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="drop">
                        <li><a class="dropdown-item" href="#">Perfil</a></li>
                        <li><a class="dropdown-item" href="#">Salir</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>