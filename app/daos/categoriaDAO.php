<?php
namespace App\Daos;
use Libs\Dao;
use App\Models\CategoriaModel;
use stdClass;
class CategoriaDAO extends Dao
{
  public function __construct() {
    //$this->loadConnection();
    $this->loadEloquent();
  }

  public function getAll($estado)
  {
    
    $model = CategoriaModel::where('estado', $estado)
    ->orderBy('id', 'DESC')
    ->get();
    return $model;
  }

  public function get(int $id)
  {
    $model = CategoriaModel::find($id);


    if (is_null($model)) {
      $model = new stdClass();
      $model->id=0;
      $model->nombre='';
      $model->descripcion='';
      $model->estado = 0;
    }
    return $model;
  }
  public function create($obj){
   
      $model = new CategoriaModel();
      $model->id = $obj->id;
      $model->nombre = $obj->nombre;
      $model->descripcion = $obj->descripcion;
      $model->estado = $obj->estado;
  
      return $model->save();
  }
  public function update($obj){
   
      $model = CategoriaModel::find($obj->id);
      $model->id = $obj->id;
      $model->nombre = $obj->nombre;
      $model->descripcion = $obj->descripcion;
      $model->estado = $obj->estado;
  
      return $model->save();
  }
  public function delete(int $id){
    
    $model = CategoriaModel::find($id);

    return $model->delete();
  }
  public function baja(int $id){
   
      $model = CategoriaModel::find($obj->id);
      $model->estado= false;
      
      return $model->save();
  }
  public function alta(){
      $model = CategoriaModel::find($obj->id);
      $model->estado= true;
      
      return $model->save();
  }

}