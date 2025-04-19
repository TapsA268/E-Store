@extends('layouts.layout_clean')

@section('content')

<div class="container justify-content-center">
    <h4 class="display-5 text-center">Editar información del perfil</h4>
    <hr class="my-4">
    @if (!auth()->user()->two_factor_secret) 
        No tienes activa la verificación por dos pasos.
        <form action="{{url('user/two-factor-authentication')}}" method="post">
            @csrf
            <div class="row mb-3">
                <div class="col offset-md-6">
                    <button class="btn btn-outline-success" type="submit">Activar</button>
                </div>
            </div>
        </form>
    @else
        Tienes activa la verificación por dos pasos.
        <form action="{{url('user/two-factor-authentication')}}" method="post">
            @method('Delete')
            @csrf
            <div class="row mb-3">
                <div class="col offset-md-6">
                    <button class="btn btn-outline-danger" type="submit">Desactivar</button>
                </div>
            </div>
        </form>
    @endif

    @if (session('status')=='two-factor-authentication-enabled')
        {!!auth()->user()->twoFactorQrCodeSvg()!!}
        <p>Guarda estos códigos en un lugar seguro</p>
        @foreach (json_decode(decrypt(auth()->user()->two_factor_recovery_codes)) as $code )
            <li>{{$code}}</li>
        @endforeach
    @endif

    <div class="row mb-3">
        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Usuario actual') }}</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control" name="name" value="{{Auth::user()->name}}" disabled>
        </div>
    </div>

    <div class="row mb-3">
        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email actual') }}</label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control" name="email" value="{{Auth::user()->email}}" disabled>
        </div>
    </div>

    {{-- Formulario para editar información del usuario --}}
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <form class="needs-validation" method="POST" action="{{ route('user-profile-information.update') }}">
    <!-- Token de seguridad para enviar el formulario     -->
    @csrf
    @method('PUT')
    
        <div class="row mb-3">
            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nuevo usuario') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" required>
            </div>
        </div>

        <div class="row mb-3">
            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Nuevo email') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col offset-md-6">
                <button class="btn btn-outline-warning" type="submit">Actualizar perfil</button>
            </div>
        </div>
    </form>
    
    
    <hr class="my-4">
    {{--Formulario para cambiar contraseña --}}
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <form method="POST" action="{{ route('user-password.update') }}">
    <!-- Token de seguridad para enviar el formulario     -->
    @csrf
    @method('PUT')
        
            <div class="row mb-3">
                <label for="current_password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña actual') }}</label>
    
                <div class="col-md-6">
                    <input id="current_password" type="password" class="form-control" name="current_password" required>
    
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputPassword" class="col-md-4 col-form-label text-md-end">Nueva contraseña</label>

                <div class="col-md-6">
                    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Tu contraseña debe contener de 8 a 10 caracteres">
                </div>
            </div>
            
            <div class="row mb-3">
                <label for="inputPasswordConfirm" class="col-md-4 col-form-label text-md-end">Confirmar contraseña</label>

                <div class="col-md-6">
                    <input type="password" name="password_confirmation" id="inputPasswordConfirm" class="form-control">
                </div>
            </div>
            
            <div class="row mb-3">
                <div class="col offset-md-6">
                    <button class="btn btn-outline-warning" type="submit">Actualizar contraseña</button>
                </div>
            </div>
        </form>
</div>
@endsection