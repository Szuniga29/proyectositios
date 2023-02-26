<header class="pb-3 mb-2">
    <span class="fs-4">Dashboard</span>
</header>

<div class="row g-0">
    <div class="col-lg-6 col-xl-7 col-xxl-8 mb-3 pe-lg-2">
        <div class="card border-dark h-lg-100">
            <div class="card-body position-relative">
                <h3><i class="fa-regular fa-calendar-day"></i> Resumen del día</h3><br>

                <h4>345<br>Interacciones</h4><br>

                <div class="d-flex justify-content-between">
                    <div>
                        <h6>Matchs</h6>
                    </div>
                    <div>
                        <h6>75 <i class="fa-regular fa-circle-check"></i></h6>
                    </div>
                </div>
                <hr>

                <div class="d-flex justify-content-between">
                    <div>
                        <h6>Likes</h6>
                    </div>
                    <div>
                        <h6>100 <i class="fa-regular fa-circle-check"></i></h6>
                    </div>
                </div>
                <hr>

                <div class="d-flex justify-content-between">
                    <div>
                        <h6>Suspiros</h6>
                    </div>
                    <div>
                        <h6>80 <i class="fa-regular fa-circle-check"></i></h6>
                    </div>
                </div>
                <hr>

                <div class="d-flex justify-content-between">
                    <div>
                        <h6>Usuarios Nuevos</h6>
                    </div>
                    <div>
                        <h6>98 <i class="fa-regular fa-circle-check"></i></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-xl-5 col-xxl-4 mb-3 ps-lg-2">
        <div class="card border-dark h-lg-100">
            <div class="card-body position-relative">
                <h3><i class="fa-regular fa-signal-stream"></i> Ancho de banda</h3><br>
                <div class="row">
                    <div class="col-sm-10"><canvas id="graficoAnchoBanda"></canvas></div>
                    <div class="col-sm-2 mt-3">
                        <h6 class="mt-3">Mes<br> Actual</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row g-0">
    <div class="col-lg-6 col-xl-7 col-xxl-8 mb-3 pe-lg-2">
        <div class="card border-dark h-lg-100">
            <div class="card-body position-relative">
                <h3><i class="fa-regular fa-chart-pie"></i> Reportes</h3><br>
                <div class="row">
                    <div class="col-sm-8">
                        <canvas id="graficoReportes" style="width:100%; max-width: 600px; height:100%;"></canvas><br>
                    </div>
                    <div class="col-sm-4 mt-3">
                        <h5><i class="fa-solid fa-heart" style="color: #0185B9;"></i> Likes</h5>
                        <h5><i class="fa-solid fa-fire" style="color: #8303C0;"></i> Suspiros</h5><br>

                        <h6 class="mt-3"><i class="fa-solid fa-user-magnifying-glass"></i>2000 Busquedas de perfiles</h6>
                        <h6><i class="fa-solid fa-user"></i> 850 Usuarios Activos</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-xl-5 col-xxl-4 mb-3 ps-lg-2">
        <div class="card border-dark h-lg-100">
            <div class="card-body position-relative">
                <h3><i class="fa-regular fa-earth-americas"></i> Visitantes</h3><br>

                <h4 class="small font-weight-bold">Estados Unidos <span class="float-right">80%</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h4 class="small font-weight-bold">Latinoamérica <span class="float-right">60%</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h4 class="small font-weight-bold">Europa <span class="float-right">40%</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>

        </div>
    </div>
</div>