@extends('layouts.app')

@section('content')
    <section class="text-gray-200 bg-brand-800">
        <div class="flex items-center justify-between font-titleFont font-medium shadow-md">
            <div class="flex items-center justify-start flex-1">
                <a href="{{ route('home') }}" class="px-5 py-4 border-r border-brand-900 group group-hover:bg-brand-200 hover:bg-brand-100 transition ease-in-out duration-300">
                    <svg class="w-5 group-hover:text-blue-600 transition ease-in-out duration-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
{{--                    <svg class="w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"--}}
{{--                         stroke="currentColor">--}}
{{--                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
{{--                              d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>--}}
{{--                    </svg>--}}
                </a>
                <a class="flex items-center px-5 py-3 border-r border-brand-900 cursor-not-allowed">
                    <div>
                        <svg class="w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </div>
                    <div class="font-bodyFont leading-none tracking-tight ml-4 font-light">
                        <p class="text-xs">Select</p>
                        <p class="text-sm">Category</p>
                    </div>
                </a>
            </div>
            <a href="{{ route('home') }}" class="flex-1 flex items-center justify-center font-bodyFont font-semibold tracking-wider uppercase">
                Sikkim Store
            </a>
            <div class="flex items-center justify-end flex-1">
                <a class="px-5 py-4 border-l border-brand-900 cursor-not-allowed">
                    <svg class="w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                </a>
                <a class="px-5 py-4 border-l border-brand-900 cursor-not-allowed">
                    <svg class="w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                </a>
                <a class="px-5 py-4 border-l border-brand-900 cursor-not-allowed">
                    <svg class="w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </a>
            </div>
        </div>
        <div class="pt-14 pb-24 flex items-center justify-center">
            <div class="flex flex-col items-center justify-center">
                <span class="uppercase text-xl font-normal tracking-widest font-titleFont mb-1">Contact Us</span>
                <div class="flex space-x-2 items-center text-secondary-500 text-xs font-bodyFont">
                    <span>Home</span>
                    <svg class="w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                              clip-rule="evenodd"/>
                    </svg>
                    <span>Contact</span>
                </div>
            </div>
        </div>
    </section>
    <section class="container mx-auto -mt-16 bg-white relative shadow-2xl rounded-sm z-10">
        <div class="h-96">
            <iframe width="100%"
                    height="100%"
                    class="rounded-t-sm"
                    title="map"
                    src="https://maps.google.com/maps?q=Bermiok%20Martam&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
        </div>
        <div class="flex divide-x divide-secondary-200 relative">
            <div class="absolute top-0 w-full h-0.5 bg-brand-700"></div>
            <div class="flex-1 p-8 flex-col justify-center">
                <div class="font-titleFont text-base text-secondary-700 font-medium mb-8 mt-8 text-center">
                    Contact Info
                </div>
                <div class="flex flex-col justify-center items-center">
                    <div class="grid grid-cols-2 font-bodyFont w-4/5">
                        <div
                            class="border border-secondary-200 border-t-0 border-l-0 flex items-center justify-center p-3">
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
                            class="border border-secondary-200 border-t-0 border-l-0 border-r-0 flex justify-center p-3">
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
                            class="border border-secondary-200 border-b-0 border-t-0 border-l-0 flex justify-center p-3">
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
                                    <p class="font-light text-xs text-secondary-500 text-center">admin@sikkim.store</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center p-3">
                            <div class="flex flex-col justify-center items-center space-y-2">
                                <svg class="w-7 h-7 mt-3 text-brand-700" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <p class="font-semibold text-xs text-secondary-700">Working Hours</p>
                                <div>
                                    <p class="font-light text-xs text-secondary-500 text-center">Monday - Friday : 10:00
                                        - 21:00</p>
                                    <p class="font-light text-xs text-secondary-500 text-center">Saturday : 10:00 -
                                        13:00</p>
                                    <p class="font-light text-xs text-secondary-500 text-center">Sunday : Closed</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-1 p-8 flex flex-col justify-center">
                <div class="font-titleFont text-base text-secondary-700 font-medium mb-8 mt-8 text-center">Write to Us
                </div>
                <div class="flex flex-col justify-center mx-auto w-4/6">
                    <form id="contact-form"
                          action="{{ route('contact.store') }}"
                          method="post">
                        @csrf
                        <div class="mb-2">
                            <label for="name"
                                   class="mb-1 text-xs font-bodyFont font-normal text-secondary-500">Name</label>
                            <input id="name"
                                   name="name"
                                   value="{{old('name')}}"
                                   class="appearance-none rounded-md relative block w-full px-3 py-2 border border-secondary-200 @error('name'){{'border-red-500'}} @enderror placeholder-secondary-700 text-secondary-700  focus:outline-none focus:shadow-outline-green focus:border-brand-700 focus:z-10 text-xs font-bodyFont sm:leading-5"
                                   placeholder="John Doe"
                                   type="text">
                            @error('name')
                            <span class="pl-2 text-xs font-normal font-bodyFont tracking-tight text-red-600">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="email"
                                   class="mb-1 text-xs font-bodyFont font-normal text-secondary-500">Email</label>
                            <input id="email"
                                   name="email"
                                   value="{{old('email')}}"
                                   class="appearance-none rounded-md relative block w-full px-3 py-2 border border-secondary-200 @error('name'){{'border-red-500'}} @enderror placeholder-secondary-700 text-secondary-700  focus:outline-none focus:shadow-outline-green focus:border-brand-700 focus:z-10 text-xs font-bodyFont sm:leading-5"
                                   placeholder="johndoe@mail.com"
                                   type="email">
                            @error('email')
                            <span class="pl-2 text-xs font-normal font-bodyFont tracking-tight text-red-600">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="message"
                                   class="mb-1 text-xs font-bodyFont font-normal text-secondary-500">Message</label>
                            <textarea id="message"
                                      name="message"
                                      class="appearance-none rounded-md relative block w-full px-3 py-2 border border-secondary-200 @error('name'){{'border-red-500'}} @enderror placeholder-secondary-700 text-secondary-700  focus:outline-none focus:shadow-outline-green focus:border-brand-700 focus:z-10 text-xs font-bodyFont sm:leading-5 h-32 resize-none"
                                      placeholder="Something interesting perhaps.">{{old('message')}}</textarea>
                            @error('message')
                            <span class="pl-2 text-xs font-normal font-bodyFont tracking-tight text-red-600">{{$message}}</span>
                            @enderror
                        </div>
                        <button
                            type="submit"
                            class="font-bodyFont group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm leading-5 font-normal rounded-md text-secondary-200 bg-brand-700 hover:bg-brand-600 focus:outline-none focus:border-brand-600 focus:shadow-outline-green active:bg-brand-700 transition duration-150 ease-in-out">
                            <p class="group-hover:text-white">Send Message</p>
                        </button>
                    </form>
                    <p class="font-bodyFont tracking-tight text-xs text-secondary-500 mt-3">
                        We won't spam your email, you can trust us. We hate spams as much as you do.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-pattern -mt-20">
        <div class="container mx-auto pt-40 pb-24 max-w-3xl text-center">
            <div class="flex flex-col justify-center items-center">
                <p class="font-titleFont uppercase text-lg tracking-wide text-secondary-800 mb-4">Subscribe to our
                    newsletter</p>
                <p class="font-bodyFont text-xs text-secondary-500 leading-6 mb-4">
                    Be the first to know about what we are up to, and get latest news, blogs, updates and maybe offers. Stay in touch with us, subscribe to your mailing list.
                </p>
                <form action="" class="flex items-center w-2/3 relative">
                    <input type="email" placeholder="Enter your email"
                           class="appearance-none rounded-md relative w-full px-3 py-3 border border-brand-700 @error('name'){{'border-red-500'}} @enderror placeholder-secondary-700 text-secondary-700  focus:outline-none focus:shadow-outline-green focus:border-brand-700 text-xs font-bodyFont">
                    <button
                        class="py-3 px-8 absolute top-0 right-0 text-secondary-200 flex items-center h-full border-l bg-brand-700 rounded-r-md hover:text-white hover:bg-brand-600">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
    </section>

    <section class="bg-gray-800 p-10">
        <div class="container mx-auto max-w-6xl py-10">
            <div class="grid grid-cols-2 gap-24">
                <div class="flex">
                    <div class="flex-1 flex-col mb-2">
                        <div
                            class="font-bodyFont text-base font-normal tracking-wider uppercase text-secondary-200 mb-4">
                            SIKKIM STORE
                        </div>
                        <div class="text-xs text-gray-500 mb-2">
                            Sikkim's e-commerce store. Multi-vendor, Multi-tenant, No commissions and no hidden charges. Empowering local shops and sellers.
                        </div>
                        <div class="text-xs font-medium tracking-wide text-gray-400 flex space-x-2 mb-4">
                            <span>Guides</span>
                            <span>Terms of Use</span>
                            <span>Privacy Policy</span>
                        </div>
                        <div class="text-xs text-gray-400">&copy; {{ now()->format('Y') }}
                            - {{ now()->addYears(3)->format('Y') }}</div>
                    </div>
                    <div class="flex flex-col ml-10">
                        <div
                            class="font-bodyFont text-base font-normal tracking-wider uppercase text-secondary-200 mb-6">
                            Get Help
                        </div>
                        <div class="text-xs font-medium tracking-wide text-gray-400 flex space-y-2 mb-4 flex-col">
                            <span>Guides</span>
                            <span>Terms of Use</span>
                            <span>Privacy Policy</span>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row-reverse">
                    <div class="flex-1 flex-col mb-2 text-right">
                        <div
                            class="font-bodyFont text-base font-normal tracking-wider uppercase text-secondary-200 mb-10 flex items-center justify-end space-x-2">
                            <svg viewBox="0 0 512 512" class="w-5 h-5 text-blue-400" stroke="currentColor" fill="currentColor">
                                <path d="M75 512h167V330h-60v-60h60v-75c0-41.355469 33.644531-75 75-75h75v60h-60c-16.542969 0-30 13.457031-30 30v60h87.292969l-10 60H302v182h135c41.355469 0 75-33.644531 75-75V75c0-41.355469-33.644531-75-75-75H75C33.644531 0 0 33.644531 0 75v362c0 41.355469 33.644531 75 75 75zM30 75c0-24.8125 20.1875-45 45-45h362c24.8125 0 45 20.1875 45 45v362c0 24.8125-20.1875 45-45 45H332V360h72.707031l20-120H332v-30h90V90H317c-57.898438 0-105 47.101562-105 105v45h-60v120h60v122H75c-24.8125 0-45-20.1875-45-45zm0 0"/>
                            </svg>
                            <svg viewBox="0 -47 512.00004 512" class="w-5 h-5 text-blue-400" stroke="currentColor" fill="currentColor">
                                <path d="M512 55.964844c-32.207031 1.484375-31.503906 1.363281-35.144531 1.667968l19.074219-54.472656S436.390625 25.0625 421.296875 28.980469c-39.640625-35.628907-98.5625-37.203125-140.6875-11.3125-34.496094 21.207031-53.011719 57.625-46.835937 100.191406-67.136719-9.316406-123.703126-41.140625-168.363282-94.789063l-14.125-16.964843-10.554687 19.382812c-13.339844 24.492188-17.769531 52.496094-12.476563 78.851563 2.171875 10.8125 5.863282 21.125 10.976563 30.78125l-12.117188-4.695313-1.4375 20.246094c-1.457031 20.566406 5.390625 44.574219 18.320313 64.214844 3.640625 5.53125 8.328125 11.605469 14.269531 17.597656l-6.261719-.960937 7.640625 23.199218c10.042969 30.480469 30.902344 54.0625 57.972657 67.171875-27.035157 11.472657-48.875 18.792969-84.773438 30.601563L0 363.292969l30.335938 16.585937c11.566406 6.324219 52.4375 27.445313 92.820312 33.78125 89.765625 14.078125 190.832031 2.613282 258.871094-58.664062 57.308594-51.613282 76.113281-125.03125 72.207031-201.433594-.589844-11.566406 2.578125-22.605469 8.921875-31.078125C475.863281 105.519531 511.921875 56.078125 512 55.964844zm-72.832031 48.550781c-10.535157 14.066406-15.8125 32.03125-14.867188 50.578125 3.941407 77.066406-17.027343 136.832031-62.328125 177.628906-52.917968 47.660156-138.273437 66.367188-234.171875 51.324219-17.367187-2.722656-35.316406-8.820313-50.171875-14.910156 30.097656-10.355469 53.339844-19.585938 90.875-37.351563l52.398438-24.800781-57.851563-3.703125c-27.710937-1.773438-50.785156-15.203125-64.96875-37.007812 7.53125-.4375 14.792969-1.65625 22.023438-3.671876l55.175781-15.367187-55.636719-13.625C92.609375 226.988281 77.199219 210.8125 69.03125 198.40625c-5.363281-8.152344-8.867188-16.503906-10.96875-24.203125 5.578125 1.496094 12.082031 2.5625 22.570312 3.601563l51.496094 5.09375-40.800781-31.828126c-29.398437-22.929687-41.179687-57.378906-32.542969-90.496093 91.75 95.164062 199.476563 88.011719 210.320313 90.527343-2.386719-23.183593-2.449219-23.238281-3.074219-25.445312-13.886719-49.089844 16.546875-74.015625 30.273438-82.453125 28.671874-17.621094 74.183593-20.277344 105.707031 8.753906 6.808593 6.265625 16.015625 8.730469 24.632812 6.589844 7.734375-1.921875 14.082031-3.957031 20.296875-6.171875l-12.9375 36.945312 16.515625.011719c-3.117187 4.179688-6.855469 9.183594-11.351562 15.183594zm0 0"/>
                            </svg>
                            <svg viewBox="0 0 512 512" class="w-5 h-5 text-blue-400" stroke="currentColor" fill="currentColor">
                                <path d="M75 512h362c41.355469 0 75-33.644531 75-75V75c0-41.355469-33.644531-75-75-75H75C33.644531 0 0 33.644531 0 75v362c0 41.355469 33.644531 75 75 75zM30 75c0-24.8125 20.1875-45 45-45h362c24.8125 0 45 20.1875 45 45v362c0 24.8125-20.1875 45-45 45H75c-24.8125 0-45-20.1875-45-45zm0 0"/>
                                <path d="M256 391c74.4375 0 135-60.5625 135-135s-60.5625-135-135-135-135 60.5625-135 135 60.5625 135 135 135zm0-240c57.898438 0 105 47.101562 105 105s-47.101562 105-105 105-105-47.101562-105-105 47.101562-105 105-105zm0 0M406 151c24.8125 0 45-20.1875 45-45s-20.1875-45-45-45-45 20.1875-45 45 20.1875 45 45 45zm0-60c8.269531 0 15 6.730469 15 15s-6.730469 15-15 15-15-6.730469-15-15 6.730469-15 15-15zm0 0"/>
                            </svg>
                        </div>
                        <div class="text-xs text-gray-500 mb-2">Payment Methods</div>
                        <div
                            class="text-xs font-medium tracking-wide text-gray-300 flex justify-end items-center space-x-2 mb-4">
                            <span>
                                <svg viewBox="0 0 160 100" class="h-7 text-blue-500">
                                    <path fill="currentColor"
                                          d="M151.76461 33.4570312h-4.200372c-.002368 0-.004737.0007686-.006315.0007686l-.002369-.0007686c-.961483 0-1.937176.7170848-2.209517 1.6293887-.011051.0368918-.029997.0722465-.03868.1106755 0 0-.100253.4450075-.27392 1.2143557l-5.769691 25.4630406c-.133407.5756661-.222609.9507329-.249448 1.0483425l.011051.0138344c-.199717.8900152.349702 1.6263144 1.251981 1.7085524l.011841.0169087h4.35983c.955168 0 1.924546-.7101675 2.20557-1.6109427.01342-.043809.034734-.0845438.044996-.1283528l6.293849-27.727276-.009473-.0030743c.213926-.9484272-.413643-1.7354527-1.419333-1.7354527zm-21.544777 25.0254905c-.582574.3573895-1.198302.6632842-1.843238.9238326-.866756.3404808-1.688517.5187912-2.448704.5187912-1.166726 0-2.063479-.1606331-2.669735-.5041882-.607045-.3258777-.925171-.8923208-.914909-1.7031722 0-.9361299.22182-1.6624376.681248-2.2319551.462586-.5479972 1.150149-.9891619 2.002696-1.3181139.84781-.279763 1.890602-.5103368 3.094429-.6755814 1.07042-.1314271 3.186789-.3689182 3.457552-.3704554.270762-.0023057.450744-.1475673.329967.5549145-.053679.305126-.664671 2.7476719-.944906 3.8582693-.081308.332795-.536.8177687-.7444.9476586 0 0 .2084-.1298899 0 0zm8.306017-17.1669929c-1.782454-.9684103-4.570599-1.4579954-8.385746-1.4579954-1.886655 0-3.782782.1475672-5.685225.435016-1.39644.2082851-1.54011.2428711-2.407655.4265616-1.784823.3781412-2.060322 2.1182053-2.060322 2.1182053l-.573101 2.2949785c-.325231 1.467987.533631 1.4072692.916488 1.2935194.779133-.2290367 1.20146-.4565362 2.791302-.8070085 1.519586-.3358693 3.125216-.5871948 4.406404-.5772032 1.878761 0 3.307566.2005992 4.257209.5864262.950432.4035042 1.420911 1.0906143 1.420911 2.0736276.003158.2336482.009473.4542305-.07736.647144-.078151.1798476-.228136.3535466-.677302.4127272-2.681575.1552531-4.606121.3935127-6.923786.7224648-2.286878.3135804-4.287995.8508176-5.960723 1.5948026-1.783244.7701167-3.117322 1.8007819-4.036968 3.1065985-.895174 1.3119653-1.345129 2.9006193-1.347498 4.7721105 0 1.7685015.65283 3.2111254 1.915863 4.3309458 1.278031 1.1052174 2.940497 1.652446 4.951876 1.652446 1.256718-.0084544 2.240304-.096841 2.945234-.2682343.697826-.1713932 1.458803-.4150329 2.262407-.7539765.60073-.2444083 1.248823-.5979549 1.933229-1.0414253.685195-.4450076 1.159622-.7608938 1.768246-1.1490264l.022103.0368918-.171299.7355306c-.00079.0069172-.011052.0107601-.011052.0176773l.005526.0138345c-.19577.8861722.351281 1.62324 1.25277 1.7100895l.011052.0153716h.079729l.003157.0038429c.598362 0 2.652369-.0007686 3.612273-.0038429h.670197c.044206 0 .048942-.0130659.066309-.0230574.920435-.1099069 1.802979-.8400575 2.01059-1.7162382l3.428343-14.4070237c.07894-.3389436.141302-.7301506.178404-1.1805382.042627-.4549991.093148-.8292973.07815-1.0998373.007894-2.0390416-.892017-3.5462261-2.669735-4.5154049zm-20.644473-3.2816063c-.584942-1.1082917-1.468275-2.0006126-2.585269-2.6954085-1.145413-.6932588-2.50633-1.1766953-4.081963-1.458764-1.558267-.2659285-3.410977-.4181073-5.52182-.4227188l-9.8216565.0046115c-1.0112153.0169088-2.0034852.7900998-2.2371462 1.7423699l-6.6032915 27.9778329c-.2407655.9507329.4160113 1.7431384 1.4090706 1.7377584l4.7126898-.0084544c.9993744.0084544 2.0176943-.7785711 2.2537235-1.729304l1.5929997-6.7896318c.2233989-.9515015 1.2393506-1.7485185 2.2553026-1.734684h1.339603c5.748377 0 10.205303-1.149795 13.396828-3.4386249 3.183631-2.3003587 4.786103-5.317802 4.786103-9.0707759-.010262-1.6386117-.296812-3.0189805-.895174-4.1142064zm-10.132678 9.1507082c-1.406702.9960791-3.38098 1.4956558-5.921254 1.4956558h-1.168305c-1.010426.0115287-1.6632556-.7839512-1.423279-1.7377584l1.408281-5.9380456c.209979-.9392042 1.235403-1.738527 2.23162-1.7308412l1.543268-.0076858c1.8014.0076858 3.148898.3012832 4.079595.8846351.914909.5902691 1.358549 1.5056473 1.365654 2.7253831.003947 1.8591939-.702562 3.2895205-2.11558 4.308657"/>
                                    <path fill="currentColor"
                                          d="M84.8355974 39.8576594c-.8943152 0-2.0673141.7089103-2.6225757 1.5656536 0 0-5.9822242 10.0457618-6.5697767 11.0496504-.3193982.539762-.6430083.1966522-.6970604-.0041256-.0435224-.2440962-1.8539139-10.9795157-1.8539139-10.9795157-.2035725-.8643068-1.1252646-1.6062217-2.2779063-1.6027838l-3.730291.0055008c-.8992289 0-1.4601063.7054724-1.2600437 1.5580901 0 0 2.8514193 15.8311855 3.4073829 19.554512.2772798 2.0593468-.028781 2.4244597-.028781 2.4244597l-3.6965962 6.3134966c-.5412221.8560557-.244989 1.5574025.6500281 1.5574025l4.3227572-.003438c.8950172 0 2.0806516-.6979088 2.61345-1.5553397l16.6297692-27.5498658s1.5906736-2.3536374.1235475-2.3336971c-1.0003133.0137519-5.00999 0-5.00999 0zM53.6140586 58.4825217c-.5825737.3573895-1.1975126.661747-1.8424485.9230641-.8667561.3389435-1.6924635.5187912-2.450283.5187912-1.1635686 0-2.0626898-.1614018-2.6697348-.5034197-.6062556-.3266463-.9259607-.8930894-.9156985-1.7047094 0-.9338242.2241882-1.6624376.6828269-2.2311865.463375-.5487658 1.1477807-.990699 2.0003276-1.3188825.8501787-.2813001 1.8961275-.5087996 3.0960083-.6740442 1.07042-.1314271 3.1891569-.3681496 3.4591301-.3719925.2683944-.0007686.4491659-.1475673.3283884.5549144-.0521001.3051261-.6638814 2.7492091-.9441167 3.8590379-.0844653.3343321-.539157.8193058-.7443998.9484272 0 0 .2052428-.1291214 0 0zm8.3060171-17.1677615c-1.7824545-.9684102-4.5698092-1.4572268-8.3849566-1.4572268-1.8874441 0-3.7827822.1460301-5.6860142.4342474-1.3988084.2067479-1.5393208.2421026-2.4076556.4257931-1.7856121.3796783-2.0603217 2.1182052-2.0603217 2.1182052l-.5731009 2.2965157c-.3244415 1.4672184.53521 1.4065006.9164879 1.2927509.7775543-.2290368 1.202249-.4557677 2.7920911-.8077772 1.5172177-.3343321 3.1252159-.584889 4.4048256-.5764346 1.8803396 0 3.3075663.1998307 4.2572088.5856576.9512213.4035043 1.4193327 1.0921515 1.4193327 2.0743962.0063151.2336482.0110515.4549991-.0734138.6463754-.0797289.1813848-.2312928.3543152-.6804587.4127272-2.6784182.1575589-4.6021745.3950499-6.923786.724002-2.2868781.3135804-4.2872057.8508176-5.9607237 1.594034-1.783244.7701167-3.1157432 1.802319-4.0338099 3.1073671-.8983318 1.3111967-1.3474977 2.8998507-1.3490765 4.7721105 0 1.7677329.6536193 3.2111254 1.9150729 4.3301772 1.2788204 1.1052174 2.939708 1.6532146 4.9510872 1.6532146 1.2575067-.0084544 2.2403038-.0983782 2.947602-.2682343.697036-.1729304 1.4588024-.4150329 2.2592492-.7539765.603098-.2444083 1.2496128-.5994921 1.9348079-1.0421939.6836163-.444239 1.160411-.7601252 1.771403-1.1482578l.0189455.0361232-.1712988.7347621c-.0015788.0069172-.0110515.0115287-.0110515.019983l.0071045.0115287c-.19577.888478.3497021 1.6247772 1.2519809 1.7100895l.0110516.0169088h.0789395l.0023682.00538c.5999404 0 2.6547363-.0030743 3.6122728-.00538h.6709859c.0449956 0 .0513107-.014603.0655199-.023826.922803-.1129812 1.8021894-.8415946 2.0121685-1.714701l3.4283437-14.4085609c.0773607-.338175.1405124-.729382.1752458-1.179001.0457849-.4573049.0955168-.8300659.0820971-1.0998374.0078939-2.0405787-.8935955-3.5477632-2.6705243-4.516942zM40.47554 38.0339225c-.5849419-1.1082917-1.4682752-2.0006126-2.5852695-2.6954085-1.1454126-.6932588-2.50633-1.1766953-4.081963-1.458764-1.5582663-.2659285-3.410977-.4181073-5.52182-.4227188l-9.821656.0046115c-1.0112154.0169088-2.0034853.7900998-2.2371463 1.7423699L9.6243937 63.1818455c-.2407655.9507329.4160114 1.7431384 1.4090706 1.7377584l4.7126898-.0084544c.9993744.0084544 2.0176944-.7785711 2.2537235-1.729304l1.5929997-6.7896318c.2233989-.9515015 1.2393506-1.7485185 2.2553023-1.734684h1.3396038c5.7483764 0 10.2053022-1.149795 13.3968273-3.4386249 3.1836311-2.3003587 4.7861035-5.317802 4.7861035-9.0707759-.0102621-1.6386117-.2968126-3.0189805-.8951742-4.1142064zm-10.1326778 9.1507082c-1.4067024.9960791-3.38098 1.4956558-5.921254 1.4956558h-1.168305c-1.0104259.0115287-1.6632558-.7839512-1.4232797-1.7377584l1.4082812-5.9380456c.2099792-.9392042 1.2354036-1.738527 2.2316205-1.7308412l1.5432677-.0076858c1.8014001.0076858 3.1488978.3012832 4.0795948.8846351.9149092.5902691 1.3585493 1.5056473 1.3656539 2.7253831.0039469 1.8591939-.7025618 3.2895205-2.1155794 4.308657"/>
                                  </g>
                                </svg>
                            </span>
                            <span>
                                <svg viewBox="0 0 64 64" fill="currentColor"
                                     class="h-9 text-blue-500">
                                  <g id="Layer_2">
                                    <path
                                        d="M27.1 24.1l-2.6 15.8h4.1l2.6-15.8h-4.1zM50.8 24.1c-1 0-1.7.3-2.1 1.3L42.6 40h4.3s.7-2 .9-2.4H53c.1.6.5 2.4.5 2.4h3.8L54 24.1h-3.2zm-1.9 10.2c.3-.9 1.6-4.4 1.6-4.4l.5-1.5.3 1.4s.8 3.8 1 4.6h-3.4zM39.4 30.5c-1.4-.7-2.3-1.2-2.3-2 0-.7.7-1.4 2.3-1.4 1.3 0 2.3.3 3.1.6l.4.2.6-3.4c-.8-.3-2.1-.7-3.7-.7-4 0-6.9 2.2-6.9 5.2 0 2.3 2 3.6 3.6 4.3 1.6.8 2.1 1.3 2.1 2 0 1.1-1.3 1.5-2.5 1.5-1.6 0-2.5-.2-3.9-.8l-.5-.3-.6 3.5c1 .4 2.7.8 4.6.8 4.3 0 7.1-2.1 7.1-5.4.1-1.6-1-3-3.4-4.1zM21.1 24.1l-4 10.8-.4-2.2-1.4-7.3c-.2-1-1-1.3-1.9-1.3H6.9c-.1 0-.1.1-.2.1 0 .1 0 .2.1.2 1 .3 1.9.6 2.7 1 .9.4 1.5 1.2 1.8 2.1l3.3 12.4h4.3l6.4-15.8h-4.2z"
                                        class="st0"/>
                                  </g>
                                </svg>
                            </span>
                            <span class="italic text-blue-500 font-bold font-titleFont tracking-widest">COD</span>
                        </div>
                    </div>
                    <div class="flex flex-col mr-10">
                        <div
                            class="font-bodyFont text-base font-normal tracking-wider uppercase text-secondary-200 mb-6">
                            About Us
                        </div>
                        <div class="text-xs font-medium tracking-wide text-gray-400 flex space-y-2 mb-4 flex-col">
                            <span>Careers</span>
                            <span>Sustainability</span>
                            <span>Service</span>
                            <span>Supply Chain</span>
                        </div>
                    </div>
                </div>
            </div>
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
