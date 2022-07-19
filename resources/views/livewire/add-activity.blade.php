<div>
    <x-jet-dialog-modal wire:model="isOpen">
        <x-slot name="title">
            <h3>Añadir nuevo registro</h3>
        </x-slot>
        <x-slot name="content">
            <form>
                <div class="flex justify-between mx-2 mb-6">
                    <div class="mb-2 md:mr-2 md:mb-0 w-full">
                        <x-jet-label value="Nombre Actividad" class="font-bold" />
                        <x-jet-input type="text" wire:model.defer="activity.name" placeholder="Escriba el nombre de la actividad" class="w-full" />
                        <x-jet-input-error for="activity.name" />
                    </div>
                    <div class="mb-2 md:mr-2 md:mb-0 w-full">
                        <x-jet-label value="Descripción" class="font-bold"/>
                        <x-jet-input type="text" wire:model.defer="activity.description" placeholder="Introduzca una breve descripción" class="w-full" />
                        <x-jet-input-error for="activity.description"/>
                    </div>
                </div>

                <div class="flex justify-between mx-2 mb-6">
                    <div class="mb-2 md:mr-2 md:mb-0 w-full">
                        <x-jet-label value="Fecha" class="font-bold" />
                        <x-jet-input type="date" wire:model.defer="activity.datetime" placeholder="Introduzca una breve descripción" class="w-full " />
                        <x-jet-input-error for="activity.datetime" />
                    </div>
                    <div class="mb-2 md:mr-2 md:mb-0 w-full">
                        <x-jet-label value="Es de tipo:" class="font-bold" />
                        <x-jet-input type="text" wire:model.defer="activity.status" placeholder="Normal u Obligatorio" class="w-full " />
                        <x-jet-input-error for="activity.status" />
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
