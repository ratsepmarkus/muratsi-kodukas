<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <title>Avaleht</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
    * {font-family: 'Montserrat', sans-serif;}
    .navigation {
    --svgw: 1920;
    --svgh: 300;
    position: relative;
    width: 100vw;
    height: calc((100vw * var(--svgh)) / var(--svgw));
  }
  .svg-wave {
    position: absolute;
    top: 0;
    left: 0;
    width: 100vw;
    height: calc(100vw * var(--svgh) / var(--svgw));
    /*box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); Will create a weird line on img*/
  }
  header {
    z-index: -1;
  }
  .navigation ul {
    list-style-type: none;
    position: relative;
    height: 100%;
    width: 75%;
  }
  .navigation ul li {
    display: inline-block;
    position: absolute;
    color: white;
    top: calc(((var(--t) + 0.3) / 2.6) * 100%);
    left: calc((var(--l) / 17.5) * 100%);
    font-size: 1vw;
  }
  .navigation ul li:nth-child(1) { --t: 0.3; --l: 0.5; }
  .navigation ul li:nth-child(2) { --t: 0.6; --l: 1.7; }
  .navigation ul li:nth-child(3) { --t: 0.9; --l: 3; }
  .navigation ul li:nth-child(4) { --t: 1.2; --l: 4.4;} 
  .navigation ul li:nth-child(5) { --t: 1.4; --l: 6.1;}
  .navigation ul li:nth-child(6) { --t: 1.6; --l: 7.6;}
  .navigation ul li:nth-child(7) { --t: 1.7; --l: 9; }
  .navigation ul li:nth-child(8) { --t: 1.8; --l: 10.5;}
  </style>
</head>

<body class="bg-blue-900 bg-background overflow-x-hidden">
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <div class="w-full text-white bg-blue-600 dark-mode:text-gray-200 dark-mode:bg-gray-800 border-b-2 visible lg:hidden">
    <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-4 mx-auto lg:items-center lg:justify-between lg:flex-row md:px-6 lg:px-8">
      <div class="p-4 flex flex-row items-center justify-between">
        <a href="#">
            <img src="/img/ankur.png" alt="ankur" class="h-10">
        </a>
        <button class="lg:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
          <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
            <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow pb-4 md:pb-0 hidden lg:flex lg:justify-end lg:flex-row">
          <a class="px-2 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/">AVALEHT</a>
          <a class="px-2 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/kontakt">KONTAKT</a>
          <a class="px-2 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/tasud">TASUD</a>
          <a class="px-2 py-2 mt-2 text-sm font-semibold text-gray-900 bg-gray-200 rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/eeskirjad">EESKIRJAD</a>
          <a class="px-2 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/uritused">ÜRITUSED</a>
          <a class="px-2 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/visioon">VISIOON</a>
          <a class="px-2 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/galerii">GALERII</a>
          <a class="px-2 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/taname">TÄNAME</a>
          <div @click.away="open = false" class="relative" x-data="{ open: false }"></div>
      </nav>
    </div>
  </div>
  <header class="bg-nav-bg bg-no-repeat bg-cover bg-center">
      <img src="/img/logo.png" alt="logo" class="mb-40 lg:mb-64 h-36 sm:h-44 md:h-52 lg:h-60">
      <nav class="navigation flex items-center invisible lg:visible">
          <?php /*nav*/?>
          <svg class="svg-wave" width="1920" height="300" viewBox="0 0 1920 300" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1920 300H0V0C435.72 154.841 831.391 213.662 1920 247.761V300Z" fill="#1D4ED8"/></svg>
          <ul>
            <li><a class="px-2 py-2 mt-2 text-md font-semibold text-gray-900 bg-gray-200 rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/">AVALEHT</a></li>
            <li><a class="px-2 py-2 mt-2 text-md font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/kontakt">KONTAKT</a></li>
            <li><a class="px-2 py-2 mt-2 text-md font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/tasud">TASUD</a></li>
            <li><a class="px-2 py-2 mt-2 text-md font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/eeskirjad">EESKIRJAD</a></li>
            <li><a class="px-2 py-2 mt-2 text-md font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/uritused">ÜRITUSED</a></li>
            <li><a class="px-2 py-2 mt-2 text-md font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/visioon">VISIOON</a></li>
            <li><a class="px-2 py-2 mt-2 text-md font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/galerii">GALERII</a></li>
            <li><a class="px-2 py-2 mt-2 text-md font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/taname">TÄNAME</a></li>
          </ul>
        <?php /*WEATHER DATA*/?>
          <div class="flex text-center text-xs lg:text-base font-bold justify-end mr-4 md:mr-12 visible items-center pb-20">
              <div class="bg-black bg-opacity-50 p-2">
                  <h1 class="text-white">Üldine</h1>
                  <p  class="text-yellow-400" id="desc"></p>
              </div>
              <div class="bg-black bg-opacity-50 p-2 mx-4 h-full">
                  <h1 class="text-white">Temp.</h1>
                  <p class="text-yellow-400" id="temp"></p>
              </div>
              <div class="bg-black bg-opacity-50 p-2">
                  <h1 class="text-white">Tuul</h1>
                  <p class="text-yellow-400" id="wind"></p>
              </div>
          </div>
      </nav>
  </header>

<?php /*------IMG what moves------------*/?>
<div class=" invisible w-60 xl:visible fixed">   
 <img src="/img/vapid nshit.png" alt="" class="w-32 fixed">
</div>

  <?php /*POSTS*/?>
  <div class="container mx-auto mb-12 sm:px-6 flex text-white flex-col lg:flex-row mt-12">
    <div class="mx-auto mb-12 px-4 bg-blue-700 rounded-2xl shadow-xl">
      <div class="mt-8 sm:mt-0 sm:w-full pb-8 sm:p-8 text-white md:flex-row">
        <h1 class="font-bold text-yellow-400 text-4xl mb-8">TEATED</h1>
        <div>
          <div class="flex mb-4 justify-between">
            <a href="#" class="font-bold text-lg sm:text-xl">Muratsi sadamas alustati ujuvkai paigaldust</a>
            <p class="text-yellow-400">22.02.2021</p>
          </div>
          <div class="flex flex-col sm:flex-row items-start">
            <p class="text-sm sm:text-base">Jaanuari algul alustati kaevetöödega Muratsi sadama akvatooriumis, kus väljakaevatava osa asemel tuleb ujuvkai, mis annab sadamale juurde 16 paadi kohta.
              Projekti ''Muratsi piirkonna traditsioonilise kalapüügi edendamine ning kala-ja mereturisimi arendamine'' jaoks saadi rahastus läbi Saarte Kalanduse EMKF kalanduspiirkonna kohaliku arengu strateegia 3.3 kaudu.
              Projekti kogu maksumus on 57 492€, millest PRIA toetus on 51 743€. Omaosaluse osalise katmise panustas Saaremaa vald.
              Peatöövõtja on Kuressaare Ehitus OÜ ning alltöövõtja Sikasaare Vanametall OÜ.
              Tööd planeeritakse lõpetada aprillis.</p>
            <img src="/img/postitus1.png" class="h-32 sm:ml-4 pt-4 sm:pt-0">
          </div>
        </div>

        <div class="border-t-2 border-b-2 border-gray-800 py-8 my-8">
          <div class="flex mb-4 justify-between">
            <a href="#" class="font-bold text-lg sm:text-xl">Kena Tegu 2020 nominent</a>
            <p class="text-yellow-400">22.02.2021</p>
          </div>
          <div class="flex flex-col sm:flex-row items-start">
            <p class="text-sm sm:text-base">Saaremaa Arenduskeskuse poolt korraldatud tunnustusüritusel saime märgitud kui Kena Tegu 2020 nominent. Tunnustus saadi uute tegevustega sadamaalal, kui kogukonna kaasabil korrastati haljastus ning suplusala. PRIA toetusega rajati uus mänguväljak lastele ja noortele ning täiskasvanutele väli tervisespordikompleks
            </p>
            <img src="/img/postitus2.png" class="h-32 sm:ml-4 pt-4 sm:pt-0">
          </div>
        </div>

        <div class="flex mb-4 justify-between">
          <a href="#" class="font-bold text-lg sm:text-xl">Muratsi sadam sai uue mänguväljaku ning ilus ilm tõi talgutele rohkelt inimesi</a>
          <p class="text-yellow-400">22.02.2021</p>
        </div>
        <div class="flex flex-col sm:flex-row items-start">
          <p class="text-sm sm:text-base">MTÜ-de Muratsi Kalur ja Muratsi Küla Selts korraldatud talgutele kogunes laupäeva hommikul veerandsada külaelanikku.  Suur osa tööst sai tehtud masinate abil: killustik ja muld laiali laotatud ning maapind enam-vähem tasaseks silutud. Oma käterammule lootnud talguliste hooleks jäi maapind riisuda, kivid ära korjata, muru külvata ja muld siledaks rullida, samuti võrkpalliplatsi jaoks toodud liiv laiali ajada ja siluda. Mehed tegid segu ja paigaldasid muruplatsile äärekivid. Kolme tunniga said haljastustööd tehtud ja rannaala korda. Endiste lagunenud ja ohtlikuks muutunud atraktsioonide asemel ootavad oma küla elanikke ja külalisi nüüd mängulinnak, liivakast, kiiged, pisike karussell, sportimiskompleks, kolm erineva kõrgusega korvilauda, uued pingid, riietumiskabiin ja jalgrattahoidja. “Tänu Saaremaa vallale saime randa ka uue liiva,” lausus Hiie. Tema sõnul on kumu uuest mänguväljakust juba levida jõudnud – lapsi turnib atraktsioonidel iga päev. MTÜ Saarte Kalandus toetas Euroopa Merendus- ja Kalandusfondi sügisesest taotlusvoorust Muratsi Kaluri projekti sadama mänguväljaku- ja tervisekompleksi rajamiseks 48 627  euroga. Vajaliku omaosaluse aitasid katta Saaremaa vald ja Muratsi elanikud. “Kuna meie kogukonda kuulub palju häid inimesi, kes said appi tulla oma rasketehnikaga või organiseerida sadamaalale oma vahenditest liiva, mulda ja killustikku, sai see töö plaanitust suuremalt ette võetud, et sadamaala terviklikumalt ilusamaks teha. Samuti planeerisime parkimisala ja sõiduala suuremaks, et nii kutselised kui ka hobikalurid saaksid sadamaalal paremini tegutseda,” rääkis Siim Hiie.</p>
          <img src="/img/postitus3.png" class="h-32 sm:ml-4 pt-4 sm:pt-0">
        </div>
      </div>
    </div>

    <div class="flex flex-col sm:px-6 px-0 place-self-center sm:place-self-start">
      <div class="mb-12 w-72 p-4 bg-blue-700 rounded-2xl text-center align-middle flex flex-col justify-center shadow-xl">
        <a href="" class="font-bold text-xl hover:text-yellow-400"><u>SADAMA OTSEPILT</u></a>
        <p>Klõpsa lingile, et näha sadama kaamerast otsepilti</p>
      </div>

      <div class="w-72 p-4 bg-blue-700 rounded-2xl text-center align-middle flex flex-col justify-center shadow-xl">
        <p>Reklaam</p>
      </div>
    </div>
  </div>
<?php /*FOOTER*/?>
  <footer class="footer relative pt-1 border-b-2 border-gray-800 bg-gray-800">
      <div class="container mx-auto mb-8 px-6">
          <div class="sm:flex-col sm:mt-8">
            <div class="sm:flex items-center justify-between mt-8 sm:mt-0 sm:w-full sm:px-8 flex flex-col md:flex-row">
              <iframe class="w-min sm:w-3/6" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2100.6657680706817!2d22.57390111602817!3d58. 23027618128791!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.    1!3m3!1m2!1s0x46f273672fce260d%3A0xd30537aafe1a1d91!2sMuratsi%20sadam!5e0!3m2!1set!2see!4v1617397529010!5m2!1set!2see" width="600"  height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              <img src="/img/logo.png" alt="logo" class="my-12">
              <div class="text-white text-center">
                <h1 class="font-bold text-3xl">MURATSI SADAM</h1>
                <p class="text-lg">Port of Muratsi</p>
                <p class="text-lg">58°13'49"N   22°34'34"E</p>
                <div class="mt-8 flex flex-col justify-center items-center">
                  <a href="https://www.facebook.com/muratsisadam/" target="_blank"><svg width="20" height="23" viewBox="0 0 20 23" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.65188 0C1.6289 0 0 1.79308 0 4.01996V17.9959C0 20.2228 1.6289 22.0159 3.65188 22.0159H10.5331V13.409H8.46564V10.3103H10.5331V7.6629C10.5331 5.58296 11.7547 3.67321 14.5688 3.67321C15.7081 3.67321 16.5506 3.79362 16.5506 3.79362L16.4844 6.68734C16.4844 6.68734 15.6251 6.6784 14.6875 6.6784C13.6727 6.6784 13.51 7.19309 13.51 8.04752V10.3103H16.565L16.4319 13.4091H13.51V22.0159H16.3481C18.3711 22.0159 20 20.2228 20 17.9959V4.01999C20 1.7931 18.3711 2.20159e-05 16.3481 2.20159e-05H3.65186L3.65188 0Z" fill="white"/></svg></a>
                  <p class="text-lg">muratsi.ee</p>
                </div>
              </div>
            </div>
            <hr class="my-16">
              <div class="sm:mt-0 sm:w-full sm:px-8 flex flex-col md:flex-row justify-between">
                  <div class="flex flex-col text-white text-md">
                      <span class="my-2">Muratsi Kalur MTÜ</span>
                      <span class="my-2">+372 5397 4722</span>
                      <span class="my-2">sadam@muratsi.ee</span>
                  </div>
                  <div class="flex flex-col text-white text-md my-8 sm:my-0">
                      <span class="my-2">Äriregistri kood 80413704</span>
                      <span class="my-2">Swedbank</span>
                      <span class="my-2">IBAN nr EE482200221066231854</span>
                  </div>
                  <div class="flex flex-col text-white text-md">
                      <span class="my-2">Muratsi küla</span>
                      <span class="my-2">Saaremaa Vald</span>
                      <span class="my-2">93859 Saaremaa, Eesti</span>
                  </div>
              </div>
          </div>
      </div>
  </footer>
  <script src="/script.js"></script>
</body>
</html>