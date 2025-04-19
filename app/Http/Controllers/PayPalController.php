<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\pedidos;
use App\Models\productos;
use App\Models\direcciones;
use Cart;

class PayPalController extends Controller
{
    public function paymentCallback(Request $request)
    {
        $nombre = $request->input('payer_name');
        $apellidos = $request->input('payer_surname');
        $direccion = $request->input('shipping_address');

        // Crea un nuevo pedido
        $pedido = new pedidos();
        $pedido->user_id = auth()->id();
        $pedido->save();

        // Crea una nueva dirección para el pedido
        $pedido->direccion()->create([
            'nombre' => $nombre,
            'apellidos' => $apellidos,
            'direccion' => $direccion['line1'],
            'ciudad' => $direccion['city'],
            'estado' => $direccion['state'],
            'codigo_postal' => $direccion['postal_code']
        ]);

        // Asocia los productos al pedido si es necesario
        // (suponiendo que ya has obtenido los productos del carrito)
        Cart::clear();
        
    }
}
