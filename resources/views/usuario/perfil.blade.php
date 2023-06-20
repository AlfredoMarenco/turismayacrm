@extends('layouts.portal')
@section('content')
    <!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
<div class="min-h-full">
    <nav class="bg-blue-900">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
          <div class="flex items-center">
            <div class="flex-shrink-0">
              <img class="h-8 auto" src="img/turismaya-logo.svg" alt="Your Company">
            </div>
          </div>
        </div>
      </div>
  
      <!-- Mobile menu, show/hide based on menu state. -->
     
    </nav>
  
    <header class="bg-white shadow">
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <div class="md:flex md:items-center md:justify-between md:space-x-5">
            <div class="flex items-start space-x-5">
              <div class="flex-shrink-0">
                <div class="relative">
                  <img class="h-16 w-16 rounded-full" src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="">
                  <span class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></span>
                </div>
              </div>
              <!--
                Use vertical padding to simulate center alignment when both lines of text are one line,
                but preserve the same layout if the text wraps without making the image jump around.
              -->
              <div class="pt-1.5">
                <h1 class="text-2xl font-bold text-gray-900">Cecilia Acevedo</h1>
                <p class="text-sm font-medium text-gray-500">Cliente desde <time datetime="2020-08-25">August 25, 2020</time></p>
              </div>
            </div>
            <div class="mt-6 flex flex-col-reverse justify-stretch space-y-4 space-y-reverse sm:flex-row-reverse sm:justify-end sm:space-x-3 sm:space-y-0 sm:space-x-reverse md:mt-0 md:flex-row md:space-x-3">
              <button type="button" class="inline-flex items-center justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Cerrar sesión</button>
              <button type="button" class="inline-flex items-center justify-center rounded-md bg-blue-900 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Cambiar contraseña</button>
            </div>
          </div>
          
      </div>
    </header>
    <main>
      <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <!-- Your content -->
        
      </div>
    </main>
  </div>
  
@endsection