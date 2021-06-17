<?php
namespace App\Daos;
use Libs\Dao;
use App\Models\ClienteModel;
use stdClass;
class ClienteDAO extends Dao
{
  public function __construct() {
    $this->loadEloquent();
  }

  public function getAll($estado)
  {
    //with('categoria')->
    $model = ClienteModel::where('estado', $estado)
    ->orderBy('id', 'DESC')
    ->get();

    return $model;
    
  }

  public function get(int $id)
  {
    $model = ClienteModel::find($id);

    if (is_null($model)) {
      $model = new stdClass();
      $model->id=0;
      $model->dni='';
      $model->nombre='';
      $model->direccion='';
      $model->telefono='';
      $model->estado = 0;
    }
    return $model;
  }
  public function create($obj){
   
    $model = new ClienteModel();
    $model->id = $obj->id;
    $model->dni = $obj->dni; 
    $model->nombre = $obj->nombre;
    $model->direccion = $obj->direccion;
    $model->telefono = $obj->telefono;
    $model->estado = $obj->estado;

      return $model->save();
  }
  public function update($obj){
   
    $model = ClienteModel::find($obj->$id);
    $model->id = $obj->id;
    $model->dni = $obj->dni; 
    $model->nombre = $obj->nombre;
    $model->direccion = $obj->direccion;
    $model->telefono = $obj->telefono;
    $model->estado = $obj->estado;

      return $model->save();
  }
  public function delete(int $id){
   
    $model = ClienteModel::find($id);

    return $model->delete();
  }
  public function baja(int $id){
   
    $model = ClienteModel::find($id);
    $model->estado = false;

    return $model->save();
  }
  public function alta(int $id)
  {
      $model = ClienteModel::find($id);
      $model->estado = true;
  
      return $model->save();
  }

}