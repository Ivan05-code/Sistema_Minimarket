<?php $this->layout('../layouts/layoutAdmin', ['title' => 'Productos | Modificar']) ?>
<?php $this->start('contenido') ?>

<div class="page-content bg-light">
    <section>
        <div class="container-fluid">
            <div class="row mt-3">
                <div class="col-lg-6 m-auto">
                    <form method="post" action="<?= URL.'producto/save'?>" autocomplete="off">
                        <div class="card-header bg-dark">
                            <h6 class="title text-white text-center">Modificar Categoria</46>
                        </div>
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
                                        <label for="id">Codigo</label>                                      
                                        <input id="id" class="form-control" type="label" name="id" value="<?= $data->codigo ?>">
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
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-6">
                                    
                                        <label for="precio">Precio</label>
                                        <input id="precio" class="form-control" type="text" name="precio" value="<?= $data->precio ?> ">
                                       
                                    </div>
                                    <div class="col-lg-6">
                                    
                                        <label for="stock">Stock</label>
                                        <input id="stock" class="form-control" type="text" name="stock" value="<?= $data->stock ?> ">
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="form-gruop">
                              
                                <label>Estado<input type="checkbox" name="estado" <?= ($data->estado ==1)? 'checked': '' ?>></label>
                                
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