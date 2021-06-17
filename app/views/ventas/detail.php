

        <div class="container-fluid">
            <div class="row mt-3">
                <div class="col-lg-10 m-auto">
                    <form id="myForm" method="post" action="<?= URL.'ventas/save'?>" autocomplete="off">

                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label for="id">ID</label>                                      
                                        <input id="id" class="form-control" type="label" name="id" value="<?= $data->id ?>">
                                    </div>
                                </div>
                            
                            </div> 
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="idUsuario">IDUsuario</label>
                                            <select class="form-control" name="idUsuario">
                                                <?php foreach ($usuario as  $key ): ?>
                                                    <option value="<?=$this->e($key->id)?>"> 
                                                    <?= $this->e($key->nombre)?>
                                                    </option>
                                                <?php endforeach ?>
                                                
                                            </select>
                                        
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="idCliente">IDCliente</label>
                                            <select class="form-control" name="idCliente">
                                                <?php foreach ($cliente as  $key ): ?>
                                                    <option value="<?=$this->e($key->id)?>"> 
                                                    <?= $this->e($key->nombre)?>
                                                    </option>
                                                <?php endforeach ?>
                                                
                                            </select>
                                        
                                    </div>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="fecha">Fecha </label>
                                        <input type="date" id="fecha" name="fecha"
                                        value="<?= $data->fecha ?> "
                                         min="2021-01-01" max="2021-12-31">
                                    </div>
                                </div>
                            
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="total">Total</label>
                                        <input id="total" class="form-control" type="text" name="total" value="<?= $data->total ?> "> 
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="form-gruop">
                                <div class="col-lg-8">
                                <label>Estado<input type="checkbox" name="estado" <?= ($data->estado ==1)? 'checked': '' ?>></label>
                                </div>
                            </div>                           
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary " id="submit" type="submit">Guardar</button>
                            <a href="<?= URL.'ventas/index'?>" class="btn btn-danger">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
  
