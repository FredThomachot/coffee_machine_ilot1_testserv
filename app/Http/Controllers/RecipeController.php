<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Boisson;



class RecipeController extends Controller{

/*    function liste(){
        $boisson= DB::select('SELECT * FROM drink');
        return view('pages/recettes', ['boisson' => $boisson]);
    }

    function showBoisson($code){
    	$boisson= DB::select('SELECT * FROM drink WHERE code=?', [$code]);
		return view('pages/boisson', ['boisson' => $boisson]);

	}
}
*/
    
    function listeNom(){ // LISTE PAR NOM //
		$boissons = Boisson::orderBy('nom')->get();
        return view('pages/recettes', ['boissons' => $boissons]);
    }
    
    function listeId(){ // LISTE PAR ID //
        $boissons = Boisson::orderBy('id')->get();
        return view('pages/recettes', ['boissons' => $boissons]);
    }
 
    
    function listePrix(){ // LISTE PAR PRIX //
        $boissons = Boisson::orderBy('prix')->get();
        return view('pages/recettes', ['boissons' => $boissons]);
    }

    function liste(){ // LISTE DES BOISSONS NON TRIES //
        $boissons = Boisson::all();
        return view('pages/recettes', ['boissons' => $boissons]);
    }

    function showBoisson($id){ // AFFICHER LE DETAIL D'UNE BOISSON //
        $boisson= Boisson::where('id',$id)->get();
        return view('pages/boisson', ['boisson' => $boisson]);
    }

    function addBoisson(){
        return view('pages/ajouteruneboisson');
    }

     function updateBoisson($id){
        $boisson= Boisson::where('id',$id)->get();
        return view('pages/update', ['boisson' => $boisson]);
    }


   


}











