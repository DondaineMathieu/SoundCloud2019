@extends('layouts.app')

@section('content')

<h1>Voici les resultats d'utilisateur :</h1>
    <ul>
        @foreach ($utilisateur as $u)
        <li>
            <a href="/utilisateur/{{$u->id}}">{{$u->name}}</a>
        </li>
        @endforeach
    </ul>

<h1>Voici les resultats des chansons :</h1>
    <ul>
    @foreach ($chansons as $c)
        <li>
            <a href="#" class="chanson" data-file="{{$c->fichier}}">{{$c->nom}}</a> ecrite par <a href="/utilisateur/{{$c->utilisateur->id}}">{{$c->utilisateur->name}}<br />
        </li>
    @endforeach
    </ul>
        

@endsection