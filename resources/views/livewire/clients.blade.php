<div class="flex flex-1 flex-col md:pl-64">

    <main class="h-full ">
        {{-- Panel clientes --}}

        @if ($tableClients)
            <div class="py-6">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8">
                    <div class="lg:flex lg:items-center lg:justify-between">
                        <div class="md:pl-5 lg:pl-8 min-w-0 flex-1">
                            <h2
                                class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">
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
                                    Fecha de hoy:<span class="pl-1"> {{ $date }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 flex lg:mt-0 lg:ml-4">
                            <span class="md:pl-3 lg:pr-8 sm:ml-3">
                                <button type="button" wire:click='$set("addClient",true)'
                                    class="inline-flex items-center rounded-md border border-transparent bg-blue-900 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                    <!-- Heroicon name: mini/check -->
                                    <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
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
                                    <label for="num"
                                        class="block text-sm font-medium text-gray-700">Mostrar</label>
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
                                <div class="col-span-2">
                                    <label class="block text-sm font-medium text-gray-700">Correo</label>
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
                                        <input type="text" wire:model="email_search"
                                            class="block w-full rounded-md border-gray-300 pl-10 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="you@example.com">
                                    </div>
                                </div>

                                <div class="col-span-2">
                                    <label for="tel"
                                        class="block text-sm font-medium text-gray-700">Teléfono</label>
                                    <div class="relative mt-1 rounded-md shadow-sm">
                                        <input type="text" wire:model="phone_search"
                                            class="block w-full rounded-md border-gray-300 pl-4 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="(999) 955 2316">
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
                                                            APELLIDOS</th>
                                                        <th scope="col"
                                                            class="px-3 py-3.5 text-left text-sm font-semibold text-gray-500">
                                                            TELEFONO</th>
                                                        <th scope="col"
                                                            class="px-3 py-3.5 text-left text-sm font-semibold text-gray-500">
                                                            CORREO</th>
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
                                                            <td
                                                                class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                {{ $client->last_name }}</td>
                                                            <td
                                                                class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                {{ $client->phone }}</td>
                                                            <td
                                                                class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                {{ $client->email }}</td>
                                                            <td
                                                                class="relative whitespace-nowrap py-4 pl-3 pr-4 text-center text-sm font-medium sm:pr-6">
                                                                <div>
                                                                    <a wire:click="showDetailsClient({{ $client }})"
                                                                        class="text-blue-900 hover:text-indigo-900 cursor-pointer">Ver
                                                                        más</a>
                                                                </div>
                                                                <div>
                                                                    <a wire:click="deletingClient({{ $client }})"
                                                                        class="text-red-500 hover:text-red-800 cursor-pointer">Eliminar</a>

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
            <div>
                @if ($modalDeleting)
                    <div>
                        <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
                            <div class="fixed inset-0 z-10 overflow-y-auto">
                                <div
                                    class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">

                                    <div
                                        class="relative transform overflow-hidden rounded-lg bg-white px-4 pt-5 pb-4 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg sm:p-6">
                                        <div class="absolute top-0 right-0 hidden pt-4 pr-4 sm:block">
                                            <button wire:click="$set('modalDeleting',false)"
                                                class="rounded-md bg-white text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                                <span class="sr-only">Close</span>
                                                <!-- Heroicon name: outline/x-mark -->
                                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </div>
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
                                                <h3 class="text-lg font-medium leading-6 text-gray-900"
                                                    id="modal-title">¿Estás seguro que
                                                    quieres eliminar?</h3>
                                                <div class="mt-2">
                                                    <p class="text-sm text-gray-500">Esta opción borrará la información
                                                        del sistema. Esta
                                                        acción no se puede revertir.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">
                                            <button wire:click='deleteClient({{ $client }})'
                                                class="inline-flex w-full justify-center rounded-md border border-transparent bg-red-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 sm:ml-3 sm:w-auto sm:text-sm">Eliminar</button>
                                            <button wire:click="$set('modalDeleting',false)"
                                                class="mt-3 inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-base font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:mt-0 sm:w-auto sm:text-sm">Cancelar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                @endif
            </div>
        @endif
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
                                                                @error('name')
                                                                    <span
                                                                        class="text-red-600 text-xs ">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="sm:col-span-3">
                                                            <label for="last-name"
                                                                class="block text-sm font-medium text-gray-700">Apellido</label>
                                                            <div class="mt-1">
                                                                <input type="text" wire:model="last_name"
                                                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                                @error('last_name')
                                                                    <span
                                                                        class="text-red-600 text-xs ">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="sm:col-span-3">
                                                            <label
                                                                class="block text-sm font-medium text-gray-700">Email</label>
                                                            <div class="mt-1">
                                                                <input type="email" wire:model="email"
                                                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                    placeholder="you@example.com"
                                                                    aria-describedby="email-description">
                                                                @error('email')
                                                                    <span
                                                                        class="text-red-600 text-xs ">{{ $message }}</span>
                                                                @enderror
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
                                                                <input type="password" wire:model="password"
                                                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                                @error('password')
                                                                    <span
                                                                        class="text-red-600 text-xs ">{{ $message }}</span>
                                                                @enderror
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
                                            <button wire:click="showDetailsClient({{ $client->id }})"
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
                                        {{ $client->name }}</h2>
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
                                            Fecha de hoy:<span class="pl-1"> {{ $date }}</span>
                                        </div>
                                    </div>

                                </div>
                                <div class="mt-5 flex lg:mt-0 lg:ml-4">

                                    <span class="md:pl-3 lg:pr-8 sm:ml-3">
                                        @if ($editing)
                                            <button type="button" wire:click="updateClient"
                                                class="inline-flex items-center rounded-md border border-transparent bg-orange-400 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-lime-350 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                                <!-- Heroicon name: mini/check -->
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-4 h-4 mr-1">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                </svg>
                                                Actualizar cliente
                                            </button>
                                        @else
                                            <button type="button" wire:click="editClient"
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
                                        @endif
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

                                                <li class="flex" wire:click="navBar(1)">
                                                    <div class="flex items-center cursor-pointer">
                                                        <svg class="h-full w-6 flex-shrink-0 text-gray-200"
                                                            viewBox="0 0 24 44" preserveAspectRatio="none"
                                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                                            aria-hidden="true">
                                                            <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
                                                        </svg>
                                                        <a
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
                                                        <a class="ml-4 bg- text-sm font-medium text-gray-500 underline  hover:text-gray-700"
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
                                                        @if ($editing)
                                                            <table class="min-w-full divide-y divide-gray-300">
                                                                <tbody class="divide-y divide-gray-100  bg-gray-50">
                                                                    <tr>
                                                                        <td
                                                                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                                            Nombre</td>
                                                                        <td
                                                                            class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                            <x-jet-input type="text"
                                                                                wire:model="formEdit.name" />
                                                                        </td>

                                                                    </tr>
                                                                    <tr class="bg-white">
                                                                        <td
                                                                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                                            Teléfono</td>
                                                                        <td
                                                                            class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                            <x-jet-input type="text"
                                                                                wire:model="formEdit.phone" />
                                                                        </td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td
                                                                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                                            Correo</td>
                                                                        <td
                                                                            class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                            <x-jet-input type="text"
                                                                                wire:model="formEdit.email" />
                                                                        </td>

                                                                    </tr>
                                                                    <tr class="bg-white">
                                                                        <td
                                                                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                                            Contraseña</td>
                                                                        <td
                                                                            class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                            <x-jet-input type="password"
                                                                                wire:model="formEdit.password" />
                                                                        </td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td
                                                                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                                            Empresa</td>
                                                                        <td
                                                                            class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                            <x-jet-input type="text"
                                                                                wire:model="formEdit.company" />
                                                                        </td>

                                                                    </tr>
                                                                    <tr class="bg-white">
                                                                        <td
                                                                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                                            Ciudad</td>
                                                                        <td
                                                                            class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                            <x-jet-input type="text"
                                                                                wire:model="formEdit.city" />
                                                                        </td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td
                                                                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                                            Observaciones</td>
                                                                        <td
                                                                            class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                            <x-jet-input type="text"
                                                                                wire:model="formEdit.comment" />
                                                                        </td>
                                                                    </tr>
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
                                                        @else
                                                            <table class="min-w-full divide-y divide-gray-300">
                                                                <tbody class="divide-y divide-gray-100  bg-gray-50">
                                                                    <tr>
                                                                        <td
                                                                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                                            Nombre</td>
                                                                        <td
                                                                            class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                            {{ $client->name }}</td>

                                                                    </tr>
                                                                    <tr class="bg-white">
                                                                        <td
                                                                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                                            Teléfono</td>
                                                                        <td
                                                                            class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                            {{ $client->phone }}</td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td
                                                                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                                            Correo</td>
                                                                        <td
                                                                            class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                            {{ $client->email }}</td>

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
                                                                            Empresa</td>
                                                                        <td
                                                                            class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                            {{ $client->company }}
                                                                        </td>

                                                                    </tr>
                                                                    <tr class="bg-white">
                                                                        <td
                                                                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                                            Ciudad</td>
                                                                        <td
                                                                            class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                            {{ $client->city }}</td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td
                                                                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                                            Observaciones</td>
                                                                        <td
                                                                            class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                            {{ $client->comment }}</td>

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
                                                        @endif
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
                                            <ul role="list" class="divide-y divide-gray-200">
                                                @foreach ($budgets as $budget)
                                                    <li>
                                                        <a href="#" class="block hover:bg-gray-50">
                                                            <div class="px-4 py-4 sm:px-6">
                                                                <div class="flex items-center justify-between">
                                                                    <p
                                                                        class="truncate text-sm font-medium text-blue-900">
                                                                        Folio: <span
                                                                            class="mx-1">{{ $budget->id }}</span>
                                                                    </p>
                                                                    <div class="ml-2 flex flex-shrink-0">
                                                                        @switch($budget->status)
                                                                            @case(0)
                                                                                <p
                                                                                    class="inline-flex rounded-full bg-yellow-100 px-2 text-xs font-semibold leading-5 text-yellow-800">
                                                                                    Presupuesto sin pago realizado</p>
                                                                                <svg wire:click="editBudget({{ $budget }})"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    fill="none" viewBox="0 0 24 24"
                                                                                    stroke-width="1.5" stroke="currentColor"
                                                                                    class="w-4 h-4 mr-1">
                                                                                    <path stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                                                </svg>
                                                                            @break

                                                                            @case(1)
                                                                                <p
                                                                                    class="inline-flex rounded-full bg-orange-100 px-2 text-xs font-semibold leading-5 text-orange-800">
                                                                                    Presupuesto con 1 o más pagos realizados</p>
                                                                            @break

                                                                            @default
                                                                        @endswitch
                                                                    </div>
                                                                </div>
                                                                <div class="mt-2 sm:flex sm:justify-between">

                                                                    <div class="sm:flex">
                                                                        <p
                                                                            class="flex items-center text-sm text-gray-500">
                                                                            <!-- Heroicon name: mini/users -->
                                                                            <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 20 20"
                                                                                fill="currentColor"
                                                                                aria-hidden="true">
                                                                                <path
                                                                                    d="M7 8a3 3 0 100-6 3 3 0 000 6zM14.5 9a2.5 2.5 0 100-5 2.5 2.5 0 000 5zM1.615 16.428a1.224 1.224 0 01-.569-1.175 6.002 6.002 0 0111.908 0c.058.467-.172.92-.57 1.174A9.953 9.953 0 017 18a9.953 9.953 0 01-5.385-1.572zM14.5 16h-.106c.07-.297.088-.611.048-.933a7.47 7.47 0 00-1.588-3.755 4.502 4.502 0 015.874 2.636.818.818 0 01-.36.98A7.465 7.465 0 0114.5 16z" />
                                                                            </svg>
                                                                            <span>{{ $budget->totalPax() }}</span>
                                                                            pax
                                                                        </p>
                                                                    </div>

                                                                </div>

                                                                <div class="mt-2 sm:flex sm:justify-between">
                                                                    <div class="sm:flex">
                                                                        <p
                                                                            class="flex items-center text-sm text-gray-500">
                                                                            <!-- Heroicon name: mini/users -->
                                                                            <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 20 20"
                                                                                fill="currentColor"
                                                                                aria-hidden="true">
                                                                                <path fill-rule="evenodd"
                                                                                    d="M9.69 18.933l.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 00.281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 14.988 17 12.493 17 9A7 7 0 103 9c0 3.492 1.698 5.988 3.355 7.584a13.731 13.731 0 002.273 1.765 11.842 11.842 0 00.976.544l.062.029.018.008.006.003zM10 11.25a2.25 2.25 0 100-4.5 2.25 2.25 0 000 4.5z"
                                                                                    clip-rule="evenodd" />
                                                                            </svg>
                                                                            {{ $budget->name }}
                                                                        </p>
                                                                    </div>
                                                                </div>

                                                                <div class="mt-2 sm:flex sm:justify-between">
                                                                    <div class="sm:flex">
                                                                        <p
                                                                            class="flex items-center text-sm text-gray-500">
                                                                            <!-- Heroicon name: mini/users -->
                                                                            <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 20 20"
                                                                                fill="currentColor"
                                                                                aria-hidden="true">
                                                                                <path fill-rule="evenodd"
                                                                                    d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"
                                                                                    clip-rule="evenodd" />
                                                                            </svg>
                                                                            Viajan el <time datetime="2022-15-09"
                                                                                class="pl-1">{{ $budget->date }}
                                                                            </time>
                                                                        </p>
                                                                    </div>
                                                                </div>

                                                                <div class="mt-2 sm:flex sm:justify-between">
                                                                    <div class="sm:flex">
                                                                        <p
                                                                            class="flex items-center text-sm text-gray-500">
                                                                            <!-- Heroicon name: mini/users -->
                                                                            <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 20 20"
                                                                                fill="currentColor"
                                                                                aria-hidden="true">
                                                                                <path fill-rule="evenodd"
                                                                                    d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"
                                                                                    clip-rule="evenodd" />
                                                                            </svg>
                                                                            Total: <time datetime="2022-15-09"
                                                                                class="pl-1">
                                                                                @if ($budget->enable_tax)
                                                                                    ${{ number_format($budget->totalWithOutTax(), 2) }}
                                                                                @else
                                                                                    ${{ number_format($budget->totalWithTax(), 2) }}
                                                                                @endif
                                                                            </time>
                                                                        </p>
                                                                    </div>
                                                                </div>

                                                                <div class="mt-2 sm:flex sm:justify-between">
                                                                    <div class="flex items-center justify-between">
                                                                        {{--  <button type="button"
                                                                            class="inline-flex items-center rounded-md border border-transparent bg-blue-900 px-3 py-2 text-sm font-medium leading-4 text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                                                            <!-- Heroicon name: mini/envelope -->
                                                                            Descargar Recibo
                                                                        </button --}}
                                                                        @php
                                                                            $flat = 0;
                                                                            if ($budget->payment) {
                                                                                $splits = $budget->payment->splits;
                                                                                foreach ($splits as $split) {
                                                                                    if ($split->status != 1) {
                                                                                        $flat = $flat + 1;
                                                                                    }
                                                                                }
                                                                            }
                                                                        @endphp
                                                                        @if ($flat >= 1 && $budget->status == 1)
                                                                            <div class="ml-2 flex flex-shrink-0">
                                                                                <button type="button"
                                                                                    wire:click="createVoucher({{ $budget }})"
                                                                                    class="cursor-pointer inline-flex items-center rounded-md border border-transparent bg-lime-350 px-3 py-2 text-sm font-medium leading-4 text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                                                                    <!-- Heroicon name: mini/envelope -->
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        fill="none"
                                                                                        viewBox="0 0 24 24"
                                                                                        stroke-width="1.5"
                                                                                        stroke="currentColor"
                                                                                        class="-ml-0.5 mr-2 h-4 w-4">
                                                                                        <path stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                            d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
                                                                                    </svg>
                                                                                    Crear Voucher
                                                                                </button>
                                                                            </div>
                                                                        @else
                                                                            <button type="button"
                                                                                wire:click="downloadReceipt({{ $budget }})"
                                                                                class="cursor-pointer mx-2 inline-flex items-center rounded-md border border-transparent bg-gray-400 px-3 py-2 text-sm font-medium leading-4 text-white shadow-sm hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                                                                <!-- Heroicon name: mini/envelope -->
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    fill="none" viewBox="0 0 24 24"
                                                                                    stroke-width="1.5"
                                                                                    stroke="currentColor"
                                                                                    class="-ml-0.5 mr-2 h-4 w-4">
                                                                                    <path stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
                                                                                </svg>
                                                                                Descargar presupuesto
                                                                                {{ $budget->id }}
                                                                            </button>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sm:mt-6">
                                <button wire:click="modalCreateBudget()"
                                    class="inline-flex w-full content-end justify-center rounded-md border border-transparent bg-blue-900 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:text-sm">Nuevo
                                    prespuesto</button>
                            </div>
                            <x-jet-dialog-modal wire:model="modal_create_budget">
                                <x-slot name="title">
                                    Crear nuevo presupuesto
                                </x-slot>
                                <x-slot name="content">
                                    <div>
                                        <x-jet-label value="Nombre descriptivo" />
                                        <x-jet-input class="w-full" type="text" wire:model='budget_name'
                                            placeholder="Merida - Cancún" />
                                        <div>
                                            @error('budget_name')
                                                <span class="text-sm text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div>
                                        <x-jet-label value="Fecha" />
                                        <x-jet-input class="w-full" type="date" wire:model='budget_date' />
                                        <div>
                                            @error('budget_date')
                                                <span class="text-sm text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </x-slot>
                                <x-slot name="footer">
                                    <x-jet-danger-button class="mx-2"
                                        wire:click="$set('modal_create_budget',false)">Cancelar</x-jet-danger-button>
                                    <x-jet-button wire:click="createBudget">Siguiente</x-jet-button>
                                </x-slot>
                            </x-jet-dialog-modal>
                        </div>
                    </div>
                    {{-- Presupuesto --}}
                </div>
            </div>
        @endif

        @if ($createBudget)

            <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8">
                <div class="py-42 px-4 sm:px-6 lg:px-8">
                    <div class="pt-6">
                        <div class="pb-4 min-w-0 flex-1">
                            <h2
                                class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">
                                Crear presupuesto</h2>
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
                                    Fecha de hoy:<span class="pl-1"> {{ $date }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-10 gap-2">
                            <div class="col-span-4">
                                <nav class="flex" aria-label="Breadcrumb">
                                    <ol role="list" class="flex space-x-4 rounded-md bg-white px-6 shadow">
                                        <li class="flex">
                                            <div class="flex items-center">
                                                <a wire:click="goHome" class="text-gray-400 hover:text-gray-500">
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

                                        <li class="flex cursor-pointer" wire:click="navBar(1)">
                                            <div class="flex items-center">
                                                <svg class="h-full w-6 flex-shrink-0 text-gray-200"
                                                    viewBox="0 0 24 44" preserveAspectRatio="none"
                                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                                    aria-hidden="true">
                                                    <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
                                                </svg>
                                                <a
                                                    class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Clientes</a>
                                            </div>
                                        </li>

                                        <li class="flex cursor-pointer" wire:click="navBar(2)">
                                            <div class="flex items-center">
                                                <svg class="h-full w-6 flex-shrink-0 text-gray-200"
                                                    viewBox="0 0 24 44" preserveAspectRatio="none"
                                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                                    aria-hidden="true">
                                                    <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
                                                </svg>
                                                <a class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Detalle
                                                    cliente</a>
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
                                                <a
                                                    class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700 underline">Crear
                                                    presupuesto</a>
                                            </div>
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                            @if ($budget->status != 0)
                            @else
                                <div class="col-span-6 flex justify-end space-x-2">
                                    <button type="button" wire:click="$set('modal_create_vehicle',true)"
                                        class="inline-flex mx-2 items-center rounded-md border border-transparent bg-blue-900 px-2 py-1.5 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                        <!-- Heroicon name: mini/check -->
                                        <svg class="-ml-1 mr-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        Agregar un vehiculo
                                    </button>
                                    @if ($budget->enable_tax)
                                        <button type="button" wire:click="changeEnableTax('0')"
                                            class="inline-flex mx-2 items-center rounded-md border border-transparent bg-orange-500 px-2 py-1.5 text-sm font-medium text-white shadow-sm hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">
                                            <!-- Heroicon name: mini/check -->
                                            <svg class="-ml-1 mr-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            Descartar impuestos
                                        </button>
                                    @else
                                        <button type="button" wire:click="changeEnableTax('1')"
                                            class="inline-flex mx-2 items-center rounded-md border border-transparent bg-green-500 px-2 py-1.5 text-sm font-medium text-white shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                                            <!-- Heroicon name: mini/check -->
                                            <svg class="-ml-1 mr-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            Agregar impuestos
                                        </button>
                                    @endif
                                    @if (!$budget->discount)
                                        <button type="button" wire:click="$set('modal_create_discount',true)"
                                            class="inline-flex mx-2 items-center rounded-md border border-transparent bg-pink-500 px-2 py-1.5 text-sm font-medium text-white shadow-sm hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2">
                                            <!-- Heroicon name: mini/check -->
                                            <svg class="-ml-1 mr-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            Aplicar descuento
                                        </button>
                                    @else
                                        <button type="button" wire:click="editDiscount()"
                                            class="inline-flex mx-2 items-center rounded-md border border-transparent bg-pink-500 px-2 py-1.5 text-sm font-medium text-white shadow-sm hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2">
                                            <!-- Heroicon name: mini/check -->
                                            <svg class="-ml-1 mr-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            Modificar descuento
                                        </button>
                                    @endif
                            @endif
                            <x-jet-dialog-modal wire:model="modal_create_vehicle">
                                <x-slot name="title">
                                    Agregar unidad al presupuesto
                                </x-slot>
                                <x-slot name="content">
                                    <div>
                                        <x-jet-label value="Tipo de Unica" />
                                        <select
                                            class="block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            wire:model="vehicle_type">
                                            <option value="1">Autobus</option>
                                            <option value="2">Camioneta</option>
                                        </select>
                                    </div>
                                    <div>
                                        <x-jet-label value="Pax" />
                                        <x-jet-input
                                            class="block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            type="number" wire:model='vehicle_pax' />
                                    </div>
                                </x-slot>
                                <x-slot name="footer">
                                    <x-jet-danger-button class="mx-2"
                                        wire:click="$set('modal_create_vehicle',false)">Cancelar
                                    </x-jet-danger-button>
                                    <x-jet-button wire:click="createVehicle">Siguiente</x-jet-button>
                                </x-slot>
                            </x-jet-dialog-modal>
                            <x-jet-dialog-modal wire:model="modal_edit_vehicle">
                                <x-slot name="title">
                                    Editar vehiculo
                                </x-slot>
                                <x-slot name="content">
                                    <div>
                                        <x-jet-label value="Tipo de Unica" />
                                        <select
                                            class="block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            wire:model="editVehicleForm.vehicle_type">
                                            <option value="1">Autobus</option>
                                            <option value="2">Camioneta</option>
                                        </select>
                                    </div>
                                    <div>
                                        <x-jet-label value="Pax" />
                                        <x-jet-input
                                            class="block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            type="number" wire:model="editVehicleForm.vehicle_pax" />
                                    </div>
                                </x-slot>
                                <x-slot name="footer">
                                    <x-jet-danger-button class="mx-2" wire:click="$set('modal_edit_vehicle',false)">
                                        Cancelar
                                    </x-jet-danger-button>
                                    <x-jet-button wire:click="updateVehicle">Actualizar</x-jet-button>
                                </x-slot>
                            </x-jet-dialog-modal>
                            <x-jet-confirmation-modal wire:model="modal_confirm_vehicle_delete">
                                <x-slot name="title">
                                    Eliminar Vehiculo
                                </x-slot>

                                <x-slot name="content">
                                    Estas seguro de que quieres eliminar el vehiculo y todos sus conceptos? estos
                                    datos seran eliminado de forma permanente.
                                </x-slot>

                                <x-slot name="footer">
                                    <x-jet-secondary-button wire:click="$toggle('modal_confirm_vehicle_delete')"
                                        wire:loading.attr="disabled">
                                        No, cancelar
                                    </x-jet-secondary-button>

                                    <x-jet-danger-button class="ml-2" wire:click="deleteVehicle"
                                        wire:loading.attr="disabled">
                                        Sí, borrar Vehiculo
                                    </x-jet-danger-button>
                                </x-slot>
                            </x-jet-confirmation-modal>
                            <x-jet-dialog-modal wire:model="modal_create_discount">
                                <x-slot name="title">
                                    Agregar descuento
                                </x-slot>
                                <x-slot name="content">
                                    <div>
                                        <x-jet-label value="Porcentaje de descuento" />
                                        <x-jet-input
                                            class="block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            type="number" wire:model='amount' min="0" max="100" />
                                    </div>
                                </x-slot>
                                <x-slot name="footer">
                                    <x-jet-danger-button class="mx-2"
                                        wire:click="$set('modal_create_discount',false)">Cancelar
                                    </x-jet-danger-button>
                                    <x-jet-button wire:click="createDiscount()">Crear</x-jet-button>
                                </x-slot>
                            </x-jet-dialog-modal>
                            <x-jet-dialog-modal wire:model="modal_edit_discount">
                                <x-slot name="title">
                                    Editar descuento
                                </x-slot>
                                <x-slot name="content">
                                    <div>
                                        <x-jet-label value="Cantidad" />
                                        <x-jet-input
                                            class="block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            type="number" wire:model='editDiscountForm.amount' />
                                    </div>
                                </x-slot>
                                <x-slot name="footer">
                                    <x-jet-danger-button class="mx-2"
                                        wire:click="$set('modal_edit_discount',false)">Cancelar
                                    </x-jet-danger-button>
                                    <x-jet-button wire:click="updateDiscount()">Actualizar</x-jet-button>
                                </x-slot>
                            </x-jet-dialog-modal>
                        </div>
                    </div>
                    <div>
                        <table class="mt-4 min-w-full divide-y divide-gray-300">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-500 sm:pl-6">
                                        Unidad</th>
                                    <th scope="col"
                                        class="px-3 py-3.5 text-left text-sm font-semibold text-gray-500">
                                        Pax</th>
                                    <th scope="col"
                                        class="px-3 py-3.5 text-left text-sm font-semibold text-gray-500">
                                        Conceptos
                                    </th>
                                    <th scope="col"
                                        class="px-3 py-3.5 text-left text-sm font-semibold text-gray-500">

                                    </th>
                                    <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                        <span class="sr-only">editar</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white">
                                @foreach ($vehicles as $vehicle)
                                    <tr>
                                        <td
                                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                            @if ($vehicle->type == 1)
                                                Autobus
                                            @else
                                                Camioneta
                                            @endif
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            {{ $vehicle->pax }}</td>
                                        @if ($vehicle->concepts->count())
                                            <td colspan="2"
                                                class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                <table class="table-fixed">
                                                    <thead class="bg-gray-50">
                                                        <tr>
                                                            <th scope="col"
                                                                class="w-4/5 py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-500 sm:pl-6">
                                                                Descripcion</th>
                                                            <th scope="col"
                                                                class="w-1/6 px-3 py-3.5 text-left text-sm font-semibold text-gray-500">
                                                                Tarifa Neta</th>
                                                            <th scope="col"
                                                                class="w-2/4 px-3 py-3.5 text-left text-sm font-semibold text-gray-500">
                                                                IVA</th>
                                                            <th scope="col"
                                                                class="w-2/4 px-3 py-3.5 text-left text-sm font-semibold text-gray-500">
                                                                Total</th>
                                                            <th scope="col"
                                                                class="w-2/4 px-3 py-3.5 text-left text-sm font-semibold text-gray-500">
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="divide-y divide-gray-200 bg-white">
                                                        @foreach ($vehicle->concepts as $concept)
                                                            <tr>
                                                                <td
                                                                    class="relative whitespace-nowrap py-4 pl-3 pr-4 text-sm font-medium sm:pr-6">
                                                                    {{ $concept->date }} <br>
                                                                    {{ $concept->description }}</td>
                                                                <td
                                                                    class="relative whitespace-nowrap py-4 pl-3 pr-4 text-sm font-medium sm:pr-6">
                                                                    ${{ number_format($concept->net_rate, 2) }}
                                                                </td>
                                                                <td
                                                                    class="relative whitespace-nowrap py-4 pl-3 pr-4 text-sm font-medium sm:pr-6 @if (!$budget->enable_tax) line-through @endif">
                                                                    ${{ number_format($concept->tax, 2) }}</td>
                                                                <td
                                                                    class="relative whitespace-nowrap py-4 pl-3 pr-4 text-sm font-medium sm:pr-6">
                                                                    ${{ number_format($concept->total, 2) }}</td>
                                                                <td
                                                                    class="relative whitespace-nowrap py-4 pl-3 pr-4 text-sm font-medium sm:pr-6">
                                                                    @if ($budget->status == 0)
                                                                        <div class="flex items-center">
                                                                            <div>
                                                                                <svg wire:click="editConcept({{ $concept }})"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    fill="none" viewBox="0 0 24 24"
                                                                                    stroke-width="1.5"
                                                                                    stroke="currentColor"
                                                                                    class="w-5 h-5 text-blue-500 cursor-pointer">
                                                                                    <path stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                                                </svg>
                                                                            </div>
                                                                            <div>
                                                                                <svg wire:click="deleteConcept({{ $concept }})"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    fill="none" viewBox="0 0 24 24"
                                                                                    stroke-width="1.5"
                                                                                    stroke="currentColor"
                                                                                    class="w-5 h-5 text-red-500 cursor-pointer">
                                                                                    <path stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                                                </svg>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                        <tr>
                                                            <td
                                                                class="relative whitespace-nowrap py-4 pl-3 pr-4 text-sm text-right font-bold sm:pr-6">
                                                                Subtotal</td>
                                                            <td
                                                                class="relative whitespace-nowrap py-4 pl-3 pr-4 text-sm font-bold sm:pr-6">
                                                                ${{ number_format($vehicle->totalWithOutTax(), 2) }}
                                                            </td>
                                                            <td
                                                                class="relative whitespace-nowrap py-4 pl-3 pr-4 text-sm font-bold sm:pr-6 @if (!$budget->enable_tax) line-through @endif">
                                                                ${{ number_format($vehicle->totalTax(), 2) }}
                                                            </td>
                                                            <td
                                                                class="relative whitespace-nowrap py-4 pl-3 pr-4 text-sm font-bold sm:pr-6">
                                                                @if ($budget->enable_tax)
                                                                    ${{ number_format($vehicle->totalWithTax(), 2) }}
                                                                @else
                                                                    ${{ number_format($vehicle->totalWithOutTax(), 2) }}
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        @else
                                            <td colspan="2"
                                                class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                Vehiculo sin conceptos agregados
                                            </td>
                                        @endif
                                        @if ($budget->status != 0)
                                            @if ($vehicle->countVoucher())
                                                <td
                                                    class="relative whitespace-nowrap py-4 pl-3 pr-4 text-center text-sm font-medium sm:pr-6">
                                                    <a wire:click="modalEditVoucher({{ $vehicle }})"
                                                        class="cursor-pointer rounded-md border border-transparent bg-indigo-300 px-3 py-2 text-sm font-medium leading-4 text-white shadow-sm hover:bg-lime-700 focus:outline-none focus:ring-2 focus:ring-lime-500 focus:ring-offset-2">
                                                        Editar voucher</a>
                                                    <a wire:click="downloadVoucher({{ $vehicle }})"
                                                        class="cursor-pointer rounded-md border border-transparent bg-gray-500 px-3 py-2 text-sm font-medium leading-4 text-white shadow-sm hover:bg-lime-700 focus:outline-none focus:ring-2 focus:ring-lime-500 focus:ring-offset-2">
                                                        Descargar voucher</a>
                                                </td>
                                            @else
                                                <td
                                                    class="relative whitespace-nowrap py-4 pl-3 pr-4 text-center text-sm font-medium sm:pr-6">
                                                    <a wire:click="modalCreateVoucher({{ $vehicle }})"
                                                        class="cursor-pointer inline-flex items-center rounded-md border border-transparent bg-lime-350 px-3 py-2 text-sm font-medium leading-4 text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                                        Crear Voucher</a>
                                                </td>
                                            @endif
                                        @else
                                            <td
                                                class="relative whitespace-nowrap py-4 pl-3 pr-4 text-center text-sm font-medium sm:pr-6">
                                                <div>
                                                    <a wire:click="modalCreateConcept({{ $vehicle }})"
                                                        class="text-blue-900 hover:text-indigo-900 cursor-pointer">Agregar
                                                        nuevo concepto</a>
                                                </div>
                                                <div>
                                                    <a wire:click="editVehicle({{ $vehicle }})"
                                                        class="text-orange-500 hover:text-orange-700 cursor-pointer">Editar
                                                        Vehiculo</a>
                                                </div>
                                                <div>
                                                    <a wire:click="copyVehicle({{ $vehicle }})"
                                                        class="text-pink-500 hover:text-pink-700 cursor-pointer">Copiar
                                                        Vehiculo</a>
                                                </div>
                                                <div>
                                                    <a wire:click="modalDeleteVehicle({{ $vehicle }})"
                                                        class="text-red-500 hover:text-red-800 cursor-pointer">Eliminar</a>
                                                </div>
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach
                                @if ($budget->discount)
                                    <tr>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 font-bold">
                                            Descuento</td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"></td>
                                        <td colspan="2" class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            <table class="table-fixed">
                                                <thead>
                                                    <tr>
                                                        <th scope="col"
                                                            class="w-2/4 py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-500 sm:pl-6">
                                                        </th>
                                                        <th scope="col"
                                                            class="w-1/4 px-3 py-3.5 text-left text-sm font-semibold text-gray-500">
                                                        </th>
                                                        <th scope="col"
                                                            class="w-1/4 px-3 py-3.5 text-left text-sm font-semibold text-gray-500">
                                                        </th>
                                                        <th scope="col"
                                                            class="w-1/4 px-3 py-3.5 text-left text-sm font-semibold text-gray-500">
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="divide-y divide-gray-200 bg-white">
                                                    <tr>
                                                        <td
                                                            class="relative whitespace-nowrap py-4 pl-3 pr-4 text-sm text-center font-medium sm:pr-6">
                                                        </td>
                                                        <td
                                                            class="relative whitespace-nowrap py-4 pl-3 pr-4 text-sm text-center font-medium sm:pr-6">
                                                        </td>
                                                        <td
                                                            class="text-red-500 relative whitespace-nowrap py-4 pl-3 pr-4 text-sm text-center font-medium sm:pr-6">
                                                            {{ $budget->totalDiscount() }}
                                                            ({{ number_format($budget->discount->amount * 100) }}%)
                                                        </td>
                                                        <td
                                                            class="relative whitespace-nowrap py-4 pl-3 pr-4 text-sm text-center font-medium sm:pr-6">

                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"></td>
                                    </tr>
                                @endif
                                <tr>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 font-bold">Total
                                        global</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                        {{ $budget->totalPax() }}</td>
                                    <td colspan="2" class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                        <table class="table-fixed">
                                            <thead>
                                                <tr>
                                                    <th scope="col"
                                                        class="w-3/5 py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-500 sm:pl-6">
                                                    </th>
                                                    <th scope="col"
                                                        class="w-1/6 px-3 py-3.5 text-left text-sm font-semibold text-gray-500">
                                                    </th>
                                                    <th scope="col"
                                                        class="w-2/4 px-3 py-3.5 text-left text-sm font-semibold text-gray-500">
                                                    </th>
                                                    <th scope="col"
                                                        class="w-2/4 px-3 py-3.5 text-left text-sm font-semibold text-gray-500">
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-200 bg-white">
                                                <tr>
                                                    <td
                                                        class="relative whitespace-nowrap py-4 pl-3 pr-4 text-sm text-center font-medium sm:pr-6">
                                                    </td>
                                                    <td
                                                        class="relative whitespace-nowrap py-4 pl-3 pr-4 text-sm text-center font-medium sm:pr-6">
                                                        ${{ number_format($budget->totalWithOutTax(), 2) }}
                                                    </td>
                                                    <td
                                                        class="relative whitespace-nowrap py-4 pl-3 pr-4 text-sm text-center font-medium sm:pr-6 @if (!$budget->enable_tax) line-through @endif">
                                                        ${{ number_format($budget->totalTax(), 2) }}</td>
                                                    <td
                                                        class="relative whitespace-nowrap py-4 pl-3 pr-4 text-sm text-center font-medium sm:pr-6">
                                                        @if ($budget->enable_tax)
                                                            ${{ number_format($budget->totalWithTax(), 2) }}
                                                        @else
                                                            ${{ number_format($budget->totalWithOutTax(), 2) }}
                                                        @endif
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"></td>
                                </tr>
                            </tbody>
                        </table>

                        <x-jet-dialog-modal wire:model="modal_create_concept">
                            <x-slot name="title">
                                Crear nuevo concepto
                            </x-slot>
                            <x-slot name="content">
                                <div class="col-span-10 md:col-span-10 lg:col-span-5">
                                    <form>
                                        <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-3">
                                            <div class="sm:col-span-6">
                                                <div>
                                                    <div class="flex justify-between">
                                                        <label
                                                            class="block text-sm font-medium text-gray-700">Fecha</label>
                                                    </div>
                                                    <div class="mt-1">
                                                        <input type="date" wire:model='date'
                                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sm:col-span-6">
                                                <div>
                                                    <div class="flex justify-between">
                                                        <label
                                                            class="block text-sm font-medium text-gray-700">Descripción</label>
                                                    </div>
                                                    <div class="mt-1">
                                                        <textarea row="3" wire:model='description'
                                                            placeholder="Ejemplo: Traslado Aeropuerto Mérida- Hotel Holly (Paseo de Montejo) a las 15:30 hrs"
                                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-3">
                                            <div class="sm:col-span-3">
                                                <div>
                                                    <div class="flex justify-between">
                                                        <label
                                                            class="block text-sm font-medium text-gray-700">KILOMETROS</label>
                                                    </div>
                                                    <div class="mt-1">
                                                        <input type="number" wire:model='km'
                                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                            placeholder="1" aria-describedby="1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sm:col-span-3">
                                                <div>
                                                    <div class="flex justify-between">
                                                        <label class="block text-sm font-medium text-gray-700">Gasto
                                                            Admón</label>
                                                    </div>
                                                    <div class="mt-1">
                                                        <input type="number" wire:model='admin_expense'
                                                            class="block w-full rounded-md text-white placeholder-white bg-gray-400 text border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                            placeholder="1" aria-describedby="1">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-5">
                                            <div class="sm:col-span-2">
                                                <div>
                                                    <div class="flex justify-between">
                                                        <label
                                                            class="block text-sm font-medium text-gray-700 uppercase ">vueltas</label>
                                                    </div>
                                                    <div class="mt-1">
                                                        <input type="number" wire:model='laps'
                                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                            placeholder="1" aria-describedby="1">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="sm:col-span-2">
                                                <div>
                                                    <div class="flex justify-between">
                                                        <label
                                                            class="block text-sm font-medium text-gray-700 uppercase ">rendimiento</label>
                                                    </div>
                                                    <div class="mt-1">
                                                        <input type="number" wire:model='performance'
                                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                            placeholder="1" aria-describedby="1">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="sm:col-span-2">
                                                <div>
                                                    <div class="flex justify-between">
                                                        <label
                                                            class="block text-sm font-medium text-gray-700 uppercase ">litros</label>
                                                    </div>
                                                    <div class="mt-1">
                                                        <input type="number" wire:model='liters' disabled
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
                                                        <input type="number" wire:model='disel_price'
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
                                                        <input type="number" wire:model='disel_cost' disabled
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
                                                        <input type="number" wire:model='salary'
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
                                                        <input type="number" wire:model='per_diem'
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
                                                        <input type="number" wire:model='hotel'
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
                                                        <input type="number" disabled wire:model='tax_burden'
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
                                                        <input type="number" wire:model='flor_rigth'
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
                                                        <input type="number" wire:model='booths'
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
                                                            <span class="text-white sm:text-sm">$</span>
                                                        </div>
                                                        <input type="number" disable wire:model='maintenance'
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
                                            <div class="sm:col-span-3">
                                                <div>
                                                    <label for="price"
                                                        class="block text-sm font-medium text-gray-700 uppercase">amenidades</label>
                                                    <div class="relative mt-1 rounded-md shadow-sm">
                                                        <div
                                                            class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                            <span class="text-gray-500 sm:text-sm">$</span>
                                                        </div>
                                                        <input type="number" wire:model='amenities'
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
                                                        <input type="number" wire:model='sublet'
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
                                                        <div type="number" wire:model='total_cost'
                                                            class="block w-full text-white bg-gray-400 rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                            placeholder="0.00" aria-describedby="price-currency">
                                                            {{ number_format($total_cost, 2) }}
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

                                                        <input type="number" wire:model='utility_percentage'
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
                                                        <div type="number" wire:model='utility'
                                                            class="block w-full text-white bg-gray-400 rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                            placeholder="0.00" aria-describedby="price-currency">
                                                            {{ number_format($utility, 2) }}
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
                                        <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-3">
                                            <div class="sm:col-span-2">
                                                <div>
                                                    <div class="flex justify-between">
                                                        <label
                                                            class="block text-sm font-medium text-gray-700 uppercase">tarifa
                                                            neta</label>
                                                    </div>
                                                    <div class="mt-1">
                                                        <div type="text" wire:model='net_rate'
                                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                            aria-describedby="1">$ <span
                                                                class="pl-3">{{ number_format($net_rate, 2) }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="sm:col-span-2">
                                                <div>
                                                    <div class="flex justify-between">
                                                        <label
                                                            class="block text-sm font-medium text-gray-700 uppercase">impuestos
                                                            (IVA)</label>
                                                    </div>
                                                    <div class="mt-1">
                                                        <div type="text" wire:model='tax'
                                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                            aria-describedby="1">$ <span
                                                                class="pl-3">{{ number_format($tax, 2) }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="sm:col-span-2">
                                                <div>
                                                    <div class="flex justify-between">
                                                        <label
                                                            class="block text-sm font-medium text-gray-700 uppercase">Total</label>
                                                    </div>
                                                    <div class="mt-1">
                                                        <div type="text" wire:model='total'
                                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                            aria-describedby="1">$ <span
                                                                class="pl-3">{{ number_format($total, 2) }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </x-slot>
                            <x-slot name="footer">
                                <x-jet-danger-button class="mx-2" wire:click="$set('modal_create_concept',false)">
                                    Cancelar
                                </x-jet-danger-button>
                                <x-jet-button wire:click="addConcept">
                                    Siguiente
                                </x-jet-button>
                            </x-slot>
                        </x-jet-dialog-modal>
                        <x-jet-dialog-modal wire:model="modal_edit_concept">
                            <x-slot name="title">
                                Editar concepto
                            </x-slot>
                            <x-slot name="content">
                                <div class="col-span-10 md:col-span-10 lg:col-span-5">
                                    {{-- form calculador de cotizacion --}}
                                    <form>
                                        <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-3">
                                            <div class="sm:col-span-6">
                                                <div>
                                                    <div class="flex justify-between">
                                                        <label
                                                            class="block text-sm font-medium text-gray-700">Fecha</label>
                                                    </div>
                                                    <div class="mt-1">
                                                        <input type="date" wire:model='editConceptForm.date'
                                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sm:col-span-6">
                                                <div>
                                                    <div class="flex justify-between">
                                                        <label
                                                            class="block text-sm font-medium text-gray-700">Descripción</label>
                                                    </div>
                                                    <div class="mt-1">
                                                        <textarea row="3" wire:model='editConceptForm.description'
                                                            placeholder="Ejemplo: Traslado Aeropuerto Mérida- Hotel Holly (Paseo de Montejo) a las 15:30 hrs"
                                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-3">
                                            <div class="sm:col-span-3">
                                                <div>
                                                    <div class="flex justify-between">
                                                        <label
                                                            class="block text-sm font-medium text-gray-700">KILOMETROS</label>
                                                    </div>
                                                    <div class="mt-1">
                                                        <input type="number" wire:model='editConceptForm.km'
                                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                            placeholder="1" aria-describedby="1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sm:col-span-3">
                                                <div>
                                                    <div class="flex justify-between">
                                                        <label class="block text-sm font-medium text-gray-700">Gasto
                                                            Admón</label>
                                                    </div>
                                                    <div class="mt-1">
                                                        <input type="number"
                                                            wire:model='editConceptForm.admin_expense'
                                                            class="block w-full rounded-md text-white placeholder-white bg-gray-400 text border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                            placeholder="1" aria-describedby="1">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-5">
                                            <div class="sm:col-span-2">
                                                <div>
                                                    <div class="flex justify-between">
                                                        <label
                                                            class="block text-sm font-medium text-gray-700 uppercase ">vueltas</label>
                                                    </div>
                                                    <div class="mt-1">
                                                        <input type="number" wire:model='editConceptForm.laps'
                                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                            placeholder="1" aria-describedby="1">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="sm:col-span-2">
                                                <div>
                                                    <div class="flex justify-between">
                                                        <label
                                                            class="block text-sm font-medium text-gray-700 uppercase ">rendimiento</label>
                                                    </div>
                                                    <div class="mt-1">
                                                        <input type="number"
                                                            wire:model='editConceptForm.performance'
                                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                            placeholder="1" aria-describedby="1">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="sm:col-span-2">
                                                <div>
                                                    <div class="flex justify-between">
                                                        <label
                                                            class="block text-sm font-medium text-gray-700 uppercase ">litros</label>
                                                    </div>
                                                    <div class="mt-1">
                                                        <input type="number" wire:model='editConceptForm.liters'
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
                                                        <input type="number"
                                                            wire:model='editConceptForm.disel_price'
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
                                                        <input type="number"
                                                            wire:model='editConceptForm.disel_cost' disabled
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
                                                        <input type="number" wire:model='editConceptForm.salary'
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
                                                        <input type="number" wire:model='editConceptForm.per_diem'
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
                                                        <input type="number" wire:model='editConceptForm.hotel'
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
                                                            wire:model='editConceptForm.tax_burden'
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
                                                        <input type="number"
                                                            wire:model='editConceptForm.flor_rigth'
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
                                                        <input type="number" wire:model='editConceptForm.booths'
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
                                                            <span class="text-white sm:text-sm">$</span>
                                                        </div>
                                                        <input type="number" disable
                                                            wire:model='editConceptForm.maintenance'
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
                                            <div class="sm:col-span-3">
                                                <div>
                                                    <label for="price"
                                                        class="block text-sm font-medium text-gray-700 uppercase">amenidades</label>
                                                    <div class="relative mt-1 rounded-md shadow-sm">
                                                        <div
                                                            class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                            <span class="text-gray-500 sm:text-sm">$</span>
                                                        </div>
                                                        <input type="number" wire:model='editConceptForm.amenities'
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
                                                        <input type="number" wire:model='editConceptForm.sublet'
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
                                                        <div type="number" wire:model='editConceptForm.total_cost'
                                                            class="block w-full text-white bg-gray-400 rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                            placeholder="0.00" aria-describedby="price-currency">
                                                            {{ number_format($total_cost, 2) }}
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
                                                            wire:model='editConceptForm.utility_percentage'
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
                                                        <div type="number" wire:model='editConceptForm.utility'
                                                            class="block w-full text-white bg-gray-400 rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                            placeholder="0.00" aria-describedby="price-currency">
                                                            {{ number_format($editConceptForm['utility'], 2) }}
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
                                        <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-3">
                                            <div class="sm:col-span-2">
                                                <div>
                                                    <div class="flex justify-between">
                                                        <label
                                                            class="block text-sm font-medium text-gray-700 uppercase">tarifa
                                                            neta</label>
                                                    </div>
                                                    <div class="mt-1">
                                                        <div type="text" wire:model='editConceptForm.net_rate'
                                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                            aria-describedby="1">$ <span
                                                                class="pl-3">{{ number_format($editConceptForm['net_rate'], 2) }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="sm:col-span-2">
                                                <div>
                                                    <div class="flex justify-between">
                                                        <label
                                                            class="block text-sm font-medium text-gray-700 uppercase">impuestos
                                                            (IVA)</label>
                                                    </div>
                                                    <div class="mt-1">
                                                        <div type="text" wire:model='editConceptForm.tax'
                                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                            aria-describedby="1">$ <span
                                                                class="pl-3">{{ number_format($editConceptForm['tax'], 2) }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="sm:col-span-2">
                                                <div>
                                                    <div class="flex justify-between">
                                                        <label
                                                            class="block text-sm font-medium text-gray-700 uppercase">Total</label>
                                                    </div>
                                                    <div class="mt-1">
                                                        <div type="text" wire:model='editConceptForm.total'
                                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                            aria-describedby="1">$ <span
                                                                class="pl-3">{{ number_format($editConceptForm['total'], 2) }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </form>

                                </div>
                            </x-slot>
                            <x-slot name="footer">
                                <x-jet-danger-button class="mx-2" wire:click="$set('modal_edit_concept',false)">
                                    Cancelar
                                </x-jet-danger-button>
                                <x-jet-button wire:click="updateConcept">Actualizar
                                </x-jet-button>
                            </x-slot>
                        </x-jet-dialog-modal>
                        <x-jet-dialog-modal wire:model="modal_create_voucher">
                            <x-slot name="title">
                                Crear voucher
                            </x-slot>
                            <x-slot name="content">
                                <div>
                                    <x-jet-label value="Arrendamiento" />
                                    <select wire:model="voucherType"
                                        class="block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        <option value="" selected disabled>Seleccionar una opcion</option>
                                        <option value="0">No</option>
                                        <option value="1">Sí</option>
                                    </select>
                                    @switch($voucher_type_selected)
                                        @case(0)
                                            <x-jet-label value="Unidad" />
                                            <x-jet-input class="w-full" type="text" wire:model='unit' />

                                            <x-jet-label value="Chofer" />
                                            <x-jet-input class="w-full" type="text" wire:model='driver_name' />

                                            <x-jet-label value="Telefono" />
                                            <x-jet-input class="w-full" type="text" wire:model='driver_phone' />
                                        @break

                                        @case(1)
                                            <x-jet-label value="Unidad" />
                                            <select wire:model="unit_id"
                                                class="block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                <option value="" selected disabled>Selecciona una opcion</option>
                                                @foreach ($units as $unit)
                                                    <option value="{{ $unit->id }}">{{ $unit->id_unit }}
                                                        {{ $unit->plate }}</option>
                                                @endforeach
                                            </select>

                                            <x-jet-label value="Chofer" />
                                            <select wire:model="driver_id"
                                                class="block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                <option value="" selected disabled>Selecciona una opcion</option>
                                                @foreach ($drivers as $driver)
                                                    <option value="{{ $driver->id }}">{{ $driver->name }}</option>
                                                @endforeach
                                            </select>
                                        @break
                                    @endswitch
                                    <x-jet-label value="Observaciones" />
                                    <textarea class="w-full" wire:model='observations'></textarea>
                                </div>
                            </x-slot>
                            <x-slot name="footer">
                                <x-jet-danger-button class="mx-2" wire:click="$set('modal_create_voucher',false)">
                                    Cancelar
                                </x-jet-danger-button>
                                <x-jet-button wire:click="addVoucher()">Crear
                                </x-jet-button>
                            </x-slot>
                        </x-jet-dialog-modal>
                        <x-jet-dialog-modal wire:model="modal_view_itineraries">
                            <x-slot name="title">
                                Completar Voucher
                            </x-slot>
                            <x-slot name="content">
                                <div>
                                    <div class="px-4 sm:px-6 lg:px-8">
                                        <div class="mt-8 flow-root">
                                            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                                <div
                                                    class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                                                    <table class="min-w-full divide-y divide-gray-300">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col"
                                                                    class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">
                                                                    Date</th>
                                                                <th scope="col"
                                                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                                    Descripción</th>
                                                                <th scope="col"
                                                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                                    Comentario</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="divide-y divide-gray-200">
                                                            @if ($voucher)
                                                                @foreach ($itineraries as $itinerary)
                                                                    <tr wire:ignore>
                                                                        <td
                                                                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">
                                                                            {{ $itinerary->date }}
                                                                        </td>
                                                                        <td
                                                                            class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                            {{ $itinerary->description }}</td>
                                                                        <td
                                                                            class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                                            <x-jet-label value="Comentario" />
                                                                            <x-jet-input type="text"
                                                                                wire:model="array_itineraries.comments.{{ $itinerary->id }}" />
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
                            </x-slot>
                            <x-slot name="footer">
                                <x-jet-danger-button class="mx-2"
                                    wire:click="$set('modal_view_itineraries',false)">
                                    Cancelar
                                </x-jet-danger-button>
                                <x-jet-button wire:click="updateAllItineraries()">Siguiente
                                </x-jet-button>
                            </x-slot>
                        </x-jet-dialog-modal>
                    </div>
                    @if ($formBudget)
                        <div class="hidden">
                            @livewire('presupuestocreado', key('presupuestocreado'))
                        </div>
                    @endif
                </div>
            </div>
</div>

@endif


</main>
</div>
