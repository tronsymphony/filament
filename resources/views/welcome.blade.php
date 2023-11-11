<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Santa Monica Web Designer | Modern Websites and Services</title>

          <!-- Styles -->
          <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
        

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.css"> </link>
         <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.min.js"></script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
         <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
         <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;600;800;900&display=swap" rel="stylesheet">

        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body class="antialiased" data-scroll-container>
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
   <span class="page_title">
      Nitya Hoyos 
      <div class="sub"> Professional Website Builder</div>
   </span>
   <a class="marquee">
      <div>
         <span>start a project</span>
         <span>start a project</span>
      </div>
   </a>
   <main class="Home_main__OVLM4" >
      <img alt="Desktop gradiant image" 
         class="bgdesktop" 
         src="https://cdn-eahjn.nitrocdn.com/ChEvwayTHZmZJUAdsUNMLXuXZdBprFoQ/assets/images/optimized/rev-21ec0b7/www.spinxdigital.com/app/themes/spinxdigital/assets/images/hp-desktop-gradiant.png">
      <section class="Home_welcome__aWiKA" >
         <div class="Home_container__97eC3">
            <div class="Home_content__WcTpR" >
               <div data-scroll="" class="svg-mask cfadeinup-hero ">
                  <video autoplay="" playsinline="" muted="" loop="" poster="https://cdn-eahjn.nitrocdn.com/ChEvwayTHZmZJUAdsUNMLXuXZdBprFoQ/assets/images/optimized/rev-21ec0b7/www.spinxdigital.com/app/themes/spinxdigital/assets/images/hero-txt-img.jpg" class="">
                     <source src="https://www.spinxdigital.com/app/themes/spinxdigital/assets/images/hero-bg-video.mp4">
                     <source src="https://www.spinxdigital.com/app/themes/spinxdigital/assets/images/Hero.webm">
                  </video>
                  <svg width="975" height="280" viewBox="0 0 975 280" fill="none" class="">
                     <defs>
                        <clipPath id="text-path" clipPathUnits="objectBoundingBox" transform="scale(0.00104, 0.003550)">
                           <path d="M107.73 229.97C155.25 229.97 189.54 205.4 194.4 157.61H151.47C147.96 182.45 131.22 194.6 107.19 194.6C75.33 194.6 56.97 171.38 56.97 131.42V129.26C56.97 89.3 76.41 65.54 106.92 65.54C131.22 65.54 144.18 77.96 147.42 101.18H192.24C187.65 53.66 153.09 30.98 106.65 30.98C51.84 30.98 10.8 70.94 10.8 129.53V131.69C10.8 191.09 44.55 229.97 107.73 229.97ZM204.253 227H243.403V156.26C243.403 129.26 260.143 119.81 289.033 120.08V83.63C266.083 83.9 252.313 93.89 243.403 112.79V85.79H204.253V227ZM335.164 229.97C357.304 229.97 369.724 221.33 377.824 209.99V227H415.894V134.93C415.894 96.59 391.324 82.55 356.764 82.55C322.204 82.55 295.744 97.4 293.314 130.88H330.304C331.924 118.73 338.944 110.9 354.334 110.9C372.154 110.9 377.284 120.08 377.284 136.82V142.49H361.354C318.154 142.49 287.914 154.91 287.914 187.85C287.914 217.55 309.514 229.97 335.164 229.97ZM346.774 202.7C332.464 202.7 326.254 195.95 326.254 185.69C326.254 170.57 339.484 165.71 362.164 165.71H377.284V177.59C377.284 193.25 364.054 202.7 346.774 202.7ZM440.977 227H479.857V113.6H510.637V85.79H479.857V68.51C479.857 57.71 484.987 49.88 497.407 49.88C503.077 49.88 507.937 50.96 511.717 52.31V22.88C505.507 20.99 499.837 20.18 491.467 20.18C460.147 20.18 440.977 36.65 440.977 69.59V85.79H422.347V113.6H440.977V227ZM572.58 229.7C583.11 229.7 590.94 227.81 596.34 225.92V195.68C591.75 197.57 587.43 198.38 581.49 198.38C571.5 198.38 565.83 192.98 565.83 181.64V113.6H595.53V85.79H565.83V55.28H526.95V85.79H508.86V113.6H526.95V185.15C526.95 214.58 542.88 229.7 572.58 229.7ZM608.868 227H647.748V85.79H608.868V227ZM628.038 66.62C640.728 66.62 650.448 57.44 650.448 45.29C650.448 33.14 640.728 23.96 628.038 23.96C615.618 23.96 605.898 33.14 605.898 45.29C605.898 57.44 615.618 66.62 628.038 66.62ZM668.725 227H707.875V145.46C707.875 124.67 720.565 114.41 737.305 114.41C754.585 114.41 762.145 123.59 762.145 142.76V227H801.295V137.09C801.295 99.29 781.585 82.55 753.775 82.55C730.285 82.55 714.895 94.16 707.875 108.2V85.79H668.725V227ZM882.479 279.11C928.919 279.11 956.729 257.78 956.999 215.93V85.79H918.119V106.85C910.019 92.54 896.249 82.55 873.299 82.55C838.199 82.55 811.199 110.9 811.199 151.4V153.29C811.199 195.14 838.469 220.79 872.759 220.79C893.549 220.79 910.289 208.37 918.119 194.6V215.93C918.119 238.07 906.239 250.49 882.479 250.49C862.499 250.49 853.589 242.39 851.159 229.97H812.279C816.059 259.13 836.849 279.11 882.479 279.11ZM884.369 191.36C864.929 191.36 851.159 176.78 851.159 153.29V151.13C851.159 127.91 863.309 112.25 885.179 112.25C906.509 112.25 919.199 126.83 919.199 150.86V152.75C919.199 176.78 904.889 191.36 884.369 191.36Z" fill="black"></path>
                        </clipPath>
                     </defs>
                  </svg>
               </div>
               <h3 class="welcome_h3">Immersive Digital Experiences Online</h3>
            </div>
            <div class="Home_btn_content__PvvjD"></div>
         </div>
         <img class="Home_arrow__2WCZ0" src="/_next/static/media/arrow.22337a2c.svg" alt="">
      </section>
      <!-- blog -->
      <!-- skills -->
      <section class="home_about" >
         <div class="container">
            <h2 class="title">A web design/developer based in Los Angeles</h2>
            <p class="ptitle">I design, build and optimise bespoke Shopify Plus, Laravel, WordPress solutions to elevate and grow your brand. </p>
         </div>
         <div class="" data-scroll="" data-scroll-speed="2" style="transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 30.7606, 0, 1);"> <img title="image-intro1" alt="" width="294" height="308" nitro-lazy-src="https://images.pexels.com/photos/2181230/pexels-photo-2181230.jpeg" class="img-fluid lazyloaded" decoding="async" nitro-lazy-empty="" id="MzY2OjE2OA==-1" src="https://images.pexels.com/photos/2181230/pexels-photo-2181230.jpeg"> </div>
      </section>
      <section class="home_info">
         <div class="container">
            <div class="row">
               <div data-scroll="" class="">
                  <div data-scroll="" class="cfadeinup-inner-hero ">
                     <h2 class="hero-heading gradient-title5">I am a</h2>
                  </div>
                  <div data-scroll="" class="cfadeinup-inner-sub ">
                     <h3 class="h2">Skilled Developer, Strategic Thinker, and a quick learner</h3>
                  </div>
                  <div class="we-text">
                     <p>
                        Based in Los Angeles, I provide services in innovative web development & digital solutions, crafting exceptional digital experiences!
                     </p>
                  </div>
               </div>
               <div data-scroll="" class="stats-block ">
                  <div class="statistics"> 
                     <span class="h2 d-block">10+</span> 
                     <span class="body-large d-block">Years of experience</span> 
                  </div>
                  <div class="statistics"> 
                     <span class="h2 d-block">250+</span> 
                     <span class="body-large d-block">Websites &amp; projects launched</span> 
                  </div>
                  <!-- <div class="statistics"> 
                     <span class="h2 d-block">30+</span> 
                     <span class="body-large d-block">Awards &amp; recognition</span> 
                     </div>  -->
               </div>
            </div>
         </div>
      </section>
      <section class="home_work">
         <div class="container">
            <header>
               <h2 class="title">Featured Projects</h2>
            </header>
         </div>
         <div class="work-casestudy-loop pattern-1">
            <div class="container">
               <div class="row">
                  <div class="info_col" id="featured_0">
                     <div data-scroll="" data-scroll-sticky="" data-scroll-target="#featured_0" class="casestudy-title">
                        <span>The California Endowment Website Redesign</span> 
                        <h3>Creating a Better Online Presence for a Private Health Foundation</h3>
                     </div>
                  </div>
                  <div class="site_project">
                     <div class="casestudy-image" style="background-color:#dde5ef;">
                        <div class="casestudy-image-wrapper "> 
                           <img 
                              style="background-image:url(&quot;https://cdn-eahjn.nitrocdn.com/ChEvwayTHZmZJUAdsUNMLXuXZdBprFoQ/assets/images/optimized/rev-21ec0b7/www.spinxdigital.com/app/uploads/2022/09/TCE-Thumbnail.jpg&quot;);" 
                              alt="The California Endowment Website Design Case Study" 
                              height="370" width="740" > 
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="work-casestudy-loop pattern-2">
            <div class="container">
               <div class="row">
                  <div class="info_col" id="featured_2">
                     <div data-scroll="" data-scroll-sticky="" data-scroll-target="#featured_2" class="casestudy-title">
                        <span>The California Endowment Website Redesign</span> 
                        <h3>Creating a Better Online Presence for a Private Health Foundation</h3>
                     </div>
                  </div>
                  <div class="site_project">
                     <div class="casestudy-image" style="background-color:#dde5ef;">
                        <div class="casestudy-image-wrapper "> 
                           <img style="background-image:url(&quot;https://cdn-eahjn.nitrocdn.com/ChEvwayTHZmZJUAdsUNMLXuXZdBprFoQ/assets/images/optimized/rev-21ec0b7/www.spinxdigital.com/app/uploads/2022/09/TCE-Thumbnail.jpg&quot;);" 
                              alt="The California Endowment Website Design Case Study" 
                              height="370" width="740" > 
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="home_skillset">
         <div class="container">
            <h4>What makes me one the best designer/developer for your new project?</h4>
            <div data-scroll="" class="hover-reveal-effect canvas-reveal cfadeinup is-inview" data-src="https://cdn-eahjn.nitrocdn.com/ChEvwayTHZmZJUAdsUNMLXuXZdBprFoQ/assets/images/optimized/rev-21ec0b7/www.spinxdigital.com/app/uploads/2022/09/image-abouthover-1.jpg">
               <div class="row hover-row">
                  <div class="col-xl-5 col-lg-6 desc-title">
                     <h3 class="h2">Longevity</h3>
                  </div>
                  <div class="col-xl-5 col-lg-6 desc-text"> <span>
                     As a freelance web developer, I've been proudly serving the Los Angeles community for nearly two decades, offering exceptional web development services with a personal touch.
                     </span> 
                  </div>
               </div>
            </div>
            <div data-scroll="" class="hover-reveal-effect canvas-reveal cfadeinup is-inview" data-src="https://cdn-eahjn.nitrocdn.com/ChEvwayTHZmZJUAdsUNMLXuXZdBprFoQ/assets/images/optimized/rev-21ec0b7/www.spinxdigital.com/app/uploads/2022/09/image-abouthover-2.jpg">
               <div class="row hover-row">
                  <div class="col-xl-5 col-lg-6 desc-title">
                     <h3 class="h2">Web Dev &amp; Design Focus</h3>
                  </div>
                  <div class="col-xl-5 col-lg-6 desc-text"> <span>
                     I am known for my expert web development services and creative design concepts. My main focus on web design sets your website apart from the online competition, ensuring a unique and compelling online presence.
                     </span> 
                  </div>
               </div>
            </div>
            <div data-scroll="" class="hover-reveal-effect canvas-reveal cfadeinup is-inview" data-src="https://cdn-eahjn.nitrocdn.com/ChEvwayTHZmZJUAdsUNMLXuXZdBprFoQ/assets/images/optimized/rev-21ec0b7/www.spinxdigital.com/app/uploads/2022/09/image-abouthover-3.jpg">
               <div class="row hover-row">
                  <div class="col-xl-5 col-lg-6 desc-title">
                     <h3 class="h2">Breathtaking Design</h3>
                  </div>
                  <div class="col-xl-5 col-lg-6 desc-text"> <span>
                     One thing that sets me apart is my approach to design. I take pride in developing design elements that are flexible, dynamic, and responsive, all while adhering to the highest industry standards.
                     </span> 
                  </div>
               </div>
            </div>
            <div data-scroll="" class="hover-reveal-effect canvas-reveal cfadeinup is-inview" data-src="https://cdn-eahjn.nitrocdn.com/ChEvwayTHZmZJUAdsUNMLXuXZdBprFoQ/assets/images/optimized/rev-21ec0b7/www.spinxdigital.com/app/uploads/2022/09/image-abouthover-4.jpg">
               <div class="row hover-row">
                  <div class="col-xl-5 col-lg-6 desc-title">
                     <h3 class="h2">On-Brand Experiences</h3>
                  </div>
                  <div class="col-xl-5 col-lg-6 desc-text"> <span>
                     Branding is my business, and as one of the best branding professionals, I personally take care of your brand development and integration. I've helped numerous brands exceed their web design requirements by delivering versatility through web design elements and features.
                     </span> 
                  </div>
               </div>
            </div>
            <div data-scroll="" class="hover-reveal-effect canvas-reveal cfadeinup is-inview" data-src="https://cdn-eahjn.nitrocdn.com/ChEvwayTHZmZJUAdsUNMLXuXZdBprFoQ/assets/images/optimized/rev-21ec0b7/www.spinxdigital.com/app/uploads/2022/09/image-abouthover-5.jpg">
               <div class="row hover-row">
                  <div class="col-xl-5 col-lg-6 desc-title">
                     <h3 class="h2">One-Of-A-Kind Solutions</h3>
                  </div>
                  <div class="col-xl-5 col-lg-6 desc-text"> <span>
                     As a web designer, I excel at creating customized, comprehensive design solutions for each individual client I serve.</span> 
                  </div>
               </div>
            </div>
            <div data-scroll="" class="hover-reveal-effect canvas-reveal cfadeinup is-inview" data-src="https://cdn-eahjn.nitrocdn.com/ChEvwayTHZmZJUAdsUNMLXuXZdBprFoQ/assets/images/optimized/rev-21ec0b7/www.spinxdigital.com/app/uploads/2022/09/image-abouthover-6-1.jpg">
               <div class="row hover-row">
                  <div class="col-xl-5 col-lg-6 desc-title">
                     <h3 class="h2">Partnership &amp; Collaboration</h3>
                  </div>
                  <div class="col-xl-5 col-lg-6 desc-text"> <span>You can expect to receive clear and transparent communication from the beginning of your web design project through til its' completion. And once your project has launched, I am here to support your continued success online with our web maintenance services, available by request.</span> </div>
               </div>
            </div>
         </div>
      </section>
      <section class="home_look">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-5 mb-5 mb-lg-0" data-scroll="" data-scroll-speed="2"> 
                  <img alt="" width="522" height="560" 
                     class="img-fluid lazyloaded" 
                     src="https://cdn-eahjn.nitrocdn.com/ChEvwayTHZmZJUAdsUNMLXuXZdBprFoQ/assets/images/optimized/rev-21ec0b7/www.spinxdigital.com/app/uploads/2023/09/image-divein-default.jpg"> 
               </div>
               <div class="col-lg-7">
                  <h2>Are you looking for a website with a <span>fresh and modern user experience?</span></h2>
                  <div class="w-100">
                     <p>As a web designer in Los Angeles, I'm here to transform your digital space into an immersive journey. Reach out to me today, and let's craft an online platform that leaves a lasting impression.</p>
                  </div>
                  <a href="https://www.spinxdigital.com/start-a-project/" class="btn btn-primary">Contact Us</a> 
               </div>
            </div>
         </div>
      </section>
      <section class="home_skills">
         <div class="container">
            <h2 class="title">I am an expert in leading industry-standard platforms and technologies.</h2>
            <div class="items">
               <span class="item"><span><img class="larger" src="https://cdn.worldvectorlogo.com/logos/magento-2.svg" alt="Magento logo vector"></span></span>
               <span class="item"><span><img src="https://www.svgrepo.com/show/327416/logo-wordpress.svg" alt=""></span></span>
               <span class="item"><span><img src="https://upload.wikimedia.org/wikipedia/commons/0/0e/Shopify_logo_2018.svg" alt=""></span></span>
               <span class="item"><span><img src="https://upload.wikimedia.org/wikipedia/commons/3/36/Logo.min.svg" alt=""></span></span>
               <span class="item"><span><img src="https://upload.wikimedia.org/wikipedia/commons/a/a7/React-icon.svg" alt=""></span></span>
               <span class="item"><span><img src="https://upload.wikimedia.org/wikipedia/commons/6/60/Symfony2.svg" alt=""></span></span>
            </div>
         </div>
      </section>
      <section class="home_learn">
         <div class="container">
            <h2 class="title">
               learn/blog
            </h2>
         </div>
      </section>
      <section class="home_services">
         <div class="container">
            <h2 class="title">Ambitious. Beautiful. Creative. Technical.</h2>
            <div class="services">
               <div class="item">
                  <h3 class="title">ADA Compliance</h3>
                  <p>From creative designs to ADA compliance audits and performance analysis, I specialize in designing personalized, accessible, and user-friendly experiences to ensure ADA compliance across various digital platforms.</p>
               </div>
               <div class="item">
                  <h3 class="title">UX & Design</h3>
                  <p>From creative designs to UX audits and performance analysis, our eCommerce agency designs personalised, user-friendly experiences on Shopify Plus. </p>
               </div>
               <div class="item">
                  <h3 class="title">Development</h3>
                  <p>We deliver custom eCommerce builds, migrations, and bespoke projects. Our eCommerce agency mission is to also to give you greater flexibility and in-house control. </p>
               </div>
               <div class="item">
                  <h3 class="title">Optimisation</h3>
                  <p>With our eCommerce agency's expert CRO insights and recommendations, we’ll help you supercharge your site and elevate your brand on Shopify Plus. </p>
               </div>
            </div>
         </div>
      </section>
   </main>
   <footer class="Footer_footer_main__c8Opy" >
      <div class="container">
         <div class="Footer_content__8dWV_">
            <h2 class="h2">Start a project</h2>
            <p>
               Im always on the lookout for great clients who are passionate about their products and customers. Get in touch 
            </p>
            <button class="btn_link btn_link--light" aria-describedby="popup-1">
               Start a project request
               <span>
                  <svg width="8" height="12" xmlns="http://www.w3.org/2000/svg">
                     <path d="M.293 1.707 1.707.293 7.414 6l-5.707 5.707-1.414-1.414L4.585 6z" fill="currentColor"></path>
                  </svg>
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
   <script>
      const scroller = new LocomotiveScroll({
        el: document.querySelector('[data-scroll-container]'),
        smooth: true
      });
      
   </script>
</body>
</html>
