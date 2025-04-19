<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\direccion;

class direccionController extends Controller
{
    // Crear una nueva dirección
    public function Store (Request $request){
        $direcciones = new direccion();
        $direcciones->fill([
        'calle' => $request->calle,
        'ciudad' => $request->ciudad,
        'estado' => $request->estado,
        'pais' => $request->pais,
        'codigo_postal' => $request->codigo_postal
        ]);
        $direcciones->save();
    }
}
