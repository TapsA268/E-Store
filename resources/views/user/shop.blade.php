@extends('layouts.layout_clean')

@section('content')

<div class="container">
    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Tu carrito</span>
          <span class="badge bg-primary rounded-pill">{{\Cart::count()}}</span>
        </h4>
        <ul class="list-group mb-3">
        @foreach(Cart::content() as $item)
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">{{$item->name}} </h6>
            </div>
            <span class="text-body-secondary">${{number_format($item->price,2)}}</span>
          </li>
        @endforeach
        @if (session('codigo_promocion')&&session('descuento'))
          <li class="list-group-item d-flex justify-content-between bg-body-tertiary">
            <div class="text-success">
              <h6 class="my-0">Cupón</h6>
              <small>{{session('codigo_promocion')}}</small>
            </div>
            <span class="text-success">−${{number_format(Cart::total()*session('descuento'),2,'.')}}</span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>Total (MX)</span>
            <strong>{{number_format(Cart::total()-(Cart::total()*session('descuento')),2,'.')}}</strong>
          </li>
        </ul>
        @else
          <li class="list-group-item d-flex justify-content-between">
            <span>Total (MX)</span>
            <strong>{{number_format(Cart::total(),2,'.')}}</strong>
          </li>
        @endif
        
        @if(session('success'))
          <div class="alert alert-success">
            {{ session('success') }}
          </div>
        @endif

        @if(session('error'))
          <div class="alert alert-danger">
            {{ session('error') }}
          </div>
        @endif

        <form class="card p-4" method="POST" action="{{route('promo_code')}}">
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
        <form class="needs-validation" novalidate >
        {{-- action="{{route('procesar')}}" method="POST">
          @csrf --}}
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Apellido</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

              <div class="col-12">
                <label for="address" class="form-label">Calle</label>
                <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                <div class="invalid-feedback">
                  Please enter your shipping address.
                </div>
              </div>
  
              <div class="col-md-3">
                <label for="state" class="form-label">Ciudad</label>
                <select class="form-select" id="state" required>
                  <option value="">Choose...</option>
                  <option value="1">Aguascalientes</option>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>
  
              <div class="col-md-3">
                <label for="country" class="form-label">Estado</label>
                <select class="form-select" id="country" required>
                  <option value="">Choose...</option>
                  <option value="1">Aguascalientes</option>
                  <option value="2">Puebla</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>
  
              
  
              <div class="col-md-3">
                <label for="state" class="form-label">País</label>
                <select class="form-select" id="state" required>
                  <option value="">Choose...</option>
                  <option value="1">México</option>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>
  
              <div class="col-md-3">
                <label for="zip" class="form-label">Código Postal</label>
                <input type="text" class="form-control" id="zip" placeholder="" required>
                <div class="invalid-feedback">
                  Zip code required.
                </div>
              </div>
            </div>
          <hr class="my-4">

          <h4 class="mb-3">Métodos de pago</h4>
            <script src="https://www.paypal.com/sdk/js?client-id=AQy5awtN8J7Aazn7xygI5Pz-Oi_b5z1htL2uqEg29kqjPgMAMUZ7LnFosppHxId_EYDlIv7uOm69bB2g&currency=MXN"></script>
            <div id="paypal-button-container"></div>
          <div class="my-3">
            
          </div>

          <div class="row gy-3">
            
          </div>

          <hr class="my-4">
          <button class="w-100 btn btn-primary btn-lg" type="submit">Comprar</button>
        </form>
        
        <script>
            paypal.Buttons({
                style:{
                    color:'blue',
                    shape:'pill',
                    label:'pay'
                },
                createOrder: function(data,actions){
                    return actions.order.create({
                        purchase_units:[{
                            amount:{
                                value: "{{number_format(Cart::total()-(Cart::total()*session('descuento')),2,'.')}}"
                            }
                        }]
                    });
                },
                onApprove:function(data,actions){
                    actions.order.capture().then(function(detalles){
                        console.log(detalles);
                    })
                },
                onCancel: function(data){
                    alert("Pago cancelado")
                }
            }).render('#paypal-button-container');
        </script>
        
      </div>
    </div>
@endsection