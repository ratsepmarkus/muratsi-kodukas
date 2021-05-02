<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>
<body>
<div class="container mx-auto mb-8 mt-8 px-6 bg-blue-700 rounded-2xl">
        <div class="sm:flex sm:mt-8">
                <div class="flex flex-wrap pb-4 mb-6 ">
                    <img src="/img/visioon/img1.png" alt="" class="h-40 self-center ">
                    <img src="/img/visioon/img2.png" alt="" class="h-40 self-center px-16">
                    <img src="/img/visioon/img3.png" alt="" class="h-40 self-center ">
                    <img src="/img/visioon/img4.png" alt="" class="h-40 self-center px-16">
                </div>
            </div>
            

            <?php /*------test------------*/?>
            <div x-data="{ imgModal : false, imgModalSrc : '', imgModalDesc : '' }">
        <template @img-modal.window="imgModal = true; imgModalSrc = $event.detail.imgModalSrc; imgModalDesc = $event.detail.imgModalDesc;" x-if="imgModal">
          <div x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90" x-on:click.away="imgModalSrc = ''" class="p-2 fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center bg-black bg-opacity-75">
            <div @click.away="imgModal = ''" class="flex flex-col max-w-3xl max-h-full overflow-auto">
              <div class="z-50">
                <button @click="imgModal = ''" class="float-right pt-2 pr-2 outline-none focus:outline-none">
                  <svg class="fill-current text-white " xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                    <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                    </path>
                  </svg>
                </button>
              </div>
              <div class="p-2">
                <img :alt="imgModalSrc" class="object-contain h-1/2-screen" :src="imgModalSrc">
                <p x-text="imgModalDesc" class="text-center text-white"></p>
              </div>
            </div>
          </div>
        </template>
      </div>

      <div x-data="{}" class="px-2">
        <div class="flex -mx-2">
          <div class="w-1/6 px-2">
            <div class="bg-gray-400">
              <a @click="$dispatch('img-modal', {  imgModalSrc: '/img/visioon/img1.png'})" class="cursor-pointer">
                <img alt="Placeholder" class="" src="/img/visioon/img1.png">
              </a>
            </div>
          </div>

          <div class="w-1/6 px-2">
            <div class="bg-gray-400">
              <a @click="$dispatch('img-modal', {  imgModalSrc: '/img/visioon/img2.png', imgModalDesc: '' })" class="cursor-pointer">
                <img alt="Placeholder" class="object-fit w-full" src="/img/visioon/img2.png">
              </a>
            </div>
          </div>

          <div class="w-1/6 px-2">
            <div class="bg-gray-400">
              <a @click="$dispatch('img-modal', {  imgModalSrc: '/img/visioon/img3.png', imgModalDesc: '' })" class="cursor-pointer">
                <img alt="Placeholder" class="object-fit w-full" src="/img/visioon/img3.png">
              </a>
            </div>
          </div>
          <div class="w-1/6 px-2">
            <div class="bg-gray-400">
              <a @click="$dispatch('img-modal', {  imgModalSrc: '/img/visioon/img4.png', imgModalDesc: '' })" class="cursor-pointer">
                <img alt="Placeholder" class="object-fit w-full" src="/img/visioon/img4.png">
              </a>
            </div>
          </div>
</body>
</html>
