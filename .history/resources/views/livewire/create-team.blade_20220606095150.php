<div>
    <button wire:click="$set('isOpen', true)"
        class="bg-sky-700 hover:bg-sky-800 text-white font-bold py-2 px-4 rounded border-3 ">
        <i class="fa-solid fa-plus"></i> Nuevo Equipo</button>
        <x-jet-dialog-modal wire:model="isOpen">
            <x-slot name="title">
                <h3 class="font-bold">Nuevo Equipo</h3>
                <a class="ml-auto" wire:click="$set('isOpen', false)"><i class="fa-solid fa-xmark" ></i></a>
            </x-slot>
            <x-slot name="content">
                @wire
                <x-form-input name='nombre' placeholder="Nombre" label="Nombre" />
                @endwire
                <div class='flex mt-2'>
                    <div class="mt-2">
                        <x-jet-label value="Escudo del Equipo" />
                        <input type="file" class="form-control mt-2" name="escudo" wire:model="escudo" accept="image/*" />
                        <x-jet-input-error for="escudo" class="mt-2" />
                    </div>
                    
                    <div class="mt-2">
                        @if ($escudo)
                            <img src="{{ $escudo->temporaryUrl() }}" class="object-cover object-center w-50" style="margin-left: 70px" />
                        @else
                            <img src="{{ asset('storage/escudos/avatar-shield.png') }}" class="object-cover object-center w-50" style="margin-left: 70px" />
                        @endif
                    </div>
                </div>
                
    
            </x-slot>
            <x-slot name="footer">
                <button wire:click="guardar" wire:loading.attr="disabled"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    <i class="fa-solid fa-save"></i> Guardar</button>

                    <button wire:click="$set('isOpen', false)"
                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded ml-2">
                    <i class="fa-solid fa-angles-left"></i> Volver</button>
            </x-slot>
        </x-jet-dialog-modal>
</div>
