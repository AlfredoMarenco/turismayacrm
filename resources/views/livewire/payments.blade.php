<div class="h-screen flex flex-1 flex-col md:pl-64">
    <main>
        @if ($view_payments)
            <div class="py-6 ">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8">
                    <div class="lg:flex lg:items-center lg:justify-between">
                        <div class="md:pl-5 lg:pl-8 min-w-0 flex-1">
                            <h2
                                class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">
                                Panel de Pagos</h2>
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
                        <div class="mt-5 flex lg:mt-0 lg:ml-4">
                            <span class="md:pl-3 lg:pr-8 sm:ml-3">
                                <button type="button" wire:click="$set('add_pay_modal',true)"
                                    class="inline-flex items-center rounded-md border border-transparent bg-blue-900 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                    <!-- Heroicon name: mini/check -->
                                    <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Solicitar pago
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8">
                    <!-- Replace with your content -->
                    <div class="py-4">
                        <div class="py-42px-4 sm:px-6 lg:px-8">
                            <p class="font-bold py-2">Buscar pago por:</p>
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
                                    <label for="email" class="block text-sm font-medium text-gray-700">Correo</label>
                                    <div class="relative mt-1 rounded-md shadow-sm">
                                        <div
                                            class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                            <!-- Heroicon name: mini/envelope -->
                                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                                <path
                                                    d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                                            </svg>
                                        </div>
                                        <input type="email" name="email" id="email"
                                            class="block w-full rounded-md border-gray-300 pl-10 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="you@example.com">
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
                                                            CORREO</th>
                                                        <th scope="col"
                                                            class="px-3 py-3.5 text-left text-sm font-semibold text-gray-500">
                                                            PAGOS</th>
                                                        {{-- <th scope="col"
                                                            class="px-3 py-3.5 text-left text-sm font-semibold text-gray-500">
                                                            CANAL DE PAGO</th> --}}
                                                        <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                                            <span class="sr-only">Ver más</span>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="divide-y divide-gray-200 bg-white ">
                                                    @foreach ($payments as $payment)
                                                        <tr>
                                                            <td
                                                                class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                                {{ $payment->budget->user->name }}</td>
                                                            <td
                                                                class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                {{ $payment->budget->name }}</td>
                                                            <td
                                                                class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                {{ $payment->budget->user->email }}</td>
                                                            <td
                                                                class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 justify-items-center">
                                                                {{ $payment->splits->count() }}</td>
                                                            <td
                                                                class="relative whitespace-nowrap py-4 pl-3 pr-4 text-center text-sm font-medium sm:pr-6">
                                                                <div>
                                                                    <a wire:click="view_details_payments({{ $payment }})"
                                                                        class="text-blue-900 hover:text-indigo-900 cursor-pointer">Ver
                                                                        más</a>
                                                                </div>
                                                                <div>
                                                                    <a href="#"
                                                                        class="text-red-500 hover:text-red-800 cursor-pointer">Eliminar</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach

                                                    <!-- More people... -->
                                                </tbody>
                                            </table>
                                            <div class="p-2">
                                                {{ $payments->links() }}
                                            </div>
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

        @if ($add_pay_modal)
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
                                            <h2 class="text-lg font-medium text-white" id="slide-over-title">Solicitar
                                                Pago</h2>
                                            <div class="ml-3 flex h-7 items-center">
                                                <button type="button" wire:click="$set('add_pay_modal',false)"
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
                                            <p class="text-sm text-indigo-300">Para iniciar el proceso llena todos los
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
                                                        <div>
                                                            <label for="clientepago"
                                                                class="block text-sm font-medium text-gray-700">Selecciona
                                                                un
                                                                cliente</label>
                                                            <select wire:model="client"
                                                                class="mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                                                <option value="" selected disabled>Selecciona una
                                                                    opcion</option>
                                                                @foreach ($users as $user)
                                                                    <option value="{{ $user->id }}">
                                                                        {{ $user->id }} - {{ $user->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="sm:col-span-6">
                                                        <div>
                                                            <label for="cotizacion-pago"
                                                                class="block text-sm font-medium text-gray-700">Selecciona
                                                                una
                                                                cotización</label>
                                                            <select wire:model="budget"
                                                                class="mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                                                <option value="" selected disabled>Selecciona una
                                                                    opcion</option>
                                                                @if ($budgets)
                                                                    @foreach ($budgets as $budget)
                                                                        <option value="{{ $budget->id }}">
                                                                            {{ $budget->id }} - {{ $budget->name }}
                                                                        </option>
                                                                    @endforeach
                                                                @endif
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="sm:col-span-6">
                                                        <div>
                                                            <label for="price"
                                                                class="block text-sm font-medium text-gray-700 ">Fecha
                                                                de
                                                                inicio</label>
                                                            <div class="relative mt-1 rounded-md shadow-sm">
                                                                <input type="date" wire:model="start_date" disabled
                                                                    class="block w-full rounded-md border-gray-300 pl-3 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                    aria-describedby="price-currency">

                                                                <div
                                                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                    <span class="text-gray-500 sm:text-sm"
                                                                        id="price-currency">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            fill="none" viewBox="0 0 24 24"
                                                                            stroke-width="1.5" stroke="currentColor"
                                                                            class="w-6 h-6">
                                                                            <path stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="sm:col-span-6">
                                                        <div>
                                                            <label for="price"
                                                                class="block text-sm font-medium text-gray-700 ">Canal
                                                                de pago</label>
                                                            <div class="relative mt-1 rounded-md shadow-sm">
                                                                <select
                                                                    class="block w-full rounded-md border-gray-300 pl-3 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                    wire:model="channel">
                                                                    <option value="1">Servicios Turísticos del
                                                                        Mayab</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /End replace -->
                                    </div>
                                    <div class="flex flex-shrink-0 justify-end px-4 py-4">
                                        <button type="button" wire:click="$set('add_pay_modal',false)"
                                            class="rounded-md border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Cancelar</button>
                                        <button type="button" wire:click="addPayment"
                                            class="ml-4 inline-flex justify-center rounded-md border border-transparent bg-blue-900 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Crear
                                            solicitud de pago</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Cliente guardado exitosamente --}}
                <div class="hidden">
                    @livewire('solicitudcreada', key('solicitudcreada'))
                </div>

            </div>
        @endif

        @if ($view_details_payment)
            <div class="py-6">
                <div class="lg:flex lg:items-center lg:justify-between">
                    <div class="md:pl-5 lg:pl-8 min-w-0 flex-1">
                        <h2
                            class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">
                            Detalle de Pagos de <span>{{ $payment->budget->user->name }}</span></h2>
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
                                Fecha de hoy:<span class="pl-1">
                                    {{ \Carbon\Carbon::now()->toFormattedDateString() }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 flex lg:mt-0 lg:ml-4">
                        <span class="md:pl-3 lg:pr-8 sm:ml-3">
                            <div
                                class="inline-flex items-center rounded-md border border-transparent bg-blue-900 px-4 py-2 text-sm font-medium text-white shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                <!-- Heroicon name: mini/check -->

                                Folio de cotización: <span class="pl-2"> {{ $payment->budget->id }}</span>
                            </div>
                        </span>
                    </div>

                </div>
                <div class="grid grid-cols-12 gap-1">
                    <div class="col-span-12 md:col-span-12 lg:col-span-4">
                        <div class="md:pl-5 lg:pl-8 pt-4 min-w-0">
                            <div class="grid grid-cols-10 gap-4">
                                <div class="col-span-10">
                                    <nav class="flex" aria-label="Breadcrumb">
                                        <ol role="list" class="flex space-x-4 rounded-md bg-white px-6 shadow">
                                            <li class="flex">
                                                <div class="flex items-center">
                                                    <a href="#" class="text-gray-400 hover:text-gray-500">
                                                        <!-- Heroicon name: mini/home -->
                                                        <svg class="h-5 w-5 flex-shrink-0"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor" aria-hidden="true">
                                                            <path fill-rule="evenodd"
                                                                d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                        <span class="sr-only">Home</span>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="flex">
                                                <div class="flex items-center">
                                                    <svg class="h-full w-6 flex-shrink-0 text-gray-200"
                                                        viewBox="0 0 24 44" preserveAspectRatio="none"
                                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                                        aria-hidden="true">
                                                        <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
                                                    </svg>
                                                    <a href="#"
                                                        class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Pagos</a>
                                                </div>
                                            </li>
                                            <li class="flex">
                                                <div class="flex items-center">
                                                    <svg class="h-full w-6 flex-shrink-0 text-gray-200"
                                                        viewBox="0 0 24 44" preserveAspectRatio="none"
                                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                                        aria-hidden="true">
                                                        <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
                                                    </svg>
                                                    <a href="#"
                                                        class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700"
                                                        aria-current="page">Detalle de pagos</a>
                                                </div>
                                            </li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div>
                            <!--tabla-->
                            <div>
                                <div class="py-42px-4 sm:px-6 lg:px-8">
                                    <div class="mt-8 flex flex-col">
                                        <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                                <div
                                                    class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                                                    <table class="min-w-full divide-y divide-gray-300">
                                                        <tbody class="divide-y divide-gray-100  bg-gray-50">
                                                            <tr>
                                                                <td
                                                                    class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                                    Nombre</td>
                                                                <td
                                                                    class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                    {{ $payment->budget->user->name }}</td>

                                                            </tr>
                                                            <tr class="bg-white">
                                                                <td
                                                                    class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                                    Teléfono</td>
                                                                <td
                                                                    class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                    {{ $payment->budget->user->phone }}</td>

                                                            </tr>
                                                            <tr>
                                                                <td
                                                                    class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                                    Correo</td>
                                                                <td
                                                                    class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                    {{ $payment->budget->user->email }}</td>

                                                            </tr>
                                                            <tr class="bg-white">
                                                                <td
                                                                    class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                                    Ciudad</td>
                                                                <td
                                                                    class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                    {{ $payment->budget->user->city }}</td>

                                                            </tr>
                                                            <tr class="bg-white">
                                                                <td
                                                                    class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                                    Presupuestado</td>
                                                                <td
                                                                    class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                    ${{ number_format($totalBudget, 2) }} MXN
                                                                    <p>{{ $difference }}</p>
                                                                </td>
                                                            </tr>
                                                            <!-- More people... -->
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--fin tabla-->
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-12 lg:col-span-8 sm:mt-5">
                        <!-- barra lateral con conceptos -->
                        <div>
                            <div class="flex flex-col sm:mr-6 sm:ml-6 lg:mr-14 lg:ml-14">
                                <div class="grid grid-cols-6 mt-3 mb-5">
                                    <div class="col-span-4 my-auto">
                                        <h2
                                            class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">
                                            Solicitudes de pago</h2>
                                    </div>
                                    <div class="col-span-2 ml-auto">
                                        <button type="button" wire:click="$set('add_split_modal',true)"
                                            class="inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Crear
                                            solicitud de pago</button>
                                    </div>
                                </div>
                                <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-10">
                                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                        <div class=" shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                                            <table class="min-w-full divide-y divide-gray-300">
                                                <thead class="bg-gray-50">
                                                    <tr>
                                                        <th scope="col"
                                                            class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-500 sm:pl-6 uppercase">
                                                            #</th>
                                                        <th scope="col"
                                                            class="px-3 py-3.5 text-left text-sm font-semibold text-gray-500 uppercase">
                                                            Descripcion</th>
                                                        <th scope="col"
                                                            class="px-3 py-3.5 text-left text-sm font-semibold text-gray-500 uppercase">
                                                            Monto</th>
                                                        <th scope="col"
                                                            class="px-3 py-3.5 text-left text-sm font-semibold text-gray-500 uppercase">
                                                            Estado</th>
                                                        {{-- <th scope="col"
                                                            class="px-3 py-3.5 text-left text-sm font-semibold text-gray-500 uppercase">
                                                            Metodo de Pago</th> --}}
                                                        <th scope="col"
                                                            class="px-3 py-3.5 text-left text-sm font-semibold text-gray-500 uppercase">
                                                            Comentario</th>
                                                        <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                                            <span class="sr-only">Ver más</span>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <!-- Mostrar máximo 6 -->
                                                <tbody class="divide-y divide-gray-200 bg-white">
                                                    @if ($splits != null)
                                                        @foreach ($splits as $split)
                                                            <tr>
                                                                <td
                                                                    class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                                    {{ $loop->iteration }}</td>
                                                                <td
                                                                    class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                    {{ $split->description }}</td>
                                                                <td
                                                                    class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 ">
                                                                    ${{ number_format($split->amount, 2) }}</td>
                                                                <td
                                                                    class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                    @switch($split->status)
                                                                        @case(1)
                                                                            <p class="text-orange-500 font-bold">Pendiente</p>
                                                                        @break

                                                                        @case(2)
                                                                            <p class="text-green-500 font-bold">Pagado</p>
                                                                        @break

                                                                        @default
                                                                            Procesando
                                                                    @endswitch
                                                                </td>
                                                                {{-- <td
                                                                    class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                    @switch($split->payment_type)
                                                                        @case(3)
                                                                            <p class="font-semibold">Efectivo</p>
                                                                        @break

                                                                        @case(4)
                                                                            <p class="font-semibold">Transferencia</p>
                                                                        @break

                                                                        @case(5)
                                                                            <p class="font-semibold">Credito</p>
                                                                        @break

                                                                        @case(6)
                                                                            <p class="font-semibold">Paypal</p>
                                                                        @break

                                                                        @case(7)
                                                                            <p class="font-semibold">Licitacion</p>
                                                                        @break
                                                                    @endswitch
                                                                </td> --}}
                                                                <td
                                                                    class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                    {{ $split->comment }}
                                                                </td>
                                                                <td
                                                                    class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                                                    <div>
                                                                        <button type="button"
                                                                            wire:click="editSplit({{ $split }})"
                                                                            class="text-blue-900 hover:text-indigo-900">Editar</button>
                                                                    </div>
                                                                    <div>
                                                                        @if ($split->status != 2)
                                                                            <button type="button"
                                                                                wire:click="editStatusSplit({{ $split }})"
                                                                                class="text-indigo-500 hover:text-orange-900">Editar
                                                                                estatus</button>
                                                                        @endif
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    @else
                                                        <tr>
                                                            <td class="col-span-6 text-gray-500 text-center w-full">
                                                                No hay pagos creados para esta orden
                                                            </td>
                                                        </tr>
                                                    @endif

                                                    <!-- More people... -->
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                            {{-- @if ($splits)
                                {{ $splits->links() }}
                            @endif --}}
                        </div>

                    </div>

                    <!-- modal Añadir concepto -->
                    @if ($add_split_modal)
                        <div>
                            <div class="relative z-10" aria-labelledby="modal-title" role="dialog"
                                aria-modal="true">
                                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
                                <div class="fixed inset-0 z-10 overflow-y-auto">
                                    <div
                                        class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                                        <div
                                            class="relative transform overflow-hidden rounded-lg bg-white px-4 pt-5 pb-4 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg sm:p-6">
                                            <div>
                                                <div class="mt-3 text-center sm:mt-5">
                                                    <h1 class="text-lg font-medium leading-6 text-gray-900"
                                                        id="modal-title">Introduce la
                                                        información requerida</h1>
                                                </div>
                                                <div class="mt-2 sm:mt-5">
                                                    <div>
                                                        <div>
                                                            <label for="email"
                                                                class="block text-sm font-medium text-gray-700">Descripción</label>
                                                            <div class="mt-1">
                                                                <input type="text" wire:model="description"
                                                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                    placeholder="Escribe una descripción corta del pago">
                                                                @error('description')
                                                                    <span
                                                                        class="text-sm text-red-500">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="mt-5 mb-4">
                                                            <label for="monto-concepto"
                                                                class="block text-sm font-medium text-gray-700">Monto</label>
                                                            <div class="relative mt-1 rounded-md shadow-sm">
                                                                <div
                                                                    class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                                    <span class="text-gray-500 sm:text-sm">$</span>
                                                                </div>
                                                                <input type="number" wire:model="amount"
                                                                    class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                    placeholder="0.00"
                                                                    aria-describedby="price-currency">
                                                                @error('message')
                                                                    <span
                                                                        class="text-sm text-red-500">{{ $message }}</span>
                                                                @enderror
                                                                @if (!session()->has('amount'))
                                                                    <div class="text-sm text-red-500">
                                                                        {{ session('message') }}
                                                                    </div>
                                                                @endif
                                                                <div
                                                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                    <span class="text-gray-500 sm:text-sm"
                                                                        id="price-currency">MXN</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="mt-5 sm:mt-6 sm:grid sm:grid-flow-row-dense sm:grid-cols-2 sm:gap-3">
                                                <button type="button" wire:click="addSplit"
                                                    class="inline-flex w-full justify-center rounded-md border border-transparent bg-blue-900 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:col-start-2 sm:text-sm">Añadir
                                                    concepto</button>
                                                <button type="button" wire:click="$set('add_split_modal',false)"
                                                    class="mt-3 inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-base font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:col-start-1 sm:mt-0 sm:text-sm">Cancelar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if ($edit_split_modal)
                        <div>
                            <div class="relative z-10" aria-labelledby="modal-title" role="dialog"
                                aria-modal="true">
                                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
                                <div class="fixed inset-0 z-10 overflow-y-auto">
                                    <div
                                        class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                                        <div
                                            class="relative transform overflow-hidden rounded-lg bg-white px-4 pt-5 pb-4 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg sm:p-6">
                                            <div>
                                                <div class="mt-3 text-center sm:mt-5">
                                                    <h1 class="text-lg font-medium leading-6 text-gray-900"
                                                        id="modal-title">Introduce la información requerida</h1>
                                                </div>
                                                <div class="mt-2 sm:mt-5">
                                                    <div>
                                                        <div>
                                                            <label for="email"
                                                                class="block text-sm font-medium text-gray-700">Descripción</label>
                                                            <div class="mt-1">
                                                                <input type="text"
                                                                    wire:model="editForm.description"
                                                                    id="descripcion-concepto"
                                                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                    placeholder="Escribe una descripción corta del concepto">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="mt-5 mb-4">
                                                            <label for="monto-concepto"
                                                                class="block text-sm font-medium text-gray-700">Monto</label>
                                                            <div class="relative mt-1 rounded-md shadow-sm">
                                                                <div
                                                                    class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                                    <span class="text-gray-500 sm:text-sm">$</span>
                                                                </div>
                                                                <input type="text" wire:model="editForm.amount"
                                                                    id="monto-concepto"
                                                                    class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                    placeholder="0.00"
                                                                    aria-describedby="price-currency">

                                                                @error('message2')
                                                                    <span
                                                                        class="text-sm text-red-500">{{ $message2 }}</span>
                                                                @enderror
                                                                @if (!session()->has('editForm.amount'))
                                                                    <div class="text-sm text-red-500">
                                                                        {{ session('message2') }}
                                                                    </div>
                                                                @endif
                                                                <div
                                                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                    <span class="text-gray-500 sm:text-sm"
                                                                        id="price-currency">MXN</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="mt-5 sm:mt-6 sm:grid sm:grid-flow-row-dense sm:grid-cols-2 sm:gap-3">
                                                <button type="button" wire:click="updateSplit"
                                                    class="inline-flex w-full justify-center rounded-md border border-transparent bg-blue-900 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:col-start-2 sm:text-sm">Editar
                                                    concepto</button>
                                                <button type="button" wire:click="$set('edit_split_modal',false)"
                                                    class="mt-3 inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-base font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:col-start-1 sm:mt-0 sm:text-sm">Cancelar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if ($edit_status_split_modal)
                        <div>
                            <div class="relative z-10" aria-labelledby="modal-title" role="dialog"
                                aria-modal="true">
                                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
                                <div class="fixed inset-0 z-10 overflow-y-auto">
                                    <div
                                        class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                                        <div
                                            class="relative transform overflow-hidden rounded-lg bg-white px-4 pt-5 pb-4 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg sm:p-6">
                                            <div>
                                                <div class="mt-3 text-center sm:mt-5">
                                                    <h1 class="text-lg font-medium leading-6 text-gray-900"
                                                        id="modal-title">Introduce la
                                                        información requerida</h1>
                                                </div>
                                                <div class="mt-2 sm:mt-5">
                                                    <div>
                                                        <div>
                                                            <label for="email"
                                                                class="block text-sm font-medium text-gray-700">Tipo de
                                                                pago</label>
                                                            <select wire:model="editForm.payment_type"
                                                                class="mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                                                <option value="" selected disabled>-Selecciona
                                                                    una opción-</option>
                                                                <option value="3">Efectivo</option>
                                                                <option value="4">Transferencia</option>
                                                                <option value="5">Crédito</option>
                                                                <option value="6">Paypal</option>
                                                                <option value="7">Licitación</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="mt-5 mb-4">
                                                            <label for="comentario-pago"
                                                                class="block text-sm font-medium text-gray-700">Comentario</label>
                                                            <div class="relative mt-1 rounded-md shadow-sm">
                                                                <input type="text" wire:model="editForm.comment"
                                                                    class="block w-full rounded-md border-gray-300 pl-3 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                    placeholder="Escribe información relevante sobre el tipo de pago"
                                                                    aria-describedby="price-currency">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="mt-5 sm:mt-6 sm:grid sm:grid-flow-row-dense sm:grid-cols-2 sm:gap-3">
                                                <button type="button" wire:click="updateStatusSplit"
                                                    class="inline-flex w-full justify-center rounded-md border border-transparent bg-blue-900 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:col-start-2 sm:text-sm">Cambiar
                                                    estatus</button>
                                                <button type="button"
                                                    wire:click="$set('edit_status_split_modal',false)"
                                                    class="mt-3 inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-base font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:col-start-1 sm:mt-0 sm:text-sm">Cancelar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>



            </div>
        @endif

        <div class="hidden">
            @livewire('eliminar', key('eliminar'))
        </div>
    </main>
</div>
