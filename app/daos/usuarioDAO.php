<?php
namespace App\Daos;
use Libs\Dao;
use App\Models\UsuarioModel;
use stdClass;
class UsuarioDAO extends Dao
{
  public function __construct() {
    $this->loadEloquent();
  }

  public function getAll($estado)
  {
    $model = UsuarioModel::where('estado', $estado)
    ->orderBy('id', 'DESC')
    ->get();

    return $model;
  }

  public function get(int $id)
  {
    $model = UsuarioModel::find($id);

    if (is_null($model)) {
      $model = new stdClass();
      $model->id=0;
      $model->nombre='';
      $model->direccion=''; 
      $model->nombre='';
      $model->usuario='';
      $model->correo='';
      $model->clave='';
      $model->rol='';
      $model->estado = 0;
    }
   
    return $model;
  }
  public function create($obj){
   
    $model = new UsuarioModel();
    $model->id = $obj->id;
    $model->nombre = $obj->nombre;
    $model->direccion=$obj->direccion;
    $model->usuario = $obj->usuario;
    $model->correo = $obj->correo;
    $model->clave = $obj->clave;
    $model->rol = $obj->rol;
    $model->estado = $obj->estado;

      return $model->save();
  }
  public function update($obj){

    $model = new UsuarioModel($obj->id);
    $model->id = $obj->id;
    $model->nombre = $obj->nombre;
    $model->direccion=$obj->direccion;
    $model->usuario = $obj->usuario;
    $model->correo = $obj->correo;
    $model->clave = $obj->clave;
    $model->rol = $obj->rol;
    $model->estado = $obj->estado;

      return $model->save();
  }
  public function delete(int $id){
   
    $model = UsuarioModel::find($id);

    return $model->delete();
  }
  public function baja(int $id){
   
    $model = UsuarioModel::find($id);
    $model->estado = false;

    return $model->save();
  }
  public function alta(int $id)
  {
      $model = UsuarioModel::find($id);
      $model->estado = true;
  
      return $model->save();
  }
  
}