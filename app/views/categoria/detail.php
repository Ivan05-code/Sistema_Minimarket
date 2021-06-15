<?php $this->layout('../layouts/layoutAdmin', ['title' => 'Categorias | Modificar']) ?>
<?php $this->start('contenido') ?>

<div class="page-content bg-light">
    <section>
        <div class="container-fluid">
            <div class="row mt-3">
                <div class="col-lg-6 m-auto">
                    <form method="post" action="<?= URL.'categoria/save'?>" autocomplete="off">
                        <div class="card-header bg-dark">
                            <h6 class="title text-white text-center">Modificar Categoria</46>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="id">Codigo</label>                                      
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
                          
                            <div class="form-group">
                                <label for="descripcion">Descripcion</label>
                                <input id="descripcion" class="form-control" type="text" name="descripcion" 
                                        value="<?= $data->descripcion ?>">
                            </div>
                            <div class="form-gruop">
                                <div class="col-lg-4">
                                <label>Estado<input type="checkbox" name="estado" <?= ($data->estado ==1)? 'checked': '' ?>></label>
                                </div>
                            </div>                           
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary " type="submit">Guardar</button>
                            <a href="" class="btn btn-danger">Regresar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $this->stop() ?>