@extends('layouts.app')



@section('content')
<div class="direction-row">
    <h2>Catégories</h2>
        <ul class="list-group">
            @foreach($categories as $c)
                <li class="list-group-item"> <a href="/categories/{{$c['style']}}"> {{$c['style']}} - ({{$c['cnt']}})</a> </li>
            @endforeach

        </ul>
</div>
@endsection
