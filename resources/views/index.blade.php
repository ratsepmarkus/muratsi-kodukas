<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <title>Avaleht</title>
</head>
<body class="bg-blue-900 bg-background">
<?php /*WEATHER DATA*/?>
  <div class="container flex text-center text-lg font-bold">
    <div class="bg-black bg-opacity-40 p-4">
      <h1 class="text-white">Üldine ilm</h1>
      <p  class="text-yellow-400" id="desc"></p>
    </div>
    <div class="bg-black bg-opacity-40 p-4">
      <h1 class="text-white">Temperatuur</h1>
      <p class="text-yellow-400" id="temp"></p>
    </div>
    <div class="bg-black bg-opacity-40 p-4">
      <h1 class="text-white">Tuul</h1>
      <p class="text-yellow-400" id="wind"></p>
    </div>
  </div>
<?php /*POSTS*/?>
  <div class="container mx-auto mb-12 mt-8 sm:px-6 flex text-white flex-col sm:flex-row">
    <div class="mx-auto mb-12 my-8 px-4 bg-blue-700 rounded-2xl shadow-xl">
      <div class="mt-8 sm:mt-0 sm:w-full pb-8 sm:p-8 text-white md:flex-row">
        <div>
          <div class="flex mb-4 justify-between">
            <a href="#" class="font-bold text-lg sm:text-xl"><u>Muratsi sadamas alustati ujuvkai paigaldust</u></a>
            <p class="text-yellow-400">22.02.2021</p>
          </div>
          <div class="flex flex-col sm:flex-row items-start">
            <p>Jaanuari algul alustati kaevetöödega Muratsi sadama akvatooriumis, kus väljakaevatava osa asemel tuleb ujuvkai, mis annab sadamale juurde 16 paadi kohta.
              Projekti ''Muratsi piirkonna traditsioonilise kalapüügi edendamine ning kala-ja mereturisimi arendamine'' jaoks saadi rahastus läbi Saarte Kalanduse EMKF kalanduspiirkonna kohaliku arengu strateegia 3.3 kaudu.
              Projekti kogu maksumus on 57 492€, millest PRIA toetus on 51 743€. Omaosaluse osalise katmise panustas Saaremaa vald.
              Peatöövõtja on Kuressaare Ehitus OÜ ning alltöövõtja Sikasaare Vanametall OÜ.
              Tööd planeeritakse lõpetada aprillis.</p>
            <img src="/img/postitus1.png" class="h-32 sm:ml-4 pt-4 sm:pt-0">
          </div>
        </div>

        <div class="border-t-2 border-b-2 border-gray-800 py-8 my-8">
          <div class="flex mb-4 justify-between">
            <a href="#" class="font-bold text-lg sm:text-xl"><u>Kena Tegu 2020 nominent</u></a>
            <p class="text-yellow-400">22.02.2021</p>
          </div>
          <div class="flex flex-col sm:flex-row items-start">
            <p>Saaremaa Arenduskeskuse poolt korraldatud tunnustusüritusel saime märgitud kui Kena Tegu 2020 nominent. Tunnustus saadi uute tegevustega sadamaalal, kui kogukonna kaasabil korrastati haljastus ning suplusala. PRIA toetusega rajati uus mänguväljak lastele ja noortele ning täiskasvanutele väli tervisespordikompleks.
            </p>
            <img src="/img/postitus2.png" class="h-32 sm:ml-4 pt-4 sm:pt-0">
          </div>
        </div>

        <div class="flex mb-4 justify-between">
          <a href="#" class="font-bold text-lg sm:text-xl"><u>Muratsi sadam sai uue mänguväljaku ning ilus ilm tõi talgutele rohkelt inimesi.</u></a>
          <p class="text-yellow-400">22.02.2021</p>
        </div>
        <div class="flex flex-col sm:flex-row items-start">
          <p>MTÜ-de Muratsi Kalur ja Muratsi Küla Selts korraldatud talgutele kogunes laupäeva hommikul veerandsada külaelanikku.  Suur osa tööst sai tehtud masinate abil: killustik ja muld laiali laotatud ning maapind enam-vähem tasaseks silutud. Oma käterammule lootnud talguliste hooleks jäi maapind riisuda, kivid ära korjata, muru külvata ja muld siledaks rullida, samuti võrkpalliplatsi jaoks toodud liiv laiali ajada ja siluda. Mehed tegid segu ja paigaldasid muruplatsile äärekivid. Kolme tunniga said haljastustööd tehtud ja rannaala korda. Endiste lagunenud ja ohtlikuks muutunud atraktsioonide asemel ootavad oma küla elanikke ja külalisi nüüd mängulinnak, liivakast, kiiged, pisike karussell, sportimiskompleks, kolm erineva kõrgusega korvilauda, uued pingid, riietumiskabiin ja jalgrattahoidja. “Tänu Saaremaa vallale saime randa ka uue liiva,” lausus Hiie. Tema sõnul on kumu uuest mänguväljakust juba levida jõudnud – lapsi turnib atraktsioonidel iga päev. MTÜ Saarte Kalandus toetas Euroopa Merendus- ja Kalandusfondi sügisesest taotlusvoorust Muratsi Kaluri projekti sadama mänguväljaku- ja tervisekompleksi rajamiseks 48 627  euroga. Vajaliku omaosaluse aitasid katta Saaremaa vald ja Muratsi elanikud. “Kuna meie kogukonda kuulub palju häid inimesi, kes said appi tulla oma rasketehnikaga või organiseerida sadamaalale oma vahenditest liiva, mulda ja killustikku, sai see töö plaanitust suuremalt ette võetud, et sadamaala terviklikumalt ilusamaks teha. Samuti planeerisime parkimisala ja sõiduala suuremaks, et nii kutselised kui ka hobikalurid saaksid sadamaalal paremini tegutseda,” rääkis Siim Hiie.</p>
          <img src="/img/postitus3.png" class="h-32 sm:ml-4 pt-4 sm:pt-0">
        </div>
      </div>
    </div>

    <div class="flex flex-col px-8">
      <div class="mb-12 mt-8 px-6 bg-blue-700 rounded-2xl h-40 text-center align-middle flex flex-col justify-center shadow-xl">
        <a href="" class="font-bold text-xl py-4 hover:text-gray-200"><u>SADAMA OTSEPILT</u></a>
        <p>Klõpsa lingile, et näha sadama kaamerast otsepilti</p>
      </div>

      <div class="mb-12 mt-8 px-6 bg-blue-700 rounded-2xl h-40 text-center align-middle flex flex-col justify-center shadow-xl">
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
                  <svg width="20" height="23" viewBox="0 0 20 23" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.65188 0C1.6289 0 0 1.79308 0 4.01996V17.9959C0 20.2228 1.6289 22.0159 3.65188 22.0159H10.5331V13.409H8.46564V10.3103H10.5331V7.6629C10.5331 5.58296 11.7547 3.67321 14.5688 3.67321C15.7081 3.67321 16.5506 3.79362 16.5506 3.79362L16.4844 6.68734C16.4844 6.68734 15.6251 6.6784 14.6875 6.6784C13.6727 6.6784 13.51 7.19309 13.51 8.04752V10.3103H16.565L16.4319 13.4091H13.51V22.0159H16.3481C18.3711 22.0159 20 20.2228 20 17.9959V4.01999C20 1.7931 18.3711 2.20159e-05 16.3481 2.20159e-05H3.65186L3.65188 0Z" fill="white"/></svg>
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