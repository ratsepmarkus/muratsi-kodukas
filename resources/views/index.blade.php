<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Avaleht</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

        * {
            font-family: 'Roboto', sans-serif;
        }

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

        .navigation ul li:nth-child(1) {
            --t: 0.4;
            --l: 1.3;
        }

        .navigation ul li:nth-child(2) {
            --t: 0.8;
            --l: 3.1;
        }

        .navigation ul li:nth-child(3) {
            --t: 1.1;
            --l: 5.1;
        }

        .navigation ul li:nth-child(4) {
            --t: 1.45;
            --l: 7.2;
        }

        .navigation ul li:nth-child(5) {
            --t: 1.7;
            --l: 9.79;
        }

        .navigation ul li:nth-child(6) {
            --t: 1.85;
            --l: 12.6;
        }

        .navigation ul li:nth-child(7) {
            --t: 1.9;
            --l: 15;
        }

        .navigation ul li:nth-child(8) {
            --t: 1.95;
            --l: 17;
        }
    </style>
</head>

<body class="bg-primary bg-background">
    <!-- Image that moves -->
    <div class="sidebar hidden md:block">
        <a href="/taname"><img src="/img/vapp1.png" class="badge"></a>
    </div>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <div class="w-full text-white bg-blue-600 dark-mode:text-gray-200 dark-mode:bg-gray-800 border-b-2 visible xl:hidden">

        <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-4 mx-auto xl:items-center xl:justify-between xl:flex-row md:px-6 xl:px-8">
            <div class="p-4 flex flex-row items-center justify-between">
                <a href="#">
                    <img src="/img/ankur.png" alt="ankur" class="h-10">
                </a>
                <button class="xl:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                        <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow pb-4 md:pb-0 hidden xl:flex xl:justify-end xl:flex-row">
                <a class="px-4 py-2 mt-2 text-sm text-yellow-400" href="/">AVALEHT</a>
                <a class="px-4 py-2 mt-2 text-sm text-white " href="/kontakt">KONTAKT</a>
                <a class="px-4 py-2 mt-2 text-sm text-white" href="/tasud">TASUD</a>
                <a class="px-4 py-2 mt-2 text-sm text-white" href="/eeskirjad">EESKIRJAD</a>
                <a class="px-4 py-2 mt-2 text-sm text-white" href="/uritused">ÜRITUSED</a>
                <a class="px-4 py-2 mt-2 text-sm text-white" href="/visioon">VISIOON</a>
                <a class="px-4 py-2 mt-2 text-sm text-white" href="/galerii">GALERII</a>
                <a class="px-4 py-2 mt-2 text-sm text-white" href="/taname">TÄNAME</a>
                <div @click.away="open = false" class="relative" x-data="{ open: false }"></div>
            </nav>
        </div>
    </div>
    <header class="bg-nav-bg bg-no-repeat bg-cover bg-center">
        <img src="/img/logo1.png" alt="logo" class="mb-40 lg:mb-64 h-36 sm:h-44 md:h-52 lg:h-60">
        <nav class="navigation flex items-center invisible xl:visible">
           <x-curved-nav />
            <div x-data="{ imgModal : false, imgModalSrc : '', imgModalDesc : '' }">
                <template @img-modal.window="imgModal = true; imgModalSrc = $event.detail.imgModalSrc; imgModalDesc = $event.detail.imgModalDesc;" x-if="imgModal">
                    <div x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90" x-on:click.away="imgModalSrc = ''" class="p-2 fixed h-200 inset-0 z-50 overflow-hidden flex justify-center items-center bg-black bg-opacity-75">
                        <div @click.away="imgModal = ''" class="flex flex-col overflow-auto">
                            <div class="">
                                <button @click="imgModal = ''" class="float-right pt-2 pr-2 outline-none focus:outline-none">
                                    <svg class="fill-current text-white " xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                            <div class="p-2">
                                <img :alt="imgModalSrc" class="object-contain h-full" :src="imgModalSrc">
                                <p x-text="imgModalDesc" class="text-center text-white"></p>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
            <?php /*------test------------*/ ?>

            <ul>
                <li><a class="px-2 py-2 mt-2 text-md text-yellow-400 " href="/">AVALEHT</a></li>
                <li><a class="px-2 py-2 mt-2 text-md text-white rounded-xl border border-solid border-transparent hover:border-current cursor-pointer select-none" href="/kontakt">KONTAKT</a></li>
                <li><a class="px-2 py-2 mt-2 text-md text-white rounded-xl border border-solid border-transparent hover:border-current cursor-pointer select-none" href="/tasud">TASUD</a></li>
                <li><a class="px-2 py-2 mt-2 text-md text-white rounded-xl border border-solid border-transparent hover:border-current cursor-pointer select-none" href="/eeskirjad">EESKIRJAD</a></li>
                <li><a class="px-2 py-2 mt-2 text-md text-white rounded-xl border border-solid border-transparent hover:border-current cursor-pointer select-none" href="/uritused">ÜRITUSED</a></li>
                <li><a class="px-2 py-2 mt-2 text-md text-white rounded-xl border border-solid border-transparent hover:border-current cursor-pointer select-none" href="/visioon">VISIOON</a></li>
                <li><a class="px-2 py-2 mt-2 text-md text-white rounded-xl border border-solid border-transparent hover:border-current cursor-pointer select-none" href="/galerii">GALERII</a></li>
                <li><a class="px-2 py-2 mt-2 text-md text-white rounded-xl border border-solid border-transparent hover:border-current cursor-pointer select-none" href="/taname">TÄNAME</a></li>
            </ul>
            <?php /*WEATHER DATA*/ ?>
            <div class="flex text-center text-xs lg:text-base font-bold justify-end mr-4 md:mr-12 visible items-center pb-20">
                <div class="bg-black bg-opacity-50 p-2 mx-4 h-full">
                    <h1 class="text-white">Temperatuur</h1>
                    <p class="text-yellow-400" id="temp"></p>
                </div>
                <div class="bg-black bg-opacity-50 p-2">
                    <h1 class="text-white">Tuul</h1>
                    <p class="text-yellow-400" id="wind"></p>
                </div>
            </div>
        </nav>
    </header>



    <?php /*POSTS*/ ?>
    <div class="container md:px-32 mx-auto mb-12 flex text-white flex-col xl:flex-row mt-12 gap-4">
        <div class="mx-auto px-4 bg-blue-700 rounded-2xl shadow-xl xl:w-2/3">
            <div class="mt-8 sm:mt-0 sm:w-full pb-8 sm:p-8 text-white md:flex-row">
                <h1 class="font-bold text-yellow-400 text-4xl mb-8">TEATED</h1>
                <div>
                    <div class="flex mb-4 justify-between">
                        <p href="#" class=" text-lg underline sm:text-xl">Muratsi sadamas alustati ujuvkai paigaldust</p>
                        <p class="text-yellow-400">20.04.2021</p>
                    </div>
                    <div class="flex flex-col sm:flex-row items-start">
                        <p class="text-sm sm:text-base">Jaanuari algul alustati kaevetöödega Muratsi sadama akvatooriumis, kus väljakaevatava osa asemel tuleb ujuvkai, mis annab sadamale juurde 16 paadi kohta.
                            Projekti ''Muratsi piirkonna traditsioonilise kalapüügi edendamine ning kala-ja mereturisimi arendamine'' jaoks saadi rahastus läbi Saarte Kalanduse EMKF kalanduspiirkonna kohaliku arengu strateegia 3.3 kaudu.
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
                        <p href="#" class=" text-lg underline sm:text-xl">Kena Tegu 2020 nominent</p>
                        <p class="text-yellow-400">20.04.2021</p>
                    </div>
                    <div class="flex flex-col sm:flex-row items-start">
                        <p class="text-sm sm:text-base">Saaremaa Arenduskeskuse poolt korraldatud tunnustusüritusel saime märgitud kui Kena Tegu 2020 nominent. Tunnustus saadi uute tegevustega sadamaalal, kui kogukonna kaasabil korrastati haljastus ning suplusala.
                        </p>
                        <div x-data="{}" class="">
                            <a @click="$dispatch('img-modal', {  imgModalSrc: '/img/posts/postitus2.png'})">
                                <img class="h-full w-full" alt="Placeholder" src="/img/posts/postitus2.png">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="flex mb-4 justify-between">
                    <p href="#" class=" text-lg underline sm:text-xl">Muratsi sadam sai uue mänguväljaku ning ilus ilm tõi talgutele rohkelt inimesi</p>
                    <p class="text-yellow-400">20.04.2021</p>
                </div>
                <div class="flex flex-col sm:flex-row items-start">
                    <p class="text-sm sm:text-base">MTÜ-de Muratsi Kalur ja Muratsi Küla Selts korraldatud talgutele kogunes laupäeva hommikul veerandsada külaelanikku. Suur osa tööst sai tehtud masinate abil: killustik ja muld laiali laotatud ning maapind enam-vähem tasaseks silutud.</p>
                    <div x-data="{}" class="">
                        <a @click="$dispatch('img-modal', {  imgModalSrc: '/img/posts/postitus3.png'})">
                            <img class="h-full w-full sm:ml-4 pt-4 sm:pt-0" alt="Placeholder" src="/img/posts/postitus3.png">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-4 xl:w-1/3">
            <div class="w-full mr-2 h-72 p-4 bg-blue-700 rounded-2xl text-center align-middle flex flex-col justify-center shadow-xl">
                <a href="" class="font-bold text-xl  hover:text-yellow-400"><u>SADAMA OTSEPILT</u></a>
                <p>Klõpsa lingile, et näha sadama kaamerast otsepilti</p>
            </div>

            <div class="w-full h-72  p-4 bg-blue-700 rounded-2xl text-center align-middle flex flex-col justify-center shadow-xl">
                <p></p>
            </div>
        </div>
    </div>
    <?php /*FOOTER*/ ?>
    <footer class="footer relative pt-1 border-b-2 border-gray-800 bg-gray-800">
        <div class="container md:px-32 mx-auto mb-8 px-6">
            <div class="sm:flex-col sm:mt-8">
                <div class="sm:flex items-center justify-between mt-8 sm:mt-0 sm:w-full sm:px-8 flex flex-col md:flex-row">
                    <iframe class="w-min sm:w-3/6" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2100.6657680706817!2d22.57390111602817!3d58. 23027618128791!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.    1!3m3!1m2!1s0x46f273672fce260d%3A0xd30537aafe1a1d91!2sMuratsi%20sadam!5e0!3m2!1set!2see!4v1617397529010!5m2!1set!2see" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    <img src="/img/logo.png" alt="logo" class="my-12">
                    <div class="text-white text-center">
                        <h1 class="font-bold text-3xl">MURATSI SADAM</h1>
                        <p class="text-lg">Port of Muratsi</p>
                        <p class="text-lg">58°13'49"N 22°34'34"E</p>
                        <div class="mt-8 flex flex-col justify-center items-center">
                            <a href="https://www.facebook.com/muratsisadam/" target="_blank"><svg width="20" height="23" viewBox="0 0 20 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.65188 0C1.6289 0 0 1.79308 0 4.01996V17.9959C0 20.2228 1.6289 22.0159 3.65188 22.0159H10.5331V13.409H8.46564V10.3103H10.5331V7.6629C10.5331 5.58296 11.7547 3.67321 14.5688 3.67321C15.7081 3.67321 16.5506 3.79362 16.5506 3.79362L16.4844 6.68734C16.4844 6.68734 15.6251 6.6784 14.6875 6.6784C13.6727 6.6784 13.51 7.19309 13.51 8.04752V10.3103H16.565L16.4319 13.4091H13.51V22.0159H16.3481C18.3711 22.0159 20 20.2228 20 17.9959V4.01999C20 1.7931 18.3711 2.20159e-05 16.3481 2.20159e-05H3.65186L3.65188 0Z" fill="white" /></svg></a>
                            <p class="text-lg">muratsi.ee</p>
                        </div>
                    </div>
                </div>
                <hr class="my-16">
                <div class="sm:mt-0 sm:w-full sm:px-8 flex flex-col md:flex-row justify-between">
                    <div class="flex flex-col text-white text-md">
                        <span class="my-2">Muratsi Kalur MTÜ</span>
                        <span class="my-2"><a href="tel:+372 5397 4722">+372 5397 4722</span>
                        <span class="my-2"><a href="mailto:sadam@muratsi.ee">sadam@muratsi.ee</a></span>
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
