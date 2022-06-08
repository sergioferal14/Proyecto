<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">


    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- BootStrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />

    <!-- Slick -->

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    
    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />

    <!-- Sweet Alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>

    
    

    <style>
        .title {
            text-align: center;
            font-weight: 100;
            font-family: 'Roboto', sans-serif;
        }

        @keyframes productCards {
            from {
                background-color: white;
                color: black;

            }

            to {
                background-color: black;
                color: white;
                border-width: 5px;

            }
        }


        .card {

            border-radius: 8px;
            border-width: 4px;
            border-color: #1a202c;
            box-shadow: 0 2px 2px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            margin: 15px;
            padding: 20px;
            text-align: center;
            transition: all 0.25s;
            background-color: white;

        }

        .card:hover {
            animation: productCards 1s;
            color: white;
            border: 5px solid red;
            background: black;
        }

        .card img {
            width: 300px;
            height: 190px;

        }


        .card h3 {
            font-weight: bold;
            font-size: 25px;
        }

        .card p {
            
            font-size: 16px;
            font-weight: 600;
            text-align: initial !important;
        }

        

        .card a {
            display: block;
            color: #fff;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
            text-align: center;
            border-radius: 4px;
            background: #4b2bff;
            margin-top: 30px;
            text-decoration: none;
            padding: 10px 5px;
        }


    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-image: url('storage/fondo.jpg');
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
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            
        }

        .heading {
            text-align: center !important;
            font-size: 30px !important;
            font: bold !important;
            margin-bottom: 50px !important;
        }

        .row {
            display: flex !important;
            flex-direction: row !important;
            justify-content: space-around !important;
            flex-flow: wrap !important;
        }

        .card {
            border-radius: 8px;
            border-width: 4px;
            border-color: #1a202c;
            box-shadow: 0 2px 2px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            margin: 20px;

            text-align: center;
            transition: all 0.25s;
            background-color: white;
            transition: 0.3s !important;
        }

        .card-header {
            text-align: center !important;
            padding: 50px 10px !important;
            background-image: url('storage/fondo-escudos.jpeg') !important;
            background-repeat: no-repeat;
            background-size: cover;
            background-size: 100% 100%;
            color: #fff !important;
        }

        .card-body {
            padding: 30px 20px !important;
            text-align: center !important;
            font-size: 18px !important;
        }

        .card2 {
            border-radius: 10px;
            box-shadow: 0 2px 2px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            margin: 20px;
            background-color: white;
        }

        .card-body .btn {
            display: block !important;
            color: #fff !important;
            margin-left: auto;
            margin-right: auto;
            text-align: center !important;
            background: darkcyan;
            margin-top: 30px !important;
            text-decoration: none !important;
            padding: 5px 5px !important;
            width: 50%;
        }

        .card-body .btns {
            display: block !important;
            color: #fff !important;
            text-align: center !important;
            margin-top: 30px !important;
            text-decoration: none !important;
            padding: 5px 5px !important;

        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 0 40px -10px rgba(0, 0, 0, 0.25);
        }

        input:hover {
            border-bottom: solid 1px #03a9f4 !important;
            color: #03a9f4 !important;
        }

        input:focus {
            border-bottom: solid 1px #03a9f4 !important;
            color: #03a9f4 !important;
        }

        
        

    </style>

</head>

<body class="font-sans antialiased bg-green-500" >

    <div class="min-h-screen ">
        @livewire('navigation-menu')

        <!-- Page Content -->
        <main style="zoom: 90%">
            <div class="grid md:grid-cols-3 ">

                <div class="card">
                    <img src="{{ asset('storage/card1.jpg') }}" class="mx-auto">
                    <h3 class="font-bold my-3 text-lg">¿Qué es Fútbol Máster?</h3>
                    <p class="font-bold "  >Fútbol Máster es una aplicación de fútbol, como su nombre indica, pero... ¿Para que sirve
                        esta aplicación? Fútbol Máster se encarga de la administración de sesiones, de su
                        creación y de la administración de información que puede llevar una temporada.<br><br>
                        Es una
                        herramienta que te ayudara a llevar toda la información de tu día a día durante la
                        temporada actualizada.</p>
                    
                </div>
                <div><img src="{{ asset('storage/logo.png') }}" class="mx-auto"/>
                    <div class="card">
                        <img src="{{ asset('storage/card3.png') }} " class="mx-auto">
                        <h3 class="font-bold my-3 text-lg">¿Qué nos diferencia?</h3>
                        <p>Fútbol máster sera la primera aplicación de administración de sesiones de lengua hispana y que estará enfocada, no solo en las sesiones ,sino también  en las canteras del fútbol español. <br><br>
                            </p>
                        
                    </div>
                </div>
                
                <div class="card">
                    <img src="{{ asset('storage/card2.png') }}" class="mx-auto">
                    <h3 class="font-bold my-3 text-lg">¿Qué ofrece futbol master?</h3>
                    <p>
                        - La oportunidad de crear y administrar las sesiones de tu día a día,<br>
                        - La oportunidad de seguir aprendiendo de otros entradores.<br>
                        - Información de la clasificación de otros equipos.<br>
                        - El análisis propio de jugadores de otros equipos.<br>
                        - La utilización de mapas de calor para los partidos.<br>
                        - Poder clasificar ejercicios sueltos en carpetas.<br><br>
                        Todo esto y mucho mas que se ira añadiendo en la aplicación conforme avance su
                        desarrollo.
                    </p>

                </div>

            </div>
        </main>
    </div>

    @stack('modals')

    @livewireScripts

    <script>
        Livewire.on("alerta", function(txt) {
            Swal.fire({
                icon: 'success',
                title: txt,
                showConfirmButton: false,
                timer: 1500
            })
        })
        Livewire.on('info', function(txt) {
            Swal.fire({
                icon: 'warning',
                title: txt,
                showConfirmButton: true,
            })
        });

        Livewire.on('borrar', function(txt) {
            Swal.fire({
                icon: 'error',
                title: txt,
                showConfirmButton: true,
            })
        });
    </script>
    <footer class="text-center lg:text-left bg-gray-900 text-white mx-auto rounded mt-4" style="width: 85%; ">
        <div class="lg:flex justify-center items-center lg:justify-between  p-6 border-b border-gray-300" >
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
                <a href="https://www.facebook.com/profile.php?id=100081292145231" class="mr-6 text-white">
                    <i class="fa-brands fa-facebook fa-lg"></i>
                </a>
                <a href="https://twitter.com/FutbolMasterEmp" class="mr-6 text-white">
                    <i class="fa-brands fa-twitter fa-lg"></i>
                </a>
                <a href="https://www.instagram.com/futbolmasterfc/" class="mr-6 text-white">
                    <i class="fa-brands fa-instagram fa-lg"></i>
                </a>
                <a href="https://www.linkedin.com/in/fútbol-máster-05564223a/" class="mr-6 text-white">
                    <i class="fa-brands fa-linkedin-in fa-lg"></i>
                </a>
            </div>
        </div>
    </footer>
</body>

</html>
