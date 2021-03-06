@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <h1>Listado de usuarios</h1>
@stop

@section('content')
   <a href="users/create" class="btn btn-primary mb-3">Agregar Usuario</a>

<table id="users" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Correo</th>
            <th scope="col">Direccion</th>
            <th scope="col">Telefono</th>
            <th scope='col'>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->direccion}}</td>
            <td>{{$user->telefono}}</td>
            <td class="td-actions text-right">
            <a href="{{ route('users.edit', $user->id)}}" class="btn btn-warning"> <i class="material icons">Editar </i></a>
            <form action="{{ route('users.delete', $user->id) }}" method="POST" style="display: inline-block;">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="sumbit" rel="tooltip">
            <i class="material-icons">Eliminar</i>
            </button>
            </form>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('#users').DataTable({
        "lengthMenu": [[5,10, 50, -1], [5, 10, 50, "All"]]
    });
} );
</script>

@stop