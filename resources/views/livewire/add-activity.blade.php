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

                    <div class="mb-2 md:mr-2 md:mb-0 w-full ">
                        <x-jet-label value="Es de tipo:" class="font-bold" />
                        <div class="flex items-center mb-4">
                            <input wire:model.defer="activity.status" type="radio" name="countries" value="Normal"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:border-gray-600"
                                checked>
                            <label for="country-option-1" class="block ml-2 text-gray-800">
                                Normal
                            </label>
                            <input wire:model.defer="activity.status" type="radio" name="countries" value="Obligatorio"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:border-gray-600">
                            <label for="country-option-2" class="block ml-2 text-gray-800">
                                Obligatorio
                            </label>
                        </div>
                        <div class=" items-center mb-4 ml-5">

                        </div>
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
