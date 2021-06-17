<?php

namespace App\Models;
use \Illuminate\Database\Eloquent\Model;

class ProductoModel extends Model
{
    protected  $table = "productos";
    protected $primaryKey = "id";

    public function categoria()
    {
        return $this->belongsTo(CategoriaModel::class, 'idCat', 'id');
    }
}
