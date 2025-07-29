<!doctype html>
<html lang="es">

<head>
    <title>Iniciar Sesión</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- Style sheet CSS -->
    <link rel="stylesheet" href="{{ asset('assets/styles.css') }}">

    <!-- script recaptcha -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body
    style="
background-image: url(/images/Background.svg);
height: 100vh;
background-repeat: no-repeat;
background-size: cover;
background-position: center;
display: flex;
align-items: center;
justify-content: center;
">
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-7 text-center text-lg-start">
                <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3 text-center">Bienvenido a tienda Hey!</h1>
                <p class="col-lg-10 fs-4 text-center">
                    ¿Tienes un minuto? ¡Mira nuestra mercancía!
                </p>
            </div>
            <div class="col-md-10 mx-auto col-lg-5 border rounded-5 bg-body-primary">
                <!-- Validaciones de login y captcha -->
                @if ($errors->has('email') || $errors->has('password'))
                    <div class="alert alert-danger" role="alert">
                        Las credenciales son incorrectas.
                    </div>
                @endif

                @if ($errors->has('g-recaptcha-response'))
                    <div class="alert alert-danger" role="alert">
                        Por favor, completa el reCAPTCHA.
                    </div>
                @endif

                <form id="login-form" action="{{ route('login') }}" method="post" class="p-3 p-md-4">
                    @csrf
                    <!-- Token de seguridad -->
                    <label for="inputUser" class="form-label">Correo Electrónico</label>
                    <input type="text" name="email" id="inputUser" class="form-control">
                    <label for="inputPassword" class="form-label">Contraseña</label>
                    <input type="password" name="password" id="inputPassword" class="form-control"
                        aria-labelledby="passwordHelpBlock">
                    <div class="g-recaptcha mt-4" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}" data-theme="dark">
                    </div>
                    <!-- Condicion para mostrar link para restablecer contraseña -->
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('¿Olvidaste tu contraseña?') }}
                        </a>
                    @endif
                    <div class="container d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-light" id="submit" type="submit">Iniciar Sesión</button>
                    </div>
                </form>
                <p>¿Aún no tienes una cuenta? <a href="{{ route('register') }}" class="btn btn-link">Regístrate Aquí</a>
                </p>
            </div>
        </div>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>

    <!-- Scripts -->
    <script src="{{ asset('assets/Script.js') }}"></script>
</body>

</html>
