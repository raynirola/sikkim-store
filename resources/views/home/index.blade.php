<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <!-- HTML Meta Tags -->
    <meta name="title" content="{{ 'Sikkim Store - Your own e-commerce store.' }}">
    <meta name="description"
          content="Sign up now. Multi-Vendor, Multi-Tenant E-Commerce for Sikkim. Opportunity for everyone. Empowering local producers and sellers.">
    <meta name="keywords"
          content="E-Commerce, Online Shop, Store, Sikkim, Shopping in sikkim, Sikkim Store, Online, delivery">
    <meta name="author" content="Ray Nirola">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ config('app.url').'/landing' }}">
    <meta property="og:title" content="Sikkim Store - Your own e-commerce store.">
    <meta property="og:description"
          content="Sign up now. Multi-Vendor, Multi-Tenant E-Commerce for Sikkim. Opportunity for everyone. Empowering local producers and sellers.">
    <meta property="og:image" content="{{ asset('images/facebook_og_sikkim_store.png') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ config('app.url').'/landing' }}">
    <meta property="twitter:title" content="{{ 'Sikkim Store - Your own e-commerce store.' }}">
    <meta property="twitter:description"
          content="{{ 'Sign up now. Multi-Vendor, Multi-Tenant E-Commerce for Sikkim. Opportunity for everyone. Empowering local producers and sellers.' }}">
    <meta property="twitter:image"
          content="{{ asset('images/facebook_og_sikkim_store.png') }}">

    <!-- Icons -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('favicon/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">

    <!-- Site Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
    <title>Sikkim Store - Local Online Shop - Sign up, NOW</title>
</head>
<body class="bg-gray-200 font-bodyFont">
<header class="relative bg-gray-800 overflow-hidden">
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
                                     src="{{ asset('images/logo.png') }}" alt="Sikkim Store Logo">
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
                </nav>
            </div>

            <main class="mt-10 mx-auto max-w-screen-xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                <div class="sm:text-center lg:text-left">
                    <h2 class="font-titleFont text-4xl tracking-tight leading-10 font-extrabold text-gray-100 sm:text-5xl sm:leading-none md:text-6xl">
                        Success starts
                        <br class="xl:hidden">
                        <span class="text-indigo-600">with a click.</span>
                    </h2>
                    <p class="mt-3 text-base text-gray-300 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 lg:mx-0">
                        Online store makes 3 times more sales than average shops. And e-commerce sales are growing
                        46% year-on-year*. For a lot of businesses, building an online store has gone from
                        nice-to-have to utterly <span class="text-red-600">essential</span>, overnight. <br>So get
                        your own store in just a click. And
                        get your first 2 months free.
                    </p>
                    <p class="mt-5 sm:mt-12 mb-2 text-gray-400 text-sm">Sign up for early access when we launch.</p>
                    <div class="sm:flex sm:justify-center lg:justify-start">
                        <div class="rounded-md shadow" x-data="{modal : false, toast : true}">
                            <a href="#" aria-label="Register Early Access" aria-haspopup="true"
                               x-on:click="modal = true"
                               class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                                Register Now
                            </a>
                            <livewire:early-access-preview-registration/>
                        </div>
                        <div class="mt-3 sm:mt-0 sm:ml-3">
                            <a href="{{ route('contact.index') }}" aria-label="Contact Us"
                               class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-indigo-700 bg-indigo-100 hover:text-indigo-600 hover:bg-indigo-50 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-300 transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                                Contact Us
                            </a>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <div class="hidden lg:block lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
        <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" lazy
             src="{{ asset('images/hero.jpg') }}"
             alt="Hero Image">
    </div>
</header>

<main>
    <section class="py-24 bg-white">
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

            <ul class="mt-14 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                <li>
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div
                                class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
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
    </section>

    <section class="bg-cover" style='background-image: url("{{ asset('images/dashboard.jpg') }}")'>
        <div class="pt-12 pb-24 inset-0 bg-gray-800 md:bg-opacity-90">
            <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                <ul class="md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                    <li>
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div
                                    class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg leading-6 font-medium text-white">Admin Dashboard</h4>
                                <p class="mt-2 text-base leading-6 text-gray-400">
                                    Your store comes with a highly sophisticated admin dashboard. Easy product
                                    update,
                                    add, or delete. Shop performance with beautiful graphical representation. See
                                    all
                                    your order details and sell progress and many more.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="mt-10 md:mt-0">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div
                                    class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg leading-6 font-medium text-white">Your site is yours,
                                    completely.</h4>
                                <p class="mt-2 text-base leading-6 text-gray-400">
                                    Your site, be that free subdomain or your own domain, you have complete freedom
                                    to
                                    customise it, indigoing, logo and even colour schemes. Your own terms and
                                    conditions,
                                    and footer as well.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="mt-10 md:mt-0">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div
                                    class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg leading-6 font-medium text-white">Payment Gateway.</h4>
                                <p class="mt-2 text-base leading-6 text-gray-400">
                                    To make it even better, we will set up your own payment gateway integration upon
                                    signup with Razorpay. All the transactions straight from and to your bank
                                    account..
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="mt-10 md:mt-0">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div
                                    class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg leading-6 font-medium text-white">Everything’s included.</h4>
                                <p class="mt-2 text-base leading-6 text-gray-400">
                                    We take care of everything – from hosting to
                                    maintaining it. That’s upgrades, updates, bug fixes, and any third-party
                                    changes.
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="mt-12 w-full sm:max-w-sm mx-auto">
                    <a href="" aria-label="Tell me more"
                       class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-normal rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                        Tell me more.
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="text-gray-700 body-font bg-white">
        <div class="container px-5 py-10 mx-auto">
            <div class="flex flex-wrap -m-4 text-center">
                <div class="p-4 w-full flex flex-col items-center justify-center">
                    <h2 class="title-font font-medium sm:text-4xl text-3xl text-gray-900">{{ $users }}</h2>
                    <svg class="w-7 text-indigo-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                    <p class="leading-relaxed">Stores registered for early access.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-indigo-600">
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
                            Convinced? Sign up now!
                        </div>
                        <div class="hidden md:inline">
                            Convinced yet? Want to sell online? Sign up now.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


<footer class="footer bg-gray-800 p-10">
    <div class="container mx-auto max-w-6xl pt-10">
        <div class="grid grid-cols-1 md:grid-cols-2 md:gap-24 md:mb-10">
            <div class="flex flex-col md:flex-row">
                <div class="flex-1 flex-col mb-10 md:mb-2">
                    <a href="{{ route('home') }}" aria-label="Home"
                       class="inline-flex flex-col font-bodyFont text-base font-normal tracking-wider uppercase text-secondary-200 mb-4 hover:text-indigo-500 transition ease-in-out duration-150">
                        <img src="{{ asset('images/logo.png') }}"
                             class="w-15 rounded-full h-15 object-cover inline-block mb-3"
                             alt="Sikkim Store Logo">
                        SIKKIM STORE
                    </a>
                    <div class="text-xs text-gray-500 mb-2">
                        Sikkim's e-commerce store. Multi-vendor, Multi-tenant, No commissions and no hidden charges.
                        Empowering local shops and sellers.
                    </div>
                    <div
                        class="flex flex-col lg:flex-row text-xs font-medium tracking-wide text-gray-400 lg:space-x-2 mb-4">
                        <a href="" aria-label="Guides"
                           class="hover:text-indigo-600 transition ease-in-out duration-150">Guides</a>
                        <a href="" aria-label="Terms of Use"
                           class="hover:text-indigo-600 transition ease-in-out duration-150">Terms of Use</a>
                        <a href="" aria-label="Privacy Policy"
                           class="hover:text-indigo-600 transition ease-in-out duration-150">Privacy
                            Policy</a>
                    </div>
                    <div class="text-xs text-gray-400">&copy; {{ now()->format('Y') }}
                        - {{ now()->addYears(3)->format('Y') }}</div>
                </div>
                <div class="flex flex-col md:ml-10 mb-10 md:mb-0">
                    <div
                        class="font-bodyFont text-base font-normal tracking-wider uppercase text-secondary-200 mb-3 md:mb-6">
                        Get Help
                    </div>
                    <div class="text-xs font-medium tracking-wide text-gray-400 flex space-y-2 mb-4 flex-col">
                        <a href="" aria-label="Order Status"
                           class="w-max-content hover:text-indigo-600 transition ease-in-out duration-150">Order
                            Status</a>
                        <a href="" aria-label="Shipping And Delivery"
                           class="w-max-content hover:text-indigo-600 transition ease-in-out duration-150">Shipping
                            &
                            Delivery</a>
                        <a href="" aria-label="Payment Options"
                           class="w-max-content hover:text-indigo-600 transition ease-in-out duration-150">Payment
                            Options</a>
                        <a href="" aria-label="Contact Us"
                           class="w-max-content hover:text-indigo-600 transition ease-in-out duration-150">Contact
                            Us</a>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row">
                <div class="flex flex-col md:ml-8 lg:ml-16 mb-10 md:mb-0">
                    <div
                        class="font-bodyFont text-base font-normal tracking-wider uppercase text-secondary-200 mb-3 md:mb-6">
                        About Us
                    </div>
                    <div class="text-xs font-medium tracking-wide text-gray-400 flex space-y-2 mb-4 flex-col">
                        <a href="" aria-label="Careers"
                           class="hover:text-indigo-600 transition ease-in-out duration-150">Careers</a>
                        <a href="" aria-label="Sustainability"
                           class="hover:text-indigo-600 transition ease-in-out duration-150">Sustainability</a>
                        <a href="" aria-label="Services"
                           class="hover:text-indigo-600 transition ease-in-out duration-150">Service</a>
                        <a href="" class="hover:text-indigo-600 transition ease-in-out duration-150">Supply Chain</a>
                        @auth()
                            <a href="{{ route('logout') }}" aria-label="Logout"
                               onclick="event.preventDefault(); document.getElementById('logoutForm').submit();"
                               class="hover:text-indigo-600 transition ease-in-out duration-150">Logout</a>
                            <form id="logoutForm" action="{{ route('logout') }}" method="post" hidden>@csrf</form>
                        @endauth
                    </div>
                </div>
                <div class="flex-1 flex-col mb-2 md:text-right">
                    <div
                        class="font-bodyFont text-base font-normal tracking-wider uppercase text-secondary-200 mb-10 flex items-center md:justify-end space-x-4">
                        <a href="https://www.facebook.com/sikkim.store" aria-label="Facebook" target="_blank"
                           rel="noreferrer">
                            <svg viewBox="0 0 512 512"
                                 class="w-5 h-5 hover:text-indigo-600 transition ease-in-out duration-150"
                                 stroke="currentColor"
                                 fill="currentColor">
                                <path
                                    d="M75 512h167V330h-60v-60h60v-75c0-41.355469 33.644531-75 75-75h75v60h-60c-16.542969 0-30 13.457031-30 30v60h87.292969l-10 60H302v182h135c41.355469 0 75-33.644531 75-75V75c0-41.355469-33.644531-75-75-75H75C33.644531 0 0 33.644531 0 75v362c0 41.355469 33.644531 75 75 75zM30 75c0-24.8125 20.1875-45 45-45h362c24.8125 0 45 20.1875 45 45v362c0 24.8125-20.1875 45-45 45H332V360h72.707031l20-120H332v-30h90V90H317c-57.898438 0-105 47.101562-105 105v45h-60v120h60v122H75c-24.8125 0-45-20.1875-45-45zm0 0"/>
                            </svg>
                        </a>
                        <a href="" aria-label="Twitter" target="_blank" rel="noreferrer">
                            <svg viewBox="0 -47 512.00004 512"
                                 class="w-5 h-5 hover:text-indigo-600 transition ease-in-out duration-150"
                                 stroke="currentColor"
                                 fill="currentColor">
                                <path
                                    d="M512 55.964844c-32.207031 1.484375-31.503906 1.363281-35.144531 1.667968l19.074219-54.472656S436.390625 25.0625 421.296875 28.980469c-39.640625-35.628907-98.5625-37.203125-140.6875-11.3125-34.496094 21.207031-53.011719 57.625-46.835937 100.191406-67.136719-9.316406-123.703126-41.140625-168.363282-94.789063l-14.125-16.964843-10.554687 19.382812c-13.339844 24.492188-17.769531 52.496094-12.476563 78.851563 2.171875 10.8125 5.863282 21.125 10.976563 30.78125l-12.117188-4.695313-1.4375 20.246094c-1.457031 20.566406 5.390625 44.574219 18.320313 64.214844 3.640625 5.53125 8.328125 11.605469 14.269531 17.597656l-6.261719-.960937 7.640625 23.199218c10.042969 30.480469 30.902344 54.0625 57.972657 67.171875-27.035157 11.472657-48.875 18.792969-84.773438 30.601563L0 363.292969l30.335938 16.585937c11.566406 6.324219 52.4375 27.445313 92.820312 33.78125 89.765625 14.078125 190.832031 2.613282 258.871094-58.664062 57.308594-51.613282 76.113281-125.03125 72.207031-201.433594-.589844-11.566406 2.578125-22.605469 8.921875-31.078125C475.863281 105.519531 511.921875 56.078125 512 55.964844zm-72.832031 48.550781c-10.535157 14.066406-15.8125 32.03125-14.867188 50.578125 3.941407 77.066406-17.027343 136.832031-62.328125 177.628906-52.917968 47.660156-138.273437 66.367188-234.171875 51.324219-17.367187-2.722656-35.316406-8.820313-50.171875-14.910156 30.097656-10.355469 53.339844-19.585938 90.875-37.351563l52.398438-24.800781-57.851563-3.703125c-27.710937-1.773438-50.785156-15.203125-64.96875-37.007812 7.53125-.4375 14.792969-1.65625 22.023438-3.671876l55.175781-15.367187-55.636719-13.625C92.609375 226.988281 77.199219 210.8125 69.03125 198.40625c-5.363281-8.152344-8.867188-16.503906-10.96875-24.203125 5.578125 1.496094 12.082031 2.5625 22.570312 3.601563l51.496094 5.09375-40.800781-31.828126c-29.398437-22.929687-41.179687-57.378906-32.542969-90.496093 91.75 95.164062 199.476563 88.011719 210.320313 90.527343-2.386719-23.183593-2.449219-23.238281-3.074219-25.445312-13.886719-49.089844 16.546875-74.015625 30.273438-82.453125 28.671874-17.621094 74.183593-20.277344 105.707031 8.753906 6.808593 6.265625 16.015625 8.730469 24.632812 6.589844 7.734375-1.921875 14.082031-3.957031 20.296875-6.171875l-12.9375 36.945312 16.515625.011719c-3.117187 4.179688-6.855469 9.183594-11.351562 15.183594zm0 0"/>
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/sikkim.store/" aria-label="Instagram" target="_blank"
                           rel="noreferrer">
                            <svg viewBox="0 0 512 512"
                                 class="w-5 h-5 hover:text-indigo-600 transition ease-in-out duration-150"
                                 stroke="currentColor"
                                 fill="currentColor">
                                <path
                                    d="M75 512h362c41.355469 0 75-33.644531 75-75V75c0-41.355469-33.644531-75-75-75H75C33.644531 0 0 33.644531 0 75v362c0 41.355469 33.644531 75 75 75zM30 75c0-24.8125 20.1875-45 45-45h362c24.8125 0 45 20.1875 45 45v362c0 24.8125-20.1875 45-45 45H75c-24.8125 0-45-20.1875-45-45zm0 0"/>
                                <path
                                    d="M256 391c74.4375 0 135-60.5625 135-135s-60.5625-135-135-135-135 60.5625-135 135 60.5625 135 135 135zm0-240c57.898438 0 105 47.101562 105 105s-47.101562 105-105 105-105-47.101562-105-105 47.101562-105 105-105zm0 0M406 151c24.8125 0 45-20.1875 45-45s-20.1875-45-45-45-45 20.1875-45 45 20.1875 45 45 45zm0-60c8.269531 0 15 6.730469 15 15s-6.730469 15-15 15-15-6.730469-15-15 6.730469-15 15-15zm0 0"/>
                            </svg>
                        </a>
                    </div>
                    <div class="text-xs text-gray-500 md:mb-2">Payment Methods</div>
                    <div
                        class="text-xs font-medium tracking-wide text-gray-300 flex md:justify-end items-center space-x-2 mb-4">
                            <span>
                                <svg viewBox="0 0 160 100" class="h-7 text-blue-500">
                                    <path fill="currentColor"
                                          d="M151.76461 33.4570312h-4.200372c-.002368 0-.004737.0007686-.006315.0007686l-.002369-.0007686c-.961483 0-1.937176.7170848-2.209517 1.6293887-.011051.0368918-.029997.0722465-.03868.1106755 0 0-.100253.4450075-.27392 1.2143557l-5.769691 25.4630406c-.133407.5756661-.222609.9507329-.249448 1.0483425l.011051.0138344c-.199717.8900152.349702 1.6263144 1.251981 1.7085524l.011841.0169087h4.35983c.955168 0 1.924546-.7101675 2.20557-1.6109427.01342-.043809.034734-.0845438.044996-.1283528l6.293849-27.727276-.009473-.0030743c.213926-.9484272-.413643-1.7354527-1.419333-1.7354527zm-21.544777 25.0254905c-.582574.3573895-1.198302.6632842-1.843238.9238326-.866756.3404808-1.688517.5187912-2.448704.5187912-1.166726 0-2.063479-.1606331-2.669735-.5041882-.607045-.3258777-.925171-.8923208-.914909-1.7031722 0-.9361299.22182-1.6624376.681248-2.2319551.462586-.5479972 1.150149-.9891619 2.002696-1.3181139.84781-.279763 1.890602-.5103368 3.094429-.6755814 1.07042-.1314271 3.186789-.3689182 3.457552-.3704554.270762-.0023057.450744-.1475673.329967.5549145-.053679.305126-.664671 2.7476719-.944906 3.8582693-.081308.332795-.536.8177687-.7444.9476586 0 0 .2084-.1298899 0 0zm8.306017-17.1669929c-1.782454-.9684103-4.570599-1.4579954-8.385746-1.4579954-1.886655 0-3.782782.1475672-5.685225.435016-1.39644.2082851-1.54011.2428711-2.407655.4265616-1.784823.3781412-2.060322 2.1182053-2.060322 2.1182053l-.573101 2.2949785c-.325231 1.467987.533631 1.4072692.916488 1.2935194.779133-.2290367 1.20146-.4565362 2.791302-.8070085 1.519586-.3358693 3.125216-.5871948 4.406404-.5772032 1.878761 0 3.307566.2005992 4.257209.5864262.950432.4035042 1.420911 1.0906143 1.420911 2.0736276.003158.2336482.009473.4542305-.07736.647144-.078151.1798476-.228136.3535466-.677302.4127272-2.681575.1552531-4.606121.3935127-6.923786.7224648-2.286878.3135804-4.287995.8508176-5.960723 1.5948026-1.783244.7701167-3.117322 1.8007819-4.036968 3.1065985-.895174 1.3119653-1.345129 2.9006193-1.347498 4.7721105 0 1.7685015.65283 3.2111254 1.915863 4.3309458 1.278031 1.1052174 2.940497 1.652446 4.951876 1.652446 1.256718-.0084544 2.240304-.096841 2.945234-.2682343.697826-.1713932 1.458803-.4150329 2.262407-.7539765.60073-.2444083 1.248823-.5979549 1.933229-1.0414253.685195-.4450076 1.159622-.7608938 1.768246-1.1490264l.022103.0368918-.171299.7355306c-.00079.0069172-.011052.0107601-.011052.0176773l.005526.0138345c-.19577.8861722.351281 1.62324 1.25277 1.7100895l.011052.0153716h.079729l.003157.0038429c.598362 0 2.652369-.0007686 3.612273-.0038429h.670197c.044206 0 .048942-.0130659.066309-.0230574.920435-.1099069 1.802979-.8400575 2.01059-1.7162382l3.428343-14.4070237c.07894-.3389436.141302-.7301506.178404-1.1805382.042627-.4549991.093148-.8292973.07815-1.0998373.007894-2.0390416-.892017-3.5462261-2.669735-4.5154049zm-20.644473-3.2816063c-.584942-1.1082917-1.468275-2.0006126-2.585269-2.6954085-1.145413-.6932588-2.50633-1.1766953-4.081963-1.458764-1.558267-.2659285-3.410977-.4181073-5.52182-.4227188l-9.8216565.0046115c-1.0112153.0169088-2.0034852.7900998-2.2371462 1.7423699l-6.6032915 27.9778329c-.2407655.9507329.4160113 1.7431384 1.4090706 1.7377584l4.7126898-.0084544c.9993744.0084544 2.0176943-.7785711 2.2537235-1.729304l1.5929997-6.7896318c.2233989-.9515015 1.2393506-1.7485185 2.2553026-1.734684h1.339603c5.748377 0 10.205303-1.149795 13.396828-3.4386249 3.183631-2.3003587 4.786103-5.317802 4.786103-9.0707759-.010262-1.6386117-.296812-3.0189805-.895174-4.1142064zm-10.132678 9.1507082c-1.406702.9960791-3.38098 1.4956558-5.921254 1.4956558h-1.168305c-1.010426.0115287-1.6632556-.7839512-1.423279-1.7377584l1.408281-5.9380456c.209979-.9392042 1.235403-1.738527 2.23162-1.7308412l1.543268-.0076858c1.8014.0076858 3.148898.3012832 4.079595.8846351.914909.5902691 1.358549 1.5056473 1.365654 2.7253831.003947 1.8591939-.702562 3.2895205-2.11558 4.308657"/>
                                    <path fill="currentColor"
                                          d="M84.8355974 39.8576594c-.8943152 0-2.0673141.7089103-2.6225757 1.5656536 0 0-5.9822242 10.0457618-6.5697767 11.0496504-.3193982.539762-.6430083.1966522-.6970604-.0041256-.0435224-.2440962-1.8539139-10.9795157-1.8539139-10.9795157-.2035725-.8643068-1.1252646-1.6062217-2.2779063-1.6027838l-3.730291.0055008c-.8992289 0-1.4601063.7054724-1.2600437 1.5580901 0 0 2.8514193 15.8311855 3.4073829 19.554512.2772798 2.0593468-.028781 2.4244597-.028781 2.4244597l-3.6965962 6.3134966c-.5412221.8560557-.244989 1.5574025.6500281 1.5574025l4.3227572-.003438c.8950172 0 2.0806516-.6979088 2.61345-1.5553397l16.6297692-27.5498658s1.5906736-2.3536374.1235475-2.3336971c-1.0003133.0137519-5.00999 0-5.00999 0zM53.6140586 58.4825217c-.5825737.3573895-1.1975126.661747-1.8424485.9230641-.8667561.3389435-1.6924635.5187912-2.450283.5187912-1.1635686 0-2.0626898-.1614018-2.6697348-.5034197-.6062556-.3266463-.9259607-.8930894-.9156985-1.7047094 0-.9338242.2241882-1.6624376.6828269-2.2311865.463375-.5487658 1.1477807-.990699 2.0003276-1.3188825.8501787-.2813001 1.8961275-.5087996 3.0960083-.6740442 1.07042-.1314271 3.1891569-.3681496 3.4591301-.3719925.2683944-.0007686.4491659-.1475673.3283884.5549144-.0521001.3051261-.6638814 2.7492091-.9441167 3.8590379-.0844653.3343321-.539157.8193058-.7443998.9484272 0 0 .2052428-.1291214 0 0zm8.3060171-17.1677615c-1.7824545-.9684102-4.5698092-1.4572268-8.3849566-1.4572268-1.8874441 0-3.7827822.1460301-5.6860142.4342474-1.3988084.2067479-1.5393208.2421026-2.4076556.4257931-1.7856121.3796783-2.0603217 2.1182052-2.0603217 2.1182052l-.5731009 2.2965157c-.3244415 1.4672184.53521 1.4065006.9164879 1.2927509.7775543-.2290368 1.202249-.4557677 2.7920911-.8077772 1.5172177-.3343321 3.1252159-.584889 4.4048256-.5764346 1.8803396 0 3.3075663.1998307 4.2572088.5856576.9512213.4035043 1.4193327 1.0921515 1.4193327 2.0743962.0063151.2336482.0110515.4549991-.0734138.6463754-.0797289.1813848-.2312928.3543152-.6804587.4127272-2.6784182.1575589-4.6021745.3950499-6.923786.724002-2.2868781.3135804-4.2872057.8508176-5.9607237 1.594034-1.783244.7701167-3.1157432 1.802319-4.0338099 3.1073671-.8983318 1.3111967-1.3474977 2.8998507-1.3490765 4.7721105 0 1.7677329.6536193 3.2111254 1.9150729 4.3301772 1.2788204 1.1052174 2.939708 1.6532146 4.9510872 1.6532146 1.2575067-.0084544 2.2403038-.0983782 2.947602-.2682343.697036-.1729304 1.4588024-.4150329 2.2592492-.7539765.603098-.2444083 1.2496128-.5994921 1.9348079-1.0421939.6836163-.444239 1.160411-.7601252 1.771403-1.1482578l.0189455.0361232-.1712988.7347621c-.0015788.0069172-.0110515.0115287-.0110515.019983l.0071045.0115287c-.19577.888478.3497021 1.6247772 1.2519809 1.7100895l.0110516.0169088h.0789395l.0023682.00538c.5999404 0 2.6547363-.0030743 3.6122728-.00538h.6709859c.0449956 0 .0513107-.014603.0655199-.023826.922803-.1129812 1.8021894-.8415946 2.0121685-1.714701l3.4283437-14.4085609c.0773607-.338175.1405124-.729382.1752458-1.179001.0457849-.4573049.0955168-.8300659.0820971-1.0998374.0078939-2.0405787-.8935955-3.5477632-2.6705243-4.516942zM40.47554 38.0339225c-.5849419-1.1082917-1.4682752-2.0006126-2.5852695-2.6954085-1.1454126-.6932588-2.50633-1.1766953-4.081963-1.458764-1.5582663-.2659285-3.410977-.4181073-5.52182-.4227188l-9.821656.0046115c-1.0112154.0169088-2.0034853.7900998-2.2371463 1.7423699L9.6243937 63.1818455c-.2407655.9507329.4160114 1.7431384 1.4090706 1.7377584l4.7126898-.0084544c.9993744.0084544 2.0176944-.7785711 2.2537235-1.729304l1.5929997-6.7896318c.2233989-.9515015 1.2393506-1.7485185 2.2553023-1.734684h1.3396038c5.7483764 0 10.2053022-1.149795 13.3968273-3.4386249 3.1836311-2.3003587 4.7861035-5.317802 4.7861035-9.0707759-.0102621-1.6386117-.2968126-3.0189805-.8951742-4.1142064zm-10.1326778 9.1507082c-1.4067024.9960791-3.38098 1.4956558-5.921254 1.4956558h-1.168305c-1.0104259.0115287-1.6632558-.7839512-1.4232797-1.7377584l1.4082812-5.9380456c.2099792-.9392042 1.2354036-1.738527 2.2316205-1.7308412l1.5432677-.0076858c1.8014001.0076858 3.1488978.3012832 4.0795948.8846351.9149092.5902691 1.3585493 1.5056473 1.3656539 2.7253831.0039469 1.8591939-.7025618 3.2895205-2.1155794 4.308657"/>
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
            </div>
        </div>
        <div class="flex flex-col items-start md:justify-center font-bodyFont -mb-4 mt-16 md:mt-32">
            <p class="text-xs font-light tracking-tighter text-indigo-600 leading-none mb-2">
                Designed with ❤️ in West Sikkim</p>
            <p class="text-xs font-light tracking-tighter text-indigo-600 leading-none">
                A unit of One Stop Solution (P) LTD.</p>
        </div>
    </div>
</footer>

<script src="{{ asset('js/app.js') }}" defer></script>
@livewireScripts
</body>
</html>
