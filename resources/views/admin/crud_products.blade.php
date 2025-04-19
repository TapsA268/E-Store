@extends('layouts.layout_pages')

@section('content')

<!-- Barra lateral -->
<!-- <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px; height: 580px;">
  <ul class="nav nav-pills flex-column mb-auto">
    <li class="nav-item">
      <a href="{{url('Gestion de productos')}}" class="nav-link active" aria-current="page">
        Productos
      </a>
    </li>
    <li>
      <a href="{{url('Actualizar información')}}" class="nav-link text-white">
        Clientes
      </a>
    </li>
  </ul>
  <hr>
  <div class="dropdown">
    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
      <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
      <strong>mdo</strong>
    </a>
    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
      <li><a class="dropdown-item" href="#">New project...</a></li>
      <li><a class="dropdown-item" href="#">Settings</a></li>
      <li><a class="dropdown-item" href="#">Profile</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="#">Sign out</a></li>
    </ul>
  </div>
</div> -->

<!-- Tabla -->
<div class="container">
  <div class="row justify-content-center">
    <div class="table-responsive">
      <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th>Producto </th>
            <th>Categoria</th>
            <th>Stock </th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Imagen</th>
            <th></th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        @foreach($productos as $row)
          <tr>
            <td> {{$row->nombre}}  </td>
            <td> {{$row->categoria}}</td>
            <td>{{$row->stock}} </td>
            <td> {{$row->descripcion}}</td>
            <td> {{$row->precio}}</td>
            <td>{{$row->imagen}}</td>
            <td>
              <button type="button" class="btn btn-sm btn-outline-warning">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                </svg>
              </button>
            </td>
            <td>
              <button type="button" class="btn btn-sm btn-outline-danger">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square" viewBox="0 0 16 16">
                  <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                </svg>
              </button>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <div class="container mt-5">
    <!-- Paginador -->
    <div class="d-flex justify-content-center">
      <!-- dependiendo de la cantidad de productos en la BD se crearán los links -->
      {{ $productos->links() }}
    </div>
  </div>
</div>
@endsection