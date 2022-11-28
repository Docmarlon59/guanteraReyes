@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Insertar articulo</h1>
@stop

@section('content')
<form action="/articulos"method="post">
    @csrf
    <div class="mb-3">
        <label for=""class="form-label">Codigo</label>
        <input id="codigo" name="codigo" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for=""class="form-label">Descripcion</label>
        <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <label for=""class="form-label">Cantidad</label>
        <input id="cantidad" name="cantidad" type="text" step="any" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for=""class="form-label">Precio</label>
        <input id="precio" name="precio" value="0.00" type="text" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="6">Crear</button>
    </div>
</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop