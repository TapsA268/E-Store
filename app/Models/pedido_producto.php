<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pedido_producto extends Model
{
    use HasFactory;

    protected $table = 'pedido_producto'; // nombre exacto de la tabla

    protected $fillable = ['pedido_id', 'producto_id', 'cantidad'];

    // Relación inversa con Pedido
    public function pedido()
    {
        return $this->belongsTo(pedidos::class, 'pedido_id');
    }

    // Relación inversa con Producto
    public function producto()
    {
        return $this->belongsTo(productos::class, 'producto_id');
    }
}
