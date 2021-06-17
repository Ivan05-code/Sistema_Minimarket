<?php $this->layout('../layouts/layoutAdmin', ['title' => 'Categoria']) ?>
<?php $this->start('contenido') ?>
<div class="page-content bg-light">
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 mt-2">
                    <div class="row">
                        <div class="col-lg-6 mb-2">
                        <a class="btn btn-dark" href="<?= URL . 'producto/index'?>"  data-target=""><i class="far fa-arrow-alt-circle-left"></i> Regresar</a>
                        </div>
                    </div>
                    <div class="table-responsive mt-4">
                        <table class="table table-hover table-bordered" id="Table">
                            <thead class="thead-dark" style="text-align:center;">
                                <tr>
                                    <th>ID</th>
                                    <th>Codigo</th>
                                    <th>IdCategoria</th>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Precio</th>
                                    <th>Stock</th>
                                    <th>Acciones</th>
        
                                </tr>
                            </thead>
                            <tbody >
                                <?php foreach ($data as $key) { ?>
                                    <tr>
                                    <td> <?= $this->e($key->id) ?></td>
                                    <td> <?= $this->e($key->codigo) ?></td>
                                    <td> <?= $this->e($key->idCat) ?></td>
                                    <td> <?= $this->e($key->nombre) ?></td>
                                    <td> <?= $this->e($key->descripcion) ?></td>
                                    <td> <?= $this->e($key->precio) ?></td>
                                    <td> <?= $this->e($key->stock) ?></td>
                                
                                    <td style="text-align:center;">
                                      <a href="<?= URL . "producto/alta/{$this->e($key->id)}" ?>" class="btn btn-primary"><i class="fas fa-undo-alt"></i></a>
                                  
                                    </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $this->stop() ?>