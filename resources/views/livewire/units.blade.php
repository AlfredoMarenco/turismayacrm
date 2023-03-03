<div class="h-screen flex flex-1 flex-col md:pl-64">
    <main>
        <div class="py-6 ">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8">
                <div class="lg:flex lg:items-center lg:justify-between">
                    <div class="md:pl-5 lg:pl-8 min-w-0 flex-1">
                        <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">
                            Panel de Unidades</h2>
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
                    <div class="mt-5 flex lg:mt-0 lg:ml-4">
                        <span class="md:pl-3 lg:pr-8 sm:ml-3">
                            <button type="button" wire:click="$set('modal_add_unit','true')"
                                class="inline-flex items-center rounded-md border border-transparent bg-blue-900 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                <!-- Heroicon name: mini/check -->
                                <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                        clip-rule="evenodd" />
                                </svg>
                                Agregar unidad
                            </button>
                        </span>
                    </div>
                </div>
            </div>
            <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8">
                <!-- Replace with your content -->
                <div class="py-4">
                    <div class="py-42px-4 sm:px-6 lg:px-8">
                        <p class="font-bold py-2">Buscar unidad por:</p>
                        <div class="grid grid-cols-10 gap-4">
                            <div class="col-span-1">
                                <label for="num" class="block text-sm font-medium text-gray-700">Mostrar</label>
                                <select wire:model="paginate"
                                    class="mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                    <option selected value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                </select>
                            </div>
                            <div class="col-span-3">
                                <label for="text" class="block text-sm font-medium text-gray-700">Modelo</label>
                                <div class="relative mt-1 rounded-md shadow-sm">
                                    <input type="text" wire:model="model_search"
                                        class="block w-full rounded-md border-gray-300 pl-3 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        placeholder="Mercedes Benz">
                                </div>

                            </div>
                            <div class="col-span-3">
                                <label for="text" class="block text-sm font-medium text-gray-700">Placa</label>
                                <div class="relative mt-1 rounded-md shadow-sm">

                                    <input type="text" wire:model="plate_search"
                                        class="block w-full rounded-md border-gray-300 pl-3 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        placeholder="YUC-2022">
                                </div>
                            </div>

                            <div class="col-span-3">
                                <label for="email" class="block text-sm font-medium text-gray-700">Num. de
                                    serie</label>
                                <div class="relative mt-1 rounded-md shadow-sm">

                                    <input type="text" wire:model="id_unit_search"
                                        class="block w-full rounded-md border-gray-300 pl-3 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        placeholder="567821C">
                                </div>
                            </div>



                        </div>
                        <div class="mt-8 flex flex-col">
                            <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                    <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                                        <table class="min-w-full divide-y divide-gray-300">
                                            <thead class="bg-gray-50">
                                                <tr>
                                                    <th scope="col"
                                                        class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-500 sm:pl-6">
                                                        MODELO</th>
                                                    <th scope="col"
                                                        class="px-3 py-3.5 text-left text-sm font-semibold text-gray-500">
                                                        ID</th>
                                                    <th scope="col"
                                                        class="px-3 py-3.5 text-left text-sm font-semibold text-gray-500">
                                                        PLACA</th>
                                                    <th scope="col"
                                                        class="px-3 py-3.5 text-left text-sm font-semibold text-gray-500">
                                                        PÓLIZA SEGURO</th>
                                                    <th scope="col"
                                                        class="px-3 py-3.5 text-left text-sm font-semibold text-gray-500">
                                                        V. FISICOMECÁNICAS</th>
                                                    <th scope="col"
                                                        class="px-3 py-3.5 text-left text-sm font-semibold text-gray-500">
                                                        V. HUMO</th>
                                                    <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                                        <span class="sr-only">Ver más</span>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-200 bg-white ">
                                                @foreach ($units as $unit)
                                                    <tr>
                                                        <td
                                                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                            {{ $unit->model }}</td>
                                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                            {{ $unit->id_unit }}</td>
                                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                            {{ $unit->plate }}</td>
                                                        <td
                                                            class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 justify-items-center">
                                                            {{ $unit->insurance_policy }}</td>
                                                        <td
                                                            class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 justify-items-center">
                                                            {{ $unit->mechanical_checks }}</td>
                                                        <td
                                                            class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 justify-items-center">
                                                            {{ $unit->smoke_checks }}</td>
                                                        <td
                                                            class="relative whitespace-nowrap py-4 pl-3 pr-4 text-center text-sm font-medium sm:pr-6">
                                                            <div>
                                                                <a href="#"
                                                                    class="text-blue-900 hover:text-indigo-900">Ver
                                                                    más</a>
                                                            </div>
                                                            <div>
                                                                <a href="#"
                                                                    class="text-red-500 hover:text-red-800">Eliminar</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                                <!-- More people... -->
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

        @if ($modal_add_unit)
            <div class="">
                <div class="fixed inset-0 bg-gray-400 bg-opacity-75"></div>
                <!-- agregar cliente -->
                <div class="relative z-10 " aria-labelledby="slide-over-title" role="dialog" aria-modal="true">
                    <!-- Background backdrop, show/hide based on slide-over state. -->
                    <div class="fixed inset-0"></div>

                    <div class="fixed inset-0 overflow-hidden">
                        <div class="absolute inset-0 overflow-hidden">
                            <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10">
                                <div class="pointer-events-auto w-screen max-w-md">
                                    <form class="flex h-full flex-col overflow-y-scroll bg-white shadow-xl">
                                        <div class="bg-blue-900 py-6 px-4 sm:px-6">
                                            <div class="flex items-center justify-between">
                                                <h2 class="text-lg font-medium text-white" id="slide-over-title">
                                                    Agregar o
                                                    modificar
                                                    unidades </h2>
                                                <div class="ml-3 flex h-7 items-center">
                                                    <button type="button" wire:click="$set('modal_add_unit',false)"
                                                        class="rounded-md  text-indigo-200 hover:text-white focus:outline-none focus:ring-2 focus:ring-white">
                                                        <span class="sr-only">Close panel</span>
                                                        <!-- Heroicon name: outline/x-mark -->
                                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                                                            fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                            stroke="currentColor" aria-hidden="true">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M6 18L18 6M6 6l12 12" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="mt-1">
                                                <p class="text-sm text-indigo-300">Para iniciar el proceso llena todos
                                                    los
                                                    campos
                                                    solicitados</p>
                                            </div>
                                        </div>
                                        <div class="relative flex-1 py-6 px-4 sm:px-6 overflow-auto">
                                            <!-- Replace with your content -->
                                            <div class="absolute inset-0 py-6 px-4 sm:px-6 bg-white">
                                                <div class="pt-1">
                                                    <div class=" grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                                                        <div class="sm:col-span-6">
                                                            <label for="first-name"
                                                                class="block text-sm font-medium text-gray-700">Modelo</label>
                                                            <div class="mt-1">
                                                                <input type="text" wire:model='model'
                                                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                            </div>
                                                        </div>

                                                        <div class="sm:col-span-6">
                                                            <label for="last-name"
                                                                class="block text-sm font-medium text-gray-700">ID</label>
                                                            <div class="mt-1">
                                                                <input type="text" wire:model='id_unit'
                                                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                            </div>
                                                        </div>

                                                        <div class="sm:col-span-6">
                                                            <label for="empresa"
                                                                class="block text-sm font-medium text-gray-700">Placa</label>
                                                            <div class="relative mt-1 rounded-md shadow-sm">
                                                                <input type="text" wire:model='plate'
                                                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                            </div>
                                                        </div>

                                                        <div class="sm:col-span-6">
                                                            <label for="rfc"
                                                                class="block text-sm font-medium text-gray-700">Póliza
                                                                de
                                                                seguro</label>
                                                            <div class="relative mt-1 rounded-md shadow-sm">
                                                                <input type="text" wire:model='insurance_policy'
                                                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                            </div>
                                                        </div>

                                                        <div class="sm:col-span-6">
                                                            <label for="rfc"
                                                                class="block text-sm font-medium text-gray-700">Verificaciones
                                                                fisicomecánicas</label>
                                                            <div class="relative mt-1 rounded-md shadow-sm">
                                                                <input type="text" wire:model='mechanical_checks'
                                                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                            </div>
                                                        </div>

                                                        <div class="sm:col-span-6">
                                                            <label for="rfc"
                                                                class="block text-sm font-medium text-gray-700">Verificaciones
                                                                de
                                                                humo</label>
                                                            <div class="relative mt-1 rounded-md shadow-sm">
                                                                <input type="text" wire:model='smoke_checks'
                                                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /End replace -->
                                        </div>
                                        <div class="flex flex-shrink-0 justify-end px-4 py-4">
                                            <button type="button" wire:click="$set('modal_add_unit',false)"
                                                class="rounded-md border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Cancelar</button>
                                            <button type="button"  wire:click="addUnit()"
                                                class="ml-4 inline-flex justify-center rounded-md border border-transparent bg-blue-900 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Guardar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin agregar cliente -->

                {{-- Unidad guardada exitosamente --}}
                <div class="hidden">
                    @livewire('graciasliquidacion')
                </div>
            </div>
        @endif


        {{-- eliminar --}}
        <div class="hidden">
            @livewire('eliminar', key('eliminar'))
        </div>
    </main>
</div>
