<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pedidos extends Model
{
    protected $fillable = ['user_id'];

    public function productos()
    {
        return $this->hasMany(pedido_producto::class, 'pedido_id');
    }


    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
