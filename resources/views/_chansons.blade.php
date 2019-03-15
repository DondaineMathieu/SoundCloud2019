<div class="liste">
    <ul class="list-group list-group-flush">

    @foreach ($chansons as $c)
    <li class="list-group-item"><a href="#" class="chanson" data-file="{{$c->fichier}}">{{$c->nom}}</a> ecrite par <a href="/utilisateur/{{$c->utilisateur->id}}">{{$c->utilisateur->name}}
    @endforeach

    </ul>
</div>