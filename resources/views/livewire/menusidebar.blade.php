    <div class="h-screen">

        <div class="relative z-40 md:hidden" role="dialog" aria-modal="true">

            <div class="fixed inset-0 bg-gray-600 bg-opacity-75"></div>

            <div class="fixed inset-0 z-40 flex">

                <div class="relative flex w-full max-w-xs flex-1 flex-col bg-blue-900 pt-5 pb-4">

                    <div class="absolute top-0 right-0 -mr-12 pt-2">
                        <button type="button"
                            class="ml-1 flex h-10 w-10 items-center justify-center rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                            <span class="sr-only">Close sidebar</span>
                            <!-- Heroicon name: outline/x-mark -->
                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <div class="flex flex-shrink-0 items-center px-4">
                        <img class="h-8 w-auto" src="img/turismaya-logo.svg" alt="Turismaya">
                    </div>
                    <div class="mt-5 h-0 flex-1 overflow-y-auto">
                        <nav class="space-y-1 px-2">
                            <!-- Current: "bg-indigo-800 text-white", Default: "text-indigo-100 hover:bg-indigo-600" -->
                            <a wire:click="selectItem(1)"
                                class="bg-lime-350 text-white group flex items-center px-2 py-2 text-base font-medium rounded-md">
                                <!-- Heroicon name: outline/home -->
                                <svg class="mr-4 h-6 w-6 flex-shrink-0 text-white" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                </svg>

                                Clientes
                            </a>

                            <a wire:click="selectItem(2)"
                                class="text-indigo-100 hover:bg-lime-100 hover:text-black group flex items-center px-2 py-2 text-base font-medium rounded-md">
                                <svg class="mr-3 h-6 w-6 flex-shrink-0 text-indigo-300"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                </svg>
                                Disponibilidad
                            </a>

                            <a href="#"
                                class="text-indigo-100 hover:bg-lime-100 hover:text-black group flex items-center px-2 py-2 text-base font-medium rounded-md">
                                <!-- Heroicon name: outline/folder -->
                                <svg class="mr-4 h-6 w-6 flex-shrink-0 text-indigo-300"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                                </svg>
                                Viajes
                            </a>

                            <a href="#"
                                class="text-indigo-100 hover:bg-lime-100 hover:text-black group flex items-center px-2 py-2 text-base font-medium rounded-md">
                                <!-- Heroicon name: outline/calendar -->
                                <svg class="mr-4 h-6 w-6 flex-shrink-0 text-indigo-300"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                                </svg>
                                Pagos
                            </a>

                            <a href="#"
                                class="text-indigo-100 hover:bg-lime-100 hover:text-black group flex items-center px-2 py-2 text-base font-medium rounded-md">
                                <!-- Heroicon name: outline/inbox -->
                                <svg class="mr-4 h-6 w-6 flex-shrink-0 text-indigo-300"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 13.5h3.86a2.25 2.25 0 012.012 1.244l.256.512a2.25 2.25 0 002.013 1.244h3.218a2.25 2.25 0 002.013-1.244l.256-.512a2.25 2.25 0 012.013-1.244h3.859m-19.5.338V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 00-2.15-1.588H6.911a2.25 2.25 0 00-2.15 1.588L2.35 13.177a2.25 2.25 0 00-.1.661z" />
                                </svg>
                                Unidades
                            </a>

                            <a href="#"
                                class="text-indigo-100 hover:bg-lime-100 hover:text-black group flex items-center px-2 py-2 text-base font-medium rounded-md">
                                <!-- Heroicon name: outline/users -->
                                <svg class="mr-4 h-6 w-6 flex-shrink-0 text-indigo-300"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                                </svg>
                                Choferes
                            </a>

                            <a href="#"
                                class="text-indigo-100 hover:bg-lime-100 hover:text-black group flex items-center px-2 py-2 text-base font-medium rounded-md">
                                <!-- Heroicon name: outline/chart-bar -->
                                <svg class="mr-4 h-6 w-6 flex-shrink-0 text-indigo-300"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                                </svg>
                                Reportes
                            </a>
                        </nav>
                    </div>
                </div>

                <div class="w-14 flex-shrink-0" aria-hidden="true">
                    <!-- Dummy element to force sidebar to shrink to fit close icon -->
                </div>
            </div>
        </div>

        <!-- Static sidebar for desktop -->
        <div class="hidden md:fixed md:inset-y-0 md:flex md:w-64 md:flex-col">
            <!-- Sidebar component, swap this element with another sidebar if you like -->
            <div class="flex flex-grow flex-col  bg-blue-900 pt-5">
                <div class="flex flex-shrink-0 items-center px-4">
                    <img class="h-8 w-auto" src="img/turismaya-logo.svg" alt="Turismaya">
                </div>
                <div class="mt-5 flex flex-1 flex-col">
                    <nav class="flex-1 space-y-1 px-2 pb-4">
                        <!-- Current: "bg-indigo-800 text-white", Default: "text-indigo-100 hover:bg-indigo-600" -->
                        <a wire:click="$set('itemSelect',1)"
                            class="{{ $itemSelect == 1 ? 'bg-lime-350 text-white' : 'text-indigo-100' }} hover:bg-lime-100 hover:text-black group flex items-center px-2 py-2 text-base font-medium rounded-md cursor-pointer">
                            <svg class="mr-3 h-6 w-6 flex-shrink-0  {{ $itemSelect == 1 ? 'text-white' : 'text-indigo-300' }}"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                            </svg>

                            Clientes
                        </a>

                        <a wire:click="$set('itemSelect','2')"
                            class="{{ $itemSelect == 2 ? 'bg-lime-350 text-white' : 'text-indigo-100' }} hover:bg-lime-100 hover:text-black group flex items-center px-2 py-2 text-base font-medium rounded-md cursor-pointer">
                            <svg class="mr-3 h-6 w-6 flex-shrink-0  {{ $itemSelect == 2 ? 'text-white' : 'text-indigo-300' }}"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                            </svg>
                            Disponibilidad
                        </a>

                        <a wire:click="$set('itemSelect','3')"
                            class="{{ $itemSelect == 3 ? 'bg-lime-350 text-white' : 'text-indigo-100' }} hover:bg-lime-100 hover:text-black group flex items-center px-2 py-2 text-base font-medium rounded-md cursor-pointer">
                            <svg class="mr-3 h-6 w-6 flex-shrink-0  {{ $itemSelect == 3 ? 'text-white' : 'text-indigo-300' }}"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                            </svg>
                            Viajes
                        </a>

                        <a wire:click="$set('itemSelect','4')"
                            class="{{ $itemSelect == 4 ? 'bg-lime-350 text-white' : 'text-indigo-100' }} hover:bg-lime-100 hover:text-black group flex items-center px-2 py-2 text-base font-medium rounded-md cursor-pointer">
                            <svg class="mr-3 h-6 w-6 flex-shrink-0  {{ $itemSelect == 4 ? 'text-white' : 'text-indigo-300' }}"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                            </svg>
                            Pagos
                        </a>

                        <a wire:click="$set('itemSelect','5')"
                            class="{{ $itemSelect == 5 ? 'bg-lime-350 text-white' : 'text-indigo-100' }} hover:bg-lime-100 hover:text-black group flex items-center px-2 py-2 text-base font-medium rounded-md cursor-pointer">
                            <svg class="mr-3 h-6 w-6 flex-shrink-0  {{ $itemSelect == 5 ? 'text-white' : 'text-indigo-300' }}"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                            </svg>
                            Unidades
                        </a>

                        <a wire:click="$set('itemSelect','6')"
                            class="{{ $itemSelect == 6 ? 'bg-lime-350 text-white' : 'text-indigo-100' }} hover:bg-lime-100 hover:text-black group flex items-center px-2 py-2 text-base font-medium rounded-md cursor-pointer">
                            <svg class="mr-3 h-6 w-6 flex-shrink-0  {{ $itemSelect == 6 ? 'text-white' : 'text-indigo-300' }}"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                            </svg>
                            Choferes
                        </a>

                        <a wire:click="$set('itemSelect','7')"
                            class="{{ $itemSelect == 7 ? 'bg-lime-350 text-white' : 'text-indigo-100' }} hover:bg-lime-100 hover:text-black group flex items-center px-2 py-2 text-base font-medium rounded-md cursor-pointer">
                            <svg class="mr-3 h-6 w-6 flex-shrink-0  {{ $itemSelect == 7 ? 'text-white' : 'text-indigo-300' }}"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                            </svg>
                            Reportes
                        </a>
                    </nav>
                </div>
            </div>
        </div>

        {{-- Panel Cambiante del menu --}}

        <div class="bg-white ">

            @switch($itemSelect)
                @case(1)
                    <div>
                        @livewire('clients', key('clients'))
                        {{ $text }}
                        <input type="text" wire:model="text">
                    </div>
                @break

                @case(2)
                    <div>
                        @livewire('disponibilities', key('disponibilities'))
                    </div>
                @break

                @case(3)
                    <div>
                        @livewire('travels', key('travels'))
                    </div>
                @break

                @case(4)
                    <div>
                        @livewire('budget', key('budget'))
                    </div>
                @break

                @case(5)
                    <div>
                        @livewire('payments', key('payments'))
                    </div>
                @break

                @case(6)
                    <div>
                        @livewire('units', key('units'))
                    </div>
                @break

                @case(7)
                    <div>
                        @livewire('driver', key('driver'))
                    </div>
                @break

                @default
            @endswitch


        </div>
    </div>
    <div class="hidden">
        @livewire('agregar-algo', key('agregar-algo'))
    </div>
