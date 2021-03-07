<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('style/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <meta name="author" content="Awokado">
    <meta name="description" content="Aplikacja internetowa do publikowania zdjęć stworzona dla mieszkańców gminy Swidnica ">
    <title>Fotoportal Swidnica</title>

    <header>
        <nav id="nav">
            <a href="/"><div id="logo" style="float: left; line-height: 8vh;margin-left: 2vh; font-size: 5.5vh;"><i class="zmdi zmdi-camera"></i></div></a>
            
            <h1 style="float: left; line-height: 8vh;margin-left: 2vh; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;font-weight: 900;">Świdnicki Fotoportal</h1>
        <div id="allNav" onclick="dspMenu()">
            <i class="zmdi zmdi-menu"></i>
        </div>
            <div id="menu">
                <!-- Tu treść menu -->

                <div class="menuPoints"><a href="/"><i class="zmdi zmdi-home"></i> Dom <i class="zmdi zmdi-home"></i></a></div>
                @guest
                    <div class="menuPoints"><a href="/login"><i class="zmdi zmdi-thumb-up"></i>Zaloguj<i class="zmdi zmdi-thumb-up"></i></a></div>
                @else
                    <div class="menuPoints"><a href="/dodaj-zdjecie" target="_blank"><i class="zmdi zmdi-plus-circle"></i> Dodaj <i class="zmdi zmdi-plus-circle"></i></a></div>
                    <!-- <div class="menuPoints"><a href=""><i class="zmdi zmdi-account-circle"></i> Konto <i class="zmdi zmdi-account-circle"></i></a></div> -->
                    <div class="menuPoints">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">Wyloguj</a>
                        </form>
                    </div>
                    <div class="menuPoints"><a href=""><i class="zmdi zmdi-favorite"></i> Ulubione <i class="zmdi zmdi-favorite"></i></a></div>
                    @if(Auth::user()->name == 'rogal127' || Auth::user()->name == 'admin')
                        <div class="menuPoints"><a href="/akceptuj-zdjecia"><i class="zmdi zmdi-favorite"></i>Akceptuj zdjęcia<i class="zmdi zmdi-favorite"></i></a></div> 
                        <div class="menuPoints"><a href="/usun-uzytkownikow"><i class="zmdi zmdi-favorite"></i>Usuń użytkowników<i class="zmdi zmdi-favorite"></i></a></div> 
                    @endif
                @endguest
                <div class="menuPoints"><a href=""><i class="zmdi zmdi-file-text"></i> Regulamin <i class="zmdi zmdi-file-text"></i></a></div>
            </div>
        </nav>
        
    </header>
</head>
<body>
<main id="main">