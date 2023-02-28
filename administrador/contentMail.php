<div class="row g-0">
    <div class="col-lg-6 col-xl-5 col-xxl-3 mb-3 pe-lg-2">
        <div class="card border-dark h-lg-100">
            <div class="card-body  position-relative">
                <h3><i class="fa-regular fa-envelope-circle-check"></i> Configuraciones de<br> Correos Electrónicos</h3>
                <hr>

                <form id="settingsMail">
                    <div class="mb-3 mt-3">
                        <label for="servidorM">Servidor:</label>
                        <input type="text" class="form-control border-dark" id="servidorM" placeholder="smtp.titan.email" name="servidorM">
                    </div>

                    <div class="mb-3">
                        <label for="usuarioM">Usuario:</label>
                        <input type="text" class="form-control border-dark" id="usuarioM" placeholder="ejemplo@mail.com" name="usuarioM">
                    </div>

                    <div class="mb-3">
                        <label for="passM">Contraseña:</label>
                        <input type="pass" class="form-control border-dark" id="passM" placeholder="***********" name="passM">
                    </div>

                    <div class="mb-3">
                        <label for="puertoM">Puerto:</label>
                        <input type="number" class="form-control border-dark" id="puertoM" placeholder="587" name="puertoM">
                    </div>

                    <div class="mb-3">
                        <label for="remitenteM">Remitente:</label>
                        <input type="text" class="form-control border-dark" id="remitenteM" placeholder="ejemplo@mail.com" name="remitenteM">
                    </div>

                    <div class="mb-3">
                        <label for="autenticacionM">Autenticación:</label>
                        <input type="text" class="form-control border-dark" list="autenticacionML" id="autenticacionM" placeholder="SSL" name="autenticacionM">
                        <datalist id="autenticacionML">
                            <option>SSL</option>
                            <option>TLS</option>
                            <option>No Usar</option>
                        </datalist>
                    </div>

                    <div class="text-center">
                        <hr>
                        <button type="submit" class="btnmodificadoRegistro">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-xl-7 col-xxl-9 ps-lg-2 mb-3">
        <div class="card border-dark h-lg-100">
            <div class="card-body position-relative">
                <h3 class="text-center"><i class="fa-regular fa-envelopes-bulk"></i> Mensajes predeterminados para correos</h3>
                <hr>

                <div class="mb-3 mt-3">
                    <label for="welcomeMessage">Mensaje Bienvenida:</label>
                    <textarea class="form-control border-dark" style="height: 100px;" id="welcomeMessage" placeholder="¡Bienvenido te estábamos esperando!" name="welcomeMessage"></textarea>
                </div>

                <div class="text-end">
                    <button type="submit" class="btnmodificadoRegistro">Guardar</button>
                    <hr>
                </div>

                <div class="mb-3">
                    <label for="resetPassMessage">Mensaje Reseteo de Contraseñas:</label>
                    <textarea class="form-control border-dark" style="height: 100px;" id="resetPassMessage" placeholder="¿Problemas para entrar? Restablecer tu contraseña es fácil. Simplemente presione el botón de abajo y siga las instrucciones. Todo estará listo y funcionando en poco tiempo." name="resetPassMessage"></textarea>
                </div>

                <div class="text-end">
                    <button type="submit" class="btnmodificadoRegistro">Guardar</button>
                    <hr>
                </div>

                <div class="mb-3">
                    <label for="martchsMessage">Mensaje Matchs:</label>
                    <textarea class="form-control border-dark" style="height: 100px;" id="martchsMessage" placeholder="¡Felicidades has hecho un match con esta persona!" name="martchsMessage"></textarea>
                </div>

                <div class="text-end">
                    <button type="submit" class="btnmodificadoRegistro">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</div>