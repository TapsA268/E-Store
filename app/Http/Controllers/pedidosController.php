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

            return redirect()->route('user.userOrder')->with('success', 'Pedido registrado correctamente.');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Error al registrar el pedido: ' . $e->getMessage());
        }
    }

    public function showOrder()
    {
        $detalles = DB::table('pedido_producto')
            ->join('productos', 'productos.id', '=', 'pedido_producto.producto_id')
            ->join('pedidos', 'pedidos.id', '=', 'pedido_producto.pedido_id')
            ->join('users', 'users.id', '=', 'pedidos.user_id')
            ->select(
                'pedido_producto.pedido_id',
                'users.name as cliente',
                'productos.nombre as producto',
                'pedido_producto.cantidad',
                'productos.precio'
            )
            ->orderBy('pedido_producto.pedido_id')
            ->get();

        $agrupado = $detalles->groupBy('pedido_id');
        return view('user.userOrder', compact('agrupado'));
    }
}
