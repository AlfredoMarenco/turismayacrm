<div class="fixed inset-0 bg-gray-400 bg-opacity-75"></div>
<!-- agregar cliente -->
<div class="relative z-10 " aria-labelledby="slide-over-title" role="dialog" aria-modal="true">
    <!-- Background backdrop, show/hide based on slide-over state. -->
    <div class="fixed inset-0"></div>

    <div class="fixed inset-0 overflow-hidden">
        <div class="absolute inset-0 overflow-hidden">
            <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10">
                <!--
         Slide-over panel, show/hide based on slide-over state.

         Entering: "transform transition ease-in-out duration-500 sm:duration-700"
           From: "translate-x-full"
           To: "translate-x-0"
         Leaving: "transform transition ease-in-out duration-500 sm:duration-700"
           From: "translate-x-0"
           To: "translate-x-full"
       -->
                <div class="pointer-events-auto w-screen max-w-md">
                    <form class="flex h-full flex-col overflow-y-scroll bg-white shadow-xl">
                        <div class="bg-blue-900 py-6 px-4 sm:px-6">
                            <div class="flex items-center justify-between">
                                <h2 class="text-lg font-medium text-white" id="slide-over-title">Solicitar Pago</h2>
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
                                <p class="text-sm text-indigo-300">Para iniciar el proceso llena todos los campos
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
                                                    class="block text-sm font-medium text-gray-700">Selecciona un cliente</label>
                                                <select id="clientepago" name="clientepago"
                                                    class="mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                                    <option>Jane Cooper</option>
                                                    <option>Cecilia Acevedo</option>
                                                </select>
                                            </div>

                                        </div>

                                        <div class="sm:col-span-6">
                                            <div>
                                                <label for="cotizacion-pago"
                                                    class="block text-sm font-medium text-gray-700">Selecciona una cotización</label>
                                                <select id="cotizacion-pago" name="cotizacion-pago"
                                                    class="mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                                    <option>Mérida - Cancún - <span id="folio">098765</span></option>
                                                    <option>Cancun - Chiapas - <span id="folio">0998324</span></option>
                                                </select>
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
                                class="ml-4 inline-flex justify-center rounded-md border border-transparent bg-blue-900 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fin agregar cliente -->

{{-- Cliente guardado exitosamente --}}
<div class="hidden">
    @livewire('clienteagregado', key('clienteagregado'))
</div>
