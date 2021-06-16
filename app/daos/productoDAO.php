<?php
namespace App\Daos;
use Libs\Dao;
use App\Models\ProductoModel;
use stdClass;
class ProductoDAO extends Dao
{
  public function __construct() {
    $this->loadEloquent();
  }

  public function getAll($estado)
  {
    $model = ProductoModel::where('estado', $estado)
    ->orderBy('id', 'DESC')
    ->get();
    return $model;
    
  }

  public function get(int $id)
  {
    $model = ProductoModel::find($id);

    if (is_null($model)) {
      $model = new stdClass();
      $model->id=0;
      $model->codigo='';
      $model->nombre='';
      $model->descripcion='';
      $model->precio=0;
      $model->stock=0;
      $model->estado = 0;
    }
    return $model;
  }
  public function create($obj){
   
    $model = new ProductoModel();
    $model->id = $obj->id;
    $model->codigo = $obj->codigo;
    $model->nombre = $obj->nombre;
    $model->descripcion = $obj->descripcion;
    $model->precio = $obj->precio;
    $model->stock = $obj->stock;
    $model->estado = $obj->estado;

      return $model->save();
  }
  public function update($obj){
   
    $model = ProductoModel::find($obj->$id);
    $model->id = $obj->id;
    $model->codigo = $obj->codigo;
    $model->nombre = $obj->nombre;
    $model->descripcion = $obj->descripcion;
    $model->precio = $obj->precio;
    $model->stock = $obj->stock;
    $model->estado = $obj->estado;

      return $model->save();
  }
  public function delete(int $id){
   
    $model = ProductoModel::find($id);

    return $model->delete();
  }
  public function baja(int $id){
   
    $model = CategoriaModel::find($obj->id);
    $model->estado = false;

    return $model->save();
  }

}