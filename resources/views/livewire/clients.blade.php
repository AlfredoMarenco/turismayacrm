<div class="flex flex-1 flex-col md:pl-64">

    <main class="h-full ">
        {{-- Panel clientes --}}

        <div class="py-6">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8">
                <div class="lg:flex lg:items-center lg:justify-between">
                    <div class="md:pl-5 lg:pl-8 min-w-0 flex-1">
                        <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">
                            Panel de Clientes</h2>
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
                            <button type="button" wire:click='$set("addClient",true)'
                                class="inline-flex items-center rounded-md border border-transparent bg-blue-900 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                <!-- Heroicon name: mini/check -->
                                <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                        clip-rule="evenodd" />
                                </svg>
                                Agregar Nuevo
                            </button>
                        </span>
                    </div>
                </div>
            </div>
            <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8">
                <!-- Replace with your content -->
                <div class="py-4">
                    <div class="py-42px-4 sm:px-6 lg:px-8">
                        <p class="font-bold py-2">Buscar cliente por:</p>
                        <div class="grid grid-cols-10 gap-4">
                            <div class="col-span-2">
                                <label for="num" class="block text-sm font-medium text-gray-700">Mostrar</label>
                                <select wire:model="paginate"
                                    class="mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                </select>
                            </div>
                            <div class="col-span-2">
                                <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
                                <div class="relative mt-1 rounded-md shadow-sm">
                                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                        <!-- Heroicon name: mini/envelope -->
                                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path
                                                d="M7 8a3 3 0 100-6 3 3 0 000 6zM14.5 9a2.5 2.5 0 100-5 2.5 2.5 0 000 5zM1.615 16.428a1.224 1.224 0 01-.569-1.175 6.002 6.002 0 0111.908 0c.058.467-.172.92-.57 1.174A9.953 9.953 0 017 18a9.953 9.953 0 01-5.385-1.572zM14.5 16h-.106c.07-.297.088-.611.048-.933a7.47 7.47 0 00-1.588-3.755 4.502 4.502 0 015.874 2.636.818.818 0 01-.36.98A7.465 7.465 0 0114.5 16z" />
                                        </svg>
                                    </div>
                                    <input type="text" wire:model
                                        class="block w-full rounded-md border-gray-300 pl-10 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        placeholder="Jane Cooper">
                                </div>

                            </div>
                            <div class="col-span-2">
                                <label for="email" class="block text-sm font-medium text-gray-700">Correo</label>
                                <div class="relative mt-1 rounded-md shadow-sm">
                                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
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

                            <div class="col-span-2">
                                <label for="tel" class="block text-sm font-medium text-gray-700">Teléfono</label>
                                <div class="relative mt-1 rounded-md shadow-sm">
                                    <input type="tel" name="tel" id="phone"
                                        class="block w-full rounded-md border-gray-300 pl-4 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        placeholder="(999) 955 2316">
                                </div>
                            </div>

                            {{-- <div class="col-span-2">
                                <label for="tel" class="block text-sm font-medium text-gray-700">Teléfono</label>
                                <div class="relative mt-1 rounded-md shadow-sm">
                                    <input type="tel" name="tel" id="phone"
                                        class="block w-full rounded-md border-gray-300 pl-4 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        placeholder="(999) 955 2316">
                                </div>

                            </div> --}}

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
                                                        NOMBRE</th>
                                                    <th scope="col"
                                                        class="px-3 py-3.5 text-left text-sm font-semibold text-gray-500">
                                                        VIAJE</th>
                                                    <th scope="col"
                                                        class="px-3 py-3.5 text-left text-sm font-semibold text-gray-500">
                                                        CORREO</th>
                                                    <th scope="col"
                                                        class="px-3 py-3.5 text-left text-sm font-semibold text-gray-500">
                                                        ESTATUS</th>
                                                    <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                                        <span class="sr-only">Ver más</span>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-200 bg-white">
                                                @foreach ($clients as $client)
                                                    <tr>
                                                        <td
                                                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                            {{ $client->name }}</td>
                                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                            Mérida - Cancún</td>
                                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                            jane@ejemplo.com</td>
                                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                            Cotización enviada</td>
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
                                    <div class="mt-2">
                                        {{ $clients->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /End replace -->
            </div>
        </div>


        {{-- agregar cliente --}}

        @if ($addClient)
            <div>
                <div class="fixed inset-0 bg-gray-400 bg-opacity-75"></div>
                <!-- agregar cliente -->
                <div class="relative z-10 " aria-labelledby="slide-over-title" role="dialog" aria-modal="true">
                    <!-- Background backdrop, show/hide based on slide-over state. -->
                    <div class="fixed inset-0"></div>

                    <div class="fixed inset-0 overflow-hidden">
                        <div class="absolute inset-0 overflow-hidden">
                            <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10">
                                <div class="pointer-events-auto w-screen max-w-md">
                                    <div class="flex h-full flex-col overflow-y-scroll bg-white shadow-xl">
                                        <div class="bg-blue-900 py-6 px-4 sm:px-6">
                                            <div class="flex items-center justify-between">
                                                <h2 class="text-lg font-medium text-white" id="slide-over-title">Nuevo
                                                    cliente</h2>
                                                <div class="ml-3 flex h-7 items-center">
                                                    <button wire:click="$emitUp('closeAddClient')"
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
                                                    los campos
                                                    solicitados</p>
                                            </div>
                                        </div>
                                        <div class="relative flex-1 py-6 px-4 sm:px-6 overflow-auto">
                                            <!-- Replace with your content -->
                                            <div class="absolute inset-0 py-6 px-4 sm:px-6 bg-white">
                                                <div class="pt-1">
                                                    <div class=" grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                                                        <div class="sm:col-span-3">
                                                            <label for="first-name"
                                                                class="block text-sm font-medium text-gray-700">Nombre</label>
                                                            <div class="mt-1">
                                                                <input type="text" wire:model="name"
                                                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                            </div>
                                                        </div>

                                                        <div class="sm:col-span-3">
                                                            <label for="last-name"
                                                                class="block text-sm font-medium text-gray-700">Apellido</label>
                                                            <div class="mt-1">
                                                                <input type="text" wire:model="last_name"
                                                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                            </div>
                                                        </div>

                                                        <div class="sm:col-span-3">
                                                            <label for="email"
                                                                class="block text-sm font-medium text-gray-700">Email</label>
                                                            <div class="mt-1">
                                                                <input type="email" wire:model="email"
                                                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                    placeholder="you@example.com"
                                                                    aria-describedby="email-description">
                                                            </div>
                                                        </div>
                                                        <div class="sm:col-span-3">
                                                            <label for="country"
                                                                class="block text-sm font-medium text-gray-700">Ciudad</label>
                                                            <div class="mt-1">
                                                                <input type="text" wire:model="city"
                                                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                            </div>
                                                        </div>

                                                        <div class="sm:col-span-6">
                                                            <label for="password"
                                                                class="block text-sm font-medium text-gray-700">Contraseña</label>
                                                            <div class="mt-1">
                                                                <input type="text" wire:model="password"
                                                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                            </div>
                                                        </div>


                                                        <div class="sm:col-span-6">
                                                            <label for="phone-number"
                                                                class="block text-sm font-medium text-gray-700">Teléfono</label>
                                                            <div class="relative mt-1 rounded-md shadow-sm">
                                                                <input type="text" wire:model="phone"
                                                                    class="block w-full rounded-md border-gray-300 pl-3 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                    placeholder="+52 (999) 387-6543">
                                                            </div>
                                                        </div>

                                                        <div class="sm:col-span-6">
                                                            <label for="empresa"
                                                                class="block text-sm font-medium text-gray-700">Empresa</label>
                                                            <div class="relative mt-1 rounded-md shadow-sm">
                                                                <input type="text" wire:model="company"
                                                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                            </div>
                                                        </div>

                                                        <div class="sm:col-span-6">
                                                            <label for="rfc"
                                                                class="block text-sm font-medium text-gray-700">RFC</label>
                                                            <div class="relative mt-1 rounded-md shadow-sm">
                                                                <input type="text" wire:model="rfc"
                                                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                            </div>
                                                        </div>

                                                        <div class="sm:col-span-6">
                                                            <label for="rfc"
                                                                class="block text-sm font-medium text-gray-700">Ciudad</label>
                                                            <div class="relative mt-1 rounded-md shadow-sm">
                                                                <input type="text"
                                                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                            </div>
                                                        </div>

                                                        <div class="flex sm:col-span-6 mt-2">
                                                            <label for="rfc"
                                                                class="block text-sm font-medium text-gray-700 pr-5 my-auto">Agregar
                                                                CIF</label>
                                                            <button type="button"
                                                                class="inline-flex items-center rounded-md border border-transparent bg-lime-350 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                                                <!-- Heroicon name: mini/plus -->
                                                                <svg class="-ml-1 mr-2 h-5 w-5"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 20 20" fill="currentColor"
                                                                    aria-hidden="true">
                                                                    <path
                                                                        d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                                                                </svg>
                                                                Cargar archivo
                                                            </button>
                                                        </div>
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
                                            <button wire:click="$emitUp('closeAddClient')"
                                                class="rounded-md border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Cancelar</button>
                                            <button wire:click="addClient()"
                                                class="ml-4 inline-flex justify-center rounded-md border border-transparent bg-blue-900 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Guardar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin agregar cliente -->

                {{-- Cliente guardado exitosamente --}}
                @if ($modal_added)
                    <div>
                        <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

                            <div class="fixed inset-0 z-10 overflow-y-auto">
                                <div
                                    class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                                    <div
                                        class="relative transform overflow-hidden rounded-lg bg-white px-4 pt-5 pb-4 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-sm sm:p-6">
                                        <div>
                                            <div
                                                class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-green-100">
                                                <!-- Heroicon name: outline/check -->
                                                <svg class="h-6 w-6 text-green-600" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M4.5 12.75l6 6 9-13.5" />
                                                </svg>
                                            </div>
                                            <div class="mt-3 text-center sm:mt-5">
                                                <h3 class="text-lg font-medium leading-6 text-gray-900"
                                                    id="modal-title">Cliente
                                                    guardado
                                                </h3>
                                                <div class="mt-2">
                                                    <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet
                                                        consectetur
                                                        adipisicing
                                                        elit. Consequatur amet labore.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-5 sm:mt-6">
                                            <button wire:click="showDetailsClient({{ $client }})"
                                                class="inline-flex w-full justify-center rounded-md border border-transparent bg-blue-900 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:text-sm">Ir
                                                a detalle de cliente</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                @endif
            </div>
        @endif


        {{-- contenido Ver más --}}

        @if ($detailsClient)
            <div class="h-screen">
                <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 md:px-8">
                    <div class="grid grid-cols-10 gap-3">

                        <div class="col-span-10 md:col-span-10 lg:col-span-6">
                            <div class="lg:flex lg:items-center lg:justify-between ">
                                <div class="md:pl-5 lg:pl-8 min-w-0 flex-1">
                                    <h2
                                        class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">
                                        Jane Cooper</h2>
                                    <div class="mt-1 flex flex-col sm:mt-0 sm:flex-row sm:flex-wrap sm:space-x-6">

                                        <div class="mt-2 flex items-center text-sm text-gray-500">
                                            <!-- Heroicon name: mini/calendar -->
                                            <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
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
                                        <button type="button"
                                            class="inline-flex items-center rounded-md border border-transparent bg-blue-900 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                            <!-- Heroicon name: mini/check -->
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="w-4 h-4 mr-1">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                            </svg>
                                            Editar cliente
                                        </button>
                                    </span>

                                </div>
                            </div>
                            <div class="md:pl-5 lg:pl-8 pt-4 min-w-0">
                                <div class="grid grid-cols-10 gap-4">
                                    <div class="col-span-6">
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
                                                            class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Clientes</a>
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
                                                            aria-current="page">Detalle Cliente</a>
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
                                    <div class="py-50 px-4 sm:px-6 lg:px-8">
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
                                                                        Jane Cooper</td>

                                                                </tr>
                                                                <tr class="bg-white">
                                                                    <td
                                                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                                        Teléfono</td>
                                                                    <td
                                                                        class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                        999 955 2316</td>

                                                                </tr>
                                                                <tr>
                                                                    <td
                                                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                                        Correo</td>
                                                                    <td
                                                                        class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                        janecooper@example.com</td>

                                                                </tr>
                                                                <tr class="bg-white">
                                                                    <td
                                                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                                        Contraseña</td>
                                                                    <td
                                                                        class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                        ***</td>

                                                                </tr>
                                                                <tr>
                                                                    <td
                                                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                                        Viajes</td>
                                                                    <td
                                                                        class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                        Mérida - Cancún</td>

                                                                </tr>
                                                                <tr class="bg-white">
                                                                    <td
                                                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                                        Ciudad</td>
                                                                    <td
                                                                        class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                        Mérida</td>

                                                                </tr>
                                                                <tr>
                                                                    <td
                                                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                                        Observaciones</td>
                                                                    <td
                                                                        class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                        Personas con discapacidad</td>

                                                                </tr>
                                                                <tr class="bg-white">
                                                                    <td
                                                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                                        Contrato</td>
                                                                    <td
                                                                        class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                        Descargar</td>

                                                                </tr>
                                                                <tr>
                                                                    <td
                                                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                                        CIF</td>
                                                                    <td
                                                                        class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                        Cargar</td>

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


                        <div
                            class="col-span-10 md:col-span-10 lg:col-span-4  md:px-5 lg:px-2 flex-1 py-q px-4 sm:px-6 lg:h-5/6">
                            <div class="relative sm:h-48 md:h-48 lg:h-full">
                                <div>
                                    <div
                                        class="absolute bg-white shadow sm:rounded-md sm:h-48 md:h-48 lg:h-full flex-col overflow-y-auto w-full">
                                        <div>
                                            @livewire('budget', key('budget'))
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sm:mt-6">
                                <button type="button"
                                    class="inline-flex w-full content-end justify-center rounded-md border border-transparent bg-blue-900 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:text-sm">Nuevo
                                    prespuesto</button>
                            </div>
                        </div>

                    </div>
                    {{-- Presupuesto --}}
                    <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8 hidden">
                        <div class="py-42 px-4 sm:px-6 lg:px-8">
                            @livewire('createbudget', key('createbudget'))
                        </div>
                    </div>
                    {{-- Crear voucher --}}
                    <div class="hidden">
                        @livewire('voucher', key('voucher'))
                    </div>
                </div>
            </div>
        @endif

        {{-- Eliminar --}}
        {{-- <div class="hidden">
            @livewire('eliminar', key('eliminar'))
        </div> --}}

    </main>
</div>
