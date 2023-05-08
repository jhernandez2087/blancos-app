@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Listado de blancos</h1>
@stop

@section('content')
    <div class="container">

        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Categoría</th>
                            <th>Color</th>
                            <th>Tamaño</th>
                            <th>Número de Entradas</th>
                            <th>Número de Salidas</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blancos as $blanco)
                            <tr>
                                <td>{{ $blanco->categoria }}</td>
                                <td>{{ $blanco->color }}</td>
                                <td>{{ $blanco->tamano }}</td>
                                <td>{{ $blanco->numEntradas }}</td>
                                <td>{{ $blanco->numSalidas }}</td>
                                <td>{{ $blanco->status }}</td>
                                <td>
                                    <a href="{{ route('admin.blancos.edit', $blanco->id) }}" class="btn btn-primary">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{ $blancos->links() }}
            </div>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop