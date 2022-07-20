<div>

    <x-jet-dialog-modal wire:model="isOpen">
      <x-slot name="title">
        <h3>Registro Asistencia</h3>
      </x-slot>
      <x-slot name="content">
        <div class="flex justify-between mx-2 mb-6">
            <div class="mb-2 md:mr-2 md:mb-0 w-full flex">
                <div class="flex items-center mb-4">
                    <input wire:model.defer="assistence.status" type="radio" name="countries" value="Asistio"
                        class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:border-gray-600"
                        checked>
                    <label for="country-option-1" class="block ml-2 text-gray-800">
                        Asistio
                    </label>
                </div>
                <div class="flex items-center mb-4 ml-5">
                    <input wire:model.defer="assistence.status" type="radio" name="countries" value="Falta"
                        class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:border-gray-600">
                    <label for="country-option-2" class="block ml-2 text-gray-800">
                        Tarde
                    </label>
                </div>
                <div class="flex items-center mb-4 ml-5">
                    <input wire:model.defer="assistence.status" type="radio" name="countries" value="Falta"
                        class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:border-gray-600">
                    <label for="country-option-2" class="block ml-2 text-gray-800">
                        Falta
                    </label>
                </div>
            </div>
            <x-jet-input-error for="collection.type" />

            <div class="mb-2 md:mr-2 md:mb-0 w-full">
                <x-jet-label value="Actividad" class="font-bold"/>
                {!! Form::select('activity_id',$activities,null,["wire:model.defer"=>"assistence.activity_id",'placeholder'=>'Seleccione Opción','class'=>'border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full']) !!}
                <x-jet-input-error for="assistence.activity_id"/>
              </div>

        </div>
        <div class="flex justify-between mx-2 mb-6">
            <div class="mb-2 md:mr-2 md:mb-0 w-full">
                <x-jet-label value="Socio" class="font-bold"/>
                {!! Form::select('partner_id',$partners,null,["wire:model.defer"=>"assistence.partner_id",'placeholder'=>'Seleccione Opción','class'=>'border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full']) !!}
                <x-jet-input-error for="assistence.partner_id"/>
              </div>

        </div>
      </x-slot>
      <x-slot name="footer">
        <x-jet-secondary-button wire:click="$set('isOpen',false)" class="mx-2">Cancelar</x-jet-secondary-button>
        <!-- <x-jet-button wire:click="store" wire:loading.remove wire:target="store">Registrar</x-jet-button> -->
        <x-jet-button wire:click.prevent="store()" wire:loading.attr="disabled" wire:target="store" class="disabled:opacity-25">
          Registrar
        </x-jet-button>
        <!-- <span wire:loading wire:target="store">Cargando...</span> -->
      </x-slot>

    </x-jet-dialog-modal>
    @push('js')

    @endpush
</div>
