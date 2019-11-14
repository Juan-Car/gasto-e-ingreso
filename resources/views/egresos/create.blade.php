@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-4 offset-md-4">
			<h1 class="page-header text-center">Registro de Compra</h1>
			@if (Session::has('message'))
			    <div class="alert alert-info">{{ Session::get('message') }}
			    </div>
            @endif
		    <form class="form-group" method="POST" action="{{route('egresos.store')}}">
		    	@csrf
			    <div class="form-group">
			    	<strong>Mes:</strong>
			    	<select name="ingreso_id" class="form-control" required>
						@foreach($ingresos as $ingreso)
							<option value="{{$ingreso->id}}">{{$data->mes}}</option>
						@endforeach
				    </select>
			    	<strong>Depositante:</strong>
			    	<select name="item_id" class="form-control" required>
						@foreach($items as $item)
							<option value="{{$item->id}}">{{$item->nombres}}</option>
						@endforeach
				    </select>
			    	<strong>Monto:</strong>
			    	<select name="ingreso_id" class="form-control" required>
						@foreach($usuarios as $usuario)
							<option value="{{$usuario->id}}">{{$usuario->nombre}} {{$usuario->apellido}}</option>
						@endforeach
				    </select>
			    	<strong>Cantidad:</strong>
			    	<input type="text" class="form-control" name="cantidad" placeholder="El ingrese la cantidaa comprada" required>
			    	<strong>Precio:</strong>
			    	<input type="text" class="form-control" name="precio" placeholder="El ingrese el precio de compra" required>			    			    	
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