@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registro de blancos</h1>
@stop

@section('content')
    <p>Bienvenido al registro de blancos</p>

    <form action="{{route('admin.blancos.registro')}}" method="POST">
        @csrf
        <label for="categoria">Categoria</label>
        <input  name="categoria" type="text" >
        <br>
        <label for="color">Color</label>
        <input  name="color" type="text" >
        <br>
        <label for="tamano">Tamaño</label>
        <input  name="tamano" type="text" >
        <br>
        <button type="submit">Registrar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop