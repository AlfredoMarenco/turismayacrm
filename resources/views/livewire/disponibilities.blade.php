<div class="flex flex-1 flex-col md:pl-64">
    <div class="pt-6">
        {{-- heading --}}
        <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8">
            <div class="lg:flex lg:items-center lg:justify-between">
                <div class="md:pl-5 lg:pl-8 min-w-0 flex-1">
                    <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">
                        Panel de Clientes</h2>
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

                    {{--  <span class="md:pl-3 lg:pr-8 sm:ml-3">
                        <button type="button"
                            class="inline-flex items-center rounded-md border border-transparent bg-blue-900 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                            <!-- Heroicon name: mini/check -->
                            <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd" />
                            </svg>
                            Agregar Nuevo
                        </button>
                    </span> --}}
                </div>
            </div>
            {{-- main --}}
            <div class="lg:flex lg:h-full lg:flex-col lx:px-8">
                <header class="flex items-center justify-between border-b border-gray-200 py-4 px-6 lg:flex-none">
                    <h1 class="text-lg font-semibold text-gray-900">
                        <time datetime="2022-01">Enero 2023</time>
                    </h1>
                    <div class="flex items-center">
                        <div class="flex items-center rounded-md shadow-sm md:items-stretch">
                            <button type="button"
                                class="flex items-center justify-center rounded-l-md border border-r-0 border-gray-300 bg-white py-2 pl-3 pr-4 text-gray-400 hover:text-gray-500 focus:relative md:w-9 md:px-2 md:hover:bg-gray-50">
                                <span class="sr-only">Mes anterior</span>
                                <!-- Heroicon name: mini/chevron-left -->
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                            <button type="button"
                                class="hidden border-t border-b border-gray-300 bg-white px-3.5 text-sm font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900 focus:relative md:block">Today</button>
                            <span class="relative -mx-px h-5 w-px bg-gray-300 md:hidden"></span>
                            <button type="button"
                                class="flex items-center justify-center rounded-r-md border border-l-0 border-gray-300 bg-white py-2 pl-4 pr-3 text-gray-400 hover:text-gray-500 focus:relative md:w-9 md:px-2 md:hover:bg-gray-50">
                                <span class="sr-only">Next month</span>
                                <!-- Heroicon name: mini/chevron-right -->
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                        <div class="hidden md:ml-4 md:flex md:items-center">
                            <div class="relative">
                                <button type="button"
                                    class="flex items-center rounded-md border border-gray-300 bg-white py-2 pl-3 pr-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50"
                                    id="menu-button" aria-expanded="false" aria-haspopup="true">
                                    Month view
                                    <!-- Heroicon name: mini/chevron-down -->
                                    <svg class="ml-2 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>

                                <!--
              Dropdown menu, show/hide based on menu state.
  
              Entering: "transition ease-out duration-100"
                From: "transform opacity-0 scale-95"
                To: "transform opacity-100 scale-100"
              Leaving: "transition ease-in duration-75"
                From: "transform opacity-100 scale-100"
                To: "transform opacity-0 scale-95"
            -->
                                <div class="absolute right-0 z-10 mt-3 w-36 origin-top-right overflow-hidden rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                    role="menu" aria-orientation="vertical" aria-labelledby="menu-button"
                                    tabindex="-1">
                                    <div class="py-1" role="none">
                                        <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem"
                                            tabindex="-1" id="menu-item-0">Day view</a>
                                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem"
                                            tabindex="-1" id="menu-item-1">Week view</a>
                                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem"
                                            tabindex="-1" id="menu-item-2">Month view</a>
                                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem"
                                            tabindex="-1" id="menu-item-3">Year view</a>
                                    </div>
                                </div>
                            </div>
                            <div class="ml-6 h-6 w-px bg-gray-300"></div>
                            <button type="button"
                                class="ml-6 rounded-md border border-transparent bg-blue-900 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                Apartar Fecha
                            </button>
                        </div>
                        <div class="relative ml-6 md:hidden">
                            <button type="button"
                                class="-mx-2 flex items-center rounded-full border border-transparent p-2 text-gray-400 hover:text-gray-500"
                                id="menu-0-button" aria-expanded="false" aria-haspopup="true">
                                <span class="sr-only">Open menu</span>
                                <!-- Heroicon name: mini/ellipsis-horizontal -->
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M3 10a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM8.5 10a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM15.5 8.5a1.5 1.5 0 100 3 1.5 1.5 0 000-3z" />
                                </svg>
                            </button>

                            <!--
            Dropdown menu, show/hide based on menu state.
  
            Entering: "transition ease-out duration-100"
              From: "transform opacity-0 scale-95"
              To: "transform opacity-100 scale-100"
            Leaving: "transition ease-in duration-75"
              From: "transform opacity-100 scale-100"
              To: "transform opacity-0 scale-95"
          -->
                            <div class="absolute right-0 z-10 mt-3 w-36 origin-top-right divide-y divide-gray-100 overflow-hidden rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                role="menu" aria-orientation="vertical" aria-labelledby="menu-0-button"
                                tabindex="-1">
                                <div class="py-1" role="none">
                                    <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                    <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem"
                                        tabindex="-1" id="menu-0-item-0">Create event</a>
                                </div>
                                <div class="py-1" role="none">
                                    <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem"
                                        tabindex="-1" id="menu-0-item-1">Go to today</a>
                                </div>
                                <div class="py-1" role="none">
                                    <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem"
                                        tabindex="-1" id="menu-0-item-2">Day view</a>
                                    <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem"
                                        tabindex="-1" id="menu-0-item-3">Week view</a>
                                    <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem"
                                        tabindex="-1" id="menu-0-item-4">Month view</a>
                                    <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem"
                                        tabindex="-1" id="menu-0-item-5">Year view</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <div class="shadow ring-1 ring-black ring-opacity-5 lg:flex lg:flex-auto lg:flex-col">
                    <div
                        class="grid grid-cols-7 gap-px border-b border-gray-300 bg-gray-200 text-center text-xs font-semibold leading-6 text-gray-700 lg:flex-none">
                        <div class="flex justify-center bg-white py-2">
                            <span>M</span>
                            <span class="sr-only sm:not-sr-only">on</span>
                        </div>
                        <div class="flex justify-center bg-white py-2">
                            <span>T</span>
                            <span class="sr-only sm:not-sr-only">ue</span>
                        </div>
                        <div class="flex justify-center bg-white py-2">
                            <span>W</span>
                            <span class="sr-only sm:not-sr-only">ed</span>
                        </div>
                        <div class="flex justify-center bg-white py-2">
                            <span>T</span>
                            <span class="sr-only sm:not-sr-only">hu</span>
                        </div>
                        <div class="flex justify-center bg-white py-2">
                            <span>F</span>
                            <span class="sr-only sm:not-sr-only">ri</span>
                        </div>
                        <div class="flex justify-center bg-white py-2">
                            <span>S</span>
                            <span class="sr-only sm:not-sr-only">at</span>
                        </div>
                        <div class="flex justify-center bg-white py-2">
                            <span>S</span>
                            <span class="sr-only sm:not-sr-only">un</span>
                        </div>
                    </div>
                    <div class="flex bg-gray-200 text-xs leading-6 text-gray-700 lg:flex-auto">
                        <div class="hidden w-full lg:grid lg:grid-cols-7 lg:grid-rows-6 lg:gap-px">
                            <!--
            Always include: "relative py-2 px-3"
            Is current month, include: "bg-white"
            Is not current month, include: "bg-gray-50 text-gray-500"
          -->
                            <div class="relative bg-gray-50 py-2 px-3 text-gray-500">
                                <!--
              Is today, include: "flex h-6 w-6 items-center justify-center rounded-full bg-indigo-600 font-semibold text-white"
            -->
                                <time datetime="2021-12-27">27</time>
                            </div>
                            <div class="relative bg-gray-50 py-2 px-3 text-gray-500">
                                <time datetime="2021-12-28">28</time>
                            </div>
                            <div class="relative bg-gray-50 py-2 px-3 text-gray-500">
                                <time datetime="2021-12-29">29</time>
                            </div>
                            <div class="relative bg-gray-50 py-2 px-3 text-gray-500">
                                <time datetime="2021-12-30">30</time>
                            </div>
                            <div class="relative bg-gray-50 py-2 px-3 text-gray-500">
                                <time datetime="2021-12-31">31</time>
                            </div>
                            <div class="relative bg-white py-2 px-3">
                                <time datetime="2022-01-01">1</time>
                            </div>
                            <div class="relative bg-white py-2 px-3">
                                <time datetime="2022-01-01">2</time>
                            </div>
                            <div class="relative bg-white py-2 px-3">
                                <time datetime="2022-01-03">3</time>
                                <ol class="mt-2">
                                    <li>
                                        <a href="#" class="group flex">
                                            <p
                                                class="flex-auto truncate font-medium text-gray-900 group-hover:text-indigo-600">
                                                Design review</p>
                                            <time datetime="2022-01-03T10:00"
                                                class="ml-3 hidden flex-none text-gray-500 group-hover:text-indigo-600 xl:block">10AM</time>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="group flex">
                                            <p
                                                class="flex-auto truncate font-medium text-gray-900 group-hover:text-indigo-600">
                                                Sales meeting</p>
                                            <time datetime="2022-01-03T14:00"
                                                class="ml-3 hidden flex-none text-gray-500 group-hover:text-indigo-600 xl:block">2PM</time>
                                        </a>
                                    </li>
                                </ol>
                            </div>
                            <div class="relative bg-white py-2 px-3">
                                <time datetime="2022-01-04">4</time>
                            </div>
                            <div class="relative bg-white py-2 px-3">
                                <time datetime="2022-01-05">5</time>
                            </div>
                            <div class="relative bg-white py-2 px-3">
                                <time datetime="2022-01-06">6</time>
                            </div>
                            <div class="relative bg-white py-2 px-3">
                                <time datetime="2022-01-07">7</time>
                                <ol class="mt-2">
                                    <li>
                                        <a href="#" class="group flex">
                                            <p
                                                class="flex-auto truncate font-medium text-gray-900 group-hover:text-indigo-600">
                                                Date night</p>
                                            <time datetime="2022-01-08T18:00"
                                                class="ml-3 hidden flex-none text-gray-500 group-hover:text-indigo-600 xl:block">6PM</time>
                                        </a>
                                    </li>
                                </ol>
                            </div>
                            <div class="relative bg-white py-2 px-3">
                                <time datetime="2022-01-08">8</time>
                            </div>
                            <div class="relative bg-white py-2 px-3">
                                <time datetime="2022-01-09">9</time>
                            </div>
                            <div class="relative bg-white py-2 px-3">
                                <time datetime="2022-01-10">10</time>
                            </div>
                            <div class="relative bg-white py-2 px-3">
                                <time datetime="2022-01-11">11</time>
                            </div>
                            <div class="relative bg-white py-2 px-3">
                                <time datetime="2022-01-12"
                                    class="flex h-6 w-6 items-center justify-center rounded-full bg-indigo-600 font-semibold text-white">12</time>
                                <ol class="mt-2">
                                    <li>
                                        <a href="#" class="group flex">
                                            <p
                                                class="flex-auto truncate font-medium text-gray-900 group-hover:text-indigo-600">
                                                Sam's birthday party</p>
                                            <time datetime="2022-01-25T14:00"
                                                class="ml-3 hidden flex-none text-gray-500 group-hover:text-indigo-600 xl:block">2PM</time>
                                        </a>
                                    </li>
                                </ol>
                            </div>
                            <div class="relative bg-white py-2 px-3">
                                <time datetime="2022-01-13">13</time>
                            </div>
                            <div class="relative bg-white py-2 px-3">
                                <time datetime="2022-01-14">14</time>
                            </div>
                            <div class="relative bg-white py-2 px-3">
                                <time datetime="2022-01-15">15</time>
                            </div>
                            <div class="relative bg-white py-2 px-3">
                                <time datetime="2022-01-16">16</time>
                            </div>
                            <div class="relative bg-white py-2 px-3">
                                <time datetime="2022-01-17">17</time>
                            </div>
                            <div class="relative bg-white py-2 px-3">
                                <time datetime="2022-01-18">18</time>
                            </div>
                            <div class="relative bg-white py-2 px-3">
                                <time datetime="2022-01-19">19</time>
                            </div>
                            <div class="relative bg-white py-2 px-3">
                                <time datetime="2022-01-20">20</time>
                            </div>
                            <div class="relative bg-white py-2 px-3">
                                <time datetime="2022-01-21">21</time>
                            </div>
                            <div class="relative bg-white py-2 px-3">
                                <time datetime="2022-01-22">22</time>
                                <ol class="mt-2">
                                    <li>
                                        <a href="#" class="group flex">
                                            <p
                                                class="flex-auto truncate font-medium text-gray-900 group-hover:text-indigo-600">
                                                Maple syrup museum</p>
                                            <time datetime="2022-01-22T15:00"
                                                class="ml-3 hidden flex-none text-gray-500 group-hover:text-indigo-600 xl:block">3PM</time>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="group flex">
                                            <p
                                                class="flex-auto truncate font-medium text-gray-900 group-hover:text-indigo-600">
                                                Hockey game</p>
                                            <time datetime="2022-01-22T19:00"
                                                class="ml-3 hidden flex-none text-gray-500 group-hover:text-indigo-600 xl:block">7PM</time>
                                        </a>
                                    </li>
                                </ol>
                            </div>
                            <div class="relative bg-white py-2 px-3">
                                <time datetime="2022-01-23">23</time>
                            </div>
                            <div class="relative bg-white py-2 px-3">
                                <time datetime="2022-01-24">24</time>
                            </div>
                            <div class="relative bg-white py-2 px-3">
                                <time datetime="2022-01-25">25</time>
                            </div>
                            <div class="relative bg-white py-2 px-3">
                                <time datetime="2022-01-26">26</time>
                            </div>
                            <div class="relative bg-white py-2 px-3">
                                <time datetime="2022-01-27">27</time>
                            </div>
                            <div class="relative bg-white py-2 px-3">
                                <time datetime="2022-01-28">28</time>
                            </div>
                            <div class="relative bg-white py-2 px-3">
                                <time datetime="2022-01-29">29</time>
                            </div>
                            <div class="relative bg-white py-2 px-3">
                                <time datetime="2022-01-30">30</time>
                            </div>
                            <div class="relative bg-white py-2 px-3">
                                <time datetime="2022-01-31">31</time>
                            </div>
                            <div class="relative bg-gray-50 py-2 px-3 text-gray-500">
                                <time datetime="2022-02-01">1</time>
                            </div>
                            <div class="relative bg-gray-50 py-2 px-3 text-gray-500">
                                <time datetime="2022-02-02">2</time>
                            </div>
                            <div class="relative bg-gray-50 py-2 px-3 text-gray-500">
                                <time datetime="2022-02-03">3</time>
                            </div>
                            <div class="relative bg-gray-50 py-2 px-3 text-gray-500">
                                <time datetime="2022-02-04">4</time>
                                <ol class="mt-2">
                                    <li>
                                        <a href="#" class="group flex">
                                            <p
                                                class="flex-auto truncate font-medium text-gray-900 group-hover:text-indigo-600">
                                                Cinema with friends</p>
                                            <time datetime="2022-02-04T21:00"
                                                class="ml-3 hidden flex-none text-gray-500 group-hover:text-indigo-600 xl:block">9PM</time>
                                        </a>
                                    </li>
                                </ol>
                            </div>
                            <div class="relative bg-gray-50 py-2 px-3 text-gray-500">
                                <time datetime="2022-02-05">5</time>
                            </div>
                            <div class="relative bg-gray-50 py-2 px-3 text-gray-500">
                                <time datetime="2022-02-06">6</time>
                            </div>
                        </div>
                        <div class="isolate grid w-full grid-cols-7 grid-rows-6 gap-px lg:hidden">
                            <!--
            Always include: "flex h-14 flex-col py-2 px-3 hover:bg-gray-100 focus:z-10"
            Is current month, include: "bg-white"
            Is not current month, include: "bg-gray-50"
            Is selected or is today, include: "font-semibold"
            Is selected, include: "text-white"
            Is not selected and is today, include: "text-indigo-600"
            Is not selected and is current month, and is not today, include: "text-gray-900"
            Is not selected, is not current month, and is not today: "text-gray-500"
          -->
                            <button type="button"
                                class="flex h-14 flex-col bg-gray-50 py-2 px-3 text-gray-500 hover:bg-gray-100 focus:z-10">
                                <!--
              Always include: "ml-auto"
              Is selected, include: "flex h-6 w-6 items-center justify-center rounded-full"
              Is selected and is today, include: "bg-indigo-600"
              Is selected and is not today, include: "bg-gray-900"
            -->
                                <time datetime="2021-12-27" class="ml-auto">27</time>
                                <span class="sr-only">0 events</span>
                            </button>
                            <button type="button"
                                class="flex h-14 flex-col bg-gray-50 py-2 px-3 text-gray-500 hover:bg-gray-100 focus:z-10">
                                <time datetime="2021-12-28" class="ml-auto">28</time>
                                <span class="sr-only">0 events</span>
                            </button>
                            <button type="button"
                                class="flex h-14 flex-col bg-gray-50 py-2 px-3 text-gray-500 hover:bg-gray-100 focus:z-10">
                                <time datetime="2021-12-29" class="ml-auto">29</time>
                                <span class="sr-only">0 events</span>
                            </button>
                            <button type="button"
                                class="flex h-14 flex-col bg-gray-50 py-2 px-3 text-gray-500 hover:bg-gray-100 focus:z-10">
                                <time datetime="2021-12-30" class="ml-auto">30</time>
                                <span class="sr-only">0 events</span>
                            </button>
                            <button type="button"
                                class="flex h-14 flex-col bg-gray-50 py-2 px-3 text-gray-500 hover:bg-gray-100 focus:z-10">
                                <time datetime="2021-12-31" class="ml-auto">31</time>
                                <span class="sr-only">0 events</span>
                            </button>
                            <button type="button"
                                class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-01" class="ml-auto">1</time>
                                <span class="sr-only">0 events</span>
                            </button>
                            <button type="button"
                                class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-02" class="ml-auto">2</time>
                                <span class="sr-only">0 events</span>
                            </button>
                            <button type="button"
                                class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-03" class="ml-auto">3</time>
                                <span class="sr-only">2 events</span>
                                <span class="-mx-0.5 mt-auto flex flex-wrap-reverse">
                                    <span class="mx-0.5 mb-1 h-1.5 w-1.5 rounded-full bg-gray-400"></span>
                                    <span class="mx-0.5 mb-1 h-1.5 w-1.5 rounded-full bg-gray-400"></span>
                                </span>
                            </button>
                            <button type="button"
                                class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-04" class="ml-auto">4</time>
                                <span class="sr-only">0 events</span>
                            </button>
                            <button type="button"
                                class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-05" class="ml-auto">5</time>
                                <span class="sr-only">0 events</span>
                            </button>
                            <button type="button"
                                class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-06" class="ml-auto">6</time>
                                <span class="sr-only">0 events</span>
                            </button>
                            <button type="button"
                                class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-07" class="ml-auto">7</time>
                                <span class="sr-only">1 event</span>
                                <span class="-mx-0.5 mt-auto flex flex-wrap-reverse">
                                    <span class="mx-0.5 mb-1 h-1.5 w-1.5 rounded-full bg-gray-400"></span>
                                </span>
                            </button>
                            <button type="button"
                                class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-08" class="ml-auto">8</time>
                                <span class="sr-only">0 events</span>
                            </button>
                            <button type="button"
                                class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-09" class="ml-auto">9</time>
                                <span class="sr-only">0 events</span>
                            </button>
                            <button type="button"
                                class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-10" class="ml-auto">10</time>
                                <span class="sr-only">0 events</span>
                            </button>
                            <button type="button"
                                class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-11" class="ml-auto">11</time>
                                <span class="sr-only">0 events</span>
                            </button>
                            <button type="button"
                                class="flex h-14 flex-col bg-white py-2 px-3 font-semibold text-indigo-600 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-12" class="ml-auto">12</time>
                                <span class="sr-only">1 event</span>
                                <span class="-mx-0.5 mt-auto flex flex-wrap-reverse">
                                    <span class="mx-0.5 mb-1 h-1.5 w-1.5 rounded-full bg-gray-400"></span>
                                </span>
                            </button>
                            <button type="button"
                                class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-13" class="ml-auto">13</time>
                                <span class="sr-only">0 events</span>
                            </button>
                            <button type="button"
                                class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-14" class="ml-auto">14</time>
                                <span class="sr-only">0 events</span>
                            </button>
                            <button type="button"
                                class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-15" class="ml-auto">15</time>
                                <span class="sr-only">0 events</span>
                            </button>
                            <button type="button"
                                class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-16" class="ml-auto">16</time>
                                <span class="sr-only">0 events</span>
                            </button>
                            <button type="button"
                                class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-17" class="ml-auto">17</time>
                                <span class="sr-only">0 events</span>
                            </button>
                            <button type="button"
                                class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-18" class="ml-auto">18</time>
                                <span class="sr-only">0 events</span>
                            </button>
                            <button type="button"
                                class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-19" class="ml-auto">19</time>
                                <span class="sr-only">0 events</span>
                            </button>
                            <button type="button"
                                class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-20" class="ml-auto">20</time>
                                <span class="sr-only">0 events</span>
                            </button>
                            <button type="button"
                                class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-21" class="ml-auto">21</time>
                                <span class="sr-only">0 events</span>
                            </button>
                            <button type="button"
                                class="flex h-14 flex-col bg-white py-2 px-3 font-semibold text-white hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-22"
                                    class="ml-auto flex h-6 w-6 items-center justify-center rounded-full bg-gray-900">22</time>
                                <span class="sr-only">2 events</span>
                                <span class="-mx-0.5 mt-auto flex flex-wrap-reverse">
                                    <span class="mx-0.5 mb-1 h-1.5 w-1.5 rounded-full bg-gray-400"></span>
                                    <span class="mx-0.5 mb-1 h-1.5 w-1.5 rounded-full bg-gray-400"></span>
                                </span>
                            </button>
                            <button type="button"
                                class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-23" class="ml-auto">23</time>
                                <span class="sr-only">0 events</span>
                            </button>
                            <button type="button"
                                class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-24" class="ml-auto">24</time>
                                <span class="sr-only">0 events</span>
                            </button>
                            <button type="button"
                                class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-25" class="ml-auto">25</time>
                                <span class="sr-only">0 events</span>
                            </button>
                            <button type="button"
                                class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-26" class="ml-auto">26</time>
                                <span class="sr-only">0 events</span>
                            </button>
                            <button type="button"
                                class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-27" class="ml-auto">27</time>
                                <span class="sr-only">0 events</span>
                            </button>
                            <button type="button"
                                class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-28" class="ml-auto">28</time>
                                <span class="sr-only">0 events</span>
                            </button>
                            <button type="button"
                                class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-29" class="ml-auto">29</time>
                                <span class="sr-only">0 events</span>
                            </button>
                            <button type="button"
                                class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-30" class="ml-auto">30</time>
                                <span class="sr-only">0 events</span>
                            </button>
                            <button type="button"
                                class="flex h-14 flex-col bg-white py-2 px-3 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-31" class="ml-auto">31</time>
                                <span class="sr-only">0 events</span>
                            </button>
                            <button type="button"
                                class="flex h-14 flex-col bg-gray-50 py-2 px-3 text-gray-500 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-02-01" class="ml-auto">1</time>
                                <span class="sr-only">0 events</span>
                            </button>
                            <button type="button"
                                class="flex h-14 flex-col bg-gray-50 py-2 px-3 text-gray-500 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-02-02" class="ml-auto">2</time>
                                <span class="sr-only">0 events</span>
                            </button>
                            <button type="button"
                                class="flex h-14 flex-col bg-gray-50 py-2 px-3 text-gray-500 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-02-03" class="ml-auto">3</time>
                                <span class="sr-only">0 events</span>
                            </button>
                            <button type="button"
                                class="flex h-14 flex-col bg-gray-50 py-2 px-3 text-gray-500 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-02-04" class="ml-auto">4</time>
                                <span class="sr-only">1 event</span>
                                <span class="-mx-0.5 mt-auto flex flex-wrap-reverse">
                                    <span class="mx-0.5 mb-1 h-1.5 w-1.5 rounded-full bg-gray-400"></span>
                                </span>
                            </button>
                            <button type="button"
                                class="flex h-14 flex-col bg-gray-50 py-2 px-3 text-gray-500 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-02-05" class="ml-auto">5</time>
                                <span class="sr-only">0 events</span>
                            </button>
                            <button type="button"
                                class="flex h-14 flex-col bg-gray-50 py-2 px-3 text-gray-500 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-02-06" class="ml-auto">6</time>
                                <span class="sr-only">0 events</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="py-10 px-4 sm:px-6 lg:hidden">
                    <ol
                        class="divide-y divide-gray-100 overflow-hidden rounded-lg bg-white text-sm shadow ring-1 ring-black ring-opacity-5">
                        <li class="group flex p-4 pr-6 focus-within:bg-gray-50 hover:bg-gray-50">
                            <div class="flex-auto">
                                <p class="font-semibold text-gray-900">Maple syrup museum</p>
                                <time datetime="2022-01-15T09:00" class="mt-2 flex items-center text-gray-700">
                                    <!-- Heroicon name: mini/clock -->
                                    <svg class="mr-2 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm.75-13a.75.75 0 00-1.5 0v5c0 .414.336.75.75.75h4a.75.75 0 000-1.5h-3.25V5z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    3PM
                                </time>
                            </div>
                            <a href="#"
                                class="ml-6 flex-none self-center rounded-md border border-gray-300 bg-white py-2 px-3 font-semibold text-gray-700 opacity-0 shadow-sm hover:bg-gray-50 focus:opacity-100 group-hover:opacity-100">Edit<span
                                    class="sr-only">, Maple syrup museum</span></a>
                        </li>

                        <li class="group flex p-4 pr-6 focus-within:bg-gray-50 hover:bg-gray-50">
                            <div class="flex-auto">
                                <p class="font-semibold text-gray-900">Hockey game</p>
                                <time datetime="2022-01-22T19:00" class="mt-2 flex items-center text-gray-700">
                                    <!-- Heroicon name: mini/clock -->
                                    <svg class="mr-2 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm.75-13a.75.75 0 00-1.5 0v5c0 .414.336.75.75.75h4a.75.75 0 000-1.5h-3.25V5z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    7PM
                                </time>
                            </div>
                            <a href="#"
                                class="ml-6 flex-none self-center rounded-md border border-gray-300 bg-white py-2 px-3 font-semibold text-gray-700 opacity-0 shadow-sm hover:bg-gray-50 focus:opacity-100 group-hover:opacity-100">Edit<span
                                    class="sr-only">, Hockey game</span></a>
                        </li>
                    </ol>
                </div>
            </div>

        </div>
    </div>

   <div class="hidden">
    @livewire('apartarfecha', key('apartarfecha'))
   </div>
</div>
