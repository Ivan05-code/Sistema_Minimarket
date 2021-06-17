<?php
namespace App\Daos;
use Libs\Dao;
use App\Models\VentasModel;
use stdClass;
class VentasDAO extends Dao
{
  public function __construct() {
    $this->loadEloquent();
  }

  public function getAll($estado)
  {
    //with('categoria')->
    $model = VentasModel::with('usuario','cliente')->where('estado', $estado)
    ->orderBy('id', 'DESC')
    ->get();

    return $model;
    
  }

  public function get(int $id)
  {
    $model = VentasModel::find($id);

    if (is_null($model)) {
      $model = new stdClass();
      $model->id=0;
      $model->idUsuario=0;
      $model->idCliente=0; 
      $model->fecha='';
      $model->total=0;
      $model->estado = 0;
    }
    return $model;
  }
  public function create($obj){
   
    $model = new VentasModel();
    $model->id = $obj->id;
    $model->idUsuario = $obj->idUsuario;
    $model->idCliente=$obj->idCliente;
    $model->fecha = $obj->fecha;
    $model->total = $obj->total;
    $model->estado = $obj->estado;

      return $model->save();
  }
  public function update($obj){
   
    $model = VentasModel::find($obj->$id);
    $model->id = $obj->id;
    $model->idUsuario = $obj->idUsuario;
    $model->idCliente=$obj->idCliente;
    $model->fecha = $obj->fecha;
    $model->total = $obj->total;
    $model->estado = $obj->estado;

      return $model->save();
  }
  public function delete(int $id){
   
    $model = VentasModel::find($id);

    return $model->delete();
  }
  public function baja(int $id){
   
    $model = VentasModel::find($id);
    $model->estado = false;

    return $model->save();
  }
  public function alta(int $id)
  {
      $model = ProductoModel::find($id);
      $model->estado = true;
  
      return $model->save();
  }

}