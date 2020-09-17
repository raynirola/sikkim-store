@extends('layouts.app')

@section('content')
    <x-breadcrumb currentPage="Contact Us" :links="[]"/>
    <section class="container mx-auto md:-mt-24 bg-white relative shadow-2xl sm:rounded-sm z-10">
        <div class="h-96">
            <iframe width="100%"
                    height="100%"
                    class="rounded-t-sm"
                    title="map"
                    src="https://maps.google.com/maps?q=Bermiok%20Martam&t=&8z=13&ie=UTF8&iwloc=&output=embed"></iframe>
        </div>
        <div class="flex flex-col md:flex-row flex-col-reverse divide-x divide-secondary-200 relative">
            <div class="absolute top-0 w-full h-1 md:h-0.5 bg-brand-700"></div>
            <div class="flex-1 p-8 flex-col justify-center">
                <div class="font-titleFont text-base text-secondary-700 font-medium mb-8 mt-4 md:mt-8 text-center">
                    Contact Info
                </div>
                <div class="flex flex-col justify-center items-center">
                    <div class="grid grid-cols-2 font-bodyFont w-full lg:w-4/5">
                        <div
                            class="border border-secondary-200 border-t-0 border-l-0 flex items-center justify-center md:p-3">
                            <div class="flex flex-col justify-start items-center space-y-2 mb-4">
                                <svg class="w-7 h-7 mt-3 text-brand-700" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                <p class="font-semibold text-xs text-secondary-700">Address</p>
                                <p class="font-light text-xs text-secondary-500 text-center">
                                    One Stop Solutions,<br> Martam Ghaiyabari, Bermiok-Geyzing,<br> West Sikkim 737113.
                                </p>
                            </div>
                        </div>
                        <div
                            class="border border-secondary-200 border-t-0 border-l-0 border-r-0 flex justify-center md:p-3">
                            <div class="flex flex-col justify-start items-center space-y-2">
                                <svg class="w-7 h-7 mt-3 text-brand-700" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M16 3h5m0 0v5m0-5l-6 6M5 3a2 2 0 00-2 2v1c0 8.284 6.716 15 15 15h1a2 2 0 002-2v-3.28a1 1 0 00-.684-.948l-4.493-1.498a1 1 0 00-1.21.502l-1.13 2.257a11.042 11.042 0 01-5.516-5.517l2.257-1.128a1 1 0 00.502-1.21L9.228 3.683A1 1 0 008.279 3H5z"/>
                                </svg>
                                <p class="font-semibold text-xs text-secondary-700">Phone</p>
                                <div class="tabular-nums">
                                    <p class="font-light text-xs text-secondary-500 text-center">+91 7427990891</p>
                                    <p class="font-light text-xs text-secondary-500 text-center">+91 8670825891</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="border border-secondary-200 border-b-0 border-t-0 border-l-0 flex justify-center md:p-3">
                            <div class="flex flex-col justify-start items-center space-y-2">
                                <svg class="w-7 h-7 mt-3 text-brand-700" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                <p class="font-semibold text-xs text-secondary-700">Email</p>
                                <div>
                                    <p class="font-light text-xs text-secondary-500 text-center">
                                        support@sikkim.store</p>
                                    <p class="font-light text-xs text-secondary-500 text-center">
                                        admin@sikkim.store</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center md:p-3">
                            <div class="flex flex-col justify-center items-center space-y-2">
                                <svg class="w-7 h-7 mt-3 text-brand-700" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <p class="font-semibold text-xs text-secondary-700">Working Hours</p>
                                <div>
                                    <p class="font-light text-xs text-secondary-500 text-center">
                                        Monday - Friday : 10:00 - 21:00</p>
                                    <p class="font-light text-xs text-secondary-500 text-center">
                                        Saturday : 10:00 - 13:00</p>
                                    <p class="font-light text-xs text-secondary-500 text-center">
                                        Sunday : Closed</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-1 p-4 md:p-8 flex flex-col justify-center">
                <div class="font-titleFont text-base text-secondary-700 font-medium mb-4 mt-8 text-center">
                    Write to Us
                </div>
                <livewire:contact-form/>
            </div>
        </div>
    </section>
    <section class="bg-pattern -mt-20">
        <div class="container mx-auto pt-40 pb-24 max-w-3xl text-center">
            <livewire:newsletter-form/>
        </div>
    </section>

    @if(session('success'))
        <div class="fixed bottom-0 w-screen bg-brand-700 px-4 font-title z-50 font-bodyFont"
             x-data="{ open: true }"
             x-show="open"
             x-transition:leave="transition ease-in duration-200 transform"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-95"
             @click.away="open = false ">
            <div class="container mx-auto max-w-5xl flex items-center justify-between py-4 text-white text-sm">
                <p>{{ session('success') }}</p>
                <button class="focus:outline-none"
                        @click="open = !open">
                    <div class="flex items-center justify-center p-1 bg-white rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                             class="w-5 h-5 text-red-700">
                            <path fill-rule="evenodd"
                                  d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </div>

                </button>
            </div>
        </div>
    @endif
@endsection
