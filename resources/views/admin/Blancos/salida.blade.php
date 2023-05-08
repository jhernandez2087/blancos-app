@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>salida de blancos</h1>
@stop

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <p>Bienvenido a la salida de blancos</p>

                    <form action="{{ route('admin.blancos.salida') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="numero_serie">Número de Serie</label>
                            <input type="text" name="numero_serie" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Dar Salida</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop