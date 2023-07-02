@extends('layouts.perfil-usuario')
@section('content')
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
        </nav>
        <div>
            <main class="grid min-h-full place-items-center bg-white px-6 py-24 sm:py-32 lg:px-8">
                <div class="text-center">
                    <p class="text-base font-semibold text-indigo-600">¡Felicidades!</p>
                    <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">Pago recibido exitosamente
                    </h1>
                    <p class="mt-6 text-base leading-7 text-gray-600">Pronto recibirá su comprobante de pago por email.</p>
                    <div class="mt-10 flex items-center justify-center gap-x-6">
                        <a href="{{ route('user.profile') }}"
                            class="inline-flex items-center justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Regresar
                            al inicio</a>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
