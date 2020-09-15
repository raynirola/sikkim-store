@extends('layouts.app')

@section('content')
    <div class="bg-gray-50 pt-4 md:pt-12 pb-16 md:pb-20">
        <div class="max-w-6xl mx-auto px-10 md:px-10 lg:px-0 flex flex-col md:flex-row items-center justify-center md:justify-start">
            <div class="w-full md:w-5/12">
                <div>
                    <a href="{{ route('home.index') }}">
                        {{--                    <x-logo class="mx-auto h-20 w-20 overflow-hidden object-cover rounded-full shadow"></x-logo>--}}
                    </a>
                    <h2 class="mt-6 text-center text-xl md:text-3xl leading-9 font-normal text-gray-900">
                        Sign in to your account
                    </h2>
                    <p class="mt-1 text-center text-xs md:text-sm leading-5 text-gray-600">
                        Or
                        <a href="{{route('register')}}"
                           class="inline-flex items-center font-medium text-green-600 hover:text-green-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                            Register for free
                            <svg class="h-4 w-4 md:w-5 md:h-5"
                                 xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 20 20"
                                 fill="currentColor">
                                <path fill-rule="evenodd"
                                      d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </a>
                    </p>
                </div>
                <form class="mt-8"
                      action="{{route('login')}}"
                      method="POST">
                    @csrf
                    <div class="">
                        <div>
                            <input aria-label="Email address"
                                   name="email"
                                   type="email"
                                   value="{{ old('email') }}"
                                   required
                                   class="appearance-none rounded-md relative block w-full px-3 py-3 border border-gray-300 @error('email'){{'border-red-500'}}@enderror placeholder-gray-500 text-gray-900  focus:outline-none focus:shadow-outline-blue focus:border-green-500 focus:z-10 text-sm md:text-base sm:leading-5"
                                   placeholder="Email address"/>
                            @error('email')
                            <span class="pl-2 text-xs text-red-600"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>
                        <div class="mt-4">
                            <input aria-label="Password"
                                   name="password"
                                   type="password"
                                   required
                                   class="appearance-none rounded-md relative block w-full px-3 py-3 border border-gray-300 @error('password'){{'border-red-500'}}@enderror placeholder-gray-500 text-gray-900 focus:outline-none focus:shadow-outline-blue focus:border-green-500 focus:z-10 text-sm md:text-base sm:leading-5 relative"
                                   placeholder="Password"/>
                            @error('password')
                            <span class="pl-2 text-xs text-red-600"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>
                    </div>

                    <div class="mt-6 flex items-center justify-between">
                        <div class="flex items-center text-sm text-gray-600">
                            <input id="remember"
                                   type="checkbox"
                                   name="remember"
                                   class="form-checkbox h-4 w-4 text-brand-700 transition duration-150 ease-in-out mr-2"
                            {{old('remember') == 'on' ? 'checked' : ''}}
                            <label for="remember"
                                   class="block leading-5">
                                Remember me
                            </label>
                        </div>

                        <div class="text-sm leading-5">
                            <a href="{{ route('password.request') }}"
                               class="font-normal text-brand-700 underline hover:text-brand-600 focus:outline-none focus:underline transition ease-in-out duration-150">
                                Forgot your password?
                            </a>
                        </div>
                    </div>

                    <div class="mt-6">
                        <button type="submit"
                                class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-brand-700 hover:bg-brand-600 focus:outline-none focus:border-green-700 focus:shadow-outline-green active:bg-green-700 transition duration-150 ease-in-out">
                            Sign in
                        </button>
                    </div>
                </form>
            </div>
            <div class="md:w-7/12 hidden md:flex justify-end items-center">
                dfadfa
            </div>
        </div>
    </div>
@endsection
