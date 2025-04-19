@extends('layouts.layout_pages')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Confirmar código') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('two-factor.login') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="input_recovery_code" class="form-label">Código</label>
                            <input type="password" name="recovery_code" id="input_recovery_code" class="form-control">
                        </div>

                        <div class="row mb-0">
                            <div class="col offset-md-0">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirmar') }}
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