
<div class="container-fluid ">
    <section>
        <div class="container-fluid">
            <div class="row mt-3">
                <div class="col-lg-12 m-auto">
                    <form  id="myForm" method="post" action="<?= URL.'producto/save'?>" autocomplete="off">
                       
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
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="codigo">Codigo</label>                                      
                                        <input id="codigo" class="form-control" type="label" name="codigo" value="<?= $data->codigo ?>">
                                    </div>
                                </div>
                             
                          
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="idCat">IDCategoria</label>
                                            <select class="form-control" name="idCat">
                                                <?php foreach ($cate as  $key ): ?>
                                                    <option value="<?=$this->e($key->id)?>"> 
                                                        <?= $this->e($key->nombre)?>
                                                    </option>
                                                <?php endforeach ?>
                                                
                                            </select>
                                        
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
                                <label for="desc">Descripcion</label>
                                <input id="desc" class="form-control" type="text" name="desc" 
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
                            <button class="btn btn-primary " id="submit" type="submit">Guardar</button>
                            <a href="" class="btn btn-danger">Regresar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
