<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="min-h-screen font-sans antialiased bg-slate-50">


    <header class="bg-white/80 dark:bg-gray-900/80 backdrop-blur border-b dark:border-gray-700 sticky top-0 z-50 w-full h-[3.3rem] flex-none">
        <div class="max-w-[90rem] px-4 sm:px-6 md:px-8 mx-auto h-[3.3rem]">
            <div class="flex items-center h-[3.3rem] gap-4"><button type="button" class="text-gray-600 md:hidden dark:text-gray-400"><span class="sr-only">Navigation</span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="flex-shrink-0 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                    </svg></button>

                <div style="position:fixed;top:1;left:1;width:1;height:0;padding:0;margin:-1;overflow:hidden;clip:rect(0, 0, 0, 0);white-space:nowrap;border-width:0;display:none;"></div>
                <a href="/" class="flex-shrink-0 h-[24px] text-gray-500 dark:text-white" alt="Laravel Nova">
                    Zwr2
                </a>

                <div data-headlessui-state="" class="relative inline-block text-left">
                    <div><button id="headlessui-menu-button-224" type="button" aria-haspopup="menu" aria-expanded="false" data-headlessui-state="" class="inline-flex w-full items-center justify-center gap-x-1.5 rounded-full bg-gray-100 dark:bg-gray-950 px-3 py-1 text-[13px] font-semibold text-gray-500 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-950/70">v4.0 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="w-4 h-4 ml-2 -mr-1 text-gray-500">
                                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd"></path>
                            </svg></button>
                        <!---->
                    </div>
                </div>
                <div class="items-center ml-auto md:flex md:divide-x md:divide-gray-200 md:dark:divide-gray-700">
                    <div class="items-center hidden gap-12 px-6 md:flex">
                        <!--[--><a href="https://bit.ly/3KppFiG" class="text-sm font-medium text-gray-600 dark:text-gray-400 hover:text-primary-500">Home</a><a href="https://bit.ly/3QlZywL" class="text-sm font-medium text-gray-600 dark:text-gray-400 hover:text-primary-500">Purchase a License</a><a href="https://laracasts.com/series/laravel-nova-mastery-2023-edition" class="text-sm font-medium text-gray-600 dark:text-gray-400 hover:text-primary-500">Video Tutorials</a>
                        <!--]-->
                    </div>
                    <div class="hidden gap-6 pl-6 md:flex md:items-center">
                        <div data-headlessui-state="" class="relative inline-block text-left">
                            <div><button id="headlessui-menu-button-226" type="button" aria-haspopup="menu" aria-expanded="false" data-headlessui-state="" class="flex items-center text-gray-500 dark:text-gray-400"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-gray-500">
                                        <path d="M10 2a.75.75 0 01.75.75v1.5a.75.75 0 01-1.5 0v-1.5A.75.75 0 0110 2zM10 15a.75.75 0 01.75.75v1.5a.75.75 0 01-1.5 0v-1.5A.75.75 0 0110 15zM10 7a3 3 0 100 6 3 3 0 000-6zM15.657 5.404a.75.75 0 10-1.06-1.06l-1.061 1.06a.75.75 0 001.06 1.06l1.06-1.06zM6.464 14.596a.75.75 0 10-1.06-1.06l-1.06 1.06a.75.75 0 001.06 1.06l1.06-1.06zM18 10a.75.75 0 01-.75.75h-1.5a.75.75 0 010-1.5h1.5A.75.75 0 0118 10zM5 10a.75.75 0 01-.75.75h-1.5a.75.75 0 010-1.5h1.5A.75.75 0 015 10zM14.596 15.657a.75.75 0 001.06-1.06l-1.06-1.061a.75.75 0 10-1.06 1.06l1.06 1.06zM5.404 6.464a.75.75 0 001.06-1.06l-1.06-1.06a.75.75 0 10-1.061 1.06l1.06 1.06z"></path>
                                    </svg></button>
                                <!---->
                            </div>
                        </div><a href="https://github.com/laravel/nova-issues/discussions" class="text-gray-500 dark:text-gray-400"><svg class="w-5 fill-current" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"></path>
                            </svg></a>
                    </div>
                    <div class="flex items-center gap-3 pl-6"><button type="button" class="flex-shrink-0 text-gray-600 md:hidden dark:text-gray-400"><span class="sr-only">Search</span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
                            </svg></button><button type="button" class="flex-shrink-0 text-gray-600 md:hidden dark:text-gray-400"><span class="sr-only">More</span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z"></path>
                            </svg></button>
                        <!--[-->
                        <!---->
                        <div style="position:fixed;top:1;left:1;width:1;height:0;padding:0;margin:-1;overflow:hidden;clip:rect(0, 0, 0, 0);white-space:nowrap;border-width:0;display:none;"></div>
                        <!--]-->
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="relative">

        <div class="relative z-10 max-w-[90rem] mx-auto px-4 sm:px-6 md:px-8">
            <div class="hidden lg:block fixed z-20 inset-0 w-[19.5rem] top-[3.3rem] left-[max(0px,calc(50%-45rem))] right-auto px-8 pb-10 overflow-y-auto">
                <div class="sticky top-0 -ml-0.5">
                    <div class="h-10 bg-gray-50 dark:bg-gray-900"></div>

                    <div id="local-search">
                        <div class="relative bg-white pointer-events-auto dark:bg-gray-900"><button class="hidden w-full lg:flex items-center text-sm leading-6 text-gray-400 rounded-md ring-1 ring-gray-900/10 shadow-sm py-1.5 pl-2 pr-3 hover:ring-gray-300 dark:hover:ring-gray-800/10 dark:bg-gray-800 dark:shadow-[inset_0_1px_0_0_rgba(255,255,255,0.1)] dark:hover:bg-gray-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="flex-none w-6 h-6 mr-3 text-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
                                </svg><span>Search Nova Docs...</span><kbd class="flex-none pl-3 ml-auto font-sans text-xs font-semibold">⌘K</kbd></button></div>
                    </div>
                    <!--]-->
                    <div class="h-8 bg-gradient-to-b from-gray-50 dark:from-gray-900"></div>
                </div>
                <x-sidebar />
            </div>
            <div class="lg:pl-[19.5rem]">
                <div class="max-w-3xl pt-10 pb-24 mx-auto antialiased xl:max-w-none xl:ml-0 xl:pr-16">
                    <div class="mb-6">
                        <x-banner />
                    </div>
                    {{ $slot }}
                </div>
            </div>


            <div class="hidden min-h-screen p-10 bg-gray-100">

                <!-- Page Content -->
                <main class="">
                    {{ $slot }}
                </main>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.js"></script>

            @stack('modals')

            @livewireScripts
</body>

</html>
