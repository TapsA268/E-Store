@extends('layouts.layout_pages')

@section('content')

<div class="container">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
        @if (Route::has('login'))
            @auth
            <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
            @else
            <li class="breadcrumb-item"><a href="{{url('/productos')}}">Home</a></li>
            @endauth
        @endif
            <li class="breadcrumb-item"><a href="{{url('/Contacto')}}">Contacto</a></li>
        </ol>
    </nav>
    <h1>Formulario de contacto</h1>
    <p class="lead">
        Escribe tus datos y tus comentarios, recuerda ser muy específico, nosotros nos pondremos en contacto por medio de correo electrónico.
    </p>
    <form class="needs-validation" >
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Nombre(s)</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Un nombre es requerido
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Apellido</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Apellido requerido
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-body-secondary">(Optional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Ingresa un correo válido.
              </div>
            </div>

            <div class="col-12">
              <label for="comments" class="form-label">Comentarios</label>
              <textarea class="form-control" id="comments" rows="3"></textarea>
            </div>
          <button class="btn btn-primary" type="submit">Enviar</button>
    </form>
</div>
@endsection