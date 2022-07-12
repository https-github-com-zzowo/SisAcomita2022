<div>
    <x-jet-dialog-modal wire:model="isOpen">
        <x-slot name="title">
            <h3>Añadir nuevo Periodo</h3>
        </x-slot>
        <x-slot name="content">
            <form>
                <div class="flex justify-between mx-2 mb-6">
                    <div class="mb-2 md:mr-2 md:mb-0 w-full">
                        <x-jet-label value="Nombre" class="font-bold" />
                        <x-jet-input type="text" wire:model.defer="period.name" class="w-full" />
                        <x-jet-input-error for="period.name" />
                    </div>
                </div>
                <div class="flex justify-between mx-2 mb-6">
                    <div class="mb-2 md:mr-2 md:mb-0 w-full">
                        <x-jet-label value="Fecha de Inicio" class="font-bold" />
                        <x-jet-input type="date" wire:model.defer="period.dateinit" class="w-full" />
                        <x-jet-input-error for="period.dateinit" />
                    </div>
                    <div class="mb-2 md:mr-2 md:mb-0 w-full">
                        <x-jet-label value="Fecha a Finalizar" class="font-bold" />
                        <x-jet-input type="date" wire:model.defer="period.dateout" class="w-full" />
                        <x-jet-input-error for="period.dateout" />
                    </div>
                </div>
            </form>
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('isOpen',false)" class="mx-2">Cancelar</x-jet-secondary-button>
            <!-- <x-jet-button wire:click="store" wire:loading.remove wire:target="store">Registrar</x-jet-button> -->
            <x-jet-button wire:click.prevent="store()" wire:loading.attr="disabled" wire:target="store"
                class="disabled:opacity-25">
                Registrar
            </x-jet-button>
            <!-- <span wire:loading wire:target="store">Cargando...</span> -->
        </x-slot>

    </x-jet-dialog-modal>
    @push('js')
    @endpush

</div>
