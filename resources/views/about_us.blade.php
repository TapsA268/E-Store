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
            <li class="breadcrumb-item"><a href="{{url('/Sobre nosotros')}}">Sobre nosotros</a></li>
        </ol>
    </nav>
    <h1 class="px-5">Sobre nosotros</h1>
    <h2>Nuestra historia</h1>
    <p class="lead">Hey!, fue fundada en el año 2023 por un grupo de apasionados por la tecnología con el objetivo de ofrecer productos electrónicos innovadores y de alta calidad a precios accesibles. Desde entonces, hemos estado comprometidos con la excelencia en el servicio al cliente y la satisfacción del usuario.</p>
    <p class="lead">
    <!-- Div para el acordeon -->
    <div class="accordion" data-bs-theme="dark" id="accordionFAQ">
        <div class="accordion-item">
            <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <h4>Misión y visión</h3>
            </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionFAQ">
            <div class="accordion-body">
                <p class="lead">
                En Hey!, nuestra misión es proporcionar a nuestros clientes productos electrónicos de última generación que mejoren su vida diaria y les brinden experiencias excepcionales. Nos esforzamos por ser líderes en innovación y calidad en el mercado de la tecnología.
                </p>
            </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <h4>Valores</h4>
            </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
            <div class="accordion-body">
                <p class="lead">
                    Nos regimos por valores fundamentales como la integridad, la innovación, la responsabilidad y la excelencia en el servicio al cliente. Estos valores son la base de todas nuestras acciones y decisiones empresariales.
                </p>
            </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <h4>Equipo</h4>
            </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
            <div class="accordion-body">
                <p class="lead">
                    Nuestro equipo está formado por expertos en tecnología, ingenieros, diseñadores y profesionales de servicio al cliente que comparten una pasión por la innovación y la excelencia. Nos dedicamos a ofrecer productos y servicios que superen las expectativas de nuestros clientes.
                </p>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection