<div x-show="modal" class="fixed z-10 inset-0 overflow-y-auto">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-10 text-center sm:block sm:p-0">
        <div x-show="modal" class="fixed inset-0 transition-opacity"
             x-transition:enter="duration-300 ease-out"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="duration-200 ease-in"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>&#8203;
        <div x-show="modal" x-transition:enter="duration-300 ease-out"
             x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
             x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
             x-transition:leave="ease-in duration-200"
             x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
             x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
             class="inline-block w-full align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
             role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <div class="">
                <div class="">
                    <div class="px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <img src="{{ asset('images/logo.png') }}"
                             class="mx-auto h-20 w-20 object-cover mb-1" alt="">
                        <h2 class="font-bodyFont text-center text-base md:text-xl text-lg leading-6 font-medium text-gray-900">
                            Early Access Registration
                        </h2>
                    </div>

                    @if( session('success') )
                        <div class="px-4 sm:p-6 sm:pb-4">
                            <div class="rounded-md bg-indigo-100 border border-indigo-400 p-3" x-show="toast">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <svg class="h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm leading-5 font-medium text-indigo-600">
                                            {{ session('success') }}
                                        </p>
                                    </div>
                                    <div class="ml-auto pl-3">
                                        <div class="-mx-1.5 -my-1.5">
                                            <button
                                                type="button"
                                                x-on:click="toast = false"
                                                class="inline-flex rounded-md p-1.5 text-indigo-500 focus:outline-none focus:bg-indigo-100 transition ease-in-out duration-150"
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
                        </div>
                    @endif

                    <form wire:submit.prevent="submit">
                        @csrf
                        <div class="px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                            <div>
                                <input aria-label="Email address" wire:model.defer="email"
                                       name="email" type="email" value="{{ old('email') }}" required
                                       class="appearance-none rounded-md relative block w-full px-3 py-3 border border-gray-300 @error('email'){{'border-red-500'}}@enderror placeholder-gray-500 text-gray-900  focus:outline-none focus:shadow-outline-blue focus:border-indigo-500 focus:z-10 text-base sm:text-sm sm:leading-5"
                                       placeholder="Email address"/>
                                @error('email')
                                <span class="pl-2 text-xs text-red-600 font-light"><strong>{{$message}}</strong></span>
                                @enderror
                            </div>
                            <div class="mt-4">
                                <input aria-label="Name" wire:model.defer="name"
                                       name="name" type="text" required
                                       class="appearance-none rounded-md relative block w-full px-3 py-3 border border-gray-300 @error('name'){{'border-red-500'}}@enderror placeholder-gray-500 text-gray-900 focus:outline-none focus:shadow-outline-blue focus:border-indigo-500 focus:z-10 text-base sm:text-sm sm:leading-5 relative"
                                       placeholder="Full Name"/>
                                @error('name')
                                <span class="pl-2 text-xs text-red-600 font-light"><strong>{{$message}}</strong></span>
                                @enderror
                            </div>
                            <div class="mt-4">
                                <input aria-label="Phone" wire:model.defer="phone"
                                       name="phone" type="tel" required
                                       class="appearance-none rounded-md relative block w-full px-3 py-3 border border-gray-300 @error('phone'){{'border-red-500'}}@enderror placeholder-gray-500 text-gray-900 focus:outline-none focus:shadow-outline-blue focus:border-indigo-500 focus:z-10 text-base sm:text-sm sm:leading-5 relative"
                                       placeholder="Phone Number"/>
                                @error('phone')
                                <span class="pl-2 text-xs text-red-600 font-light"><strong>{{$message}}</strong></span>
                                @enderror
                            </div>
                            <div class="mt-4">
                                <input aria-label="Business Name" wire:model.defer="business"
                                       name="business" type="text"
                                       class="appearance-none rounded-md relative block w-full px-3 py-3 border border-gray-300 @error('business'){{'border-red-500'}}@enderror placeholder-gray-500 text-gray-900 focus:outline-none focus:shadow-outline-blue focus:border-indigo-500 focus:z-10 text-base sm:text-sm sm:leading-5 relative"
                                       placeholder="Business Name"/>
                                @error('business')
                                <span class="pl-2 text-xs text-red-600 font-light"><strong>{{$message}}</strong></span>
                                @enderror
                            </div>
                        </div>

                        <div class="bg-gray-200 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                            <div class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                <button type="submit"
                                        class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-indigo-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                    Register
                                </button>
                            </div>
                            <div class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
                                <button x-on:click="modal = false" type="button"
                                        class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
