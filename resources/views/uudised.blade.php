<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Uudised</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

        * {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>

<body class="bg-primary bg-background">
    <?php /*------IMG what moves------------*/ ?>
    <div class="sidebar invisible md:visible">
        <a href="/taname"><img src="/img/vapp1.png" class="badge"></a>
    </div>
    <?php /* NAV--------------------------------- */ ?>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <div class="w-full text-white bg-secondary dark-mode:text-gray-200 dark-mode:bg-gray-800 border-b-2">
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
                <a class="px-4 py-2 mt-2 text-sm text-white rounded-xl border border-solid border-transparent hover:border-current cursor-pointer select-none" href="/">AVALEHT</a>
                <a class="px-4 py-2 mt-2 text-sm text-white rounded-xl border border-solid border-transparent hover:border-current cursor-pointer select-none" href="/kontakt">KONTAKT</a>
                <a class="px-4 py-2 mt-2 text-sm text-white rounded-xl border border-solid border-transparent hover:border-current cursor-pointer select-none" href="/tasud">TASUD</a>
                <a class="px-4 py-2 mt-2 text-sm text-white rounded-xl border border-solid border-transparent hover:border-current cursor-pointer select-none" href="/eeskirjad">EESKIRJAD</a>
                <a class="px-4 py-2 mt-2 text-sm text-white rounded-xl border border-solid border-transparent hover:border-current cursor-pointer select-none" href="/uritused">??RITUSED</a>
                <a class="px-4 py-2 mt-2 text-sm text-white rounded-xl border border-solid border-transparent hover:border-current cursor-pointer select-none" href="/visioon">VISIOON</a>
                <a class="px-4 py-2 mt-2 text-sm text-white rounded-xl border border-solid border-transparent hover:border-current cursor-pointer select-none" href="/galerii">GALERII</a>
                <a class="px-4 py-2 mt-2 text-sm text-yellow-400" href="/uudised">UUDISED</a>
                <a class="px-4 py-2 mt-2 text-sm text-white rounded-xl border border-solid border-transparent hover:border-current cursor-pointer select-none" href="/taname">T??NAME</a>
                <div @click.away="open = false" class="relative" x-data="{ open: false }"></div>
            </nav>
        </div>
    </div>
    <?php /*MAIN ----------------------------*/ ?>
    <div class="container md:px-32 mx-auto mb-12 flex text-white flex-col xl:flex-row mt-12 gap-4">
        <div class="mx-auto px-4 bg-blue-700 rounded-2xl shadow-xl xl:w-2/3">
            <div class="mt-8 sm:mt-0 sm:w-full pb-8 sm:p-8 text-white md:flex-row">
                <h1 class="font-bold text-yellow-400 text-4xl mb-8">Uudised</h1>
                <div>
                    <div class="flex mb-4 justify-between">
                        <p href="" class=" text-lg underline sm:text-xl"><a href="/muratsi-sadas-alustati-ujuvkai-paigaldus">Muratsi sadamas alustati ujuvkai paigaldust</a></p>
                        <p class="text-yellow-400">20.04.2021</p>
                    </div>
                    <div class="flex flex-col sm:flex-row items-start">
                        <p class="text-sm sm:text-base">Jaanuari algul alustati kaevet????dega Muratsi sadama akvatooriumis, kus v??ljakaevatava osa asemel tuleb ujuvkai, mis annab sadamale juurde 16 paadi kohta.
                            Projekti ''Muratsi piirkonna traditsioonilise kalap????gi edendamine ning kala-ja mereturisimi arendamine'' jaoks saadi rahastus l??bi Saarte Kalanduse EMKF kalanduspiirkonna kohaliku arengu strateegia 3.3 kaudu.
                        </p>
                        <div x-data="{}" class="">
                            <a @click="$dispatch('img-modal', {  imgModalSrc: '/img/posts/postitus1.png'})">
                                <img class="h-full w-full" alt="Placeholder" src="/img/posts/postitus1.png">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="border-t-2 border-b-2 border-gray-800 py-8 my-8">
                    <div class="flex mb-4 justify-between">
                        <p href="#" class=" text-lg underline sm:text-xl"><a href="/kena-tegu"> Kena Tegu 2020 nominent</p>
                        <p class="text-yellow-400">20.04.2021</p>
                    </div>
                    <div class="flex flex-col sm:flex-row items-start">
                        <p class="text-sm sm:text-base">Saaremaa Arenduskeskuse poolt korraldatud tunnustus??ritusel saime m??rgitud kui Kena Tegu 2020 nominent. Tunnustus saadi uute tegevustega sadamaalal, kui kogukonna kaasabil korrastati haljastus ning suplusala.
                        </p>
                        <div x-data="{}" class="">
                            <a @click="$dispatch('img-modal', {  imgModalSrc: '/img/posts/postitus2.png'})">
                                <img class="h-full w-full" alt="Placeholder" src="/img/posts/postitus2.png">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="flex mb-4 justify-between">
                    <p href="#" class=" text-lg underline sm:text-xl"><a href="/muratsi-sadam-sai">Muratsi sadam sai uue m??nguv??ljaku ning ilus ilm t??i talgutele rohkelt inimesi</a></p>
                    <p class="text-yellow-400">20.04.2021</p>
                </div>
                <div class="flex flex-col sm:flex-row items-start">
                    <p class="text-sm sm:text-base">MT??-de Muratsi Kalur ja Muratsi K??la Selts korraldatud talgutele kogunes laup??eva hommikul veerandsada k??laelanikku. Suur osa t????st sai tehtud masinate abil: killustik ja muld laiali laotatud ning maapind enam-v??hem tasaseks silutud.</p>
                    <div x-data="{}" class="">
                        <a @click="$dispatch('img-modal', {  imgModalSrc: '/img/posts/postitus3.png'})">
                            <img class="h-full w-full sm:ml-4 pt-4 sm:pt-0" alt="Placeholder" src="/img/posts/postitus3.png">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php /* FOOTER-------------------------*/ ?>
    <div class="mt-72"></div>
    <footer class="footer bg-gray-800 relative pt-1 border-b-2 border-gray-800">
        <div class="container md:px-32 mx-auto mb-8 px-6">
            <div class="sm:flex sm:mt-8">
                <div class="mt-8 sm:mt-0 sm:w-full sm:px-8 flex flex-col md:flex-row justify-between">
                    <div class="flex flex-col text-white text-md">
                        <span class="my-2">Muratsi Kalur MT??</span>
                        <span class="my-2">+372 5397 4722</span>
                        <span class="my-2">sadam@muratsi.ee</span>
                    </div>
                    <div class="flex flex-col text-white text-md">
                        <span class="my-2">??riregistri kood 80413704</span>
                        <span class="my-2">Swedbank</span>
                        <span class="my-2">IBAN nr EE482200221066231854</span>
                    </div>
                    <div class="flex flex-col text-white text-md">
                        <span class="my-2">Muratsi k??la</span>
                        <span class="my-2">Saaremaa Vald</span>
                        <span class="my-2">93859 Saaremaa, Eesti</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
