@extends('layouts.layout_clean')

@section('content')
    <div class="container">
        @include('products.partials.msg')
        <div class="row justify-content-center">
            
            @foreach ($agrupado as $pedidoId => $productos)
                <div class="card mb-4">
                    <div class="card-header">
                        <strong>Pedido #{{ $pedidoId }}</strong> — Cliente: {{ $productos->first()->cliente }}
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Producto</th>
                                    <th>Cantidad</th>
                                    <th>Precio unitario</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($productos as $item)
                                    <tr>
                                        <td>{{ $item->producto }}</td>
                                        <td>{{ $item->cantidad }}</td>
                                        <td>${{ number_format($item->precio, 2) }}</td>
                                        <td>${{ number_format($item->precio * $item->cantidad, 2) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
