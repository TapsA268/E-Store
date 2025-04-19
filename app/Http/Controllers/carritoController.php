<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//se usa el modulo de productos
use App\Models\productos; 
//se usa el paquete Cart
use Cart;

class carritoController extends Controller
{
    //función para agregar al carrito
    public function add(Request $request){
        $producto=productos::find($request->id);
    
        if (empty($producto))
            return redirect('/');

        Cart::add(
            $producto->id,
            $producto->nombre,
            1,
            $producto->precio
        );

        return redirect()->back()->with("success","Producto agregado");
    }

    //función para visualizar el carrito
    public function checkout(){
        return view('cart.checkout');
    }

    //función para ver el carrito en el formulario de compra
    public function checkout_form(){
        return view('user.shop');
    }

    //función para eliminar productos del carrito
    public function removeItem(Request $request){
        $rowId = $request->input('rowId');
        if ($rowId) {
            Cart::remove($rowId);
            return redirect()->back()->with("success", "Producto eliminado del carrito");
        } else {
            return redirect()->back()->with("error", "No se pudo eliminar el producto");
        }
    }

    //función para incrementar unidades del producto
    public function increaseQty(Request $request){
        $item=Cart::get($request->rowId);
        $qty=$item->qty+1;
        Cart::update($request->rowId,$qty);
        return redirect()->back();
    }

    //función para decrementar unidades del producto
    public function decreaseQty(Request $request){
        $item=Cart::get($request->rowId);
        $qty=$item->qty-1;
        Cart::update($request->rowId,$qty);
        return redirect()->back();
    }
}
