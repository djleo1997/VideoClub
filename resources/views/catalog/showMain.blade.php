<div class="container mt-5">

	@foreach($peliculas as $pelicula)

	<div class="row mb-5">	

		<div class="col-sm-2 col-12 d-flex justify-content-center">
			<img src="{{$pelicula->poster}}" style="height:200px">
		</div>
		
		<div class="col-sm-10 col-12">

			<div class="card" >

				<div class="card-header">
    				<h3 class="card-title">Titulo: {{$pelicula->title}}</h3>
  				</div>

				<div class="card-body">
				    <h4 style="">Año: {{$pelicula->year}}</h4>
			    	<h4 style="">Director: {{$pelicula->director}}</h4>
					<p class="card-text">{{$pelicula->synopsis}}</p>
				</div>
			</div>
		</div>
		
	</div>

	@endforeach

	
</div>