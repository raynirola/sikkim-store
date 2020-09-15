@extends('layouts.welcome')

@section('content')
    <main class="container mx-auto h-screen flex md:items-center justify-center pt-24 md:pt-0">
        <section class="space-y-10 md:space-y-8 w-full">
            <a href=""
               class="flex items-center justify-center">
                <img src="{{ asset('images/logo-flat.png') }}"
                     class="w-32 h-32 md:w-40 md:h-40 object-cover overflow-hidden rounded-full border border-transparent md:hover:border-green-700 transition ease-in-out duration-200"
                     alt="">
            </a>
            <div class="text-center text-lg md:text-3xl font-medium md:font-semibold leading-none tracking-tight">
              <span class="bg-clip-text text-transparent bg-gradient-to-r from-teal-400 to-blue-500">
                Coming Soon, Stay Tuned!
              </span>
            </div>

            <div x-data="
                {
                    clock: {
                        days: '00',
                        hours: '00',
                        minutes: '00',
                        seconds: '00',
                        remaining: 1000
                    },
                    deadline: '1 November 2020',
                    calculateTimeLeft: function () {
                        const deadline = this.deadline;
                        const remaining = Date.parse(deadline) - Date.parse(new Date());
                        const seconds = Math.floor( (remaining/1000) % 60 );
                        const minutes = Math.floor( (remaining/1000/60) % 60 );
                        const hours = Math.floor( (remaining/(1000*60*60)) % 24 );
                        const days = Math.floor( remaining/(1000*60*60*24) );
                        return {
                            days,
                            hours,
                            minutes,
                            seconds,
                            remaining
                        };
                    },
                    startCountdown: function () {
                        const countdownIntervalFunction = setInterval(() => {
                            const timeLeft = this.calculateTimeLeft();
                            this.clock = timeLeft;
                            if (timeLeft.remaining <= 0) {
                                clearInterval(countdownIntervalFunction);
                            }
                        }, 1000);
                    }
                }"
                 x-init="startCountdown()"
                 class="flex items-center space-x-4 sm:space-x-6 justify-center text-teal-500 pb-32">
                <div class="flex flex-col items-center justify-between">
                    <span class="font-semibold text-2xl sm:text-3xl md:text-4xl flex items-center justify-center"
                          x-text="clock.days"></span>
                    <span class="text-xs sm:text-sm md:text-gray-500">Days</span>
                </div>
                <div class="flex flex-col items-center justify-between ">
                    <span class="font-semibold  text-2xl sm:text-3xl md:text-4xl  flex items-center justify-center"
                          x-text="clock.hours"></span>
                    <span class="text-xs sm:text-sm md:text-gray-500">Hours</span>
                </div>
                <div class="flex flex-col items-center justify-between ">
                    <span class="font-semibold  text-2xl sm:text-3xl md:text-4xl  flex items-center justify-center"
                          x-text="clock.minutes"></span>
                    <span class="text-xs sm:text-sm md:text-gray-500">Minutes</span>
                </div>
                <div class="flex flex-col items-center justify-between ">
                    <span class="font-semibold  text-2xl sm:text-3xl md:text-4xl  flex items-center justify-center"
                          x-text="clock.seconds"></span>
                    <span class="text-xs sm:text-sm md:text-gray-500">Seconds</span>
                </div>
            </div>

            <div class="px-10 flex items-center justify-center mx-auto">
                <a href="{{ route('contact.index') }}"
                   class="text-center inline-block w-full md:max-w-sm bg-gradient-to-r from-green-600 to-indigo-600 px-4 py-3 rounded-md text-white shadow-md hover:from-indigo-600 hover:to-green-600 transition ease-in-out duration-200">
                    Contact
                </a>
            </div>

        </section>
    </main>
@endsection
