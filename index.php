<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body <?php body_class(); ?>>

    <div class="loading-screen">
        <div class="loader"></div>
    </div>

    <main>
        <div class="main-img"></div>
        <nav>
            <ol>
                <li><a href="#A">A - <strong>1620</strong>m²</a></li>
                <li><a href="#B">B - <strong>1747</strong>m²</a></li>
                <li><a href="#C">C - <strong>1746</strong>m²</a></li>
                <li><a href="#D">D - <strong>8602</strong>m²</a></li>
            </ol>
        </nav>
        <a href="#footer" class="contact">Kontakt</a>
    </main>
    
    <section class="desc">
        <section class="top-img">
            <div class="top-img" data-aos="fade-right"></div>
            <div class="text-container" data-aos="fade-left">
                <p>Działki objęte <strong>miejscowym planem zagospodarowania</strong> przestrzennego <br>
                z przeznaczeniem pod <strong>zabudowę jednorodzinną</strong></p>
                <br>
                <p>Działki z dostępem do <strong>drogi gminnej.</strong></p>
                <br>
                <p>Nieruchomość ogrodzona, z wszystkimi mediami <br> (prąd, woda, gaz, kanalizacja, internet) w drodze</p>
            </div>
        </section>
    </section>

    <section class="text-sec" data-aos="fade-down">
        <div class="container">
            <p>W <strong>bliskiej odległości</strong> znajduje się: mini market, przedszkole, plac zabaw, kościół.
            <br>
            <br>
            Najważniejsze, w odległości -2km przebiega <strong>trasa krajowa nr7</strong>, co pozwala na dotarcie do Warszawy w ok 20min, dla korzystających z komunikacji miejskiej autobus linii 728 dowiezie nas do pętli P+R Aleja Krakowska (zabierając nas praktycznie spod samego domu). 
            <br>
            <br>
            W miejscowości Mroków (zaledwie 2km) znajduję się: Szkoła podstawowa, apteka, przychodnia, sklepy spożywcze.
            <br>
            <br>
            Prowincjonalny klimat, sąsiedztwo rzeczki Struga, spokojna zielona okolica, czyste powietrze są największym atutem tej lokalizacji.
            <br>
            <br>
            Wg  miejscowego <strong>planu zagospodarowania przestrzennego</strong> gminy Lesznowola ustalono /m.in./:</p>
            <br>
            <ul>
                <li>maksymalna intensywność zabudowy - 0,6,</li>
                <li>minimalna intensywność zabudowy - 0,001,</li>
                <li>maksymalna powierzchnia zabudowy w odniesieniu do powierzchni działki budowlanej – 25 %,</li>
                <li>minimalny udział procentowy powierzchni biologicznie czynnej w odniesieniu do powierzchni działki budowlanej - 70%,</li>
                <li>maksymalna wysokość zabudowy:</li>
                <li>dla wolnostojących budynków gospodarczych i garażowych - 7m,</li>
                <li>dla pozostałych budynków i obiektów budowlanych - 12,0 m,</li>
                <li>geometria dachu </li>
                <li>dachy dwuspadowe lub wielospadowe o nachyleniu połaci dachowych od 20° do 45°;</li>
                <li>minimalna powierzchnia nowo wydzielanych działek budowlanych - <strong class="big">900</strong>m2;</li>
            </ul>
            <div class="wrapper">
                <p>cena 1m2 - <strong class="big">300zł</strong> /do negocjacji/</p>
                <div class="img-logo"></div>
            </div>
        </div>
    </section>

    <section class="img-section"></section>

    <section id="A" class="d-sec" data-aos="fade-right">
        <div class="img"><a href="#footer" class="sec-contact"> kontakt <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#00000"><path d="m560-240-56-58 142-142H160v-80h486L504-662l56-58 240 240-240 240Z"/></svg> </a></div>
    </section>
    <section id="B" class="d-sec" data-aos="fade-right">
        <div class="img"><a href="#footer" class="sec-contact"> kontakt <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#00000"><path d="m560-240-56-58 142-142H160v-80h486L504-662l56-58 240 240-240 240Z"/></svg> </a></div>
    </section>
    <section id="C" class="d-sec" data-aos="fade-right">
        <div class="img"><a href="#footer" class="sec-contact"> kontakt <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#00000"><path d="m560-240-56-58 142-142H160v-80h486L504-662l56-58 240 240-240 240Z"/></svg> </a></div>
    </section>
    <section id="D" class="d-sec" data-aos="fade-right">
        <div class="img"><a href="#footer" class="sec-contact"> kontakt <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#00000"><path d="m560-240-56-58 142-142H160v-80h486L504-662l56-58 240 240-240 240Z"/></svg> </a></div>
    </section>

    <section class="last-img">
        <div class="last-img"></div>
    </section>

    <footer id="footer">
        <div class="logo-container">
            <p class="copy">Działki Warszawianka &copy; <?php echo date('Y'); ?> <br> Wszelkie prawa zastrzeżone.</p>
            <div class="img-logo"></div>
        </div>
        <div class="container">
            <div class="wrapper">
                <svg xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px" fill="#00000">
                <path d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm320-280L160-640v400h640v-400L480-440Zm0-80 320-200H160l320 200ZM160-640v-80 480-400Z"/></svg>
                <a href="mailto:irenarafalowicz@dzialkiwarszawianka.pl">irenarafalowicz@dzialkiwarszawianka.pl</a>
            </div>
            <div class="wrapper">
                <svg xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px" fill="#00000">
                <path d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm320-280L160-640v400h640v-400L480-440Zm0-80 320-200H160l320 200ZM160-640v-80 480-400Z"/></svg>
                <a href="mailto:lukasz@dzialkiwarszawianka.pl">lukasz@dzialkiwarszawianka.pl</a>
            </div>
            <div class="wrapper">
                <svg xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px" fill="#00000">
                <path d="M798-120q-125 0-247-54.5T329-329Q229-429 174.5-551T120-798q0-18 12-30t30-12h162q14 0 25 9.5t13 22.5l26 140q2 16-1 27t-11 19l-97 98q20 37 47.5 71.5T387-386q31 31 65 57.5t72 48.5l94-94q9-9 23.5-13.5T670-390l138 28q14 4 23 14.5t9 23.5v162q0 18-12 30t-30 12ZM241-600l66-66-17-94h-89q5 41 14 81t26 79Zm358 358q39 17 79.5 27t81.5 13v-88l-94-19-67 67ZM241-600Zm358 358Z"/></svg>
                <p>+48 889 800 014</p>
            </div>
        </div>
    </footer>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const loadingScreen = document.querySelector(".loading-screen");
      setTimeout(() => {
        if (loadingScreen) {
            loadingScreen.classList.add("loaded");
        }

        document.body.classList.remove("overflow");   
      }, 1000);
    });
  </script>
  <script> configObj = {"buttonD":"M8 18.568L10.8 21.333 16 16.198 21.2 21.333 24 18.568 16 10.667z","buttonT":"translate(-1148 -172) translate(832 140) translate(32 32) translate(284)","shadowSize":"0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04)","roundnessSize":"16px","buttonDToBottom":"20px","buttonDToRight":"20px","selectedBackgroundColor":"#a8c5c1","selectedIconColor":"#000000","buttonWidth":"40px","buttonHeight":"40px","svgWidth":"32px","svgHeight":"32px"};function createButton(obj, pageSimulator) {    const body = document.querySelector("body");    backToTopButton = document.createElement("span");    backToTopButton.classList.add("softr-back-to-top-button");    backToTopButton.id = "softr-back-to-top-button";    pageSimulator      ? pageSimulator.appendChild(backToTopButton)      : body.appendChild(backToTopButton);    backToTopButton.style.width = obj.buttonWidth;    backToTopButton.style.height = obj.buttonHeight;    backToTopButton.style.marginRight = obj.buttonDToRight;    backToTopButton.style.marginBottom = obj.buttonDToBottom;    backToTopButton.style.borderRadius = obj.roundnessSize;    backToTopButton.style.boxShadow = obj.shadowSize;    backToTopButton.style.color = obj.selectedBackgroundColor;    backToTopButton.style.backgroundColor = obj.selectedBackgroundColor;    pageSimulator ? backToTopButton.style.position = "absolute" : backToTopButton.style.position = "fixed";    backToTopButton.style.outline = "none";    backToTopButton.style.bottom = "0px";    backToTopButton.style.right = "0px";    backToTopButton.style.cursor = "pointer";    backToTopButton.style.textAlign = "center";    backToTopButton.style.border = "solid 2px currentColor";    backToTopButton.innerHTML =      '<svg class="back-to-top-button-svg" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" > <g fill="none" fill-rule="evenodd"> <path d="M0 0H32V32H0z" transform="translate(-1028 -172) translate(832 140) translate(32 32) translate(164) matrix(1 0 0 -1 0 32)" /> <path class="back-to-top-button-img" fill-rule="nonzero" d="M11.384 13.333h9.232c.638 0 .958.68.505 1.079l-4.613 4.07c-.28.246-.736.246-1.016 0l-4.613-4.07c-.453-.399-.133-1.079.505-1.079z" transform="translate(-1028 -172) translate(832 140) translate(32 32) translate(164) matrix(1 0 0 -1 0 32)" /> </g> </svg>';    backToTopButtonSvg = document.querySelector(".back-to-top-button-svg");    backToTopButtonSvg.style.verticalAlign = "middle";    backToTopButtonSvg.style.margin = "auto";    backToTopButtonSvg.style.justifyContent = "center";    backToTopButtonSvg.style.width = obj.svgWidth;    backToTopButtonSvg.style.height = obj.svgHeight;    backToTopButton.appendChild(backToTopButtonSvg);    backToTopButtonImg = document.querySelector(".back-to-top-button-img");    backToTopButtonImg.style.fill = obj.selectedIconColor;    backToTopButtonSvg.appendChild(backToTopButtonImg);    backToTopButtonImg.setAttribute("d", obj.buttonD);    backToTopButtonImg.setAttribute("transform", obj.buttonT);        if(!pageSimulator) {      backToTopButton.style.display = "none";      window.onscroll = function() {        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {          backToTopButton.style.display = "block";        } else {          backToTopButton.style.display = "none";        }      };        backToTopButton.onclick = function() {        document.body.scrollTop = 0;        document.documentElement.scrollTop = 0;      };    }  };document.addEventListener("DOMContentLoaded", function() { createButton(configObj, null); });</script>
</body>
</html>
