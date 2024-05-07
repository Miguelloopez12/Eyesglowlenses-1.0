<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_producto';


    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }

    public function compras()
    {
        return $this->belongsToMany(Compra::class, 'productos_comprados', 'id_producto', 'id_compra');
    }


}
