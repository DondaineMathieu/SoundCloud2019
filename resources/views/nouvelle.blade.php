@extends('layouts.app')

@section('content')
<form>
    <div class="form-group" action="/creer" method="post" enctype="multipart/form-data">
        <label for="formGroupExampleInput">Nom de la chanson</label>
        <input class="form-control"type="text" name="nom" required placeholder="Le nom de la chanson"/>
    </div>
        <input type="text" name="style" required placeholder="Le style de la chanson"/>
        <br/>
        <input type="file" name="chanson" required/>
        <br/>

        {{csrf_field()}} 
        <input type="submit"/>
    </div>
</form>
@endsection