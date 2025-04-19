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
            <li class="breadcrumb-item"><a href="{{url('/Términos y condiciones')}}">Términos y condiciones</a></li>
        </ol>
    </nav>
    <h1>Términos y condiciones</h1>
    <h3>1. Aceptación de los Términos y Condiciones: </h3>
    Al acceder y utilizar nuestro sitio web Hey!, aceptas cumplir con los siguientes términos y condiciones. Si no estás de acuerdo con estos términos, por favor, abstente de utilizar nuestro sitio.

    <h3>2. Uso del Sitio:</h3>
    a. Te comprometes a utilizar nuestro sitio únicamente con fines legítimos y de acuerdo con estos términos y condiciones.
    b. No debes utilizar nuestro sitio de manera que pueda dañar, deshabilitar, sobrecargar o perjudicar el funcionamiento de nuestro sitio o interferir con el uso y disfrute de otras personas.

    <h3>3. Privacidad:</h3>
    Nos comprometemos a proteger tu privacidad. Por favor, revisa nuestra Política de Privacidad para obtener más información sobre cómo recopilamos, utilizamos y protegemos tu información personal.

    <h3>4. Propiedad Intelectual:</h3>
    a. Todo el contenido en nuestro sitio, incluyendo textos, gráficos, logotipos, imágenes y software, está protegido por leyes de propiedad intelectual y es propiedad de [Nombre de tu tienda] o de terceros.
    b. No estás autorizado para reproducir, distribuir, modificar, mostrar públicamente, ejecutar públicamente, comunicar al público, crear trabajos derivados, transmitir o explotar de cualquier otra manera cualquier material o contenido de nuestro sitio sin nuestro consentimiento previo por escrito.

    <h3>5. Cambios en los Términos:</h3>
    Nos reservamos el derecho de modificar estos términos y condiciones en cualquier momento. Los cambios entrarán en vigor inmediatamente después de su publicación en nuestro sitio. Se te recomienda revisar periódicamente los términos y condiciones para estar al tanto de cualquier modificación.

    <h3>6. Limitación de Responsabilidad:</h3>
    a. [Nombre de tu tienda] no será responsable por cualquier daño directo, indirecto, incidental, especial o consecuente que surja del uso o la imposibilidad de usar nuestro sitio o cualquier producto comprado a través de nuestro sitio.
    b. [Nombre de tu tienda] no garantiza la exactitud, integridad o actualidad de la información en nuestro sitio. Nos reservamos el derecho de corregir cualquier error u omisión en cualquier parte del sitio.

    <h3>7. Legislación Aplicable:</h3>
    Estos términos y condiciones se rigen por las leyes de los Estados Unidos Mexicanos. Cualquier disputa relacionada con estos términos y condiciones estará sujeta a la jurisdicción exclusiva de los tribunales competentes en los Estados Unidos Mexicanos.
</div>
@endsection