@extends('layouts.master')

@section('content')
	<div class="container mt-5 mb-5">

		<div class="row">	

			<div class="col-sm-4 col-12 d-flex justify-content-center">
				<img src="{{$Pelicula->poster}}" style="height:500px">
			</div>
			
			<div class="col-sm-8 col-12">
				<div class="card" >

					<div class="card-header">
	    				<h3 class="card-title">Titulo: {{$Pelicula->title}}</h3>
	  				</div>

					<div class="card-body">
					    <h4 style="">Año: {{$Pelicula->year}}</h4>
				    	<h4 style="">Director: {{$Pelicula->director}}</h4>
						<p class="card-text">{{$Pelicula->synopsis}}</p>

						@if($Pelicula->rented==true)
							<p class="card-text">Estado: Pelicula alquilada actualmente</p>

							<a href="{{route('updateRented',$Pelicula->id)}}" class="btn btn-danger">Delvolver Pelicula {{$Pelicula->id}}</a>

						@else

							<p class="card-text">Estado: Pelicula no alquilada actualmente</p>
							<a href="{{route('updateRented',$Pelicula->id)}}" class="btn btn-success">Alquilar Pelicula {{$Pelicula->id}}</a>

						@endif
					</div>

					<div class="card-footer">

						@if(auth()->user())

					    <a href="{{route('editMovie',$Pelicula->id)}}" class="btn btn-primary" role="button">Editar Pelicula</a>

					    <a href="{{route('deleteMovie',$Pelicula->id)}}" class="btn btn-danger" role="button">Eliminar Pelicula</a>

					    @endif

						<a href="{{route('index')}}" class="btn btn-basic" role="button">Volver al Listado</a>
					</div>

				</div>
			</div>
		</div>
	</div>
@stop