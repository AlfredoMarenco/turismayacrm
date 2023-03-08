<div class="h-screen flex flex-1 flex-col md:pl-64">
    <div class="pt-6">
        {{-- heading --}}
        <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8">
            <div class="lg:flex lg:items-center lg:justify-between">
                <div class="md:pl-5 lg:pl-8 min-w-0 flex-1">
                    <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">
                        Panel de disponibilidad</h2>
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
                        <button type="button" wire:click="$set('saveDate',true)"
                            class="inline-flex items-center rounded-md border border-transparent bg-blue-900 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                            <!-- Heroicon name: mini/check -->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                class="w-5 h-5 mr-2">
                                <path
                                    d="M5.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H6a.75.75 0 01-.75-.75V12zM6 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H6zM7.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H8a.75.75 0 01-.75-.75V12zM8 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H8zM9.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V10zM10 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H10zM9.25 14a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V14zM12 9.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V10a.75.75 0 00-.75-.75H12zM11.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H12a.75.75 0 01-.75-.75V12zM12 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H12zM13.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H14a.75.75 0 01-.75-.75V10zM14 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H14z" />
                                <path fill-rule="evenodd"
                                    d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"
                                    clip-rule="evenodd" />
                            </svg>
                            Apartar fecha
                        </button>
                    </span>
                </div>
            </div>
        </div>
        <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8">
            <div class="p-8">
                <div class="relative grid grid-cols-1 gap-x-14 md:grid-cols-2">
                    <button type="button"
                        class="absolute -top-1 -left-1.5 flex items-center justify-center p-1.5 text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Previous month</span>
                        <!-- Heroicon name: mini/chevron-left -->
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <button type="button"
                        class="absolute -top-1 -right-1.5 flex items-center justify-center p-1.5 text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Next month</span>
                        <!-- Heroicon name: mini/chevron-right -->
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <section class="text-center">
                        <h2 class="font-semibold text-gray-900">January</h2>
                        <div class="mt-6 grid grid-cols-7 text-xs leading-6 text-gray-500">
                            <div>M</div>
                            <div>T</div>
                            <div>W</div>
                            <div>T</div>
                            <div>F</div>
                            <div>S</div>
                            <div>S</div>
                        </div>
                        <div
                            class="isolate mt-2 grid grid-cols-7 gap-px rounded-lg bg-gray-200 text-sm shadow ring-1 ring-gray-200">
                            <!--
                        Always include: "py-1.5 hover:bg-gray-100 focus:z-10"
                        Is current month, include: "bg-white text-gray-900"
                        Is not current month, include: "bg-gray-50 text-gray-400"

                        Top left day, include: "rounded-tl-lg"
                        Top right day, include: "rounded-tr-lg"
                        Bottom left day, include: "rounded-bl-lg"
                        Bottom right day, include: "rounded-br-lg"
                      -->
                            <button type="button"
                                class="relative rounded-tl-lg bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                                <!--
                          Always include: "mx-auto flex h-7 w-7 items-center justify-center rounded-full"
                          Is today, include: "bg-indigo-600 font-semibold text-white"
                        -->
                                <time datetime="2021-12-27"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">27</time>
                            </button>
                            <button type="button"
                                class="relative bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                                <time datetime="2021-12-28"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">28</time>
                            </button>
                            <button type="button"
                                class="relative bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                                <time datetime="2021-12-29"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">29</time>
                            </button>
                            <button type="button"
                                class="relative bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                                <time datetime="2021-12-30"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">30</time>
                            </button>
                            <button type="button"
                                class="relative bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                                <time datetime="2021-12-31"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">31</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-01"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">1</time>
                            </button>
                            <button type="button"
                                class="relative rounded-tr-lg bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-02"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">2</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-03"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">3</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-04"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">4</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-05"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">5</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-06"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">6</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-07"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">7</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-08"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">8</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-09"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">9</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-10"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">10</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-11"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">11</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-12"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full bg-indigo-600 font-semibold text-white">12</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-13"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">13</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-14"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">14</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-15"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">15</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-16"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">16</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-17"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">17</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-18"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">18</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-19"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">19</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-20"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">20</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-21"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">21</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-22"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">22</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-23"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">23</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-24"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">24</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-25"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">25</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-26"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">26</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-27"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">27</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-28"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">28</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-29"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">29</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-30"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">30</time>
                            </button>
                            <button type="button"
                                class="relative rounded-bl-lg bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-31"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">31</time>
                            </button>
                            <button type="button"
                                class="relative bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-02-01"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">1</time>
                            </button>
                            <button type="button"
                                class="relative bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-02-02"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">2</time>
                            </button>
                            <button type="button"
                                class="relative bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-02-03"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">3</time>
                            </button>
                            <button type="button"
                                class="relative bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-02-04"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">4</time>
                            </button>
                            <button type="button"
                                class="relative bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-02-05"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">5</time>
                            </button>
                            <button type="button"
                                class="relative rounded-br-lg bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-02-06"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">6</time>
                            </button>
                        </div>
                    </section>
                    <section class="hidden text-center md:block">
                        <h2 class="font-semibold text-gray-900">February</h2>
                        <div class="mt-6 grid grid-cols-7 text-xs leading-6 text-gray-500">
                            <div>M</div>
                            <div>T</div>
                            <div>W</div>
                            <div>T</div>
                            <div>F</div>
                            <div>S</div>
                            <div>S</div>
                        </div>
                        <div
                            class="isolate mt-2 grid grid-cols-7 gap-px rounded-lg bg-gray-200 text-sm shadow ring-1 ring-gray-200">
                            <button type="button"
                                class="relative rounded-tl-lg bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-31"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">31</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-02-01"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">1</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-02-02"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">2</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-02-03"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">3</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-02-04"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">4</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-02-05"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">5</time>
                            </button>
                            <button type="button"
                                class="relative rounded-tr-lg bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-02-06"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">6</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-02-07"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">7</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-02-08"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">8</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-02-09"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">9</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-02-10"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">10</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-02-11"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">11</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-02-12"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">12</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-02-13"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">13</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-02-14"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">14</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-02-15"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">15</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-02-16"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">16</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-02-17"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">17</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-02-18"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">18</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-02-19"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">19</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-02-20"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">20</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-02-21"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">21</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-02-22"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">22</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-02-23"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">23</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-02-24"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">24</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-02-25"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">25</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-02-26"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">26</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-02-27"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">27</time>
                            </button>
                            <button type="button"
                                class="relative bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-02-28"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">28</time>
                            </button>
                            <button type="button"
                                class="relative bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-03-01"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">1</time>
                            </button>
                            <button type="button"
                                class="relative bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-03-02"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">2</time>
                            </button>
                            <button type="button"
                                class="relative bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-03-03"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">3</time>
                            </button>
                            <button type="button"
                                class="relative bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-03-04"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">4</time>
                            </button>
                            <button type="button"
                                class="relative bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-03-05"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">5</time>
                            </button>
                            <button type="button"
                                class="relative bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-03-06"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">6</time>
                            </button>
                            <button type="button"
                                class="relative rounded-bl-lg bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-03-07"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">7</time>
                            </button>
                            <button type="button"
                                class="relative bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-03-08"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">8</time>
                            </button>
                            <button type="button"
                                class="relative bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-03-09"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">9</time>
                            </button>
                            <button type="button"
                                class="relative bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-03-10"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">10</time>
                            </button>
                            <button type="button"
                                class="relative bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-03-11"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">11</time>
                            </button>
                            <button type="button"
                                class="relative bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-03-12"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">12</time>
                            </button>
                            <button type="button"
                                class="relative rounded-br-lg bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-03-13"
                                    class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">13</time>
                            </button>
                        </div>
                    </section>
                </div>
                <section class="mt-12">
                    <h2 class="font-semibold text-gray-900">Upcoming events</h2>
                    <ol class="mt-2 divide-y divide-gray-200 text-sm leading-6 text-gray-500">
                        <li class="py-4 sm:flex">
                            <time datetime="2022-01-17" class="w-28 flex-none">Wed, Jan 12</time>
                            <p class="mt-2 flex-auto sm:mt-0">Nothing on today’s schedule</p>
                        </li>
                        <li class="py-4 sm:flex">
                            <time datetime="2022-01-19" class="w-28 flex-none">Thu, Jan 13</time>
                            <p class="mt-2 flex-auto font-semibold text-gray-900 sm:mt-0">View house with real estate
                                agent</p>
                            <p class="flex-none sm:ml-6"><time datetime="2022-01-13T14:30">2:30 PM</time> - <time
                                    datetime="2022-01-13T16:30">4:30 PM</time></p>
                        </li>
                        <li class="py-4 sm:flex">
                            <time datetime="2022-01-20" class="w-28 flex-none">Fri, Jan 14</time>
                            <p class="mt-2 flex-auto font-semibold text-gray-900 sm:mt-0">Meeting with bank manager</p>
                            <p class="flex-none sm:ml-6">All day</p>
                        </li>
                        <li class="py-4 sm:flex">
                            <time datetime="2022-01-18" class="w-28 flex-none">Mon, Jan 17</time>
                            <p class="mt-2 flex-auto font-semibold text-gray-900 sm:mt-0">Sign paperwork at lawyers</p>
                            <p class="flex-none sm:ml-6"><time datetime="2022-01-17T10:00">10:00 AM</time> - <time
                                    datetime="2022-01-17T10:15">10:15 AM</time></p>
                        </li>
                    </ol>
                </section>
            </div>

        </div>
    </div>


    @if ($saveDate)
        <div class="fixed inset-0 bg-gray-400 bg-opacity-75"></div>
        <!-- agregar cliente -->
        <div class="relative z-10 " aria-labelledby="slide-over-title" role="dialog" aria-modal="true">
            <!-- Background backdrop, show/hide based on slide-over state. -->
            <div class="fixed inset-0"></div>

            <div class="fixed inset-0 overflow-hidden">
                <div class="absolute inset-0 overflow-hidden">
                    <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10">
                        <div class="pointer-events-auto w-screen max-w-md">
                            <form class="flex h-full flex-col overflow-y-scroll bg-white shadow-xl">
                                <div class="bg-blue-900 py-6 px-4 sm:px-6">
                                    <div class="flex items-center justify-between">
                                        <h2 class="text-lg font-medium text-white" id="slide-over-title">Apartar fecha
                                        </h2>
                                        <div class="ml-3 flex h-7 items-center">
                                            <button type="button" wire:click="$set('saveDate',false)"
                                                class="rounded-md  text-indigo-200 hover:text-white focus:outline-none focus:ring-2 focus:ring-white">
                                                <span class="sr-only">Close panel</span>
                                                <!-- Heroicon name: outline/x-mark -->
                                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="mt-1">
                                        <p class="text-sm text-indigo-300">Seleccione un cliente y asigne una unidad
                                        </p>
                                    </div>
                                </div>
                                <div class="relative flex-1 py-6 px-4 sm:px-6 overflow-auto">
                                    <!-- Replace with your content -->
                                    <div class="absolute inset-0 py-6 px-4 sm:px-6 bg-white">
                                        <div class="pt-1">
                                            <div class=" grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                                                <div class="sm:col-span-6">
                                                    <div>
                                                        <label for="combobox"
                                                            class="block text-sm font-medium text-gray-700">Cliente</label>
                                                        <select wire:model="client"
                                                            class="mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                                            <option value="" selected disabled>Selecciona una
                                                                opcion</option>
                                                            @foreach ($users as $user)
                                                                <option value="{{ $user->id }}">{{ $user->id }}
                                                                    - {{ $user->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="sm:col-span-6">
                                                    <div>
                                                        <label for="unidad"
                                                            class="block text-sm font-medium text-gray-700">Unidades</label>
                                                        <select wire:model="budget"
                                                            class="mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                                            <option value="" selected disabled>Selecciona una
                                                                opcion</option>
                                                            @if ($budgets)
                                                                @foreach ($budgets as $budget)
                                                                    <option value="{{ $budget->id }}" selected>
                                                                        {{ $budget->name }} -
                                                                        <span>{{ $budget->id }}</span>
                                                                    </option>
                                                                @endforeach
                                                            @endif
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-6">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 ">Fecha de
                                                            inicio</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">

                                                            <input type="date" wire:model="start_date" disabled
                                                                class="block w-full rounded-md border-gray-300 pl-3 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="0.00" aria-describedby="price-currency">

                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <span class="text-gray-500 sm:text-sm"
                                                                    id="price-currency">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        fill="none" viewBox="0 0 24 24"
                                                                        stroke-width="1.5" stroke="currentColor"
                                                                        class="w-6 h-6">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                                                    </svg>

                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-6">
                                                    <div>
                                                        <label for="price"
                                                            class="block text-sm font-medium text-gray-700 ">Fecha de
                                                            fin</label>
                                                        <div class="relative mt-1 rounded-md shadow-sm">

                                                            <input type="date" wire:model="end_date" disabled
                                                                class="block w-full rounded-md border-gray-300 pl-3 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                                placeholder="0.00" aria-describedby="price-currency">

                                                            <div
                                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                                <span class="text-gray-500 sm:text-sm"
                                                                    id="price-currency">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        fill="none" viewBox="0 0 24 24"
                                                                        stroke-width="1.5" stroke="currentColor"
                                                                        class="w-6 h-6">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-6">
                                                    <div>
                                                        <label for="unidad"
                                                            class="block text-sm font-medium text-gray-700">Unidades</label>
                                                        <select wire:model="unit"
                                                            class="mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                                            <option value="" selected disabled>Selecciona una
                                                                opcion</option>
                                                            @foreach ($units as $unit)
                                                                <option value="{{ $unit->id }}">{{ $unit->model }}
                                                                    - {{ $unit->id_unit }}
                                                                </option>
                                                            @endforeach
                                                            <option value="-1">Subarriendo</option>{{-- Esta opción debe mantenerse estática, al seleccionarla el chofer cambiará a "proveedor" --}}
                                                        </select>
                                                    </div>

                                                </div>

                                                <div class="sm:col-span-6">
                                                    <div>
                                                        <label for="choferes"
                                                            class="block text-sm font-medium text-gray-700">Chofer</label>
                                                        <select wire:model="driver"
                                                            class="mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                                            <option>Chofer uno</option>
                                                            <option selected>Chofer dos</option>
                                                            <option>Chofer tres</option>
                                                            <option value="proveedor">Proveedor</option>{{-- Esta opción debe mantenerse estática, deberá marcarse cuando el usuario seleccione "subarriendo" --}}
                                                        </select>
                                                    </div>

                                                </div>
                                                <div class="sm:col-span-6">
                                                    <label for="rfc"
                                                        class="block text-sm font-medium text-gray-700">Comentario</label>
                                                    <div class="relative mt-1 rounded-md shadow-sm">
                                                        <input type="text" name="comment" id="comment"
                                                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /End replace -->
                                </div>
                                <div class="flex flex-shrink-0 justify-end px-4 py-4">
                                    <button type="button" wire:click="$set('saveDate',false)"
                                        class="rounded-md border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Cancelar</button>
                                    <button type="submit"
                                        class="ml-4 inline-flex justify-center rounded-md border border-transparent bg-blue-900 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Apartar
                                        fecha</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin agregar cliente -->
    @endif
</div>

<div class="hidden">
    @livewire('apartarfecha', key('apartarfecha'))
</div>
</div>
