@extends('layouts.app')

@section('content')
<div class="card" style="width: 25rem; min-height: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Résultats d'utilisateurs :</h5>
          
            <ul class="list-group">
                    @foreach ($utilisateur as $u)
                    <li class="list-group-item"  style="border: none;"><a href="/utilisateur/{{$u->id}}">{{$u->name}}</a></li>
                    @endforeach
            </ul>
        </div>
</div>
       
<div class="card" style="width: 25rem; min-height: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Résultats chansons :</h5>

          <ul class="list-group">
          @foreach ($chansons as $c)

            <li class="list-group-item"  style="border: none;"><a href="#" class="chanson" data-file="{{$c->fichier}}">{{$c->nom}}</a> ecrite par <a href="/utilisateur/{{$c->utilisateur->id}}">{{$c->utilisateur->name}}</li>
          @endforeach
            </ul>
        </div>
</div>

@endsection
