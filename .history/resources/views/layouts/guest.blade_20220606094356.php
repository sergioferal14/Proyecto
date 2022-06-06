<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <style>
          .fondo {
        font-family: 'Nunito', sans-serif;
        background-image: url("{{asset('storage/fondo.jpg')}}");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-size: 100% 100%;
    }
          </style>
    </head>
    <body class="fondo">
        <div class="font-sans antialiased " >
            {{ $slot }}
        </div>
        <footer class=" text-center lg:text-left bg-gray-900 text-white mx-auto rounded" style="width: 85%" >
          <div class="lg:flex justify-center items-center lg:justify-between  p-6 border-b border-gray-300">
            <div class="mr-3 lg:block">
              <span>
                  <h6 class="uppercase font-semibold mb-4 flex justify-center md:justify-start">
                    <span class=" bg-white rounded text-black px-1">Contacto</span>
                  </h6>
                  <div class="padreFut">
                        <span class=" divFoot1">
                            <i class="fa-solid fa-house"></i>
                            Almeria, Al 04007, Es
                        </span>
                        <span class=" divFoot2">
                            <i class="fa-solid fa-envelope"></i>
                            futbolmaster@gmail.com
                        </span>
                    
                        <span class=" divFoot3">
                            <i class="fa-solid fa-phone"></i>
                            + 34 666 15 21 65
                        </span>

                        <span class=" divFoot4">
                            <i class="fa-solid fa-print"></i>
                            + 34 950 25 75 53
                        </span>
                    </div>
                
              </span>
            </div>
            <div class="text-center p-4  lg:block" >
              <span>© 2021 Copyright:</span>
              <p class="text-white font-semibold">The site's content is the Copyright © Fútbol Master.</p>
              <p class="text-white font-semibold">Futbol Mater All Rights Reserved.</p>
            </div>
            <div class="flex justify-center lg:block">
              <a href="https://www.facebook.com/profile.php?id=100081292145231" target="_blank" class="mr-6 text-white">
                <i class="fa-brands fa-facebook fa-lg"></i>
              </a>
              <a href="https://twitter.com/FutbolMasterEmp" target="_blank" class="mr-6 text-white">
                <i class="fa-brands fa-twitter fa-lg"></i>
              </a>
              <a href="https://www.instagram.com/futbolmasterfc/" target="_blank" class="mr-6 text-white">
                <i class="fa-brands fa-instagram fa-lg"></i>
              </a>
              <a href="https://www.linkedin.com/in/fútbol-máster-05564223a/" target="_blank" class="mr-6 text-white">
                <i class="fa-brands fa-linkedin-in fa-lg"></i>
              </a>
            </div>
          </div>
        </footer>
    </body>
</html>
