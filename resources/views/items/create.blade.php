@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-4 offset-md-4">
			<h1 class="page-header text-center">Registro de Item</h1>
			@if (Session::has('message'))
			    <div class="alert alert-info">{{ Session::get('message') }}
			    </div>
            @endif
		    <form class="form-group" method="POST" action="{{route('items.store')}}">
		    	@csrf
			    <div class="form-group">
			    	<strong>Nombre:</strong>
			    	<input type="text" class="form-control" name="nombres" placeholder="Escriba el nombre de item" required>
			    	<strong>Descripcion:</strong>
			    	<input type="text" class="form-control" name="descripcion" placeholder="Escriba la descripcion" required>			    			    	
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