@extends('layouts.landing')

@section('content')
    <section class="text-gray-50 bg-brand-800 pt-4">
        <div class="container mx-auto max-w-6xl px-4 md:px-10 lg:px-0">
            <div class="flex items-center justify-between font-titleFont font-medium">
                <a href="{{ route('home') }}"
                   class="flex items-center font-bodyFont font-normal md:font-semibold tracking-wider uppercase hover:text-gray-200 transition ease-in-out duration-150">
                    <img src="{{ asset('images/logo-flat.png') }}"
                         class="w-10 md:w-14 h-10 md:h-14 rounded-full object-cover object-center" alt="">
                    <span class="ml-2">Sikkim Store</span>
                </a>
                <div class="flex items-center justify-end flex-1" @guest x-data="{'modal' : false}" @endguest>
                    <a href=" {{ route('contact.index') }}"
                       class="flex items-start px-2 pr-4 md:pr-6 md:px-3 py-4 group transition ease-in-out duration-150">
                        <span
                            class="font-bodyFont text-sm mr-2 text-gray-200 group-hover:text-gray-900 ease-in-out duration-150">Contact</span>
                        <svg class="w-5 group-hover:text-gray-900 transition ease-in-out duration-150"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-brand-800 py-10 md:py-20 font-bodyFont">
        <div class="container mx-auto max-w-6xl px-4 md:px-10 lg:px-0">
            <div class="flex flex-col md:flex-row items-center justify-between flex-col-reverse">
                <div class="flex-1 flex flex-col md:mr-16">
                    <h1 class="text-2xl md:text-4xl text-gray-100 mb-6 font-titleFont">Success starts with a click.</h1>
                    <p class="text-gray-300 mb-8 max-w-xl text-sm md:text-base">Online store make 3 times more sales
                        than average shops. And
                        e-commerce sales are growing 46% year-on-year*.
                        For a lot of businesses building an online store has gone from nice-to-have to utterly
                        essential, overnight.
                        <br>
                        So get your own store in just a click. And get your first 2 months free.</p>
                    <div x-data="{modal : false, toast : true}">
                        <p class="text-gray-300 text-xs mb-2">Sign up for early access when we launch.</p>
                        <button type="button" x-on:click="modal = true"
                                class="py-3 w-full bg-gray-200 hover:bg-brand-700 text-brand-700 hover:text-gray-100 max-w-full md:max-w-sm rounded-md shadow-md text-center transition ease-in-out duration-150">
                            Sign
                            up
                        </button>
                        <livewire:early-access-preview-registration/>
                    </div>
                </div>
                <div class="w-full md:w-2/5 mb-4 md:mb-0 max-w-lg">
                    <img src="{{ asset('sikkim_store_svg/hero.svg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="bg-gray-100 py-10 font-bodyFont">
        <div class="container mx-auto max-w-6xl px-4 md:px-10 lg:px-0">
            <div class="flex flex-col items-center justify-center">
                <p class="tracking-wide text-gray-700">Benefits of working with us.</p>
                <span class="w-16 bg-brand-700 h-1 mt-1 rounded-full"></span>
            </div>
        </div>
    </section>
    <section class="font-bodyFont py-10">
        <div class="container mx-auto max-w-6xl px-4 md:px-10 lg:px-0">
            <div class="flex items-center justify-between">
                <div class="flex-1 max-w-lg">
                    <h3 class="text-lg md:text-2xl mb-4">What you sell is 100% yours.</h3>
                    <p class="text-gray-500 text-sm md:text-base">Unlike many other sites, the sales that you make are
                        100% yours. We don’t take any percentage whatsoever.</p>
                </div>
                <img class="w-1/3 md:w-2/6" src="{{ asset('sikkim_store_svg/sell.svg') }}" alt="">
            </div>
        </div>
    </section>
    <section class="font-bodyFont py-10 md:py-20 bg-white">
        <div class="container mx-auto max-w-6xl px-4 md:px-10 lg:px-0">
            <div class="flex items-center justify-between flex-row-reverse">
                <div class="flex-1 max-w-lg text-right">
                    <h3 class="text-lg md:text-2xl mb-4 text-brand-700">Free Custom Domain.</h3>
                    <p class="text-gray-500 text-sm md:text-base">Free custom subdomain, <span
                            class="text-green-600 italic"> <small
                                class="text-gray-500 italic text-xs">eg.</small> https://yourstore.sikkim.store</span>.
                        Or you can register your own domain. We will guide you through every step to set up your own
                        personal domain and use our services.</p>
                </div>
                <img class="w-1/3 md:w-2/6" src="{{ asset('sikkim_store_svg/domain.svg') }}" alt="">
            </div>
        </div>
    </section>
    <section class="font-bodyFont py-10">
        <div class="container mx-auto max-w-6xl px-4 md:px-10 lg:px-0">
            <div class="flex items-center justify-between">
                <div class="flex-1 max-w-lg">
                    <h3 class="text-lg md:text-2xl mb-4">Everything’s included</h3>
                    <p class="text-gray-500 text-sm md:text-base">We take care of everything – from hosting to
                        maintaining it. That’s upgrades, updates, bug fixes, and any third-party changes.</p>
                </div>
                <img class="w-1/3 md:w-2/6" src="{{ asset('sikkim_store_svg/complete.svg') }}" alt="">
            </div>
        </div>
    </section>
    <section class="font-bodyFont py-10 md:py-20 bg-white">
        <div class="container mx-auto max-w-6xl px-4 md:px-10 lg:px-0">
            <div class="flex items-center justify-between flex-row-reverse">
                <div class="flex-1 max-w-lg text-right">
                    <h3 class="text-lg md:text-2xl mb-4 text-brand-700">Scalability? No worries.</h3>
                    <p class="text-gray-500 text-sm md:text-base">You don’t have to worry about scalability, or downtime
                        ever. Our system runs on the latest technology and software stack that handles scaling like a
                        breeze. </p>
                </div>
                <img class="w-1/3 md:w-2/6" src="{{ asset('sikkim_store_svg/scale.svg') }}" alt="">
            </div>
        </div>
    </section>
    <section class="font-bodyFont py-10">
        <div class="container mx-auto max-w-6xl px-4 md:px-10 lg:px-0">
            <div class="flex items-center justify-between">
                <div class="flex-1 max-w-lg">
                    <h3 class="text-lg md:text-2xl mb-4">No hidden charges.</h3>
                    <p class="text-gray-500 text-sm md:text-base">How much for all these? Just a minimal ₹ 3000.00 per
                        month or ₹ 32,000.00 per year, no hidden charges. </p>
                </div>
                <img class="w-1/3 md:w-2/6" src="{{ asset('sikkim_store_svg/hidden.svg') }}" alt="">
            </div>
        </div>
    </section>
    <section class="font-bodyFont py-20 bg-brand-800 hidden md:block">
        <div class="container mx-auto max-w-6xl lg:px-0">
            <div class="grid grid-cols-3 gap-10">
                <div class="text-left">
                    <img src="{{ asset('sikkim_store_svg/customise.svg') }}" class="p-4 w-52 mx-auto h-36"
                         alt="">
                    <p class="text-lg mb-2 text-gray-100 mt-6">Your site is yours, completely.</p>
                    <p class="text-xs text-gray-300 text-justify tracking-wide">Your site, be that free subdomain or
                        your own domain, you have
                        complete freedom to customise it, branding, logo and even colour schemes. Your own terms and
                        conditions, and footer as well.</p>
                </div>
                <div class="text-center">
                    <img src="{{ asset('sikkim_store_svg/admin2.svg') }}" class="p-4 w-52 mx-auto h-36" alt="">
                    <p class="text-lg mb-2 text-gray-100 mt-6">Admin Dashboard.</p>
                    <p class="text-xs text-gray-300 text-justify tracking-wide">Your store comes with a highly
                        sophisticated admin dashboard. Easy
                        product update, add, or delete. Shop performance with beautiful graphical representation. See
                        all your order details and sell progress and many more. </p>
                </div>
                <div class="text-right">
                    <img src="{{ asset('sikkim_store_svg/gateway.svg') }}" class="p-4 w-52 mx-auto h-36" alt="">
                    <p class="text-lg mb-2 text-gray-100 mt-6">Payment Gateway.</p>
                    <p class="text-xs text-gray-300 text-justify tracking-wide">To make it even better, we will set up
                        your own payment gateway
                        integration upon signup with Razorpay. All the transactions straight from and to your bank
                        account. </p>
                </div>
            </div>
        </div>
    </section>
    <section class="font-bodyFont py-16 md:py-24 bg-white">
        <div class="container mx-auto max-w-6xl px-4 md:px-10 lg:px-0 ">
            <div class="flex flex-col md:flex-row items-start md:items-center justify-between">
                <div class="flex-1">
                    <h3 class="text-xl md:text-2xl mb-2 text-brand-700">Convinced Yet?</h3>
                    <h4 class="text-sm md:text-lg text-gray-500">Sign up for early access and 2 months free.</h4>
                </div>
                <div class="flex-1 flex items-center space-x-6 w-full mt-6 md:mt-0">
                    <div x-data="{modal : false, toast : true}" class="w-full">
                        <button type="button"
                                x-on:click="modal = true"
                                class="bg-brand-700 hover:bg-brand-600 rounded-md py-3 w-full text-center text-gray-200 transition ease-in-out duration-200">
                            Sign up
                        </button>
                        <livewire:early-access-preview-registration/>
                    </div>
                    <a href=""
                       class="bg-gray-800 hover:bg-gray-900 border border-gray-500 rounded-md py-3 w-full text-center transition ease-in-out duration-200 text-gray-100 ">
                        Learn more</a>
                </div>
            </div>
        </div>
    </section>
@endsection
