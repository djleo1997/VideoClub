@extends('layouts.master')

@section('content')
	<div class="container-fluid mb-5" style="margin-top:5%;">
		
		<div class="row mt-5" style="margin-bottom:5%;">
		   	
		   	<div class="offset-md-3 col-md-6">
		    	<div class="card">
		         	<div class="card-header text-center">
		            Añadir película
		         	</div>

		         	<div class="card-body" style="padding:30px">
		         	<!-- {{-- TODO: Abrir el formulario e indicar el método POST --}} -->	
	         		<form action="{{route('movies.store') }}" method="POST"> 
	                	<!-- {{-- TODO: Protección contra CSRF --}} -->    
	                    {{ csrf_field() }}
	                    @include('partials.form')
	                </form>  
		            <!-- {{-- TODO: Cerrar formulario --}} -->
		         	</div>
		     	</div>
		   	</div>
		</div>
	</div>

@stop