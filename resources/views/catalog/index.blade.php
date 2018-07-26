@extends('layouts.master')

@section('content')
	
	<div class="p-2 mb-5 bg-secondary text-white">
			<h2 class="text-center" style="margin-bottom:20px;">Lista de Peliculas</h2>
	</div>

	<div class="container">

		<div class="row ">
			@foreach($peliculas as $pelicula)
				
				<div class="mb-5 col-sm-4 d-flex justify-content-center">
					
					<div class="card w-75" >

		  				<img class="card-img-top" src="{{$pelicula->poster}}" alt="Card image">

		  				<div class="card-body">
		    				<h4 class="card-text">{{$pelicula->title}}</h4>
		  				</div>

		  				<div class="card-footer">
		  					<a href="{{route('showMovie',$pelicula->id)}}" class="card-link">Mas información</a>

		    				<a href="#" class="card-link">
		    					<i class="fa fa-imdb fa-2x" aria-hidden="true"></i>
		    					Link IMDB
		    				</a>
		  				</div>
		  			
	  				</div>
				</div>	

			@endforeach
		</div>

	</div>

@stop
