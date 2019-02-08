@extends('layouts.app')

@section('content')

<h3>Utilisateur : {{$utilisateur ->name}}</h3>

<h4>Il suit : {{$utilisateur->jeLesSuit->count()}} personne</h4>
<h4>Il me suivent : {{$utilisateur->ilsMeSuivent->count()}} personne</h4>

@auth
    @if(Auth::id() != $utilisateur->id)
        @if($utilisateur->ilsMeSuivent->contains(Auth::id()))
            <a href="/suivre/{{$utilisateur->id}}"> Arreter de suivre </a>
            je le suis

        @else
            <a href="/suivre/{{$utilisateur->id}}"> Suivre </a>
            je le suis pas
            @endif
    @endif
@endauth
<br />

 @include('_chansons', ['chansons' => $utilisateur->chansons])

    

@endsection