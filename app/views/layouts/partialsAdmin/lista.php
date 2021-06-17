<div class="d-flex align-items-stretch">
    
        <!-- Sidebar Navigation-->
        <nav id="sidebar">

            <!-- Sidebar Header-->
            <div class="sidebar-header d-flex align-items-center p-1">
                
                <div class="avatar" data-toggle="modal" data-target="#cambiarPass"><img src="<?= URL . 'images/admin.png '?>" alt="..." class="img-fluid rounded-circle"></div>
                <div class="title">
                    <h5 class="h5"><?php; ?></h5>
                </div>
            </div>
            <ul class="list-unstyled">
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fas fa-shopping-cart"></i> <strong class="text-white"> Ventas </strong></a>
                    <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                        <li><a href="<?= URL .''?>"><i class="fas fa-cart-plus"></i> Nueva Venta</a></li>
                        <li><a href="<?= URL .'ventas/index'?>"><i class="fas fa-list-ul"></i> Ventas</a></li>
                    </ul>
                </li>
                <li><a href="<?= URL .'producto/index'?>"> <i class="fab fa-product-hunt"></i> <strong class="text-white"> Productos </strong></a></li>
                <li><a href="<?= URL .'categoria/index'?>"> <i class="fab fa-github-alt"></i> <strong class="text-white"> Categorias </strong></a></li>
                <li><a href="<?= URL .'cliente/index'?>"> <i class="fas fa-users"></i> <strong class="text-white"> Clientes </strong></a></li>
                <?php //if($_SESSION['rol'] == "Administrador") ?>
				<li><a href="<?= URL .'usuario/index'?>"> <i class="fas fa-user"></i> <strong class="text-white"> Usuarios </strong></a></li>
 
				<li><a href="<?= URL .'configuracion/index'?>""> <i class="fas fa-cogs"></i> <strong class="text-white"> Configuración </strong></a></li>
                <?php  ?>
				<li><a href="#dropdownCompras" aria-expanded="false" data-toggle="collapse"> <i class="fas fa-truck"></i> <strong class="text-white"> Compras</strong></a>
                    <ul id="dropdownCompras" class="collapse list-unstyled ">
                        <li><a href="<?= URL ?>Compras/Listar"><i class="fas fa-cart-plus"></i> Nueva Compra</a></li>
                        <li><a href="<?= URL ?>Compras/lista"><i class="fas fa-list-ol"></i> Compras</a></li>
                    </ul>
                </li>
                
        </nav>
    