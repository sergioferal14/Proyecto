<div>
    <form action="{{ route('players.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mx-w-md card2 rounded bg-white" style="border:solid 3px black;">
            <div class="text-lg flex flex-row justify-top text-center" style="background-color: #0288d1;color:white;">
                <h3 class="font-bold px-6 py-4 ">Nuevo Jugador del {{ $team->nombre }}</h3><img
                    src="{{ asset('storage/' . $team->escudo) }}" class="mr-3  mx-auto my-auto flex-end" style="width:60px;height:60px">
            </div>
            <div class="px-6 py-2">
                <div
                    style="display: flex; align-items: center; background-color: white; min-height: 70px; border-top-right-radius: 4px; padding-top: 20px; border-top-left-radius: 4px;">
                    <span class="font-bold" style="font-size: 24px;margin-left: 20px;">Nombre del Jugador</span>
                    <div
                        style="display: flex; align-items: center; justify-content: flex-end; margin-right: 20px; margin-left: auto;">
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded"
                            style="white-space: nowrap;">
                            <i class="fa-solid fa-save"></i> <span class="icono">Guardar</span> </button>

                        <button type="reset"
                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-2 rounded ml-2 "
                            style="white-space: nowrap;">
                            <i class="fa-solid fa-eraser"></i> <span class="icono">Limpiar</span> </button>

                    </div>
                </div>
                <div style=" padding: 10px; display:flex; " class="flex md:flex-row formularioPlayer">
                    <div style="width: 66%;display: grid;align-items: center;padding: 0;margin-right:20px " class="formDatosPlayer">
                        <input type="hidden" id="team_id" name='team_id'
                            style="padding: 9px 10px;width: 100%; display: block;margin: 0;outline: medium none; border-bottom: solid 1px #c6d6df;"
                            value="{{ $team->id }}" />

                        <div
                            style="padding-top: 10px;display: grid !important;grid-template-columns: 6em 1fr;align-items: center;">
                            <div>
                                <label for="nombre">Nombre:</label>
                            </div>
                            <div>
                                <input id="nombre" name='nombre'
                                    style="padding: 9px 10px;width: 100%; display: block;margin: 0;outline: medium none; border-bottom: solid 1px #c6d6df;"
                                    placeholder="Nombre" />
                            </div>

                        </div>
                        @error('nombre')
                            <p class="text-sm text-red-900 mt-1">*** {{ $message }}</p>
                        @enderror
                        <div
                            style="padding-top: 10px;display: grid !important;grid-template-columns: 6em 1fr;align-items: center;">
                            <div>
                                <label for="apellidos">Apellidos:</label>
                            </div>
                            <div>
                                <input id="apellidos" name='apellidos'
                                    style="padding: 9px 10px;width: 100%; display: block;margin: 0;outline: medium none; border-bottom: solid 1px #c6d6df;"
                                    placeholder="Apellidos" label="Apellidos" />
                            </div>
                        </div>
                        @error('apellidos')
                            <p class="text-sm text-red-900 mt-1">*** {{ $message }}</p>
                        @enderror
                        <div
                            style="padding-top: 10px;display: grid !important;grid-template-columns: 6em 1fr;align-items: center;">
                            <div>
                                <label for="posicion">Posicion:</label>
                            </div>
                            <div>
                                <select id="posicion"
                                    class="block  px-0 w-full appearance-none  focus:outline-none focus:ring-0  "
                                    name="posicion">
                                    @foreach ($posiciones as $item)
                                        <option>{{ $item }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div
                            style="padding-top: 10px;display: grid !important;grid-template-columns: 6em 1fr;align-items: center;">
                            <div>
                                <label for="edad">Edad:</label>
                            </div>
                            <div>
                                <input id="edad" name='edad'
                                    style="padding: 9px 10px;width: 100%; display: block;margin: 0;outline: medium none; border-bottom: solid 1px #c6d6df;"
                                    placeholder="0" />
                            </div>
                        </div>
                        @error('edad')
                            <p class="text-sm text-red-900 mt-1">*** {{ $message }}</p>
                        @enderror
                        <div
                            style="padding-top: 10px;display: grid !important;grid-template-columns: 6em 1fr;align-items: center;">
                            <div>
                                <label for="dorsal">Dorsal:</label>
                            </div>
                            <div>
                                <input id="dorsal" name='dorsal'
                                    style="padding: 9px 10px;width: 100%; display: block;margin: 0;outline: medium none; border-bottom: solid 1px #c6d6df;"
                                    placeholder="0" />
                            </div>
                        </div>
                        @error('dorsal')
                            <p class="text-sm text-red-900 mt-1">*** {{ $message }}</p>
                        @enderror
                        <div
                            style="padding-top: 10px;display: grid !important;grid-template-columns: 6em 1fr;align-items: center;">
                            <div>
                                <label for="peso">Peso(kg):</label>
                            </div>
                            <div>
                                <input id="peso" name='peso'
                                    style="padding: 9px 10px;width: 100%; display: block;margin: 0;outline: medium none; border-bottom: solid 1px #c6d6df;"
                                    placeholder="0" />
                            </div>
                        </div>
                        @error('peso')
                            <p class="text-sm text-red-900 mt-1">*** {{ $message }}</p>
                        @enderror
                        <div
                            style="padding-top: 10px;display: grid !important;grid-template-columns: 6em 1fr;align-items: center;">
                            <div>
                                <label for="altura">Altura(cm):</label>
                            </div>
                            <div>
                                <input id="altura" name='altura'
                                    style="padding: 9px 10px;width: 100%; display: block;margin: 0;outline: medium none; border-bottom: solid 1px #c6d6df;"
                                    placeholder="0" />
                            </div>
                        </div>
                        @error('altura')
                            <p class="text-sm text-red-900 mt-1">*** {{ $message }}</p>
                        @enderror
                        <div
                            style="padding-top: 10px;display: grid !important;grid-template-columns: 6em 1fr;align-items: center;">
                            <div>
                                <label for="observaciones">Observaciones:</label>
                            </div>
                            <div>
                            </div>
                            <textarea id="observaciones" value="{{old('observaciones')}}" class="col-span-2 object-cover" cols="50" rows="5" name="observaciones"
                                placeholder="Anote las observaciones..."></textarea>
                        </div>
                    </div>

                    <div class='mt-2 formDatosPlayer' style="width: 33%;" >
                        <div style="border-radius: 10px; max-width:100%; border:0px;" class="mx-auto">
                            <img src="{{ asset('storage/players/avatar.png') }}" class="object-cover object-center "
                                id="img" />
                        </div>
                        <div class="mt-2">
                            <label for="foto"
                                class="btn bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded lg:whitespace-nowrap roundecontrol mt-2"
                                style=" width:100%"><i class="fas fa-plus"></i>Añadir Foto
                                <input type="file" style="display: none" name="foto" id="foto" accept="image/*">
                            </label>

                            @error('foto')
                                <p class="text-sm text-red-900 mt-1">*** {{ $message }}</p>
                            @enderror

                        </div>


                    </div>

                </div>
            </div>
        </div>

    </form>

</div>
<script>
    //Cambiar imagen 
    document.getElementById("foto").addEventListener('change', cambiarImagen);

    function cambiarImagen(event) {
        var file = event.target.files[0];
        var reader = new FileReader();
        reader.onload = (event) => {
            document.getElementById("img").setAttribute('src', event.target.result)
        };
        reader.readAsDataURL(file);
    }
</script>
