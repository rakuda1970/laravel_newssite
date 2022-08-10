<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Laravel</title>
      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>
      <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <!-- Font Awesome 4.7 -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   </head>
   <body>
      <header class="p-3 text-bg-dark">
         <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
               <a data-bs-target="#collapseExample" data-toggle="collapse" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" class="btn btn-dark text-white p-0 mx-2 border border-light"><i style="font-size: 1.6em; margin: 0.25em 0.35em 0.25em 0.35em;" class="fa fa-bars" aria-hidden="true"></i></a>
               <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
               <img src="https://via.placeholder.com/40/FF0000/FFFFFF/?text=LOGO" alt="" class="mx-2">
               </a>
               <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                  <li><a href="#" class="nav-link px-2 text-white">Home</a></li>
                  <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
                  <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
                  <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
                  <li><a href="#" class="nav-link px-2 text-white">About</a></li>
               </ul>
               <div class="text-end">
                  <button type="button" class="btn btn-outline-light me-2">Login</button>
                  <button type="button" class="btn btn-warning">Sign-up</button>
               </div>
            </div>
         </div>
      </header>
      <div class="container-fluid py-3 collapse bg-dark text-white" id="collapseExample">
         <hr />
         <div class="d-grid gap-3" style="grid-template-columns: 1fr 1fr 1fr 1fr;">
            <div class="">
               <ul>
                  <li class="nav-link px-2 text-white">Lorem ipsum dolor</li>
                  <li class="nav-link px-2 text-white">sit amet</li>
                  <li class="nav-link px-2 text-white">consectetur adipiscing elit</li>
                  <li class="nav-link px-2 text-white">sed do eiusmod</li>
               </ul>
            </div>
            <div class="">
               <ul>
                  <li class="nav-link px-2 text-white">Lorem ipsum dolor</li>
                  <li class="nav-link px-2 text-white">sit amet</li>
                  <li class="nav-link px-2 text-white">consectetur adipiscing elit</li>
                  <li class="nav-link px-2 text-white">sed do eiusmod</li>
               </ul>
            </div>
            <div class="">
               <ul>
                  <li class="nav-link px-2 text-white">Lorem ipsum dolor</li>
                  <li class="nav-link px-2 text-white">sit amet</li>
                  <li class="nav-link px-2 text-white">consectetur adipiscing elit</li>
                  <li class="nav-link px-2 text-white">sed do eiusmod</li>
               </ul>
            </div>
            <div class="">
               <ul>
                  <li class="nav-link px-2 text-white">Lorem ipsum dolor</li>
                  <li class="nav-link px-2 text-white">sit amet</li>
                  <li class="nav-link px-2 text-white">consectetur adipiscing elit</li>
                  <li class="nav-link px-2 text-white">sed do eiusmod</li>
               </ul>
            </div>
            
         </div>
         <hr />
      </div>
   </body>
</html>
