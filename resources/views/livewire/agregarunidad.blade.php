<div>
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
                                    <h2 class="text-lg font-medium text-white" id="slide-over-title">Agregar o modificar unidades </h2>
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
                                                <label for="first-name"
                                                    class="block text-sm font-medium text-gray-700">Modelo</label>
                                                <div class="mt-1">
                                                    <input type="text" name="modelo-unidad" id="modelo-unidad"
                                                        autocomplete="given-name"
                                                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                </div>
                                            </div>

                                            <div class="sm:col-span-6">
                                                <label for="last-name"
                                                    class="block text-sm font-medium text-gray-700">ID</label>
                                                <div class="mt-1">
                                                    <input type="text" name="id-unidad" id="id-unidad"
                                                        autocomplete="family-name"
                                                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                </div>
                                            </div>

                                            <div class="sm:col-span-6">
                                                <label for="empresa"
                                                    class="block text-sm font-medium text-gray-700">Placa</label>
                                                <div class="relative mt-1 rounded-md shadow-sm">
                                                    <input type="text" name="placa" id="placa"
                                                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                </div>
                                            </div>

                                            <div class="sm:col-span-6">
                                                <label for="rfc"
                                                    class="block text-sm font-medium text-gray-700">Póliza de seguro</label>
                                                <div class="relative mt-1 rounded-md shadow-sm">
                                                    <input type="text" name="seguro" id="seguro"
                                                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                </div>
                                            </div>

                                            <div class="sm:col-span-6">
                                                <label for="rfc"
                                                    class="block text-sm font-medium text-gray-700">Verificaciones fisicomecánicas</label>
                                                <div class="relative mt-1 rounded-md shadow-sm">
                                                    <input type="text" name="fisicomecanicas" id="fisicomecanicas"
                                                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                </div>
                                            </div>

                                            <div class="sm:col-span-6">
                                                <label for="rfc"
                                                    class="block text-sm font-medium text-gray-700">Verificaciones de humo</label>
                                                <div class="relative mt-1 rounded-md shadow-sm">
                                                    <input type="text" name="v-humo" id="v-humo"
                                                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                </div>
                                            </div>

                                            {{-- <div class="sm:col-span-6">
                                                <label for="rfc"
                                                    class="block text-sm font-medium text-gray-700">Comentario</label>
                                                <div class="relative mt-1 rounded-md shadow-sm">
                                                    <input type="text" name="comment" id="comment"
                                                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                </div>
                                            </div> --}}
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

    {{-- Unidad guardada exitosamente --}}
    <div class="hidden">
        @livewire('graciasliquidacion', key('graciasliquidacion'))
    </div>
</div>
