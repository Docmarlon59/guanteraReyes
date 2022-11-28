@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Insertar cliente</h1>
@stop

@section('content')
<form action="/clientes"method="post">
    @csrf
    <div class="mb-3">
        <label for=""class="form-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for=""class="form-label">Direccion</label>
        <input id="direccion" name="direccion" type="text" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <label for=""class="form-label">Telefono</label>
        <input id="telefono" name="telefono" type="text" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for=""class="form-label">Correo</label>
        <input id="email" name="email" type="email" step="any" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <a href="/clientes" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="6">Crear</button>
    </div>
</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop