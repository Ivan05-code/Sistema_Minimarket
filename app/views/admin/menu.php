<?php
    $this->Layout('../layouts//layoutAdmin', ['title' => 'Administrador '])?>

   
    <?php $this->start('contenido') ?>
    
    <?php include_once MAINPATH . 'app/views/layouts/partialsAdmin/areaNavegacion.php' ?>
    <?php include_once MAINPATH . 'app/views/layouts/partialsAdmin/usuarios.php' ?>
    
    <?php $this->stop() ?>
    <?php $this->push('scripts') ?>
    //script de js
    <?php $this->end() ?>-->