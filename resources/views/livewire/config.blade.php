<div class="h-screen flex flex-1 flex-col md:pl-64">
    <main>
        <div class="py-6">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8">
                <div class="lg:flex lg:items-center lg:justify-between">
                    <div class="md:pl-5 lg:pl-8 min-w-0 flex-1">
                        <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">
                            Usuarios del sistema</h2>
                        <div class="mt-1 flex flex-col sm:mt-0 sm:flex-row sm:flex-wrap sm:space-x-6">

                            <div class="mt-2 flex items-center text-sm text-gray-500">
                                <!-- Heroicon name: mini/calendar -->
                                <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"
                                        clip-rule="evenodd" />
                                </svg>
                                {{-- Fecha de hoy:<span class="pl-1"> {{ $date }}</span> --}}
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 flex lg:mt-0 lg:ml-4">
                        <span class="md:pl-3 lg:pr-8 sm:ml-3">
                            <button type="button" wire:click='$set("modal_add_user",true)'
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
                                    <input type="text" wire:model="name_search"
                                        class="block w-full rounded-md border-gray-300 pl-10 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        placeholder="Jane Cooper">
                                </div>

                            </div>
                            <div class="col-span-2">
                                <label class="block text-sm font-medium text-gray-700">Correo</label>
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
                                    <input type="text" wire:model="email_search"
                                        class="block w-full rounded-md border-gray-300 pl-10 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        placeholder="you@example.com">
                                </div>
                            </div>

                            <div class="col-span-2">
                                <label for="tel" class="block text-sm font-medium text-gray-700">Teléfono</label>
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
                                    <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
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
                                                @foreach ($users as $user)
                                                    <tr>
                                                        <td
                                                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                            {{ $user->name }}</td>
                                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                            {{ $user->last_name }}</td>
                                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                            {{ $user->phone }}</td>
                                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                            {{ $user->email }}</td>
                                                        <td
                                                            class="relative whitespace-nowrap py-4 pl-3 pr-4 text-center text-sm font-medium sm:pr-6">
                                                            <div>
                                                                <a wire:click="editUser({{ $user }})"
                                                                    class="text-blue-900 hover:text-indigo-900 cursor-pointer">Editar</a>
                                                            </div>
                                                            <div>
                                                                <a wire:click="deletinguser({{ $user }})"
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
                                        {{ $users->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /End replace -->
                <x-jet-dialog-modal wire:model="modal_add_user" class="sm:max-w-2xl">
                    <x-slot name="title">
                        Agregar usuario
                    </x-slot>
                    <x-slot name="content">
                        <div>
                            <x-jet-label value="Nombre" />
                            <x-jet-input type="text" wire:model="name" class="w-full"/>
                        </div>
                        <div>
                            <x-jet-label value="Apellido" />
                            <x-jet-input type="text" wire:model="last_name" class="w-full"/>
                        </div>
                        <div>
                            <x-jet-label value="Correo" />
                            <x-jet-input type="text" wire:model="email" class="w-full"/>
                        </div>
                        <div>
                            <x-jet-label value="Telefono" />
                            <x-jet-input type="text" wire:model="phone" class="w-full"/>
                        </div>
                        <div>
                            <x-jet-label value="Contraseña" />
                            <x-jet-input type="text" wire:model="password" class="w-full"/>
                        </div>
                    </x-slot>
                    <x-slot name="footer">
                        <x-jet-danger-button class="mx-2" wire:click="$set('modal_add_user',false)">
                            Cancelar
                        </x-jet-danger-button>
                        <x-jet-button wire:click="storeUser()">Agregar
                        </x-jet-button>
                    </x-slot>
                </x-jet-dialog-modal>

                <!-- /End replace -->
                <x-jet-dialog-modal wire:model="modal_edit_user" class="sm:max-w-2xl">
                    <x-slot name="title">
                        Editar usuario
                    </x-slot>
                    <x-slot name="content">
                        <div>
                            <x-jet-label value="Nombre" />
                            <x-jet-input type="text" wire:model="editForm.name" class="w-full"/>
                        </div>
                        <div>
                            <x-jet-label value="Apellido" />
                            <x-jet-input type="text" wire:model="editForm.last_name" class="w-full"/>
                        </div>
                        <div>
                            <x-jet-label value="Correo" />
                            <x-jet-input type="text" wire:model="editForm.email" class="w-full"/>
                        </div>
                        <div>
                            <x-jet-label value="Telefono" />
                            <x-jet-input type="text" wire:model="editForm.phone" class="w-full"/>
                        </div>
                        <div>
                            <x-jet-label value="Contraseña" />
                            <x-jet-input type="text" wire:model="editForm.password" class="w-full"/>
                        </div>
                    </x-slot>
                    <x-slot name="footer">
                        <x-jet-danger-button class="mx-2" wire:click="$set('modal_add_user',false)">
                            Cancelar
                        </x-jet-danger-button>
                        <x-jet-button wire:click="updateUser()">Actualizar
                        </x-jet-button>
                    </x-slot>
                </x-jet-dialog-modal>
            </div>
        </div>
    </main>
</div>
