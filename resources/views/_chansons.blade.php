<table class="table text-center">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Musique</th>
            <th scope="col">Auteur</th>
        </tr>
    </thead>
    <tbody>
    <div style="display:none;">{{$i=0}}</div>
    @foreach ($chansons as $c)
    <div style="display:none;">{{$i=$i+1}}</div>
        <tr>
            <th scope="row">{{$i}}</th>
            <td><a href="#" class="chanson" data-file="{{$c->fichier}}" data-name="{{$c->nom}}" data-user="{{$c->utilisateur->name}}">{{$c->nom}}</a></td>
            <td><a href="/utilisateur/{{$c->utilisateur->id}}">{{$c->utilisateur->name}}</td>
        </tr>
    @endforeach
    </tbody>
</table>