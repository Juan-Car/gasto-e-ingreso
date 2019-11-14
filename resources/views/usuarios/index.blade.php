@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="page-header text-center">Lista de Usuarios</h1>
    <hr>
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <a href="{{ route('usuarios.create') }}" class="btn btn-primary mb-1">Nuevo Usuario</a>
        	<div class="table">
            
			<table class="table">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">Acciones</th>
			      <th scope="col">Nombres</th>
			      <th scope="col">Apellidos</th>
			      <th scope="col">Fecha Nacimiento</th>
			      <th scope="col">Ocupacion</th>
			      <th scope="col">Direccion</th>
			      <th scope="col">Telefono</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach($usuarios as $usuario)
			    <tr>
			      <td><a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-success btn-sm">Editar</a>
                    <form action="" method="POST">
                    	@method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                  </td>

			      <th scope="row"><a href="{{ route('usuarios.show',$usuario->id) }}">{{$usuario->nombre}}</a></th>
			      <th scope="row">{{$usuario->apellido}}</th>
			      <td>{{$usuario->fecha}}</td>
			      <td>{{$usuario->ocupacion}}</td>
			      <td>{{$usuario->direccion}}</td>
			      <td>{{$usuario->telefono}}</td>
			    </tr>
			    @endforeach
			  </tbody>
			</table>			
		    </div>
        </div>
    </div>
</div>

@endsection