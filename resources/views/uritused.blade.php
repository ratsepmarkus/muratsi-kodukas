<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Üritused</title>
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
                <a class="px-4 py-2 mt-2 text-sm text-yellow-400" href="/uritused">ÜRITUSED</a>
                <a class="px-4 py-2 mt-2 text-sm text-white rounded-xl border border-solid border-transparent hover:border-current cursor-pointer select-none" href="/visioon">VISIOON</a>
                <a class="px-4 py-2 mt-2 text-sm text-white rounded-xl border border-solid border-transparent hover:border-current cursor-pointer select-none" href="/galerii">GALERII</a>
                <a class="px-4 py-2 mt-2 text-sm text-white rounded-xl border border-solid border-transparent hover:border-current cursor-pointer select-none" href="/uudised">UUDISED</a>
                <a class="px-4 py-2 mt-2 text-sm text-white rounded-xl border border-solid border-transparent hover:border-current cursor-pointer select-none" href="/taname">TÄNAME</a>
                <div @click.away="open = false" class="relative" x-data="{ open: false }"></div>
            </nav>
        </div>
    </div>
    <?php /*MAIN ----------------------------*/ ?>
    <div class="container md:px-32 mx-auto mb-8 mt-8 px-6">
        <div class="sm:flex px-4 sm:mt-8 bg-blue-700 rounded-2xl">
            <div class="mt-8 sm:mt-0 sm:w-full sm:px-8 text-white flex-none md:flex-row py-8 h-96">
                <div class="sm:text-3xl text-center font-bold text-yellow-400 text-2xl mb-8">Muratsi sadamas toimuvad üritused ning tegevused 2021</div>
                <div>
                    <div>10. juuli Muratsi minikohvikute päeva lõpetamine</div>
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
