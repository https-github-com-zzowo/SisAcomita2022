<div class="flex justify-between mx-2 mb-6">
    <div class="mt-4 mb-0 md:mr-2 md:mb-0 w-full">
        <x-jet-label value="Se le debe de pagar la cantidad de:" class="font-bold" />
        @foreach ($procedure as $item)
            <tr class="text-sm font-medium text-gray-900">
                <td class="px-6 py-4" align="center">{{\App\Models\partner::find($item->partner_id=1)->name}}</td>
                <td class="px-6 py-4" align="center">
                    <span
                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full dark:bg-gray-700 text-white">
                        {{ $item->total }}
                    </span>
                </td>

            </tr>
        @endforeach
    </div>
</div>
