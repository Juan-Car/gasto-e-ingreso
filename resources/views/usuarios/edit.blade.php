@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-4 offset-md-4">
			<h1 class="page-header text-center">Actualizar Datos</h1>
		    <form class="form-group" method="POST" action="{{ route('usuarios.update', $usuario ?? ''->id)}}" enctype="multipart/form-data">
		    	@csrf
		    	@method('PUT')
			    <div class="form-group">
			    	<strong>Nombres:</strong>
			    	<input type="text" class="form-control" name="nombre" value="{{$usuario ?? ''->nombre}}" placeholder="Escriba su Nombres" required>
			    	<strong>Apellidos:</strong>
			    	<input type="text" class="form-control" name="apellido" value="{{$usuario ?? ''->apellido}}" placeholder="Escriba su Apellidos" required>
			    	<strong>Fecha de Nacimiento:</strong>
			    	<input type="date" class="form-control" name="fecha" value="{{$usuario ?? ''->fecha}}" required>
			    	<strong>Ocupacion:</strong>
			    	<input type="text" class="form-control" name="ocupacion" value="{{$usuario ?? ''->ocupacion}}" placeholder="Escriba su Ocupacion" required>
			    	<strong>Direccion:</strong>
			    	<input type="text" class="form-control" name="direccion" value="{{$usuario ?? ''->direccion}}" placeholder="Escriba su Direccion" required>
			    	<strong>Telefono:</strong>
			    	<input type="text" class="form-control" name="telefono" value="{{$usuario ?? ''->telefono}}" placeholder="Escriba su Telefono" required>
			    	<strong>Breve Biografia:</strong>
			    	<input type="text" class="form-control" name="biografia" value="{{$usuario ?? ''->biografia}}" placeholder="Escriba su Breve Biografia" required>
			    	<strong>IMG</strong>
			    	<input type="file" name="img"  value="{{$usuario ?? ''->img}}">			    	
			    </div>			     
			    <div class="col-md-12 text-center">
			    <a href="" class="btn btn-danger">Cancelar</a>
			    <button type="submit" class="btn btn-primary">Guardar</button>
			    </div>
		    </form>
		</div>
	</div>
</div>

@endsection