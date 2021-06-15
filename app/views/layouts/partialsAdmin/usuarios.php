</div>
        </div>
        <div id="cambiarPass" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-white" id="my-modal-title">Modificar Contraseña</h5>
                        <button class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post" id="cambiarContra">
                            <div id="errorPass"></div>
                            <div class="form-group">
                                <label for="actual">Contraseña Actual</label>
                                <input id="actual" class="form-control" type="password" name="actual" placeholder="Contraseña Actual">
                            </div>
                            <div class="form-group">
                                <label for="nueva">Contraseña Nueva</label>
                                <input id="nueva" class="form-control" type="password" name="nueva" placeholder="Contraseña Nueva">
                            </div>
                            <button class="btn btn-primary" type="button" id="cambiar">Cambiar</button>
                            <button class="btn btn-danger" type="button" data-dismiss="modal">Cerrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="logout" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-white" id="my-modal-title">Pregunta</h5>
                        <button class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="text-white">¿Esta seguro que desea salir</p>
                    </div>
                    <div class="modal-footer ml-auto">
                        <a href="<?= URL . 'Usuarios/salir'?>" class="btn btn-danger">Si</a>
                        <button class="btn btn-primary" data-dismiss="modal" type="button">No</button>
                    </div>
                </div>
            </div>
        </div>