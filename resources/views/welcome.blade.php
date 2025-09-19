@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h1 class="h4 mb-3">Bootstrap + Vite OK</h1>

                    <button class="btn btn-primary" data-bs-toggle="tooltip" data-bs-title="¡Hola!">
                        Probar tooltip
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
