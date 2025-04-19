@extends('layouts.layout_pages')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Confirmar contraseña') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ url('user/confirm-password') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputPassword" class="form-label">Contraseña</label>
                            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Tu contraseña debe contener de 8 a 10 caracteres">
                        </div>

                        <div class="row mb-0">
                            <div class="col offset-md-0">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirmar contraseña') }}
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