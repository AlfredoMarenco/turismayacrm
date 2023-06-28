<div class="h-screen flex flex-1 flex-col md:pl-64">
    <main>

        <div class="py-6">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8">
                <div class="lg:flex lg:items-center lg:justify-between">
                    <div class="md:pl-5 lg:pl-8 min-w-0 flex-1">
                        <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">
                            Panel de Viajes</h2>
                        <div class="mt-1 flex flex-col sm:mt-0 sm:flex-row sm:flex-wrap sm:space-x-6">

                            <div class="mt-2 flex items-center text-sm text-gray-500">
                                <!-- Heroicon name: mini/calendar -->
                                <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"
                                        clip-rule="evenodd" />
                                </svg>
                                Fecha de hoy:<span class="pl-1"> 15 de Septiembre del 2022</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            @if ($table_travels)
                <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8">
                    <!-- Replace with your content -->
                    <div class="py-4">
                        <div class="py-42px-4 sm:px-6 lg:px-8">
                            <p class="font-bold py-2">Buscar Viaje por:</p>
                            <div class="grid grid-cols-10 gap-4">
                                <div class="col-span-2">
                                    <label for="num"
                                        class="block text-sm font-medium text-gray-700">Mostrar</label>
                                    <select wire:model="paginate"
                                        class="mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                    </select>
                                </div>
                                <div class="col-span-4">
                                    <label for="email" class="block text-sm font-medium text-gray-700">Nombre</label>
                                    <div class="relative mt-1 rounded-md shadow-sm">
                                        <div
                                            class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                            <!-- Heroicon name: mini/envelope -->
                                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M7 8a3 3 0 100-6 3 3 0 000 6zM14.5 9a2.5 2.5 0 100-5 2.5 2.5 0 000 5zM1.615 16.428a1.224 1.224 0 01-.569-1.175 6.002 6.002 0 0111.908 0c.058.467-.172.92-.57 1.174A9.953 9.953 0 017 18a9.953 9.953 0 01-5.385-1.572zM14.5 16h-.106c.07-.297.088-.611.048-.933a7.47 7.47 0 00-1.588-3.755 4.502 4.502 0 015.874 2.636.818.818 0 01-.36.98A7.465 7.465 0 0114.5 16z" />
                                            </svg>
                                        </div>
                                        <input type="text" wire:model="name_search"
                                            class="block w-full rounded-md border-gray-300 pl-10 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="Jane Cooper">
                                    </div>

                                </div>

                                <div class="col-span-4">
                                    <label for="tel"
                                        class="block text-sm font-medium text-gray-700">Estatus</label>
                                    <div class="col-span-2">
                                        <select wire:model="status_search"
                                            class="mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                            <option value="" selected>Todos</option>
                                            <option value="1">Por liquidar</option>
                                            <option value="4">Liquidado</option>
                                            <option value="5">Cancelado</option>
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div class="mt-8 flex flex-col">
                                <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                        <div
                                            class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                                            <table class="min-w-full divide-y divide-gray-300">
                                                <thead class="bg-gray-50">
                                                    <tr>
                                                        <th scope="col"
                                                            class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-500 sm:pl-6">
                                                            NOMBRE</th>
                                                        <th scope="col"
                                                            class="px-3 py-3.5 text-left text-sm font-semibold text-gray-500">
                                                            VIAJE</th>
                                                        <th scope="col"
                                                            class="px-3 py-3.5 text-left text-sm font-semibold text-gray-500">
                                                            FECHA</th>
                                                        <th scope="col"
                                                            class="px-3 py-3.5 text-left text-sm font-semibold text-gray-500">
                                                            ESTATUS</th>
                                                        <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                                            <span class="sr-only">Ver más</span>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="divide-y divide-gray-200 bg-white">
                                                    @foreach ($travels as $travel)
                                                        <tr>
                                                            <td
                                                                class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                                {{ $travel->user->nameComplete() }}</td>
                                                            <td
                                                                class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                {{ $travel->name }}</td>
                                                            <td
                                                                class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                {{ $dates->parse($travel->start_date)->format('d \d\e M Y') }}
                                                            </td>
                                                            <td
                                                                class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                @switch($travel->status)
                                                                    @case(1)
                                                                        Por liquidar
                                                                    @break

                                                                    @case(5)
                                                                        Cancelado
                                                                    @break

                                                                    @case(4)
                                                                        Liquidado
                                                                    @break
                                                                @endswitch
                                                            </td>
                                                            <td
                                                                class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                                                @switch($travel->status)
                                                                    @case(1)
                                                                        <a wire:click="selectedBudget({{ $travel }})"
                                                                            class="text-blue-600 hover:text-indigo-900 cursor-pointer">Liquidar</a>
                                                                        <a wire:click="modalCancelBudget({{ $travel }})"
                                                                            class="text-red-600 hover:text-red-900 cursor-pointer">Cancelar</a>
                                                                    @break
                                                                @endswitch
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            <div class=p-2>
                                                {{ $travels->links() }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /End replace -->
                </div>
            @endif
        </div>
        @if ($modal_liquidate_travel)
            <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8">
                <p class="text-3xl font-semibold mb-2">Numero de servicio #{{ $budget->id }} - {{ $budget->name }}</p>
                @if ($budget->enable_tax)
                    <p class="text-lg font-semibold">Presupuestado: ${{ number_format($budget->totalWithOutTax(), 2) }}
                    </p>
                @else
                    <p class="text-lg font-semibold">Presupuestado: ${{ number_format($budget->totalWithTax(), 2) }}</p>
                @endif
                <p class="text-lg font-semibold">Gastos Reales: ${{ number_format($budget->totalSettlement(), 2) }}</p>
                <p class="text-lg font-semibold {{ $balance > 0 ? 'text-green-500' : 'text-red-500' }}">Balance:
                    ${{ number_format($balance, 2) }}</p>
                <div class="flex justify-end">
                    <x-jet-button wire:click="closeBudget">Finalizar liquidación</x-jet-button>
                </div>
                <div class="mt-10">
                    <table class="min-w-full divide-y divide-gray-300">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-500 sm:pl-6">
                                    Concepto</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-500">
                                    Cantidad</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-500">
                                    Descripcion</th>
                                <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                    <span class="sr-only">Accion</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                            <tr>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                    <select wire:model="type"
                                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        <option value="" disabled>-Selecciona una opcion-</option>
                                        <option value="1">Salario</option>
                                        <option value="2">Viaticos</option>
                                        <option value="3">Casetas y/o Puentes</option>
                                        <option value="4">Hospedaje</option>
                                        <option value="5">Limpieza</option>
                                        <option value="6">Combustibles</option>
                                        <option value="7">Taller</option>
                                        <option value="8">Gastos extras</option>
                                    </select>
                                    <p>
                                        @error('type')
                                            <span class="text-red-500 text-center">{{ $message }}</span>
                                        @enderror
                                    </p>
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                    <x-jet-input type="number" class="w-full" wire:model="value" />
                                    <p>
                                        @error('value')
                                            <span class="text-red-500 text-center">{{ $message }}</span>
                                        @enderror
                                    </p>
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                    <x-jet-input type="text" class="w-full" wire:model="description" />
                                </td>
                                <td
                                    class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                    <x-jet-button wire:click="addSettlement">Agregar</x-jet-button>
                                    {{-- <a wire:click=""
                                                    class="text-blue-600 hover:text-indigo-900 cursor-pointer">Editar</a>
                                                <a wire:click=""
                                                    class="text-red-600 hover:text-red-900 cursor-pointer">Eliminar</a> --}}
                                </td>
                            </tr>
                            @foreach ($budget->settlements as $settlement)
                                <tr>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                        @switch($settlement->type)
                                            @case(1)
                                                <p class="font-semibold">Salario</p>
                                            @break

                                            @case(2)
                                                <p class="font-semibold">Viaticos</p>
                                            @break

                                            @case(3)
                                                <p class="font-semibold">Casetas y/o Puentes</p>
                                            @break

                                            @case(4)
                                                <p class="font-semibold">Hospedaje</p>
                                            @break

                                            @case(5)
                                                <p class="font-semibold">Limpieza</p>
                                            @break

                                            @case(6)
                                                <p class="font-semibold">Combustibles</p>
                                            @break

                                            @case(7)
                                                <p class="font-semibold">Taller</p>
                                            @break

                                            @case(8)
                                                <p class="font-semibold">Gastos extras</p>
                                            @break
                                        @endswitch
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                        ${{ number_format($settlement->value, 2) }}
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                        {{ $settlement->description }}
                                    </td>
                                    <td
                                        class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                        <a wire:click="editSettlement({{ $settlement }})"
                                            class="text-blue-600 hover:text-indigo-900 cursor-pointer">Editar</a>
                                        <a wire:click="modalDeleteSettlement({{ $settlement }})"
                                            class="text-red-600 hover:text-red-900 cursor-pointer">Eliminar</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <x-jet-dialog-modal wire:model="modal_edit_settlement">
                <x-slot name="title">
                    Editar concepto
                </x-slot>
                <x-slot name="content">
                    <div class="mb-2">
                        <x-jet-label value="Tipo de concepto" />
                        <select wire:model="editFormSettlement.type"
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option value="" disabled>-Selecciona una opcion-</option>
                            <option value="1">Salario</option>
                            <option value="2">Viaticos</option>
                            <option value="3">Casetas y/o Puentes</option>
                            <option value="4">Hospedaje</option>
                            <option value="5">Limpieza</option>
                            <option value="6">Combustibles</option>
                            <option value="7">Taller</option>
                            <option value="8">Gastos extras</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <x-jet-label value="Valor" />
                        <x-jet-input wire:model="editFormSettlement.value" type="number" class="w-full" />
                    </div>
                    <div class="mb-2">
                        <x-jet-label value="Descripcion" />
                        <x-jet-input wire:model="editFormSettlement.description" type="text" class="w-full" />
                    </div>
                </x-slot>
                <x-slot name="footer">
                    <div class="">
                        <x-jet-danger-button class="mx-2" wire:click="$set('modal_edit_settlement',false)">Cancelar
                        </x-jet-danger-button>
                        <x-jet-button wire:click="updateSettlement()">Actualizar</x-jet-button>
                    </div>
                </x-slot>
            </x-jet-dialog-modal>
            <x-jet-confirmation-modal wire:model="modal_delete_settlement">
                <x-slot name="title">¿Desear eliminar el concepto?</x-slot>
                <x-slot name="content">Este concepto será eliminado de forma permamente del sistema.
                    ¿deseas continuar eliminando?</x-slot>
                <x-slot name="footer">
                    <x-jet-danger-button class="mx-2" wire:click="$set('modal_delete_settlement',false)">Cancelar
                    </x-jet-danger-button>
                    <x-jet-button wire:click="deleteSettlement">Si, eliminar</x-jet-button>
                </x-slot>
            </x-jet-confirmation-modal>
        @endif

        @if ($modal_cancel_travel)
            <div>

                {{--
                <div class=" relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">

                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

                    <div class="fixed inset-0 z-10 overflow-y-auto">
                        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">

                            <div
                                class="relative transform overflow-hidden rounded-lg bg-white px-4 pt-5 pb-4 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg sm:p-6">
                                <div class="sm:flex sm:items-start">
                                    <div
                                        class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                        <!-- Heroicon name: outline/exclamation-triangle -->
                                        <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                            stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 10.5v3.75m-9.303 3.376C1.83 19.126 2.914 21 4.645 21h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 4.88c-.866-1.501-3.032-1.501-3.898 0L2.697 17.626zM12 17.25h.007v.008H12v-.008z" />
                                        </svg>
                                    </div>
                                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                        <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-title">
                                            ¿Estás seguro de
                                            que deseas cancelar el viaje?</h3>
                                        <div class="mt-2">
                                            <p class="text-sm text-gray-500">Esta acción no se puede revertir, al
                                                cancelar deberás
                                                colocar el motivo de la cancelación.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">
                                    <button type="button"
                                        class="inline-flex w-full justify-center rounded-md border border-transparent bg-red-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 sm:ml-3 sm:w-auto sm:text-sm">Cancelar
                                        viaje</button>
                                    <button type="button"
                                        class="mt-3 inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-base font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:mt-0 sm:w-auto sm:text-sm">No
                                        cancelar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            --}}
                <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">

                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

                    <div class="fixed inset-0 z-10 overflow-y-auto">
                        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                            <div
                                class="relative transform overflow-hidden rounded-lg bg-white px-4 pt-5 pb-4 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg sm:p-6">
                                <div>
                                    <div class="mt-1 text-center sm:mt-5">
                                        <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-title">¿Cuál
                                            es el motivo
                                            de la cancelación?</h3>
                                        <div class="mt-4">
                                            <textarea rows="4" wire:model="message"
                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                placeholder="Escribe un mensaje"></textarea>
                                        </div>
                                        @error('message')
                                            <span class="text-red-500 text-center">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <div class="flex justify-between">
                                        <label for="number" class="block text-sm font-medium text-gray-700">Escribe
                                            el
                                            porcentaje
                                            de devolución</label>
                                    </div>
                                    <div class="mt-1 ">
                                        <input type="number" wire:model="percentage_refund"
                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="Ejemplo: 40" aria-describedby="email-optional">
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <label for="price" class="block text-sm font-medium text-gray-700">Monto
                                        pagado</label>
                                    <div class="relative mt-1 rounded-md shadow-sm">
                                        <div
                                            class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                            <span class="text-gray-500 sm:text-sm">$</span>
                                        </div>
                                        <div type="text"
                                            class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                            {{ number_format($total_paid, 2) }}
                                        </div>
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                            <span class="text-gray-500 sm:text-sm" id="price-currency">MXN</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <label for="price"
                                        class="block text-sm font-medium text-gray-700">Devolución</label>
                                    <div class="relative mt-1 rounded-md shadow-sm">
                                        <div
                                            class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                            <span class="text-gray-500 sm:text-sm">$</span>
                                        </div>
                                        <div type="text"
                                            class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                            {{ number_format($refund, 2) }}</div>
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                            <span class="text-gray-500 sm:text-sm" id="price-currency">MXN</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-5 sm:mt-6">
                                    <button type="button" wire:click="cancelBudget"
                                        class="inline-flex w-full justify-center rounded-md border border-transparent bg-blue-900 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:text-sm">
                                        Finalizar
                                    </button>
                                    <button type="button" wire:click="$set('modal_cancel_travel',false)"
                                        class="mt-2 inline-flex w-full justify-center rounded-md border border-transparent bg-red-500 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:text-sm">
                                        Cancelar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="hidden">
                    @livewire('graciasliquidacion', key('graciasliquidacion'))
                </div>

            </div>
        @endif
    </main>

</div>
