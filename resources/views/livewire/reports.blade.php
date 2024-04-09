<div class="h-screen flex flex-1 flex-col md:pl-64">
    <main>
        <div class="py-6 ">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8">
                <div class="lg:flex lg:items-center lg:justify-between">
                    <div class="md:pl-5 lg:pl-8 min-w-0 flex-1">
                        <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">
                            Reportes</h2>
                        <div>
                            <p class="font-medium cursor-pointer mt-8" wire:click="$set('reportSelected','0')">
                                <- Regresar </p>
                        </div>
                        @if ($reportSelected == 0)
                            <div class="">
                                <div class="shadow-lg p-6 mb-6 cursor-pointer" wire:click="$set('reportSelected','1')">
                                    <div class="flex cursor-pointer text-blue-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                        </svg>
                                        <h2 class="font-medium text-lg ">Reporte Sevicos Pagados VS Cotizados</h2>
                                    </div>
                                    <p class="text-gray-400">Reporte generado en un rango de tiempo</p>
                                </div>
                                <div class="shadow-lg p-6 mb-6 cursor-pointer" wire:click="$set('reportSelected','2')">
                                    <div class="flex cursor-pointer text-blue-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                        </svg>
                                        <h2 class="font-medium text-lg ">Reporte general de clientes</h2>
                                    </div>
                                    <p class="text-gray-400">Reporte generado en un rango de tiempo</p>
                                </div>
                                <div class="shadow-lg p-6 mb-6 cursor-pointer" wire:click="$set('reportSelected','3')">
                                    <div class="flex cursor-pointer text-blue-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                        </svg>
                                        <h2 class="font-medium text-lg ">Reporte Sabana de servicios</h2>
                                    </div>
                                    <p class="text-gray-400">Reporte generado en un rango de tiempo</p>
                                </div>
                            </div>
                        @endif
                        @if ($reportSelected == 1)
                            <div class="mt-8">
                                <h2>Obtener reporte:</h2>
                                <p class="mb-4">Establece el rango de fechas para generar el reporte</p>
                                <label for="start_date">Fecha de Inicio</label>
                                <input type="date" wire:model="start_date">
                                <label for="end_date">Fecha de Fin</label>
                                <input type="date" wire:model="end_date">
                                <button wire:click="servicespayed_vs_budgets()"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Generar
                                    Reporte</button>
                                <div class="px-4 sm:px-6 lg:px-8">
                                    <div class="mt-8 flow-root">
                                        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                                                <table class="min-w-full divide-y divide-gray-300">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col"
                                                                class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">
                                                                Cotizacion</th>
                                                            <th scope="col"
                                                                class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                                Cliente</th>
                                                            <th scope="col"
                                                                class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                                Importe</th>
                                                            <th scope="col"
                                                                class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                                Contratado</th>
                                                            <th scope="col"
                                                                class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                                Pagado</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="divide-y divide-gray-200">
                                                        @if ($budgets)
                                                            @foreach ($budgets as $budget)
                                                                <tr>
                                                                    <td
                                                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">
                                                                        {{ $budget->id }}</td>
                                                                    <td
                                                                        class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                        {{ $budget->user->nameComplete() }} </td>
                                                                    <td
                                                                        class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                        @if ($budget->enable_tax)
                                                                            ${{ number_format($budget->totalWithTax(), 2) }}
                                                                        @else
                                                                            ${{ number_format($budget->totalWithOutTax(), 2) }}
                                                                        @endif
                                                                    </td>
                                                                    <td
                                                                        class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                        @if ($budget->status == 1)
                                                                            Sí
                                                                        @else
                                                                            No
                                                                        @endif
                                                                    </td>
                                                                    <td
                                                                        class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                        @if ($budget->status == 1)
                                                                            {{ $budget->balanceSplits() }}
                                                                        @else
                                                                        @endif
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        @endif
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($reportSelected == 2)
                            <div class="mt-8">
                                <h2>Obtener reporte:</h2>
                                <p class="mb-4">Selecciona un cliente para obtener un reporte</p>
                                <select wire:model="client_id">
                                    <option value="">-Selecciona una opción</option>
                                    @foreach ($clients as $client)
                                        <option value="{{ $client->id }}">
                                            {{ $client->id }} - {{ $client->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <div class="px-4 sm:px-6 lg:px-8">
                                    <div class="mt-8 flow-root">
                                        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                                                <table class="min-w-full divide-y divide-gray-300">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col"
                                                                class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">
                                                                Fecha</th>
                                                            <th scope="col"
                                                                class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                                N° Presupuesto</th>
                                                            <th scope="col"
                                                                class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                                N° Cotizacion</th>
                                                            <th scope="col"
                                                                class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                                Orden de Servicio</th>
                                                            <th scope="col"
                                                                class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                                Importe</th>
                                                            <th scope="col"
                                                                class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                                Contratado</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="divide-y divide-gray-200">
                                                        @if ($budgets)
                                                            @foreach ($budgets as $budget)
                                                                <tr>
                                                                    <td
                                                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">
                                                                        {{ $budget->date }}
                                                                    </td>
                                                                    <td
                                                                        class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                        {{ $budget->id }}

                                                                    </td>
                                                                    <td
                                                                        class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                        @if ($budget->all_splits_paid() != 0)
                                                                            {{ $budget->payment->id }}
                                                                        @endif
                                                                    </td>
                                                                    <td
                                                                        class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">

                                                                    </td>
                                                                    <td
                                                                        class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                        @if ($budget->enable_tax)
                                                                            ${{ number_format($budget->totalWithTax(), 2) }}
                                                                        @else
                                                                            ${{ number_format($budget->totalWithOutTax(), 2) }}
                                                                        @endif
                                                                    </td>
                                                                    <td
                                                                        class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                        @if ($budget->status == 1)
                                                                            Sí
                                                                        @else
                                                                            No
                                                                        @endif
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        @endif
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
