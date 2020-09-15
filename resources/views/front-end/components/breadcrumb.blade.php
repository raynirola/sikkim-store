<div>
    <section
        class="pt-5 sm:pt-7 md:pt-14 pb-5 md:pb-32 flex items-center justify-center bg-gray-800">
        <div class="flex flex-col items-center justify-center">
            <span class="uppercase text-sm sm:text-lg md:text-xl font-normal tracking-widest font-titleFont mb-2 text-secondary-200">Contact Us</span>
            <div class="flex space-x-2 items-center text-secondary-300 text-xs font-bodyFont">
                <div class="group flex items-center">
                    <a href="{{ route('home') }}" class="hover:text-white">{{ 'Home' }}</a>
                    <svg class="w-4 group-hover:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                         fill="currentColor">
                        <path fill-rule="evenodd"
                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                              clip-rule="evenodd"/>
                    </svg>
                </div>
                @if(!empty($links))
                    @foreach( $links as $link )
                        <div>
                            <a href="{{ '' }}" class="hover:text-white">{{ $link }}</a>
                            <svg class="w-4 group-hover:text-white" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                      d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </div>
                    @endforeach
                @endif
                <span class="text-gray-400">{{ $currentPage }}</span>
            </div>
        </div>
    </section>
</div>
