<!doctype html>
<html lang="es">
    <head>
        <title>E-STORE</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />

        <link rel="stylesheet" href="{{asset('assets/styles.css')}}">
        <script src="{{asset('assets/jquery-3.6.0.min.js')}}"></script>
        <script src="{{asset('assets/datatables.min.js')}}"></script>
        <link rel="manifest" href="/manifest.json">
    </head>

    <body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-dark bg-dark fixed-top border-bottom border-bottom-dark" data-bs-theme="dark" id="navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/')}}">Hey!</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarToggler">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    @if (Route::has('login'))
                        @auth
                        <li class="nav-item">
                            <a href="{{ url('/home') }}" class="nav-link active">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/></svg>
                            </a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a href="" class="nav-link" data-bs-toggle="collapse" data-bs-target="#cat-collapse" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                                </svg>
                            </a>
                                <div class="collapse" id="cat-collapse">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                        <li><a href="{{ route('login') }}" class="nav-link active">Iniciar sesión</a></li>
                                        <li><a href="{{ route('register') }}" class="nav-link active">Registrarme</a></li>
                                    </ul>
                                </div>
                        </li>
                        @endauth
                    @endif
                        <li class="nav-item dropdown">
                            <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Categorías</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('products_laptop')}}" class="dropdown-item">Laptops</a></li>
                                    <li><a href="{{ route('products_smartphone')}}" class="dropdown-item">Smartphones</a></li>
                                    <li><a href="{{ route('products_smartTV')}}" class="dropdown-item">SmartTV's</a></li>

                                    <li><a href="{{ route('products_printer')}}" class="dropdown-item">Impresoras</a></li>
                                    <li><a href="{{ route('products_headphone')}}" class="dropdown-item">Audífonos</a></li>
                                    <li><a href="{{ route('products_accesories')}}" class="dropdown-item">Accesorios</a></li>
                                    <li><a href="{{ route('products_speaker')}}" class="dropdown-item">Altavoces</a></li>
                                    <li><a href="{{ route('products_camera')}}" class="dropdown-item">Cámaras</a></li>
                                    <li><a href="{{ route('products_monitor')}}" class="dropdown-item">Monitores</a></li>
                                    <li><a href="{{ route('products_keyboard')}}" class="dropdown-item">Teclados</a></li>
                                </ul>
                        </li>
                    </ul>
                    <ul class="mb-1">
                        <form class="d-flex" role="search">
                            <div class="input-group">
                                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar" id="input-buscar">
                                <button class="btn btn-light" type="submit" disabled>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                                </svg>
                                </button>
                            </div>
                        </form>
                    </ul>
                        <!-- Buscador -->
                        <div class="content-search">
                            <div class="content-table">
                                <table id="tabla" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <td></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="{{url('/home')}}">Inicio</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="{{route('products_accesories')}}">Accesorios</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="{{route('products_smartphone')}}">Smarphones</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="{{route('products_camera')}}">Cámaras</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="{{route('products_laptop')}}">Laptops</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="{{route('products_headphone')}}">Audífonos</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="{{route('products_keyboard')}}">Teclados</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="{{route('products_speaker')}}">Altavoces</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="{{route('products_monitor')}}">Monitores</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="{{route('products_printer')}}">Impresoras</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="{{route('products_smartTV')}}">SmartTV</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="container py-5">
    <div class="row">
    <div class="col-6 col-md">
      <h5>Ayuda</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary text-decoration-none" href="{{route('FAQ')}}">Preguntas frecuentes</a></li>
        <li><a class="link-secondary text-decoration-none" href="{{route('support')}}">Soporte técnico</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Programas de fidelidad</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary text-decoration-none" href="{{route('rewards')}}">Programa de recompensas</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Blog</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary text-decoration-none" href="{{route('blog')}}">Blog</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Acerca de nosotros</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary text-decoration-none" href="{{route('contact')}}">Contacto</a></li>
        <li><a class="link-secondary text-decoration-none" href="{{route('about_us')}}">Sobre nosotros</a></li>
        <li><a class="link-secondary text-decoration-none" href="{{route('privacy')}}">Política de privacidad</a></li>
        <li><a class="link-secondary text-decoration-none" href="{{route('terms')}}">Términos y condiciones</a></li>
      </ul>
    </div>
  </div>
</footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
        <script src="{{asset('assets/Script.js')}}"></script>
        <script src="{{ asset('/register-sw.js') }}"></script>

    </body>
</html>
