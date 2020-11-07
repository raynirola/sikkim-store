<div class="flex flex-col justify-center mx-auto lg:w-4/6" x-data="{ open : true}">
    @if( session('success') )
        <div class="rounded-md bg-indigo-100 border border-indigo-400 p-4 mb-4" x-show="open">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-indigo-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                              d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                              clip-rule="evenodd"/>
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm leading-5 font-medium text-indigo-800">
                        {{ session('success') }}
                    </p>
                </div>
                <div class="ml-auto pl-3">
                    <div class="-mx-1.5 -my-1.5">
                        <button
                            type="button"
                            x-on:click="open = false"
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
    @endif
    <form id="contact-form"
          wire:submit.prevent="submitContactForm"
          action="{{ route('contact.store') }}"
          method="post">
        @csrf
        <div class="mb-2">
            <label for="name"
                   class="mb-1 text-xs font-bodyFont font-normal text-secondary-500">Name</label>
            <input id="name"
                   wire:model.defer="name"
                   name="name"
                   class="appearance-none rounded-md relative block w-full px-3 py-3 md:py-2 border border-secondary-200 @error('name'){{'border-red-500'}} @enderror placeholder-secondary-500 text-secondary-700  focus:outline-none focus:shadow-outline-indigo focus:border-indigo-700 focus:z-10 text-base md:text-sm font-bodyFont sm:leading-5"
                   placeholder="John Doe"
                   type="text">
            @error('name')
            <span
                class="pl-2 text-xs font-normal font-bodyFont tracking-tight text-red-600">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-2">
            <label for="email"
                   class="mb-1 text-xs font-bodyFont font-normal text-secondary-500">Email</label>
            <input id="email"
                   wire:model.defer="email"
                   name="email"
                   class="appearance-none rounded-md relative block w-full px-3 py-3 md:py-2 border border-secondary-200 @error('name'){{'border-red-500'}} @enderror placeholder-secondary-500 text-secondary-700  focus:outline-none focus:shadow-outline-indigo focus:border-indigo-700 focus:z-10 text-base md:text-sm font-bodyFont sm:leading-5"
                   placeholder="johndoe@mail.com"
                   type="email">
            @error('email')
            <span
                class="pl-2 text-xs font-normal font-bodyFont tracking-tight text-red-600">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-2">
            <label for="message"
                   class="mb-1 text-xs font-bodyFont font-normal text-secondary-500">Message</label>
            <textarea id="message"
                      wire:model.defer="message"
                      name="message"
                      class="appearance-none rounded-md relative block w-full px-3 py-3 md:py-2 border border-secondary-200 @error('name'){{'border-red-500'}} @enderror placeholder-secondary-500 text-secondary-700  focus:outline-none focus:shadow-outline-indigo focus:border-indigo-700 focus:z-10 text-base md:text-sm font-bodyFont sm:leading-5 h-32 resize-none"
                      placeholder="Something interesting perhaps."></textarea>
            @error('message')
            <span
                class="pl-2 text-xs font-normal font-bodyFont tracking-tight text-red-600">{{$message}}</span>
            @enderror
        </div>
        <button
            type="submit"
            class="mt-4 md:mt-0 font-bodyFont group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm leading-5 font-normal rounded-md text-secondary-200 bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:border-indigo-600 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out disabled:opacity-75"
            wire:loading.target="submitContactForm"
            wire:loading.class.remove="hover:bg-indigo-600 focus:outline-none focus:border-indigo-600 focus:shadow-outline-indigo active:bg-indigo-700"
            wire:loading.attr="disabled">
            <p wire:loading.target="submitContactForm" wire:loading.remove
               class="group-hover:text-white uppercase md:capitalize">Send Message</p>
            <svg class="animate-spin ml-3 h-5 w-5 text-white"
                 wire:loading wire:target="submitContactForm"
                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor"
                      d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
        </button>
    </form>
        <p class="font-bodyFont tracking-tight text-xs text-secondary-500 mt-3">
        We won't spam your email, you can trust us. We hate spams as much as you do.
    </p>
</div>
