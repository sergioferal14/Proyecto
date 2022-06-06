<div>
    <button wire:click="$set('isOpen', true)"
        class="bg-sky-700 hover:bg-sky-800 text-white font-bold py-2 px-4 rounded border-3 ">
        <i class="fa-solid fa-plus"></i> Nueva Sesión</button>
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
                    <x-form-input id="nombre" name='nombre'
                        style="padding: 9px 10px;width: 100%; display: block;margin: 0;outline: medium none; border-bottom: solid 1px #c6d6df;"
                        placeholder="S60 J20-01-22" />
                </div>
            </div>
            <div style="padding-top: 10px;display: grid !important;grid-template-columns: 6em 1fr;align-items: center;">
                <div>
                    <x-jet-label value="Fecha:" />
                </div>
                <div>
                    <x-form-input type="date" id="fecha" name='fecha'
                        style="padding: 9px 10px;width: 100%; display: block;margin: 0;outline: medium none; border-bottom: solid 1px #c6d6df;"
                         />
                </div>
            </div>

            <div style="padding-top: 10px;display: grid !important;grid-template-columns: 6em 1fr;align-items: center;">
                <div>
                    <x-jet-label value="Equipo:" />
                </div>
                <div>
                    @if($teams->count() < 1)
                    <span style="background-color: red;" class="rounded p-1 font-bold">No dirige ningún equipo</span>
                    @else
                    <x-form-select  class="block  px-0 w-full   focus:outline-none focus:ring-0  "
                        style="padding: 9px 10px;width: 100%; display: block;margin: 0;outline: medium none; border-bottom: solid 1px #c6d6df;"
                        name="team_id" >
                        <option selected>Selecciona un equipo</option>
                        @foreach ($teams as $item)
                            <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                        @endforeach
                    </x-form-select>  
                    @endif
                </div>
            </div>
            @endwire

        </x-slot>
        <x-slot name="footer">
            <button wire:click="guardar" wire:loading.attr="disabled"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                <i class="fa-solid fa-save"></i> <span class="icono">Guardar</span> </button>

            <button wire:click="$set('isOpen', false)"
                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded ml-2">
                <i class="fa-solid fa-angles-left"></i> <span class="icono">Volver</span> </button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
