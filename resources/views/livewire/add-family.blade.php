<div>
    <x-jet-dialog-modal wire:model="isOpen">
      <x-slot name="title">
        <h3>Nuevo Pariente</h3>
      </x-slot>
      <x-slot name="content">
        <div class="flex justify-between mx-2 mb-6">
            <div class="mb-2 md:mr-2 md:mb-0 w-full">
                <x-jet-label value="Socio" class="font-bold"/>
                {!! Form::select('partner_id',$partners,null,["wire:model.defer"=>"family.partner_id",'placeholder'=>'Seleccione Opción','class'=>'border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full']) !!}
                <x-jet-input-error for="family.partner_id"/>
              </div>
            <div class="mb-2 md:mr-2 md:mb-0 w-full">
                <x-jet-label value="parentesco" class="font-bold"/>
                <x-jet-input type="text" wire:model.defer="family.parentesco" class="w-full"/>
                <x-jet-input-error for="family.parentesco"/>
            </div>

        </div>
        <div class="flex justify-between mx-2 mb-6">
            <div class="mb-2 md:mr-2 md:mb-0 w-full">
                <x-jet-label value="nombre completo" class="font-bold"/>
                <x-jet-input type="text" wire:model.defer="family.fullname" class="w-full"/>
                <x-jet-input-error for="family.fullname"/>
            </div>
            <div class="mb-2 md:mr-2 md:mb-0 w-full">
                <x-jet-label value="dni" class="font-bold"/>
                <x-jet-input type="text" wire:model.defer="family.dni" class="w-full"/>
                <x-jet-input-error for="family.dni"/>
            </div>
        </div>
        <div class="flex justify-between mx-2 mb-6">
            <div class="mb-2 md:mr-2 md:mb-0 w-full">
              <x-jet-label value="age" class="font-bold"/>
              <x-jet-input type="text" wire:model.defer="family.age" class="w-full"/>
              <x-jet-input-error for="family.age"/>
            </div>
            <div class="mb-2 md:mr-2 md:mb-0 w-full">
                <x-jet-label value="celphone" class="font-bold"/>
                <x-jet-input type="text" wire:model.defer="family.celphone" class="w-full"/>
                <x-jet-input-error for="family.celphone"/>
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
