<div>

    <div class="mx-w-sm card2 rounded bg-white shadow-lg ml-6  mr-6" style="border:solid 3px black">
        <div class="text-lg flex flex-row justify-top text-center" style="background-color: #0288d1;color:white;">
            <h3 class="font-bold px-6 py-4 ">Editar Jugador del {{ $team->nombre }}</h3><img
                src="{{ asset('storage/' . $team->escudo) }}" class="mr-3 mx-auto my-auto flex-end" style="width:60px;height:60px">
        </div>
        <form action="{{ route('players.update', $player) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="px-6 py-2">
                <div
                    style="display: flex; align-items: center; background-color: white; min-height: 70px; border-top-right-radius: 4px; padding-top: 20px; border-top-left-radius: 4px;">
                    <span class="font-bold" style="font-size: 24px;margin-left: 20px;">{{ $player->nombre }}
                        {{ $player->apellidos }}</span>
                    <div
                        style="display: flex; align-items: center; justify-content: flex-end; margin-right: 20px; margin-left: auto;">
                        
                        <button name="btnAccion" value="1" type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded d-sm-block whitespace-normal lg:whitespace-nowrap">
                            <i class="fa-solid fa-save"></i> <span class="icono">Guardar</span> </button>

                        <button name="btnAccion" value="2" type="submit"
                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-2 rounded ml-2 whitespace-normal lg:whitespace-nowrap" onclick="return confirm('¿Borrar el jugador {{$player->nombre}} {{$player->apellidos}} ?')">
                            <i class="fa-solid fa-trash"></i> <span class="icono">Borrar</span> </button>

                        <a href="{{ route('players.index', $team) }}"
                            class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-2 rounded ml-2 whitespace-normal lg:whitespace-nowrap">
                            <i class="fa-solid fa-user-plus"></i> <span class="icono">Nuevo Jugador</span> </a>

                    </div>
                </div>
                <div style=" padding: 10px; display:flex; " class="flex sm:flex-col md:flex-row">
                    <div style="width: 66%;display: grid;align-items: center;padding: 0;margin-right:20px">
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
                                    value="{{ $player->nombre }}" />
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
                                    value="{{ $player->apellidos }}" label="Apellidos" />
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
                                        <option value="{{$item}}"
                                            @if ($item == $player->posicion) selected @endif>{{ $item }}
                                        </option>
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
                                    value="{{ $player->edad }}" />
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
                                    value="{{ $player->dorsal }}" />
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
                            <div style="display:flex">
                                <input id="peso" name='peso'
                                    style="padding: 9px 10px;width: 100%; display: block;margin: 0;outline: medium none; border-bottom: solid 1px #c6d6df;"
                                    value="{{ $player->peso }}" /><span class="mt-4">kg</span>
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
                            <div style="display: flex">
                                <input id="altura" name='altura'
                                    style="padding: 9px 10px;width: 100%; display: block;margin: 0;outline: medium none; border-bottom: solid 1px #c6d6df;"
                                    value="{{ $player->altura }}" /><span class="mt-4">cm</span>
                            </div>
                        </div>
                        @error('altura')
                            <p class="text-sm text-red-900 mt-1">*** {{ $message }}</p>
                        @enderror
                        





                        <div
                            style="padding-top: 10px;display: grid !important;grid-template-columns: 6em 1fr;align-items: center;">
                            <div>
                                <label for="oservaciones">Observaciones:</label>
                            </div>
                            <div>
                            </div>
                            <textarea id="observaciones" class="  col-span-2" cols="50" rows="5" style="height: 100px;"
                                name="observaciones">{{ $player->observaciones }}</textarea>
                        </div>
                    </div>

                    <div class='mt-2' style="width: 33%;">
                        <div style="border-radius: 10px; max-width:100%; border:0px;" class="mx-auto">
                            <img src="{{ asset('storage/' . $player->foto) }}" class="object-cover object-center "
                                id="img" />
                        </div>
                        <div class="mt-2">
                            <label for="foto"
                                class="btn bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded roundecontrol mt-2 whitespace-normal lg:whitespace-nowrap"><i
                                    class="fas fa-plus"></i>Añadir Foto
                                <input type="file" style="display: none" name="foto" id="foto" accept="image/*">
                            </label>

                            @error('foto')
                                <p class="text-sm text-red-900 mt-1">*** {{ $message }}</p>
                            @enderror

                        </div>
                        <div
                            style="padding-top: 10px;grid-template-columns: 6em 1fr;align-items: center;">
                            <div>
                                <label for="created_at">Creado:</label>
                            </div>
                            <div>
                                <input disabled id="created_at" name='created_at'
                                    style="color:gray;padding: 9px 10px;width: 100%; display: block;margin: 0;outline: medium none; border-bottom: solid 1px #c6d6df;"
                                    value="{{ $player->created_at }}" />
                            </div>
                        </div>
                        <div
                            style="padding-top: 10px;grid-template-columns: 6em 1fr;align-items: center;">
                            <div>
                                <label for="updated_at">Editado ult. vez:</label>
                            </div>
                            <div>
                                <input disabled id="updated_at" name='updated_at'
                                    style="color:gray;padding: 9px 10px;width: 100%; display: block;margin: 0;outline: medium none; border-bottom: solid 1px #c6d6df;"
                                    value="{{ $player->updated_at }}" />
                            </div>
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
