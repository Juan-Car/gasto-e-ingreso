@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="page-header text-center">Nota de Ingresos</h1>
    <hr>
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <a href="{{route('ingresos.create')}}" class="btn btn-primary mb-1">Agregar Ingreso</a>
            @if (Session::has('message'))
		        <div class="alert alert-info">{{ Session::get('message') }}
		        </div>
            @endif
        	<div class="table">
			<table class="table">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">Acciones</th>
			      <th scope="col">Id</th>
			      <th scope="col">Mes</th>
			      <th scope="col">Depositante</th>
			      <th scope="col">Monto</th>
			      <th scope="col">Concepto</th>
			      <th scope="col">Fecha</th>			      
			    </tr>
			  </thead>
			 <tbody>
			  	@foreach($ingresos as $ingreso)
			    <tr>
			      <td><a href="{{route('ingresos.edit', $ingreso->id)}}" class="btn btn-success btn-sm">Editar</a></td>
			      <th scope="row">{{$ingreso->id}}</th>
			      <td>{{$ingreso->mes}}</td>
			      <td>{{$ingreso->depositante}}</td>
			      <td>{{$ingreso->monto}}</td>
			      <td>{{$ingreso->concepto}}</td>
			      <td>{{$ingreso->updated_at}}</td>
			    </tr>
			    @endforeach
			  </tbody>
			 
			</table>			
		    </div>
        </div>
    </div>
</div>

@endsection