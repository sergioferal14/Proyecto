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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

        

    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />
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
    .padreFut {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-template-rows: repeat(2, 1fr);
            grid-column-gap: 0px;
            grid-row-gap: 6px;
        }

.divFoot1 { grid-area: 1 / 1 / 2 / 2; }
.divFoot2 { grid-area: 1 / 2 / 2 / 3; }
.divFoot3 { grid-area: 2 / 1 / 3 / 2; }
.divFoot4 { grid-area: 2 / 2 / 3 / 3; }
          </style>
    </head>
    <body class="fondo" class="flex flex-col">
        <div class="font-sans antialiased " >
            {{ $slot }}
        </div>
        <footer class=" flex  fixed bottom-0 mr-4 text-center position-absolute bg-gray-900 text-white py-4 " style="justify-content:space-between;width: 100%;">
      <div style="align-items: center; display:flex; margin-left:20px;">
        <span>
          
          
            <span class="mr-3 whitespace-nowrap" >
              <i class=" fa-solid fa-house"></i>
              Almeria, Al 04007, Es
            </span>
            <span class="mr-3 whitespace-nowrap">
              <i class="fa-solid fa-envelope"></i>
              futbolmastere@gmail.com
            </span>

            <span class="mr-3 whitespace-nowrap">
              <i class="fa-solid fa-phone"></i>
              + 34 666 15 21 65
            </span>

            <span class="mr-3 whitespace-nowrap">
              <i class="fa-solid fa-print"></i>
              + 34 950 25 75 53
            </span>
          


        </span>
      </div>         
      <a rel="license" target="_blank" href="http://creativecommons.org/licenses/by-sa/4.0/">
        <img alt="Licencia de Creative Commons" style="width:100px !important;" src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png" />
      </a>


      <div  style="margin-right: 40px;display:block; align-items:center">  

        <a href="https://www.facebook.com/profile.php?id=100081292145231" target="_blank"  class="mr-6 text-white">
          <i class=" fa-brands fa-facebook fa-lg"></i>
        </a>
        <a href="https://twitter.com/FutbolMasterEmp" target="_blank" class="mr-6 text-white">
          <i class="fa-brands fa-twitter fa-lg"></i>
        </a>
        <a href="https://www.instagram.com/futbolmasterfc/" target="_blank"  class="mr-6 text-white">
          <i class="fa-brands fa-instagram fa-lg"></i>
        </a>
        <a href="https://www.linkedin.com/in/fútbol-máster-05564223a/" target="_blank"  class="mr-6 text-white">
          <i class="fa-brands fa-linkedin-in fa-lg"></i>
        </a>
      </div>
  </footer>

    </body>
</html>
