@extends('layouts.landing')

@section('content')
    <div class="relative bg-gray-800 overflow-hidden">
        <div class="max-w-screen-xl mx-auto">
            <div class="relative z-10 pb-8 bg-gray-800 sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <svg
                    class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-gray-800 transform translate-x-1/2"
                    fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <polygon points="50,0 100,0 50,100 0,100"/>
                </svg>

                <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
                    <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start">
                        <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
                            <div class="flex items-center justify-between w-full md:w-auto">
                                <a href="{{ route('home') }}" aria-label="Home">
                                    <img class="h-8 w-8 sm:h-16 sm:w-16 rounded-full object-cover"
                                         src="{{ asset('images/logo-flat.png') }}" alt="Logo">
                                </a>
                                <div class="-mr-2 flex items-center md:hidden">
                                    <button type="button"
                                            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"
                                            id="main-menu" aria-label="Main menu" aria-haspopup="true">
                                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M4 6h16M4 12h16M4 18h16"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="hidden md:block md:ml-10 md:pr-4">
                            <a href="#"
                               class="font-medium text-gray-400 hover:text-gray-200 transition duration-150 ease-in-out">Home</a>
                            <a href="#"
                               class="ml-5 font-medium text-gray-400 hover:text-gray-200 transition duration-150 ease-in-out">Shops</a>
                            <a href="#"
                               class="ml-5 font-medium text-gray-400 hover:text-gray-200 transition duration-150 ease-in-out">Getting
                                Started</a>
                            <a href="#"
                               class="ml-5 font-medium text-gray-400 hover:text-gray-200 transition duration-150 ease-in-out">Help</a>
                            <span class="ml-5 border-r border-gray-600"></span>
                            <a href="#"
                               class="ml-5 inline-flex items-center font-medium text-white hover:text-indigo-700 transition duration-150 ease-in-out">
                                Login
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                                          clip-rule="evenodd"/>
                                    <path fill-rule="evenodd"
                                          d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </a>
                        </div>
                    </nav>
                </div>

                <main class="mt-10 mx-auto max-w-screen-xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h2 class="text-4xl tracking-tight leading-10 font-extrabold text-gray-100 sm:text-5xl sm:leading-none md:text-6xl">
                            Success starts
                            <br class="xl:hidden">
                            <span class="text-indigo-600">with a click.</span>
                        </h2>
                        <p class="mt-3 text-base text-gray-300 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 lg:mx-0">
                            Online store make 3 times more sales than average shops. And e-commerce sales are growing
                            46% year-on-year*. For a lot of businesses, building an online store has gone from
                            nice-to-have to utterly essential, overnight. <br>So get your own store in just a click. And
                            get your first 2 months free.
                        </p>
                        <p class="mt-5 sm:mt-12 mb-2 text-gray-400 text-sm">Sign up for early access when we launch.</p>
                        <div class="sm:flex sm:justify-center lg:justify-start">
                            <div class="rounded-md shadow" x-data="{false, toast : true}">
                                <a href="#" x-on:click="modal = true"
                                   class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                                    Register Now
                                </a>
                                <livewire:early-access-preview-registration/>
                            </div>
                            <div class="mt-3 sm:mt-0 sm:ml-3">
                                <a href="{{ route('contact.index') }}"
                                   class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-indigo-700 bg-indigo-100 hover:text-indigo-600 hover:bg-indigo-50 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-300 transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                                    Contact Us
                                </a>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full"
                 src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80"
                 alt="">
        </div>
    </div>

    <div class="py-24 bg-white">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <p class="text-base leading-6 text-indigo-600 font-semibold tracking-wide uppercase">
                    Sikkim Store</p>
                <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
                    A better way to sell online
                </h3>
                <p class="mt-4 max-w-2xl text-xl leading-7 text-gray-500 lg:mx-auto">
                    Sikkim's e-commerce store. Multi-vendor, Multi-tenant, No commissions and no hidden charges.
                    Empowering local shops and sellers.
                </p>
            </div>

            <div class="mt-14">
                <ul class="md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                    <li>
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div
                                    class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                    <!-- Heroicon name: globe-alt -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M9 8h6m-5 0a3 3 0 110 6H9l3 3m-3-6h6m6 1a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg leading-6 font-medium text-gray-900">What you sell is 100%
                                    yours.</h4>
                                <p class="mt-2 text-base leading-6 text-gray-500">
                                    Unlike many other sites, who takes your sales percentage, the sales that you make
                                    are 100% yours. We don’t take any percentage whatsoever.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="mt-10 md:mt-0">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div
                                    class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                    <!-- Heroicon name: scale -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg leading-6 font-medium text-gray-900">No hidden fees.</h4>
                                <p class="mt-2 text-base leading-6 text-gray-500">
                                    Dont worry, we dont have <span class="text-red-600 font-medium">T&C</span> or <span
                                        class="text-red-600 font-medium">*</span> next to our pricing. How much for all
                                    these? Just a minimal amount per month. All prices are upfront. No hidden charges,
                                    no hassle and headache.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="mt-10 md:mt-0">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div
                                    class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                    <!-- Heroicon name: lightning-bolt -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg leading-6 font-medium text-gray-900">Free Custom Domain.</h4>
                                <p class="mt-2 text-base leading-6 text-gray-500">
                                    Free custom subdomain, eg. <span
                                        class="text-indigo-600 font-medium">yourshop.sikkim.store</span>. Or you can
                                    register your
                                    own domain. We will guide you through every step to set up your own personal domain
                                    and use our services.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="mt-10 md:mt-0">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div
                                    class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                    <!-- Heroicon name: annotation -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg leading-6 font-medium text-gray-900">Scalability? No worries.</h4>
                                <p class="mt-2 text-base leading-6 text-gray-500">
                                    You don’t have to worry about scalability, or downtime ever. Our system runs on the
                                    latest technology and software stack that handles scaling like a breeze.
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <section class="text-gray-400 body-font bg-gray-800">
        <div class="container px-5 py-12 mx-auto flex flex-wrap">
            <div class="lg:w-1/2 w-full mb-10 lg:mb-0 rounded-lg overflow-hidden">
                <img alt="feature" class="object-cover object-center h-full w-full"
                     src="{{ asset('images/dashboard.jpeg') }}">
            </div>
            <div class="flex flex-col flex-wrap lg:py-6 -mb-10 lg:w-1/2 lg:pl-12 lg:text-left text-center">
                <div class="flex flex-col mb-10 lg:items-start items-center">
                    <div
                        class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5">
                        <svg class="text-indigo-700 w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"/>
                        </svg>
                    </div>
                    <div class="flex-grow">
                        <h2 class="text-gray-100 text-lg title-font font-medium mb-3">Admin Dashboard.</h2>
                        <p class="leading-relaxed text-base">Your store comes with a highly sophisticated admin
                            dashboard. Easy product update, add, or delete. Shop performance with beautiful graphical
                            representation. See all your order details and sell progress and many more.</p>
                    </div>
                </div>
                <div class="flex flex-col mb-10 lg:items-start items-center">
                    <div
                        class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5">
                        <svg class="text-indigo-700 w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"/>
                        </svg>
                    </div>
                    <div class="flex-grow">
                        <h2 class="text-gray-100 text-lg title-font font-medium mb-3">Your site is yours,
                            completely.</h2>
                        <p class="leading-relaxed text-base">Your site, be that free subdomain or your own domain, you
                            have complete freedom to customise it, branding, logo and even colour schemes. Your own
                            terms and conditions, and footer as well.</p>
                    </div>
                </div>
                <div class="flex flex-col mb-10 lg:items-start items-center">
                    <div
                        class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5">
                        <svg class="text-indigo-700 w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/>
                        </svg>
                    </div>
                    <div class="flex-grow">
                        <h2 class="text-gray-100 text-lg title-font font-medium mb-3">Payment Gateway.</h2>
                        <p class="leading-relaxed text-base">To make it even better, we will set up your own payment
                            gateway integration upon signup with Razorpay. All the transactions straight from and to
                            your bank account..</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="text-gray-700 body-font bg-white">
        <div class="container px-5 py-10 mx-auto">
            <div class="flex flex-wrap -m-4 text-center">
                <div class="p-4 w-full flex flex-col items-center justify-center">
                    <div class="w-max-content p-3 bg-indigo-700 rounded-full">
                        <svg class="w-7 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h2 class="title-font font-medium sm:text-4xl text-3xl text-gray-900">{{ $users }}</h2>
                    <p class="leading-relaxed">Stores registered for early access.</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="bg-indigo-600">
            <div class="max-w-screen-xl mx-auto py-3 px-3 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between flex-wrap">
                    <div class="w-0 flex-1 flex items-center">
                        <div class="flex p-2 rounded-lg bg-indigo-800">
                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/>
                            </svg>
                        </div>
                        <div class="ml-3 font-medium text-white truncate">
                            <div class="md:hidden">
                                Convinced? Sing up now!
                            </div>
                            <div class="hidden md:inline">
                                Convinced yet? Want to sell online? Sign up now.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
