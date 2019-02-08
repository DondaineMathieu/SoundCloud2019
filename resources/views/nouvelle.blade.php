@extends('layouts.app')

@section('content')
    <form action="/creer" method="post" enctype="multipart/form-data">
        <input type="text" name="nom" required placeholder="Le nom de la chanson"/>
        <br/>
        <input type="text" name="style" required placeholder="Le style de la chanson"/>
        <br/>
        <input type="file" name="chanson" required/>
        <br/>

        {{csrf_field()}} 
        <input type="submit"/>
@endsection