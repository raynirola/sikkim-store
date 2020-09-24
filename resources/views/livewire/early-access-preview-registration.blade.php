<div x-show="modal"
     class="px-0 pb-0 md:pb-0 md:px-0 fixed top-0 inset-0 z-30 w-screen h-screen bg-gradient-overlay">
    <div class="h-full w-full flex items-end md:items-center justify-center">
        <div
            class="w-full md:w-3/5 lg:w-5/12 bg-gray-50 px-4 md:px-10 pt-10 pb-24 md:pb-10 md:rounded-md shadow-md relative font-bodyFont"
            x-on:click.away="modal = false">
            <div class="mb-4">
                <img src="{{ asset('images/logo-flat.png') }}"
                     class="mx-auto h-20 w-20 object-cover rounded-full shadow mb-2" alt="">
                <h2 class="font-bodyFont text-center text-lg md:text-xl tracking-wide leading-9 font-normal text-gray-900">
                    Early Access Registration
                </h2>
            </div>
            @if( session('success') )
                <div class="rounded-md bg-brand-100 border border-brand-400 p-4 mb-4" x-show="toast">
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
                                    x-on:click="toast = false"
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
            <form class="mt-8"
                  wire:submit.prevent="submit">
                @csrf
                <div class="">
                    <div>
                        <input aria-label="Email address" wire:model.lazy="email"
                               name="email" type="email" value="{{ old('email') }}" required
                               class="appearance-none rounded-md relative block w-full px-3 py-3 border border-gray-300 @error('email'){{'border-red-500'}}@enderror placeholder-gray-500 text-gray-900  focus:outline-none focus:shadow-outline-blue focus:border-green-500 focus:z-10 text-base sm:text-sm sm:leading-5"
                               placeholder="Email address"/>
                        @error('email')
                        <span class="pl-2 text-xs text-red-600 font-light"><strong>{{$message}}</strong></span>
                        @enderror
                    </div>
                    <div class="mt-4">
                        <input aria-label="Name" wire:model.lazy="name"
                               name="name" type="text" required
                               class="appearance-none rounded-md relative block w-full px-3 py-3 border border-gray-300 @error('name'){{'border-red-500'}}@enderror placeholder-gray-500 text-gray-900 focus:outline-none focus:shadow-outline-blue focus:border-green-500 focus:z-10 text-base sm:text-sm sm:leading-5 relative"
                               placeholder="Full Name"/>
                        @error('name')
                        <span class="pl-2 text-xs text-red-600 font-light"><strong>{{$message}}</strong></span>
                        @enderror
                    </div>
                    <div class="mt-4">
                        <input aria-label="Phone" wire:model.lazy="phone"
                               name="phone" type="tel" required
                               class="appearance-none rounded-md relative block w-full px-3 py-3 border border-gray-300 @error('phone'){{'border-red-500'}}@enderror placeholder-gray-500 text-gray-900 focus:outline-none focus:shadow-outline-blue focus:border-green-500 focus:z-10 text-base sm:text-sm sm:leading-5 relative"
                               placeholder="Phone Number"/>
                        @error('phone')
                        <span class="pl-2 text-xs text-red-600 font-light"><strong>{{$message}}</strong></span>
                        @enderror
                    </div>
                    <div class="mt-4">
                        <input aria-label="Business Name" wire:model.lazy="business"
                               name="business" type="text" required
                               class="appearance-none rounded-md relative block w-full px-3 py-3 border border-gray-300 @error('business'){{'border-red-500'}}@enderror placeholder-gray-500 text-gray-900 focus:outline-none focus:shadow-outline-blue focus:border-green-500 focus:z-10 text-base sm:text-sm sm:leading-5 relative"
                               placeholder="Business Name"/>
                        @error('business')
                        <span class="pl-2 text-xs text-red-600 font-light"><strong>{{$message}}</strong></span>
                        @enderror
                    </div>
                </div>
                <div class="mt-6">
                    <button type="submit"
                            class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-brand-700 hover:bg-brand-600 focus:outline-none focus:border-green-700 focus:shadow-outline-green active:bg-green-700 transition duration-150 ease-in-out">
                        Sign up
                    </button>
                </div>
            </form>

            <div class="absolute right-0 top-0 mt-2 mr-2 text-black p-2 flex items-center justify-center cursor-pointer"
                 x-on:click="modal = false">
                <svg class="w-5 h-5 text-red-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                     fill="currentColor">
                    <path fill-rule="evenodd"
                          d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                          clip-rule="evenodd"/>
                </svg>
            </div>
        </div>
    </div>
</div>
