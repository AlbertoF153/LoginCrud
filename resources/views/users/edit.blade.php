@extends('adminlte::page')

@section('title', 'Editar Datos')

@section('content_header')
   <h1>Editar datos</h1>
@stop

@section('content')
    
<form action="{{route('users.update', $user->id) }}" method="POST">
  @csrf
  @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="name" name="name" type="text" class="form-control" value="{{ $user->name}}" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Correo</label>
    <input id="email" name="email" type="text" class="form-control"  value="{{ $user->email}}" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Direccion</label>
    <input id="direccion" name="direccion" type="text" class="form-control" value="{{ $user->direccion}}" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Telefono</label>
    <input id="telefono" name="telefono" type="number"  class="form-control" value="{{ $user->telefono}}" tabindex="4">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Contraseña</label>
    <input id="password" name="password" type="password"  class="form-control" tabindex="5">
  </div>
  <a href="/home" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Actualizar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop