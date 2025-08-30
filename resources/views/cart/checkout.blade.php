@extends('layouts.layout_clean')

@section('content')

    <div class="container">
        @include('products.partials.msg')
        <div class="row justify-content-center">
            <!-- Cuenta si hay elementos, si no es así muestra el mensaje con el link al catalogo -->
            @if (Cart::count())
                <div class="table-responsive">
                    <table class="table table-dark ">
                        <thead>
                            <tr>
                                <th>Producto</th>
                                <th>Precio</th>
                                <th>Cantidad</th>
                                <th>Subtotal</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Para cada contenido como un item -->
                            @foreach (Cart::content() as $item)
                                <tr>
                                    <td> {{ $item->name }} </td>
                                    <td> ${{ number_format($item->price, 2) }} </td>
                                    <td>
                                        <div class="d-flex">
                                            <form action="{{ route('increaseQty') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="rowId" value="{{ $item->rowId }}">
                                                <button type="submit" class="btn btn-sm btn-success me-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                                        <path
                                                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                                                    </svg>
                                                </button>
                                            </form>

                                            {{ $item->qty }}

                                            <form action="{{ route('decreaseQty') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="rowId" value="{{ $item->rowId }}">
                                                <button type="submit" class="btn btn-sm btn-danger ms-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                                                        <path
                                                            d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                    <td> ${{ number_format($item->subtotal) }} </td>
                                    <td>
                                        <!-- Formulario donde se elimina el item del carrito en su totalidad -->
                                        <form action="{{ route('remove') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="rowId" value="{{ $item->rowId }}">
                                            <button type="submit" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#Modal">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                    <path
                                                        d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5" />
                                                </svg>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            <tr class="fw-boldder">
                                <td colspan="3"></td>
                                <td class="text-end">Total</td>
                                <td class="text-end">{{ Cart::total() }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{ route('checkout_form') }}" class="btn btn-outline-light">Comprar</a>
                @else
                    <a class="text-white" href="{{ route('home') }}">Agrega productos a tu carrito</a>
            @endif
        </div>
    </div>
@endsection
