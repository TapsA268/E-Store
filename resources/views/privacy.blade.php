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
            <li class="breadcrumb-item"><a href="{{url('/Política de privacidad')}}">Política de privacidad</a></li>
        </ol>
    </nav>
    <h1>Política de privacidad</h1>
    <h3>1. Recopilación de Información:</h3>
    a. Recopilamos información personal que nos proporcionas voluntariamente al registrarte, realizar una compra o completar formularios en nuestro sitio.
    b. También recopilamos información automáticamente a través del uso de cookies y tecnologías similares cuando visitas nuestro sitio.

    <h3>2. Uso de la Información:</h3>
    a. Utilizamos la información recopilada para procesar transacciones, personalizar tu experiencia, mejorar nuestro sitio y enviar comunicaciones relacionadas con tu compra.
    b. No compartiremos tu información personal con terceros no afiliados sin tu consentimiento, excepto cuando sea necesario para procesar tu transacción o cumplir con la ley.

    <h3>3. Seguridad:</h3>
    Implementamos medidas de seguridad para proteger tu información personal contra accesos no autorizados, divulgación, alteración y destrucción.

    <h3>4. Acceso y Control de la Información:</h3>
    Puedes acceder y actualizar tu información personal en cualquier momento a través de tu cuenta en nuestro sitio. También tienes el derecho de solicitar la eliminación de tus datos personales.

    <h3>5. Cambios en la Política de Privacidad:</h3>
    Nos reservamos el derecho de modificar nuestra Política de Privacidad en cualquier momento. Los cambios serán efectivos inmediatamente después de su publicación en nuestro sitio.

    <h3>6. Preguntas y Contacto:</h3>
    Si tienes alguna pregunta sobre nuestra Política de Privacidad, por favor contáctanos a través del formulario de contacto.</div>
@endsection
