<?php

namespace App\Controllers;
use Libs\Controller;
use App\Daos\ClienteDAO;
use stdClass;

class ClienteController extends Controller
{
  public function __construct() {
    $this->loadTemplate('cliente');
    $this->loadDAO('cliente');
  }

  public function index()
  {
    $data = $this->dao->getAll(true);
    echo $this->templates->render('index',['data' => $data]);
  }
  public function detail($param = null){
   
    $id = isset($param[0]) ? $param[0] : 0;
    $data = $this->dao->get($id);

    echo $this->templates->render('detail',['data' => $data]);
    
  }
  public function save()
  {
    $obj = new stdClass();

    $obj->id = isset($_POST['id']) ? intval($_POST['id']): 0;
    $obj->dni = isset($_POST['dni']) ? $_POST['dni'] : '';
    $obj->nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $obj->direccion = isset($_POST['direccion']) ? $_POST['direccion'] : '';
    $obj->telefono = isset($_POST['telf']) ? $_POST['telf'] : 0;
   
    
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
   

   header('Location:' .URL .'cliente/index');
  }
  public function delete($param = null)
  {
    $id= isset($param[0])? $param[0]:0;

    if($id>0){
      $this->dao->delete($id);
    }
    header('Location:' .URL .'cliente/index');
  }
  public function baja($param = null)
  {
    $id= isset($param[0])? $param[0]:0;

    if($id>0){
      $this->dao->baja($id);
      header('Location:' .URL .'cliente/baja');
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
      header('Location:' .URL .'cliente/baja');
    }  
  }
}
