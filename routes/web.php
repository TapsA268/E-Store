<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productosController;
use App\Http\Controllers\carritoController;
use App\Http\Controllers\promocionesController;
use App\Http\Controllers\pedidosController;
use App\Http\Controllers\direccionController;
use App\Http\Controllers\adminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Index
Route::get('/', function () {
    return view('welcome');
});

//Home si el usuario está verificado
Route::middleware(['auth','verified'])->get('home',[productosController::class, 'showAuth'])->name('home');

//Catalogo
Route::get('productos', [productosController::class, 'index'])->name('products');
Route::get('productos/Laptop',[productosController::class, 'ProductsLaptop'])->name('products_laptop');
Route::get('productos/Smartphone',[productosController::class, 'ProductsSmartphone'])->name('products_smartphone');
Route::get('productos/SmartTV',[productosController::class, 'ProductsSmartTV'])->name('products_smartTV');
Route::get('productos/Impresoras',[productosController::class, 'ProductsImpresora'])->name('products_printer');
Route::get('productos/Audífonos',[productosController::class, 'ProductsAudifonos'])->name('products_headphone');
Route::get('productos/Accesorios',[productosController::class, 'ProductsAccesorios'])->name('products_accesories');
Route::get('productos/Altavoces',[productosController::class, 'ProductsBocinas'])->name('products_speaker');
Route::get('productos/Cámaras',[productosController::class, 'ProductsCamaras'])->name('products_camera');
Route::get('productos/Monitores',[productosController::class, 'ProductsMonitores'])->name('products_monitor');
Route::get('productos/Teclados',[productosController::class, 'ProductsTeclados'])->name('products_keyboard');

//Términos y condiciones
Route::view('Términos y condiciones','terms')->name('terms');

//Políticas 
Route::view('Política de privacidad','privacy')->name('privacy');

//FAQ
Route::view('Preguntas frecuentes','FAQ')->name('FAQ');

//Soporte técnico
Route::view('Soporte técnico','support')->name('support');

//Blog
Route::view('Blog','blog')->name('blog');

//Contacto
Route::view('Contacto','contact')->name('contact');

//Sobre nosotros
Route::view('Sobre nosotros','about_us')->name('about_us');

//Recompensas
Route::view('Recompensas','rewards')->name('rewards');


//Carrito
Route::middleware(['auth','verified'])->post('cart/add', [carritoController::class, 'add'])->name('add');
Route::middleware(['auth','verified'])->get('cart/checkout', [carritoController::class, 'checkout'])->name('cart.checkout');
Route::middleware(['auth','verified'])->get('cart/clear', [carritoController::class, 'clear']);
Route::middleware(['auth','verified'])->post('cart/remove', [carritoController::class, 'removeItem'])->name('remove');

Route::middleware(['auth','verified'])->post('cart/increaseQty', [carritoController::class, 'increaseQty'])->name('increaseQty');
Route::middleware(['auth','verified'])->post('cart/decreaseQty', [carritoController::class, 'decreaseQty'])->name('decreaseQty');

//Formulario de compra y pago
Route::middleware(['auth','verified'])->get('Formulario de compra', [carritoController::class, 'checkout_form'])->name('checkout_form');
Route::middleware(['auth','verified'])->post('Agregar promo',[promocionesController::class, 'aplicarPromocion'])->name('promo_code');
Route::middleware(['auth','verified'])->post('/Confirmar Pedido',[pedidosController::class,'store'])->name('pedidos.store');

//Vista de pedidos
Route::middleware(['auth','verified'])->get('/Mis pedidos', [pedidosController::class, 'showOrder'])->name('user.userOrder');

//Crud de administrador
Route::middleware(['auth','verified', 'admin'])->group(function () {
    Route::get('/admin/Gestion_de_productos', [productosController::class, 'admin'])->name('admin.dashboard');
    // Otras rutas del administrador
});

Route::get('Gestion de clientes',function(){
    return view('admin.crud_customers');
});

//Usuario
Route::view('/perfil/editar','profile.edit')->middleware('auth');

//Devolver pedido
Route::get('Devolver pedido',function(){
    return view('user.returnOrder');
});

//Cancelar pedido
Route::get('Cancelar pedido',function(){
    return view('user.cancelOrder');
});

