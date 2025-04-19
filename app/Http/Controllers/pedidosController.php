<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pedidos;
use App\Models\productos;
use App\Models\direccion;
use Cart;

class pedidosController extends Controller
{
    public function procesarPedido(Request $request)
    {
        // Validar los datos del formulario aquí si es necesario

        // Crear un nuevo pedido
        $pedido = new pedidos();
        $pedido->user_id = auth()->id(); // Suponiendo que tienes un sistema de autenticación
        $pedido->save();

        // Recorrer los elementos del carrito utilizando la librería Cart
        foreach (Cart::getContent() as $item) {
            // Buscar el producto en la base de datos
            $producto = productos::findOrFail($item->id);

            // Crear la relación en la tabla intermedia producto_pedido
            $pedido->productos()->attach($producto, [
                'cantidad' => $item->quantity,
                'precio' => $producto->precio // Suponiendo que el precio está en el modelo Producto
            ]);
        }

        // Asociar la dirección al pedido
        $pedido->direccion()->associate($direcciones);
        $pedido->save();

        // Limpiar el carrito después de procesar el pedido si es necesario
        Cart::clear();

        // Realizar cualquier otra lógica que necesites aquí

        // Redirigir o devolver una respuesta
        return redirect()->route('home');
    }
    
}
