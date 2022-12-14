<div class="h-screen  py-6">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8">

        {{-- <div class="grid grid-cols-10 gap-3">

            <div class="col-span-10 md:col-span-10 lg:col-span-6">
                <div class="lg:flex lg:items-center lg:justify-between ">
                    <div class="md:pl-5 lg:pl-8 min-w-0 flex-1">
                        <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">
                            Jane Cooper</h2>
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
                            <button type="button"
                                class="inline-flex items-center rounded-md border border-transparent bg-blue-900 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                <!-- Heroicon name: mini/check -->
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1">
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
                                                class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Clientes</a>
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
                                                aria-current="page">Detalle Cliente</a>
                                        </div>
                                    </li>
                                </ol>
                            </nav>
                        </div>

                    </div>
                </div>
                <div class="overflow-auto h-5/6">
                    <!--tabla-->
                    <div>
                        <div class="py-42px-4 sm:px-6 lg:px-8">
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
                                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                            Jane Cooper</td>

                                                    </tr>
                                                    <tr class="bg-white">
                                                        <td
                                                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                            Tel??fono</td>
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
                                                            Contrase??a</td>
                                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                            ***</td>

                                                    </tr>
                                                    <tr>
                                                        <td
                                                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                            Viajes</td>
                                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                            M??rida - Canc??n</td>

                                                    </tr>
                                                    <tr class="bg-white">
                                                        <td
                                                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                            Ciudad</td>
                                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                            M??rida</td>

                                                    </tr>
                                                    <tr>
                                                        <td
                                                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                            Observaciones</td>
                                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                            Personas con discapacidad</td>

                                                    </tr>
                                                    <tr class="bg-white">
                                                        <td
                                                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                            Contrato</td>
                                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                            Descargar</td>

                                                    </tr>
                                                    <tr>
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

            
            <div class="relative col-span-10 md:col-span-10 lg:col-span-4  md:px-5 lg:px-2 flex-1 py-6 px-4 sm:px-6 overflow-auto">
                <div class="absolute bg-white shadow sm:rounded-md h-full flex-col overflow-y-scroll w-full">
                    <div>
                        @livewire('budget', key('budget'))
                    </div>
                    
                </div>
                
            </div>
            

        </div> --}}
        <div>
            @livewire('voucher', key('voucher'))
        </div>

    </div>
</div>
</div>
