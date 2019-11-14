@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="page-header text-center">Lista de Items</h1>
    <hr>
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <a href="{{route('items.create')}}" class="btn btn-primary mb-1">Nuevo Item</a>
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
			      <th scope="col">Nombre de Item</th>
			      <th scope="col">descripcion</th>			      
			    </tr>
			  </thead>
			 <tbody>
			  	@foreach($items as $item)
			    <tr>
			      <td><a href="{{route('items.edit', $item->id)}}" class="btn btn-success btn-sm">Editar</a>
			      	<form action="{{route('items.destroy', $item->id)}}" method="POST">
			      		@csrf
			      		@method('DELETE')
			      		<button type="submit" class="btn btn-danger btn-sm mt-1" onclick="return confirm('Quiere borrar el registro?')">Eliminar</button> 
			      	</form>
                  </td>

			      <th scope="row">{{$item->id}}</th>
			      <td>{{$item->nombres}}</td>
			      <td>{{$item->descripcion}}</td>
			    </tr>
			    @endforeach
			  </tbody>
			 
			</table>			
		    </div>
        </div>
    </div>
</div>

@endsection