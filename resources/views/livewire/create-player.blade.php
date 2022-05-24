<div>
    <form action="{{ route('players1.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mx-w-sm card2 rounded bg-white shadow-lg ml-6  mr-6">
            <div class="text-lg  flex flex-row justify-top px-6 py-4 text-center"
                style="background-color: #0288d1;color:white">
                <h3 class="font-bold mx-auto">Nuevo Jugador</h3>
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
                            <i class="fa-solid fa-save"></i> Guardar</button>

                        <button type="reset"
                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-2 rounded ml-2 "
                            style="white-space: nowrap;">
                            <i class="fa-solid fa-eraser"></i> Limpiar</button>

                    </div>
                </div>
                <div style=" padding: 10px; display:flex; " class="flex sm:flex-col md:flex-row">
                    <div style="width: 66%;display: grid;align-items: center;padding: 0;margin-right:20px">
                        <div
                            style="padding-top: 10px;display: grid !important;grid-template-columns: 6em 1fr;align-items: center;">
                            <div>
                                <label for="nombre">Nombre:</label>
                            </div>
                            <div>
                                <input id="nombre" name='nombre' style="padding: 9px 10px;width: 100%; display: block;margin: 0;outline: medium none; border-bottom: solid 1px #c6d6df;" placeholder="Nombre" />
                            </div>
                        </div>
                        <div
                            style="padding-top: 10px;display: grid !important;grid-template-columns: 6em 1fr;align-items: center;">
                            <div>
                                <label for="apellidos">Apellidos:</label>
                            </div>
                            <div>
                                <input id="apellidos" name='apellidos' style="padding: 9px 10px;width: 100%; display: block;margin: 0;outline: medium none; border-bottom: solid 1px #c6d6df;" placeholder="Apellidos" label="Apellidos" />
                            </div>
                        </div>
                        <div
                            style="padding-top: 10px;display: grid !important;grid-template-columns: 6em 1fr;align-items: center;">
                            <div>
                                <label for="posicion">Posicion:</label>
                            </div>
                            <div>
                                <select id="posicion" class="block  px-0 w-full appearance-none  focus:outline-none focus:ring-0  "  name="posicion">
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
                                <input id="edad" name='edad' style="padding: 9px 10px;width: 100%; display: block;margin: 0;outline: medium none; border-bottom: solid 1px #c6d6df;" placeholder="0" />
                            </div>
                        </div>
                        <div
                            style="padding-top: 10px;display: grid !important;grid-template-columns: 6em 1fr;align-items: center;">
                            <div>
                                <label for="dorsal">Dorsal:</label>
                            </div>
                            <div>
                                <input id="dorsal" name='dorsal'style="padding: 9px 10px;width: 100%; display: block;margin: 0;outline: medium none; border-bottom: solid 1px #c6d6df;" placeholder="0" />
                            </div>
                        </div>
                        <div
                            style="padding-top: 10px;display: grid !important;grid-template-columns: 6em 1fr;align-items: center;">
                            <div>
                                <label for="peso">Peso(kg):</label>
                            </div>
                            <div>
                                <input id="peso" name='peso' style="padding: 9px 10px;width: 100%; display: block;margin: 0;outline: medium none; border-bottom: solid 1px #c6d6df;"  placeholder="0" />
                            </div>
                        </div>
                        <div
                            style="padding-top: 10px;display: grid !important;grid-template-columns: 6em 1fr;align-items: center;">
                            <div>
                                <label for="altura">Altura(cm):</label>
                            </div>
                            <div>
                                <input id="altura" name='altura' style="padding: 9px 10px;width: 100%; display: block;margin: 0;outline: medium none; border-bottom: solid 1px #c6d6df;"  placeholder="0" />
                            </div>
                        </div>
                        <div
                            style="padding-top: 10px;display: grid !important;grid-template-columns: 6em 1fr;align-items: center;">
                            <div>
                                <label for="oservaciones">Observaciones:</label>
                            </div>
                            <div>
                            </div>
                            <textarea id="observaciones" class="  col-span-2 w-100" name="observaciones" placeholder="Anote las observaciones..."></textarea>
                        </div>

                    </div>

                    <div class='mt-2' style="width: 33%;">
                        <div style="border-radius: 10px; max-width:100%; border:0px;" class="mx-auto">
                            @if ($foto)
                                <img src="{{ $foto->temporaryUrl() }}" class="object-cover object-center" />
                            @else
                                <img src="{{ asset('storage/players/avatar.png') }}"
                                    class="object-cover object-center " />
                            @endif
                        </div>
                        <div class="mt-2">
                            <label
                                class="btn bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded roundecontrol mt-2" style="white-space: nowrap"><i
                                    class="fas fa-plus" ></i>Añadir Foto
                                <input type="file" style="display: none" name="foto" wire:model="foto" accept="image/*">
                            </label>

                            <x-jet-input-error for="foto" class="mt-2" />

                        </div>


                    </div>

                </div>
            </div>
        </div>
    
    </form>
</div>
