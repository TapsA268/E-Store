<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\promociones;

class promocionesController extends Controller
{
    public function aplicarPromocion(Request $request)
    {
        // Obtener el código de promoción del formulario
        $codigoPromocion = $request->input('codigo_promocion');

        // Buscar el código de promoción en la base de datos
        $promocion = promociones::where('codigo', $codigoPromocion)->first();

        if ($promocion) {
            // Aplicar el descuento correspondiente a la promoción
            $descuento = $promocion->descuento;

            // Establecer una sesión para el código de promoción
            $request->session()->put('codigo_promocion', $codigoPromocion);

            // Redireccionar de vuelta con un mensaje de éxito
            return redirect()->back()->with('success', 'El código de promoción se ha aplicado correctamente.')->with('descuento', $descuento);
        } else {
            // Redireccionar de vuelta con un mensaje de error si el código de promoción no es válido
            return redirect()->back()->with('error', 'El código de promoción ingresado no es válido.');
        }
    }
}
