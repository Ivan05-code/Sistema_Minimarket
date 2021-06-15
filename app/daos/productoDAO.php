<?php
namespace App\Daos;
use Libs\Dao;
use stdClass;
class ProductoDAO extends Dao
{
  public function __construct() {
    $this->loadConnection();
  }

  public function getAll()
  {
    $sql = "SELECT id, nombre, descripcion,estado FROM  categoria ";
   
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(\PDO::FETCH_OBJ);
    return $result;
  }

  public function get(int $id)
  {
    
    if ($id>0) {
      $sql = "SELECT id, nombre, descripcion,estado FROM categoria where id = ?";
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindParam(1, $id,\PDO::PARAM_INT);
      $stmt->execute();
      $result = $stmt->fetch(\PDO::FETCH_OBJ);
    }else{
      $result = new stdClass();
      $result->id=0;
      $result->nombre='';
      $result->descripcion='';
      $result->estado = 0;
    }
    return $result;
  }
  public function create($obj){
   
      $sql = "INSERT INTO categoria(nombre, descripcion,estado) VALUES (?,?,?)";
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindParam(1, $obj->nombre,\PDO::PARAM_STR);
      $stmt->bindParam(2, $obj->descripcion,\PDO::PARAM_STR);
      $stmt->bindParam(3, $obj->estado,\PDO::PARAM_BOOL);
  
      return $stmt->execute();;
  }
  public function update($obj){
   
    $sql = "UPDATE categoria SET nombre=?, descripcion=?,estado=? WHERE id=?";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindParam(1, $obj->nombre,\PDO::PARAM_STR);
    $stmt->bindParam(2, $obj->descripcion,\PDO::PARAM_STR);
    $stmt->bindParam(3, $obj->estado,\PDO::PARAM_BOOL);
    $stmt->bindParam(4, $obj->id,\PDO::PARAM_INT);

    return $stmt->execute();
  }
  public function delete(int $id){
   
    $sql = "DELETE FROM categoria WHERE id=?";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindParam(1,$id,\PDO::PARAM_INT);
    return $stmt->execute();
  }
  public function baja(int $id){
   
    $sql = "UPDATE categoria SET estado=0 WHERE id=?";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindParam(1,$id,\PDO::PARAM_INT);

    return $stmt->execute();
  }

}