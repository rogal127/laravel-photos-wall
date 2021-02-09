<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('style/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="{{asset('style/toIndex.css')}}">
    <meta name="author" content="Awokado">
    <meta name="description" content="Aplikacja internetowa do publikowania zdjęć stworzona dla mieszkańców gminy Swidnica ">
    <title>Fotoportal Swidnica</title>

    <header>
        <nav id="nav">
            <div id="logo" style="float: left; line-height: 8vh;margin-left: 2vh; font-size: 5.5vh;"><i class="zmdi zmdi-camera"></i></div>
            
            <h1 style="float: left; line-height: 8vh;margin-left: 2vh; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;font-weight: 900;">Świdnicki Fotoportal</h1>
        <div id="allNav" onclick="dspMenu()">
            <i class="zmdi zmdi-menu"></i>
        </div>
            <div id="menu">
                <!-- Tu treść menu -->

                <div class="menuPoints"><a href="index.html"><i class="zmdi zmdi-home"></i> Dom <i class="zmdi zmdi-home"></i></a></div>
                <div class="menuPoints"><a href="https://www.youtube.com/" target="_blank"><i class="zmdi zmdi-plus-circle"></i> Dodaj <i class="zmdi zmdi-plus-circle"></i></a></div>
                <div class="menuPoints"><a href=""><i class="zmdi zmdi-account-circle"></i> Konto <i class="zmdi zmdi-account-circle"></i></a></div>
                <div class="menuPoints"><a href=""><i class="zmdi zmdi-favorite"></i> Ulubione <i class="zmdi zmdi-favorite"></i></a></div>
                <div class="menuPoints"><a href=""><i class="zmdi zmdi-thumb-up"></i> Like <i class="zmdi zmdi-thumb-up"></i></a></div>
                <div class="menuPoints"><a href=""><i class="zmdi zmdi-thumb-down"></i> Dislike <i class="zmdi zmdi-thumb-down"></i></a></div>
                <div class="menuPoints"><a href=""><i class="zmdi zmdi-file-text"></i> Regulamin <i class="zmdi zmdi-file-text"></i></a></div>
            </div>
        </nav>
        
    </header>
</head>
<body>
    <main id="main">
        <!-- treść strony -->
        @foreach($photos as $photo)
            <div class="Photo">
                <img src="{{asset("images/$photo->path")}}" alt="">
                <div class="react">
                    <i class="zmdi zmdi-thumb-up"></i>
                    <i class="zmdi zmdi-thumb-down"></i>
                    <i class="zmdi zmdi-favorite"></i>
                    <i class="zmdi zmdi-share"></i>
                </div>
            </div>
        @endforeach
    </main>
</body>
<footer>
    <div id="Tech" class="foot">
        <h1>Użyte technologie</h1>
        <a href=""><p>web-app-capable</p></a>
        <a href="https://developer.mozilla.org/en-US/docs/Web/API/Navigator/share"><p>web-share-api</p></a>
        <a href="http://zavoloklom.github.io/material-design-iconic-font/icons.html"><p>Material Design Iconic Font</p></a>
        <a href="https://css-tricks.com/snippets/css/a-guide-to-flexbox/"><p>Flexbox</p></a>
        <a href="https://fonts.google.com/"><p>Google-Fonts</p></a>

    </div>
    <div id="Auth" class="foot">
        <h1>Autorzy</h1>
        <p>Programista:</p>
        <p>Grafik:</p>
        <p>Twórca regulaminu:</p>
        <p>itd...</p>
    </div>
    <div id="Partn" class="foot">
        <h1>Partnerzy</h1>
        <div id="img">
            <img src="{{asset('photos/LOGO GMINY.svg')}}" alt="">
            <img src="{{asset('photos/logo GOK.svg')}}" alt="">
            <img src="{{asset('photos/kolorowe kafelki.svg')}}" alt="">

        </div>
    </div>
</footer>

<script>
    let state = 0;

    function dspMenu() {
        let nav = document.getElementById("menu");
        let content = document.getElementById("main");
        if (state == 0) {
            state =1;
            nav.style.display = "block";
            content.style.filter = "blur(10px)";

        } else {
            state =0;
            nav.style.display = "none";
            content.style.filter = "blur(0)";
        }
    }
</script>
</html>