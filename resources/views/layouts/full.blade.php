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
<div class="logo"><a href="/"><img src="/images/logo_jaxsong.png"></a></div>
    <ul>
        <li id="categories"> <a href="javascript:displayCategories()" > Catégories <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 14"><path d="M7 7l7 7 7-7z"/></svg> </a> </li>
        @guest
        @else
            <li> <a href="/utilisateur/{{ Auth::user()->id }}" > Mes Musiques </a> </li>
        @endguest
        <li id="a"> 
            <div class="container">
                <div class="search-box">
                    <input id="input-search" type="text" onkeypress="recherche()"/>
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
            <p style="display:none;">{{$i=0}}</p>
        @foreach(App\Chanson::bestCategories() as $c)
            <li> <a href="/categories/{{$c['style']}}"> {{$c['style']}} - ({{$c['cnt']}})</a> </li>
            <p style="display:none;">{{$i=$i+$c['cnt']}}</p>
        @endforeach
    <li><a href="/categories">Voir toutes les categories ({{$i}})<a>
    </ul>
</nav>

<audio id="audio" controls>
        <source src="" type="audio/mp3"/>
</audio>

@auth
<a href="/nouvelle" data-pjax>Insérer sur une nouvelle chanson</a>
@endauth

<div id="pjax-container main-content">
    @yield('content')
</div>

<div class="footer-player">
    <div class="info-musique"> 
        <div></div>
        <div>
            <h2>Titre de la chanson</h2>
            <p>auteur de la musique</p>
        </div>
    </div>

    <div class="player">
        <audio id="audio" controls>
            <source src="" type="audio/mp3"/>
        </audio>
    </div>

</div>

    
    
<!-- Scripts -->
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/jquery.pjax.js') }}"></script>
<script src="{{ asset('js/nav.js') }}"></script>
<script src="{{ asset('js/search.js') }}"></script>
</body>
</html>