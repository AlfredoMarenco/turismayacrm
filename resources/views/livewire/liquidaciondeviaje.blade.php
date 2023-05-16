<div class="pt-6">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8">
        <div class="pb-4 min-w-0 flex-1">
            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">
                Liquidación de viaje
            </h2>
            <div class="mt-1 flex flex-col sm:mt-0 sm:flex-row sm:flex-wrap sm:space-x-6">

                <div class="mt-2 flex items-center text-sm text-gray-500">
                    <!-- Heroicon name: mini/calendar -->
                    <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"
                            clip-rule="evenodd" />
                    </svg>
                    Fecha de hoy:<span class="pl-1"> 15 de Septiembre del 2022</span>
                </div>
            </div>
            <span class="mt-2 inline-flex items-center rounded-md bg-lime-350 px-2.5 py-0.5 text-sm text-white font-bold">
                <svg class="-ml-0.5 mr-1.5 h-2 w-2 text-white" fill="currentColor" viewBox="0 0 8 8">
                  <circle cx="4" cy="4" r="3" />
                </svg>
                98765467
            </span>
        </div>

        <div class="grid grid-cols-10 gap-4">

            <div class="col-span-5">
                <label for="email" class="block text-sm font-medium text-gray-700">Viaje</label>
                <div class="relative mt-1 rounded-md shadow-sm">
                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                        <!-- Heroicon name: mini/envelope -->
                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" class="w-5 h-5">
                            <path
                                d="M6.5 3c-1.051 0-2.093.04-3.125.117A1.49 1.49 0 002 4.607V10.5h9V4.606c0-.771-.59-1.43-1.375-1.489A41.568 41.568 0 006.5 3zM2 12v2.5A1.5 1.5 0 003.5 16h.041a3 3 0 015.918 0h.791a.75.75 0 00.75-.75V12H2z" />
                            <path
                                d="M6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3zM13.25 5a.75.75 0 00-.75.75v8.514a3.001 3.001 0 014.893 1.44c.37-.275.61-.719.595-1.227a24.905 24.905 0 00-1.784-8.549A1.486 1.486 0 0014.823 5H13.25zM14.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                        </svg>

                    </div>
                    <div type="text" name="text" id="name"
                        class="block w-full rounded-md border-gray-300 pl-10 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                        placeholder="Mérida - Cancun"> Mérida - Cancún</div>
                </div>

            </div>

            <div class="col-span-5">
                <label for="date-start" class="block text-sm font-medium text-gray-700">Fechas</label>
                <div date-rangepicker class="mt-1 flex items-center">
                    <div class="relative">
                        <div class="flex absolute text-sm inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div name="start" type="text"
                            class="block w-full rounded-md border-gray-300 pl-10 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                            placeholder="Fecha de inicio">17/08/2022</div>
                    </div>
                    <span class="mx-4 text-gray-500">a</span>
                    <div class="relative">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div name="end" type="text"
                            class="block w-full rounded-md border-gray-300 pl-10 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                            placeholder="Fecha de fin">22/08/2022</div>
                    </div>
                </div>

            </div>
        </div>
        {{-- LIQUIDACIÓN AUTOBUSES --}}
        <div class="grid grid-cols-10 gap-4 mt-5 pt-3 pb-3">
            <div class="col-span-10 md:col-span-10 lg:col-span-5">
                <h5 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight pb-3">
                    AUTOBUSES PRESUPUESTADO</h4>
                    <!--
                        This example requires some changes to your config:

                        ```
                        // tailwind.config.js
                        module.exports = {
                            // ...
                            plugins: [
                            // ...
                            require('@tailwindcss/forms'),
                            ],
                        }
                        ```
                        -->
                    <form action="#">
                        <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-3">
                            <div class="sm:col-span-3">
                                <div>
                                    <div class="flex justify-between">
                                        <label for="email"
                                            class="block text-sm font-medium text-gray-700">CANTIDAD</label>
                                    </div>
                                    <div class="mt-1">
                                        <div type="text" name="cantidad" id="cantidad"
                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="1" aria-describedby="1">1</div>
                                    </div>
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <div>
                                    <div class="flex justify-between">
                                        <label for="email"
                                            class="block text-sm font-medium text-gray-700">PASAJEROS</label>
                                    </div>
                                    <div class="mt-1">
                                        <div type="text" name="cantidad" id="cantidad"
                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="1" aria-describedby="1">27</div>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-5">
                            <div class="sm:col-span-2">
                                <div>
                                    <div class="flex justify-between">
                                        <label for="email"
                                            class="block text-sm font-medium text-gray-700 uppercase ">vueltas</label>
                                    </div>
                                    <div class="mt-1">
                                        <div type="text" name="vueltas" id="vueltas"
                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="1" aria-describedby="1">8</div>
                                    </div>
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <div>
                                    <div class="flex justify-between">
                                        <label for="email"
                                            class="block text-sm font-medium text-gray-700 uppercase ">rendimiento</label>
                                    </div>
                                    <div class="mt-1">
                                        <div type="text" name="rendimiento" id="rendimiento"
                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="1" aria-describedby="1">2323</div>
                                    </div>
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <div>
                                    <div class="flex justify-between">
                                        <label for="email"
                                            class="block text-sm font-medium text-gray-700 uppercase ">litros</label>
                                    </div>
                                    <div class="mt-1">
                                        <div type="text" name="litros" id="litros"
                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="1" aria-describedby="1">600</div>
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
                                        <div type="text" name="Precio-diesel" id="Precio-diesel"
                                            class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="0.00" aria-describedby="price-currency">2,300</div>
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                            <span class="text-gray-500 sm:text-sm" id="price-currency">MXN</span>
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
                                            <span class="text-gray-500 sm:text-sm">$</span>
                                        </div>
                                        <div type="text" name="costo-diesel" id="costo-diesel"
                                            class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="0.00" aria-describedby="price-currency">8,000</div>
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                            <span class="text-gray-500 sm:text-sm" id="price-currency">MXN</span>
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
                                        <div type="text" name="sueldo" id="sueldo"
                                            class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="0.00" aria-describedby="price-currency">1,000</div>
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                            <span class="text-gray-500 sm:text-sm" id="price-currency">MXN</span>
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
                                        <div type="text" name="viaticos" id="viaticos"
                                            class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="0.00" aria-describedby="price-currency">1,000</div>
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                            <span class="text-gray-500 sm:text-sm" id="price-currency">MXN</span>
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
                                        <div type="text" name="hotel" id="hotel"
                                            class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="0.00" aria-describedby="price-currency">1,800</div>
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                            <span class="text-gray-500 sm:text-sm" id="price-currency">MXN</span>
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
                                            <span class="text-gray-500 sm:text-sm">$</span>
                                        </div>
                                        <div type="text" name="carga-impositiva" id="carga-impositiva"
                                            class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="0.00" aria-describedby="price-currency">950</div>
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                            <span class="text-gray-500 sm:text-sm" id="price-currency">MXN</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-5">
                            <div class="sm:col-span-3">
                                <div>
                                    <label for="price"
                                        class="block text-sm font-medium text-gray-700 uppercase">derecho de
                                        piso</label>
                                    <div class="relative mt-1 rounded-md shadow-sm">
                                        <div
                                            class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                            <span class="text-gray-500 sm:text-sm">$</span>
                                        </div>
                                        <div type="text" name="derecho-de-piso" id="derecho-de-piso"
                                            class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="0.00" aria-describedby="price-currency">3,000</div>
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                            <span class="text-gray-500 sm:text-sm" id="price-currency">MXN</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <div>
                                    <label for="price"
                                        class="block text-sm font-medium text-gray-700 uppercase">casetas</label>
                                    <div class="relative mt-1 rounded-md shadow-sm">
                                        <div
                                            class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                            <span class="text-gray-500 sm:text-sm">$</span>
                                        </div>
                                        <div type="text" name="casetas" id="casetas"
                                            class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="0.00" aria-describedby="price-currency">3,000</div>
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                            <span class="text-gray-500 sm:text-sm" id="price-currency">MXN</span>
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
                                        <div type="text" name="amenidades" id="amenidades"
                                            class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="0.00" aria-describedby="price-currency">7,000</div>
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                            <span class="text-gray-500 sm:text-sm" id="price-currency">MXN</span>
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
                                        <div type="text" name="subarrendo" id="subarrendo"
                                            class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="0.00" aria-describedby="price-currency">4,500</div>
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                            <span class="text-gray-500 sm:text-sm" id="price-currency">MXN</span>
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
                                            <span class="text-black sm:text-sm">$</span>
                                        </div>
                                        <div type="text" name="costo-total" id="costo-total"
                                            class="block w-full text-black bg-gray-50 rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="0.00" aria-describedby="price-currency">22,340
                                            <div
                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                <span class="text-black sm:text-sm" id="price-currency">MXN</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <div>
                                    <label for="price"
                                        class="block text-sm font-medium text-gray-700 uppercase">porcentaje de
                                        utilidad</label>
                                    <div class="relative mt-1 rounded-md shadow-sm">

                                        <div type="text" name="costo-total" id="costo-total"
                                            class="block w-full text-gray-900 rounded-md border-gray-300 pl-3 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="Ingrese un número" aria-describedby="price-currency">100
                                        </div>
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                            <span class="text-gray-400 sm:text-sm" id="price-currency">%</span>
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
                                            <span class="text-black sm:text-sm">$</span>
                                        </div>
                                        <div type="text" name="costo-total" id="costo-total"
                                            class="block w-full text-black bg-gray-50 rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="0.00" aria-describedby="price-currency">22,340
                                            <div
                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                <span class="text-black sm:text-sm" id="price-currency">MXN</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>

            </div>
            <div class=" col-span-10 md:col-span-10 lg:col-span-5 bg-gray-50 p-3">
                <h5 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight ">
                    AUTOBUSES REAL</h4>
                    <form action="#">
                        <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-3">
                            <div class="sm:col-span-3">
                                <div>
                                    <div class="flex justify-between">
                                        <label for="email"
                                            class="block text-sm font-medium text-gray-700">CANTIDAD</label>
                                    </div>
                                    <div class="mt-1">
                                        <input type="text" name="cantidad" id="cantidad"
                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="1" aria-describedby="1">
                                    </div>
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <div>
                                    <div class="flex justify-between">
                                        <label for="email"
                                            class="block text-sm font-medium text-gray-700">PASAJEROS</label>
                                    </div>
                                    <div class="mt-1">
                                        <input type="text" name="cantidad" id="cantidad"
                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="1" aria-describedby="1">
                                    </div>
                                </div>
                            </div>

                            {{--  <div class="sm:col-span-2">
                                <div>
                                    <div class="flex justify-between">
                                        <label for="email"
                                            class="block text-sm font-medium text-gray-700 uppercase ">cantidad</label>
                                    </div>
                                    <div class="mt-1">
                                        <input type="text" name="cantidad" id="cantidad"
                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="1" aria-describedby="1">
                                    </div>
                                </div>
                            </div> --}}
                        </div>

                        <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-5">
                            <div class="sm:col-span-2">
                                <div>
                                    <div class="flex justify-between">
                                        <label for="email"
                                            class="block text-sm font-medium text-gray-700 uppercase ">vueltas</label>
                                    </div>
                                    <div class="mt-1">
                                        <input type="text" name="vueltas" id="vueltas"
                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="1" aria-describedby="1">
                                    </div>
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <div>
                                    <div class="flex justify-between">
                                        <label for="email"
                                            class="block text-sm font-medium text-gray-700 uppercase ">rendimiento</label>
                                    </div>
                                    <div class="mt-1">
                                        <input type="text" name="rendimiento" id="rendimiento"
                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="1" aria-describedby="1">
                                    </div>
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <div>
                                    <div class="flex justify-between">
                                        <label for="email"
                                            class="block text-sm font-medium text-gray-700 uppercase ">litros</label>
                                    </div>
                                    <div class="mt-1">
                                        <input type="text" name="litros" id="litros"
                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
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
                                        <input type="text" name="Precio-diesel" id="Precio-diesel"
                                            class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="0.00" aria-describedby="price-currency">
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                            <span class="text-gray-500 sm:text-sm" id="price-currency">MXN</span>
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
                                            <span class="text-gray-500 sm:text-sm">$</span>
                                        </div>
                                        <input type="text" name="costo-diesel" id="costo-diesel"
                                            class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="0.00" aria-describedby="price-currency">
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                            <span class="text-gray-500 sm:text-sm" id="price-currency">MXN</span>
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
                                        <input type="text" name="sueldo" id="sueldo"
                                            class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="0.00" aria-describedby="price-currency">
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                            <span class="text-gray-500 sm:text-sm" id="price-currency">MXN</span>
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
                                        <input type="text" name="viaticos" id="viaticos"
                                            class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="0.00" aria-describedby="price-currency">
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                            <span class="text-gray-500 sm:text-sm" id="price-currency">MXN</span>
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
                                        <input type="text" name="hotel" id="hotel"
                                            class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="0.00" aria-describedby="price-currency">
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                            <span class="text-gray-500 sm:text-sm" id="price-currency">MXN</span>
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
                                            <span class="text-gray-500 sm:text-sm">$</span>
                                        </div>
                                        <input type="text" name="carga-impositiva" id="carga-impositiva"
                                            class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="0.00" aria-describedby="price-currency">
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                            <span class="text-gray-500 sm:text-sm" id="price-currency">MXN</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-5">
                            <div class="sm:col-span-3">
                                <div>
                                    <label for="price"
                                        class="block text-sm font-medium text-gray-700 uppercase">derecho de
                                        piso</label>
                                    <div class="relative mt-1 rounded-md shadow-sm">
                                        <div
                                            class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                            <span class="text-gray-500 sm:text-sm">$</span>
                                        </div>
                                        <input type="text" name="derecho-de-piso" id="derecho-de-piso"
                                            class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="0.00" aria-describedby="price-currency">
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                            <span class="text-gray-500 sm:text-sm" id="price-currency">MXN</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <div>
                                    <label for="price"
                                        class="block text-sm font-medium text-gray-700 uppercase">casetas</label>
                                    <div class="relative mt-1 rounded-md shadow-sm">
                                        <div
                                            class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                            <span class="text-gray-500 sm:text-sm">$</span>
                                        </div>
                                        <input type="text" name="casetas" id="casetas"
                                            class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="0.00" aria-describedby="price-currency">
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                            <span class="text-gray-500 sm:text-sm" id="price-currency">MXN</span>
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
                                        <input type="text" name="amenidades" id="amenidades"
                                            class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="0.00" aria-describedby="price-currency">
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                            <span class="text-gray-500 sm:text-sm" id="price-currency">MXN</span>
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
                                        <input type="text" name="subarrendo" id="subarrendo"
                                            class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="0.00" aria-describedby="price-currency">
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                            <span class="text-gray-500 sm:text-sm" id="price-currency">MXN</span>
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
                                            <span class="text-black sm:text-sm">$</span>
                                        </div>
                                        <div type="text" name="costo-total" id="costo-total"
                                            class="block w-full text-black bg-gray-50 rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="0.00" aria-describedby="price-currency">2,340
                                            <div
                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                <span class="text-black sm:text-sm" id="price-currency">MXN</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sm:col-span-3">
                                <div>
                                    <label for="price"
                                        class="block text-sm font-medium text-gray-700 uppercase">porcentaje de
                                        utilidad</label>
                                    <div class="relative mt-1 rounded-md shadow-sm">
                                        <div type="text" name="costo-total" id="costo-total"
                                            class="block w-full text-gray-900 rounded-md border-gray-300 pl-3 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="Ingrese un número" aria-describedby="price-currency">100
                                        </div>
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                            <span class="text-gray-400 sm:text-sm" id="price-currency">%</span>
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
                                            <span class="text-black sm:text-sm">$</span>
                                        </div>
                                        <div type="text" name="costo-total" id="costo-total"
                                            class="block w-full text-black bg-gray-50 rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="0.00" aria-describedby="price-currency">2,340
                                            <div
                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                <span class="text-black sm:text-sm" id="price-currency">MXN</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>

            </div>
        </div>
        {{-- DIFERENCIA PRESUPUESTADO VS REAL --}}
        <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-3">
            <div class="sm:col-span-2">
                <div>
                    <div class="flex justify-between">
                        <label for="email" class="block text-sm  font-medium text-gray-800 uppercase">Total Presupuestado</label>
                    </div>
                    <div class="relative mt-1 rounded-md shadow-sm">
                        <div
                            class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                            <span class="text-white sm:text-sm">$</span>
                        </div>
                        <div type="text" name="costo-total" id="costo-total"
                            class="block w-full text-white bg-gray-600 rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                            placeholder="0.00" aria-describedby="price-currency">2,340
                            <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                <span class="text-white sm:text-sm" id="price-currency">MXN</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sm:col-span-2">
                <div>
                    <div class="flex justify-between">
                        <label for="email" class="block text-sm font-medium text-gray-800 uppercase">total real</label>
                    </div>
                    <div class="relative mt-1 rounded-md shadow-sm">
                        <div
                            class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                            <span class="text-white sm:text-sm">$</span>
                        </div>
                        <div type="text" name="costo-total" id="costo-total"
                            class="block w-full text-white bg-gray-600 rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                            placeholder="0.00" aria-describedby="price-currency">2,340
                            <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                <span class="text-white sm:text-sm" id="price-currency">MXN</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sm:col-span-2">
                <div>
                    <div class="flex justify-between">
                        <label for="email"
                            class="block text-sm font-medium text-gray-800 uppercase">Diferencia</label>
                    </div>
                    <div class="relative mt-1 rounded-md shadow-sm">
                        <div
                            class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                            <span class="text-white sm:text-sm">$</span>
                        </div>
                        <div type="text" name="costo-total" id="costo-total"
                            class="block w-full text-white bg-gray-600 rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                            placeholder="0.00" aria-describedby="price-currency">2,340
                            <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                <span class="text-white sm:text-sm" id="price-currency">MXN</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        {{-- LIQUIDACIÓN CAMIONETAS --}}
        <div class="grid grid-cols-10 gap-4 mt-5 pt-3 pb-3">
            <div class="col-span-10 md:col-span-10 lg:col-span-5">
                <h5 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight pb-3">
                    CAMIONETAS PRESUPUESTADO</h4>
                    <form action="#">
                        <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-3">
                            <div class="sm:col-span-3">
                                <div>
                                    <div class="flex justify-between">
                                        <label for="email"
                                            class="block text-sm font-medium text-gray-700">CANTIDAD</label>
                                    </div>
                                    <div class="mt-1">
                                        <div type="text" name="cantidad" id="cantidad"
                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="1" aria-describedby="1">1</div>
                                    </div>
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <div>
                                    <div class="flex justify-between">
                                        <label for="email"
                                            class="block text-sm font-medium text-gray-700">PASAJEROS</label>
                                    </div>
                                    <div class="mt-1">
                                        <div type="text" name="cantidad" id="cantidad"
                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="1" aria-describedby="1">27</div>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-5">
                            <div class="sm:col-span-2">
                                <div>
                                    <div class="flex justify-between">
                                        <label for="email"
                                            class="block text-sm font-medium text-gray-700 uppercase ">vueltas</label>
                                    </div>
                                    <div class="mt-1">
                                        <div type="text" name="vueltas" id="vueltas"
                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="1" aria-describedby="1">8</div>
                                    </div>
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <div>
                                    <div class="flex justify-between">
                                        <label for="email"
                                            class="block text-sm font-medium text-gray-700 uppercase ">rendimiento</label>
                                    </div>
                                    <div class="mt-1">
                                        <div type="text" name="rendimiento" id="rendimiento"
                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="1" aria-describedby="1">2323</div>
                                    </div>
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <div>
                                    <div class="flex justify-between">
                                        <label for="email"
                                            class="block text-sm font-medium text-gray-700 uppercase ">litros</label>
                                    </div>
                                    <div class="mt-1">
                                        <div type="text" name="litros" id="litros"
                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="1" aria-describedby="1">600</div>
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
                                        <div type="text" name="Precio-diesel" id="Precio-diesel"
                                            class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="0.00" aria-describedby="price-currency">2,300</div>
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                            <span class="text-gray-500 sm:text-sm" id="price-currency">MXN</span>
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
                                            <span class="text-gray-500 sm:text-sm">$</span>
                                        </div>
                                        <div type="text" name="costo-diesel" id="costo-diesel"
                                            class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="0.00" aria-describedby="price-currency">8,000</div>
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                            <span class="text-gray-500 sm:text-sm" id="price-currency">MXN</span>
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
                                        <div type="text" name="sueldo" id="sueldo"
                                            class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="0.00" aria-describedby="price-currency">1,000</div>
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                            <span class="text-gray-500 sm:text-sm" id="price-currency">MXN</span>
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
                                        <div type="text" name="viaticos" id="viaticos"
                                            class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="0.00" aria-describedby="price-currency">1,000</div>
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                            <span class="text-gray-500 sm:text-sm" id="price-currency">MXN</span>
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
                                        <div type="text" name="hotel" id="hotel"
                                            class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="0.00" aria-describedby="price-currency">1,800</div>
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                            <span class="text-gray-500 sm:text-sm" id="price-currency">MXN</span>
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
                                            <span class="text-gray-500 sm:text-sm">$</span>
                                        </div>
                                        <div type="text" name="carga-impositiva" id="carga-impositiva"
                                            class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="0.00" aria-describedby="price-currency">950</div>
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                            <span class="text-gray-500 sm:text-sm" id="price-currency">MXN</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-5">
                            <div class="sm:col-span-3">
                                <div>
                                    <label for="price"
                                        class="block text-sm font-medium text-gray-700 uppercase">derecho de
                                        piso</label>
                                    <div class="relative mt-1 rounded-md shadow-sm">
                                        <div
                                            class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                            <span class="text-gray-500 sm:text-sm">$</span>
                                        </div>
                                        <div type="text" name="derecho-de-piso" id="derecho-de-piso"
                                            class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="0.00" aria-describedby="price-currency">3,000</div>
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                            <span class="text-gray-500 sm:text-sm" id="price-currency">MXN</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <div>
                                    <label for="price"
                                        class="block text-sm font-medium text-gray-700 uppercase">casetas</label>
                                    <div class="relative mt-1 rounded-md shadow-sm">
                                        <div
                                            class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                            <span class="text-gray-500 sm:text-sm">$</span>
                                        </div>
                                        <div type="text" name="casetas" id="casetas"
                                            class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="0.00" aria-describedby="price-currency">3,000</div>
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                            <span class="text-gray-500 sm:text-sm" id="price-currency">MXN</span>
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
                                        <div type="text" name="amenidades" id="amenidades"
                                            class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="0.00" aria-describedby="price-currency">7,000</div>
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                            <span class="text-gray-500 sm:text-sm" id="price-currency">MXN</span>
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
                                        <div type="text" name="subarrendo" id="subarrendo"
                                            class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="0.00" aria-describedby="price-currency">4,500</div>
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                            <span class="text-gray-500 sm:text-sm" id="price-currency">MXN</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{--  <div class="sm:col-span-2">
                                    <div>
                                        <label for="price"
                                            class="block text-sm font-medium text-gray-700 uppercase">amenidades</label>
                                        <div class="relative mt-1 rounded-md shadow-sm">
                                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                <span class="text-gray-500 sm:text-sm">$</span>
                                            </div>
                                            <input type="text" name="amenidades" id="amenidades"
                                                class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                placeholder="0.00" aria-describedby="price-currency">
                                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                <span class="text-gray-500 sm:text-sm" id="price-currency">MXN</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             --}}
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
                                            <span class="text-black sm:text-sm">$</span>
                                        </div>
                                        <div type="text" name="costo-total" id="costo-total"
                                            class="block w-full text-black bg-gray-50 rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="0.00" aria-describedby="price-currency">22,340
                                            <div
                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                <span class="text-black sm:text-sm" id="price-currency">MXN</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <div>
                                    <label for="price"
                                        class="block text-sm font-medium text-gray-700 uppercase">porcentaje de
                                        utilidad</label>
                                    <div class="relative mt-1 rounded-md shadow-sm">

                                        <div type="text" name="costo-total" id="costo-total"
                                            class="block w-full text-gray-900 rounded-md border-gray-300 pl-3 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="Ingrese un número" aria-describedby="price-currency">100
                                        </div>
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                            <span class="text-gray-400 sm:text-sm" id="price-currency">%</span>
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
                                            <span class="text-black sm:text-sm">$</span>
                                        </div>
                                        <div type="text" name="costo-total" id="costo-total"
                                            class="block w-full text-black bg-gray-50 rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="0.00" aria-describedby="price-currency">22,340
                                            <div
                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                <span class="text-black sm:text-sm" id="price-currency">MXN</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>

            </div>
            <div class=" col-span-10 md:col-span-10 lg:col-span-5 bg-gray-50 p-3">
                <h5 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight ">
                    CAMIONETAS REAL</h4>
                    <form action="#">
                        <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-3">
                            <div class="sm:col-span-3">
                                <div>
                                    <div class="flex justify-between">
                                        <label for="email"
                                            class="block text-sm font-medium text-gray-700">CANTIDAD</label>
                                    </div>
                                    <div class="mt-1">
                                        <input type="text" name="cantidad" id="cantidad"
                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="1" aria-describedby="1">
                                    </div>
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <div>
                                    <div class="flex justify-between">
                                        <label for="email"
                                            class="block text-sm font-medium text-gray-700">PASAJEROS</label>
                                    </div>
                                    <div class="mt-1">
                                        <input type="text" name="cantidad" id="cantidad"
                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="1" aria-describedby="1">
                                    </div>
                                </div>
                            </div>

                            {{--  <div class="sm:col-span-2">
                                <div>
                                    <div class="flex justify-between">
                                        <label for="email"
                                            class="block text-sm font-medium text-gray-700 uppercase ">cantidad</label>
                                    </div>
                                    <div class="mt-1">
                                        <input type="text" name="cantidad" id="cantidad"
                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="1" aria-describedby="1">
                                    </div>
                                </div>
                            </div> --}}
                        </div>

                        <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-5">
                            <div class="sm:col-span-2">
                                <div>
                                    <div class="flex justify-between">
                                        <label for="email"
                                            class="block text-sm font-medium text-gray-700 uppercase ">vueltas</label>
                                    </div>
                                    <div class="mt-1">
                                        <input type="text" name="vueltas" id="vueltas"
                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="1" aria-describedby="1">
                                    </div>
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <div>
                                    <div class="flex justify-between">
                                        <label for="email"
                                            class="block text-sm font-medium text-gray-700 uppercase ">rendimiento</label>
                                    </div>
                                    <div class="mt-1">
                                        <input type="text" name="rendimiento" id="rendimiento"
                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="1" aria-describedby="1">
                                    </div>
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <div>
                                    <div class="flex justify-between">
                                        <label for="email"
                                            class="block text-sm font-medium text-gray-700 uppercase ">litros</label>
                                    </div>
                                    <div class="mt-1">
                                        <input type="text" name="litros" id="litros"
                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
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
                                        <input type="text" name="Precio-diesel" id="Precio-diesel"
                                            class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="0.00" aria-describedby="price-currency">
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                            <span class="text-gray-500 sm:text-sm" id="price-currency">MXN</span>
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
                                            <span class="text-gray-500 sm:text-sm">$</span>
                                        </div>
                                        <input type="text" name="costo-diesel" id="costo-diesel"
                                            class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="0.00" aria-describedby="price-currency">
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                            <span class="text-gray-500 sm:text-sm" id="price-currency">MXN</span>
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
                                        <input type="text" name="sueldo" id="sueldo"
                                            class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="0.00" aria-describedby="price-currency">
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                            <span class="text-gray-500 sm:text-sm" id="price-currency">MXN</span>
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
                                        <input type="text" name="viaticos" id="viaticos"
                                            class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="0.00" aria-describedby="price-currency">
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                            <span class="text-gray-500 sm:text-sm" id="price-currency">MXN</span>
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
                                        <input type="text" name="hotel" id="hotel"
                                            class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="0.00" aria-describedby="price-currency">
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                            <span class="text-gray-500 sm:text-sm" id="price-currency">MXN</span>
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
                                            <span class="text-gray-500 sm:text-sm">$</span>
                                        </div>
                                        <input type="text" name="carga-impositiva" id="carga-impositiva"
                                            class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="0.00" aria-describedby="price-currency">
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                            <span class="text-gray-500 sm:text-sm" id="price-currency">MXN</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-5">
                            <div class="sm:col-span-3">
                                <div>
                                    <label for="price"
                                        class="block text-sm font-medium text-gray-700 uppercase">derecho de
                                        piso</label>
                                    <div class="relative mt-1 rounded-md shadow-sm">
                                        <div
                                            class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                            <span class="text-gray-500 sm:text-sm">$</span>
                                        </div>
                                        <input type="text" name="derecho-de-piso" id="derecho-de-piso"
                                            class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="0.00" aria-describedby="price-currency">
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                            <span class="text-gray-500 sm:text-sm" id="price-currency">MXN</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <div>
                                    <label for="price"
                                        class="block text-sm font-medium text-gray-700 uppercase">casetas</label>
                                    <div class="relative mt-1 rounded-md shadow-sm">
                                        <div
                                            class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                            <span class="text-gray-500 sm:text-sm">$</span>
                                        </div>
                                        <input type="text" name="casetas" id="casetas"
                                            class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="0.00" aria-describedby="price-currency">
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                            <span class="text-gray-500 sm:text-sm" id="price-currency">MXN</span>
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
                                        <input type="text" name="amenidades" id="amenidades"
                                            class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="0.00" aria-describedby="price-currency">
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                            <span class="text-gray-500 sm:text-sm" id="price-currency">MXN</span>
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
                                        <input type="text" name="subarrendo" id="subarrendo"
                                            class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="0.00" aria-describedby="price-currency">
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                            <span class="text-gray-500 sm:text-sm" id="price-currency">MXN</span>
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
                                            <span class="text-black sm:text-sm">$</span>
                                        </div>
                                        <div type="text" name="costo-total" id="costo-total"
                                            class="block w-full text-black bg-gray-50 rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="0.00" aria-describedby="price-currency">2,340
                                            <div
                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                <span class="text-black sm:text-sm" id="price-currency">MXN</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <div>
                                    <label for="price"
                                        class="block text-sm font-medium text-gray-700 uppercase">porcentaje de
                                        utilidad</label>
                                    <div class="relative mt-1 rounded-md shadow-sm">

                                        <div type="text" name="costo-total" id="costo-total"
                                            class="block w-full text-gray-900 rounded-md border-gray-300 pl-3 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="Ingrese un número" aria-describedby="price-currency">100
                                        </div>
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                            <span class="text-gray-400 sm:text-sm" id="price-currency">%</span>
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
                                            <span class="text-black sm:text-sm">$</span>
                                        </div>
                                        <div type="text" name="costo-total" id="costo-total"
                                            class="block w-full text-black bg-gray-50 rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="0.00" aria-describedby="price-currency">2,340
                                            <div
                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                <span class="text-black sm:text-sm" id="price-currency">MXN</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>

            </div>
        </div>
        {{-- DIFERENCIA PRESUPUESTADO VS REAL --}}
        <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6 mt-3">
            <div class="sm:col-span-2">
                <div>
                    <div class="flex justify-between">
                        <label for="email" class="block text-sm  font-medium text-gray-800 uppercase">Total Presupuestado</label>
                    </div>
                    <div class="relative mt-1 rounded-md shadow-sm">
                        <div
                            class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                            <span class="text-white sm:text-sm">$</span>
                        </div>
                        <div type="text" name="costo-total" id="costo-total"
                            class="block w-full text-white bg-gray-600 rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                            placeholder="0.00" aria-describedby="price-currency">2,340
                            <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                <span class="text-white sm:text-sm" id="price-currency">MXN</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sm:col-span-2">
                <div>
                    <div class="flex justify-between">
                        <label for="email" class="block text-sm font-medium text-gray-800 uppercase">total real</label>
                    </div>
                    <div class="relative mt-1 rounded-md shadow-sm">
                        <div
                            class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                            <span class="text-white sm:text-sm">$</span>
                        </div>
                        <div type="text" name="costo-total" id="costo-total"
                            class="block w-full text-white bg-gray-600 rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                            placeholder="0.00" aria-describedby="price-currency">2,340
                            <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                <span class="text-white sm:text-sm" id="price-currency">MXN</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sm:col-span-2">
                <div>
                    <div class="flex justify-between">
                        <label for="email"
                            class="block text-sm font-medium text-gray-800 uppercase">Diferencia</label>
                    </div>
                    <div class="relative mt-1 rounded-md shadow-sm">
                        <div
                            class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                            <span class="text-white sm:text-sm">$</span>
                        </div>
                        <div type="text" name="costo-total" id="costo-total"
                            class="block w-full text-white bg-gray-600 rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                            placeholder="0.00" aria-describedby="price-currency">2,340
                            <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                <span class="text-white sm:text-sm" id="price-currency">MXN</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="mt-5">
            <h3 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-2xl sm:tracking-tight mb-1">Comentarios</h3>
            <div>
            <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, consequatur rerum itaque quam aliquam earum temporibus, ducimus dolore explicabo ut, dolorum adipisci doloremque assumenda dolorem provident. Voluptate quos sit eligendi.</p>
            </div>
        </div>


        <div class="flex flex-shrink-0 justify-end px-4 py-4 mt-7 border-t bg-white">
            <button type="button"
                class="rounded-md border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Crear
                borrador</button>
            <button type="submit"
                class="ml-4 inline-flex justify-center rounded-md border border-transparent bg-blue-900 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Liquidar viaje</button>
        </div>
    </div>





    <div class="hidden">
        @livewire('alertaliquidar', key('alertaliquidar'))
    </div>

</div>
