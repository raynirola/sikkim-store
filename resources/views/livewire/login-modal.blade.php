<div class="px-2 md:px-3 py-4">
    <button type="button"
            class="group transition ease-in-out duration-150 flex items-center justify-center focus:outline-none"
            x-on:click="modal = true">
        <svg class="w-5 group-hover:text-black transition ease-in-out duration-150"
             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
             stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
        </svg>
    </button>
    <div x-show.transition="modal"
         class="px-0 pb-0 md:pb-0 md:px-0 fixed top-0 inset-0 z-30 w-screen h-screen bg-gradient-overlay">
        <div class="h-full w-full flex items-end md:items-center justify-center">
            <div
                class="w-full md:w-3/5 lg:w-5/12 bg-gray-50 px-4 md:px-10 pt-10 pb-24 md:pb-10 md:rounded-md shadow-md relative font-bodyFont"
                x-on:click.away="modal = false">
                <div class="">
                    <a href="{{ route('home.index') }}" class="mb-4">
                        <img src="{{ asset('images/logo-flat.png') }}"
                             class="mx-auto h-20 w-20 object-cover rounded-full shadow" alt="">
                    </a>
                    <h2 class="font-titleFont text-center text-lg md:text-xl tracking-wide leading-9 font-normal text-gray-900">
                        Sign in to your account
                    </h2>
                    @if(Route::has('register'))
                        <p class="mt-1 text-center text-xs md:text-sm leading-5 text-gray-600">
                            Or
                            <a href="{{ '/register' }}"
                               class="inline-flex items-center font-medium text-green-600 hover:text-green-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                                Register for free
                                <svg class="h-4 w-4 md:w-5 md:h-5" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20"
                                     fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </a>
                        </p>
                    @endif
                </div>
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
                            <input aria-label="Password" wire:model.lazy="password"
                                   name="password" type="password" required
                                   class="appearance-none rounded-md relative block w-full px-3 py-3 border border-gray-300 @error('password'){{'border-red-500'}}@enderror placeholder-gray-500 text-gray-900 focus:outline-none focus:shadow-outline-blue focus:border-green-500 focus:z-10 text-base sm:text-sm sm:leading-5 relative"
                                   placeholder="Password"/>
                            @error('password')
                            <span class="pl-2 text-xs text-red-600 font-light"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>
                    </div>

                    <div class="mt-6 flex items-center justify-between">
                        <div class="flex items-center text-sm text-gray-600">
                            <input id="remember" wire:model.laxy="remember"
                                   name="remember" type="checkbox"
                                   class="form-checkbox h-4 w-4 text-brand-700 transition duration-150 ease-in-out mr-2" {{old('remember') == 'on' ? 'checked' : ''}}
                            <label for="remember" class="block leading-5">
                                Remember me
                            </label>
                        </div>
                        @if(Route::has('password.reset'))
                            <div class="text-sm leading-5">
                                <a href="{{ '/password/reset/' }}"
                                   class="font-normal text-brand-700 underline hover:text-brand-600 focus:outline-none focus:underline transition ease-in-out duration-150">
                                    Forgot your password?
                                </a>
                            </div>
                        @endif
                    </div>

                    <div class="mt-6">
                        <button type="submit"
                                class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-brand-700 hover:bg-brand-600 focus:outline-none focus:border-green-700 focus:shadow-outline-green active:bg-green-700 transition duration-150 ease-in-out">
                            Sign in
                        </button>
                    </div>
                </form>

                <div
                    class="absolute right-0 top-0 mt-2 mr-2 text-black p-2 flex items-center justify-center cursor-pointer"
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
</div>
