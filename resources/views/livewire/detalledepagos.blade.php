<div class="py-6">
    {{-- <div class="lg:flex lg:items-center lg:justify-between">
        <div class="md:pl-5 lg:pl-8 min-w-0 flex-1">
            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">
                Panel de Pagos</h2>
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
        </div>
          <div class="mt-5 flex lg:mt-0 lg:ml-4">
            <span class="md:pl-3 lg:pr-8 sm:ml-3">
                <div
                    class="inline-flex items-center rounded-md border border-transparent bg-blue-900 px-4 py-2 text-sm font-medium text-white shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    <!-- Heroicon name: mini/check -->

                    Folio de cotización: <span class="pl-2"> 546782</span>
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
                                            <svg class="h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
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
                                        <svg class="h-full w-6 flex-shrink-0 text-gray-200" viewBox="0 0 24 44"
                                            preserveAspectRatio="none" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
                                        </svg>
                                        <a href="#"
                                            class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Pagos</a>
                                    </div>
                                </li>

                                <li class="flex">
                                    <div class="flex items-center">
                                        <svg class="h-full w-6 flex-shrink-0 text-gray-200" viewBox="0 0 24 44"
                                            preserveAspectRatio="none" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
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
                                    <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                                        <table class="min-w-full divide-y divide-gray-300">
                                            <tbody class="divide-y divide-gray-100  bg-gray-50">
                                                <tr>
                                                    <td
                                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                        Nombre</td>
                                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                        Jane Cooper</td>

                                                </tr>
                                                <tr class="bg-white">
                                                    <td
                                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                        Teléfono</td>
                                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                        999 955 2316</td>

                                                </tr>
                                                <tr>
                                                    <td
                                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                        Correo</td>
                                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                        janecooper@example.com</td>

                                                </tr>
                                                <tr class="bg-white">
                                                    <td
                                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                        Contraseña</td>
                                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                        ***</td>

                                                </tr>
                                                <tr>
                                                    <td
                                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                        Viajes</td>
                                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                        Mérida - Cancún</td>

                                                </tr>
                                                <tr class="bg-white">
                                                    <td
                                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                        Ciudad</td>
                                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                        Mérida</td>

                                                </tr>
                                                <tr>
                                                    <td
                                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                        Contrato</td>
                                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                        Descargar</td>

                                                </tr>
                                                <tr class="bg-white">
                                                    <td
                                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                        CIF</td>
                                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
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
                            <button type="button"
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
                                                orden</th>
                                            <th scope="col"
                                                class="px-3 py-3.5 text-left text-sm font-semibold text-gray-500 uppercase">
                                                VIAJE</th>
                                            <th scope="col"
                                                class="px-3 py-3.5 text-left text-sm font-semibold text-gray-500 uppercase">
                                                # de pagos</th>
                                            <th scope="col"
                                                class="px-3 py-3.5 text-left text-sm font-semibold text-gray-500 uppercase">
                                                pagados</th>
                                            <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                                <span class="sr-only">Ver más</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <!-- Mostrar máximo 6 -->
                                    <tbody class="divide-y divide-gray-200 bg-white">
                                        <tr>
                                            <td
                                                class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                012387</td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                Mérida - Cancún</td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 ">
                                                5</td>
                                            <td
                                                class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 justify-items-center">
                                                0 de 5

                                            </td>

                                            <td
                                                class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                                <div><button class="text-blue-900 hover:text-indigo-900">Añadir
                                                        concepto</button></div>
                                                <div><button class="text-gray-500 pr-7">Ver más</button></div>
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
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                <nav class="flex items-center justify-between border-t border-gray-200 px-4 sm:px-0">
                    <div class="-mt-px flex w-0 flex-1">
                        <a href="#"
                            class="inline-flex items-center border-t-2 border-transparent pt-4 pr-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">
                            <!-- Heroicon name: mini/arrow-long-left -->
                            <svg class="mr-3 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M18 10a.75.75 0 01-.75.75H4.66l2.1 1.95a.75.75 0 11-1.02 1.1l-3.5-3.25a.75.75 0 010-1.1l3.5-3.25a.75.75 0 111.02 1.1l-2.1 1.95h12.59A.75.75 0 0118 10z"
                                    clip-rule="evenodd" />
                            </svg>
                            Anterior
                        </a>
                    </div>
                    <div class="hidden md:-mt-px md:flex">
                        <a href="#"
                            class="inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">1</a>
                        <!-- Current: "border-indigo-500 text-indigo-600", Default: "border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300" -->
                        <a href="#"
                            class="inline-flex items-center border-t-2 border-indigo-500 px-4 pt-4 text-sm font-medium text-indigo-600"
                            aria-current="page">2</a>
                        <a href="#"
                            class="inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">3</a>
                        <span
                            class="inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500">...</span>
                        <a href="#"
                            class="inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">8</a>
                        <a href="#"
                            class="inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">9</a>
                        <a href="#"
                            class="inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">10</a>
                    </div>
                    <div class="-mt-px flex w-0 flex-1 justify-end">
                        <a href="#"
                            class="inline-flex items-center border-t-2 border-transparent pt-4 pl-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">
                            Siguiente
                            <!-- Heroicon name: mini/arrow-long-right -->
                            <svg class="ml-3 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M2 10a.75.75 0 01.75-.75h12.59l-2.1-1.95a.75.75 0 111.02-1.1l3.5 3.25a.75.75 0 010 1.1l-3.5 3.25a.75.75 0 11-1.02-1.1l2.1-1.95H2.75A.75.75 0 012 10z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </nav>
            </div>

        </div>

        <!-- modal Añadir concepto -->
        <div class="hidden">
            @livewire('agregarconcepto', key('agregarconcepto'))
        </div>

    </div> --}}


    <div>
        @livewire('detalleorden', key('detalleorden'))
    </div>
</div>
