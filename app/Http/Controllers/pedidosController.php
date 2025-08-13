<?php

namespace App\Http\Controllers;

use App\Models\pedido_producto;
use Illuminate\Http\Request;
use App\Models\pedidos;
use App\Models\productos;
use Cart;
use Illuminate\Support\Facades\DB;

class pedidosController extends Controller
{
    public function store(Request $request)
    {
        DB::beginTransaction();

        try {
            $subtotal = Cart::subtotal();
            $tax = $subtotal * 0.15;
            $descuento = session('descuento') ?? 0;
            $descuento_valor = $subtotal * $descuento;
            $total = $subtotal + $tax - $descuento_valor;

            // Crear el pedido
            $pedido = pedidos::create([
                'user_id' => auth()->id(),
            ]);

            // Guardar los productos del pedido
            foreach (Cart::content() as $item) {
                pedido_producto::create([
                    'pedido_id' => $pedido->id,
                    'producto_id' => $item->id,
                    'cantidad' => $item->qty,
                ]);

                // Disminuir el stock del producto
                $producto = productos::find($item->id);
                if ($producto) {
                    $producto->stock -= $item->qty;
                    $producto->save();
                }
            }

            Cart::destroy(); // Vaciar el carrito
            DB::commit();

            return redirect()->route('cart.checkout', $pedido->id)->with('success', 'Pedido registrado correctamente.');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Error al registrar el pedido: ' . $e->getMessage());
        }
    }
}
