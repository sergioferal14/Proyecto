
<div class="mt-4 max-w-7xl mx-auto sm:px-6 lg:px-8 container">
    <div class="my-2 grid md:grid-cols-3 mb-5" >
        <div class="flex-1">
            <div class="flex ">
                <div class=" xl:w-96 ml-6">
                  <div class="input-group relative flex flex-wrap items-stretch w-full mb-4">
                    <input type="search" wire:model="search" class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                    <button class="btn inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700  focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out flex items-center" type="button" id="button-addon2">
                        <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
              </div>
        </div>
        
        <h3 style="border-radius: 10px;background-color:black;text-align: center;margin: auto;" class="mb-3 text-white font-bold p-2 text-3xl">Selecciona un equipo</h3>
        
        <div class="mx-auto flex-2">
            @livewire('create-team')
        </div>
    </div>
    @if ($teams->count())
    <div class="grid mx-auto lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1" style="border-radius:10px;border:1px;">
        @foreach ($teams as $item)
                <div class="card2">
                    <a href="{{ route('players.index',$item) }}">

                    <div class="card-header">
                        <img src="{{ asset('storage/'.$item->escudo) }}" style="height:175px; width:175px" class="mx-auto">
                    </div>
                    <div class="card-body bg-dark" style="color: white">
                        <p>
                            {{ $item->nombre }}
                        </p>
                    </a>
                        <div class="btns">
                          <button wire:click="edit({{ $item }})"
                            class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-3 m-2 rounded">
                            <i class="fa-solid fa-edit"></i><span class="icono">Editar</span> </button>
                        <button wire:click="borrar({{ $item }})"
                            class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-3 rounded">
                            <i class="fa-solid fa-trash" onclick="return confirm('¿Borrar el equipo {{$item->nombre}}?')"></i><span class="icono">Borrar</span> </button>  
                        </div>
                    </div>
                </div>
        @endforeach
    </div>
    @else
    <h3 style="border-radius: 10px;background-color:black;text-align: center;width: 30%;margin: auto;" class="mb-3 text-white font-bold p-2 text-base">No se enconcotró ningun equipo.</h3>
    @endif
    <div class="mt-2 mb-4">
        {{$teams->links()}}
    </div>
    <x-jet-dialog-modal wire:model="isOpen">
        <x-slot name="title" >
           <h3 class="font-bold">Editar Equipo</h3>
           <button type="button" wire:click="$set('isOpen', false)"
                        class="text-white mr-8 bg-transparent hover:border-gray-700  hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                        <i class=" fa-solid fa-xmark-large px-2 p-2 rounded hover:bg-black"
                            style="border:solid 2px #c6d6df">x</i>
                    </button>
        </x-slot>
        <x-slot name="content">
            <x-jet-label value="Nombre del Equipo" />
            <x-jet-input type="text" placeholder="Nombre" class="mt-2 w-full" wire:model.defer="team.nombre" />
            <x-jet-input-error for="team.nombre" />
            <!-- Para la Imagen -->
            <div class="grid mt-2 grid-cols-2 gap-4">
                <div>
                    <div class="flex justify-center">
                        <div class="mt-4">
                            <x-jet-label value="Escudo del Equipo" />
                            <input
                                class="form-control block w-full px-3
                                py-1.5
                                text-base
                                text-gray-700
                                bg-white bg-clip-padding
                                border border-solid border-gray-300
                                rounded transition ease-in-out
                                m-0
                                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                type="file" wire:model="escudo" accept="image/*">
                            <x-jet-input-error for="escudo" />
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <!-- Pintaremosla imagen por defecto o la imagen elegida-->
                    @if ($escudo)
                        <img src="{{ $escudo->temporaryUrl() }}" class="object-cover object-center w-50" style="margin-left: 70px">
                    @else
                        <img src="{{ asset('storage/'.$team->escudo) }}" class="object-cover object-center w-50 " style="margin-left: 70px">
                    @endif
                </div>
            </div>
        </x-slot>
        <x-slot name="footer">
            <button wire:click="update"
                    class="bg-yellow-500 hover:bg-yellow-700 text-white py-2 px-4 rounded">
                                    <i class="fas fa-edit"></i> <span class="iconos">Editar</span> </button>
                                    <button wire:click="$set('isOpen', false)"
                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded ml-2">
                    <i class="fa-solid fa-angles-left"></i> <span class="iconos">Volver</span> </button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
