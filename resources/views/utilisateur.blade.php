@extends('layouts.app')

@section('content')

<div class="card text-center" style="width : 18rem;">
    <img class="card-img-top" src="/images/logo_jaxsong.png" alt="image profil">

    <div class="card-body">
        <h5 class="card-title">{{$utilisateur ->name}}</h5>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">You Follow : {{$utilisateur->jeLesSuit->count()}}</li>
        <li class="list-group-item">Followers : {{$utilisateur->ilsMeSuivent->count()}}</li>
    </ul>
</div>
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