<?php

namespace App\Models;

use App\Models\Compra;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Facturacion extends Model
{
    use HasFactory;

    protected $table = 'facturacion';


public function compra()

{
    return $this->belongsTo(Compra::class, "id_compra");
}

}
