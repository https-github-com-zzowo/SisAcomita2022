<div>
    <x-jet-dialog-modal wire:model="isOpen">
      <x-slot name="title">
        <h3>Nuevo Pariente</h3>
      </x-slot>
      <x-slot name="content">
        <div class="flex justify-between mx-2 mb-6">
            <div class="mb-2 md:mr-2 md:mb-0 w-full">
                <x-jet-label value="code" class="font-bold"/>
                <x-jet-input type="text" wire:model.defer="empadronamiento.code" class="w-full"/>
                <x-jet-input-error for="empadronamiento.code"/>
            </div>

            <div class="mb-2 md:mr-2 md:mb-0 w-full">
                <x-jet-label value="Socio" class="font-bold"/>
                {!! Form::select('partner_id',$partners,null,["wire:model.defer"=>"empadronamiento.partner_id",'placeholder'=>'Seleccione Opción','class'=>'border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full']) !!}
                <x-jet-input-error for="empadronamiento.partner_id"/>
              </div>

        </div>
        <div class="flex justify-between mx-2 mb-6">
            <div class="mb-2 md:mr-2 md:mb-0 w-full">
                <x-jet-label value="Stand" class="font-bold"/>
                {!! Form::select('stand_id',$stands,null,["wire:model.defer"=>"empadronamiento.stand_id",'placeholder'=>'Seleccione Opción','class'=>'border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full']) !!}
                <x-jet-input-error for="empadronamiento.stand_id"/>
              </div>
            <div class="mb-2 md:mr-2 md:mb-0 w-full">
                <x-jet-label value="Periodo" class="font-bold"/>
                {!! Form::select('period_id',$periods,null,["wire:model.defer"=>"empadronamiento.period_id",'placeholder'=>'Seleccione Opción','class'=>'border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full']) !!}
                <x-jet-input-error for="empadronamiento.period_id"/>
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
