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
            <li class="breadcrumb-item"><a href="{{url('/Recompensas')}}">Recompensas</a></li>
        </ol>
    </nav>
    <h2>Programa de Fidelidad HEY+</h2>
        <p>Beneficios:</p>
            <ul>
                <li>Descuentos exclusivos en productos y servicios</li>
                <li>Puntos por cada compra que se pueden canjear por recompensas</li>
                <li>Acceso a eventos especiales y promociones</li>
            </ul>
        <p>Condiciones:</p>
            <ul>
                <li>Se requiere una membresía activa</li>
                <li>Los puntos expiran después de cierto tiempo</li>
                <li>Los descuentos y recompensas están sujetos a disponibilidad y términos y condiciones</li>
            </ul>
</div>
@endsection