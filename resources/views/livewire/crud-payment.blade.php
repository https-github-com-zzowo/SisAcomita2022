
<div class="py-0 overflow-x-auto">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pb-2">
        <div class=" dark:bg-gray-700  overflow-hidden shadow-xl sm:rounded-lg px-3 py-3 mb-0">
            <h1 class="mt-2 text-center text-2xl font-bold text-white">¡Pagos!</h1>
        </div>
    </div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            <div class="flex items-center justify-between">
                <!--Input de busqueda   -->
                <div class="flex items-center p-2 rounded-md flex-1">
                    <label class="w-full relative text-gray-400 focus-within:text-gray-600 block">
                        <svg class="pointer-events-none w-8 h-8 absolute top-1/2 transform -translate-y-1/2 left-3"
                            viewBox="0 0 25 25" fill="none" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6">
                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" ></path>
                        </svg>
                        <x-jet-input type="text" wire:model="search"
                            class="block pl-14 w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Buscar..." />
                    </label>
                </div>
                <!--Boton nuevo   -->
                <div class="lg:ml-40 ml-10 space-x-8">
                    <button wire:click="create()"
                        class="dark:bg-gray-700 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer">
                        <i class="fa fa-calendar" aria-hidden="true"></i> Agregar
                    </button>
                    @if ($isOpen)
                        @include('livewire.add-period')
                    @endif
                </div>
            </div>
            <!--Tabla lista de items   -->
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="w-full divide-y divide-gray-200 table-auto text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr class="text-left text-xs font-bold  uppercase">
                            <td scope="col" class="px-6 py-3" align="center">ID</td>
                            <td scope="col" class="px-6 py-3" align="center">Socio</td>
                            <td scope="col" class="px-6 py-3" align="center">Fecha</td>
                            <td scope="col" class="px-6 py-3" align="center">Importe</td>
                            <td scope="col" class="px-6 py-3" align="center">Observaciones</td>
                            <td scope="col" class="px-6 py-3" align="center">Opciones</td>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach ($payments as $item)
                            <tr class="text-sm font-medium text-gray-900">
                                <td class="px-6 py-4" align="center">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full dark:bg-gray-700 text-white">
                                        {{ $item->id }}
                                    </span>
                                </td>
                                <td class="px-6 py-4" align="center">{{\App\Models\partner::find($item->partner_id)->name}}</td>
                                <td class="px-6 py-4" align="center">{{ $item->date }}</td>
                                <td class="px-6 py-4" align="center">{{ $item->import }}</td>
                                <td class="px-6 py-4" align="center">{{ $item->observations}}</td>
                                <td class="px-6 py-4" align="center">
                                    {{-- @livewire('cliente-edit',['cliente'=>$item],key($item->id)) --}}
                                    <x-jet-button wire:click="edit({{ $item }})">
                                        <!-- Usamos metodos magicos -->
                                        <i class="fas fa-edit"></i>
                                    </x-jet-button>
                                    <x-jet-danger-button wire:click="$emit('deleteItem',{{ $item->id }})">
                                        <!-- Usamos metodos magicos -->
                                        <i class="fas fa-trash"></i>
                                    </x-jet-danger-button>
                                </td>
                            </tr>
                        @endforeach
                        <!-- More people... -->
                    </tbody>
                </table>

            </div>
            <div class="space-x-8 mt-4">
                <button wire:click="proccollec()"
                    class="dark:bg-gray-700 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer">
                    <i class="fa fa-calendar" aria-hidden="true"></i> Ver Pago del usuario 1
                </button>
                @if ($isOpen1)
                    @include('livewire.proc-collec')
                @endif
            </div>
            @if (!$payments->count())
                <label class="py-3"> No existe ningun registro conincidente </label>
            @endif
            @if ($payments->hasPages())
                <div class="px-6 py-3">
                    {{ $payments->links() }}
                </div>
            @endif

        </div>
    </div>

    <!--Scripts - Sweetalert   -->
    @push('js')
        <script>
            Livewire.on('deleteItem', id => {
                Swal.fire({
                    title: '¿Está Seguro?',
                    text: "No podrá revertir este proceso!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    cancelButtonText: 'Cancelar',
                    confirmButtonText: 'Si, borrar!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        //alert("del");
                        Livewire.emitTo('crud-payment', 'delete', id);
                        Swal.fire(
                            'Borrado!',
                            'Registro borrado satisfatoriamente.',
                            'success'
                        )

                    }
                })
            });
        </script>
    @endpush
  </div>
