<nav x-data="{ open: false }" class="fixed z-10 top-0 inset-x-0 bg-[#001d51] border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo -->
            <div class="flex items-center space-x-10">
                <a href="{{ url('/') }}" class="text-sm border text-white border-white p-2 px-3 rounded-full">
                    BakoSehat
                </a>
                <a href="{{ url('/') }}">
                    <img src="{{ asset('images/dinkes-logos.png') }}" alt="Logo Kota Padang" class="w-auto h-10">
                </a>
            </div>




            <!-- User Nav right -->
            <div class="sm:flex sm:items-center sm:ms-6 ">

                {{-- <div>
                    <div class="w-full max-w-sm min-w-[200px] px-2">
                        <div class="relative flex items-center">
                            <input type="search"
                                class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-full py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                                placeholder="Search.." />
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="absolute w-5 h-5 top-2.5 right-2.5 text-slate-600">
                                <path fill-rule="evenodd"
                                    d="M10.5 3.75a6.75 6.75 0 1 0 0 13.5 6.75 6.75 0 0 0 0-13.5ZM2.25 10.5a8.25 8.25 0 1 1 14.59 5.28l4.69 4.69a.75.75 0 1 1-1.06 1.06l-4.69-4.69A8.25 8.25 0 0 1 2.25 10.5Z"
                                    clip-rule="evenodd" />
                            </svg>

                        </div>
                    </div>
                </div> --}}

                <div class="bg-slate-200 m-2 p-2 rounded-full px-2 text-gray-800">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                    </svg>
                </div>

                <x-dropdown align="right">
                    <x-slot name="trigger">
                        <button
                            class="flex items-center rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-150 ease-in-out">
                            <img src="{{ Auth::user()->profile_photo_url ?? asset('https://i.pinimg.com/736x/1a/a8/d7/1aa8d75f3498784bcd2617b3e3d1e0c4.jpg') }}"
                                alt="Avatar"
                                class="h-8 w-8 rounded-full object-cover ring-1 ring-gray-300 shadow-sm transition-transform hover:scale-105" />
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        {{-- Header user info --}}
                        <div class="px-4 py-2 border-b border-gray-200">
                            <div class="text-sm font-semibold text-gray-800">
                                {{ Auth::user()->name }}
                            </div>
                            <div class="text-xs text-gray-500">
                                {{ Auth::user()->email }}
                            </div>
                        </div>

                        {{-- Navigation Links --}}
                        <x-dropdown-link :href="route('profile.edit')">
                            <div class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.4 15a8 8 0 10-14.8 0" />
                                </svg>
                                {{ __('Profile') }}
                            </div>
                        </x-dropdown-link>

                        {{-- Logout --}}

                        <x-dropdown-link onclick="document.getElementById('modal-logout').classList.remove('hidden')">
                            <div class="flex items-center gap-2 text-red-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17 16l4-4m0 0l-4-4m4 4H7" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 12h4" />
                                </svg>
                                {{ __('Log Out') }}
                            </div>
                        </x-dropdown-link>
                    </x-slot>
                </x-dropdown>

            </div>

            <!-- Hamburger Menu (Mobile) -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="url('/')" :active="request()->is('/')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>
            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">{{ __('Profile') }}</x-responsive-nav-link>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault(); this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
<aside class="fixed top-16 ml-5 h-[calc(100vh-4rem)] w-16 p-1 z-40 flex items-center justify-center">
    <nav class="flex flex-col items-center space-y-2">
        <!-- Dashboard -->


        @if (Auth::user()->role === 'dukcapil')
            <div class="relative group">
                <x-nav-link :href="route('dukcapil.dashboard')" :active="request()->routeIs('dukcapil.dashboard')">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9.143 4H4.857A.857.857 0 004 4.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0010 9.143V4.857A.857.857 0 009.143 4Zm10 0h-4.286a.857.857 0 00-.857.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0020 9.143V4.857A.857.857 0 0019.143 4Zm-10 10H4.857a.857.857 0 00-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 00.857-.857v-4.286A.857.857 0 009.143 14Zm10 0h-4.286a.857.857 0 00-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 00.857-.857v-4.286a.857.857 0 00-.857-.857Z" />
                </svg>
            </x-nav-link>
            <!-- Tooltip -->
                <div
                    class="absolute inset-y-0 left-12 opacity-0 group-hover:opacity-100 pointer-events-none group-hover:pointer-events-auto items-center flex z-50 transition-opacity duration-200">
                    <div
                        class="relative whitespace-nowrap rounded-md bg-white px-4 py-2 text-sm font-semibold text-gray-900 drop-shadow-lg">
                        <div class="absolute inset-0 -left-1 flex items-center">
                            <div class="h-2 w-2 rotate-45 bg-white"></div>
                        </div>
                        Dashboard <span class="text-gray-400">(Y)</span>
                    </div>
                </div>
            </div>
            <div class="relative group">
<!-- Manajemen Pendaftaran -->
            <x-nav-link :href="route('dukcapil.approve.index')" :active="request()->routeIs('dukcapil.approve.index')">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 4h3a1 1 0 011 1v15a1 1 0 01-1 1H6a1 1 0 01-1-1V5a1 1 0 011-1h3m0 3h6m-6 7 2 2 4-4m-5-9v4h4V3h-4Z" />
                </svg>
                
            </x-nav-link>
             <!-- Tooltip -->
                <div
                    class="absolute inset-y-0 left-12 opacity-0 group-hover:opacity-100 pointer-events-none group-hover:pointer-events-auto items-center flex z-50 transition-opacity duration-200">
                    <div
                        class="relative whitespace-nowrap rounded-md bg-white px-4 py-2 text-sm font-semibold text-gray-900 drop-shadow-lg">
                        <div class="absolute inset-0 -left-1 flex items-center">
                            <div class="h-2 w-2 rotate-45 bg-white"></div>
                        </div>
                        Manajemen Pendaftaran <span class="text-gray-400">(Y)</span>
                    </div>
                </div>
            </div>
        @endif
        @if (Auth::user()->role === 'dinkes')
            <!-- Dashboard -->

            <div class="relative group">
                <x-nav-link :href="route('dinkes.dashboard')" :active="request()->routeIs('dinkes.dashboard')">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.143 4H4.857A.857.857 0 004 4.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0010 9.143V4.857A.857.857 0 009.143 4Zm10 0h-4.286a.857.857 0 00-.857.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0020 9.143V4.857A.857.857 0 0019.143 4Zm-10 10H4.857a.857.857 0 00-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 00.857-.857v-4.286A.857.857 0 009.143 14Zm10 0h-4.286a.857.857 0 00-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 00.857-.857v-4.286a.857.857 0 00-.857-.857Z" />
                    </svg>
                </x-nav-link>

                <!-- Tooltip -->
                <div
                    class="absolute inset-y-0 left-12 opacity-0 group-hover:opacity-100 pointer-events-none group-hover:pointer-events-auto items-center flex z-50 transition-opacity duration-200">
                    <div
                        class="relative whitespace-nowrap rounded-md bg-white px-4 py-2 text-sm font-semibold text-gray-900 drop-shadow-lg">
                        <div class="absolute inset-0 -left-1 flex items-center">
                            <div class="h-2 w-2 rotate-45 bg-white"></div>
                        </div>
                        Dashboard <span class="text-gray-400">(Y)</span>
                    </div>
                </div>
            </div>

            <div class="relative group">
                <x-nav-link :href="route('users.index')" :active="request()->routeIs('users.index')">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path
                            d="M4.5 6.375a4.125 4.125 0 1 1 8.25 0 4.125 4.125 0 0 1-8.25 0ZM14.25 8.625a3.375 3.375 0 1 1 6.75 0 3.375 3.375 0 0 1-6.75 0ZM1.5 19.125a7.125 7.125 0 0 1 14.25 0v.003l-.001.119a.75.75 0 0 1-.363.63 13.067 13.067 0 0 1-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 0 1-.364-.63l-.001-.122ZM17.25 19.128l-.001.144a2.25 2.25 0 0 1-.233.96 10.088 10.088 0 0 0 5.06-1.01.75.75 0 0 0 .42-.643 4.875 4.875 0 0 0-6.957-4.611 8.586 8.586 0 0 1 1.71 5.157v.003Z" />
                    </svg>

                </x-nav-link>

                <!-- Tooltip -->
                <div
                    class="absolute inset-y-0 left-12 opacity-0 group-hover:opacity-100 pointer-events-none group-hover:pointer-events-auto items-center flex z-50 transition-opacity duration-200">
                    <div
                        class="relative whitespace-nowrap rounded-md bg-white px-4 py-2 text-sm font-semibold text-gray-900 drop-shadow-lg">
                        <div class="absolute inset-0 -left-1 flex items-center">
                            <div class="h-2 w-2 rotate-45 bg-white"></div>
                        </div>
                        Manajemen Pengguna <span class="text-gray-400">(Y)</span>
                    </div>
                </div>
            </div>

            <div class="relative group">
                <x-nav-link :href="route('dinkes.data-warga.index')" :active="request()->routeIs('dinkes.data-warga.index')">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 4h3a1 1 0 011 1v15a1 1 0 01-1 1H6a1 1 0 01-1-1V5a1 1 0 011-1h3m0 3h6m-6 7 2 2 4-4m-5-9v4h4V3h-4Z" />
                    </svg>

                </x-nav-link>

                <!-- Tooltip -->
                <div
                    class="absolute inset-y-0 left-12 opacity-0 group-hover:opacity-100 pointer-events-none group-hover:pointer-events-auto items-center flex z-50 transition-opacity duration-200">
                    <div
                        class="relative whitespace-nowrap rounded-md bg-white px-4 py-2 text-sm font-semibold text-gray-900 drop-shadow-lg">
                        <div class="absolute inset-0 -left-1 flex items-center">
                            <div class="h-2 w-2 rotate-45 bg-white"></div>
                        </div>
                        Manajemen Pendaftaran <span class="text-gray-400">(Y)</span>
                    </div>
                </div>
            </div>

            <!-- Monitoring Verifikasi -->
        @endif



        @if (Auth::user()->role === 'puskesmas')
           
            <div class="relative group">
                <x-nav-link :href="route('puskesmas.dashboard')" :active="request()->routeIs('puskesmas.dashboard')">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.143 4H4.857A.857.857 0 004 4.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0010 9.143V4.857A.857.857 0 009.143 4Zm10 0h-4.286a.857.857 0 00-.857.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0020 9.143V4.857A.857.857 0 0019.143 4Zm-10 10H4.857a.857.857 0 00-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 00.857-.857v-4.286A.857.857 0 009.143 14Zm10 0h-4.286a.857.857 0 00-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 00.857-.857v-4.286a.857.857 0 00-.857-.857Z" />
                    </svg>

                </x-nav-link>
                <div
                    class="absolute inset-y-0 left-12 opacity-0 group-hover:opacity-100 pointer-events-none group-hover:pointer-events-auto items-center flex z-50 transition-opacity duration-200">
                    <div
                        class="relative whitespace-nowrap rounded-md bg-white px-4 py-2 text-sm font-semibold text-gray-900 drop-shadow-lg">
                        <div class="absolute inset-0 -left-1 flex items-center">
                            <div class="h-2 w-2 rotate-45 bg-white"></div>
                        </div>
                        Dashbord <span class="text-gray-400">(Y)</span>
                    </div>
                </div>
            </div>
            <div class="relative group">
                <x-nav-link :href="route('puskesmas.data-warga.index')" :active="request()->routeIs('puskesmas.data-warga.index')">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 4h3a1 1 0 011 1v15a1 1 0 01-1 1H6a1 1 0 01-1-1V5a1 1 0 011-1h3m0 3h6m-6 7 2 2 4-4m-5-9v4h4V3h-4Z" />
                </svg>
                
            </x-nav-link>
            <div
                    class="absolute inset-y-0 left-12 opacity-0 group-hover:opacity-100 pointer-events-none group-hover:pointer-events-auto items-center flex z-50 transition-opacity duration-200">
                    <div
                        class="relative whitespace-nowrap rounded-md bg-white px-4 py-2 text-sm font-semibold text-gray-900 drop-shadow-lg">
                        <div class="absolute inset-0 -left-1 flex items-center">
                            <div class="h-2 w-2 rotate-45 bg-white"></div>
                        </div>
                        Manajemen Pendaftaran <span class="text-gray-400">(Y)</span>
                    </div>
                </div>
            </div>
        @endif

        @if (Auth::user()->role === 'rsud')
            <div class="relative group">
                <x-nav-link :href="route('rsud.dashboard')" :active="request()->routeIs('rsud.dashboard')">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9.143 4H4.857A.857.857 0 004 4.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0010 9.143V4.857A.857.857 0 009.143 4Zm10 0h-4.286a.857.857 0 00-.857.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0020 9.143V4.857A.857.857 0 0019.143 4Zm-10 10H4.857a.857.857 0 00-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 00.857-.857v-4.286A.857.857 0 009.143 14Zm10 0h-4.286a.857.857 0 00-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 00.857-.857v-4.286a.857.857 0 00-.857-.857Z" />
                </svg>
                
            </x-nav-link>
            <!-- Tooltip -->
                <div
                    class="absolute inset-y-0 left-12 opacity-0 group-hover:opacity-100 pointer-events-none group-hover:pointer-events-auto items-center flex z-50 transition-opacity duration-200">
                    <div
                        class="relative whitespace-nowrap rounded-md bg-white px-4 py-2 text-sm font-semibold text-gray-900 drop-shadow-lg">
                        <div class="absolute inset-0 -left-1 flex items-center">
                            <div class="h-2 w-2 rotate-45 bg-white"></div>
                        </div>
                       Dashboard <span class="text-gray-400">(Y)</span>
                    </div>
                </div>
            </div>
            <div class="relative group">
                <x-nav-link :href="route('rsud.data-warga.index')" :active="request()->routeIs('rsud.data-warga.index')">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 4h3a1 1 0 011 1v15a1 1 0 01-1 1H6a1 1 0 01-1-1V5a1 1 0 011-1h3m0 3h6m-6 7 2 2 4-4m-5-9v4h4V3h-4Z" />
                </svg>
            </x-nav-link>
            <!-- Tooltip -->
                <div
                    class="absolute inset-y-0 left-12 opacity-0 group-hover:opacity-100 pointer-events-none group-hover:pointer-events-auto items-center flex z-50 transition-opacity duration-200">
                    <div
                        class="relative whitespace-nowrap rounded-md bg-white px-4 py-2 text-sm font-semibold text-gray-900 drop-shadow-lg">
                        <div class="absolute inset-0 -left-1 flex items-center">
                            <div class="h-2 w-2 rotate-45 bg-white"></div>
                        </div>
                       Manajemen Pendaftaran <span class="text-gray-400">(Y)</span>
                    </div>
                </div>
            </div>
        @endif


        @if (Auth::user()->role === 'kelurahan')
            {{-- navigasi --}}
            <div class="relative group">
                <x-nav-link :href="route('kelurahan.dashboard')" :active="request()->routeIs('kelurahan.dashboard')">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.143 4H4.857A.857.857 0 004 4.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0010 9.143V4.857A.857.857 0 009.143 4Zm10 0h-4.286a.857.857 0 00-.857.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0020 9.143V4.857A.857.857 0 0019.143 4Zm-10 10H4.857a.857.857 0 00-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 00.857-.857v-4.286A.857.857 0 009.143 14Zm10 0h-4.286a.857.857 0 00-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 00.857-.857v-4.286a.857.857 0 00-.857-.857Z" />
                    </svg>
                </x-nav-link>
                <!-- Tooltip -->
                <div
                    class="absolute inset-y-0 left-12 opacity-0 group-hover:opacity-100 pointer-events-none group-hover:pointer-events-auto items-center flex z-50 transition-opacity duration-200">
                    <div
                        class="relative whitespace-nowrap rounded-md bg-white px-4 py-2 text-sm font-semibold text-gray-900 drop-shadow-lg">
                        <div class="absolute inset-0 -left-1 flex items-center">
                            <div class="h-2 w-2 rotate-45 bg-white"></div>
                        </div>
                        Dashboard <span class="text-gray-400">(Y)</span>
                    </div>
                </div>
            </div>
            <div class="relative group">
                <x-nav-link :href="route('kelurahan.data-warga.index')" :active="request()->routeIs('kelurahan.data-warga.index')">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 4h3a1 1 0 011 1v15a1 1 0 01-1 1H6a1 1 0 01-1-1V5a1 1 0 011-1h3m0 3h6m-6 7 2 2 4-4m-5-9v4h4V3h-4Z" />
                    </svg>
                </x-nav-link>
                <!-- Tooltip -->
                <div
                    class="absolute inset-y-0 left-12 opacity-0 group-hover:opacity-100 pointer-events-none group-hover:pointer-events-auto items-center flex z-50 transition-opacity duration-200">
                    <div
                        class="relative whitespace-nowrap rounded-md bg-white px-4 py-2 text-sm font-semibold text-gray-900 drop-shadow-lg">
                        <div class="absolute inset-0 -left-1 flex items-center">
                            <div class="h-2 w-2 rotate-45 bg-white"></div>
                        </div>
                        Manajemen Pendaftaran <span class="text-gray-400">(Y)</span>
                    </div>
                </div>
            </div>
        @endif

        {{-- navigasi --}}
        <div class="relative group">
            <x-nav-link :href="route('export.history')" :active="request()->routeIs('export.history')" onclick="event.stopPropagation()">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0 1 10.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0 .229 2.523a1.125 1.125 0 0 1-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0 0 21 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 0 0-1.913-.247M6.34 18H5.25A2.25 2.25 0 0 1 3 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 0 1 1.913-.247m10.5 0a48.536 48.536 0 0 0-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5Zm-3 0h.008v.008H15V10.5Z" />
                </svg>

            </x-nav-link>

            <!-- Tooltip -->
            <div
                class="absolute inset-y-0 left-12 opacity-0 group-hover:opacity-100 pointer-events-none group-hover:pointer-events-auto items-center flex z-50 transition-opacity duration-200">
                <div
                    class="relative whitespace-nowrap rounded-md bg-white px-4 py-2 text-sm font-semibold text-gray-900 drop-shadow-lg">
                    <div class="absolute inset-0 -left-1 flex items-center">
                        <div class="h-2 w-2 rotate-45 bg-white"></div>
                    </div>
                    Laporan <span class="text-gray-400">(Y)</span>
                </div>
            </div>
        </div>



        {{-- navigasi --}}
        <div class="relative group">
            <x-nav-link :href="route('profile.edit')" :active="request()->routeIs('profile.edit')" onclick="event.stopPropagation()">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                        d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z"
                        clip-rule="evenodd" />
                </svg>
            </x-nav-link>

            <!-- Tooltip -->
            <div
                class="absolute inset-y-0 left-12 opacity-0 group-hover:opacity-100 pointer-events-none group-hover:pointer-events-auto items-center flex z-50 transition-opacity duration-200">
                <div
                    class="relative whitespace-nowrap rounded-md bg-white px-4 py-2 text-sm font-semibold text-gray-900 drop-shadow-lg">
                    <div class="absolute inset-0 -left-1 flex items-center">
                        <div class="h-2 w-2 rotate-45 bg-white"></div>
                    </div>
                    Profil Saya <span class="text-gray-400">(Y)</span>
                </div>
            </div>
        </div>

        <div class="p-4 my-6 pt-5 border-t-2"></div>
        <div class="relative group">
            <x-nav-link>
                <button onclick="document.getElementById('modal-logout').classList.remove('hidden')">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd"
                            d="M7.5 3.75A1.5 1.5 0 0 0 6 5.25v13.5a1.5 1.5 0 0 0 1.5 1.5h6a1.5 1.5 0 0 0 1.5-1.5V15a.75.75 0 0 1 1.5 0v3.75a3 3 0 0 1-3 3h-6a3 3 0 0 1-3-3V5.25a3 3 0 0 1 3-3h6a3 3 0 0 1 3 3V9A.75.75 0 0 1 15 9V5.25a1.5 1.5 0 0 0-1.5-1.5h-6Zm10.72 4.72a.75.75 0 0 1 1.06 0l3 3a.75.75 0 0 1 0 1.06l-3 3a.75.75 0 1 1-1.06-1.06l1.72-1.72H9a.75.75 0 0 1 0-1.5h10.94l-1.72-1.72a.75.75 0 0 1 0-1.06Z"
                            clip-rule="evenodd" />
                    </svg>
                    <div class="absolute inset-y-0 left-12 hidden items-center group-hover:flex">
                        <div
                            class="relative whitespace-nowrap rounded-md bg-white px-4 py-2 text-sm font-semibold text-gray-900 drop-shadow-lg">
                            <div class="absolute inset-0 -left-1 flex items-center">
                                <div class="h-2 w-2 rotate-45 bg-white"></div>
                            </div>
                            Logout <span class="text-gray-400">(Y)</span>
                        </div>
                    </div>
                </button>
            </x-nav-link>
            <div
                    class="absolute inset-y-0 left-12 opacity-0 group-hover:opacity-100 pointer-events-none group-hover:pointer-events-auto items-center flex z-50 transition-opacity duration-200">
                    <div
                        class="relative whitespace-nowrap rounded-md bg-white px-4 py-2 text-sm font-semibold text-gray-900 drop-shadow-lg">
                        <div class="absolute inset-0 -left-1 flex items-center">
                            <div class="h-2 w-2 rotate-45 bg-white"></div>
                        </div>
                        Logout <span class="text-gray-400">(Y)</span>
                    </div>
                </div>
            <!-- Modal Logout -->
            <div id="modal-logout"
                class="modal-container hidden fixed inset-0 z-[9999] items-center justify-center bg-black/40">
                <div class="modal-box bg-white p-6 rounded-xl relative max-w-sm w-full">
                    <!-- Tombol Close -->
                    <button onclick="document.getElementById('modal-logout').classList.add('hidden')"
                        class="absolute top-4 right-4 text-2xl text-gray-500 hover:text-black transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </button>

                    <!-- Konten Modal -->
                    <div class="text-center">
                        <h2 class="text-lg font-semibold text-gray-800 mb-2">Konfirmasi Logout</h2>
                        <p class="text-sm text-gray-500 mb-6">Apakah Anda yakin ingin keluar dari akun ini?</p>

                        <!-- Tombol Aksi -->
                        <div class="flex justify-center gap-4">
                            <form method="POST" action="/logout">
                                <!-- Ganti action sesuai route logout di Laravel -->
                                <!-- Jika menggunakan Laravel dengan csrf -->
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit"
                                    class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">Ya,
                                    Logout</button>
                            </form>
                            <button onclick="document.getElementById('modal-logout').classList.add('hidden')"
                                class="bg-gray-300 text-gray-800 px-4 py-2 rounded hover:bg-gray-400">Batal</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>




    </nav>
</aside>


<style>
    .modal-container {
        position: fixed;
        inset: 0;
        background-color: rgba(0, 0, 0, 0.6);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999 !important;
        padding: 1rem;
        overflow: auto;
    }

    .modal-box {
        background: white;
        padding: 1.5rem;
        border-radius: 1rem;
        width: 70%;
        max-width: 800px;
        max-height: 90vh;
        overflow-y: auto;
        position: relative;
        transition: all 0.3s ease-in-out;
        animation: fadeInScale 0.3s ease;
    }

    @keyframes fadeInScale {
        from {
            opacity: 0;
            transform: scale(0.95);
        }

        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    .hidden {
        display: none !important;
    }

    /* Matikan efek sticky saat modal terbuka */
    body.modal-open .sticky {
        position: static !important;
        z-index: 0 !important;
        background-color: transparent !important;
    }
</style>
