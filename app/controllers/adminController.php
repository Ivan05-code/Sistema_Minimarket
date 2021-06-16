<?php
    namespace App\Controllers;
    use Libs\Controller;
    
    
    class AdminController extends Controller
    {
        public function __construct(){
            $this->loadTemplate('admin');
            //$this->loadTemplate('comestibles');
        }
        public function menu()
        {
            echo $this->templates->render('menu');
           // echo $this->template->render('groceries');
       
        }
       /* protected $totalPagar, $tot = 0;
        public function __construct()
        {
        session_start();
        if (empty($_SESSION['activo'])) {
            header("location: " . base_url());
        }
            parent::__construct();

        }
        public function Listar()

        {
            $prod = $this->model->productos();
            $cli = $this->model->clientes();
            $usu = $this->model->usuarios();
            $ven = $this->model->ventas(); 
            $data = $prod['COUNT(*)'];
            $clientes = $cli['COUNT(*)'];  
            $usuarios = $usu['COUNT(*)'];
            $ventas = $ven['COUNT(*)'];
            $this->views->getView($this, "Listar", $data, $usuarios, $ventas, $clientes);
        }
        public function reportes()
        {
            $data = $this->model->selectStockM();
            echo json_encode($data);
        }
        public function reportesTorta()
        {
            $data = $this->model->selectProductos();
            echo json_encode($data);
        }*/
    }

