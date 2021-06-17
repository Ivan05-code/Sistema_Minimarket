<?php

namespace App\Controllers;
use Libs\Controller;
use App\Daos\VentasDAO;
use stdClass;

class VentasController extends Controller
{
  public function __construct() {
    $this->loadTemplate('ventas');
    $this->loadDAO('ventas');
  }

  public function index()
  {
    $data = $this->dao->getAll(true);
    echo $this->templates->render('index',['data' => $data]);
  }
  public function detail($param = null){
   
    $id = isset($param[0]) ? $param[0] : 0;
    $data = $this->dao->get($id);

    $this->loadDAO('usuario');
    $usuario = $this->dao->getAll(true);
    $this->loadDAO('cliente');
    $cliente = $this->dao->getAll(true);
    $this->loadDAO('ventas');
    echo $this->templates->render('detail',['data' => $data, 'usuario' => $usuario , 'cliente'=> $cliente ]);
    
  }
  public function save()
  {
    $obj = new stdClass();

    $obj->id = isset($_POST['id']) ? intval($_POST['id']): 0;
    $obj->idUsuario = isset($_POST['idUsuario']) ? $_POST['idUsuario'] : 0;
    $obj->idCliente = isset($_POST['idCliente']) ? $_POST['idCliente']: 0;
    $obj->fecha = isset($_POST['fecha']) ? $_POST['fecha'] : '';
    $obj->total = isset($_POST['total']) ? $_POST['total'] : 0;
    
    
    if (isset($_POST['estado'])) {
      if ($_POST['estado'] == 'on') {
          $obj->estado = true;
      } else {
          $obj->estado = false;
      }
    } else {
      $obj->estado = false;
    }
 
    if ($obj->id > 0) {
      $this->dao->update($obj);
    }else{
      $this->dao->create($obj);
    }
   

   header('Location:' .URL .'ventas/index');
  }
  public function delete($param = null)
  {
    $id= isset($param[0])? $param[0]:0;

    if($id>0){
      $this->dao->delete($id);
    }
    header('Location:' .URL .'ventas/index');
  }
  public function baja($param = null)
  {
    $id= isset($param[0])? $param[0]:0;

    if($id>0){
      $this->dao->baja($id);
      header('Location:' .URL .'ventas/baja');
    }else{
      $data = $this->dao->getAll(false);
      echo $this->templates->render('baja',['data' => $data]);
    }
  }
  public function alta($param = null)
  {
    $id= isset($param[0])? $param[0]:0;

    if($id>0){
      $this->dao->alta($id);
      header('Location:' .URL .'ventas/baja');
    }  
  }
}
