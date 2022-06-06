<div class="mt-4 max-w-7xl mx-auto sm:px-6 lg:px-8 container">
    <div class="my-2 grid md:grid-cols-3 mb-5">
        <div class="mx-auto">
            <div class="flex ">
                <div class=" xl:w-96 ml-6">
                    <div class="input-group relative flex flex-wrap items-stretch w-full mb-4">
                        <input type="search" wire:model="search"
                            class=" mx-auto form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            placeholder="Buscar nombre" aria-label="Search" aria-describedby="button-addon2">
                        <button
                            class="btn inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700  focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out flex items-center"
                            type="button" id="button-addon2">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="mx-auto">
            <input type="date"  id="fecha" wire:model="search2" name='fecha' class="rounded"/>
        </div>
        <div class="mx-auto">
               
            @livewire('create-sesion')
        </div>
        
            
    </div>
    @if ($sesions->count())
        <div class="grid mx-auto lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 sm:grid-cols-1 " style="border-radius:10px; grid-template-columns:repeat(auto-fill,minmax(250px,1fr))">
            @foreach ($sesions as $item)
                <div class="mx-auto mb-4 rounded-lg bg-dark" style="padding: 15px;background-image: url({{'storage/'.$item->team->escudo}});
                    background-repeat: no-repeat;
                    background-size: contain;
                    /* background-blend-mode: luminosity;Para poner el escudo del mismo color*/
                    font-weight: 600;
                    font-size: 19px;
                    line-height: 1.3;
                    height: 200px;
                    width:250px;
                    /* background-color: black !important; */
                    border: solid 2px white !important;
                    background-position: calc(100% + calc(90px + 0.5vw)) 50%;">
                    <a class="linkS"  href="{{ route('ejercicio.index',$item) }}">
                    <div
                        style="height: 100%;margin: -20px;padding: 20px;white-space: normal;word-wrap: break-word;color: white;" class="my-auto">
                        <div style="max-width: calc(100% -20px); ">
                            <div>S{{$item->id}}-{{$item->nombre}}</div>
                            <div style="white-space: nowrap;"><i class="fas fa-calendar mr-1"></i>{{$item->fecha}}</div>
                            <div style="white-space: nowrap;"><i class="fas fa-shield mr-1"></i>{{$item->team->nombre}}</div>
                            </a>
                            <div style="display: flex;margin-top:15%">
                                <button wire:click="editar({{$item}})"
                                    class="linkSa  mr-1 py-2 px-3 rounded">
                                    <i style="color: black" class="fas fa-edit"></i>
                                </button>
                                <button class="linkSa py-2 px-3 rounded"
                                    wire:click="borrar({{$item}})">
                                    <i style=" color: black " class=" fas fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                </div>
            @endforeach

        </div>
    @else
    <h3 style="border-radius: 10px;background-color:black;text-align: center;width: 50%;margin: auto;" class="mb-3 text-white font-bold p-2 text-xl">No se enconcotró ninguna sesión.</h3>
    @endif
    <div class="mt-2 mb-4">
        {{ $sesions->links() }}
    </div>
    <x-jet-dialog-modal wire:model="isOpen">
        <x-slot name="title">
            <h3 class="font-bold">Nueva Sesión</h3>
            <button type="button" wire:click="$set('isOpen', false)"
                        class="text-white mr-8 bg-transparent hover:border-gray-700  hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                        <i class=" fa-solid fa-xmark-large px-2 p-2 rounded hover:bg-black"
                            style="border:solid 2px #c6d6df">x</i>
            </button>
        </x-slot>
        <x-slot name="content">
            @wire
            <div style="padding-top: 10px;display: grid !important;grid-template-columns: 6em 1fr;align-items: center;">
                <div>
                    <x-jet-label value="Nombre Sesion: " />
                </div>
                <div>
                    <x-form-input id="nombre" name='sesion.nombre'
                        style="padding: 9px 10px;width: 100%; display: block;margin: 0;outline: medium none; border-bottom: solid 1px #c6d6df;"
                        placeholder="S60 J20-01-22" wire:model.defer="sesion.nombre" />
                </div>
            </div>
            <div style="padding-top: 10px;display: grid !important;grid-template-columns: 6em 1fr;align-items: center;">
                <div>
                    <x-jet-label value="Fecha:" />
                </div>
                <div>
                    <x-form-input type="date" id="fecha" name='sesion.fecha' 
                        style="padding: 9px 10px;width: 100%; display: block;margin: 0;outline: medium none; border-bottom: solid 1px #c6d6df;"
                         />
                </div>
            </div>

            <div style="padding-top: 10px;display: grid !important;grid-template-columns: 6em 1fr;align-items: center;">
                <div>
                    <x-jet-label value="Equipo:" />
                </div>
                <div>
                    <x-form-select  class="block  px-0 w-full   focus:outline-none focus:ring-0  "
                        style="padding: 9px 10px;width: 100%; display: block;margin: 0;outline: medium none; border-bottom: solid 1px #c6d6df;"
                        name="sesion.team_id" >
                        @foreach ($teams as $item)
                            <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                        @endforeach
                    </x-form-select>  
                </div>
            </div>
            @endwire

        </x-slot>
        <x-slot name="footer">
            <button wire:click="update" wire:loading.attr="disabled"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                <i class="fa-solid fa-edit"></i> Editar</button>

            <button wire:click="$set('isOpen', false)"
                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded ml-2">
                <i class="fa-solid fa-angles-left"></i> Cancelar</button>
        </x-slot>
    </x-jet-dialog-modal>
    
</div>
