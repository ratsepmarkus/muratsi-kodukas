<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<style>
* {box-sizing: border-box}
.mySlides1, .mySlides2 {display: none}
img {vertical-align: middle;}
/* Slideshow container */
.slideshow-container {max-width: 1000px;position: relative;}
/* Next & previous buttons */
.prev, .next {cursor: pointer;position: absolute;top: 50%;width: auto;padding: 16px;margin-top: -22px;color: white;font-weight: bold;font-size: 18px;transition: 0.6s ease;border-radius: 0 3px 3px 0;user-select: none;}
/* Position the "next button" to the right */
.next {right: 0;border-radius: 3px 0 0 3px;}
/* On hover, add a grey background color */
.prev:hover, .next:hover {background-color: #f1f1f1;color: black;}
</style>
</head>
<body class="bg-blue-900 bg-background bg-no-repeat">

  <?php /* NAV--------------------------------- */ ?>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <div class="w-full text-white bg-blue-600 dark-mode:text-gray-200 dark-mode:bg-gray-800 border-b-2 mb-8">
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
          <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/kontakt">KONTAKT</a>
          <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/tasud">TASUD</a>
          <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/eeskirjad">EESKIRJAD</a>
          <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/uritused">ÜRITUSED</a>
          <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/visioon">VISIOON</a>
          <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/galerii">GALERII</a>
          <a class="px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-gray-200 rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/taname">TÄNAME</a>
          <div @click.away="open = false" class="relative" x-data="{ open: false }"></div>
      </nav>
    </div>
  </div>
  <?php /*MAIN----------------------------------------------------------------------*/?>
  <div class="container mx-auto mb-12 mt-8 px-6 bg-blue-700 rounded-2xl">
    <div class="sm:flex sm:mt-8">
      <div class="mt-8 sm:mt-0 sm:w-full sm:p-8 text-white md:flex-row">
        <h1 class="text-white text-3xl">Muratsi sadama talgud 2020</h1>
        <p class="text-white text-xl">Pildid: Saarte hääl</p>
        <div class="bg-blue-700 flex flex-col mb-14">
          <div class="slideshow-container pt-4 self-center">
            <div class="mySlides1"><img src="/img/talgud2020/gal1.png" style="width:100%"></div>
            <div class="mySlides1"><img src="/img/talgud2020/gal2.png" style="width:100%"></div>
            <div class="mySlides1"><img src="/img/talgud2020/gal3.png" style="width:100%"></div>
            <div class="mySlides1"><img src="/img/talgud2020/gal4.png" style="width:100%"></div>
            <div class="mySlides1"><img src="/img/talgud2020/gal5.png" style="width:100%"></div>
            <div class="mySlides1"><img src="/img/talgud2020/gal6.png" style="width:100%"></div>
            <div class="mySlides1"><img src="/img/talgud2020/gal7.png" style="width:100%"></div>
            <div class="mySlides1"><img src="/img/talgud2020/gal8.png" style="width:100%"></div>
            <div class="mySlides1"><img src="/img/talgud2020/gal9.png" style="width:100%"></div>
            <div class="mySlides1"><img src="/img/talgud2020/gal10.png" style="width:100%"></div>
            <div class="mySlides1"><img src="/img/talgud2020/gal11.png" style="width:100%"></div>
            <div class="mySlides1"><img src="/img/talgud2020/gal12.png" style="width:100%"></div>
            <div class="mySlides1"><img src="/img/talgud2020/gal13.png" style="width:100%"></div>
            <div class="mySlides1"><img src="/img/talgud2020/gal14.png" style="width:100%"></div>
            <div class="mySlides1"><img src="/img/talgud2020/gal15.png" style="width:100%"></div>
            <div class="mySlides1"><img src="/img/talgud2020/gal16.png" style="width:100%"></div>
            <div class="mySlides1"><img src="/img/talgud2020/gal17.png" style="width:100%"></div>
            <div class="mySlides1"><img src="/img/talgud2020/gal18.png" style="width:100%"></div>
            <div class="mySlides1"><img src="/img/talgud2020/gal19.png" style="width:100%"></div>
            <div class="mySlides1"><img src="/img/talgud2020/gal20.png" style="width:100%"></div>
            <div class="mySlides1"><img src="/img/talgud2020/gal21.png" style="width:100%"></div>
            <div class="mySlides1"><img src="/img/talgud2020/gal22.png" style="width:100%"></div>
            <div class="mySlides1"><img src="/img/talgud2020/gal23.png" style="width:100%"></div>
            <div class="mySlides1"><img src="/img/talgud2020/gal24.png" style="width:100%"></div>
            <div class="mySlides1"><img src="/img/talgud2020/gal25.png" style="width:100%"></div>
            <div class="mySlides1"><img src="/img/talgud2020/gal26.png" style="width:100%"></div>
            <div class="mySlides1"><img src="/img/talgud2020/gal27.png" style="width:100%"></div>
            <div class="mySlides1"><img src="/img/talgud2020/gal28.png" style="width:100%"></div>
            <div class="mySlides1"><img src="/img/talgud2020/gal29.png" style="width:100%"></div>
            <div class="mySlides1"><img src="/img/talgud2020/gal30.png" style="width:100%"></div>
            <div class="mySlides1"><img src="/img/talgud2020/gal31.png" style="width:100%"></div>
            <div class="mySlides1"><img src="/img/talgud2020/gal32.png" style="width:100%"></div>
            <div class="mySlides1"><img src="/img/talgud2020/gal33.png" style="width:100%"></div>
            <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
            <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
          </div>
        </div>
        <h1 class="text-white text-3xl">Muratsi sadam 1960-1980</h1>
        <p class="text-white text-xl">Pildid: Argo Sepp</p>
        <div class="bg-blue-700 flex flex-col">
          <div class="slideshow-container pt-4 self-center">
            <div class="mySlides2"><img src="/img/60-80/img1.png" style="width:100%"></div>
            <div class="mySlides2"><img src="/img/60-80/img2.png" style="width:100%"></div>
            <div class="mySlides2"><img src="/img/60-80/img3.png" style="width:100%"></div>
            <div class="mySlides2"><img src="/img/60-80/img4.png" style="width:100%"></div>
            <div class="mySlides2"><img src="/img/60-80/img5.png" style="width:100%"></div>
            <div class="mySlides2"><img src="/img/60-80/img6.png" style="width:100%"></div>
            <a class="prev" onclick="plusSlides(-1, 1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1, 1)">&#10095;</a>
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
var slideIndex = [1,1];
var slideId = ["mySlides1", "mySlides2"]
showSlides(1, 0);
showSlides(1, 1);

function plusSlides(n, no) {
  showSlides(slideIndex[no] += n, no);
}

function showSlides(n, no) {
  var i;
  var x = document.getElementsByClassName(slideId[no]);
  if (n > x.length) {slideIndex[no] = 1}    
  if (n < 1) {slideIndex[no] = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex[no]-1].style.display = "block";  
}
</script>
</body>
</html> 
