<!--Ventana modal del create-->
@if()
<form class="form" @if(!isset($error)) action="{{ route('ejercicios.store') }}" @endif method="POST" enctype="multipart/form-data">
    @csrf
    <div style="zoom: 90%" id="modalCrear" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-5xl h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="text-2xl flex flex-row my-2" style="background-color: #0288d1;">
                    <h3 class="font-bold px-6 py-4"><input id="nombre" name='nombre'
                        style="padding: 9px 10px;width: 175%; display: block;margin: 0;outline: medium none; border-bottom: solid 1px #c6d6df;"
                        placeholder="Nombre" />@error('nombre')
                        <p class=" text-red-900 mt-1">*** {{ $message }}</p>
                    @enderror</h3>

                        @if (isset($sesion))
                            <img src="{{ asset('storage/' . $sesion->team->escudo) }}"
                                class=" h-12 my-auto flex-end" style="margin-left: 40%;width: 60px;height: 60px;">
                            @else
                            <h3 class=" my-auto flex-end text-white font-bold" style="margin-left: 30%;">Nuevo Ejercicio</h3>
                        @endif
                        
                        <button type="button"
                        class="text-white mr-8 bg-transparent hover:border-gray-700  hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="modalCrear">
                        <i class="text-xl fa-solid fa-xmark-large ">x</i>
                    </button>
                    
                </div>
                
                <!-- Modal body -->
                <div class="grid-ejercicio" style="padding: 0;">
                    <div class=" p-2 imagen">
                        <img src="{{ asset('storage/ejercicios/noimage.jpg') }}" style="width: 450px; height:220px;" class="mx-auto" id="foto">
                        <label for="img"
                            class="btn  bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded lg:whitespace-nowrap roundecontrol mt-2"
                            style=" width:50%"><i class="fas fa-plus"></i>Añadir Foto
                            <input type="file" style="display: none" name="img" id="img" value=""  accept="image/*">
                        </label>
                    </div>
                    <div class="p-2 mx-auto descripcion" style="width: 400px;height:210px !important;">
                        <div class="text-lg flex flex-row justify-center text-center mx-auto mb-1"
                            style="background-color: #0288d1;color:white;">
                            Descipción
                        </div>
                        <div style="height:195px;border:solid 1px #0288d1;background-color:lightgrey;"
                            class="p-2 overflow-y-auto">
                            <div
                                style="padding-top: 10px;display: grid !important;grid-template-columns: 6em 1fr;align-items: center;">


                                <textarea id="descripcion" value="{{old('descripcion')}}"
                                    class="col-span-2 object-cover" cols="50" rows="5" name="descripcion"
                                    placeholder="Describa el ejercicio..."></textarea>
                            </div>
                        </div>
                        @error('descripcion')
                        <p class="text-base text-red-900 mt-1">*** {{ $message }}</p>
                    @enderror
                    </div>
                    

                    <div class=" rounded p-2 formulario">
                        <div style=" padding: 10px; display:flex; " class="flex sm:flex-col md:flex-row">
                            <div class="grid-formulario" style="align-items: center;padding: 0;margin-right:5px">
                                
                                <div class="div1 mr-1">
                                    <div class="text-lg flex flex-row justify-center text-center mx-auto mb-1"
                                        style="background-color: #0288d1;color:white;">
                                        Tipo
                                    </div>
                                    <div style="border:solid 1px #0288d1;background-color:lightgrey;"
                                        class="p-2 h-20">
                                        <select id="tipo_id" name="tipo_id" style="padding: 9px 10px;width: 100%; display: block;margin: 0;outline: medium none; border: solid 1px #c6d6df;">
                                            <option selected>Elija un tipo</option>
                                            @foreach ($tipos as $t)
                                                <option value="{{$t->id}}">{{ $t->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('tipo_id')
                                    <p class="text-sm text-red-900 mt-1">*** {{ $message }}</p>
                                @enderror
                                </div>
                                
                                <div class="div4 ml-1 ">
                                    <div class="text-lg flex flex-row justify-center text-center mx-auto mb-1"
                                        style="background-color: #0288d1;color:white;">
                                        Nº Jugadores
                                    </div>
                                    <div style="border:solid 1px #0288d1;background-color:lightgrey; text-align: center;"
                                        class="p-2">
                                        <input id="njugadores" name='njugadores'
                                            style="padding: 9px 10px;width: 100%; display: block;margin: 0;outline: medium none; border-bottom: solid 1px #c6d6df;" />
                                    </div>
                                    @error('njugadores')
                                    <p class="text-sm text-red-900 mt-1">*** {{ $message }}</p>
                                @enderror
                                </div>

                                <div class="div3 mr-1">
                                    <div class="text-lg flex flex-row justify-center text-center mx-auto mb-1"
                                        style="background-color: #0288d1;color:white;">
                                        Tiempo
                                    </div>
                                    <div style="border:solid 1px #0288d1;background-color:lightgrey; text-align: center;"
                                        class="p-2">
                                        <input id="tiempo" name='tiempo'
                                            style="padding: 9px 10px;width: 100%; display: block;margin: 0;outline: medium none; border-bottom: solid 1px #c6d6df;" />
                                    </div>
                                    @error('tiempo')
                                    <p class="text-sm text-red-900 mt-1">*** {{ $message }}</p>
                                @enderror
                                </div>
                                
                                <div class="div2 ml-1">
                                    <div class="text-lg flex flex-row justify-center text-center mx-auto mb-1"
                                        style="background-color: #0288d1;color:white;">
                                        Material
                                    </div>
                                    <div style="border:solid 1px #0288d1;background-color:lightgrey;"
                                        class="p-2 h-20">
                                        <input id="material" name='material'
                                            style="padding: 9px 10px;width: 100%; display: block;margin: 0;outline: medium none; border-bottom: solid 1px #c6d6df;" />
                                    </div>
                                    @error('material')
                                    <p class="text-sm text-red-900 mt-1">*** {{ $message }}</p>
                                @enderror
                                </div>
                               
                                <div class="div5 mr-1">
                                    <div style="padding-top: 10px; display: flex;">
                                        <div>
                                            <label for="estado"><b>Publicar:</b></label>
                                        </div>
                                        <div>
                                            <div class="ml-2 flex justify-center">
                                                <div class="form-check form-switch">
                                                    <input
                                                        class="form-check-input appearance-none w-9 -ml-10 rounded-full float-left h-5 align-top  bg-no-repeat bg-contain bg-gray-300 focus:outline-none cursor-pointer shadow-sm"
                                                        type="checkbox" role="switch" id="estado" name="estado">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <div>
                                            <label for="user"><b>Creado por:</b></label>
                                        </div>
                                        <div>
                                            <div class=" justify-center">
                                                {{auth()->user()->name}}
                                            </div>
                                        </div>
                                    </div>
                                    @if(isset($sesion))
                                    <input type="hidden" id="sesion_id" name='sesion_id'
                                    style="padding: 9px 10px;width: 100%; display: block;margin: 0;outline: medium none; border-bottom: solid 1px #c6d6df;"
                                    value="{{ $sesion->id }}" />
                                    @endif
                                    <input type="hidden" id="user_id" name='user_id'
                                    style="padding: 9px 10px;width: 100%; display: block;margin: 0;outline: medium none; border-bottom: solid 1px #c6d6df;"
                                    value="{{ auth()->user()->id }}" />
                                </div>
                                <div class="div6 mr-1">
                                    <div style=" padding: 2px;border-radius: 10px;padding-top: 10px;grid-template-columns: 6em 1fr;align-items: center;"
                                        class="bg-orange-100">
                                        <div>
                                            <label><b>Nota:</b></label>
                                        </div>
                                        <div>
                                            <div class="ml-2 flex justify-center">
                                                Si activa la opción publicado, los demas usuarios tendran acceso a
                                                la visualizacion de este ejercicio
                                                junto a demás ejercicios publicados.
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>



                        </div>
                    </div>


                </div>
                <!-- Modal footer -->
                <div
                    class="flex bg-gray-200 flex-row-reverse  items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">

                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 mx-2 px-2 rounded"
                        style="white-space: nowrap;">
                        <i class="fa-solid fa-save"></i> Guardar</button>

                    <button type="reset"
                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-2 rounded ml-2 "
                        style="white-space: nowrap;">
                        <i class="fa-solid fa-eraser"></i> Limpiar</button>

                </div>
            </div>
        </div>
    </div>
    <script>
        //Cambiar imagen 
        document.getElementById("img").addEventListener('change', cambiarImagen);
    
        function cambiarImagen(event) {
            var file = event.target.files[0];
            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("foto").setAttribute('src', event.target.result)
            };
            reader.readAsDataURL(file);
        }

        
    </script>

</form>


<!--Fin de ventana modal del create-->