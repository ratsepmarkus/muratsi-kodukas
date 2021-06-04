<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title></title>
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
                <a class="px-4 py-2 mt-2 text-sm text-white rounded-xl border border-solid border-transparent hover:border-current cursor-pointer select-none " href="/eeskirjad">EESKIRJAD</a>
                <a class="px-4 py-2 mt-2 text-sm text-white rounded-xl border border-solid border-transparent hover:border-current cursor-pointer select-none" href="/uritused">ÜRITUSED</a>
                <a class="px-4 py-2 mt-2 text-sm text-white rounded-xl border border-solid border-transparent hover:border-current cursor-pointer select-none" href="/visioon">VISIOON</a>
                <a class="px-4 py-2 mt-2 text-sm text-white rounded-xl border border-solid border-transparent hover:border-current cursor-pointer select-none" href="/galerii">GALERII</a>
                <a class="px-4 py-2 mt-2 text-sm text-white rounded-xl border border-solid border-transparent hover:border-current cursor-pointer select-none" href="/uudised">UUDISED</a>
                <a class="px-4 py-2 mt-2 text-sm text-white rounded-xl border border-solid border-transparent hover:border-current cursor-pointer select-none" href="/taname">TÄNAME</a>
                <div @click.away="open = false" class="relative" x-data="{ open: false }"></div>
            </nav>
        </div>
    </div>

    <?php /* MAIN--------------------------------------*/ ?>
    <?php /*------test------------*/ ?>
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
                        <img :alt="imgModalSrc" class="object-contain h-full justify-center" :src="imgModalSrc">
                        <p x-text="imgModalDesc" class="text-center text-white"></p>
                    </div>
                </div>
            </div>
        </template>
    </div>
    <?php /*------test------------*/ ?>
    <div class="container md:px-32 mx-auto mb-12 flex text-white flex-col xl:flex-row mt-12 gap-4">
        <div class="mx-auto px-4 bg-blue-700 rounded-2xl shadow-xl xl:w-2/3">
            <div class="mt-8 sm:mt-0 sm:w-full pb-8 sm:p-8 text-white md:flex-row">
                <h1 class="font-bold text-yellow-400 text-4xl mb-8">Uudised</h1>
                <div>
                    <div class="flex mb-4 justify-between">
                        <p href="#" class=" text-lg underline sm:text-xl">Muratsi sadam sai uue mänguväljaku ning ilus ilm tõi talgutele rohkelt inimesi.</p>
                        <p class="text-yellow-400">20.04.2021</p>
                    </div>
                    <div class="text-center mt-6">
                        <p class="text-sm sm:text-base">MTÜ-de Muratsi Kalur ja Muratsi Küla Selts korraldatud talgutele kogunes laupäeva hommikul veerandsada külaelanikku.  Suur osa tööst sai tehtud masinate abil: killustik ja muld laiali laotatud ning maapind enam-vähem tasaseks silutud. Oma käterammule lootnud talguliste hooleks jäi maapind riisuda, kivid ära korjata, muru külvata ja muld siledaks rullida, samuti võrkpalliplatsi jaoks toodud liiv laiali ajada ja siluda. Mehed tegid segu ja paigaldasid muruplatsile äärekivid. Kolme tunniga said haljastustööd tehtud ja rannaala korda.
                        </p>
                        <p class="mt-6 mb-6">
                        Endiste lagunenud ja ohtlikuks muutunud atraktsioonide asemel ootavad oma küla elanikke ja külalisi nüüd mängulinnak, liivakast, kiiged, pisike karussell, sportimiskompleks, kolm erineva kõrgusega korvilauda, uued pingid, riietumiskabiin ja jalgrattahoidja. “Tänu Saaremaa vallale saime randa ka uue liiva,” lausus Hiie. Tema sõnul on kumu uuest mänguväljakust juba levida jõudnud – lapsi turnib atraktsioonidel iga päev.
                        </p>
                        <p class="mt-6 mb-6">MTÜ Saarte Kalandus toetas Euroopa Merendus- ja Kalandusfondi sügisesest taotlusvoorust Muratsi Kaluri projekti sadama mänguväljaku- ja tervisekompleksi rajamiseks 48 627  euroga. Vajaliku omaosaluse aitasid katta Saaremaa vald ja Muratsi elanikud. “Kuna meie kogukonda kuulub palju häid inimesi, kes said appi tulla oma rasketehnikaga või organiseerida sadamaalale oma vahenditest liiva, mulda ja killustikku, sai see töö plaanitust suuremalt ette võetud, et sadamaala terviklikumalt ilusamaks teha. Samuti planeerisime parkimisala ja sõiduala suuremaks, et nii kutselised kui ka hobikalurid saaksid sadamaalal paremini tegutseda,” rääkis Siim Hiie. </p>
                        <div x-data="{}" class="justify-content: center;">
                            <a @click="$dispatch('img-modal', {  imgModalSrc: '/img/posts/postitus3.png'})">
                                <img class="m-auto h-64 w-100" alt="Placeholder" src="/img/posts/postitus3.png">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php /* FOOTER-------------------------*/ ?>
    <footer class="footer bg-gray-800 relative pt-1 border-b-2 border-gray-800">
        <div class="container md:px-32 mx-auto mb-8 px-6">
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
