<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;


class CatalogController extends Controller
{

	public function getShow($id){
		
		$Pelicula=Movie::find($id);

		//dd($Pelicula);
		return view('catalog.show', compact('Pelicula'));	
	}

	public function getIndex(){
		
		$peliculas = Movie::orderBy('id','ASC')->get();
		//dd($peliculas);

		return view('catalog.index', compact('peliculas'));
	}

	public function getCreate(){
	
		return view('catalog.create');
	}

	public function store(Request $request){
        //guarda los datos

        //Primer valida la informacion
        //$Pelicula = Movie::create($request->all());

        $Pelicula = new Movie;

        $Pelicula->title = $request['title'];
        $Pelicula->director = $request['director'];
        $Pelicula->year = $request['year'];
        $Pelicula->poster = $request['poster'];
        $Pelicula->synopsis = $request['synopsis'];
        $Pelicula->rented = 'false';
        $Pelicula->save();
        
        flash('Pelicula creada con exito')->success()->important();

        return redirect()->route('home');
    }


	public function getEdit($id){
		
		$Pelicula=Movie::find($id);
		//dd($id);
		return view('catalog.edit', compact('Pelicula'));
	}
    
    public function update(Request $request, $id){
        //actualizar registro
        $Pelicula = Movie::find($id);
        $Pelicula->fill($request->all())->save();
        flash('Pelicula editada con exito')->success()->important();
        return redirect()->route('home');
    }

    public function destroy($id){
        //eliminar 
        Movie::find($id)->delete();
        return redirect()->route('home');
    }

    public function Rented($id){

    	$Pelicula = Movie::find($id);

    	if ($Pelicula->rented == 'true'){

            $Pelicula->rented = 'false';

    	}else{

            $Pelicula->rented = 'true';
        }    	

        $Pelicula->save();

        return redirect()->route('home');
    }

    public function getDelete($id){
        
        Movie::destroy($id);
        flash('Pelicula eliminada con exito')->success()->important();
        return redirect()->route('home');
    }
}
