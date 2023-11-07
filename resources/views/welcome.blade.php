<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Nitya Hoyos | Full-Stack Developer | WordPress, Laravel, ReactJS, NodeJS, Shopify | 10+ Years Experience</title>

          <!-- Styles -->
          <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com"></link>
        <link
          href="https://fonts.googleapis.com/css2?family=Cutive+Mono&family=DM+Sans:wght@400;500;700&family=Lato:wght@100;300;400;700;900&family=Montserrat:wght@100;300;700&family=Oswald:wght@200;400;500;600;700&family=Roboto+Mono:wght@300;500;700&family=Space+Mono:wght@400;700&family=Syncopate:wght@400;700&family=VT323&family=Yellowtail&display=swap"
          rel="stylesheet"
        ></link>

        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body class="antialiased">

        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            </div>
    <main class="Home_main__OVLM4">
   <section class="Home_welcome__aWiKA" style="background:linear-gradient(45deg, rgba(0, 0, 0, 1), rgba(34, 34, 85, 1))">
      <div class="Home_video__fullscreen__9aDvK">
         <div style="position: relative; width: 100%; height: 100%; overflow: hidden; pointer-events: auto; touch-action: none;" class="canvas">
            <div style="width:100%;height:100%">
               <canvas style="display: block; width: 1180px; height: 858px; touch-action: none;" data-engine="three.js r150" width="2360" height="1716"></canvas>
            </div>
         </div>
      </div>
      <div class="Home_container__97eC3">
         <div class="Home_content__WcTpR">
            <span class="Home_subtitle__tYBZW">Hello, my name is</span>
            <h1 class="Home_h1__pCgGu">
               Nitya
               <div>Hoyos</div>
            </h1>
            <p class="Home_context__Ejg7N">I am a developer with nearly a decade of experience working at agencies, I have mastered the art of developing elegant, high-performing, and powerful web applications, ecommerce stores, and various other projects.</p>
         </div>
         <div class="Home_btn_content__PvvjD"></div>
      </div>
      <img class="Home_arrow__2WCZ0" src="/_next/static/media/arrow.22337a2c.svg" alt="">
   </section>
   <section class="Home_followme__eTWWW">
      <div class="Home_phone__DAGCv"><a href="tel:424-269-4720">+1 (424) 269-4720</a></div>
      <div>
         <div class="Home_followlabel__I422i">Follow Me</div>
         <div class="Home_soc__jkbmt">
            <a target="_blank" rel="noreferrer" href="https://www.linkedin.com/in/nityananda-h-b5a65080/">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                  <path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path>
               </svg>
            </a>
            <a target="_blank" rel="noreferrer" href="https://github.com/tronsymphony">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                  <path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path>
               </svg>
            </a>
            <a target="_blank" rel="noreferrer" href="https://www.instagram.com/la_rider21/">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                  <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
               </svg>
            </a>
            <a target="_blank" href="mailto:nityahoyos@gmail.com?subject=forwarddesign from our Website">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"></path>
               </svg>
            </a>
         </div>
      </div>
   </section>
   <section class="Home_services__eZnJM">
      <div class="Home_overlay__sMVTo"></div>
      <div class="Home_container__97eC3">
         <header class="Home_heade__VJWOq">
            <h2 class="Home_h2__fz30_">The Tools and Talent.</h2>
            <div class="Home_btn__gqI1M">
               <a href="mailto:nityahoyos@gmail.com" class="btn_link btn_link--light">
                  Get In Touch
                  <span>
                     <svg width="8" height="12" xmlns="http://www.w3.org/2000/svg">
                        <path d="M.293 1.707 1.707.293 7.414 6l-5.707 5.707-1.414-1.414L4.585 6z" fill="currentColor"></path>
                     </svg>
                  </span>
               </a>
            </div>
         </header>
         <div class="Home_content__WcTpR">
            <div class="Home_item__bKNkF">
               <div class="Home_img__p02QA">
                  <svg viewBox="0 0 163.5 149.87">
                     <path d="M61.31,37.47h6.81V27.25h88.56V88.56H105.59v6.81H163.5V0H61.31ZM68.12,6.81h88.56V20.44H68.12Z"></path>
                     <path d="M102.19,40.87H0V126H102.19Zm-6.82,78.35H6.81V68.12H95.37Zm0-57.91H6.81V47.69H95.37Z"></path>
                     <polygon points="132.84 143.06 44.28 143.06 44.28 129.43 37.47 129.43 37.47 149.87 139.65 149.87 139.65 98.78 132.84 98.78 132.84 143.06"></polygon>
                     <rect x="74.94" y="10.22" width="6.81" height="6.81"></rect>
                     <rect x="88.56" y="10.22" width="6.81" height="6.81"></rect>
                     <rect x="102.19" y="10.22" width="6.81" height="6.81"></rect>
                     <rect x="27.25" y="51.09" width="6.81" height="6.81"></rect>
                     <rect x="40.87" y="51.09" width="6.81" height="6.81"></rect>
                  </svg>
               </div>
               <h3 class="Home_h3__CieP8">Web Design</h3>
               <p>Crafting custom high-end website designs that are rooted in smart, brand-centric approaches and results-driven strategies is our area of expertise. We take pride in creating elegant solutions that showcase your brand in the best possible light.</p>
            </div>
            <div class="Home_item__bKNkF">
               <div class="Home_img__p02QA">
                  <svg viewBox="0 0 167.37 138.26">
                     <path d="M0,0V138.26H167.37V0ZM160.1,7.28V21.83H7.28V7.28ZM7.28,131V29.11H160.1V131Z"></path>
                     <rect x="14.55" y="10.92" width="7.28" height="7.28"></rect>
                     <rect x="29.11" y="10.92" width="7.28" height="7.28"></rect>
                     <rect x="43.66" y="10.92" width="7.28" height="7.28"></rect>
                     <rect x="54.58" y="83.69" width="29.11" height="7.28"></rect>
                     <path d="M53.31,66.37,27.84,44.54,23.1,50.06,45.35,69.13,23.1,88.2l4.74,5.53L53.31,71.89a3.63,3.63,0,0,0,0-5.52Z"></path>
                  </svg>
               </div>
               <h3 class="Home_h3__CieP8">Web Development</h3>
               <p>Whether it‘s corporate website development, e-commerce solutions, custom web applications, or product configurators, our code exhibits intelligence and elegance.</p>
            </div>
            <div class="Home_item__bKNkF">
               <div class="Home_img__p02QA">
                  <svg viewBox="0 0 150.67 150.67">
                     <path d="M110.11,69.38a28.13,28.13,0,0,1-9.38,0,3.23,3.23,0,0,0-3.4,1.73l-2.18,4.37-6.74-2.79L90,68.05a3.2,3.2,0,0,0-1.18-3.63,28.43,28.43,0,0,1-6.64-6.63,3.24,3.24,0,0,0-3.62-1.18l-4.63,1.54-2.79-6.74,4.36-2.18a3.21,3.21,0,0,0,1.73-3.39,28.13,28.13,0,0,1,0-9.38,3.21,3.21,0,0,0-1.73-3.4l-4.37-2.19,2.79-6.74,4.64,1.55a3.22,3.22,0,0,0,3.62-1.18,28.24,28.24,0,0,1,6.63-6.64L85,12.64a34.52,34.52,0,0,0-6.66,6.23l-5.3-1.76a3.21,3.21,0,0,0-4,1.81L64,31.18a3.2,3.2,0,0,0,1.52,4.09l5,2.5a35.4,35.4,0,0,0,0,6.75l-5,2.5A3.2,3.2,0,0,0,64,51.11L69.1,63.37a3.22,3.22,0,0,0,4,1.81l5.29-1.76a34.14,34.14,0,0,0,4.78,4.76l-1.77,5.3a3.21,3.21,0,0,0,1.82,4l12.25,5.07a3.15,3.15,0,0,0,1.23.25A3.22,3.22,0,0,0,99.55,81L102,76a34.6,34.6,0,0,0,6.75,0l2.5,5L117,78.14l-3.51-7A3.26,3.26,0,0,0,110.11,69.38Z"></path>
                     <path d="M104.66,57.7a15,15,0,0,0,12.91-7.44L112,47a8.49,8.49,0,1,1-9.48-12.46l-1.6-6.21a14.9,14.9,0,0,0,3.72,29.33Z"></path>
                     <path d="M79.49,82.47,74.41,70.21a3.2,3.2,0,0,0-4-1.81l-5.3,1.76a34.68,34.68,0,0,0-4.77-4.77l1.76-5.3a3.21,3.21,0,0,0-1.81-4L48.06,51A3.21,3.21,0,0,0,44,52.57l-2.5,5a34.6,34.6,0,0,0-6.75,0l-2.49-5A3.23,3.23,0,0,0,28.13,51L15.88,56.12a3.2,3.2,0,0,0-1.82,4l1.76,5.3A34.88,34.88,0,0,0,9.6,72.06l5.22,3.73a28.24,28.24,0,0,1,6.63-6.64,3.22,3.22,0,0,0,1.18-3.62L21.09,60.9l6.74-2.79L30,62.47A3.24,3.24,0,0,0,33.4,64.2a28.46,28.46,0,0,1,9.39,0,3.21,3.21,0,0,0,3.39-1.73l2.19-4.37,6.74,2.79-1.55,4.64a3.2,3.2,0,0,0,1.18,3.61,28.47,28.47,0,0,1,6.64,6.64A3.24,3.24,0,0,0,65,77l4.63-1.54,2.79,6.74-4.36,2.18a3.21,3.21,0,0,0-1.73,3.39,28.39,28.39,0,0,1,0,9.38,3.21,3.21,0,0,0,1.73,3.4l4.36,2.19-2.79,6.73L65,107.9a3.2,3.2,0,0,0-3.62,1.18,28.82,28.82,0,0,1-6.63,6.64l3.72,5.22a34.92,34.92,0,0,0,6.67-6.24l5.3,1.77a3.21,3.21,0,0,0,4-1.82l5.08-12.25A3.2,3.2,0,0,0,78,98.31l-5-2.5a34.6,34.6,0,0,0,0-6.75l5-2.5A3.2,3.2,0,0,0,79.49,82.47Z"></path>
                     <path d="M38.47,76.94a16,16,0,0,0-16,16h6.41a9.62,9.62,0,1,1,9.62,9.61V109a16,16,0,1,0,0-32Z"></path>
                     <path d="M128.23,64.11a64.12,64.12,0,1,0-64.12,64.12A64.19,64.19,0,0,0,128.23,64.11ZM64.11,121.82a57.71,57.71,0,1,1,57.71-57.71A57.78,57.78,0,0,1,64.11,121.82Z"></path>
                     <path d="M149.73,135.58l-28.85-28.85-4.53,4.53,26.58,26.59-5.08,5.08-26.59-26.58-4.53,4.53,28.85,28.85a3.19,3.19,0,0,0,2.27.94,3.16,3.16,0,0,0,2.26-.94l9.62-9.62A3.2,3.2,0,0,0,149.73,135.58Z"></path>
                  </svg>
               </div>
               <h3 class="Home_h3__CieP8">SEO</h3>
               <p>The landscape of search engine optimization regulations is constantly evolving, and we make it our priority to stay ahead of the curve. By staying up-to-date with the latest changes, we are able to effectively assist our clients in achieving higher rankings.</p>
            </div>
            <div class="Home_item__bKNkF">
               <div class="Home_img__p02QA">
                  <svg viewBox="0 0 189 174.28">
                     <path d="M157,114.77,138.67,83.38A30.8,30.8,0,0,0,145.91,72a23,23,0,0,0,1.29-8.86A19.07,19.07,0,0,0,140.93,50a21,21,0,0,0-4.81-3.22c-5.56-2.72-12.69-3.24-19.69-1.5L96,10.16A3.64,3.64,0,0,0,93,8.34a3.69,3.69,0,0,0-3.19,1.43L35.53,80.71,1.82,100A3.7,3.7,0,0,0,.5,105l25.56,43.83a3.7,3.7,0,0,0,3.2,1.85,3.81,3.81,0,0,0,1.83-.49l5.85-3.35,36.55,26.72a3.71,3.71,0,0,0,2.16.7,3.61,3.61,0,0,0,1.83-.49l18.27-10.44a3.68,3.68,0,0,0,.37-6.2L62.25,132.4l1.58-.9,0,0,90.42-11.25a3.69,3.69,0,0,0,2.75-5.52Zm-23.17-63.3a15.46,15.46,0,0,1,3.59,2.41,13.48,13.48,0,0,1,2.68,3.3,13.72,13.72,0,0,1,1.85,6.23,17.66,17.66,0,0,1-1,6.84,25,25,0,0,1-5,8.38L119.21,50A23.45,23.45,0,0,1,133.81,51.47Zm-58,117.24L42.59,144.47l15.28-8.74L91.05,160ZM29.84,144.86l-24-41.12,33.32-19,24,41.11Zm40-19.38a5.83,5.83,0,0,0-.51-1.14L43.76,80.49a6.48,6.48,0,0,0-.69-1L92.6,14.85l58.61,100.5Z"></path>
                     <path d="M139.86,25.41a3.35,3.35,0,1,1,2.45-6.24,45.31,45.31,0,0,1,25.58,58.77,3.35,3.35,0,1,1-6.24-2.45,38.64,38.64,0,0,0-21.79-50.08Z"></path>
                     <path d="M143.56,6.48A3.36,3.36,0,0,1,146,.23a67.8,67.8,0,0,1,38.27,87.91A3.35,3.35,0,0,1,178,85.68a61.09,61.09,0,0,0-34.48-79.2Z"></path>
                  </svg>
               </div>
               <h3 class="Home_h3__CieP8">Digital Marketing</h3>
               <p>My carefully crafted SEO strategies are designed to increase visibility within the algorithmic search results to deliver relevant, targeted traffic to your website.</p>
            </div>
            <div class="Home_item__bKNkF">
               <div class="Home_img__p02QA">
                  <svg viewBox="0 0 153.28 137.25">
                     <path d="M75,0H60.64C45.78,0,33.48,9.14,29.51,18.29,18.65,20.72,11.24,30.52,11.24,42.82c0,.22,0,.44,0,.65C4.35,48,0,57.12,0,67.46A30.39,30.39,0,0,0,6.9,86.78c-1.11,7.46.4,17.8,6.49,24.75,3.23,3.68,9,8,18.73,7.65,6.1,12.1,16.33,18.07,31.05,18.07A69.43,69.43,0,0,0,75.65,136a3.4,3.4,0,0,0,2.79-3.35V3.4A3.4,3.4,0,0,0,75,0ZM37.64,114.94c.24-9.35,5.24-25.86,23-25.86v-6.8A27.56,27.56,0,0,0,38.41,92.72c-3.6-1.17-6.56-4.62-6.56-7H25c0,5.18,4.23,10.45,9.7,12.87A38,38,0,0,0,31,112.36c-5.25-.12-9.44-1.88-12.45-5.32-4.83-5.49-6-14.53-4.63-20.62a3.38,3.38,0,0,0-1-3.2c-3.64-3.47-6.1-9.8-6.1-15.76,0-8.62,3.81-16.27,9.48-19A3.41,3.41,0,0,0,18.17,45,19.63,19.63,0,0,1,18,42.82c0-8.11,4.3-14.67,10.78-17.18,1.6,17.94,13.24,20.52,24.67,20.52V39.35c-11.83,0-17.9-2.75-18.05-17.51,2.18-6.3,12.12-15,25.2-15h11V25.9c-6,1.51-12.58.09-15-5.89l-6.31,2.55c2.76,6.81,9.42,10.72,17.07,10.72a23.81,23.81,0,0,0,4.24-.39V54.28a15.94,15.94,0,0,0-8-2.29h0c-4.69,0-9.2,2.25-13.42,6.68-3.66,3.85-10.5,5.24-15,3.35A13.76,13.76,0,0,0,21.29,50.69V57.5c4.25,0,7.33,2.82,7.33,6.72,0,3.25-2.15,6.56-4.89,7.53L26,78.16A14.58,14.58,0,0,0,34.59,69a19.56,19.56,0,0,0,5.15.68,21.6,21.6,0,0,0,15.38-6.36c2.88-3,5.73-4.57,8.49-4.57h0c2.57,0,5.26,1.4,8,4v35.5a15.89,15.89,0,0,0-16.74,9.78l6.26,2.67a9.08,9.08,0,0,1,10.48-5.56v24.59C54.12,132.37,43.55,127.71,37.64,114.94Z"></path>
                     <path d="M149.88,54.43H137.33a46.91,46.91,0,0,0-5.27-12.77l9.08-9.45a3.41,3.41,0,0,0-.06-4.78l-15.3-15.17a3.4,3.4,0,0,0-4.77,0l-9.32,9.12a47.43,47.43,0,0,0-12.84-5.21V3.4A3.4,3.4,0,0,0,95.45,0H85.24V6.8h6.81V18.89a3.41,3.41,0,0,0,2.77,3.35,41.37,41.37,0,0,1,15.52,6.26,3.39,3.39,0,0,0,4.22-.43l8.81-8.62,10.54,10.46-8.59,8.94a3.4,3.4,0,0,0-.41,4.19,40.66,40.66,0,0,1,6.33,15.42,3.41,3.41,0,0,0,3.35,2.77h11.89V74.84H134.59a3.41,3.41,0,0,0-3.35,2.77A39.82,39.82,0,0,1,125,92.79a3.41,3.41,0,0,0,.46,4.24l8.57,8.63-10.43,10.46-9-8.65a3.4,3.4,0,0,0-4.19-.4,41.47,41.47,0,0,1-15.52,6.29,3.39,3.39,0,0,0-2.77,3.34v12.57H85.24v6.81H95.45a3.4,3.4,0,0,0,3.4-3.41V119.44a47.27,47.27,0,0,0,12.87-5.24l9.56,9.14a3.4,3.4,0,0,0,4.76-.06l15.17-15.21a3.39,3.39,0,0,0,0-4.8l-9.08-9.14a45.12,45.12,0,0,0,5.19-12.48h12.55a3.41,3.41,0,0,0,3.4-3.41V57.83A3.4,3.4,0,0,0,149.88,54.43Z"></path>
                     <path d="M115.86,67.8A30.53,30.53,0,0,0,85.24,37.42v6.8a23.58,23.58,0,1,1,0,47.15v6.8A30.53,30.53,0,0,0,115.86,67.8Z"></path>
                  </svg>
               </div>
               <h3 class="Home_h3__CieP8">Sales Optimization</h3>
               <p>With our expert conversion rate optimization and digital transformation strategies, we elegantly enhance sales leads, engagements, and market share.</p>
            </div>
         </div>
      </div>
   </section>
   <section class="Home_portfolio__ce2IP">
      <div class="Home_container__97eC3">
         <div class="Home_header_space__CFUIP">
            <header class="Home_header__CyQ_T">
               <h2 class="h2">Projects</h2>
            </header>
            <div class="content">
               <p>Leveraging established frameworks like WordPress CMS, Laravel, ReactJS, React Native, AWS Cloud, Git, and more…I construct highly performant, scalable, secure software in less time than ever before. Striking a critical balance between custom development and framework implementation to ensure each project succeeds on time and on budget.</p>
               <a href="mailto:nityahoyos@gmail.com" class="btn_link btn_link--light">
                  Get In Touch
                  <span>
                     <svg width="8" height="12" xmlns="http://www.w3.org/2000/svg">
                        <path d="M.293 1.707 1.707.293 7.414 6l-5.707 5.707-1.414-1.414L4.585 6z" fill="currentColor"></path>
                     </svg>
                  </span>
               </a>
            </div>
         </div>
         <div class="Home_showcase__VaiB_">
            <div class="Home_device__q_o1C">
               <div class="Home_singleimage__QafGp">
                  <div class="Home_overlay__sMVTo"><img src="/_next/static/media/godaddy.2693a0e5.webp" alt=""></div>
               </div>
               <div class="Home_overlaydeviceimage__gqvQR">
                  <div class="Home_overlaydevice__Y0PzI" style="background:url('/_next/static/media/device-mbp-15-nonotch.dc8c232b.png') center center no-repeat;background-size:cover"></div>
               </div>
            </div>
            <span class="Home_casestudy_name__nRat1">
               <h5><a href="https://www.godaddy.com/ventureforward/" target="_blank" rel="noreferrer">Venture Forward</a></h5>
               <span>Powered by: Javascript, HTML, SCSS, BEM, WordPress</span>
               <div class="Home_case_about__7uD8G">GoDaddy Venture Forward is a research initiative that quantifies the impact 23+ million online microbusinesses have on their local economies, and provides a unique view into the attitudes, demographics, and needs of these entrepreneurs.</div>
               <a href="https://www.godaddy.com/ventureforward/" target="_blank" rel="noreferrer" class="btn_link ">
                  View Site
                  <span>
                     <svg width="8" height="12" xmlns="http://www.w3.org/2000/svg">
                        <path d="M.293 1.707 1.707.293 7.414 6l-5.707 5.707-1.414-1.414L4.585 6z" fill="currentColor"></path>
                     </svg>
                  </span>
               </a>
            </span>
         </div>
         <div class="Home_showcase__VaiB_">
            <div class="Home_device__q_o1C">
               <div class="Home_singleimage__QafGp">
                  <div class="Home_overlay__sMVTo"><img src="/_next/static/media/organicolivia.4b0cb81c.webp" alt=""></div>
               </div>
               <div class="Home_overlaydeviceimage__gqvQR">
                  <div class="Home_overlaydevice__Y0PzI" style="background:url('/_next/static/media/device-mbp-15-nonotch.dc8c232b.png') center center no-repeat;background-size:cover"></div>
               </div>
            </div>
            <span class="Home_casestudy_name__nRat1">
               <h5><a href="https://www.organicolivia.com/" target="_blank" rel="noreferrer">Organic Olivia</a></h5>
               <span>Powered by: Shopify, Javascript, HTML, SCSS, BEM</span>
               <div class="Home_case_about__7uD8G">Organic Olivia is a modern approach to traditional herbal medicine. We blend science with intuition to create focused formulas that get to the root cause.</div>
               <a href="https://www.organicolivia.com/" target="_blank" rel="noreferrer" class="btn_link ">
                  View Site
                  <span>
                     <svg width="8" height="12" xmlns="http://www.w3.org/2000/svg">
                        <path d="M.293 1.707 1.707.293 7.414 6l-5.707 5.707-1.414-1.414L4.585 6z" fill="currentColor"></path>
                     </svg>
                  </span>
               </a>
            </span>
         </div>
         <div class="Home_showcase__VaiB_">
            <div class="Home_device__q_o1C">
               <div class="Home_singleimage__QafGp">
                  <div class="Home_overlay__sMVTo"><img src="/_next/static/media/muse.c6a1883b.webp" alt=""></div>
               </div>
               <div class="Home_overlaydeviceimage__gqvQR">
                  <div class="Home_overlaydevice__Y0PzI" style="background:url('/_next/static/media/device-mbp-15-nonotch.dc8c232b.png') center center no-repeat;background-size:cover"></div>
               </div>
            </div>
            <span class="Home_casestudy_name__nRat1">
               <h5><a href="https://choosemuse.com/" target="_blank" rel="noreferrer">Muse</a></h5>
               <span>Powered by: WordPress, Javascript, HTML, SCSS, BEM</span>
               <div class="Home_case_about__7uD8G">Muse is a wearable brain sensing headband. The device measures brain activity via 4 electroencephalography sensors. An accompanying mobile app converts the EEG signal into audio feedback that is fed to the user via headphones.</div>
               <a href="https://choosemuse.com/" target="_blank" rel="noreferrer" class="btn_link ">
                  View Site
                  <span>
                     <svg width="8" height="12" xmlns="http://www.w3.org/2000/svg">
                        <path d="M.293 1.707 1.707.293 7.414 6l-5.707 5.707-1.414-1.414L4.585 6z" fill="currentColor"></path>
                     </svg>
                  </span>
               </a>
            </span>
         </div>
         <div class="Home_more_projects__ZNacQ">
            <div class="Home_more_projects_grid__fIQV8">
               <div class="Home_projects__NuV5o">
                  <header class="Home_projects_header__5rEmM">
                     <h2 class="title">Personal Projects</h2>
                  </header>
                  <div class="Home_project__Vl2xM">
                     <a href="https://github.com/tronsymphony/portfolio" target="_blank">
                        <h3 class="title">ForwwardDesign</h3>
                        <p>Personal site made with Typescript and NextJs</p>
                     </a>
                  </div>
                  <div class="Home_project__Vl2xM">
                     <a href="https://github.com/tronsymphony/wordpress-plugin" target="_blank">
                        <h3 class="title">WordPress Plugin</h3>
                        <p>A demo of my ability to make WordPress plugins</p>
                     </a>
                  </div>
                  <div class="Home_project__Vl2xM">
                     <a href="https://github.com/tronsymphony/laravel-detailsite" target="_blank">
                        <h3 class="title">Laravel Project</h3>
                        <p>A project to learn Laravel that includes user registration, reactjs frontend, and api creation</p>
                     </a>
                  </div>
               </div>
               <div class="Home_projects__NuV5o">
                  <header class="Home_projects_header__5rEmM">
                     <h2 class="title">More Projects </h2>
                  </header>
                  <div class="Home_project__Vl2xM">
                     <a href="https://ireneneuwirth.com/" target="_blank">
                        <h3 class="title">Irene Neuwirth</h3>
                        <p>High-end boutique showcasing the eponymous designer's bold, colorful necklaces &amp; earrings.</p>
                     </a>
                  </div>
                  <div class="Home_project__Vl2xM">
                     <a href="https://www.stonefiregrill.com/" target="_blank">
                        <h3 class="title">Stone Fire Grill</h3>
                        <p>A premier takeout, catering and fast-casual family dining restaurant with locations across Southern California offering generous family meals for everyone.</p>
                     </a>
                  </div>
                  <div class="Home_project__Vl2xM">
                     <a href="https://seed.com/" target="_blank">
                        <h3 class="title">Seed</h3>
                        <p>Seed Health, popularly known as Seed, is an American health and life science company, most known for developing probiotics. Founded in 2015 by Ara Katz and Raja Dhir, Seed was founded to “use bacteria to improve human and environmental health“.</p>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</main>

<footer class="Footer_footer_main__c8Opy">
    <div class="container">
        <div class="Footer_content__8dWV_">
            <h2 class="h2">START OUR JOURNEY TOGETHER</h2>
            <p>From front-end to back-end and everything in between, let's build something amazing together. Work with me to bring your vision to life with top-notch coding, seamless integration, and unparalleled functionality.</p>
            <button class="btn_link btn_link--light" aria-describedby="popup-1">
                Start a project request
                <span>
                    <svg width="8" height="12" xmlns="http://www.w3.org/2000/svg"><path d="M.293 1.707 1.707.293 7.414 6l-5.707 5.707-1.414-1.414L4.585 6z" fill="currentColor"></path></svg>
                </span>
            </button>
        </div>
        <div class="Footer_socbox__GjFWJ">
            <div>Follow Me</div>
            <div class="Footer_soc__t4u0Z">
                <a target="_blank" rel="noreferrer" href="https://www.linkedin.com/in/nityananda-h-b5a65080/">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path
                            d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"
                        ></path>
                    </svg>
                </a>
                <a target="_blank" rel="noreferrer" href="https://github.com/tronsymphony">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                        <path
                            d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"
                        ></path>
                    </svg>
                </a>
                <a target="_blank" rel="noreferrer" href="https://www.instagram.com/la_rider21/">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path
                            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
                        ></path>
                    </svg>
                </a>
                <a target="_blank" href="mailto:nityahoyos@gmail.com?subject=forwarddesign from our Website">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path
                            d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"
                        ></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</footer>

        
    </body>
</html>
