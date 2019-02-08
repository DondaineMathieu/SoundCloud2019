<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chanson;
use Illuminate\Support\Facades\Auth;

class MonControleur extends Controller
{
    public function index() {
        $chansons = Chanson::all();
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
}
