<div>
    <x-jet-dialog-modal wire:model="isOpen">
        <x-slot name="title">
            <h3>Añadir nuevo registro</h3>
        </x-slot>
        <x-slot name="content">
            <form>
                <div class="flex justify-between mx-2 mb-6">
                    <div class="mb-2 md:mr-2 md:mb-0 w-full">
                        <x-jet-label value="Asunto" class="font-bold" />
                        <x-jet-input type="text" wire:model.defer="collection.name" class="w-full" />
                        <x-jet-input-error for="collection.name" />
                    </div>
                </div>
                <div class="mb-2 md:mr-2 md:mb-0 w-full">
                    <x-jet-label value="Actividad Relacionada" class="font-bold" />
                    {!! Form::select('activity.name', $activities, null, [
                        'wire:model.defer' => 'collection.activity_id',
                        'placeholder' => 'Seleccione Opción',
                        'class' =>
                            'border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full',
                    ]) !!}
                    <x-jet-input-error for="" />
                </div>
                <div class="flex justify-between mx-2 mb-6">
                    <div class="mb-2 md:mr-2 md:mb-0 w-full">
                        <x-jet-label value="Fecha" class="font-bold" />
                        <x-jet-input type="date" wire:model.defer="collection.date" class="w-full" />
                        <x-jet-input-error for="collection.date" />
                    </div>
                    <div class="mb-2 md:mr-2 md:mb-0 w-full">
                        <x-jet-label value="Monto" class="font-bold" />
                        <x-jet-input type="text" wire:model.defer="collection.amount" class="w-full" />
                        <x-jet-input-error for="collection.amount" />
                    </div>
                </div>

                <div class="mx-2 mb-6">
                    <div class="mb-2 md:mr-2 md:mb-0 w-full flex">
                        <div class="flex items-center mb-4">
                            <input wire:model.defer="collection.type" type="radio" name="countries" value="cuota"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:border-gray-600"
                                checked>
                            <label for="country-option-1" class="block ml-2 text-gray-800">
                                Cuota
                            </label>
                        </div>
                        <div class="flex items-center mb-4 ml-5">
                            <input wire:model.defer="collection.type" type="radio" name="countries" value="multa"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:border-gray-600">
                            <label for="country-option-2" class="block ml-2 text-gray-800">
                                Multa
                            </label>
                        </div>
                    </div>
                    <x-jet-input-error for="collection.type" />
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
