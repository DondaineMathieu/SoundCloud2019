@extends('layouts.app')

@section('content')

    <ul>
        @foreach ($utilisateur as $u)
        <li>
            <a href="/utilisateur/{{$u->id}}">{{$u->name}}</a>
        </li>
        @endforeach
    </ul>

@endsection