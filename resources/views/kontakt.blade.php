<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Kontakt</title>
    <style>textarea {resize: none;}</style>
</head>
<body class="bg-blue-900 bg-background">
    <?php /* NAV--------------------------------- */ ?>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <div class="w-full text-white bg-blue-600 dark-mode:text-gray-200 dark-mode:bg-gray-800 border-b-2">
      <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
        <div class="p-4 flex flex-row items-center justify-between">
          <a href="#">
              <img src="/img/ankur.png" alt="ankur" class="h-10">
          </a>
          <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
            <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
              <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
              <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
        <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">
            <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/">AVALEHT</a>
            <a class="px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-gray-200 rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/kontakt">KONTAKT</a>
            <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/tasud">TASUD</a>
            <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/eeskirjad">EESKIRJAD</a>
            <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/uritused">ÜRITUSED</a>
            <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/visioon">VISIOON</a>
            <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/galerii">GALERII</a>
            <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/taname">TÄNAME</a>
            <div @click.away="open = false" class="relative" x-data="{ open: false }"></div>
        </nav>
      </div>
    </div>
    <?php /* MAIN--------------------------------------*/?>
    <div class="container mx-auto mb-12 mt-8 px-6 bg-blue-700 rounded-2xl">
        <div class="sm:flex sm:mt-8">
            <div class="mt-8 sm:mt-0 sm:w-full sm:p-8 text-white md:flex-row">
                <div class="flex flex-col sm:flex-row justify-between py-8 sm:py-0">
                    <div class="mb-0">
                        <form action="https://formsubmit.co/muratsisadam@gmail.com" method="POST" class="flex flex-col text-black">
                            <div>
                                <input type="text" name="name" placeholder="Juku Kalamees" required class="border-black border-b-4 w-max">
                                <input type="email" name="email" placeholder="kalurjuku@gmail.com" required class="border-black border-b-4 w-max">
                            </div>
                            <input type="text" name="_subject"  placeholder="Tähtis asi!" required class="my-4 border-black border-b-4">
                            <textarea name="message" cols="30" rows="10" placeholder="Sõnum" required class="border-black border-b-4"></textarea>
                            <button type="submit" class="bg-white text-black border-black border-1 rounded-xl w-min py-1 px-2 mt-4">Saada</button>
                        </form>
                    </div>
                    <div class="my-8 sm:my-0">
                        <img src="/img/logo.png" alt="Muratsi sadama logo" class="">
                    </div>
                    <div>
                        <div>
                            <div class="flex"><svg class="place-self-center mr-2" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11 14.6663C13.0251 14.6663 14.6667 13.0247 14.6667 10.9997C14.6667 8.97463 13.0251 7.33301 11 7.33301C8.97497 7.33301 7.33334 8.97463 7.33334 10.9997C7.33334 13.0247 8.97497 14.6663 11 14.6663Z" fill="white"/><path d="M11.9167 3.73008V1.8335H10.0833V3.73008C8.47028 3.93604 6.97123 4.67165 5.82137 5.82152C4.6715 6.97138 3.93588 8.47044 3.72993 10.0835H1.83334V11.9168H3.72993C3.93558 13.53 4.6711 15.0292 5.82102 16.1791C6.97094 17.3291 8.47016 18.0646 10.0833 18.2702V20.1668H11.9167V18.2702C13.5299 18.0647 15.0292 17.3293 16.1792 16.1793C17.3291 15.0294 18.0646 13.5301 18.2701 11.9168H20.1667V10.0835H18.2701C18.0644 8.47032 17.3289 6.9711 16.179 5.82118C15.0291 4.67125 13.5299 3.93574 11.9167 3.73008ZM11 16.5002C7.96676 16.5002 5.50001 14.0334 5.50001 11.0002C5.50001 7.96691 7.96676 5.50016 11 5.50016C14.0333 5.50016 16.5 7.96691 16.5 11.0002C16.5 14.0334 14.0333 16.5002 11 16.5002Z" fill="white"/></svg>
                                58°13'49"N   22°34'34"E</div>
                                <a href="#""><small>Vaata navigatsioonikaarti</small></a>
                            <div class="flex mt-4"><svg class="place-self-center mr-2" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.6364 18.1429L21 21V8.61905L16 6.2381L5.54545 7.66667L1 5.7619V18.1429L7.36364 21M14.6364 18.1429L7.36364 21M14.6364 18.1429V11.4762M7.36364 21V11.4762M11 15.5457C11 15.5457 5.54545 11 5.54545 6.71429C5.54545 3.14286 8.27273 1 11 1C13.7273 1 16.4545 3.14286 16.4545 6.71429C16.4545 11 11 15.5457 11 15.5457ZM11.9091 6.71429C11.9091 6.4617 11.8133 6.21946 11.6428 6.04085C11.4723 5.86225 11.2411 5.7619 11 5.7619C10.7589 5.7619 10.5277 5.86225 10.3572 6.04085C10.1867 6.21946 10.0909 6.4617 10.0909 6.71429C10.0909 6.96687 10.1867 7.20911 10.3572 7.38772C10.5277 7.56633 10.7589 7.66667 11 7.66667C11.2411 7.66667 11.4723 7.56633 11.6428 7.38772C11.8133 7.20911 11.9091 6.96687 11.9091 6.71429Z" stroke="white" stroke-width="2"/></svg>
                                Muratsi küla, Saaremaa Vald, 93859 Saaremaa,  Eesti</div>
                            <div class="flex mt-4"><svg class="place-self-center mr-2" width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.0901 20H15.9713C2.23038 19.1308 0.279381 6.37692 0.00666054 2.48462C-0.0153142 2.18198 0.0172118 1.87756 0.102375 1.58878C0.187538 1.3 0.323664 1.03254 0.502953 0.801732C0.682243 0.570923 0.901172 0.381298 1.1472 0.243723C1.39322 0.106147 1.66151 0.0233245 1.93668 7.21224e-07H5.78972C6.06983 -0.000297559 6.34356 0.0919312 6.57546 0.264741C6.80736 0.43755 6.98675 0.682977 7.09039 0.969232L8.15329 3.84615C8.25564 4.12581 8.28103 4.43237 8.22633 4.72776C8.17163 5.02316 8.03924 5.29436 7.84561 5.50769L6.35614 7.16154C6.5888 8.61596 7.22198 9.95667 8.17 11.0023C9.11803 12.0479 10.3351 12.7479 11.6567 13.0077L13.1741 11.3538C13.371 11.1432 13.6199 11.001 13.8897 10.9449C14.1595 10.8888 14.4384 10.9213 14.6916 11.0385L17.3279 12.2C17.5842 12.3176 17.8028 12.5165 17.956 12.7713C18.1092 13.0261 18.19 13.3253 18.188 13.6308V17.6923C18.188 18.3043 17.967 18.8913 17.5735 19.3241C17.1801 19.7569 16.6465 20 16.0901 20ZM2.10451 1.53846C1.91905 1.53846 1.74118 1.61951 1.61004 1.76376C1.4789 1.90802 1.40522 2.10368 1.40522 2.30769V2.36923C1.72689 6.92308 3.78977 17.6923 16.0482 18.4615C16.1401 18.4678 16.2321 18.454 16.3192 18.421C16.4062 18.388 16.4864 18.3365 16.5553 18.2693C16.6242 18.2021 16.6803 18.1207 16.7205 18.0296C16.7606 17.9385 16.7841 17.8395 16.7894 17.7385V13.6308L14.1531 12.4692L12.1462 14.6615L11.8105 14.6154C5.72679 13.7769 4.90163 7.08462 4.90163 7.01539L4.85968 6.64615L6.84564 4.43846L5.79671 1.53846H2.10451Z" fill="white"/></svg>
                                +372 5397 4722</div>
                            <div class="flex mt-4"><svg class="place-self-center mr-2" width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18.5714 0.638672H1.42857C1.04969 0.638672 0.686328 0.804237 0.418419 1.09894C0.15051 1.39365 0 1.79336 0 2.21014V14.7819C0 15.1987 0.15051 15.5984 0.418419 15.8931C0.686328 16.1878 1.04969 16.3534 1.42857 16.3534H18.5714C18.9503 16.3534 19.3137 16.1878 19.5816 15.8931C19.8495 15.5984 20 15.1987 20 14.7819V2.21014C20 1.79336 19.8495 1.39365 19.5816 1.09894C19.3137 0.804237 18.9503 0.638672 18.5714 0.638672ZM17 2.21014L10 7.53742L3 2.21014H17ZM1.42857 14.7819V2.92516L9.59286 9.14032C9.71243 9.23156 9.85448 9.28046 10 9.28046C10.1455 9.28046 10.2876 9.23156 10.4071 9.14032L18.5714 2.92516V14.7819H1.42857Z" fill="white"/></svg>
                                sadam@muratsi.ee</div>
                            <div class="flex mt-4"><svg class="place-self-center mr-2" width="20" height="23" viewBox="0 0 20 23" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.65188 0C1.6289 0 0 1.79308 0 4.01996V17.9959C0 20.2228 1.6289 22.0159 3.65188 22.0159H10.5331V13.409H8.46564V10.3103H10.5331V7.6629C10.5331 5.58296 11.7547 3.67321 14.5688 3.67321C15.7081 3.67321 16.5506 3.79362 16.5506 3.79362L16.4844 6.68734C16.4844 6.68734 15.6251 6.6784 14.6875 6.6784C13.6727 6.6784 13.51 7.19309 13.51 8.04752V10.3103H16.565L16.4319 13.4091H13.51V22.0159H16.3481C18.3711 22.0159 20 20.2228 20 17.9959V4.01999C20 1.7931 18.3711 2.20159e-05 16.3481 2.20159e-05H3.65186L3.65188 0Z" fill="white"/></svg>
                                www.facebook.com/muratsisadam</div>
                        </div>
                        <div class="mt-8">
                            <h1 class="font-bold">Muratsi Kalur MTÜ</h1>
                            <p>Siim Hiie, <i>juhatuse liige</i></p>
                            <p>Jaan Trummar, <i>juhatuse liige</i></p>
                            <p>Ants Ilmjärv, <i>juhatuse liige</i></p>
                            <p>Vello Salong, <i>liige</i></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php /* FOOTER-------------------------*/?>
    <div class="mt-52"></div>
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