
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $this->e($title) ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?= URL . 'css/style.default.css'?>" id="theme-stylesheet">
    <link rel="stylesheet" href="<?= URL . 'css/bootstrap.min.css'?>">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?= URL . 'css/custom.css'?>">
    <link rel="stylesheet" href="<?= URL . 'css/dataTables.bootstrap4.min.css'?>">
    <!-- Favicon-->
    <link rel="shortcut icon" href="images/favicon.ico">
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
    <body>
        <div class="body-wrapper">
        <?php include_once MAINPATH . 'app/views/layouts/partialsAdmin/header.php' ?>
        <?php include_once MAINPATH . 'app/views/layouts/partialsAdmin/lista.php' ?>
        <?= $this->section('contenido') ?>
        <?php include_once MAINPATH . 'app/views/layouts/partialsAdmin/footer.php' ?>
        </div>

        <?= $this->section('myModal')?>
        <!-- JavaScript files-->
        <script src="<?= URL . 'js/jquery.min.js'?>"></script>
        <script src="<?= URL . 'js/bootstrap.bundle.min.js'?>"></script>
        <script src="<?= URL . 'js/Funciones.js'?>"></script>
        <script src="<?= URL . 'js/chartjs.min.js'?>"></script>
        <script src="<?= URL . 'js/all.min.js'?>"></script>
        <script src="<?= URL . 'js/front.js'?>"></script>
        <script src="<?= URL . 'js/sweetalert2@9.js'?>"></script>
        <script src="<?= URL . 'js/jquery.dataTables.min.js'?>"></script>
        <script src="<?= URL . 'DataTables/DataTables-1.10.21/js/dataTables.bootstrap4.min.js'?>" type="text/javascript"></script>
        <script>
            $(document).ready(function() {
                $('#Table').DataTable({
					language: {
						"decimal": "",
						"emptyTable": "No hay datos",
						"info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
						"infoEmpty": "Mostrando 0 a 0 de 0 registros",
						"infoFiltered": "(Filtro de _MAX_ total registros)",
						"infoPostFix": "",
						"thousands": ",",
						"lengthMenu": "Mostrar _MENU_ registros",
						"loadingRecords": "Cargando...",
						"processing": "Procesando...",
						"search": "Buscar:",
						"zeroRecords": "No se encontraron coincidencias",
						"paginate": {
							"first": "Primero",
							"last": "Ultimo",
							"next": "Próximo",
							"previous": "Anterior"
						},
						"aria": {
							"sortAscending": ": Activar orden de columna ascendente",
							"sortDescending": ": Activar orden de columna desendente"
						}
					}
				});
            });
        </script>
        <?= $this->section('scripts')?>
    </body>

</html>
   