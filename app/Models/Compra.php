<?php

namespace App\Models;

use App\Models\Facturacion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function facturacion()
    {
        return $this->hasOne(Facturacion::class. "id_compra");
    }
}





