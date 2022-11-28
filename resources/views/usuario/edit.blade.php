@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar usuario</h1>
@stop

@section('content')
<form action="/usuarios/{{ $usuario->id }}"method="post">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for=""class="form-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1" value="{{ $usuario->name }}">
    </div>
    <div class="mb-3">
        <label for=""class="form-label">Email</label>
        <input id="email" name="email" type="email" class="form-control" tabindex="2" value="{{ $usuario->email }}">
    </div>
    <div class="mb-3">
        <label for=""class="form-label">Password</label>
        <input id="password" name="password" type="password" class="form-control" tabindex="3" value="{{ $usuario->password }}">
    </div>
    <div class="mb-3">
        <a href="/usuarios" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="6">Actualizar</button>
    </div>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop