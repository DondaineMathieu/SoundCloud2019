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
        <li class="list-group-item list-group-action">
            @auth
                <a href="/nouvelle">Insérer sur une nouvelle chanson</a>
                @endauth
        </li>
        <li class="list-group-item">@auth
                @if(Auth::id() != $utilisateur->id)
                    @if($utilisateur->ilsMeSuivent->contains(Auth::id()))
                        <a href="/suivre/{{$utilisateur->id}}"> Arreter de suivre cet utilisateur</a>
                        
            
                    @else
                        <a href="/suivre/{{$utilisateur->id}}"> Suivre cet utilisateur </a>
                        @endif
                @endif
            @endauth
            </li>
    </ul>
</div>



 @include('_chansons', ['chansons' => $utilisateur->chansons])

@endsection