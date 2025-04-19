<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pedidos extends Model
{
    protected $fillable = ['user_id'];

    public function productos()
    {
        return $this->belongsToMany(productos::class)->withPivot('cantidad');
    }

    public function direccion()
    {
        return $this->hasOne(direccion::class);
    }
}
