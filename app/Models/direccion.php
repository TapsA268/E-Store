<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class direccion extends Model
{
    protected $fillable = ['pedido_id', 'calle', 'ciudad', 'estado', 'pais', 'codigo_postal'];

    public function pedido()
    {
        return $this->belongsTo(pedidos::class);
    }
}
