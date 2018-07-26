@extends('layouts.master')

@section('content')

	<div class="container-fluid pr-0 pl-0 ">
		<div id="carouselExampleControls" class="carousel slide hidden-xs" data-ride="carousel">

		    <ol class="carousel-indicators">
		      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		      <li data-target="#myCarousel" data-slide-to="1"></li>
		      <li data-target="#myCarousel" data-slide-to="2"></li>
		    </ol>

		  <div class="carousel-inner">

		    <div class="carousel-item active">
		      <img class="d-block w-100" src="https://blogdesuperheroes.es/wp-content/plugins/BdSGallery/BdSGaleria/56630.jpg" alt="First slide">
		    </div>

		    <div class="carousel-item">
		      <img class="d-block w-100" src="https://blogdesuperheroes.es/wp-content/plugins/BdSGallery/BdSGaleria/68197.jpg" alt="Second slide">
		    </div>

		    <div class="carousel-item">
		      <img class="d-block w-100" src="https://jurassicoutpost.com/wp-content/uploads/2017/11/JWFK-trailer.jpg" alt="Third slide">
		    </div>

		  </div>

		  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">

		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>

		  </a>

		  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>

		</div>

		<div class="p-2 bg-secondary text-white">
			<h2 class="text-center" style="margin-bottom:20px;">Peliculas añadidas recientemente</h2>
		</div>
	</div>

	@include('catalog.showMain')

	<style type="text/css">
		
		.carousel-inner > .carousel-item{
			object-fit: scale-down;
			height: 50vh;
			width: 100%;
			background: no-repeat center center scroll;
		    -webkit-background-size: cover;
		    -moz-background-size: cover;
		    -o-background-size: cover;
		    background-size: cover;
		}

		.carousel-inner{
 			height: 100%;
		}

	</style>
	
@endsection