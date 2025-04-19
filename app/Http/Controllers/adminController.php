<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function dashboard(Request $request)
    {
        // Lógica para el panel de administración
        return view('admin.crud_products');
    }
}
