<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Futbol Master') }}</title>

    <!-- Fonts -->
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

<style>
    .fondo {
        font-family: 'Nunito', sans-serif;
        background-image: url('storage/fondo.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-size: 100% 100%;
    }

    @media (max-width:600px) {
            .icono{
                display: none;
                padding: 1px !important;
            }
        }
        
    .linkS:hover{
        color: #fff;
    }

    .linkSa{
        background-color: #fff;
    }

    select{
        appearance: none;
    }

    .grid-ejercicio {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            grid-template-rows: repeat(4, 1fr);
            grid-column-gap: 0px;
            grid-row-gap: 0px;


        }

        .imagen {
            grid-area: 1 / 1 / 3 / 4;
        }

        .descripcion {
            grid-area: 3 / 1 / 5 / 4;
        }

        .formulario {
            grid-area: 1 / 4 / 5 / 8;
        }

        .grid-formulario {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-template-rows: repeat(3, 1fr);
            grid-column-gap: 0px;
            grid-row-gap: 0px;
        }

        .div1 {
            grid-area: 1 / 1 / 2 / 2;
        }

        .div2 {
            grid-area: 1 / 2 / 2 / 3;
        }

        .div3 {
            grid-area: 2 / 1 / 3 / 2;
        }

        .div4 {
            grid-area: 2 / 2 / 3 / 3;
        }

        .div5 {
            grid-area: 3 / 1 / 4 / 2;
        }

        .div6 {
            grid-area: 3 / 2 / 4 / 3;
        }



        @media (max-width:800px) {

            .descripcion {
                width: 100% !important;
            }

            .zoom {
                zoom: 80%;
            }

            .grid-ejercicio {
                display: grid;
                grid-template-columns: 1fr;
                grid-template-rows: repeat(3, 1fr);
                grid-column-gap: 0px;
                grid-row-gap: 0px;
                display: block;
            }

            .imagen {
                grid-area: 1 / 1 / 2 / 2;
            }

            .descripcion {
                grid-area: 2 / 1 / 3 / 2;
            }

            .formulario {
                grid-area: 3 / 1 / 4 / 2;
                border: none !important;
            }


        }

    

</style>

</head>

<body background="../../../..fondo.jpg" class="font-sans antialiased " >

    <div class="min-h-screen">
        @livewire('navigation-menu')

        <!-- Page Content -->
        <main style="zoom: 90%">
            {{ $slot }}
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
                    <p class="flex items-center justify-center md:justify-start mb-4" style="white-space:nowrap;">
                        <span class="mr-3">
                            <i class="fa-solid fa-house"></i>
                            Almeria, Al 04007, Es
                        </span>
                        <span class="mr-3">
                            <i class="fa-solid fa-envelope"></i>
                            futbolmaster@gmail.com
                        </span>
                    <p>
                        <span class="mr-3">
                            <i class="fa-solid fa-phone"></i>
                            + 34 666 15 21 65
                        </span>

                        <span class="mr-3">
                            <i class="fa-solid fa-print"></i>
                            + 34 950 25 75 53
                        </span>
                    </p>

                    </p>

                </span>
            </div>
            <div class="text-center p-4  lg:block" style="white-space:nowrap;">
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
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
    <script src="https://unpkg.com/flowbite@1.4.7/dist/datepicker.js"></script>
</body>

</html>
