@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registro de blancos</h1>
@stop



@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <p>Bienvenido al registro de blancos</p>

                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('admin.blancos.registro') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="categoria">Categoría</label>
                                <select name="categoria" class="form-control">
                                    <option value="almohada">Almohada</option>
                                    <option value="cobija">Cobija</option>
                                    <option value="sabana">Sábana</option>
                                    <!-- Agrega más opciones según tus necesidades -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="color">Color</label>
                                <select name="color" class="form-control">
                                    <option value="rojo">Rojo</option>
                                    <option value="azul">Azul</option>
                                    <option value="verde">Verde</option>
                                    <!-- Agrega más opciones según tus necesidades -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tamano">Tamaño</label>
                                <select name="tamano" class="form-control">
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <!-- Agrega más opciones según tus necesidades -->
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </form>
                    </div>
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