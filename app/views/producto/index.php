<?php $this->layout('../layouts/layoutAdmin', ['title' => 'Productos']) ?>
<?php $this->start('contenido') ?>
<div class="page-content bg-light">
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 mt-2">
                    <div class="row">
                        <div class="col-lg-4 mb-2">
                            <a is-modal="true" class="btn btn-dark" href="<?= URL . 'producto/detail'?>"  data-target=""><i class="fas fa-plus-circle"></i> Nuevo</a>
                            <a class="btn btn-danger" href="<?= URL . 'producto/baja'?>"><i class="fas fa-user-slash"></i> Inactivos</a>
                        </div>
                        <div class="col-lg-6 mb-2">
                        <h3>PRODUCTOS</h3>
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
                                    <td> <?= $this->e($key->categoria->nombre) ?></td>
                                    <td> <?= $this->e($key->nombre) ?></td>
                                    <td> <?= $this->e($key->descripcion) ?></td>
                                    <td> <?= $this->e($key->precio) ?></td>
                                    <td> <?= $this->e($key->stock) ?></td>
                                
                                    <td style="text-align:center;">
                                            <a is-modal="true" href="<?= URL . "producto/detail/{$this->e($key->id)}" ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                            <form action="<?= URL . "producto/delete/{$this->e($key->id)}" ?>" method="post" class="d-inline elim">
                                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                            </form>
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

<?php $this->start('myModal') ?>

<?php 
$title = 'Producto - Insertar';
$size = GRANDE;
include MAINPATH . 'app/views/layouts/partialsAdmin/_modalGenerico.php';
?>
<?php $this->stop() ?>

<?php $this->push('scripts') ?>
<script src="<?= URL . 'js/scripts/modal_crud.js' ?> "></script> 
<?php $this->end() ?>