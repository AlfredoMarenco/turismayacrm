<div class="h-screen flex flex-1 flex-col md:pl-64">
    <main>
        @if ($table_travels)
            <div class="py-6">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8">
                    <div class="lg:flex lg:items-center lg:justify-between">
                        <div class="md:pl-5 lg:pl-8 min-w-0 flex-1">
                            <h2
                                class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">
                                Panel de Viajes</h2>
                            <div class="mt-1 flex flex-col sm:mt-0 sm:flex-row sm:flex-wrap sm:space-x-6">

                                <div class="mt-2 flex items-center text-sm text-gray-500">
                                    <!-- Heroicon name: mini/calendar -->
                                    <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
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
                <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8">
                    <!-- Replace with your content -->
                    <div class="py-4">
                        <div class="py-42px-4 sm:px-6 lg:px-8">
                            <p class="font-bold py-2">Buscar Viaje por:</p>
                            <div class="grid grid-cols-10 gap-4">
                                <div class="col-span-2">
                                    <label for="num"
                                        class="block text-sm font-medium text-gray-700">Mostrar</label>
                                    <select id="num" name="num"
                                        class="mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                        <option selected>10</option>
                                        <option>20</option>
                                        <option>30</option>
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
                                        <input type="text" name="text" id="name"
                                            class="block w-full rounded-md border-gray-300 pl-10 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="Jane Cooper">
                                    </div>

                                </div>

                                <div class="col-span-4">
                                    <label for="tel"
                                        class="block text-sm font-medium text-gray-700">Estatus</label>
                                    <div class="col-span-2">
                                        <select id="num" name="num"
                                            class="mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                            <option selected>Viaje iniciado</option>
                                            <option>Viaje apartado</option>
                                            <option>Viaje cancelado</option>
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

                                                                    @case(2)
                                                                        Cancelado
                                                                    @break
                                                                    @case(4)
                                                                        Liquidado
                                                                    @break

                                                                    @default
                                                                @endswitch
                                                            </td>
                                                            <td
                                                                class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                                                @switch($travel->status)
                                                                    @case(1)
                                                                        <a wire:click="selectedBudget({{ $travel }})"
                                                                            class="text-blue-600 hover:text-indigo-900 cursor-pointer">Liquidar</a>
                                                                        <a wire:click="deleteBudget({{ $travel }})"
                                                                            class="text-red-600 hover:text-red-900 cursor-pointer">Cancelar</a>
                                                                    @break
                                                                @endswitch
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    {{-- <tr>
                                                    <td
                                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                        Jane Cooper</td>
                                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                        Mérida - Cancún</td>
                                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                        14 de Septiembre 2022</td>
                                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                        Viaje iniciado</td>
                                                    <td
                                                        class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                                        <a href="#"
                                                            class="text-blue-900 hover:text-indigo-900">Cancelar<span
                                                                class="sr-only">, Lindsay Walton</span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                        Jane Cooper</td>
                                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                        Mérida - Cancún</td>
                                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                        14 de Septiembre 2022</td>
                                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                        Viaje iniciado</td>
                                                    <td
                                                        class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                                        <a href="#"
                                                            class="text-blue-900 hover:text-indigo-900">Liquidar<span
                                                                class="sr-only">, Lindsay Walton</span></a>
                                                    </td>
                                                </tr> --}}
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /End replace -->
                </div>
            </div>

        @endif
        @if ($modal_liquidate_travel)
            {{-- <div>
                <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
                    <div class="fixed inset-0 z-10 overflow-y-auto">
                        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                            <div
                                class="relative transform overflow-hidden rounded-lg bg-white px-4 pt-5 pb-4 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg sm:p-6">
                                <div>
                                    <div class="mt-3 text-center sm:mt-5">
                                        <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-title">¿Seguro
                                            que quieres
                                            liquidar el viaje?</h3>
                                        <div class="mt-2">
                                            <p class="text-sm text-gray-500">Lorem ipsum, dolor sit amet consectetur
                                                adipisicing
                                                elit. Eius aliquam laudantium explicabo pariatur iste dolorem animi
                                                vitae error
                                                totam. At sapiente aliquam accusamus facere veritatis.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-5 sm:mt-6 sm:grid sm:grid-flow-row-dense sm:grid-cols-2 sm:gap-3">
                                    <button type="button"
                                        class="inline-flex w-full justify-center rounded-md border border-transparent bg-blue-900 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:col-start-2 sm:text-sm">Liquidar</button>
                                    <button type="button"
                                        class="mt-3 inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-base font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:col-start-1 sm:mt-0 sm:text-sm">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8">
                    <div class="py-42 px-4 sm:px-6 lg:px-8">
                        <div class="pt-6">
                            <div class="pb-4 min-w-0 flex-1">
                                <h2
                                    class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">
                                    Liquidación de viaje
                                </h2>
                                <div class="mt-1 flex flex-col sm:mt-0 sm:flex-row sm:flex-wrap sm:space-x-6">

                                    <div class="mt-2 flex items-center text-sm text-gray-500">
                                        <!-- Heroicon name: mini/calendar -->
                                        <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        Fecha de hoy:<span class="pl-1"> 15 de Septiembre del 2022</span>
                                    </div>
                                </div>
                                <span
                                    class="mt-2 inline-flex items-center rounded-md bg-lime-350 px-2.5 py-0.5 text-sm text-white font-bold">
                                    <svg class="-ml-0.5 mr-1.5 h-2 w-2 text-white" fill="currentColor"
                                        viewBox="0 0 8 8">
                                        <circle cx="4" cy="4" r="3" />
                                    </svg>
                                    {{ $budget->id }}
                                </span>
                            </div>

                            <div class="grid grid-cols-10 gap-4 mt-5 pt-3 pb-3">
                                {{-- Formulario Bus Presupuestado --}}
                                <div class="col-span-10 md:col-span-10 lg:col-span-5">
                                    <h5
                                        class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight pb-3">
                                        AUTOBUSES PRESUPUESTADOS</h4>
                                        <form>
                                            <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-3">

                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <div class="flex justify-between">
                                                            <label for="email"
                                                                class="block text-sm font-medium text-gray-700">CANTIDAD</label>
                                                        </div>
                                                        <div class="mt-1">
                                                            <input disabled type="number" wire:model='qty_bus'
                                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="1" aria-describedby="1">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <div class="flex justify-between">
                                                            <label for="email"
                                                                class="block text-sm font-medium text-gray-700">KILOMETROS</label>
                                                        </div>
                                                        <div class="mt-1">
                                                            <input disabled type="number" wire:model='km_bus'
                                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="1" aria-describedby="1">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <div class="flex justify-between">
                                                            <label for="email"
                                                                class="block text-sm font-medium text-gray-700">PASAJEROS</label>
                                                        </div>
                                                        <div class="mt-1">
                                                            <input disabled type="number" wire:model='passangers_bus'
                                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="1" aria-describedby="1">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-5">
                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <div class="flex justify-between">
                                                            <label for="email"
                                                                class="block text-sm font-medium text-gray-700 uppercase ">vueltas</label>
                                                        </div>
                                                        <div class="mt-1">
                                                            <input disabled type="number" wire:model='laps_bus'
                                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="1" aria-describedby="1">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <div class="flex justify-between">
                                                            <label for="email"
                                                                class="block text-sm font-medium text-gray-700 uppercase ">rendimiento</label>
                                                        </div>
                                                        <div class="mt-1">
                                                            <input disabled type="number"
                                                                wire:model='performance_bus'
                                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="1" aria-describedby="1">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <div class="flex justify-between">
                                                            <label for="email"
                                                                class="block text-sm font-medium text-gray-700 uppercase ">litros</label>
                                                        </div>
                                                        <div class="mt-1">
                                                            <input disabled type="number" wire:model='liters_bus'
                                                                disabled
                                                                class="block w-full rounded-md text-white placeholder-white bg-gray-400 text border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="1" aria-describedby="1">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-5">
                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">Precio
                                                            diesel</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                                <span class="text-gray-500 sm:text-sm">$</span>
                                                            </div>
                                                            <input disabled type="number"
                                                                wire:model='disel_price_bus'
                                                                class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="0.00" aria-describedby="price-currency">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <span class="text-gray-500 sm:text-sm"
                                                                    id="price-currency">MXN</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">costo
                                                            diesel</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                                <span class="text-white sm:text-sm">$</span>
                                                            </div>
                                                            <input disabled type="number" wire:model='disel_cost_bus'
                                                                disabled
                                                                class="pl-7 pr-12 block w-full rounded-md text-white placeholder-white bg-gray-400 text border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="0.00" aria-describedby="price-currency">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <span class="text-white sm:text-sm"
                                                                    id="price-currency">MXN</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">sueldo</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                                <span class="text-gray-500 sm:text-sm">$</span>
                                                            </div>
                                                            <input disabled type="number" wire:model='salary_bus'
                                                                class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="0.00" aria-describedby="price-currency">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <span class="text-gray-500 sm:text-sm"
                                                                    id="price-currency">MXN</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-5">
                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">viáticos</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                                <span class="text-gray-500 sm:text-sm">$</span>
                                                            </div>
                                                            <input disabled type="number" wire:model='per_diem_bus'
                                                                class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="0.00" aria-describedby="price-currency">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <span class="text-gray-500 sm:text-sm"
                                                                    id="price-currency">MXN</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">hotel</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                                <span class="text-gray-500 sm:text-sm">$</span>
                                                            </div>
                                                            <input disabled type="number" wire:model='hotel_bus'
                                                                class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="0.00" aria-describedby="price-currency">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <span class="text-gray-500 sm:text-sm"
                                                                    id="price-currency">MXN</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">carga
                                                            impositiva</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                                <span class="text-white sm:text-sm">$</span>
                                                            </div>
                                                            <input disabled type="number" disabled
                                                                wire:model='tax_burden_bus'
                                                                class="block w-full rounded-md  bg-gray-400 text-white border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="0.00" aria-describedby="price-currency">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <span class="text-white sm:text-sm"
                                                                    id="price-currency">MXN</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-5">
                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">derecho
                                                            de
                                                            piso</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                                <span class="text-gray-500 sm:text-sm">$</span>
                                                            </div>
                                                            <input disabled type="number" wire:model='flor_rigth_bus'
                                                                class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="0.00" aria-describedby="price-currency">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <span class="text-gray-500 sm:text-sm"
                                                                    id="price-currency">MXN</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">casetas</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                                <span class="text-gray-500 sm:text-sm">$</span>
                                                            </div>
                                                            <input disabled type="number" wire:model='booths_bus'
                                                                class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="0.00" aria-describedby="price-currency">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <span class="text-gray-500 sm:text-sm"
                                                                    id="price-currency">MXN</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">Mantenimiento</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                                <span class="text-gray-500 sm:text-sm">$</span>
                                                            </div>
                                                            <input disabled type="number"
                                                                wire:model='maintenance_bus'
                                                                class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="0.00" aria-describedby="price-currency">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <span class="text-gray-500 sm:text-sm"
                                                                    id="price-currency">MXN</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-5">
                                                <div class="sm:col-span-3">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">amenidades</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                                <span class="text-gray-500 sm:text-sm">$</span>
                                                            </div>
                                                            <input disabled type="number" wire:model='amenities_bus'
                                                                class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="0.00" aria-describedby="price-currency">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <span class="text-gray-500 sm:text-sm"
                                                                    id="price-currency">MXN</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sm:col-span-3">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">subarriendo</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                                <span class="text-gray-500 sm:text-sm">$</span>
                                                            </div>
                                                            <input disabled type="number" wire:model='sublet_bus'
                                                                class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="0.00" aria-describedby="price-currency">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <span class="text-gray-500 sm:text-sm"
                                                                    id="price-currency">MXN</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-5">
                                                <div class="sm:col-span-3">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">costo
                                                            total</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                                <span class="text-white sm:text-sm">$</span>
                                                            </div>
                                                            <div type="number" wire:model='total_cost_bus'
                                                                class="block w-full text-white bg-gray-400 rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="0.00" aria-describedby="price-currency">
                                                                {{ number_format($total_cost_bus, 2) }}
                                                                <div
                                                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                    <span class="text-white sm:text-sm"
                                                                        id="price-currency">MXN</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sm:col-span-3">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">porcentaje
                                                            de
                                                            utilidad</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">
                                                            <input disabled type="number"
                                                                wire:model='utility_percentage_bus'
                                                                class="block w-full text-gray-900 rounded-md border-gray-300 pl-3 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="Ingrese un número"
                                                                aria-describedby="price-currency">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <span class="text-gray-400 sm:text-sm"
                                                                    id="price-currency">%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-5 ">
                                                <div class="sm:col-span-6">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">Utilidad</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                                <span class="text-white sm:text-sm">$</span>
                                                            </div>
                                                            <div type="number" wire:model='utility_bus'
                                                                class="block w-full text-white bg-gray-400 rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="0.00" aria-describedby="price-currency">
                                                                {{ number_format($utility_bus, 2) }}
                                                                <div
                                                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                    <span class="text-white sm:text-sm"
                                                                        id="price-currency">MXN</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                </div>
                                {{-- Formulario Bus Real --}}
                                <div class=" col-span-10 md:col-span-10 lg:col-span-5 bg-gray-50 p-3">
                                    <h5
                                        class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight ">
                                        AUTOBUSES REALES</h4>
                                        <form>
                                            <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-3">
                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <div class="flex justify-between">
                                                            <label for="email"
                                                                class="block text-sm font-medium text-gray-700">CANTIDAD</label>
                                                        </div>
                                                        <div class="mt-1">
                                                            <input type="number" wire:model='qty_bus_real'
                                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="1" aria-describedby="1">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <div class="flex justify-between">
                                                            <label for="email"
                                                                class="block text-sm font-medium text-gray-700">KILOMETROS</label>
                                                        </div>
                                                        <div class="mt-1">
                                                            <input type="number" wire:model='km_bus_real'
                                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="1" aria-describedby="1">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <div class="flex justify-between">
                                                            <label for="email"
                                                                class="block text-sm font-medium text-gray-700">PASAJEROS</label>
                                                        </div>
                                                        <div class="mt-1">
                                                            <input type="number" wire:model='passangers_bus_real'
                                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="1" aria-describedby="1">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-5">
                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <div class="flex justify-between">
                                                            <label for="email"
                                                                class="block text-sm font-medium text-gray-700 uppercase ">vueltas</label>
                                                        </div>
                                                        <div class="mt-1">
                                                            <input type="number" wire:model='laps_bus_real'
                                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="1" aria-describedby="1">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <div class="flex justify-between">
                                                            <label for="email"
                                                                class="block text-sm font-medium text-gray-700 uppercase ">rendimiento</label>
                                                        </div>
                                                        <div class="mt-1">
                                                            <input type="number" wire:model='performance_bus_real'
                                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="1" aria-describedby="1">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <div class="flex justify-between">
                                                            <label for="email"
                                                                class="block text-sm font-medium text-gray-700 uppercase ">litros</label>
                                                        </div>
                                                        <div class="mt-1">
                                                            <input type="number" wire:model='liters_bus_real'
                                                                disabled
                                                                class="block w-full rounded-md text-white placeholder-white bg-gray-400 text border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="1" aria-describedby="1">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-5">
                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">Precio
                                                            diesel</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                                <span class="text-gray-500 sm:text-sm">$</span>
                                                            </div>
                                                            <input type="number" wire:model='disel_price_bus_real'
                                                                class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="0.00" aria-describedby="price-currency">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <span class="text-gray-500 sm:text-sm"
                                                                    id="price-currency">MXN</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">costo
                                                            diesel</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                                <span class="text-white sm:text-sm">$</span>
                                                            </div>
                                                            <input type="number" wire:model='disel_cost_bus_real'
                                                                disabled
                                                                class="pl-7 pr-12 block w-full rounded-md text-white placeholder-white bg-gray-400 text border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="0.00" aria-describedby="price-currency">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <span class="text-white sm:text-sm"
                                                                    id="price-currency">MXN</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">sueldo</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                                <span class="text-gray-500 sm:text-sm">$</span>
                                                            </div>
                                                            <input type="number" wire:model='salary_bus_real'
                                                                class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="0.00" aria-describedby="price-currency">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <span class="text-gray-500 sm:text-sm"
                                                                    id="price-currency">MXN</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-5">
                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">viáticos</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                                <span class="text-gray-500 sm:text-sm">$</span>
                                                            </div>
                                                            <input type="number" wire:model='per_diem_bus_real'
                                                                class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="0.00" aria-describedby="price-currency">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <span class="text-gray-500 sm:text-sm"
                                                                    id="price-currency">MXN</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">hotel</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                                <span class="text-gray-500 sm:text-sm">$</span>
                                                            </div>
                                                            <input type="number" wire:model='hotel_bus_real'
                                                                class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="0.00" aria-describedby="price-currency">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <span class="text-gray-500 sm:text-sm"
                                                                    id="price-currency">MXN</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">carga
                                                            impositiva</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                                <span class="text-white sm:text-sm">$</span>
                                                            </div>
                                                            <input type="number" disabled
                                                                wire:model='tax_burden_bus_real'
                                                                class="block w-full rounded-md  bg-gray-400 text-white border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="0.00" aria-describedby="price-currency">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <span class="text-white sm:text-sm"
                                                                    id="price-currency">MXN</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-5">
                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">derecho
                                                            de
                                                            piso</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                                <span class="text-gray-500 sm:text-sm">$</span>
                                                            </div>
                                                            <input type="number" wire:model='flor_rigth_bus_real'
                                                                class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="0.00" aria-describedby="price-currency">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <span class="text-gray-500 sm:text-sm"
                                                                    id="price-currency">MXN</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">casetas</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                                <span class="text-gray-500 sm:text-sm">$</span>
                                                            </div>
                                                            <input type="number" wire:model='booths_bus_real'
                                                                class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="0.00" aria-describedby="price-currency">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <span class="text-gray-500 sm:text-sm"
                                                                    id="price-currency">MXN</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">Mantenimiento</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                                <span class="text-gray-500 sm:text-sm">$</span>
                                                            </div>
                                                            <input type="number" wire:model='maintenance_bus_real'
                                                                class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="0.00" aria-describedby="price-currency">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <span class="text-gray-500 sm:text-sm"
                                                                    id="price-currency">MXN</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-5">
                                                <div class="sm:col-span-3">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">amenidades</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                                <span class="text-gray-500 sm:text-sm">$</span>
                                                            </div>
                                                            <input type="number" wire:model='amenities_bus_real'
                                                                class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="0.00" aria-describedby="price-currency">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <span class="text-gray-500 sm:text-sm"
                                                                    id="price-currency">MXN</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-3">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">subarriendo</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                                <span class="text-gray-500 sm:text-sm">$</span>
                                                            </div>
                                                            <input type="number" wire:model='sublet_bus_real'
                                                                class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="0.00" aria-describedby="price-currency">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <span class="text-gray-500 sm:text-sm"
                                                                    id="price-currency">MXN</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-5">
                                                <div class="sm:col-span-3">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">costo
                                                            total</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                                <span class="text-white sm:text-sm">$</span>
                                                            </div>
                                                            <div type="number" wire:model='total_cost_bus_real'
                                                                class="block w-full text-white bg-gray-400 rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="0.00" aria-describedby="price-currency">
                                                                {{ number_format($total_cost_bus_real, 2) }}
                                                                <div
                                                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                    <span class="text-white sm:text-sm"
                                                                        id="price-currency">MXN</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-3">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">porcentaje
                                                            de
                                                            utilidad</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">

                                                            <input type="number"
                                                                wire:model='utility_percentage_bus_real'
                                                                class="block w-full text-gray-900 rounded-md border-gray-300 pl-3 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="Ingrese un número"
                                                                aria-describedby="price-currency">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <span class="text-gray-400 sm:text-sm"
                                                                    id="price-currency">%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-5 ">
                                                <div class="sm:col-span-6">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">Utilidad</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                                <span class="text-white sm:text-sm">$</span>
                                                            </div>
                                                            <div type="text" wire:model='utility_bus_real'
                                                                class="block w-full text-white bg-gray-400 rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="0.00" aria-describedby="price-currency">
                                                                {{ number_format($utility_bus_real, 2) }}
                                                                <div
                                                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                    <span class="text-white sm:text-sm"
                                                                        id="price-currency">MXN</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                </div>
                            </div>
                            {{-- Campos de comparacion Bus --}}
                            <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-3">
                                <div class="sm:col-span-2">
                                    <div>
                                        <div class="flex justify-between">
                                            <label for="email"
                                                class="block text-sm font-medium text-gray-700 uppercase">TOTAL
                                                PRESUPUESTADO</label>
                                        </div>
                                        <div class="mt-1">
                                            <div type="text" wire:model='total_bus'
                                                class="block w-full text-white bg-gray-400 rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                aria-describedby="1">$ <span
                                                    class="pl-3">{{ number_format($total, 2) }}</span></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="sm:col-span-2">
                                    <div>
                                        <div class="flex justify-between">
                                            <label for="email"
                                                class="block text-sm font-medium text-gray-700 uppercase">TOTAL
                                                REAL</label>
                                        </div>
                                        <div class="mt-1">
                                            <div type="text" wire:model='total_bus_real'
                                                class="lock w-full text-white bg-gray-400 rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                aria-describedby="1">$ <span
                                                    class="pl-3">{{ number_format($total_bus_real, 2) }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="sm:col-span-2">
                                    <div>
                                        <div class="flex justify-between">
                                            <label for="email"
                                                class="block text-sm font-medium text-gray-700 uppercase">DIFERENCIA</label>
                                        </div>
                                        <div class="mt-1">
                                            @if ($difference_bus >= 0)
                                                <div type="text"
                                                    class=" text-green-700 lock w-full bg-gray-400 rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                    aria-describedby="1">$
                                                    <span
                                                        class="pl-3 ">{{ number_format($difference_bus, 2) }}</span>


                                                </div>
                                            @else
                                                <div type="text"
                                                    class="  text-red-700 lock w-full bg-gray-400 rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                    aria-describedby="1">$
                                                    <span
                                                        class="pl-3">{{ number_format($difference_bus, 2) }}</span>


                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="grid grid-cols-10 gap-4 mt-5 pt-3 pb-3">
                                <div class="col-span-10 md:col-span-10 lg:col-span-5">
                                    <h5
                                        class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight pb-3">
                                        CAMIONETAS PRESUPUESTADOS</h4>
                                        <form>
                                            <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-3">

                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <div class="flex justify-between">
                                                            <label for="email"
                                                                class="block text-sm font-medium text-gray-700">CANTIDAD</label>
                                                        </div>
                                                        <div class="mt-1">
                                                            <input type="number" wire:model='qty_pickup'
                                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="1" aria-describedby="1">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <div class="flex justify-between">
                                                            <label for="email"
                                                                class="block text-sm font-medium text-gray-700">KILOMETROS</label>
                                                        </div>
                                                        <div class="mt-1">
                                                            <input type="number" wire:model='km_pickup'
                                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="1" aria-describedby="1">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <div class="flex justify-between">
                                                            <label for="email"
                                                                class="block text-sm font-medium text-gray-700">PASAJEROS</label>
                                                        </div>
                                                        <div class="mt-1">
                                                            <input type="number" wire:model='passangers_pickup'
                                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="1" aria-describedby="1">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-5">
                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <div class="flex justify-between">
                                                            <label for="email"
                                                                class="block text-sm font-medium text-gray-700 uppercase ">vueltas</label>
                                                        </div>
                                                        <div class="mt-1">
                                                            <input type="number" wire:model='laps_pickup'
                                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="1" aria-describedby="1">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <div class="flex justify-between">
                                                            <label for="email"
                                                                class="block text-sm font-medium text-gray-700 uppercase ">rendimiento</label>
                                                        </div>
                                                        <div class="mt-1">
                                                            <input type="number" wire:model='performance_pickup'
                                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="1" aria-describedby="1">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <div class="flex justify-between">
                                                            <label for="email"
                                                                class="block text-sm font-medium text-gray-700 uppercase ">litros</label>
                                                        </div>
                                                        <div class="mt-1">
                                                            <input type="number" wire:model='liters_pickup' disabled
                                                                class="block w-full rounded-md text-white placeholder-white bg-gray-400 text border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="1" aria-describedby="1">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-5">
                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">Precio
                                                            diesel</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                                <span class="text-gray-500 sm:text-sm">$</span>
                                                            </div>
                                                            <input type="number" wire:model='disel_price_pickup'
                                                                class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="0.00" aria-describedby="price-currency">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <span class="text-gray-500 sm:text-sm"
                                                                    id="price-currency">MXN</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">costo
                                                            diesel</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                                <span class="text-white sm:text-sm">$</span>
                                                            </div>
                                                            <input type="number" wire:model='disel_cost_pickup' disabled
                                                                class="pl-7 pr-12 block w-full rounded-md text-white placeholder-white bg-gray-400 text border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="0.00" aria-describedby="price-currency">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <span class="text-white sm:text-sm"
                                                                    id="price-currency">MXN</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">sueldo</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                                <span class="text-gray-500 sm:text-sm">$</span>
                                                            </div>
                                                            <input type="number" wire:model='salary_pickup'
                                                                class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="0.00" aria-describedby="price-currency">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <span class="text-gray-500 sm:text-sm"
                                                                    id="price-currency">MXN</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-5">
                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">viáticos</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                                <span class="text-gray-500 sm:text-sm">$</span>
                                                            </div>
                                                            <input type="number" wire:model='per_diem_pickup'
                                                                class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="0.00" aria-describedby="price-currency">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <span class="text-gray-500 sm:text-sm"
                                                                    id="price-currency">MXN</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">hotel</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                                <span class="text-gray-500 sm:text-sm">$</span>
                                                            </div>
                                                            <input type="number" wire:model='hotel_pickup'
                                                                class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="0.00" aria-describedby="price-currency">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <span class="text-gray-500 sm:text-sm"
                                                                    id="price-currency">MXN</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">carga
                                                            impositiva</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                                <span class="text-white sm:text-sm">$</span>
                                                            </div>
                                                            <input type="number" disabled wire:model='tax_burden_pickup'
                                                                class="block w-full rounded-md  bg-gray-400 text-white border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="0.00" aria-describedby="price-currency">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <span class="text-white sm:text-sm"
                                                                    id="price-currency">MXN</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-5">
                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">derecho
                                                            de
                                                            piso</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                                <span class="text-gray-500 sm:text-sm">$</span>
                                                            </div>
                                                            <input type="number" wire:model='flor_rigth_pickup'
                                                                class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="0.00" aria-describedby="price-currency">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <span class="text-gray-500 sm:text-sm"
                                                                    id="price-currency">MXN</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">casetas</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                                <span class="text-gray-500 sm:text-sm">$</span>
                                                            </div>
                                                            <input type="number" wire:model='booths_pickup'
                                                                class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="0.00" aria-describedby="price-currency">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <span class="text-gray-500 sm:text-sm"
                                                                    id="price-currency">MXN</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">Mantenimiento</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                                <span class="text-gray-500 sm:text-sm">$</span>
                                                            </div>
                                                            <input type="number" wire:model='maintenance_pickup'
                                                                class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="0.00" aria-describedby="price-currency">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <span class="text-gray-500 sm:text-sm"
                                                                    id="price-currency">MXN</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-5">
                                                <div class="sm:col-span-3">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">amenidades</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                                <span class="text-gray-500 sm:text-sm">$</span>
                                                            </div>
                                                            <input type="number" wire:model='amenities_pickup'
                                                                class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="0.00" aria-describedby="price-currency">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <span class="text-gray-500 sm:text-sm"
                                                                    id="price-currency">MXN</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-3">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">subarriendo</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                                <span class="text-gray-500 sm:text-sm">$</span>
                                                            </div>
                                                            <input type="number" wire:model='sublet_pickup'
                                                                class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="0.00" aria-describedby="price-currency">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <span class="text-gray-500 sm:text-sm"
                                                                    id="price-currency">MXN</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-5">
                                                <div class="sm:col-span-3">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">costo
                                                            total</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                                <span class="text-white sm:text-sm">$</span>
                                                            </div>
                                                            <div type="number" wire:model='total_cost_pickup'
                                                                class="block w-full text-white bg-gray-400 rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="0.00" aria-describedby="price-currency">
                                                                {{ number_format($total_cost_pickup, 2) }}
                                                                <div
                                                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                    <span class="text-white sm:text-sm"
                                                                        id="price-currency">MXN</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-3">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">porcentaje
                                                            de
                                                            utilidad</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">

                                                            <input type="number" wire:model='utility_percentage_pickup'
                                                                class="block w-full text-gray-900 rounded-md border-gray-300 pl-3 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="Ingrese un número"
                                                                aria-describedby="price-currency">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <span class="text-gray-400 sm:text-sm"
                                                                    id="price-currency">%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-5 ">
                                                <div class="sm:col-span-6">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">Utilidad</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                                <span class="text-white sm:text-sm">$</span>
                                                            </div>
                                                            <div type="number" wire:model='utility_pickup'
                                                                class="block w-full text-white bg-gray-400 rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="0.00" aria-describedby="price-currency">
                                                                {{ number_format($utility_pickup, 2) }}
                                                                <div
                                                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                    <span class="text-white sm:text-sm"
                                                                        id="price-currency">MXN</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </form>

                                </div>
                                <div class=" col-span-10 md:col-span-10 lg:col-span-5 bg-gray-50 p-3">
                                    <h5
                                        class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight ">
                                        CAMIONETAS REALES</h4>
                                        <form>
                                            <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-3">

                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <div class="flex justify-between">
                                                            <label for="email"
                                                                class="block text-sm font-medium text-gray-700">CANTIDAD</label>
                                                        </div>
                                                        <div class="mt-1">
                                                            <input type="number" wire:model='qty_pickup_real'
                                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="1" aria-describedby="1">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <div class="flex justify-between">
                                                            <label for="email"
                                                                class="block text-sm font-medium text-gray-700">KILOMETROS</label>
                                                        </div>
                                                        <div class="mt-1">
                                                            <input type="number" wire:model='km_pickup_real'
                                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="1" aria-describedby="1">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <div class="flex justify-between">
                                                            <label for="email"
                                                                class="block text-sm font-medium text-gray-700">PASAJEROS</label>
                                                        </div>
                                                        <div class="mt-1">
                                                            <input type="number" wire:model='passangers_pickup_real'
                                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="1" aria-describedby="1">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-5">
                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <div class="flex justify-between">
                                                            <label for="email"
                                                                class="block text-sm font-medium text-gray-700 uppercase ">vueltas</label>
                                                        </div>
                                                        <div class="mt-1">
                                                            <input type="number" wire:model='laps_pickup_real'
                                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="1" aria-describedby="1">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <div class="flex justify-between">
                                                            <label for="email"
                                                                class="block text-sm font-medium text-gray-700 uppercase ">rendimiento</label>
                                                        </div>
                                                        <div class="mt-1">
                                                            <input type="number" wire:model='performance_pickup_real'
                                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="1" aria-describedby="1">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <div class="flex justify-between">
                                                            <label for="email"
                                                                class="block text-sm font-medium text-gray-700 uppercase ">litros</label>
                                                        </div>
                                                        <div class="mt-1">
                                                            <input type="number" wire:model='liters_pickup_real' disabled
                                                                class="block w-full rounded-md text-white placeholder-white bg-gray-400 text border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="1" aria-describedby="1">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-5">
                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">Precio
                                                            diesel</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                                <span class="text-gray-500 sm:text-sm">$</span>
                                                            </div>
                                                            <input type="number" wire:model='disel_price_pickup_real'
                                                                class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="0.00"
                                                                aria-describedby="price-currency">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <span class="text-gray-500 sm:text-sm"
                                                                    id="price-currency">MXN</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">costo
                                                            diesel</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                                <span class="text-white sm:text-sm">$</span>
                                                            </div>
                                                            <input type="number" wire:model='disel_cost_pickup_real'
                                                                disabled
                                                                class="pl-7 pr-12 block w-full rounded-md text-white placeholder-white bg-gray-400 text border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="0.00"
                                                                aria-describedby="price-currency">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <span class="text-white sm:text-sm"
                                                                    id="price-currency">MXN</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">sueldo</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                                <span class="text-gray-500 sm:text-sm">$</span>
                                                            </div>
                                                            <input type="number" wire:model='salary_pickup_real'
                                                                class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="0.00"
                                                                aria-describedby="price-currency">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <span class="text-gray-500 sm:text-sm"
                                                                    id="price-currency">MXN</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-5">
                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">viáticos</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                                <span class="text-gray-500 sm:text-sm">$</span>
                                                            </div>
                                                            <input type="number" wire:model='per_diem_pickup_real'
                                                                class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="0.00"
                                                                aria-describedby="price-currency">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <span class="text-gray-500 sm:text-sm"
                                                                    id="price-currency">MXN</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">hotel</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                                <span class="text-gray-500 sm:text-sm">$</span>
                                                            </div>
                                                            <input type="number" wire:model='hotel_pickup_real'
                                                                class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="0.00"
                                                                aria-describedby="price-currency">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <span class="text-gray-500 sm:text-sm"
                                                                    id="price-currency">MXN</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">carga
                                                            impositiva</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                                <span class="text-white sm:text-sm">$</span>
                                                            </div>
                                                            <input type="number" disabled
                                                                wire:model='tax_burden_pickup_real'
                                                                class="block w-full rounded-md  bg-gray-400 text-white border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="0.00"
                                                                aria-describedby="price-currency">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <span class="text-white sm:text-sm"
                                                                    id="price-currency">MXN</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-5">
                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">derecho
                                                            de
                                                            piso</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                                <span class="text-gray-500 sm:text-sm">$</span>
                                                            </div>
                                                            <input type="number" wire:model='flor_rigth_pickup_real'
                                                                class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="0.00"
                                                                aria-describedby="price-currency">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <span class="text-gray-500 sm:text-sm"
                                                                    id="price-currency">MXN</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">casetas</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                                <span class="text-gray-500 sm:text-sm">$</span>
                                                            </div>
                                                            <input type="number" wire:model='booths_pickup_real'
                                                                class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="0.00"
                                                                aria-describedby="price-currency">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <span class="text-gray-500 sm:text-sm"
                                                                    id="price-currency">MXN</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sm:col-span-2">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">Mantenimiento</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                                <span class="text-gray-500 sm:text-sm">$</span>
                                                            </div>
                                                            <input type="number" wire:model='maintenance_pickup_real'
                                                                class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="0.00"
                                                                aria-describedby="price-currency">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <span class="text-gray-500 sm:text-sm"
                                                                    id="price-currency">MXN</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-5">
                                                <div class="sm:col-span-3">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">amenidades</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                                <span class="text-gray-500 sm:text-sm">$</span>
                                                            </div>
                                                            <input type="number" wire:model='amenities_pickup_real'
                                                                class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="0.00"
                                                                aria-describedby="price-currency">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <span class="text-gray-500 sm:text-sm"
                                                                    id="price-currency">MXN</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-3">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">subarriendo</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                                <span class="text-gray-500 sm:text-sm">$</span>
                                                            </div>
                                                            <input type="number" wire:model='sublet_pickup_real'
                                                                class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="0.00"
                                                                aria-describedby="price-currency">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <span class="text-gray-500 sm:text-sm"
                                                                    id="price-currency">MXN</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-5">
                                                <div class="sm:col-span-3">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">costo
                                                            total</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                                <span class="text-white sm:text-sm">$</span>
                                                            </div>
                                                            <div type="number" wire:model='total_cost_pickup_real'
                                                                class="block w-full text-white bg-gray-400 rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="0.00"
                                                                aria-describedby="price-currency">
                                                                {{ number_format($total_cost_pickup_real, 2) }}
                                                                <div
                                                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                    <span class="text-white sm:text-sm"
                                                                        id="price-currency">MXN</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-3">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">porcentaje
                                                            de
                                                            utilidad</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">

                                                            <input type="number"
                                                                wire:model='utility_percentage_pickup_real'
                                                                class="block w-full text-gray-900 rounded-md border-gray-300 pl-3 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="Ingrese un número"
                                                                aria-describedby="price-currency">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <span class="text-gray-400 sm:text-sm"
                                                                    id="price-currency">%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-5 ">
                                                <div class="sm:col-span-6">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 uppercase">Utilidad</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">
                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                                <span class="text-white sm:text-sm">$</span>
                                                            </div>
                                                            <div type="text" wire:model='utility_pickup_real'
                                                                class="block w-full text-white bg-gray-400 rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="0.00"
                                                                aria-describedby="price-currency">
                                                                {{ number_format($utility_pickup_real, 2) }}
                                                                <div
                                                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                    <span class="text-white sm:text-sm"
                                                                        id="price-currency">MXN</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </form>

                                </div>
                            </div>

                            <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-3">
                                <div class="sm:col-span-2">
                                    <div>
                                        <div class="flex justify-between">
                                            <label for="email"
                                                class="block text-sm font-medium text-gray-700 uppercase">tarifa
                                                neta</label>
                                        </div>
                                        <div class="mt-1">
                                            <div type="text" wire:model='net_rate'
                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                aria-describedby="1">$ <span
                                                    class="pl-3">{{ number_format($net_rate, 2) }}</span></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="sm:col-span-2">
                                    <div>
                                        <div class="flex justify-between">
                                            <label for="email"
                                                class="block text-sm font-medium text-gray-700 uppercase">impuestos
                                                (IVA)</label>
                                        </div>
                                        <div class="mt-1">
                                            <div type="text" wire:model='tax'
                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                aria-describedby="1">$ <span
                                                    class="pl-3">{{ number_format($tax, 2) }}</span></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="sm:col-span-2">
                                    <div>
                                        <div class="flex justify-between">
                                            <label for="email"
                                                class="block text-sm font-medium text-gray-700 uppercase">Total</label>
                                        </div>
                                        <div class="mt-1">
                                            <div type="text" wire:model='total'
                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                aria-describedby="1">$ <span
                                                    class="pl-3">{{ number_format($total, 2) }}</span></div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="flex flex-shrink-0 justify-end px-4 py-4 mt-7 border-t bg-white">
                                {{-- <button type="button" wire:click="addBudget(0)"
                                    class="rounded-md border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Crear
                                    borrador</button> --}}
                                <button type="button" wire:click="closeBudget"
                                    class="ml-4 inline-flex justify-center rounded-md border border-transparent bg-blue-900 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Liquidar
                                    viaje</button>
                            </div>


                            {{-- <div class="hidden">
                                @livewire('presupuestocreado', key('presupuestocreado'))
                            </div> --}}

                        </div>
                    </div>
                </div>
            </div>
        @endif

        @if ($modal_cancel_travel)
        <div>


            {{-- <div class=" relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                <!--
                  Background backdrop, show/hide based on modal state.

                  Entering: "ease-out duration-300"
                    From: "opacity-0"
                    To: "opacity-100"
                  Leaving: "ease-in duration-200"
                    From: "opacity-100"
                    To: "opacity-0"
                -->
                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

                <div class="fixed inset-0 z-10 overflow-y-auto">
                    <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                        <!--
                      Modal panel, show/hide based on modal state.

                      Entering: "ease-out duration-300"
                        From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                        To: "opacity-100 translate-y-0 sm:scale-100"
                      Leaving: "ease-in duration-200"
                        From: "opacity-100 translate-y-0 sm:scale-100"
                        To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    -->
                        <div
                            class="relative transform overflow-hidden rounded-lg bg-white px-4 pt-5 pb-4 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg sm:p-6">
                            <div class="sm:flex sm:items-start">
                                <div
                                    class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                    <!-- Heroicon name: outline/exclamation-triangle -->
                                    <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 10.5v3.75m-9.303 3.376C1.83 19.126 2.914 21 4.645 21h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 4.88c-.866-1.501-3.032-1.501-3.898 0L2.697 17.626zM12 17.25h.007v.008H12v-.008z" />
                                    </svg>
                                </div>
                                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                    <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-title">¿Estás seguro de
                                        que deseas cancelar el viaje?</h3>
                                    <div class="mt-2">
                                        <p class="text-sm text-gray-500">Esta acción no se puede revertir, al cancelar deberás
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
            </div> --}}

            <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">

                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

                <div class="fixed inset-0 z-10 overflow-y-auto">
                    <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                        <div
                            class="relative transform overflow-hidden rounded-lg bg-white px-4 pt-5 pb-4 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg sm:p-6">
                            <div>
                                <div class="mt-1 text-center sm:mt-5">
                                    <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-title">¿Cuál es el motivo
                                        de la cancelación?</h3>
                                    <div class="mt-4">
                                        <textarea rows="4" wire:model="message"
                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="Escribe un mensaje"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <div class="flex justify-between">
                                    <label for="number" class="block text-sm font-medium text-gray-700">Escribe el porcentaje
                                        de devolución</label>
                                </div>
                                <div class="mt-1 ">
                                    <input type="number" wire:model="percentage_refund"
                                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        placeholder="Ejemplo: 40" aria-describedby="email-optional">
                                </div>
                            </div>
                            <div class="mt-3">
                                <label for="price" class="block text-sm font-medium text-gray-700">Monto pagado</label>
                                <div class="relative mt-1 rounded-md shadow-sm">
                                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                        <span class="text-gray-500 sm:text-sm">$</span>
                                    </div>
                                    <div type="text" name="monto-pagado" id="monto-pagado"
                                        class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        placeholder="0.00" aria-describedby="price-currency">{{ $total_paid }}</div>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                        <span class="text-gray-500 sm:text-sm" id="price-currency">MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <label for="price" class="block text-sm font-medium text-gray-700">Devolución</label>
                                <div class="relative mt-1 rounded-md shadow-sm">
                                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                        <span class="text-gray-500 sm:text-sm">$</span>
                                    </div>
                                    <div type="text" name="monto-pagado" id="monto-pagado"
                                        class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        placeholder="0.00" aria-describedby="price-currency">9,000</div>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                        <span class="text-gray-500 sm:text-sm" id="price-currency">MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5 sm:mt-6">
                                <button type="button"
                                    class="inline-flex w-full justify-center rounded-md border border-transparent bg-blue-900 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:text-sm">Finalizar</button>
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
