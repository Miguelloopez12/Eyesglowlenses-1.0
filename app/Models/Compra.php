<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;
    protected $fillable = [
        'usuario_id',
        'monto_compra',

         // Agregar el campo usuario_id aquí
        // Otros campos aquí
    ];


    public function productos()
    {
        return $this->belongsToMany(Producto::class, 'productos_comprados', 'id_compra', 'id_producto');
    }
}



