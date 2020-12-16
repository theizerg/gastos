<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name', 'Laradmin') }} - @yield('title')</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/systems.css') }}">
    <link rel="icon" href="{{ asset('images/logo/logo-imagen.png') }}">
    @stack('styles')
  </head>

  <body class="hold-transition login-page login" id="contenido">
    <!--Page Content Here -->
     <nav class="navbar navbar-expand-md navbar-light blue darken-4 text-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                           
                            @if (Route::has('register'))
                                <p class="text-blue">
                                    No has iniciado sesiòn
                                </p>
                            @endif
                        @else
                           
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
     <main class="py-4">
            @yield('content')
        </main>
 
    <!-- REQUIRED JS SCRIPTS -->
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')

      <style>
    

     #contenido
     {
      
      background-attachment: fixed;
      background-position: center center;
      background-size: cover;
      background-image: url("{{asset('/images/fondo/imagen.jpg') }}"); 

            
     }
    span.iconify, i.iconify, iconify-icon 
    { 
        display: inline-block; width: 1em; 
    } 
    
    
    </style>
   
  </body>
</html>