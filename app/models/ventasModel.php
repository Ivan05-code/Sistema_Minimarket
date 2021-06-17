<?php

namespace App\Models;
use \Illuminate\Database\Eloquent\Model;

class VentasModel extends Model
{
    protected  $table = "ventas";
    protected $primaryKey = "id";

    public function usuario()
    {
        return $this->belongsTo(UsuarioModel::class, 'idUsuario', 'id');
    }
    public function cliente()
    {
        return $this->belongsTo(ClienteModel::class, 'idCliente', 'id');
    }
}
