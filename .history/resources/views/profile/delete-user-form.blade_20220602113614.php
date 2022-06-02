<x-jet-action-section>
    <x-slot name="title">
        {{ __('Borrar Cuenta') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Borrar cuenta permanentemente') }}
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-base ">
            Una vez que se elimine su cuenta,<b> todos sus equipos, jugadores , sesiones y ejercicios se eliminarán de forma permanente para usted y el resto usuarios</b>. Antes de eliminar su cuenta, descargue cualquier dato o información que desee conservar.
            
        </div>

        <div class="mt-5">
            <x-jet-danger-button wire:click="confirmUserDeletion" wire:loading.attr="disabled">
                {{ __('Eliminar Cuenta') }}
            </x-jet-danger-button>
        </div>

        <!-- Delete User Confirmation Modal -->
        <x-jet-dialog-modal wire:model="confirmingUserDeletion">
            <x-slot name="title">
                {{ __('Eliminar Cuenta') }}
            </x-slot>

            <x-slot name="content">
                {{ __('¿Está seguro de que desea eliminar su cuenta? Una vez que se elimine su cuenta,<b> todos sus equipos, jugadores , sesiones y ejercicios se eliminarán de forma permanente para usted y el resto de usuarios</b>. Ingrese su contraseña para confirmar que desea eliminar su cuenta de forma permanente.
                ') }}

                <div class="mt-4" x-data="{}" x-on:confirming-delete-user.window="setTimeout(() => $refs.password.focus(), 250)">
                    <x-jet-input type="password" class="mt-1 block w-3/4"
                                placeholder="{{ __('Contraseña') }}"
                                x-ref="password"
                                wire:model.defer="password"
                                wire:keydown.enter="deleteUser" />

                    <x-jet-input-error for="password" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
                    {{ __('Cancelar') }}
                </x-jet-secondary-button>

                <x-jet-danger-button class="ml-3" wire:click="deleteUser" wire:loading.attr="disabled">
                    {{ __('Eliminar cuenta') }}
                </x-jet-danger-button>
            </x-slot>
        </x-jet-dialog-modal>
    </x-slot>
</x-jet-action-section>
