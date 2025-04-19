@extends('layouts.layout_pages')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Verificar email') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="needs-validation" method="POST" action="{{ route('verification.send') }}">
                        <!-- Token de seguridad para enviar el formulario     -->
                        @csrf
                            <div class="row mb-3">
                                <div class="col offset-md-6">
                                    <button class="btn btn-outline-warning" type="submit">Verificar correo</button>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection