<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Täname</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
        * {font-family: 'Montserrat', sans-serif;}
    </style>
</head>
<body class="bg-blue-900 bg-background bg-no-repeat">
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
            <a class="px-2 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/visioon">VISIOON</a>
            <a class="px-2 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/galerii">GALERII</a>
            <a class="px-2 py-2 mt-2 text-sm font-semibold text-gray-900 bg-gray-200 rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/taname">TÄNAME</a>
            <div @click.away="open = false" class="relative" x-data="{ open: false }"></div>
        </nav>
      </div>
    </div>
    
    <?php /* MAIN--------------------------------------*/?>
    <div class="container mx-auto mb-12 mt-8 px-6 bg-blue-700 rounded-2xl">
        <div class="sm:flex sm:mt-8">
            <div class="mt-8 sm:mt-0 sm:w-full sm:p-8 text-white md:flex-row">
                <h1 class="border-0 border-black-1000 mt-8 text-3xl">Saarte Kalandus</h1>
                <p class=" border-0 border-black-1000 text-xl mb-4">Meeldiva koostöö eest ning suhtlemisel erinevate projektide koostamisel Euroopa Merendus- ja Kalandusfondist.</p>
                <p class="font-bold">EMKF raknduskava 2014-2020 Toetatud projektid</p>
                <p>• 2020 - Muratsi piirkonna traditsioonilise kalapüügi edendamine ning kala- ja mereturismi arendamine</p>
                <p>• 2019 - Muratsi sadama mänguväljaku- ja tervisekompleksi rajamine</p>
                <p>• 2017 - Muratsi sadama rekonstrueerimine</p>
                <h1 class="border-0 border-black-1000 mt-8 text-3xl">Saaremaa vald</h1>
                <p class=" border-0 border-black-1000 text-xl mb-4">Suurepärase koostöö eest! Saaremaa vald on aidanud erinevate projektide omaosaluse rahastamisel ning pakub igakülgset abi sadama haldamisel.</p>
                <h1 class="border-0 border-black-1000 mt-8 text-3xl">MTÜ Võimalus</h1>
                <p class=" border-0 border-black-1000 text-xl mb-4">Sügisvooru 2020 projekti rahastusest on tehtud sadamale uus koduleht, rajatud elektrisüsteemid valgustuse ja turvakaamerate jaoks.</p>
                <h1 class="border-0 border-black-1000 mt-8 text-3xl">Muratsi küla inimesed</h1>
                <p class=" border-0 border-black-1000 text-xl mb-12">2020 aastal valminud laste mänguväljak ning tervisekompleksi omaosaluse rahastusele andis panuse Helle Liigsoo, Aivo Jürisson, Raul Pors, Eilika Trummar, Marje Kruusmägi, Aare Kruusmägi, Viljo Veesaar, Anu Ots, Mari Rauna, Helen Kombe, Kadi Hiie,Margo Jäe, Jaanus Heina, Elvis Reinmägi, Taavi Sevastjanov, Andro Ots ja Andres Kirst!</p>
                <div class="flex flex-wrap justify-evenly pb-4">
                    <img src="/img/taname/kalandus.png" alt="" class="h-28 self-center">
                    <img src="/img/taname/vald.png" alt="" class="h-24 self-center">
                    <img src="/img/taname/voimalus.png" alt="" class="h-16 self-center">
                    <img src="/img/taname/emkf.png" alt="" class="h-24 self-center">
                    <img src="/img/taname/emkf2.png" alt="" class="h-24 self-center">
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