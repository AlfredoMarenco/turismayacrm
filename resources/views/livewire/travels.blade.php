<div class="h-screen flex flex-1 flex-col md:pl-64">
    <main>

        <div class="py-6">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8">
                <div class="lg:flex lg:items-center lg:justify-between">
                    <div class="md:pl-5 lg:pl-8 min-w-0 flex-1">
                        <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">
                            Panel de Viajes</h2>
                    </div>
                </div>

            </div>
            @if ($table_travels)
                <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8">
                    <div class="py-4">
                        <div class="py-42px-4 sm:px-6 lg:px-8">
                            <p class="font-bold py-2">Buscar Viaje por:</p>
                            <div class="grid grid-cols-4 gap-4">
                                <div>
                                    <label for="budget_id" class="block text-sm font-medium text-gray-700">#
                                        Viaje</label>
                                    <div class="relative mt-1 rounded-md shadow-sm">
                                        <div
                                            class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                            <!-- Heroicon name: mini/envelope -->
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="h-5 w-5 text-gray-400">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5-3.9 19.5m-2.1-19.5-3.9 19.5" />
                                            </svg>
                                        </div>
                                        <input type="number" wire:model="budget_id"
                                            class="block w-full rounded-md border-gray-300 pl-10 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    </div>

                                </div>
                                <div>
                                    <label for="num"
                                        class="block text-sm font-medium text-gray-700">Mostrar</label>
                                    <select wire:model="paginate"
                                        class="mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                    </select>
                                </div>
                                <div>
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
                                <div>
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
                                                                {{ $travel->user->nameComplete() }}
                                                            </td>
                                                            <td
                                                                class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                {{ $travel->name }}
                                                            </td>
                                                            <td
                                                                class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                {{ $dates->parse($travel->start_date)->format('d \d\e M Y') }}
                                                            </td>
                                                            <td
                                                                class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                @switch($travel->status)
                                                                    @case(1)
                                                                        Por liquidar
                                                                        {{ number_format($travel->balanceSplits(), 2) }}
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
                                                                        @if ($travel->balanceSplits() == 0)
                                                                            <a wire:click="selectedBudget({{ $travel }})"
                                                                                class="text-blue-600 hover:text-indigo-900 cursor-pointer">Liquidar</a>
                                                                        @endif
                                                                        <a wire:click="modalCancelBudget({{ $travel }})"
                                                                            class="text-red-600 hover:text-red-900 cursor-pointer">Cancelar</a>
                                                                    @break

                                                                    @case(4)
                                                                        @if ($travel->balanceSplits() == 0)
                                                                            <a wire:click="selectedBudget({{ $travel }})"
                                                                                class="text-blue-600 hover:text-indigo-900 cursor-pointer">Ver</a>
                                                                        @endif
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
                <p class="text-3xl font-semibold mb-2">
                    Numero de servicio #{{ $budget->id }} - {{ $budget->name }}
                </p>
                @if ($budget->enable_tax)
                    <p class="text-lg font-semibold">Presupuestado:
                        ${{ number_format($budget->totalWithOutTax(), 2) }}
                    </p>
                @else
                    <p class="text-lg font-semibold">
                        Presupuestado: ${{ number_format($budget->totalWithTax(), 2) }}
                    </p>
                @endif
                <p class="text-lg font-semibold">
                    Gastos Reales: ${{ number_format($budget->totalSettlement(), 2) }}
                </p>
                <p class="text-lg font-semibold {{ $balance > 0 ? 'text-green-500' : 'text-red-500' }}">
                    Balance: ${{ number_format($balance, 2) }}
                </p>
                <div class="flex justify-end">
                    <x-jet-button wire:click="closeBudget">Finalizar liquidación</x-jet-button>
                </div>
                <div class="mt-10">
                    {{-- Tabla nueva --}}
                    <table class="min-w-full divide-y divide-gray-300">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-500 sm:pl-6">
                                    Concepto</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-500">
                                    Presupuestado</th>
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
                                    <p>
                                        Costo Disel
                                    </p>
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                    ${{ number_format($budget->totalDiselCost(), 2) }}
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                    <x-jet-input type="number" class="w-full" wire:model="disel_cost" />
                                    <p>
                                        @error('disel_cost')
                                            <span class="text-red-500 text-center">{{ $message }}</span>
                                        @enderror
                                    </p>
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                    <x-jet-input type="text" class="w-full" wire:model="description" />
                                </td>
                                <td
                                    class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                    <x-jet-button wire:click="addDiselCost">Agregar</x-jet-button>
                                </td>
                            </tr>
                            <tr>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                    <p>
                                        Sueldos
                                    </p>
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                    ${{ number_format($budget->totalSalary(), 2) }}
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                    <x-jet-input type="number" class="w-full" wire:model="salary" />
                                    <p>
                                        @error('salary')
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
                                </td>
                            </tr>
                            <tr>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                    <p>
                                        Viáticos
                                    </p>
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                    ${{ number_format($budget->totalPerDiem(), 2) }}
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                    <x-jet-input type="number" class="w-full" wire:model="per_diem" />
                                    <p>
                                        @error('per_diem')
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
                                </td>
                            </tr>
                            <tr>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                    <p>
                                        Hotel
                                    </p>
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                    ${{ number_format($budget->totalHotel(), 2) }}
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                    <x-jet-input type="number" class="w-full" wire:model="hotel" />
                                    <p>
                                        @error('hotel')
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
                                </td>
                            </tr>
                            <tr>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                    <p>
                                        Carga Impositiva
                                    </p>
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                    ${{ number_format($budget->totalTaxBurden(), 2) }}
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                    <x-jet-input type="number" class="w-full" wire:model="tax_burden" />
                                    <p>
                                        @error('tax_burden')
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
                                </td>
                            </tr>
                            <tr>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                    <p>
                                        Derecho de Piso
                                    </p>
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                    ${{ number_format($budget->totalFlorRigth(), 2) }}
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                    <x-jet-input type="number" class="w-full" wire:model="flor_rigth" />
                                    <p>
                                        @error('flor_rigth')
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
                                </td>
                            </tr>
                            <tr>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                    <p>
                                        Casetas
                                    </p>
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                    ${{ number_format($budget->totalBooths(), 2) }}
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                    <x-jet-input type="number" class="w-full" wire:model="booths" />
                                    <p>
                                        @error('booths')
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
                                </td>
                            </tr>
                            <tr>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                    <p>
                                        Mantenimientos
                                    </p>
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                    ${{ number_format($budget->totalMaintenance(), 2) }}
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                    <x-jet-input type="number" class="w-full" wire:model="maintenance" />
                                    <p>
                                        @error('maintenance')
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
                                </td>
                            </tr>
                            <tr>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                    <p>
                                        Hotel
                                    </p>
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                    ${{ number_format($budget->totalAmenities(), 2) }}
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                    <x-jet-input type="number" class="w-full" wire:model="amenities" />
                                    <p>
                                        @error('amenities')
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
                                </td>
                            </tr>
                            <tr>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                    <p>
                                        Subarrendos
                                    </p>
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                    ${{ number_format($budget->totalSublet(), 2) }}
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                    <x-jet-input type="number" class="w-full" wire:model="sublet" />
                                    <p>
                                        @error('sublet')
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
                <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity">
                    </div>
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
                                            {{ number_format($refund, 2) }}
                                        </div>
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
