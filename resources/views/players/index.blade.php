<x-app-layout>
    <div class="mt-4 max-w-7xl mx-auto sm:px-6 lg:px-8 container" >
    
        <div class="my-2 mb-5 grid md:grid-cols-2" style="min-height:calc(100vh-266px)">
            <div class=" card2 xl:w-96 ml-6 bg-white mr-6 mx-w-sm rounded overflow-hidden shadow-lg ">
  
                <div class="text-lg flex flex-row justify-top text-center"
                    style="background-color: #0288d1;color:white;">
                    <h3 class="font-bold px-6 py-4 ">Jugadores del {{$team->nombre}}</h3><img src="{{ asset('storage/'.$team->escudo) }}" class="mr-3 h-12 sm:h-12 mx-auto my-auto flex-end">
                </div>
                <div>
                    <x-tabla>
                        <table role="grid" class="min-w-full divide-y divide-gray-200">
                            <thead>
                                <tr role="row">
                                    <th
                                        style="text-align: center;background-color: white; border:none; outline:none;padding:10px;font-size:16px;">
                                        <input  wire:model="search"
                                            style="padding: 9px 10px;width: 100%; display: block;margin: 0;outline: medium none; border-bottom: solid 1px #c6d6df;"
                                            class="focus:bg-white focus:border-blue-600 focus:outline-none"
                                            placeholder="Search" aria-label="Search" aria-describedby="button-addon2" />
  
                                    </th>
  
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 overflow-auto" >
  
                                @if ($players->count())
                                    @foreach ($players as $item)
                                    <div>
                                        <tr class=" border-b hover:bg-sky-50 dark:hover:bg-sky-600">
                                            <a wire:click="edit({{ $item }})">
                                                <td role="gridcell">
                                                    <div style="display: flex;align-items:center;">
                                                        <div class="flex">
                                                            <img class="h-12 w-12 object-cover"
                                                                src="{{ asset('storage/' . $item->foto) }}" style="background-color: white !important;
                                                                border-right: none !important;
                                                                border-top: none !important;
                                                                border-bottom: none !important;
                                                                height: calc(60px+1vw);
                                                                border-radius: 4px;
                                                                margin-right: 10px;
                                                                border-width: 4px !important;" alt="">
                                                        </div>
                                                        <div class="ml-4">
                                                            <div class="text-sm font-medium text-gray-900 ">
                                                                {{ $item->nombre }} {{ $item->apellidos }}
                                                            </div>
                                                            <div class="text-sm text-gray-500">{{ $item->posicion }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    {{ $item->dorsal }}
                                                </td>
                                            </a>
                                        </tr>
                                    </div>
                                    @endforeach
                                @else
                                    <div class="mt-2 text-center font-bold text-lg">No se enconcotró ningún jugador.
                                    </div>
                                @endif
                            </tbody>
                        </table>
                    </x-tabla>
  
                </div>
                <div class="flex flex-row justify-end px-6 py-4 bg-gray-100 text-right">
                    <div class=" mx-auto pagination ">
                        {{ $players->links() }}
                    </div>
                </div>
  
            </div>
            <div>
                @if ($control)
                <div>
                    <form action="{{ route('players.store',$team->id) }}" method="POST" enctype="multipart/form-data">
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
                
                @else
                    @livewire('update-player')
                @endif
            </div>
        </div>
    </div>
  </x-app-layout>
  