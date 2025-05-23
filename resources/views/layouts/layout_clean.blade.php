<!doctype html>
<html lang="es">
    <head>
        <title>E-STORE</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"/>
        <link rel="stylesheet" href="{{asset('assets/styles.css')}}">
    </head>

    <body>
    <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-dark bg-dark  border-bottom border-bottom-dark" data-bs-theme="dark" id="navbar">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/')}}">Hey!</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarToggler">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('home')}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
                </svg>
              </a>
            </li>
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
            <li class="nav-item">
              <a href="{{route('cart.checkout')}}" class="nav-link">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                      <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                  </svg>
                  <span id="num_cart" class="badge bg-danger-subtle border border-danger-subtle text-danger-emphasis rounded-pill">{{\Cart::count()}} </span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                </svg>
              </a>
                <ul class="dropdown-menu text-small shadow">
                  <li><p>{{Auth::user()->name}}</p></li>
                  <li><a href="{{url('/perfil/editar')}}" class="dropdown-item">Editar perfil</a></li>
                  
                  <li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="p-3 p-md-4">
                      @csrf
                        <button class="btn btn-outline-danger" type="submit">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open" viewBox="0 0 16 16">
                            <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1"/>
                            <path d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117M11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5M4 1.934V15h6V1.077z"/>
                          </svg>
                          Cerrar Sesion 
                        </button>
                    </form>
                  </li>
                </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main>
    @yield('content')
  </main>
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
    </body>
</html>
