<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    use HasFactory;

    public function pedidos()
    {
        return $this->hasMany(pedido_producto::class, 'producto_id');
    }
}
