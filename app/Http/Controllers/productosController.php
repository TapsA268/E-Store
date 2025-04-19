<?php

namespace App\Http\Controllers;

use App\Models\productos;
use Illuminate\Http\Request;

class productosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Muestra los productos de 6 en 6 a causa del paginador(paginate)
        $productos=productos::paginate(6);
        return view('products.products')->with('productos',$productos);
    }

    public function admin()
    {
        //Muestra los productos de 10 en 10 a causa del paginador(paginate)
        $productos=productos::paginate(10);
        return view('admin.crud_products')->with('productos',$productos);
    }

    public function showAuth()
    {
        //Muestra los productos de 6 en 6 a causa del paginador(paginate)
        $productos=productos::paginate(6);
        return view('home')->with('productos',$productos);
    }

    public function ProductsLaptop()
    {
        //Muestra los productos de 6 en 6 a causa del paginador(paginate)
        $productos=productos::where('categoria','=',1)->paginate(6);
        return view('products.products_laptop')->with('productos',$productos);
    }

    public function ProductsSmartphone()
    {
        //Muestra los productos de 6 en 6 a causa del paginador(paginate)
        $productos=productos::where('categoria','=',2)->paginate(6);
        return view('products.products_smartphone')->with('productos',$productos);
    }

    public function ProductsSmartTV()
    {
        //Muestra los productos de 6 en 6 a causa del paginador(paginate)
        $productos=productos::where('categoria','=',3)->paginate(6);
        return view('products.products_smartTV')->with('productos',$productos);
    }

    public function ProductsImpresora()
    {
        //Muestra los productos de 6 en 6 a causa del paginador(paginate)
        $productos=productos::where('categoria','=',4)->paginate(6);
        return view('products.products_printer')->with('productos',$productos);
    }

    public function ProductsAudifonos()
    {
        //Muestra los productos de 6 en 6 a causa del paginador(paginate)
        $productos=productos::where('categoria','=',5)->paginate(6);
        return view('products.products_headphones')->with('productos',$productos);
    }

    public function ProductsAccesorios()
    {
        //Muestra los productos de 6 en 6 a causa del paginador(paginate)
        $productos=productos::where('categoria','=',6)->paginate(6);
        return view('products.products_accesories')->with('productos',$productos);
    }

    public function ProductsBocinas()
    {
        //Muestra los productos de 6 en 6 a causa del paginador(paginate)
        $productos=productos::where('categoria','=',7)->paginate(6);
        return view('products.products_speakers')->with('productos',$productos);
    }

    public function ProductsCamaras()
    {
        //Muestra los productos de 6 en 6 a causa del paginador(paginate)
        $productos=productos::where('categoria','=',8)->paginate(6);
        return view('products.products_cameras')->with('productos',$productos);
    }

    public function ProductsMonitores()
    {
        //Muestra los productos de 6 en 6 a causa del paginador(paginate)
        $productos=productos::where('categoria','=',9)->paginate(6);
        return view('products.products_monitors')->with('productos',$productos);
    }

    public function ProductsTeclados()
    {
        //Muestra los productos de 6 en 6 a causa del paginador(paginate)
        $productos=productos::where('categoria','=',10)->paginate(6);
        return view('products.products_keyboards')->with('productos',$productos);
    }

    public function ProductsTablet()
    {
        //Muestra los productos de 6 en 6 a causa del paginador(paginate)
        $productos=productos::where('categoria','=',11)->paginate(6);
        return view('products.products_hero')->with('productos',$productos);
    }

    public function ProductsOferta()
    {
        //Muestra los productos de 6 en 6 a causa del paginador(paginate)
        $productos=productos::where('oferta','=',true)->paginate(6);
        return view('products.products_oferta')->with('productos',$productos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(productos $productos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(productos $productos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, productos $productos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(productos $productos)
    {
        //
    }
}
