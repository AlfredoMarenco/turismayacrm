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
                        <form class="flex h-full flex-col overflow-y-scroll bg-white shadow-xl">
                            <div class="bg-blue-900 py-6 px-4 sm:px-6">
                                <div class="flex items-center justify-between">
                                    <h2 class="text-lg font-medium text-white" id="slide-over-title">Apartar fecha</h2>
                                    <div class="ml-3 flex h-7 items-center">
                                        <button type="button"
                                            class="rounded-md  text-indigo-200 hover:text-white focus:outline-none focus:ring-2 focus:ring-white">
                                            <span class="sr-only">Close panel</span>
                                            <!-- Heroicon name: outline/x-mark -->
                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="mt-1">
                                    <p class="text-sm text-indigo-300">Seleccione un cliente y asigne una unidad</p>
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
                                                    {{-- <div class="relative mt-1">
                                                        <input id="combobox" type="text"
                                                            class="w-full rounded-md border border-gray-300 bg-white py-2 pl-3 pr-12 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500 sm:text-sm"
                                                            role="combobox" aria-controls="options"
                                                            aria-expanded="false">
                                                        <button type="button"
                                                            class="absolute inset-y-0 right-0 flex items-center rounded-r-md px-2 focus:outline-none">
                                                            <!-- Heroicon name: mini/chevron-up-down -->
                                                            <svg class="h-5 w-5 text-gray-400"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" aria-hidden="true">
                                                                <path fill-rule="evenodd"
                                                                    d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                        </button>

                                                        <ul class="absolute z-10 mt-1 max-h-60 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm"
                                                            id="options" role="listbox">
                                                            <li class="relative cursor-default select-none py-2 pl-3 pr-9 text-gray-900"
                                                                id="option-0" role="option" tabindex="-1">
                                                                <!-- Selected: "font-semibold" -->
                                                                <span class="block truncate">Leslie Alexander</span>


                                                                <span
                                                                    class="absolute inset-y-0 right-0 flex items-center pr-4 text-indigo-600">
                                                                    <!-- Heroicon name: mini/check -->
                                                                    <svg class="h-5 w-5"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 20 20" fill="currentColor"
                                                                        aria-hidden="true">
                                                                        <path fill-rule="evenodd"
                                                                            d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                                            clip-rule="evenodd" />
                                                                    </svg>
                                                                </span>
                                                            </li>

                                                            <li class="relative cursor-default select-none py-2 pl-3 pr-9 text-gray-900"
                                                                id="option-0" role="option" tabindex="-1">
                                                                <!-- Selected: "font-semibold" -->
                                                                <span class="block truncate">Leslie Alexander</span>


                                                                <span
                                                                    class="absolute inset-y-0 right-0 flex items-center pr-4 text-indigo-600">
                                                                    <!-- Heroicon name: mini/check -->
                                                                    <svg class="h-5 w-5"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 20 20" fill="currentColor"
                                                                        aria-hidden="true">
                                                                        <path fill-rule="evenodd"
                                                                            d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                                            clip-rule="evenodd" />
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <!-- More items... -->
                                                        </ul>
                                                    </div> --}}
                                                </div>


                                            </div>

                                            <div class="sm:col-span-6">
                                                <div>
                                                    <label for="unidad"
                                                        class="block text-sm font-medium text-gray-700">Unidades</label>
                                                    <select id="unidades" name="unidades"
                                                        class="mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                                        <option selected>Mérida - Cancún - <span>675645</span></option>
                                                        <option>Chiapas - Cancún - <span>6573</span></option>
                                                        <option>Mérida - CDMX - <span>09887</span></option>

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="sm:col-span-6">
                                                <div>
                                                    <label for="price"
                                                        class="block text-sm font-medium text-gray-700 ">Fecha de
                                                        inicio</label>
                                                    <div class="relative mt-1 rounded-md shadow-sm">

                                                        <div type="text" name="Precio-diesel" id="Precio-diesel"
                                                            class="block w-full rounded-md border-gray-300 pl-3 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                            placeholder="0.00" aria-describedby="price-currency">
                                                            15/09/2023</div>
                                                        <div
                                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                            <span class="text-gray-500 sm:text-sm" id="price-currency">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor" class="w-6 h-6">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
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
                                                        class="block text-sm font-medium text-gray-700 ">Fecha de
                                                        fin</label>
                                                    <div class="relative mt-1 rounded-md shadow-sm">

                                                        <div type="text" name="Precio-diesel" id="Precio-diesel"
                                                            class="block w-full rounded-md border-gray-300 pl-3 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                            placeholder="0.00" aria-describedby="price-currency">
                                                            15/10/2023</div>
                                                        <div
                                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                            <span class="text-gray-500 sm:text-sm" id="price-currency">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor" class="w-6 h-6">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
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
                                                    <select id="unidades" name="unidades"
                                                        class="mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                                        <option>Unidad cargada uno</option>
                                                        <option selected>Unidad cargada dos</option>
                                                        <option>Unidad cargada tres</option>
                                                        <option>Subarriendo</option>{{-- Esta opción debe mantenerse estática, al seleccionarla el chofer cambiará a "proveedor" --}}
                                                    </select>
                                                </div>

                                            </div>

                                            <div class="sm:col-span-6">
                                                <div>
                                                    <label for="choferes"
                                                        class="block text-sm font-medium text-gray-700">Chofer</label>
                                                    <select id="choferes" name="choferes"
                                                        class="mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                                        <option>Chofer uno</option>
                                                        <option selected>Chofer dos</option>
                                                        <option>Chofer tres</option>
                                                        <option>Proveedor</option>{{-- Esta opción debe mantenerse estática, deberá marcarse cuando el usuario seleccione "subarriendo" --}}
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="sm:col-span-6">
                                                <label for="rfc"
                                                    class="block text-sm font-medium text-gray-700">Comentario</label>
                                                <div class="relative mt-1 rounded-md shadow-sm">
                                                    <input type="text" name="comment" id="comment"
                                                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /End replace -->
                            </div>
                            <div class="flex flex-shrink-0 justify-end px-4 py-4">
                                <button type="button"
                                    class="rounded-md border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Cancelar</button>
                                <button type="submit"
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

    {{-- Fecha apartada exitosamente --}}
    <div class="">
        @livewire('fechaapartada', key('fechaapartada'))
    </div>
</div>
