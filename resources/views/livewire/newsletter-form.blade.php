<div class="flex flex-col justify-center items-center p-6 md:p-8" x-data="{open : true}">
    <p class="font-titleFont uppercase text-lg tracking-wide text-secondary-800 mb-4">Subscribe to our
        newsletter</p>
    <p class="font-bodyFont text-xs text-secondary-500 leading-6 mb-4">
        Be the first to know about what we are up to, and get latest news, blogs, updates and maybe offers.
        Stay in touch with us, subscribe to your mailing list.
    </p>
    <form wire:submit.prevent="subscribe" action="{{ route('subscription.store') }}" method="post"
          class="hidden md:block w-full md:w-2/3">
        @csrf
        <div class="flex flex-col justify-start">
            <div class="flex items-center relative">
                <label for="emailSubs"></label>
                <input id="emailSubs"
                       wire:model.debounce.200ms="subscriber_email"
                       type="text" placeholder="Enter your email" autocomplete="off"
                       name="subscriber_email"
                       class="appearance-none rounded-md relative w-full px-3 py-3 border border-brand-700 @error('subscriber_email'){{'border-red-500'}} @enderror placeholder-secondary-700 text-secondary-700  focus:outline-none focus:shadow-outline-green focus:border-brand-700 text-xs font-bodyFont">
                <button type="submit"
                        class="text-sm flex items-center justify-center h-full py-3 px-8 absolute top-0 right-0 text-secondary-200  border-l bg-brand-700 rounded-r-md hover:text-white hover:bg-brand-600 disabled:opacity-75"
                        wire:loadng.taget=subscribe"
                        wire:loading.attr="disabled">
                    Subscribe
                    <svg class="animate-spin ml-3 h-5 w-5 text-white"
                         wire:loading
                         wire:target="subscribe"
                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor"
                              d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                </button>
            </div>
            @error('subscriber_email')
            <span
                class="mt-1 pl-2 text-xs font-normal font-bodyFont tracking-tight text-red-600 text-left">{{$message}}</span>
            @enderror
        </div>
    </form>
    <form wire:submit.prevent="subscribe" action="{{ route('subscription.store') }}" method="post"
          class="md:hidden w-full md:w-2/3">
        @csrf
        <div class="flex flex-col justify-start">
            <div class="flex flex-col">
                <label for="emailSubsResponsive"></label>
                <input
                    class="appearance-none rounded-md relative w-full px-3 py-3 border border-brand-700 @error('subscriber_email'){{'border-red-500'}} @enderror placeholder-secondary-700 text-secondary-700  focus:outline-none focus:shadow-outline-green focus:border-brand-700 text-base font-bodyFont"
                    id="emailSubsResponsive"
                    wire:model.debounce.200ms="subscriber_email"
                    type="text" placeholder="Enter your email" autocomplete="off"
                    name="subscriber_email">
                @error('subscriber_email')
                <span
                    class="mt-1 pl-1 text-xs font-normal font-bodyFont tracking-tight text-red-600 text-left">{{$message}}</span>
                @enderror
                <button type="submit"
                        class="mt-4 uppercase md:capitalize text-sm flex items-center justify-center h-full py-3 px-8 text-secondary-200  bg-brand-700 rounded-md hover:text-white hover:bg-brand-600 disabled:opacity-75"
                        wire:loadng.taget=subscribe"
                        wire:loading.attr="disabled">
                    Subscribe
                    <svg class="animate-spin ml-3 h-5 w-5 text-white"
                         wire:loading
                         wire:target="subscribe"
                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor"
                              d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                </button>
            </div>
        </div>
    </form>
    @if( session('success') )
        <div class="rounded-md bg-brand-100 border border-brand-400 p-4 mt-4 w-full md:w-2/3" x-show="open">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                              d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                              clip-rule="evenodd"/>
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm leading-5 font-medium text-green-800">
                        {{ session('success') }}
                    </p>
                </div>
                <div class="ml-auto pl-3">
                    <div class="-mx-1.5 -my-1.5">
                        <button
                            type="button"
                            x-on:click="open = false"
                            class="inline-flex rounded-md p-1.5 text-green-500 focus:outline-none focus:bg-green-100 transition ease-in-out duration-150"
                            aria-label="Dismiss">
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                      d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if( session('info') )
        <div class="rounded-md bg-blue-100 border border-blue-400 p-4 mt-4 w-full md:w-2/3" x-show="open">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-blue-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                              d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                              clip-rule="evenodd"/>
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm leading-5 font-medium text-blue-800">
                        {{ session('info') }}
                    </p>
                </div>
                <div class="ml-auto pl-3">
                    <div class="-mx-1.5 -my-1.5">
                        <button
                            type="button"
                            x-on:click="open = false"
                            class="inline-flex rounded-md p-1.5 text-blue-500 focus:outline-none focus:bg-blue-100 transition ease-in-out duration-150"
                            aria-label="Dismiss">
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                      d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
