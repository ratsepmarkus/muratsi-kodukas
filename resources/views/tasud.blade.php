<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Sadama tasud</title>
    <style>
   @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
   * {font-family: 'Roboto', sans-serif;}
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
<body class="bg-primary bg-background">
    <?php /*------IMG what moves------------*/?>
    <div class="sidebar invisible md:visible">
    <a href="/taname"><img src="/img/badge.png" class="badge"></a>
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
            <a class="px-2 py-2 mt-2 text-sm  bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/">AVALEHT</a>
            <a class="px-2 py-2 mt-2 text-sm  bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/kontakt">KONTAKT</a>
            <a class="px-2 py-2 mt-2 text-sm  text-gray-900 bg-gray-200 rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/tasud">TASUD</a>
            <a class="px-2 py-2 mt-2 text-sm  bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/eeskirjad">EESKIRJAD</a>
            <a class="px-2 py-2 mt-2 text-sm  bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/uritused">ÜRITUSED</a>
            <a class="px-2 py-2 mt-2 text-sm  bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/visioon">VISIOON</a>
            <a class="px-2 py-2 mt-2 text-sm  bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/galerii">GALERII</a>
            <a class="px-2 py-2 mt-2 text-sm  bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/taname">TÄNAME</a>
            <div @click.away="open = false" class="relative" x-data="{ open: false }"></div>
        </nav>
      </div>
    </div>

    <?php /* MAIN--------------------------------------*/?>
    <div class="container mx-auto mb-12 mt-8 px-6 bg-blue-700 rounded-2xl">
        <div class="sm:flex sm:mt-8">
            <div class="mt-8 sm:mt-0 sm:w-full sm:p-8 text-white md:flex-row">
                <h1 class="sm:text-3xl text-center font-bold text-yellow-400 text-2xl mb-8">Muratsi sadamaala hinnakiri 2021</h1>
                <div class="grid grid-rows-3 grid-cols-4 grid-flow-col gap-4 text-xs md:text-base text-center">
                    <div class="font-bold text-left">Sadama tasud külalistele</div>
                    <div class="text-left">Kaikoha kasutus alusele kuni 6 meetrit</div>
                    <div class="text-left">Kaikoha kasutus alusele 6 - 8 meetrit</div>
                    <div class="font-bold">Hooaeg</div>
                    <div>80€</div>
                    <div>100€</div>
                    <div class="font-bold">Kuu</div>
                    <div>25€</div>
                    <div>50€</div>
                    <div class="font-bold">Ööpäev</div>
                    <div>5€</div>
                    <div>5€</div>
                </div>
                <hr class="my-8">
                <div class="grid grid-rows-3 grid-cols-4 grid-flow-col gap-4 text-xs md:text-base text-center">
                    <div class="font-bold text-left">Sadama tasud Muratsi küla elanikele</div>
                    <div class="text-left">Kaikoha kasutus kuni 6 meetrit</div>
                    <div class="text-left">Kaikoha kasutus kuni 6-8 meetrit</div>
                    <div class="font-bold">Hooaeg</div>
                    <div>75€</div>
                    <div>80€</div>
                    <div class="font-bold">Kuu</div>
                    <div>15€</div>
                    <div>40€</div>
                    <div class="font-bold">Ööpäev</div>
                    <div>5€</div>
                    <div>5€</div>
                </div>
                <div class="mt-8">
                    <div class="flex"><svg class="place-self-center" width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14 8.37141L11.9 5.79559L9.8 8.37141H11.1342C10.829 9.96133 9.4276 11.2505 7.7 11.5306V7.0835H9.1V5.79559H7.7V4.72405C8.7801 4.42847 9.5998 3.48573 9.5998 2.39229C9.5998 1.07283 8.4336 0 7 0C5.5664 0 4.4002 1.07283 4.4002 2.39229C4.4002 3.48573 5.2199 4.42847 6.3 4.72405V5.79559H4.9V7.0835H6.3V11.5306C4.5717 11.2505 3.1703 9.96133 2.8658 8.37141H4.2L2.1 5.79559L0 8.37141H1.4511C1.8088 10.8732 4.2014 12.8791 7 12.8791C9.7986 12.8791 12.1912 10.8732 12.5489 8.37141H14ZM5.8002 2.39229C5.8002 1.78375 6.3385 1.28791 7 1.28791C7.6615 1.28791 8.1998 1.78375 8.1998 2.39229C8.1998 3.00469 7.6391 3.54175 7 3.54175C6.3609 3.54175 5.8002 3.00469 5.8002 2.39229Z" fill="white"/></svg>Paadi veeskamine slipilt tasuta.</div>
                    <div class="flex"><svg class="place-self-center" width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14 8.37141L11.9 5.79559L9.8 8.37141H11.1342C10.829 9.96133 9.4276 11.2505 7.7 11.5306V7.0835H9.1V5.79559H7.7V4.72405C8.7801 4.42847 9.5998 3.48573 9.5998 2.39229C9.5998 1.07283 8.4336 0 7 0C5.5664 0 4.4002 1.07283 4.4002 2.39229C4.4002 3.48573 5.2199 4.42847 6.3 4.72405V5.79559H4.9V7.0835H6.3V11.5306C4.5717 11.2505 3.1703 9.96133 2.8658 8.37141H4.2L2.1 5.79559L0 8.37141H1.4511C1.8088 10.8732 4.2014 12.8791 7 12.8791C9.7986 12.8791 12.1912 10.8732 12.5489 8.37141H14ZM5.8002 2.39229C5.8002 1.78375 6.3385 1.28791 7 1.28791C7.6615 1.28791 8.1998 1.78375 8.1998 2.39229C8.1998 3.00469 7.6391 3.54175 7 3.54175C6.3609 3.54175 5.8002 3.00469 5.8002 2.39229Z" fill="white"/></svg>Haagise või treileri parkimine sadamaalal 5€ /päev.</div>
                    <div class="flex"><svg class="place-self-center" width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14 8.37141L11.9 5.79559L9.8 8.37141H11.1342C10.829 9.96133 9.4276 11.2505 7.7 11.5306V7.0835H9.1V5.79559H7.7V4.72405C8.7801 4.42847 9.5998 3.48573 9.5998 2.39229C9.5998 1.07283 8.4336 0 7 0C5.5664 0 4.4002 1.07283 4.4002 2.39229C4.4002 3.48573 5.2199 4.42847 6.3 4.72405V5.79559H4.9V7.0835H6.3V11.5306C4.5717 11.2505 3.1703 9.96133 2.8658 8.37141H4.2L2.1 5.79559L0 8.37141H1.4511C1.8088 10.8732 4.2014 12.8791 7 12.8791C9.7986 12.8791 12.1912 10.8732 12.5489 8.37141H14ZM5.8002 2.39229C5.8002 1.78375 6.3385 1.28791 7 1.28791C7.6615 1.28791 8.1998 1.78375 8.1998 2.39229C8.1998 3.00469 7.6391 3.54175 7 3.54175C6.3609 3.54175 5.8002 3.00469 5.8002 2.39229Z" fill="white"/></svg>Haagist ja sõidukit ei jäeta teistele ette.</div>
                </div>
                <div class="mt-8">
                    <p>Aluse registreerimine sadam@muratsi.ee</p>
                    <p>Parkimise tasumine MTÜ Muratsi Kalur arvelduskontole a/a EE482200221066231854. </p>
                    <p>Selgitusse märkida järelhaagise number ja kuupäev.</p>
                    <p>NB! Järelhaagised, mis jäävad teistele ette ning ei ole registreeritud, viiakse sadamaalalt ära.</p>
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
