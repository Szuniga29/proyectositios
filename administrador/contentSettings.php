<div class="row g-0">
<div class="col-lg-6 col-md-7 col-sm-4 mb-3 pe-lg-3">
        <div class="card border-dark h-lg-100">
            <div class="card-body position-relative">
                <h3><i class="fa-regular fa-user-pen"></i> Ajustes de Usuario</h3>
                <p class="mt-3">Configuración general sobre el usuario</p>
                <hr>

                <h5 class="mt-3">Información Personal</h5>
                <div class="row">
                    <div class="d-flex justify-content-between">
                        <div class="mb-3 mt-3">
                            <label for="nameA">Nombre:</label>
                            <input type="text" class="form-control border-dark" style="width: 95%;" id="nameA" placeholder="Juan" name="nameA">
                        </div>

                        <div class="mb-3 mt-3">
                            <label for="userA">Usuario:</label>
                            <input type="text" class="form-control border-dark" id="userA" disabled placeholder="Juan52342" name="userA">
                        </div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <div class="mb-3">
                            <label for="passA">Contraseña:</label>
                            <input type="text" class="form-control border-dark" id="passA" style="width: 95%;" placeholder="*********" name="passA">
                        </div>

                        <div class="mb-3">
                            <label for="mailA">Correo:</label>
                            <input type="text" class="form-control border-dark" id="mailA" placeholder="Juan52@mail.com" name="mailA">
                        </div>
                    </div>
                </div>
                <hr>

                <h5 class="mt-3">Notificaciones</h5>
                <div class="row">
                    <div class="d-flex justify-content-between mt-3">
                        <div>
                            <h6>Reportes Semanales</h6>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="" name="" checked>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between mt-3">
                        <div>
                            <h6>Reportes de Usuarios</h6>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="" name="" checked>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between mt-3">
                        <div>
                            <h6>Reportes de Copias de Seguridad</h6>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="" name="" checked>
                        </div>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div>
                        <button type="submit" class="btnmodificadoRegistro">Guardar</button>
                        <button type="submit" class="btnmodificadoRegistro">Cancelar</button>
                    </div>
                </div>
                <hr>

                <h5 class="mt-3">Zona de peligro</h5>
                <div class="row">
                    <div class="mt-3">
                        <button type="submit" class="btnmodificadoRegistro">Eliminar Cuenta</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-7 col-sm-4 mb-3 pe-lg-3">
        <div class="card border-dark h-lg-100">
            <div class="card-body position-relative">
                <h3><i class="fa-regular fa-server"></i> Ajustes del Servidor</h3>
                <p class="mt-3">Configuración general del servidor</p>
                <hr>

                <h5 class="mt-3">Seguridad</h5>
                <div class="row mt-3">
                    <div class="d-flex justify-content-between mt-3">
                        <div>
                            <h6>Comprobaciones de seguridad al iniciar</h6>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="" name="" checked>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between mt-3">
                        <div>
                            <h6>Rotar claves privadas cada mes</h6>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="" name="">
                        </div>
                    </div>

                    <div class="d-flex justify-content-between mt-3">
                        <div>
                            <h6>Cerrar automáticamente las cuentas inactivas</h6>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="" name="">
                        </div>
                    </div>

                    <div class="d-flex justify-content-between mt-3">
                        <div>
                            <h6>Hacer cumplir la autenticación de dos factores</h6>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="" name="" checked>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between mt-3">
                        <div>
                            <h6>Actualizar dependencias automáticamente</h6>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="" name="" checked>
                        </div>
                    </div>
                </div>
                <hr>

                <h5 class="mt-3">Seguridad en las contraseñas</h5>
                <div class="row mt-3">
                    <div class="mt-3">
                        <input type="range" class="form-range" id="" name="">
                    </div>

                    <div class="d-flex justify-content-between mt-3">
                        <div>
                            <h6>Baja</h6>
                        </div>
                        <div class="form-check">
                            <h6>Alta</h6>
                        </div>
                    </div>
                </div>
                <hr>

                <h5 class="mt-3">Copias de seguridad</h5>
                <div class="row mt-3">
                    <div class="d-flex justify-content-between mt-3">
                        <div>
                            <h6>Almacenar en diferentes regiones</h6>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="" name="" checked>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between mt-3">
                        <div>
                            <h6>Crear duplicados en la misma región</h6>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="" name="">
                        </div>
                    </div>

                    <div class="d-flex justify-content-between mt-3">
                        <div>
                            <h6>Copias de seguridad blandas en instancias</h6>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="" name="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row g-0">
<div class="col-lg-6 col-md-7 col-sm-4 mb-3 pe-lg-3">
        <div class="card border-dark h-lg-100">
            <div class="card-body position-relative">
                <h3><i class="fa-regular fa-users-gear"></i> Cuentas Administradoras</h3>
                <p class="mt-3">Configuración general de cuentas administradoras</p>
                <hr>

                <h5 class="mt-3">Crear cuenta Administradora</h5>
                <form id="settingsMail">
                    <div class="row">
                        <div class="d-flex justify-content-between">
                            <div class="mb-3 mt-3">
                                <label for="nameNA">Nombre:</label>
                                <input type="text" class="form-control border-dark" style="width: 95%;" id="nameNA" placeholder="Oscar" name="nameNA">
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="userNA">Usuario:</label>
                                <input type="text" class="form-control border-dark" id="userNA" placeholder="Oscar02231" name="userNA">
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <div class="mb-3">
                                <label for="passNA">Contraseña:</label>
                                <input type="text" class="form-control border-dark" style="width: 95%;" id="passNA" placeholder="*********" name="passNA">
                            </div>

                            <div class="mb-3">
                                <label for="mailNA">Correo:</label>
                                <input type="text" class="form-control border-dark" id="mailNA" placeholder="Oscar02@mail.com" name="mailNA">
                            </div>
                        </div>

                        <div>
                            <div class="mb-3">
                                <label for="typeNA">Rol:</label>
                                <input type="text" class="form-control border-dark" list="typeNAL" id="typeNA" placeholder="Administrador" name="typeNA">
                                <datalist id="typeNAL">
                                    <option>Administrador</option>
                                    <option>Gestor de Perfiles</option>
                                    <option>Gestor de Indicadores</option>
                                </datalist>
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <hr>
                        <button type="submit" class="btnmodificadoRegistro">Crear Usuario</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>