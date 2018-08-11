<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class APICatalogController extends Controller
{
    public function index() {
		return response()->json( Movie::all() );
	}

	public function show($id){

		$Pelicula = Movie::find($id);
		return response()->json($Pelicula);
	}


	public function store(Request $request){
        //guarda los datos
        //$Pelicula = Movie::create($request->all());
        $Pelicula = new Movie;

        $Pelicula->title = $request['title'];
        $Pelicula->director = $request['director'];
        $Pelicula->year = $request['year'];
        $Pelicula->poster = $request['poster'];
        $Pelicula->synopsis = $request['synopsis'];
        $Pelicula->rented = 'false';
        $Pelicula->save();

        return response()->json($Pelicula);
    }

    public function update(Request $request, $id){
        //actualizar registro
        
        $Pelicula = Movie::find($id);
        $Pelicula->fill($request->all());
        $Pelicula->save();

        return 'Actualizado Correctamente';
    }

    public function destroy($id){
        //eliminar 
        Movie::find($id)->delete();
        return 'Eliminado Correctamente';
    }

    public function Rented($id){

    	$Pelicula = Movie::find($id);

    	if ($Pelicula->rented == 'true'){

            $Pelicula->rented = 'false';
            $Pelicula->save();
        	return 'Devuelto Correctamente';

    	}else{

            $Pelicula->rented = 'true';
            $Pelicula->save();
        	return 'Alquilado Correctamente';
        }    	
    }

    public function indexHome(){
        $peliculas = Movie::orderBy('id','DESC')->take(3)->get();
        return response()->json($peliculas);
    }
}
