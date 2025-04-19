<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    use HasFactory;
    protected $fillable=["nombre","precio","imagen"];
    public function pedidos()
    {
        return $this->belongsToMany(pedidos::class)->withPivot('cantidad');
    }
}
