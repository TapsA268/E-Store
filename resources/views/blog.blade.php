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
            <li class="breadcrumb-item"><a href="{{url('/Blog')}}">Blog</a></li>
        </ol>
    </nav>
    <div class="row mb-2">
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-primary-emphasis">Accesorios</strong>
                <h3 class="mb-0">Los 10 Mejores Dispositivos Electrónicos para el Hogar Inteligente</h3>
                <div class="mb-1 text-body-secondary">Nov 12</div>
                <p class="card-text mb-auto">En esta publicación, puedes destacar una lista de los mejores dispositivos electrónicos para convertir un hogar común en un hogar inteligente. 
                    Podrías incluir dispositivos como termostatos inteligentes, sistemas de iluminación inteligente, cerraduras de puertas inteligentes, cámaras de seguridad y asistentes de voz.</p>
                <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                    Continue reading
                    <svg class="bi"><use xlink:href="#chevron-right"/></svg>
                </a>
                </div>
                <div class="col-auto d-none d-lg-block">
                <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success-emphasis">Smartphones</strong>
                <h3 class="mb-0">Comparación de las Últimas Generaciones de Teléfonos Inteligentes</h3>
                <div class="mb-1 text-body-secondary">Nov 11</div>
                <p class="mb-auto">En este artículo, puedes comparar las características, especificaciones y rendimiento de las últimas generaciones de teléfonos inteligentes de diferentes fabricantes. 
                    Puedes analizar aspectos como la calidad de la cámara, la duración de la batería, el diseño, la potencia del procesador y las opciones de conectividad.</p>
                <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                    Continue reading
                    <svg class="bi"><use xlink:href="#chevron-right"/></svg>
                </a>
                </div>
                <div class="col-auto d-none d-lg-block">
                <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-primary-emphasis">Accesorios</strong>
                <h3 class="mb-0">Los Dispositivos Electrónicos Más Innovadores del Año</h3>
                <div class="mb-1 text-body-secondary">Nov 12</div>
                <p class="card-text mb-auto">En esta publicación, podrías resaltar los dispositivos electrónicos más innovadores que han sido lanzados al mercado recientemente. 
                    Puedes cubrir desde dispositivos portátiles hasta dispositivos para el hogar, como dispositivos de realidad aumentada, drones, dispositivos de monitorización de la salud, entre otros.</p>
                <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                    Continue reading
                    <svg class="bi"><use xlink:href="#chevron-right"/></svg>
                </a>
                </div>
                <div class="col-auto d-none d-lg-block">
                <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-danger-emphasis">Laptops</strong>
                <h3 class="mb-0">Guía de Compra de Portátiles: Cómo Elegir el Mejor para tus Necesidades</h3>
                <div class="mb-1 text-body-secondary">Nov 11</div>
                <p class="mb-auto">En este artículo, puedes ofrecer una guía detallada para ayudar a los lectores a elegir el portátil perfecto para sus necesidades.
                    Puedes incluir factores como el tamaño y peso, la potencia del procesador, la memoria RAM, la capacidad de almacenamiento, la duración de la batería y el presupuesto.</p>
                <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                    Continue reading
                    <svg class="bi"><use xlink:href="#chevron-right"/></svg>
                </a>
                </div>
                <div class="col-auto d-none d-lg-block">
                <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-primary-emphasis">Accesorios</strong>
                <h3 class="mb-0">Los Avances Tecnológicos en Dispositivos Wearables y su Impacto en la Salud</h3>
                <div class="mb-1 text-body-secondary">Nov 12</div>
                <p class="card-text mb-auto">En esta publicación, puedes explorar los avances tecnológicos en dispositivos wearables y cómo están impactando en la salud y el bienestar de las personas. 
                    Puedes hablar sobre dispositivos como relojes inteligentes, pulseras de actividad física, monitores de sueño, dispositivos de seguimiento de la actividad física, entre otros.</p>
                <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                    Continue reading
                    <svg class="bi"><use xlink:href="#chevron-right"/></svg>
                </a>
                </div>
                <div class="col-auto d-none d-lg-block">
                <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-danger-emphasis">Laptops</strong>
                <h3 class="mb-0">Consejos para Mejorar el Rendimiento de tu Ordenador</h3>
                <div class="mb-1 text-body-secondary">Nov 11</div>
                <p class="mb-auto">Esta publicación puede ofrecer consejos prácticos para mejorar el rendimiento y la eficiencia de los ordenadores. 
                    Puedes cubrir temas como la optimización del sistema operativo, la limpieza del disco duro, la gestión de programas y procesos en segundo plano, la actualización de hardware, y la seguridad informática.</p>
                <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                    Continue reading
                    <svg class="bi"><use xlink:href="#chevron-right"/></svg>
                </a>
                </div>
                <div class="col-auto d-none d-lg-block">
                <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection