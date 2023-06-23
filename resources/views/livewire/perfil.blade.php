<div class="bg-white">
    <div class="min-h-full">
        <nav class="bg-blue-900">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img class="h-8 auto" src="img/turismaya-logo.svg" alt="Your Company">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->

        </nav>

        <header class="bg-white shadow">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <div class="md:flex md:items-center md:justify-between md:space-x-5">
                    <div class="flex items-start space-x-5">
                        <div class="flex-shrink-0">
                            <div class="relative">
                                <img class="h-16 w-16 rounded-full"
                                    src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80"
                                    alt="">
                                <span class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="pt-1.5">
                            <h1 class="text-2xl font-bold text-gray-900">{{ $user->nameComplete() }}</h1>
                            <p class="text-sm font-medium text-gray-500">Cliente desde <time
                                    datetime="2020-08-25">{{ $user->created_at->toFormattedDateString() }}</time></p>
                        </div>
                    </div>
                    <div
                        class="mt-6 flex flex-col-reverse justify-stretch space-y-4 space-y-reverse sm:flex-row-reverse sm:justify-end sm:space-x-3 sm:space-y-0 sm:space-x-reverse md:mt-0 md:flex-row md:space-x-3">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            @method('POST')
                            <button type="submit"
                                class="inline-flex items-center justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Cerrar
                                sesión</button>
                        </form>
                        <button type="button"
                            class="inline-flex items-center justify-center rounded-md bg-blue-900 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Cambiar
                            contraseña</button>
                    </div>
                </div>

            </div>
        </header>

        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                <!-- Your content -->
                @if ($show_payments)
                    <div class="">{{-- cotizaciones --}}
                        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                            <div class="sm:flex sm:items-center">
                                <div class="sm:flex-auto">
                                    <h1 class="text-base font-semibold leading-6 text-gray-900">Seleccione una
                                        cotización
                                    </h1>
                                    <p class="mt-2 text-sm text-gray-700">Al seleccionar una opción será redireccionado
                                        a la
                                        sección de selección
                                        de pagos.</p>
                                </div>
                            </div>
                            <ul role="list" class="divide-y divide-gray-100">
                                @foreach ($user->budgets as $budget)
                                    <li wire:click='selectedBudget({{ $budget }})'
                                        class="relative flex justify-between gap-x-6 py-5">
                                        <div class="flex gap-x-4">
                                            <div class="min-w-0 flex-auto">
                                                <p class="text-sm font-semibold leading-6 text-gray-900">
                                                    <a href="#">
                                                        <span class="absolute inset-x-0 -top-px bottom-0"></span>
                                                        {{ $budget->name }}
                                                    </a>
                                                </p>
                                                <p class="mt-1 flex text-xs leading-5 text-gray-500">
                                                    <span class="pr-1">Fecha de viaje: </span> {{ $budget->date }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-x-4">
                                            <div class="hidden sm:flex sm:flex-col sm:items-end">
                                                @if ($budget->enable_tax == 1)
                                                    <p class="text-sm leading-6 text-gray-900">
                                                        <span>$</span>{{ number_format($budget->totalWithTax(), 2) }}
                                                        <span>mxn</span>
                                                    </p>
                                                @else
                                                    <p class="text-sm leading-6 text-gray-900">
                                                        <span>$</span>{{ number_format($budget->totalWithOutTax(), 2) }}
                                                        <span>mxn</span>
                                                    </p>
                                                @endif
                                                <p class="mt-1 text-xs leading-5 text-gray-500">
                                                    {{ $budget->totalPax() }}
                                                    pasajeros</p>
                                            </div>
                                            <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
                @if ($show_splits)
                    <div class=""> {{-- detalle de pagos --}}
                        <div>
                            <div class="px-4 sm:px-6 lg:px-8">
                                <div class="sm:flex sm:items-center">
                                    <div class="sm:flex-auto">
                                        <h1 class="text-base font-semibold leading-6 text-gray-900">Seleccione los
                                            conceptos
                                            a pagar.
                                            <span>Mérida - Cancún</span>
                                        </h1>
                                        <p class="mt-2 text-sm text-green-700">Transacción segura. No almacenamos ningun
                                            dato de su tarjeta de
                                            crédito o débito.</p>
                                    </div>
                                    <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                                        <button type="button" wire:click="paySplits()" @if ($splitSelected==null)
                                            disabled
                                        @endif
                                            class="@if ($splitSelected==null)
                                            block rounded-md bg-gray-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-gray-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600
                                            @else
                                            block rounded-md bg-blue-900 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600
                                            @endif">Pagar
                                            conceptos</button>
                                    </div>
                                </div>
                                <div class="mt-8 flow-root">
                                    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                                            <div class="relative">
                                                {{-- @foreach ($splitSelected as $item)
                                                    {{ var_dump($item) }}
                                                @endforeach --}}
                                                <table class="min-w-full table-fixed divide-y divide-gray-300">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" class="relative px-7 sm:w-12 sm:px-6">
                                                                {{-- <input type="checkbox"
                                                                    class="absolute left-4 top-1/2 -mt-2 h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600"> --}}
                                                            </th>
                                                            <th scope="col"
                                                                class="min-w-[12rem] py-3.5 pr-3 text-left text-sm font-semibold text-gray-900">
                                                                # de Pago</th>
                                                            <th scope="col"
                                                                class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                                Concepto</th>
                                                            <th scope="col"
                                                                class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                                Estatus</th>
                                                            <th scope="col"
                                                                class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                                Total</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody class="divide-y divide-gray-200 bg-white">
                                                        @foreach ($splits as $split)
                                                            <tr>
                                                                <td class="relative px-7 sm:w-12 sm:px-6">
                                                                    @if ($split->status == 1)
                                                                        <input type="checkbox" name="splitSelected[]"
                                                                            wire:model="splitSelected"
                                                                            value="{{ $split->id }}"
                                                                            class="absolute left-4 top-1/2 -mt-2 h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                                    @endif
                                                                </td>
                                                                <td
                                                                    class="whitespace-nowrap py-4 pr-3 text-sm font-medium text-gray-900">
                                                                    {{ $loop->iteration }}</td>
                                                                <td
                                                                    class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                    {{ $split->description }}</td>
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
                                                                <td
                                                                    class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                    <span>$</span>{{ number_format($split->amount, 2) }}
                                                                    <span>MXN</span>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                @endif
                @if ($show_checkout)
                @endif
                <div class="hidden">
                    @livewire('pago-exitoso', key('pago-exitoso'))
                </div>
                <div class="hidden">{{-- en caso de error de la plataforma --}}
                    @livewire('pago-fallido', key('pago-fallido'))
                </div>
                <div class="hidden">{{-- en caso de que sea rechazado por el banco --}}
                    @livewire('pago-rechazado', key('pago-rechazado'))
                </div>
            </div>
        </main>
    </div>
</div>
