<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity-fullscreen@1/fullscreen.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity-fullscreen@1/fullscreen.js">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.js"></script>
    <style>
        /* external css: flickity.css, fullscreen.css */

* { box-sizing: border-box; }

body { font-family: sans-serif; }

.carousel {
  background: #EEE;
}

.carousel-image {
  display: block;
  height: 300px;
  /* set min-width, allow images to set cell width */
  min-width: 150px;
  max-width: 100%;
  margin-right: 10px;
  /* vertically center */
  top: 50%;
  transform: translateY(-50%)
}

.carousel.is-fullscreen .carousel-image {
  height: auto;
  max-height: 100%;
}

    </style>
</head>
<body>
    <h1>Flickity - fullscreen images natural size</h1>

<!-- Flickity HTML init -->
<div class="carousel" data-flickity='{ "fullscreen": true, "lazyLoad": 2 }'>
    <img class="carousel-image"
      data-flickity-lazyload="https://picsum.photos/720/540/?image=517" />
    <img class="carousel-image"
      data-flickity-lazyload="https://picsum.photos/540/720/?image=696" />
    <img class="carousel-image"
      data-flickity-lazyload="https://picsum.photos/720/540/?image=56" />
    <img class="carousel-image"
      data-flickity-lazyload="https://picsum.photos/800/500/?image=1084" />
    <img class="carousel-image"
      data-flickity-lazyload="https://picsum.photos/720/540/?image=1080" />
    <img class="carousel-image"
      data-flickity-lazyload="https://picsum.photos/640/640/?image=1074" />
    <img class="carousel-image"
      data-flickity-lazyload="https://picsum.photos/720/540/?image=1069" />
    <img class="carousel-image"
      data-flickity-lazyload="https://picsum.photos/800/500/?image=1062" />
    <img class="carousel-image"
      data-flickity-lazyload="https://picsum.photos/720/540/?image=1002" />
    <img class="carousel-image"
      data-flickity-lazyload="https://picsum.photos/640/640/?image=935" />
    <img class="carousel-image"
      data-flickity-lazyload="https://picsum.photos/720/540/?image=855" />
    <img class="carousel-image"
      data-flickity-lazyload="https://picsum.photos/640/640/?image=824" />
</div>

</body>
</html>
