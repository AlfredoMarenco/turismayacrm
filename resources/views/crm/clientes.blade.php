@extends('layouts.escritorio')
@section('content')
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
<!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
<div>

  <div>
    @livewire('menusidebar')
    @livewire('agregar')
  </div>
  


  <div class="flex flex-1 flex-col md:pl-64">

    <main>
      <div class="py-6">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8">
          <div class="lg:flex lg:items-center lg:justify-between">
            <div class="md:pl-5 lg:pl-8 min-w-0 flex-1">
              <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">Panel de Clientes</h2>
              <div class="mt-1 flex flex-col sm:mt-0 sm:flex-row sm:flex-wrap sm:space-x-6">

                <div class="mt-2 flex items-center text-sm text-gray-500">
                  <!-- Heroicon name: mini/calendar -->
                  <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z" clip-rule="evenodd" />
                  </svg>
                  Fecha de hoy:<span class="pl-1"> 15 de Septiembre del 2022</span>
                </div>
              </div>
            </div>
            <div class="mt-5 flex lg:mt-0 lg:ml-4">



              <span class="md:pl-3 lg:pr-8 sm:ml-3">
                <button type="button" class="inline-flex items-center rounded-md border border-transparent bg-blue-900 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                  <!-- Heroicon name: mini/check -->
                  <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
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
            <div class="px-4 sm:px-6 lg:px-8">

              <div class="mt-8 flex flex-col">
                <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                  <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                      <table class="min-w-full divide-y divide-gray-300">
                        <thead class="bg-gray-50">
                          <tr>
                            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-500 sm:pl-6">NOMBRE</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-500">VIAJE</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-500">CORREO</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-500">ESTATUS</th>
                            <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                              <span class="sr-only">Edit</span>
                            </th>
                          </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                          <tr>
                            <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">Jane Cooper</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Mérida - Cancún</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">jane.cooper@example.com</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Viaje iniciado</td>
                            <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                              <a href="#" class="text-blue-900 hover:text-indigo-900">Editar<span class="sr-only">, Lindsay Walton</span></a>
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

          </div>
          <!-- /End replace -->
        </div>
      </div>
    </main>
  </div>

</div>


@endsection