<table class="table text-center">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Ecoutes</th>
            <th scope="col">Musique</th>
            <th scope="col">Auteur</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($chansons as $c)
        <tr>
            <th scope="row">{{$c->nb_ecoute}}</th>
            <td><a href="#" class="chanson" data-file="{{$c->fichier}}">{{$c->nom}}</a> </td>
            <td><a href="/utilisateur/{{$c->utilisateur->id}}">{{$c->utilisateur->name}}</td>
        </tr>
    @endforeach
    </tbody>
</table>