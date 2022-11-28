@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Cliente</h1>
@stop

@section('content')
<form action="/clientes/{{ $cliente->id }}"method="post">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for=""class="form-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1" value="{{ $cliente->nombre }}">
    </div>
    <div class="mb-3">
        <label for=""class="form-label">Direccion</label>
        <input id="direccion" name="direccion" type="text" class="form-control" tabindex="2" value="{{ $cliente->direccion }}">
    </div>
    <div class="mb-3">
        <label for=""class="form-label">Telefono</label>
        <input id="telefono" name="telefono" type="text" class="form-control" tabindex="3" value="{{ $cliente->telefono }}">
    </div>
    <div class="mb-3">
        <label for=""class="form-label">Correo</label>
        <input id="email" name="email" type="email" step="any" class="form-control" tabindex="4" value="{{ $cliente->email }}">
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