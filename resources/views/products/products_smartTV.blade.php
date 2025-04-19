@extends('layouts.layout_categories')

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
    <li class="breadcrumb-item"><a href="{{url('/productos/SmartTV')}}">SmartTV's</a></li>
  </ol>
</nav>
@include('products.partials.msg')
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          @foreach($productos as $row)
          <div class="col">
            <div class="card shadow-sm">
            <img src="{{ asset('media/' . $row->imagen) }}" width="100%" height="150">
              <div class="card-body">
                <h5 class="card-title">{{$row->nombre}}</h5>
                <p class="card-text">${{$row->precio}}</p>
                <div class="d-flex justify-content-between align-items-center">
                <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="popover" data-bs-title="Popover title" data-bs-content="{{$row->descripcion}}">Detalles</button>
                  <form action="{{route('add')}}" method="post">
                      @csrf
                      <input type="hidden" name="id" value="{{$row->id}}"></input>
                      <button type="submit" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#Modal">Agregar al carrito</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
    </div>
@endsection