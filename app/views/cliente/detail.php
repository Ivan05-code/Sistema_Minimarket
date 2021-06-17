

        <div class="container-fluid">
            <div class="row mt-6">
                <div class="col-lg-12 ">
                    <form id="myForm" method="post" action="<?= URL.'cliente/save'?>" autocomplete="off">
                        
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="id">ID</label>                                      
                                        <input id="id" class="form-control" type="label" name="id" value="<?= $data->id ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="dni">DNI</label>                                      
                                        <input id="dni" class="form-control" type="label" name="dni" value="<?= $data->dni ?>">
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
                          
                            <div class="form-group">
                                <label for="direccion">Dirección</label>
                                <input id="direccion" class="form-control" type="text" name="direccion" 
                                        value="<?= $data->direccion ?>">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="telf">Teléfono</label>
                                        <input id="telf" class="form-control" type="text" name="telf" value="<?= $data->telefono ?> ">
                                       
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
                            <a href="" class="btn btn-danger">Regresar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
   