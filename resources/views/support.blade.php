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
            <li class="breadcrumb-item"><a href="{{url('/Soporte técnico')}}">Soporte técnico</a></li>
        </ol>
    </nav>
    <h1>Atención al cliente</h1>
        <h3>Horario de atención al cliente</h3>
        <p class="lead">
            Lunes a domingos: 9:00 a.m. - 8:00 p.m. (hora local) 
        </p>
        <h3>Formas de contacto</h3>
        <p class="lead">
            <a href="{{url('/Contacto')}}">Formulario de contacto en línea</a>
        </p>
        <h3>Tiempo de respuesta esperado</h3>
        <p class="lea">
            Nuestro equipo de atención al cliente se esfuerza por responder a todas las consultas dentro de un plazo de 24 horas laborables.
        </p>
</div>
@endsection