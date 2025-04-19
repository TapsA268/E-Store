@extends('layouts.layout_clean')

@section('content')
<div class="container">
    <h3 class="display-4">Devolver pedido</h3>
    <form novalidate>
    <!-- Token de seguridad para enviar el formulario     -->
    
    <div class="row">
        <div class="col">
            <div class="form-floating mb-3">
                <input id="name" type="text" name="name" class="form-control" disabled >
                <label for="name">Nombre</label>
            </div>
        </div>
        <div class="col">
            <div class="form-floating mb-3">
                <input id="email" type="email" name="email" class="form-control">
                <label for="email">Correo electrónico</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-floating mb-3">
                <input id="num_pedido" type="text" name="num_pedido" class="form-control">
                <label for="num_pedido">Número de pedido</label>
            </div>
        </div>
        <div class="col">
            <div class="form-floating mb-3">
                <input id="fecha_pedido" type="text" name="fecha_pedido" value="15/02/2024" class="form-control" disabled>
                <label for="fecha_pedido">Fecha de pedido</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-floating">
                <select class="form-select" id="floatingSelect" aria-label="Elige el producto a cancelar">
                    <option value="1">Laptop HP</option>
                    <option value="1">Smartphone Samsung Galaxy S21</option>
                </select>
                <label for="floatingSelect">Elige el producto a devolver</label>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
            <div class="form-floating">
                <textarea class="form-control" id="razon_de_devolucion" style="height: 100px"></textarea>
                <label for="razon_de_devolucion">Razón para devolver</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <br>
            <p class="lead">Forma de envio de reembolso</p>
            <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
              <label class="form-check-label" for="credit">Tarjeta de crédito</label>
            </div>
            <div class="form-check">
              <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="debit">Tarjeta de débito</label>
            </div>
            <div class="form-check">
              <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="paypal">PayPal</label>
            </div>
        </div>
    </div>
        <br>
    <div>
        <button class="btn btn-outline-warning" type="submit">Devolver </button>
    </div>
    </form>
    
</div>
@endsection