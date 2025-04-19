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
            <li class="breadcrumb-item"><a href="{{url('/Preguntas frecuentes')}}">Preguntas frecuentes</a></li>
        </ol>
    </nav>
    <h1>Preguntas frecuentes</h1>
    <div class="accordion" data-bs-theme="dark" id="accordionFAQ">
        <div class="accordion-item">
            <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <h3>¿Cuáles son los métodos de pago aceptados?</h3>
            </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionFAQ">
            <div class="accordion-body">
                <p class="lead">
                    Aceptamos pagos con tarjeta de crédito, débito y PayPal
                </p>
            </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <h3>¿Qué hago si mi producto llega dañado o defectuoso?</h3>
            </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
            <div class="accordion-body">
                <p class="lead">
                    Si tu producto llega dañado o con defectos de fabricación, contáctanos dentro de los 7 días posteriores a la recepción para gestionar un reemplazo o reembolso.
                </p>
            </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <h3>¿Ofrecen garantía en sus productos?</h3>
            </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
            <div class="accordion-body">
                <p class="lead">
                    Sí, todos nuestros productos cuentan con una garantía estándar de un año. Para más detalles, consulta nuestra página de garantía.
                </p>
            </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                <h3>¿Cuál es la política de envío y entrega?</h3>
            </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
            <div class="accordion-body">
                <p class="lead">
                    El tiempo de envío varía según la ubicación y el tipo de producto. Ofrecemos envío estándar y express, con opciones de seguimiento en línea.
                </p>
            </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                <h3>¿Cómo solicito asistencia técnica para un producto?</h3>
            </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
            <div class="accordion-body">
                <p class="lead">
                Completa nuestro formulario de solicitud de asistencia técnica en línea y uno de nuestros representantes de soporte técnico se pondrá en contacto contigo a la brevedad posible.
                </p>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection