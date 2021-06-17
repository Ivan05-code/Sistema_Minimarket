<?php

namespace App\Controllers;
use Libs\Controller;
use App\Daos\UsuarioDAO;
use stdClass;

class UsuarioController extends Controller
{
  public function __construct() {
    $this->loadTemplate('usuario');
    $this->loadDAO('usuario');
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
    $obj->nombre = isset($_POST['nombre']) ? $_POST['nombre']: '';
    $obj->direccion = isset($_POST['direccion']) ? $_POST['direccion'] : '';
    $obj->usuario = isset($_POST['usuario']) ? $_POST['usuario']: '';
    $obj->correo = isset($_POST['correo']) ? $_POST['correo']: '';
    $obj->clave = isset($_POST['clave']) ? $_POST['clave']: '';
    $obj->rol = isset($_POST['rol']) ? $_POST['rol']: '';
    
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
   

   header('Location:' .URL .'usuario/index');
  }
  public function delete($param = null)
  {
    $id= isset($param[0])? $param[0]:0;

    if($id>0){
      $this->dao->delete($id);
    }
    header('Location:' .URL .'usuario/index');
  }
  public function baja($param = null)
  {
    $id= isset($param[0])? $param[0]:0;

    if($id>0){
      $this->dao->baja($id);
      header('Location:' .URL .'usuario/baja');
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
      header('Location:' .URL .'usuario/baja');
    }  
  }
}
