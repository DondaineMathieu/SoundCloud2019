@extends('layouts.app')

@section('content')

@foreach ($chansons as $c)
    <a href="#" class="chanson" data-file="{{$c->fichier}}">{{$c->nom}}</a><br />
@endforeach
    

@endsection