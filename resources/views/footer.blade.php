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
</main>

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
</body>
</html>