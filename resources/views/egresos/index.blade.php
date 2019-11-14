@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="page-header text-center">Mis Compras</h1>
    <hr>
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <a href="{{route('egresos.create')}}" class="btn btn-primary mb-1">Nueva Compra</a>
            @if (Session::has('message'))
		        <div class="alert alert-info">{{ Session::get('message') }}
		        </div>
            @endif
        	<div class="table">
			<table class="table">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">Id</th>
			      <th scope="col">Mes</th>
			      <th scope="col">Item</th>
			      <th scope="col">Usuario</th>
			      <th scope="col">Cantidad</th>
			      <th scope="col">Precio</th>
			      <th scope="col">Fecha</th>			      
			    </tr>
			  </thead>
			 <tbody>
			 	@foreach($egresos as $egreso)
			        <tr>
			            <th scope="row">{{$egreso->id}}</th>
			            <td>{{$egreso->ingreso->mes}}</td>
			            <td>{{$egreso->item->nombres}}</td>
			            <td>{{$egreso->usuario->nombre}} {{$egreso->usuario->apellido}}</td>
			            <td>{{$egreso->cantidad}}</td>
			            <td>{{$egreso->precio}}</td>
			            <td>{{$egreso->updated_at}}</td>
			        </tr>
                @endforeach
			  	
			 </tbody>
			 
			</table>			
		    </div>
        </div>
    </div>
</div>

@endsection