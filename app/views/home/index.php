
<?php
    $this->Layout('../layouts/layout', ['title' => 'IMSuperMarket | Inicio'])?>

<?= $this->start('contenido'); ?>
<?php include_once MAINPATH . 'app/views/layouts/partials/_areaNavegacion.php' ?>
<!-- //navigation -->
<!---- Slider-->
<?php include_once MAINPATH . 'app/views/layouts/partials/_slider.php' ?>

<!-- top-brands -->
<?php include_once MAINPATH . 'app/views/layouts/partials/_areaProductos.php' ?>
<!-- //top-brands -->
 <!-- Carousel -->
 <?php include_once MAINPATH . 'app/views/layouts/partials/carousel.php' ?>
<!-- /.carousel -->	
<!--banner-bottom-->
<?php include_once MAINPATH . 'app/views/layouts/partials/_areabannerbutton.php' ?>
<!--banner-bottom-->
<!--brands-->
<?php include_once MAINPATH . 'app/views/layouts/partials/areaMarcas.php' ?>
<!--//brands-->
<!-- new -->
<?php include_once MAINPATH . 'app/views/layouts/partials/nuevos.php' ?>
<!-- //new -->
<?php $this->stop() ?>