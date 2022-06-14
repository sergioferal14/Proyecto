<x-app-layout>

    <div class="mt-4 max-w-7xl mx-auto sm:px-6 lg:px-8 container oscurecer">

        @if (!isset($sesion))
        <div class="my-2 grid md:grid-cols-3 mb-5 oscurecer">

            <div class="flex-1 mx-auto">
                <div class="flex ">
                    <div class=" xl:w-96 ml-6">
                        @if (isset($tipo))
                        <form action="{{ route('ejercicio.index1', $tipo) }}" method="GET">
                            @else
                            <form action="{{ route('ejercicio.index2') }}" method="GET">
                                @endif 

                                <div class="input-group relative flex flex-wrap items-stretch w-full mb-4">
                                    <input name="busqueda" id="search" value="{{ $request->busqueda }}" class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                                    <button class="btn inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700  focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out flex items-center" type="submit" id="button-addon2">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>
                    </div>

                </div>
            </div>

            @else
            <div class="my-2 mb-5 mx-auto" style="text-align: center; ">
                @endif

                <div class="mx-auto mb-2">
                    @if (isset($sesion))
                    <button onclick="cargarPDF()" class="ml-2 mb-2 bg-red-700 hover:bg-red-800 text-white font-bold py-2 px-4 rounded border-3 ">
                        Exportar {{$sesion->nombre}} a PDF <i class="ml-2 fa-solid fa-file-pdf"></i>
                    </button>
                    @endif

                    

                    <button id="botonCrear" class="oscurecer bg-black hover:bg-black text-white font-bold  py-2 px-4 rounded border-3 " type="button" data-modal-toggle="modalCrear">
                        <i class="fa-solid fa-plus"></i>
                        @if (isset($sesion))
                        Añadir Ejercicio a {{ $sesion->nombre }}
                        @else
                        Crear Nuevo Ejercicio
                        @endif
                    </button>

                    


                    @include('ejercicios.create')
                </div>
                @if(!isset($sesion))
                <div class="mx-auto ">
                <a href="{{route('ejercicio.index',session()->get('sesionEntreno'))}}" type="button" class="oscurecer  bg-sky-700 hover: bg-sky-800 text-white font-bold py-2 px-4 sm: rounded border-3">
                        <i class="mr-1 fa-solid fa-right-from-bracket"></i>Volver a la sesion
                    </a>
                </div>
                @endif
            </div>
            <!--Aqui empieza el contenedor de los dos espacios-->
            <div class="oscurecer grid  md:grid-cols-3 lg:grid-cols-4 sm:grid-cols-2" style="padding: 10px 30px 0; margin-left: 0;position: relative;overflow-y: auto;overflow-x: hidden;flex-grow: 1; min-height:calc(100vh-266px)">
                <!--Aqui empieza el contenedor de  carpetas-->
                @if ($ejercicios->count() == 0 || $ejercicios->count() == 1)
                <div class=" md:col-span-3 lg:col-span-1 " style="display: grid; grid-gap:0; grid-template-columns:repeat(auto-fill,minmax(220px,1fr));">
                    @else
                    <div class="  md:col-span-3 lg:col-span-1 lg:h-96" style="display: grid; grid-gap:0; grid-template-columns:repeat(auto-fill,minmax(220px,1fr));">
                        @endif
                        <!--Aqui empieza la carpeta de los guardados-->

                        @foreach ($tipos as $tip)
                        <a href="{{ route('ejercicio.index1', $tip) }}" class="oscurecer">
                            <div style="display:block;contain:style; color:#3c4043">
                                <div style="display:flex;flex:1 1 220px; overflow: hidden;padding: 7px;position: relative; vertical-align: top; max-width: 100%;min-width: 0;outline: none; color: rgba(0, 0, 0, 0.72); touch-action: pan-x pan-y;">
                                    <div style="display: flex;flex:1 1 auto;outline:none;overflow: hidden;">
                                        <div style="background-color: #fff;border:1px solid #dadce0;border-radius: 6px;margin-bottom: 10px;display: flex;flex: 1 1 auto;flex-direction: column;overflow: hidden;position: relative;">
                                            <div style="display: flex; flex:0 0 48px;">
                                                <i class="fa-solid fa-folder mt-1" style="flex: auto;height:24px;padding: 12px 16px;position: relative; width: 24px;z-index: 1;"></i>
                                                <div style="align-self: center;box-sizing:border-box;flex: 1 1 auto;font-weight: 500;overflow: hidden;padding-right: 12px;position: relative; text-overflow: ellipsis; white-space: nowrap;width: calc(100%-56px);">
                                                    {{ $tip->nombre }}
                                                </div>
                                                <div style="align-self: center;box-sizing:border-box;flex: 1 1 1;font-weight: 500;overflow: hidden;padding-right: 12px;position: relative; text-overflow: ellipsis; white-space: nowrap;width: calc(100%-56px);">
                                                    <!-- $ejerciciosCont[$tip->id]->count() -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        @endforeach

                        <!--Aqui termina la carpeta de los guardados-->

                        <!--Aqui empieza la carpeta de los publicados-->

                        <a href="{{ route('ejercicio.index2') }}" class="oscurecer">
                            <div style="display:block;contain:style; color:white">
                                <div style="display:flex;flex:1 1 220px; overflow: hidden;padding: 7px;position: relative; vertical-align: top; max-width: 100%;min-width: 0;outline: none; color: rgba(0, 0, 0, 0.72); touch-action: pan-x pan-y;">
                                    <div style="display: flex;flex:1 1 auto;outline:none;overflow: hidden;">
                                        <div style="color:#fff;background-color: black;border:1px solid #dadce0;border-radius: 6px;margin-bottom: 10px;display: flex;flex: 1 1 auto;flex-direction: column;overflow: hidden;position: relative;">
                                            <div style="display: flex; flex:0 0 48px;">
                                                <i class="fa-solid fa-folder mt-1" style="flex: auto;height:24px;padding: 12px 16px;position: relative; width: 24px;z-index: 1;"></i>
                                                <div style="align-self: center;box-sizing:border-box;flex: 1 1 auto;font-weight: 500;overflow: hidden;padding-right: 12px;position: relative; text-overflow: ellipsis; white-space: nowrap;width: calc(100%-56px);">
                                                    Ejercicios Públicos
                                                </div>
                                                <div style="align-self: center;box-sizing:border-box;flex: 1 1 auto;font-weight: 500;overflow: hidden;padding-right: 12px;position: relative; text-overflow: ellipsis; white-space: nowrap;width: calc(100%-56px);">
                                                    ({{ $ejerciciosPublicos->count() }})
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>

                    </div>
                    <!--Aqui termina la carpeta de los publicados-->
                    <!--Aqui termina el contenedor de carpetas-->
                    <!--Aqui empieza el contenedor de los ejercicios-->

                    <div class=" sm:col-span-4 lg:col-span-3 mx-w-sm oscurecer " id="pdfEjercicios">
                        <!--Aqui empieza el ejercicio -->
                        <form name="bus" action="{{ route('ejercicio.index2') }}" method="get">
                            @if (isset($sesion))

                            <h2 style="border-radius: 10px;background-color:black;text-align: center;width: 70%;margin: auto;" class="mb-3 text-white font-bold p-2 text-2xl">Ejercicios de la sesión
                                ({{ $sesion->nombre }})</h2>
                            @else
                            @if (isset($tipo))
                            <h2 style="border-radius: 10px;background-color:black;text-align: center;width: 70%;margin: auto;" class="mb-3 text-white font-bold p-2 text-2xl">Ejercicios de ({{ $tipo->nombre }})</h2>
                            @else
                            <div style="display: flex">
                                <h2 style="border-radius: 10px;background-color:black;text-align: center;width: 70%;margin: auto;" class="mb-3 text-white font-bold p-2 text-2xl">Ejercicios Publicados</h2>
                                <div class="ml-4 mt-1">
                                    <select name="tipo_id" class="ml-2 py-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full  sm:text-sm border-gray-300 rounded-md">
                                        <option value="-10" class="text-base font-bold" @if ($request->tipo_id == -10) class="text-base font-bold" selected @endif>
                                            Cualquiera...</option>
                                        @foreach ($tipos as $tipoFiltro)
                                        <option value="{{ $tipoFiltro->id }}" class="text-base font-bold" @if ($tipoFiltro->id == $request->tipo_id) selected @endif>{{ $tipoFiltro->nombre }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="ml-4 mt-1">

                                    <button type="submit" class="bg-black hover:bg-gray text-white font-bold py-2 px-4 rounded"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                            @endif

                            @endif
                        </form>
                        @foreach ($ejercicios as $item)
                        <div style="border:1px solid #dadce0;border-radius: 6px;margin-bottom: 10px;" class="  p-2 rounded bg-white shadow-lg ml-3">
                            <div class="text-lg flex flex-row my-2" style="background-color: #0288d1;color:white;">
                                <h3 class="font-bold px-6 py-4 mx-auto">{{ $item->nombre }}</h3>
                                @if (isset($sesion))
                                <img src="{{ asset('storage/' . $item->sesion->team->escudo) }}" class="mr-3 h-12 mx-auto my-auto flex-end" style="width:60px;height:60px">
                                @else
                                <img src=" @if (isset($item->user->profile_photo_path)) {{ asset('storage/' . $item->user->profile_photo_path) }} @else {{ $item->user->profile_photo_url }} @endif" class="mr-3  mx-auto my-auto flex-end rounded-full object-cover w-10 h-10">
                                @endif

                            </div>

                            <div class="grid-ejercicio" style="padding: 0;">
                                <div class=" p-2 imagen">
                                    <img src="{{ asset('storage/'.$item->img) }}" style="width: 450px; height:220px;" class="mx-auto">
                                </div>
                                <div class="p-2 descripcion" style="width: 400px;height:210px !important;">
                                    <div class="text-lg flex flex-row justify-center text-center mx-auto mb-1" style="background-color: #0288d1;color:white;">
                                        Descipción
                                    </div>
                                    <div style="height:220px;border:solid 1px #0288d1;background-color:lightgrey;" class="p-2 overflow-y-auto">
                                        {{ $item->descripcion }}

                                    </div>
                                </div>

                                <div style="border:solid 1px #0288d1;" class="separador rounded p-2 formulario">
                                    <div style=" padding: 10px; display:flex; " class="flex sm:flex-col md:flex-row justify-center text-center mx-auto">
                                        <div class="grid-formulario" style="align-items: center;padding: 0;margin-right:5px">
                                            <div class="div1 mr-1">
                                                <div class="text-lg flex flex-row justify-center text-center mx-auto mb-1" style="background-color: #0288d1;color:white;">
                                                    Tipo
                                                </div>
                                                <div style="border:solid 1px #0288d1;background-color:lightgrey;text-align:center" class="p-2 h-20">
                                                    @foreach ($tipos as $t)
                                                    @if ($t->id == $item->tipo_id)
                                                    {{ $t->nombre }}
                                                    @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="div4 ml-1 ">
                                                <div class="text-lg flex flex-row justify-center text-center mx-auto mb-1" style="background-color: #0288d1;color:white;">
                                                    Nº Jugadores
                                                </div>
                                                <div style="border:solid 1px #0288d1;background-color:lightgrey; text-align: center;" class="p-2">
                                                    {{ $item->njugadores }}
                                                </div>
                                            </div>
                                            <div class="div3 mr-1">
                                                <div class="text-lg flex flex-row justify-center text-center mx-auto mb-1" style="background-color: #0288d1;color:white;">
                                                    Tiempo
                                                </div>
                                                <div style="border:solid 1px #0288d1;background-color:lightgrey; text-align: center;" class="p-2">
                                                    {{ $item->tiempo }}
                                                </div>
                                            </div>
                                            <div class="div2 ml-1">
                                                <div class="text-lg flex flex-row justify-center text-center mx-auto mb-1" style="background-color: #0288d1;color:white;">
                                                    Material
                                                </div>
                                                <div style="border:solid 1px #0288d1;background-color:lightgrey;text-align:center" class="p-2 h-20">
                                                    {{ $item->material }}
                                                </div>
                                            </div>
                                            <div class="div5 mr-1">
                                                <div style="padding-top: 10px;grid-template-columns: 6em 1fr;align-items: center;">
                                                    <div>
                                                        <label for="created_at">Creado:</label>
                                                    </div>
                                                    <div>
                                                        <input disabled id="created_at" name='created_at' style="color:gray;padding: 9px 10px;width: 100%;text-align:center; display: block;margin: 0;outline: medium none; border-bottom: solid 1px #c6d6df;" value="2022-23-05" />
                                                    </div>
                                                </div>
                                                <div style="padding-top: 10px;grid-template-columns: 6em 1fr;align-items: center;">
                                                    <div>
                                                        <label for="updated_at">Editado ult. vez:</label>
                                                    </div>
                                                    <div>
                                                        <input disabled id="updated_at" name='updated_at' style="color:gray;padding: 9px 10px;width: 100%;text-align:center; display: block;margin: 0;outline: medium none; border-bottom: solid 1px #c6d6df;" value="2022-23-05" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="div6 mr-1 mb-2">
                                                <div style="padding-top: 10px;grid-template-columns: 6em 1fr;align-items: center;">
                                                    <div>
                                                        <label for="created_at"><b>Realizado por:</b></label>
                                                    </div>
                                                    <div>
                                                        {{ $item->user->name }}
                                                    </div>
                                                </div>
                                                <div style="padding-top: 10px;grid-template-columns: 6em 1fr;align-items: center; display:flex">
                                                    <div>
                                                        <label for="estado" class="mr-1"><b>Estado:</b></label>
                                                    </div>
                                                    <div>
                                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full text-white
                                                    @if ($item->estado == 1) bg-red-500 @else bg-green-500 @endif">
                                                            @if ($item->estado == 2)
                                                            Público
                                                            @else
                                                            Privado
                                                            @endif
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>

                                            @if ($item->user_id == auth()->user()->id)

                                            <div class=" mr-1 my-2">
                                                <button id="botonEditar" data-modal-toggle="modalEditar{{$item->id}}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-3  rounded mx-auto lg:whitespace-nowrap" style="width:50%;">
                                                    <i class="mr-1 fa-solid fa-edit"></i><span class=" icono">Editar</span></button>
                                                @include('ejercicios.edit')
                                            </div>

                                            @if (isset($sesion))
                                            <div class=" mr-1 my-2">
                                                <form action="{{ route('ejercicios.quitar', $item) }}" method="GET" enctype="multipart/form-data">
                                                    @csrf
                                                    <button class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-3 rounded mx-auto lg:whitespace-nowrap" style="width:50%;" onclick="return confirm('Quitar el ejercicio {{ $item->nombre }} de la sesion {{ $sesion->nombre }}?')">
                                                        <i class="fa-solid fa-right-from-bracket"></i><span class="ml-1 icono">Quitar</span></button>
                                                </form>
                                            </div>
                                            @else
                                            <div class=" mr-1 my-2">
                                                <form action="{{ route('ejercicios.destroy', $item) }}" method="GET" enctype="multipart/form-data">
                                                    @csrf
                                                    <button class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-3 rounded mx-auto md:whitespace-nowrap" style="width:50%;" onclick="return confirm('Borrar el ejercicio {{ $item->nombre }} permanentemente ?')">
                                                        <i class="mr-1 fa-solid fa-trash"></i><span class="ml-1 icono">Borrar</span></button>
                                                </form>
                                            </div>
                                            @endif

                                            @else
                                            @if (isset($sesion))
                                            <div class=" mr-1 my-2">
                                                <form action="{{ route('ejercicios.quitar', $item) }}" method="GET" enctype="multipart/form-data">
                                                    @csrf
                                                    <button class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-3 rounded mx-auto lg:whitespace-nowrap" style="width:50%;" onclick="return confirm('Quitar el ejercicio {{ $item->nombre }} de la sesion {{ $sesion->nombre }}?')">
                                                        <i class="fa-solid fa-right-from-bracket"></i><span class="ml-1 icono">Quitar</span></button>
                                                </form>
                                            </div>
                                            @endif
                                            @endif

                                        </div>

                                    </div>
                                    @if(!isset($sesion))
                                    <div style="text-align: center;">
                                        <a href="{{route('ejercicio.asignar',$item)}}" class="bg-black hover:bg-clack text-white font-bold py-2 px-3  rounded mx-auto lg:whitespace-nowrap" style="width:50%;">
                                            <i class="fa-solid fa-calendar-plus mr-1"></i><span class="icono">Añadir a la sesión</span>
                                        </a>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach


                        <!--Aqui termina el ejercicio -->
                        <div style="text-align: center;">
                        @if(isset($sesion))
                        @else
                        @if ($ejercicios->count() > 0)
                        <div class="mt-2 mx-auto col-span-4 " style="width:100%;display:block; text-align:center !important; margin-left:25% !important;">
                            {{ $ejercicios->links() }}
                        </div>
                        @endif
                        @endif
                        </div>
                        <!--Aqui termina el contenedor de los ejercicios-->
                    </div>


                    <!--Aqui termina el contenedor de los dos espacios-->
                </div>
                @if (session('crear'))
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: "{{ session('crear') }}",
                        showConfirmButton: false,
                        timer: 2500
                    })
                </script>
                @endif
                @if (session('borrar'))
                <script>
                    Swal.fire({
                        icon: 'error',
                        title: "{{ session('borrar') }}",
                        showConfirmButton: false,
                        timer: 2500
                    })
                </script>
                @endif

                <script>
                    function cargarPDF() {

                        const pdf = this.document.getElementById("pdfEjercicios");

                        var opt = {
                            margin: [0.25, 0],
                            filename: 'sesion.pdf',
                            image: {
                                type: 'jpeg',
                                quality: 1
                            },
                            html2canvas: {
                                scale: 2
                            },
                            jsPDF: {
                                unit: 'in',
                                format: 'letter',
                                orientation: 'portrait'
                            },
                            pagebreak: {
                                mode: 'avoid-all'
                            }
                        };
                        html2pdf().from(pdf).set(opt).save();
                    }
                </script>

</x-app-layout>