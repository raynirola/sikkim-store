<div>
    <section class="text-gray-200 bg-brand-800">
        <div class="flex items-center justify-between font-titleFont font-medium">
            <div class="flex items-center justify-start flex-1">
                @if(request()->routeIs('home.index'))
                    <button type="button"
                            class="px-2 pl-4 md:px-5 py-4 border-r border-gray-700 group transition ease-in-out duration-150">
                        <svg class="w-5 group-hover:text-black transition ease-in-out duration-150"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </button>
                    <div class="relative">
                        <button
                            class="flex h-full items-center px-2 md:px-5 py-4 md:py-3 cursor-not-allowed group transition ease-in-out duration-150">
                            <div>
                                <svg class="w-5 group-hover:text-black" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M4 6h16M4 12h16M4 18h16"/>
                                </svg>
                            </div>
                            <div
                                class="hidden md:block font-bodyFont leading-none tracking-tight ml-4 font-light text-left group-hover:text-black">
                                <p class="text-xs">Select</p>
                                <p class="text-sm">Category</p>
                            </div>
                        </button>
                    </div>
                @else
                    <a href="{{ route('home') }}"
                       class="px-2 pl-4 md:px-5 py-4 group transition ease-in-out duration-150">
                        <svg class="w-5 group-hover:text-black transition ease-in-out duration-150"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                        </svg>
                    </a>
                @endif
            </div>
            <a href="{{ route('home') }}"
               class="flex-1 flex items-center justify-center font-bodyFont font-normal md:font-semibold tracking-wider uppercase hover:text-black transition ease-in-out duration-150">
                Sikkim Store
            </a>
            <div class="flex items-center justify-end flex-1">
                <a class="px-2 md:px-5 py-4 cursor-not-allowed group transition ease-in-out duration-150">
                    <svg class="w-5 group-hover:text-black transition ease-in-out duration-150"
                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                </a>
                <a class="px-2 md:px-5 py-4 cursor-not-allowed group transition ease-in-out duration-150">
                    <svg class="w-5 group-hover:text-black transition ease-in-out duration-150"
                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                </a>
                <a class="px-2 pr-4 md:px-5 py-4 cursor-not-allowed group transition ease-in-out duration-150">
                    <svg class="w-5 group-hover:text-black transition ease-in-out duration-150"
                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>
</div>
