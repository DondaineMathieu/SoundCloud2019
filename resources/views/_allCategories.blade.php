@extends('layouts.app')

@section('content')
    @foreach($categories as $c)
        <li> <a href="/categories/{{$c['style']}}"> {{$c['style']}} - ({{$c['cnt']}})</a> </li>
    @endforeach
@endsection