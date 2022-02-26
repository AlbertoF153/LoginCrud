@extends('adminlte::page')

@section('title', 'Crear Usuario')

@section('content_header')
   <h1>Crear Usuario</h1>
@stop

@section('content')
    
<form action="{{route('users.store')}}" method="POST">
  @csrf
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <div class="col-md-6">
     <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                  @error('name')
                     <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                              </span>
                              @enderror
      </div>
    </div>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Correo</label>
    <input id="email" name="email" type="text" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Direccion</label>
    <input id="direccion" name="direccion" type="text" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Telefono</label>
    <input id="telefono" name="telefono" type="text"  class="form-control" tabindex="4">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Contraseña</label>
    <input id="password" name="password" type="password"  class="form-control" tabindex="5">
  </div>
  <a href="/home" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop