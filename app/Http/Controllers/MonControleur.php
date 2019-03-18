<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chanson;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\DB;



class MonControleur extends Controller
{
    public function index() {
        $chansons = Chanson::all();
        Chanson::categories();
        return view("index", ["chansons" => $chansons]);
    }

    public function nouvelle() {
        return view("nouvelle");
    }

    public function creer(Request $request) {
        if($request -> hasFile('chanson') && $request->file('chanson') -> isValid()){
            $c = new Chanson();
            $c->nom = $request -> input('nom');
            $c->style = $request -> input('style');
            $c->utilisateur_id = Auth::id();

            $c->fichier = $request->file('chanson')->store("/public/chansons/".Auth::id());
            $c->fichier = str_replace("public", "/storage", $c->fichier);
            $c->save();
        }

        return redirect("/");
    }
    
    public function utilisateur($id) {
        $utilisateur = User::find($id);
        if($utilisateur == false) {
            return abort(404);
        } return view("utilisateur", ["utilisateur" => $utilisateur]);
    }

    public function suivre($id) {
        $utilisateur = User::find($id);
        if($utilisateur == false) {
            return abort(404);
        }
        $utilisateur->ilsMeSuivent()->toggle(Auth::id());
        return back()->with('toastr', ['statut' =>'success', 'message' => 'Suivi modifié']);
    }

    public function categories($style){
        $categories =Chanson::whereRaw("style=?", [$style])->get();
        return view("index", ["chansons" => $categories]);
    }

    public function allCategories(){
        $categories = Chanson::categories();
        return view("_allCategories", ['categories'=> $categories]);
    }

    public function recherche($s) {
        $utilisateur = User::whereRaw("name LIKE CONCAT('%', ?,'%')", [$s])->get();
        $chansons = Chanson::whereRaw("nom LIKE CONCAT('%', ?,'%')", [$s])->get();
        return view("recherche", ["utilisateur"=>$utilisateur, "chansons"=>$chansons]);
    }

    public function testajax() {
        return redirect('/recherche/ut');
    }
}
