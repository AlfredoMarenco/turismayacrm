<div>
    <div class="h-screen flex flex-1 flex-col md:pl-64">
        <div class="pt-6 ">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8 pb-8">
                <div class="lg:flex lg:items-center lg:justify-between">
                    <div class="md:pl-5 lg:pl-8 min-w-0 flex-1">
                        <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">
                            Panel de disponibilidad</h2>
                       <!--  <div class="mt-1 flex flex-col sm:mt-0 sm:flex-row sm:flex-wrap sm:space-x-6">
                            <div class="mt-2 flex items-center text-sm text-gray-500">

                                <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"
                                        clip-rule="evenodd" />
                                </svg>
                                Fecha de hoy:<span class="pl-1"> 15 de Septiembre del 2022</span>
                            </div>
                        </div> -->
                    </div>
                    <div class="mt-5 flex lg:mt-0 lg:ml-4">
                        <span class="md:pl-3 lg:pr-8 sm:ml-3">
                            <button type="button" wire:click="$set('saveDate',true)"
                                class="inline-flex items-center rounded-md border border-transparent bg-blue-900 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                <!-- Heroicon name: mini/check -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="w-5 h-5 mr-2">
                                    <path
                                        d="M5.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H6a.75.75 0 01-.75-.75V12zM6 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H6zM7.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H8a.75.75 0 01-.75-.75V12zM8 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H8zM9.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V10zM10 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H10zM9.25 14a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V14zM12 9.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V10a.75.75 0 00-.75-.75H12zM11.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H12a.75.75 0 01-.75-.75V12zM12 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H12zM13.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H14a.75.75 0 01-.75-.75V10zM14 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H14z" />
                                    <path fill-rule="evenodd"
                                        d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"
                                        clip-rule="evenodd" />
                                </svg>
                                Apartar fecha
                            </button>
                        </span>
                    </div>
                </div>
            </div>
            <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8">
                <div wire:ignore>
                    <div class="" id='calendar'></div>
                </div>
                {{-- {{ $selectedDate }} --}}
                <div class="p-8">
                    <section class="mt-12">
                        <h2 class="font-semibold text-gray-900">Próximos eventos</h2>
                        <ol class="mt-2 divide-y divide-gray-200 text-sm leading-6 text-gray-500">
                            @forelse ($availabilities as $availability)
                                <li class="py-4 sm:flex">
                                    <time datetime="2022-01-19" class="w-28 flex-none">{{ $loop->iteration }}</time>
                                    <p class="mt-2 flex-auto font-semibold text-gray-900 sm:mt-0">
                                        {{ $availability->title }}</p>
                                    <p class="flex-none sm:ml-6">
                                        <time>{{ $availability->start }}</time> -
                                    </p>
                                </li>
                            @empty
                                <li class="py-4 sm:flex">
                                    <p class="w-full flex-none">No se encontraron eventos para esta fecha</p>
                                </li>
                            @endforelse
                        </ol>
                    </section>
                </div>
            </div>
        </div>

        @if ($saveDate)
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
                                            <h2 class="text-lg font-medium text-white" id="slide-over-title">Apartar
                                                fecha
                                            </h2>
                                            <div class="ml-3 flex h-7 items-center">
                                                <button type="button" wire:click="$set('saveDate',false)"
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
                                            <p class="text-sm text-indigo-300">Seleccione un cliente y asigne una unidad
                                            </p>
                                        </div>
                                    </div>
                                    <div class="relative flex-1 py-6 px-4 sm:px-6 overflow-auto">
                                        <!-- Replace with your content -->
                                        <div class="absolute inset-0 py-6 px-4 sm:px-6 bg-white">
                                            <div class="pt-1">
                                                <div class=" grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                                                    <div class="sm:col-span-6">
                                                        <div>
                                                            <label for="combobox"
                                                                class="block text-sm font-medium text-gray-700">Cliente</label>
                                                            <select wire:model="client"
                                                                class="mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                                                <option value="" selected disabled>Selecciona una
                                                                    opcion</option>
                                                                @foreach ($users as $user)
                                                                    <option value="{{ $user->id }}">
                                                                        {{ $user->id }}
                                                                        - {{ $user->namecomplete() }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="sm:col-span-6">
                                                        <div>
                                                            <label for="unidad"
                                                                class="block text-sm font-medium text-gray-700">Presupuesto</label>
                                                            <select wire:model="budget"
                                                                class="mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                                                <option value="" selected disabled>Selecciona una
                                                                    opcion</option>
                                                                @if ($budgets)
                                                                    @foreach ($budgets as $budget)
                                                                        <option value="{{ $budget->id }}" selected>
                                                                            {{ $budget->name }} -
                                                                            <span>{{ $budget->id }}</span>
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
                                                                <input type="date" wire:model="date" disabled
                                                                    class="block w-full rounded-md border-gray-300 pl-3 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                    placeholder="0.00"
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
                                                    {{-- <div class="sm:col-span-6">
                                                        <div>
                                                            <label for="price"
                                                                class="block text-sm font-medium text-gray-700 ">Fecha
                                                                de
                                                                fin</label>
                                                            <div class="relative mt-1 rounded-md shadow-sm">
                                                                <input type="date" wire:model="end_date" disabled
                                                                    class="block w-full rounded-md border-gray-300 pl-3 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                    placeholder="0.00"
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
                                                            <label for="unidad"
                                                                class="block text-sm font-medium text-gray-700">Unidades</label>
                                                            <select wire:model="unit"
                                                                class="mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                                                <option value="" selected disabled>Selecciona una
                                                                    opcion</option>
                                                                @foreach ($units as $unit)
                                                                    @if ($unit->status == 1)
                                                                        <option value="{{ $unit->id }}">
                                                                            {{ $unit->model }}
                                                                            - {{ $unit->id_unit }}
                                                                        </option>
                                                                    @endif
                                                                @endforeach
                                                                <option value="0">Subarriendo</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="sm:col-span-6">
                                                        <div>
                                                            <label for="choferes"
                                                                class="block text-sm font-medium text-gray-700">Chofer</label>
                                                            <select wire:model="driver"
                                                                class="mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                                                <option value="" selected disabled>Selecciona una
                                                                    opcion</option>
                                                                @foreach ($drivers as $driver)
                                                                    <option value="{{ $driver->id }}">
                                                                        {{ $driver->name }}</option>
                                                                @endforeach
                                                                <option value="0">Proveedor</option>
                                                            </select>
                                                        </div>
                                                    </div> --}}
                                                    <div class="sm:col-span-6">
                                                        <label for="rfc"
                                                            class="block text-sm font-medium text-gray-700">Comentario</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">
                                                            <input type="text" wire:model="comment"
                                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /End replace -->
                                    </div>
                                    <div class="flex flex-shrink-0 justify-end px-4 py-4">
                                        <button type="button" wire:click="$set('saveDate',false)"
                                            class="rounded-md border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Cancelar</button>
                                        <button type="button" wire:click="addAvailability"
                                            class="ml-4 inline-flex justify-center rounded-md border border-transparent bg-blue-900 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Apartar
                                            fecha</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin agregar cliente -->
        @endif
    </div>

    <div class="hidden">
        @livewire('apartarfecha', key('apartarfecha'))
    </div>

    @push('script')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var calendarEl = document.getElementById('calendar');
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'Calendario',
                    locale: 'es', // the initial locale. if not specified, uses the first one
                    timeZone: 'UTC',
                    headerToolbar: {
                        left: 'prev,next',
                        center: 'title',
                        right: 'Calendario,dayGridWeek,dayGridDay',

                    },
                    buttonText: {
                        week: 'Semana',
                        day: 'Dia',
                    },
                    views: {
                        Calendario: {
                            type: 'multiMonth',
                            multiMonthMaxColumns: 2,
                            duration: {
                                months: 2
                            }
                        }
                    },
                    events: @json($availabilitiesAll),
                    eventDisplay: 'list-item',
                    displayEventEnd: false,
                    aspectRatio: 1.80,
                    selectable: true,
                    height: 'auto',
                    width: 'auto',
                    dateClick: function(info) {
                        /* alert('Date: ' + info.dateStr); */
                        /* console.log(info.dateStr); */
                        Livewire.emit('setSelectedDate', info.dateStr);
                    }
                });
                calendar.render();
            });
        </script>
    @endpush
</div>
