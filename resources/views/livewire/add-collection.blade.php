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
                        <div class="form-check">
                            <input wire:model.defer="collection.type" value="Multa"
                                class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                            <label class="form-check-label inline-block text-gray-800" for="flexRadioDefault1">
                                Multa
                            </label>
                        </div>
                        <div class="form-check ml-5">
                            <input wire:model.defer="collection.type" value="Cuota"
                                class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label inline-block text-gray-800" for="flexRadioDefault2">
                                Cuota
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
