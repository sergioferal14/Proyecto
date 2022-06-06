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

    <!-- BootStrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Slick -->

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Sweet Alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }


        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }




        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }


        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }

    </style>

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

        }

        .card p {
            padding: 0 1rem;
            font-size: 16px;
            font-weight: 300;
            text-align: initial !important;
        }

        .boton {
            color: #fff;
            text-align: center;
            border-radius: 5px;
            background: #0288d1;
            margin-top: 30px;
            text-decoration: none;
            padding: 5px;
            margin: 6px;
            margin-top: 10px !important;
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
                    <p class="font-bold" >Fútbol Máster es una aplicación de fútbol, como su nombre indica, pero... ¿Para que sirve
                        esta aplicación? Fútbol Máster se encarga de la administración de sesiones, de su
                        creación y de la administración de información que puede llevar una temporada.<br><br>
                        Es una
                        herramienta que te ayudara a llevar toda la información de tu día a día durante la
                        temporada actualizada.</p>
                    <a class="inline-block border border-blue-500 rounded py-2 px-4 bg-blue-500 hover:bg-blue-700 text-white"
                        href="{{ route('login') }}">Empezar</a>
                </div>
                <div><img src="{{ asset('storage/logo.png') }}" class="mx-auto"/>
                    <div class="card">
                        <img src="{{ asset('storage/card3.png') }} " class="mx-auto">
                        <h3 class="font-bold my-3 text-lg">¿Qué nos diferencia?</h3>
                        <p>Fútbol máster sera la primera aplicación de administración de sesiones de lengua hispana y que estará enfocada, no solo en las sesiones ,sino también  en las canteras del fútbol español. <br><br>
                            </p>
                        <a class="inline-block border border-blue-500 rounded py-2 px-4 bg-blue-500 hover:bg-blue-700 text-white"
                            href="{{ route('login') }}">Empezar</a>
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
                    <a href="{{ route('login') }}" class="btn bg-blue-500 bottom-0">Empezar</a>

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
    
</body>

</html>
