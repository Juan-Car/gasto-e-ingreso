@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="page-header text-center">Mi Saldito</h1>
    <hr>
    <div class="row">
        <div class="col-md-10 offset-md-1">            
        	<div class="table">
			<table class="table">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">Id</th>
			      <th scope="col">Mes</th>
			      <th scope="col">Usuario</th>
			      <th scope="col">Monto</th>
			      <th scope="col">Precio</th>
			      <th scope="col">Saldo</th>
			      <th scope="col">Fecha</th>			      
			    </tr>
			  </thead>
			 <tbody>
			 	@foreach($saldos as $saldo)
			        <tr>
			            <th scope="row">{{$saldo->id}}</th>
			            <td>{{$saldo->ingreso->mes}}</td>
			            <td>{{$saldo->usuario->nombre}}</td>
			            <td>{{$saldo->ingreso->monto}}</td>
			            <td>{{$saldo->precio}}</td>
			            <td>{{$saldo->saldo}}</td>
			            <td>{{$saldo->updated_at}}</td>
			        </tr>
                @endforeach
			  	
			 </tbody>
			 
			</table>			
		    </div>
        </div>
    </div>
</div>

@endsection