<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Visioon</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
        * {font-family: 'Montserrat', sans-serif;}
        .sidebar {
        position: fixed;
        z-index: 1;
        top: 75%;
        overflow-x: hidden;
        }
        .badge{
          height: 10rem;
          opacity: 90%;
        }
    </style>
</head>
<body class="bg-blue-900 bg-background">
    <?php /*------IMG what moves------------*/?>
    <div class="sidebar">
     <img src="/img/badge.png" class="badge">
    </div>
    <?php /* NAV--------------------------------- */ ?>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <div class="w-full text-white bg-blue-600 dark-mode:text-gray-200 dark-mode:bg-gray-800 border-b-2">
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
            <a class="px-2 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/eeskirjad">EESKIRJAD</a>
            <a class="px-2 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/uritused">ÜRITUSED</a>
            <a class="px-2 py-2 mt-2 text-sm font-semibold text-gray-900 bg-gray-200 rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/visioon">VISIOON</a>
            <a class="px-2 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/galerii">GALERII</a>
            <a class="px-2 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/taname">TÄNAME</a>
            <div @click.away="open = false" class="relative" x-data="{ open: false }"></div>
        </nav>
      </div>
    </div>

    <?php/*MAIN ----------------------------*/ ?>
    <div class="container mx-auto mb-8 mt-8 px-6 bg-blue-700 rounded-2xl">
        <div class="sm:flex sm:mt-8">
            <div class="mt-8 sm:mt-0 sm:w-full sm:px-8 text-white flex-none md:flex-row py-8">
                <h1 class="sm:text-3xl font-bold text-yellow-400 text-2xl mb-8">MEIE VISIOON</h1>
                <p>Muratsi sadam on olnud juba alates 1950 aastast paljude lemmikuks kalastuskohaks ning oma külainimestele suvitamise kohaks.  Muratsi sadamas on olnud aktiivne kalapüük ja merele minek ning kohati sadamas olnud üle 30 aluse, millest enamus ka kutselised kalurid.  Algus aegadel tegutses sadamas eraldi ka sadamavaht, kes ikka saatis mehed kalaõnnega merele ja ootas rõõmsalt tagasi koju. Samuti hoolitses turvalisuse eest Nõukogude piirivalve, et ikka meremehed tagasi jõuaksid.</p>
                <p class="mb-4">Muratsi kandist on ikka püütud läbiaegade põhiliselt ahvenat, haugi, räime, siiga, särge jne…</p>
                <h1 class="font-bold text-xl mt-12">2017 - 2025</h1>
                <p class="mt-4 mb-4">Muratsi Kalur MTÜ visoon ja plaan on teha sadamaala korda, mille tulemusel tulevad kalastajatele ujuvkaid ning betooni kai kala lassimiseks. Uus mänguväljak ja tervisekompleks nii Muratsi küla inimestele kui ka külalistele väljas poolt asulat.</p>
                <p class="mb-4">Kogukonna maja – maja, kus saaksid vajadusel kalurid oma asju hoia, külarahvas koosolekuid pidada, talisuplejad sooja sauna teha ning suviti terrassil jalga sirutada.</p>
                <div class="flex flex-wrap pb-4 mb-6">
                    <img src="/img/visioon/img1.png" alt="" class="h-28 self-center p-2">
                    <img src="/img/visioon/img2.png" alt="" class="h-36 self-center p-2">
                    <img src="/img/visioon/img3.png" alt="" class="h-36 self-center p-2">
                    <img src="/img/visioon/img4.png" alt="" class="h-24 self-center p-2">
                </div>
                <h1 class="font-bold text-xl">2011 – 2017</h1>
                <p class="mt-4 mb-4">Muratsi Küla Seltsil olid suured plaanid sadama alaga. Planeeritud olid koostöös arhitektidega ja projekteerijatega sadamale külaseltsimaja erinevate võimalustega, samuti suurendada suplusala, kus kõrval on nii väli korvpalliväljak kui ka võrkpalli mängimiseks liivaväljak. Külarahvas hoidis sadamat hästi!
                Leiti vahendeid ja tehti ise vajalikud tööd, et lastele oleks mängimiseks liivakast ja kiiged. Samuti korraldati iga kevadel talgud sadamaala korrastamiseks ning nii mõnigi vabaõhu üritus sai suve jooksul peetud. Sadamast oli saanud Muratsi küla inimeste lemmik vabaaja veetmis koht.</p>
                <div class="flex flex-wrap pb-4 mb-6">
                    <img src="/img/visioon/img5.png" alt="" class="h-28 self-center p-2">
                    <img src="/img/visioon/img6.png" alt="" class="h-28 self-center p-2">
                    <img src="/img/visioon/img7.png" alt="" class="h-28 self-center p-2">
                    <img src="/img/visioon/img8.png" alt="" class="h-28 self-center p-2">
                    <img src="/img/visioon/img9.png" alt="" class="h-28 self-center p-2">
                </div>
                <h1 class="font-bold text-xl mb-4">1991 – 2010</h1>
                <p class="mb-4">Toonane Saare maakonna suurim omavalitsuslik vald oli Kaarma. Kaarma vald väljastas suurte plaanidega detailiplaneeringu, kus oli mõeldud suur maja nii kaluritele kui ka külainimestele. Sadamaalale oli mõeldud ligi 50 kohta väikepaatidele. Sadam kuulus rendilepingu alusel kutselistele kaluritele, kes tegid omale ühingu.</p>
                <p class="mb-4">Kuigi plaanid teoks ei saanud, siis hoidsid sadamaalal korda kutselised kalurid, kes niitsid ja koristasid sadamat järjepidevalt. Kaarma valla poolt sai loodud ka praegu suplemiskoht, kui toodi suurtes koguses liiva nii kevadel kui ka talvel jää peale, et merepõhi oleks sõbralikum. 2000-ndatel toimusid juba suuremad koristused ja talgud külarahva poolt. Korraldati külalistele ja noortele erinevaid õpitubasid rannakalanduse teemadel ning nii mõnigi jaanipäev sai sadamas peetud.  Suuremaid kordaminekuid ning erinevaid projekte kirjutas sadamale toonane Kuressaare linnapeana ja hiljem Kaarma vallavanemana tegutsenud Ülo Vevers, kes koos elukaaslase Dailiga tänaseni sadama tegemistele kaasa aitab..</p>
                <div class="flex flex-wrap pb-4 mb-6 space-x-46">
                    <img src="/img/visioon/img10.png" alt="" class="h-36 self-center p-2">
                    <img src="/img/visioon/img11.png" alt="" class="h-36 self-center p-2">
                    <img src="/img/visioon/img12.png" alt="" class="h-36 self-center p-2">
                    <img src="/img/visioon/img13.png" alt="" class="h-36 self-center p-2">
                    <img src="/img/visioon/img14.png" alt="" class="h-36 self-center p-2">
                </div>
                <h1 class="font-bold text-xl mb-4">1960 – 1990</h1>

                <p>Muratsi sadama kohta on vähe kirja pandud ning Saaremaa arhiivis puudub selle kohta mis siin sellel ajavahemikul toimus….sellegipoolest , siis ajaloolist hõngu pakkuvad tol ajal sadamaalal tegutsenud kalurid ja külainimesed.</p>
                <div class="mt-4 mb-4">
                    <p>• Praegune sadamamaja on ehitatud 1987-1988 kutseliste kalurite poolt, eesmärgiga hoida varustust ning katuse all hoida külmkambrit kalade säilitamiseks.</p>
                    <p>• 1960 – 1988 haldas sadamat Mereranna kolhoos ning kalapaate oli 30 ringis.</p>
                    <p>• Sadamaala oli lukus ja ööpäeva ringselt oli sadamal valve. Sadamavaht registreeris kõik minekud ja tulekud ning seda kontrollis ka piirivalve. Selleks peeti logiraamatud, kus kirja sai pandud kõik sõidud ja merelt tulnud saagid.</p>
                </div>
                <p>Vello Salong, Maidu Ots, Daili Tuuling, Argo Sepp.</p>
                <div class="flex flex-wrap pb-4 mb-16 mt-12">
                    <img src="/img/visioon/img15.png" alt="" class="h-36 self-center p-2">
                    <img src="/img/visioon/img16.png" alt="" class="h-36 self-center p-2">
                    <img src="/img/visioon/img17.png" alt="" class="h-36 self-center p-2">
                    <img src="/img/visioon/img18.png" alt="" class="h-36 self-center p-2">
                    <img src="/img/visioon/img19.png" alt="" class="h-36 self-center p-2">
                </div>
            </div>
        </div>
    </div>


    <?php /* FOOTER-------------------------*/?>
    <footer class="footer bg-gray-800 relative pt-1 border-b-2 border-gray-800">
        <div class="container mx-auto mb-8 px-6">
            <div class="sm:flex sm:mt-8">
                <div class="mt-8 sm:mt-0 sm:w-full sm:px-8 flex flex-col md:flex-row justify-between">
                    <div class="flex flex-col text-white text-md">
                        <span class="my-2">Muratsi Kalur MTÜ</span>
                        <span class="my-2">+372 5397 4722</span>
                        <span class="my-2">sadam@muratsi.ee</span>
                    </div>
                    <div class="flex flex-col text-white text-md">
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
</body>
</html>