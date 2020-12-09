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
<body>
<main class="container mx-auto py-12">
    <div class="container max-w-6xl mx-auto">
        <div class="font-bodyFont mb-2 uppercase tracking-wide text-gray-700">Preorder Preview</div>
        <div class="flex flex-col mb-3">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead>
                            <tr>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    Name
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    Business
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    Phone Number
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    Invitation Status
                                </th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($preorders as $preorder)
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-full"
                                                     src="https://avatar.tobi.sh/{{ Str::uuid() }}.svg?text={{ $preorder->initial }}"
                                                     alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm leading-5 font-medium text-gray-900 capitalize">
                                                    {{ $preorder->name }}
                                                </div>
                                                <div class="text-sm leading-5 text-gray-500">
                                                    {{ $preorder->email }}
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap">
                                        <div class="text-sm leading-5 text-gray-900 capitalize">
                                            {{ $preorder->business }}
                                        </div>
                                        <div class="text-sm leading-5 text-gray-500">
                                            Registered {{ $preorder->created_at->diffForHumans()  }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap">
                                        <div class="text-sm leading-5 text-gray-900">
                                            {{ $preorder->phone }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap">
                                                <span
                                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-orange-100 text-orange-800">
                                                    {{ 'Not Invited' }}
                                                </span>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>
