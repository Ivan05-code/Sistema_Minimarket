<?php

namespace App\Controllers;
use Libs\Controller;
use App\Daos\CategoriaDAO;
use stdClass;

class CategoriaController extends Controller
{
  public function __construct() {
    $this->loadTemplate('categoria');
    $this->loadDAO('categoria');
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
    $obj->nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $obj->descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : '';
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
   

   header('Location:' .URL .'categoria/index');
  }
  public function delete($param = null)
  {
    $id= isset($param[0])? $param[0]:0;

    if($id>0){
      $this->dao->delete($id);
    }
    header('Location:' .URL .'categoria/index');
  }
  public function baja($param = null)
  {
    $id= isset($param[0])? $param[0]:0;

    if($id>0){
      $this->dao->baja($id);
      header('Location:' .URL .'categori/baja');
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
      header('Location:' .URL .'categoria/baja');
    }  
  }
}
