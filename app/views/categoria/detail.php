
<section>
        <div class="container-fluid">
            <div class="row mt-3">
                <div class="col-lg-10 m-auto">
                    <form id="myForm" method="post" action="<?= URL.'categoria/save'?>" autocomplete="off">
                       
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="id">ID</label>                                      
                                        <input id="id" class="form-control" type="label" name="id" value="<?= $data->id ?>">
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
                                <label for="descripcion">Descripcion</label>
                                <input id="descripcion" class="form-control" type="text" name="descripcion" 
                                        value="<?= $data->descripcion ?>">
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-gruop">
                                
                                    <label>Estado<input type="checkbox" name="estado" <?= ($data->estado ==1)? 'checked': '' ?>></label>
                                    </div>
                                </div>
                                <div class="col-lg-8" style="color:azure;">
                                        <div id="mis_errores">
                                        </div>
                                </div>
                            
                            </div> 
                                                      
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary" id="submit"  type="submit">Guardar</button>
                            <a href="" class="btn btn-danger">Regresar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</section>