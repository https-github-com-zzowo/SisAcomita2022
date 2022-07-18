<div>
    <x-jet-dialog-modal wire:model="isOpen">
      <x-slot name="title">
        <h3>Nuevo Socio</h3>
      </x-slot>
      <x-slot name="content">
        <div class="flex justify-between mx-2 mb-6">
            <div class="mb-2 md:mr-2 md:mb-0 w-full">
                <x-jet-label value="Nombre socio" class="font-bold"/>
                <x-jet-input type="text" wire:model.defer="partner.name" class="w-full"/>
                <x-jet-input-error for="partner.name"/>
            </div>
            <div class="mb-2 md:mr-2 md:mb-0 w-full">
                <x-jet-label value="Apellido" class="font-bold"/>
                <x-jet-input type="text" wire:model.defer="partner.lastname" class="w-full"/>
                <x-jet-input-error for="partner.lastname"/>
            </div>
        </div>
        <div class="flex justify-between mx-2 mb-6">
            <div class="mb-2 md:mr-2 md:mb-0 w-full">
                <x-jet-label value="dni" class="font-bold"/>
                <x-jet-input type="text" wire:model.defer="partner.dni" class="w-full"/>
                <x-jet-input-error for="partner.dni"/>
            </div>
            <div class="mb-2 md:mr-2 md:mb-0 w-full">
                <x-jet-label value="phone" class="font-bold"/>
                <x-jet-input type="text" wire:model.defer="partner.phone" class="w-full"/>
                <x-jet-input-error for="partner.phone"/>
            </div>
        </div>
        <div class="flex justify-between mx-2 mb-6">
            <div class="mb-2 md:mr-2 md:mb-0 w-full">
              <x-jet-label value="birthdate" class="font-bold"/>
              <x-jet-input type="text" wire:model.defer="partner.birthdate" class="w-full"/>
              <x-jet-input-error for="partner.birthdate"/>
            </div>
            <div class="mb-2 md:mr-2 md:mb-0 w-full">
              <x-jet-label value="email" class="font-bold"/>
              <x-jet-input type="text" wire:model.defer="partner.email" class="w-full"/>
              <x-jet-input-error for="partner.email"/>
            </div>
        </div>
        <div class="flex justify-between mx-2 mb-6">
            <div class="mb-2 md:mr-2 md:mb-0 w-full">
              <x-jet-label value="address" class="font-bold"/>
              <x-jet-input type="text" wire:model.defer="partner.address" class="w-full"/>
              <x-jet-input-error for="partner.address"/>
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
