@extends('layouts.layout_pages')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Reestablecer contraseña') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{$request->route('token')}}">
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $request->email }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <label for="inputPassword" class="form-label">Contraseña</label>
                            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Tu contraseña debe contener de 8 a 10 caracteres">
                            <label for="inputPasswordConfirm" class="form-label">Confirmar contraseña</label>
                            <input type="password" name="password_confirmation" id="inputPasswordConfirm" class="form-control">
                        </div>

                        <div class="row mb-0">
                            <div class="col offset-md-0">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reestablecer contraseña') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection