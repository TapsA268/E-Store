@extends('layouts.layout_clean')

@section('content')
    <div class="container">
        <div class="row g-5">
            <div class="col-md-5 col-lg-4 order-md-last">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-primary">Tu carrito</span>
                    <span class="badge bg-primary rounded-pill">{{ \Cart::count() }}</span>
                </h4>
                <ul class="list-group mb-3">
                    @foreach (Cart::content() as $item)
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">{{ $item->name }} </h6>
                            </div>
                            <span class="text-body-secondary">${{ number_format($item->price, 2) }}</span>
                        </li>
                    @endforeach
                    @if (session('codigo_promocion') && session('descuento'))
                        <li class="list-group-item d-flex justify-content-between bg-body-tertiary">
                            <div class="text-success">
                                <h6 class="my-0">Cupón</h6>
                                <small>{{ session('codigo_promocion') }}</small>
                            </div>
                            <span
                                class="text-success">−${{ number_format(Cart::total() * session('descuento'), 2, '.') }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (MX)</span>
                            <strong>{{ number_format(Cart::total() - Cart::total() * session('descuento'), 2, '.') }}</strong>
                        </li>
                </ul>
            @else
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total (MX)</span>
                    <strong>{{ number_format(Cart::total(), 2, '.') }}</strong>
                </li>
                @endif

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <form class="card p-4" method="POST" action="{{ route('promo_code') }}">
                    @csrf
                    <p class="lead">Ingresa tu código para realizar descuento</p>
                    <div class="input-group">
                        <input type="text" class="form-control" name="codigo_promocion" placeholder="Código de promo">
                        <button type="submit" class="btn btn-secondary">Enviar</button>
                    </div>
                </form>

            </div>
            <div class="col-md-7 col-lg-8">
                <h4 class="mb-3">Formulario de compra</h4>
                <hr class="my-4">
                <script src="https://www.paypal.com/sdk/js?client-id={{ env('PAYPAL_CLIENT_ID') }}&currency=MXN"></script>
                <div id="paypal-button-container"></div>
                <div class="my-3"></div>

                <div class="row gy-3"></div>
                <hr class="my-4">

                <form action="{{ route('pedidos.store') }}" method="POST">
                    @csrf
                    <button class="btn btn-primary rounded-pill" type="submit">Confirmar pedido</button>
                </form>

                <script>
                    paypal.Buttons({
                        style: {
                            color: 'blue',
                            shape: 'pill',
                            label: 'pay'
                        },
                        @php
                            $subtotal = Cart::subtotal(); // sin impuestos
                            $descuento = session('descuento') ?? 0;
                            $descuento_valor = $subtotal * $descuento;
                            $impuesto_valor = $subtotal * 0.15;
                            $total_final = $subtotal + $impuesto_valor - $descuento_valor;
                        @endphp

                        createOrder: function(data, actions) {
                            return actions.order.create({
                                purchase_units: [{
                                    amount: {
                                        currency_code: "MXN",
                                        value: "{{ number_format($total_final, 2, '.', '') }}",
                                        breakdown: {
                                            item_total: {
                                                currency_code: "MXN",
                                                value: "{{ number_format($subtotal, 2, '.', '') }}"
                                            },
                                            tax_total: {
                                                currency_code: "MXN",
                                                value: "{{ number_format($impuesto_valor, 2, '.', '') }}"
                                            },
                                            discount: {
                                                currency_code: "MXN",
                                                value: "{{ number_format($descuento_valor, 2, '.', '') }}"
                                            }
                                        }
                                    },
                                    items: [
                                        @foreach (Cart::content() as $item)
                                            {
                                                name: "{{ $item->name ?? 'Producto' }}",
                                                unit_amount: {
                                                    currency_code: "MXN",
                                                    value: "{{ number_format($item->price, 2, '.', '') }}"
                                                },
                                                quantity: "{{ $item->qty }}"
                                            },
                                        @endforeach
                                    ]
                                }]
                            });
                        },
                        onApprove: function(data, actions) {
                            actions.order.capture().then(function(detalles) {
                                console.log(detalles);
                            })
                        },
                        onCancel: function(data) {
                            alert("Pago cancelado")
                        }
                    }).render('#paypal-button-container');
                </script>

            </div>
        </div>
    @endsection
