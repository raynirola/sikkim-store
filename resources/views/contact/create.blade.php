@extends('layouts.app')

@section('content')
    <section class="text-gray-200 body-font bg-gray-900 pt-10">
        <div class="container px-4 md:px-6 lg:px-8 mx-auto pt-4 pb-6">
            <div
                class="flex justify-start items-center text-teal-dark uppercase tracking-wide font-bold text-xs space-x-2">
                <a class="no-underline {{ request()->routeIs('index') ? 'text-indigo-700' : '' }}"
                   href="{{ route('home') }}">
                    Home
                </a>
                <span>
                    <svg class="w-3 h-3 text-indigo-600"
                         fill="none"
                         stroke-linecap="round"
                         stroke-linejoin="round"
                         stroke-width="4"
                         viewBox="0 0 24 24"
                         stroke="currentColor"><path d="M9 5l7 7-7 7"></path></svg>
                </span>
                <div class="no-underline {{ request()->routeIs('contact.create') ? 'text-gray-400' : '' }}">
                    Contact Us
                </div>
            </div>
        </div>
    </section>
    <section class="text-gray-700 body-font relative pt-4 bg-gray-900 min-h-screen">
        <div class="container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16 flex sm:flex-no-wrap flex-wrap">
            <div
                class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
                <iframe width="100%"
                        height="100%"
                        class="absolute inset-0"
                        title="map"
                        src="https://maps.google.com/maps?q=Bermiok%20Martam&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                <div class="bg-filter absolute inset-0"></div>
                <div class="bg-gray-900 relative flex flex-wrap py-6 rounded">
                    <div class="lg:w-1/2 px-6">
                        <h2 class="title-font font-medium text-gray-400 tracking-widest text-sm">ADDRESS</h2>
                        <p class="leading-relaxed text-gray-200 text-sm mt-4">
                            One Stop Solutions,
                            Martam Ghaiyabari, Bermiok
                            Geyzing, Sikkim - 737113
                        </p>
                    </div>
                    <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                        <h2 class="title-font font-medium text-gray-400 tracking-widest text-sm">EMAIL</h2>
                        <a class="text-gray-200 leading-relaxed">support@sikkim.store</a>
                        <h2 class="title-font font-medium text-gray-400 tracking-widest text-sm mt-4">PHONE</h2>
                        <p class="leading-relaxed text-gray-200">+91 7427990891</p>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/3 md:w-1/2 bg-gray-900 flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
                <h2 class="text-gray-200 text-lg mb-1 font-medium title-font">Message</h2>
                <p class="leading-relaxed mb-5 text-gray-400">Feel free to send us any query, feedback, suggestion
                    whatsoever.
                </p>
                <form id="contact-form"
                      action="{{ route('contact.store') }}"
                      method="post">
                    @csrf
                    <div class="mb-4">
                        <label for="name"
                               class="mb-1 text-sm font-medium text-gray-200">Name</label>
                        <input id="name"
                               name="name"
                               value="{{old('name')}}"
                               class="appearance-none rounded-md relative block w-full px-3 py-3 border border-gray-300 @error('name'){{'border-red-500'}} @enderror placeholder-gray-500 text-gray-900  focus:outline-none focus:shadow-outline-blue focus:border-indigo-500 focus:z-10 text-sm sm:leading-5"
                               placeholder="John Doe"
                               type="text">
                        @error('name')
                        <span class="pl-2 text-xs font-medium tracking-wide text-red-600">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="email"
                               class="mb-1 text-sm font-medium text-gray-200">Email</label>
                        <input id="email"
                               name="email"
                               value="{{old('email')}}"
                               class="appearance-none rounded-md relative block w-full px-3 py-3 border border-gray-300 @error('email'){{'border-red-500'}}@enderror placeholder-gray-500 text-gray-900  focus:outline-none focus:shadow-outline-blue focus:border-indigo-500 focus:z-10 text-sm sm:leading-5"
                               placeholder="johndoe@mail.com"
                               type="email">
                        @error('email')
                        <span class="pl-2 text-xs font-medium tracking-wide text-red-600">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="message"
                               class="mb-1 text-sm font-medium text-gray-200">Message</label>
                        <textarea id="message"
                                  name="message"
                                  class="appearance-none rounded-md relative block w-full px-3 py-3 border border-gray-300 @error('message'){{'border-red-500'}}@enderror placeholder-gray-500 text-gray-900  focus:outline-none focus:shadow-outline-blue focus:border-indigo-500 focus:z-10 text-sm sm:leading-5 h-32 resize-none"
                                  placeholder="Something interesting perhaps.">{{old('message')}}</textarea>
                        @error('message')
                        <span class="pl-2 text-xs font-medium tracking-wide text-red-600">{{$message}}</span>
                        @enderror
                    </div>
                    <button
                        type="submit"
                        class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                        Send Message
                    </button>
                </form>
                <p class="text-xs text-gray-500 mt-3">
                    We won't spam your email, you can trust us. We hate spams as much as you do.
                </p>
            </div>
        </div>
    </section>

    @if(session('success'))
        <div class="fixed bottom-0 w-screen bg-green-500 px-4"
             x-data="{ open: true }"
             x-show="open"
             x-transition:leave="transition ease-in duration-200 transform"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-95"
             @click.away="open = false ">
            <div class="container mx-auto max-w-5xl flex items-center justify-between py-4 text-white">
                <p>{{ session('success') }}</p>
                <button class="focus:outline-none"
                        @click="open = !open">
                    <svg viewBox="0 0 20 20"
                         fill="currentColor"
                         class="x-circle w-6 h-6 text-white">
                        <path fill-rule="evenodd"
                              d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                              clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
        </div>
    @endif
@endsection
