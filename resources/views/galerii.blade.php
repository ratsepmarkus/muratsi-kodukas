<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.js"></script>
<script src="https://unpkg.com/flickity-fullscreen@1/fullscreen.js"></script>
<style>
   @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
   * {font-family: 'Roboto', sans-serif;}
  .sidebar {
  position: fixed;
  z-index: 1;
  top: 67%;
  overflow-x: hidden;
  }
  .badge{
    height: 18rem;
  }

  *
    body { font-family: sans-serif; }
    html { overflow-y: scroll; }
    .carousel {
      background: #EEE;
    }
    .carousel img {
      display: flex;
      height: 250px;
      margin-right: 1rem;
      max-width: none;
    }

    .flickity-page-dots{
        display:none;
    }

</style>
</head>
<body class="bg-primary bg-background bg-no-repeat">
  <?php /*------IMG what moves------------*/?>
  <div class="sidebar invisible md:visible">
    <a href="/taname"><img src="/img/vapp1.png" class="badge"></a>
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
            <a class="px-2 py-2 mt-2 text-sm  bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/tasud">TASUD</a>
            <a class="px-2 py-2 mt-2 text-sm  bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/eeskirjad">EESKIRJAD</a>
            <a class="px-2 py-2 mt-2 text-sm  bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/uritused">ÜRITUSED</a>
            <a class="px-2 py-2 mt-2 text-sm  bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/visioon">VISIOON</a>
            <a class="px-2 py-2 mt-2 text-sm  text-gray-900 bg-gray-200 rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/galerii">GALERII</a>
            <a class="px-2 py-2 mt-2 text-sm  bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/taname">TÄNAME</a>
            <div @click.away="open = false" class="relative" x-data="{ open: false }"></div>
        </nav>
      </div>
    </div>


  <?php /*MAIN----------------------------------------------------------------------*/?>
  <?php /*------test------------*/?>
  <div x-data="{ imgModal : false, imgModalSrc : '', imgModalDesc : '' }">
        <template @img-modal.window="imgModal = true; imgModalSrc = $event.detail.imgModalSrc; imgModalDesc = $event.detail.imgModalDesc;" x-if="imgModal">
          <div x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90" x-on:click.away="imgModalSrc = ''" class="p-2 fixed h-100 inset-0 z-50 overflow-hidden flex justify-center items-center bg-black bg-opacity-75">
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
      <?php /*------test------------*/?>

  <div class="container mx-auto mb-12 mt-8 px-6 bg-blue-700 rounded-2xl">
    <div class="sm:flex sm:mt-8">
      <div class="mt-8 sm:mt-0 sm:w-full sm:p-8 text-white md:flex-row">
        <h1 class="sm:text-3xl font-bold text-yellow-400 text-2xl mb-16">GALERII</h1>
        <h1 class="text-white text-xl font-bold">Muratsi sadama talgud 2020</h1>
        <p class="text-white ">Pildid: Saarte hääl</p>
        <div class="bg-blue-700 flex flex-col mb-14">
          <div class="carousel" data-flickity='{ "imagesLoaded": true, "wrapAround": true }'>

          <div  x-data="{}" class="">
              <a @click="$dispatch('img-modal', {  imgModalSrc: '/img/talgud2020/gal1.png'})">
                <img alt="Placeholder" src="/img/talgud2020/gal1.png">
              </a>
          </div>

          <div  x-data="{}" class="">
              <a @click="$dispatch('img-modal', {  imgModalSrc: '/img/talgud2020/gal2.png'})">
                <img alt="Placeholder" src="/img/talgud2020/gal2.png">
              </a>
          </div>

          <div  x-data="{}" class="">
              <a @click="$dispatch('img-modal', {  imgModalSrc: '/img/talgud2020/gal3.png'})">
                <img alt="Placeholder" src="/img/talgud2020/gal3.png">
              </a>
          </div>

          <div  x-data="{}" class="">
              <a @click="$dispatch('img-modal', {  imgModalSrc: '/img/talgud2020/gal4.png'})">
                <img alt="Placeholder" src="/img/talgud2020/gal4.png">
              </a>
          </div>

          <div  x-data="{}" class="">
              <a @click="$dispatch('img-modal', {  imgModalSrc: '/img/talgud2020/gal5.png'})">
                <img alt="Placeholder" src="/img/talgud2020/gal5.png">
              </a>
          </div>

          <div  x-data="{}" class="">
              <a @click="$dispatch('img-modal', {  imgModalSrc: '/img/talgud2020/gal6.png'})">
                <img alt="Placeholder" src="/img/talgud2020/gal6.png">
              </a>
          </div>

          <div  x-data="{}" class="">
              <a @click="$dispatch('img-modal', {  imgModalSrc: '/img/talgud2020/gal7.png'})">
                <img alt="Placeholder" src="/img/talgud2020/gal7.png">
              </a>
          </div>

          <div  x-data="{}" class="">
              <a @click="$dispatch('img-modal', {  imgModalSrc: '/img/talgud2020/gal8.png'})">
                <img alt="Placeholder" src="/img/talgud2020/gal8.png">
              </a>
          </div>

          <div  x-data="{}" class="">
              <a @click="$dispatch('img-modal', {  imgModalSrc: '/img/talgud2020/gal9.png'})">
                <img alt="Placeholder" src="/img/talgud2020/gal9.png">
              </a>
          </div>

          <div  x-data="{}" class="">
              <a @click="$dispatch('img-modal', {  imgModalSrc: '/img/talgud2020/gal10.png'})">
                <img alt="Placeholder" src="/img/talgud2020/gal10.png">
              </a>
          </div>

          <div  x-data="{}" class="">
              <a @click="$dispatch('img-modal', {  imgModalSrc: '/img/talgud2020/gal11.png'})">
                <img alt="Placeholder" src="/img/talgud2020/gal11.png">
              </a>
          </div>

          <div  x-data="{}" class="">
              <a @click="$dispatch('img-modal', {  imgModalSrc: '/img/talgud2020/gal12.png'})">
                <img alt="Placeholder" src="/img/talgud2020/gal12.png">
              </a>
          </div>


          <div  x-data="{}" class="">
              <a @click="$dispatch('img-modal', {  imgModalSrc: '/img/talgud2020/gal13.png'})">
                <img alt="Placeholder" src="/img/talgud2020/gal13.png">
              </a>
          </div>


          <div  x-data="{}" class="">
              <a @click="$dispatch('img-modal', {  imgModalSrc: '/img/talgud2020/gal14.png'})">
                <img alt="Placeholder" src="/img/talgud2020/gal14.png">
              </a>
          </div>


          <div  x-data="{}" class="">
              <a @click="$dispatch('img-modal', {  imgModalSrc: '/img/talgud2020/gal15.png'})">
                <img alt="Placeholder" src="/img/talgud2020/gal15.png">
              </a>
          </div>


          <div  x-data="{}" class="">
              <a @click="$dispatch('img-modal', {  imgModalSrc: '/img/talgud2020/gal16.png'})">
                <img alt="Placeholder" src="/img/talgud2020/gal16.png">
              </a>
          </div>


          <div  x-data="{}" class="">
              <a @click="$dispatch('img-modal', {  imgModalSrc: '/img/talgud2020/gal17.png'})">
                <img alt="Placeholder" src="/img/talgud2020/gal17.png">
              </a>
          </div>

          <div  x-data="{}" class="">
              <a @click="$dispatch('img-modal', {  imgModalSrc: '/img/talgud2020/gal18.png'})">
                <img alt="Placeholder" src="/img/talgud2020/gal18.png">
              </a>
          </div>


          <div  x-data="{}" class="">
              <a @click="$dispatch('img-modal', {  imgModalSrc: '/img/talgud2020/gal19.png'})">
                <img alt="Placeholder" src="/img/talgud2020/gal19.png">
              </a>
          </div>


          <div  x-data="{}" class="">
              <a @click="$dispatch('img-modal', {  imgModalSrc: '/img/talgud2020/gal20.png'})">
                <img alt="Placeholder" src="/img/talgud2020/gal20.png">
              </a>
          </div>


          <div  x-data="{}" class="">
              <a @click="$dispatch('img-modal', {  imgModalSrc: '/img/talgud2020/gal21.png'})">
                <img alt="Placeholder" src="/img/talgud2020/gal21.png">
              </a>
          </div>


          <div  x-data="{}" class="">
              <a @click="$dispatch('img-modal', {  imgModalSrc: '/img/talgud2020/gal22.png'})">
                <img alt="Placeholder" src="/img/talgud2020/gal22.png">
              </a>
          </div>


          <div  x-data="{}" class="">
              <a @click="$dispatch('img-modal', {  imgModalSrc: '/img/talgud2020/gal23.png'})">
                <img alt="Placeholder" src="/img/talgud2020/gal23.png">
              </a>
          </div>



          <div  x-data="{}" class="">
              <a @click="$dispatch('img-modal', {  imgModalSrc: '/img/talgud2020/gal24.png'})">
                <img alt="Placeholder" src="/img/talgud2020/gal24.png">
              </a>
          </div>


          <div  x-data="{}" class="">
              <a @click="$dispatch('img-modal', {  imgModalSrc: '/img/talgud2020/gal25.png'})">
                <img alt="Placeholder" src="/img/talgud2020/gal25.png">
              </a>
          </div>


          <div  x-data="{}" class="">
              <a @click="$dispatch('img-modal', {  imgModalSrc: '/img/talgud2020/gal26.png'})">
                <img alt="Placeholder" src="/img/talgud2020/gal26.png">
              </a>
          </div>


          <div  x-data="{}" class="">
              <a @click="$dispatch('img-modal', {  imgModalSrc: '/img/talgud2020/gal27.png'})">
                <img alt="Placeholder" src="/img/talgud2020/gal27.png">
              </a>
          </div>


          <div  x-data="{}" class="">
              <a @click="$dispatch('img-modal', {  imgModalSrc: '/img/talgud2020/gal28.png'})">
                <img alt="Placeholder" src="/img/talgud2020/gal28.png">
              </a>
          </div>


          <div  x-data="{}" class="">
              <a @click="$dispatch('img-modal', {  imgModalSrc: '/img/talgud2020/gal29.png'})">
                <img alt="Placeholder" src="/img/talgud2020/gal29.png">
              </a>
          </div>


          <div  x-data="{}" class="">
              <a @click="$dispatch('img-modal', {  imgModalSrc: '/img/talgud2020/gal30.png'})">
                <img alt="Placeholder" src="/img/talgud2020/gal30.png">
              </a>
          </div>


          <div  x-data="{}" class="">
              <a @click="$dispatch('img-modal', {  imgModalSrc: '/img/talgud2020/gal31.png'})">
                <img alt="Placeholder" src="/img/talgud2020/gal31.png">
              </a>
          </div>

          <div  x-data="{}" class="">
              <a @click="$dispatch('img-modal', {  imgModalSrc: '/img/talgud2020/gal32.png'})">
                <img alt="Placeholder" src="/img/talgud2020/gal32.png">
              </a>
          </div>

          <div  x-data="{}" class="">
              <a @click="$dispatch('img-modal', {  imgModalSrc: '/img/talgud2020/gal33.png'})">
                <img alt="Placeholder" src="/img/talgud2020/gal33.png">
              </a>
          </div>

          </div>
        </div>
        <h1 class="text-white text-xl font-bold">Muratsi sadam 1960-1980</h1>
        <p class="text-white">Pildid: Argo Sepp</p>
        <div class="bg-blue-700 flex flex-col">
          <div class="carousel" data-flickity='{ "imagesLoaded": true, "wrapAround": true }'>

          <div  x-data="{}" class="">
              <a @click="$dispatch('img-modal', {  imgModalSrc: '/img/60-80/img1.png'})">
                <img alt="Placeholder" src="/img/60-80/img1.png">
              </a>
          </div>

          <div  x-data="{}" class="">
              <a @click="$dispatch('img-modal', {  imgModalSrc: '/img/60-80/img2.png'})">
                <img alt="Placeholder" src="/img/60-80/img2.png">
              </a>
          </div>

          <div  x-data="{}" class="">
              <a @click="$dispatch('img-modal', {  imgModalSrc: '/img/60-80/img3.png'})">
                <img alt="Placeholder" src="/img/60-80/img3.png">
              </a>
          </div>

          <div  x-data="{}" class="">
              <a @click="$dispatch('img-modal', {  imgModalSrc: '/img/60-80/img4.png'})">
                <img alt="Placeholder" src="/img/60-80/img4.png">
              </a>
          </div>

          <div  x-data="{}" class="">
              <a @click="$dispatch('img-modal', {  imgModalSrc: '/img/60-80/img5.png'})">
                <img alt="Placeholder" src="/img/60-80/img5.png">
              </a>
          </div>

          <div  x-data="{}" class="">
              <a @click="$dispatch('img-modal', {  imgModalSrc: '/img/60-80/img6.png'})">
                <img alt="Placeholder" src="/img/60-80/img6.png">
              </a>
          </div>

          </div>
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
    <script>
      var elem = document.querySelector('.main-carousel');
      var flkty = new Flickity( elem, {
        cellAlign: 'left',
        contain: true
      });
      var flkty = new Flickity( '.main-carousel', {
      });
    </script>
</body>
</html>
