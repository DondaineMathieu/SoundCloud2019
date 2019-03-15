<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
</head>
<body>
<nav id="top-nav">
    <ul>
        <li id="categories"> <a href="javascript:displayCategories()" > Catégories <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 14"><path d="M7 7l7 7 7-7z"/></svg> </a> </li>
        <li> <a href="" > Mes Musiques </a> </li>
        <li id=> 
            <div class="container">
                <div class="search-box">
                    <input type="text" />
                    <span></span>
                </div>
            </div> 
        </li>
        <li id="separation"> | </li>

        @guest
            <li><a href="{{ route('login') }}">Connexion</a></li>
            <li><a href="{{ route('register') }}">Inscription</a></li>
        @else
            <li> Bonjour <a href="/utilisateur/{{ Auth::user()->id }}"> <b> {{ Auth::user()->name }} </b></a></li>
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Deconnexion
                </a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        @endguest
    </ul>
</nav>

<nav id="nav-categories">
    <ul id="ul-categories">
        @foreach(App\Chanson::categories() as $c)
            <li> <a href="/categories/{{$c['style']}}"> {{$c['style']}} - ({{$c['cnt']}})</a> </li>
        @endforeach
    </ul>
</nav>

<audio id="audio" controls>

</audio>

<br />
@auth
<a href="/nouvelle">Insérer sur une nouvelle chanson</a>
@endauth

<div id="main">
    @yield('content')
</div>
<!-- Scripts -->
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/nav.js') }}"></script>
</body>
</html>