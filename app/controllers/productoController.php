<?php

namespace App\Controllers;
use Libs\Controller;
use App\Daos\ProductoDAO;
use stdClass;

class ProductoController extends Controller
{
  public function __construct() {
    $this->loadTemplate('producto');
    $this->loadDAO('producto');
  }

  public function index()
  {
    $data = $this->dao->getAll(true);
    echo $this->templates->render('index',['data' => $data]);
  }
  public function detail($param = null){
   
    $id = isset($param[0]) ? $param[0] : 0;
    $data = $this->dao->get($id);

    $this->loadDAO('categoria');
    $cate = $this->dao->getAll(true);
    $this->loadDAO('producto');

    echo $this->templates->render('detail',['data' => $data, 'cate'=>$cate]);
    
  }
  public function save()
  {
    $obj = new stdClass();

    $obj->id = isset($_POST['id']) ? intval($_POST['id']): 0;
    $obj->codigo = isset($_POST['codigo']) ? $_POST['codigo'] : '';
    $obj->idCat = isset($_POST['idCat']) ? $_POST['idCat']: 0;
    $obj->nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $obj->descripcion = isset($_POST['desc']) ? $_POST['desc'] : '';
    $obj->precio = isset($_POST['precio']) ? $_POST['precio'] : 0;
    $obj->stock = isset($_POST['stock']) ? $_POST['stock'] : 0;
    
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
   

   header('Location:' .URL .'producto/index');
  }
  public function delete($param = null)
  {
    $id= isset($param[0])? $param[0]:0;

    if($id>0){
      $this->dao->delete($id);
    }
    header('Location:' .URL .'producto/index');
  }
  public function baja($param = null)
  {
    $id= isset($param[0])? $param[0]:0;

    if($id>0){
      $this->dao->baja($id);
      header('Location:' .URL .'producto/baja');
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
      header('Location:' .URL .'producto/baja');
    }  
  }
}
