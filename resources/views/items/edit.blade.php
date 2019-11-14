@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-4 offset-md-4">
			<h1 class="page-header text-center">Actualizacion de Item</h1>
			@if (Session::has('message'))
			    <div class="alert alert-info">{{ Session::get('message') }}
			    </div>
            @endif
		    <form class="form-group" method="POST" action="{{route('items.update', $item->id)}}">
		    	@csrf
		    	@method('PUT')
			    <div class="form-group">
			    	<strong>Nombre:</strong>
			    	<input type="text" class="form-control" name="nombres" placeholder="Escriba el nombre de item" value="{{$item->nombres}}" required>
			    	<strong>Descripcion:</strong>
			    	<input type="text" class="form-control" name="descripcion" placeholder="Escriba la descripcion" value="{{$item->descripcion}}" required>			    			    	
			    </div>			     
			    <div class="col-md-12 text-center">
			    <a href="{{route('items.index')}}" class="btn btn-danger">Cancelar</a>
			    <button type="submit" class="btn btn-primary">Editar</button>
			    </div>
		    </form>
		</div>
	</div>
</div>

@endsection