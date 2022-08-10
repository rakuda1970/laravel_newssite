<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'News Site') }}</title>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Font Awesome 4.7 -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <style>
      
      @import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;700;900&display=swap');

      h1, h2, h3, h4, h5, strong {
         font-family: 'Source Sans Pro', sans-serif;
         font-weight: 700;
      }

      </style>
   </head>
<body>
    <div id="app" class="container-fluid mx-0 px-0">

    <header class="p-3 text-bg-dark">
         <div class="container-fluid">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
               <a data-bs-target="#collapseExample" data-toggle="collapse" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" class="btn btn-dark text-white p-0 mx-2 border border-light"><i style="font-size: 1.6em; margin: 0.25em 0.35em 0.25em 0.35em;" class="fa fa-bars" aria-hidden="true"></i></a>
               <a href="{{ url('/') }}" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
               <img src="https://via.placeholder.com/40/FF0000/FFFFFF/?text=LOGO" alt="{{ config('app.name', 'News Site') }}" class="mx-2">
               </a>
               <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                  <li><a href="#" class="nav-link px-2 text-white">US</a></li>
                  <li><a href="#" class="nav-link px-2 text-white">International</a></li>
                  <li><a href="#" class="nav-link px-2 text-white">Business</a></li>
                  <li><a href="#" class="nav-link px-2 text-white">Technolgy</a></li>
                  <li><a href="#" class="nav-link px-2 text-white">Sports</a></li>
               </ul>
               <div class="text-end">
               <a href="#" style="text-decoration: none;" class="px-2 text-white">Audio</a> 
               <a href="#" style="text-decoration: none;" class="px-2 text-white">Video</a>
               <a data-bs-target="#collapseExample" data-toggle="collapse" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" class="text-white mx-2"><i class="fa fa-search" aria-hidden="true"></i></a>
               
                    @guest
                         @if (Route::has('login'))
                        <a class="btn btn-outline-light me-2" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @endif

    
                    @else
                        Welcome: {{ Auth::user()->name }} 
                         <a class="btn btn-outline-light me-2" href="{{ route('logout') }}" 
                         onclick="event.preventDefault(); 
                         document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                        </form>
                    @endguest












               </div>
            </div>
         </div>
      </header>
      <div class="container-fluid py-3 collapse bg-dark text-white px-4" id="collapseExample">
         
         <form class="col-12 mx-auto mb-3 ">
          <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>
        <div class="d-flex flex-row justify-content-start">
         <div class="col font-weight-bold h4">Edition:</div>
         <div class="col">US</div>
         <div class="col">International</div>
         <div class="col">Arabic</div>
         <div class="col">Espa&ntilde;ol</div>
         <div class="col">&nbsp;</div>
         <div class="col">&nbsp;</div> 
      </div>
        <hr />
        <div class="d-flex flex-row flex-wrap justify-content-start">
         <div class="col mb-2">
            <h4>US</h4>
            <ul class="nav">
               <li><a href="#" class="nav-link px-2 py-0 text-white">Crime + Justice</a></li>
               <li><a href="#" class="nav-link px-2 py-0 text-white">Energy + Environment</a></li>
               <li><a href="#" class="nav-link px-2 py-0 text-white">Extreme Weather</a></li>
            </ul>
            
            
         </div>
         <div class="col mb-2"><h4>World</h4>
            <ul class="nav">
               <li><a href="#" class="nav-link px-2 py-0 text-white">Crime + Justice</a></li>
               <li><a href="#" class="nav-link px-2 py-0 text-white">Energy + Environment</a></li>
               <li><a href="#" class="nav-link px-2 py-0 text-white">Extreme Weather</a></li>
            </ul>
   </div>
         <div class="col mb-2"><h4>Politics</h4>
            <ul class="nav">
               <li><a href="#" class="nav-link px-2 py-0 text-white">Crime + Justice</a></li>
               <li><a href="#" class="nav-link px-2 py-0 text-white">Energy + Environment</a></li>
               <li><a href="#" class="nav-link px-2 py-0 text-white">Extreme Weather</a></li>
            </ul>
         </div>
         <div class="col mb-2"><h4>Business</h4>
            <ul class="nav">
               <li><a href="#" class="nav-link px-2 py-0 text-white">Crime + Justice</a></li>
               <li><a href="#" class="nav-link px-2 py-0 text-white">Energy + Environment</a></li>
               <li><a href="#" class="nav-link px-2 py-0 text-white">Extreme Weather</a></li>
            </ul>
         </div>
         <div class="col mb-2"><h4>Opinion</h4>
            <ul class="nav">
               <li><a href="#" class="nav-link px-2 py-0 text-white">Crime + Justice</a></li>
               <li><a href="#" class="nav-link px-2 py-0 text-white">Energy + Environment</a></li>
               <li><a href="#" class="nav-link px-2 py-0 text-white">Extreme Weather</a></li>
            </ul></div>
         <div class="col mb-2"><h4>Health</h4>
            <ul class="nav">
               <li><a href="#" class="nav-link px-2 py-0 text-white">Crime + Justice</a></li>
               <li><a href="#" class="nav-link px-2 py-0 text-white">Energy + Environment</a></li>
               <li><a href="#" class="nav-link px-2 py-0 text-white">Extreme Weather</a></li>
            </ul></div>
         <div class="col mb-2"><h4>Entertainment</h4>
            <ul class="nav">
               <li><a href="#" class="nav-link px-2 py-0 text-white">Crime + Justice</a></li>
               <li><a href="#" class="nav-link px-2 py-0 text-white">Energy + Environment</a></li>
               <li><a href="#" class="nav-link px-2 py-0 text-white">Extreme Weather</a></li>
            </ul></div> 
      </div>
        <!--
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
-->
         <hr />
      </div>

        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
