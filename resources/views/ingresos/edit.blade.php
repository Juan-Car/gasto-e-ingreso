@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-4 offset-md-4">
			<h1 class="page-header text-center">Cambiar dato de ingreso</h1>
			@if (Session::has('message'))
			    <div class="alert alert-info">{{ Session::get('message') }}
			    </div>
            @endif
		    <form class="form-group" method="POST" action="{{route('ingresos.update', $ingreso->id)}}">
		    	@csrf
		    	@method('PUT')
			    <div class="form-group">
			    	<strong>Mes:</strong>
			    	<input type="text" class="form-control" name="mes" placeholder="Escriba el mes actual" value="{{$ingreso->mes}}" required>
			    	<strong>Depositante:</strong>
			    	<input type="text" class="form-control" name="depositante" placeholder="Escriba el nombre del depositante" value="{{$ingreso->depositante}}" required>
			    	<strong>Monto:</strong>
			    	<input type="text" class="form-control" name="monto" placeholder="Escriba el monto ingresado" value="{{$ingreso->monto}}" required>
			    	<strong>Concepto:</strong>
			    	<input type="text" class="form-control" name="concepto" placeholder="El monto ingresado por concepto..." value="{{$ingreso->concepto}}" required>			    			    	
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