

    <section>
        <div class="container-fluid">
            <div class="row mt-3">
                <div class="col-lg-10 m-auto">
                    <form id="myForm" method="post" action="<?= URL.'usuario/save'?>" autocomplete="off">
                        
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="id">ID</label>
                                       
                                        <input id="id" class="form-control" type="text" name="id" value="<?= $data->id ?>">
                                    </div>
                                </div>
            
                            </div>  
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="nombre">Nombre</label>
                                        <input id="nombre" class="form-control" type="text" name="nombre" value="<?= $data->nombre ?> ">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="direccion">Direccion</label>
                                        <input id="direccion" class="form-control" type="text" name="direccion" value="<?= $data->direccion ?> ">
                                    </div>
                                </div>
                            </div>
                        
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="Usuario">Usuario</label>
                                        <input id="usuario" class="form-control" type="text" name="usuario" value="<?= $data->usuario ?> ">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="Clave">Correo</label>
                                        <input id="ulave" class="form-control" type="text" name="clave" value="<?= $data->correo ?> ">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="correo">Clave</label>
                                        <input id="correo" class="form-control" type="text" name="correo" value="<?= $data->clave ?> ">
                                    </div>
                                </div>
                           
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="rol">Rol</label>
                                        <input id="rol" class="form-control" type="text" name="rol" value="<?= $data->rol ?> ">
                                    </div>
                                </div>
                            </div>
                            <div class="form-gruop">
                                <div class="col-lg-4">
                                <label>Estado<input type="checkbox" name="estado" <?= ($data->estado ==1)? 'checked': '' ?>></label>
                                </div>
                            </div> 
                            
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary " id="submit" type="submit">Guardar</button>
                            <a href="<?= URL .'usuario/index'?>" class="btn btn-danger">Regresar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

