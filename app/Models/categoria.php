<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    use HasFactory;


    protected $primaryKey = 'id_producto';

    public function productos()


    {
        return $this->hasMany(Productos::class, 'id_categoria');
    }
}
