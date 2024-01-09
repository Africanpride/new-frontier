<div class="hs-dropdown relative inline-flex" data-hs-dropdown-placement="bottom-right">
    @auth
        <button id="hs-dropdown-with-header" type="button"
            class="inline-flex flex-shrink-0 justify-center items-center gap-2 h-[2.375rem] w-[2.375rem] rounded-full font-medium hover:bg-white/[.2] text-white align-middle focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:ring-offset-gray-900 transition-all text-xs">
            <div class="relative inline-block">
                <img class="inline-block h-[1.675rem] w-[1.675rem] rounded-full" src="{{ Auth::user()->profile_photo_url }}"
                    alt="Image Description">
                @can('pendingInvoices')
                    <span class="absolute bottom-0 right-0 block h-1.5 w-1.5 rounded-full ring-2 ring-white bg-red-400"></span>
                @else
                    <span
                        class="absolute bottom-0 right-0 block h-1.5 w-1.5 rounded-full ring-2 ring-white bg-green-400"></span>
                @endcan
            </div>
            {{-- <img class="inline-block h-[1.675rem] w-[1.675rem] rounded-full" src="{{ Auth::user()->profile_photo_url }}"
                alt="Image Description"> --}}
        </button>

        <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-[15rem] z-10 bg-white shadow-md rounded-lg p-4 dark:bg-firefly-900 dark:border dark:border-gray-700"
            aria-labelledby="hs-dropdown-with-header">
            <div class="py-3 px-5 -m-2 bg-gray-100 rounded-t-lg dark:bg-gray-700">
                <p class="text-sm text-gray-500 dark:text-gray-400">{{ __('Signed in as') }}</p>
                <p class="text-sm font-medium text-gray-800 dark:text-gray-300">{{ Auth::user()->email }}</p>
            </div>
            <div class="mt-2 py-2 first:pt-0 last:pb-0">

                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                    href="#">
                    <x-lucide-layout-dashboard class="w-5 h-5 text-current" />
                    {{ __('My Dashboard') }}
                </a>
                @can('pendingInvoices')
                    <a class="relative flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                        href="{{ url('invoices') }}">

                        <x-lucide-credit-card class="w-5 h-5 text-current" />

                        {{ __('Pending Invoices') }}
                        <span class="relative flex h-2 w-2">
                            <span
                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-red-500"></span>
                        </span>
                    </a>
                @else
                    <a class="relative flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                        href="{{ url('invoices') }}">

                        <x-lucide-credit-card class="w-5 h-5 text-current" />

                        {{ __('My Invoices') }}
                    </a>
                @endcan
                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                    href="{{ url('profile') }}">
                    <x-lucide-contact class="w-5 h-5 text-current" />
                    Manage Profile
                </a>
                <a id="open_preferences_center"
                    class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                    href="#">
                    <x-lucide-cookie class="w-5 h-5 text-current" />
                    Manage Cookies
                </a>
                <form id="signout" method="POST" action="{{ route('logout') }}" x-data>
                    @csrf
                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                        href="{{ route('logout') }}" @click.prevent="$root.submit();">
                        <x-lucide-log-out class="w-5 h-5 text-current" />
                        Sign Out
                    </a>
                </form>

            </div>
        </div>

    @endauth

    @guest
        <a href="{{ url('login') }}" class="dark:text-white">
            <img class="inline-block h-[1.475rem] aspect-square rounded-full" src="{{ asset('images/main/login.png') }}"
                alt="Image Description">
        </a>
    @endguest
</div>
