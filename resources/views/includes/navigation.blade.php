<header>
    <nav x-data="{ open: false }" class="bg-black/90 shadow-xl top-0 fixed inset-x-0 py-7">
        <div class="relative container mx-auto flex justify-between items-center px-6 lg:px-0">
            <div class="absolute inset-y-0 right-2 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button x-on:click="open = !open" type="button"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white focus:outline-none"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>

                    <svg x-show="!open" class="h-6 w-6 text-gray-100" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="open" class="h-6 w-6 text-gray-100" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div>
                <a href="{{ url('/') }}"
                    class="text-xl font-semibold text-gray-100 no-underline uppercase hover:text-yellow-400 transition duration-300 ease-in-out">
                    Blog
                </a>
            </div>
            <div class="hidden sm:block sm:ml-6">
                <div class="flex space-x-4">
                    <a class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium"
                        href="/">Home</a>
                    <a class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium"
                        href="/blogs">Blog</a>
                    @guest
                        <a class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium"
                            href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium"
                                href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <span><a href="/profile/{{ Auth::user()->name }}"
                                class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">{{ Auth::user()->name }}</a></span>
                        <a href="{{ route('logout') }}"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium"
                            onclick="event.preventDefault();
                                                                                                                                                                                                                                                                                        document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </div>
            </div>
        </div>

        <!-- Mobile MENU with Alpine.js -->
        <div class="sm:hidden" id="mobile-menu">
            <div x-show="open" x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="transform opacity-0 scale-95"
                x-transition:enter-end="transform opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="transform opacity-100 scale-100"
                x-transition:leave-end="transform opacity-0 scale-95"
                class="absolute top-[84px] w-full bg-black/90 px-2 pt-2 pb-3 space-y-1 z-50">
                <a class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium"
                    href="/">Home</a>
                <a class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium"
                    href="/blogs">Blog</a>
                @guest
                    <a class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium"
                        href="{{ route('login') }}">{{ __('Login') }}</a>
                    @if (Route::has('register'))
                        <a class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium"
                            href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                @else
                    <span><a href="/profile/{{ Auth::user()->name }}"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">{{ Auth::user()->name }}</a></span>
                    <a href="{{ route('logout') }}"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium"
                        onclick="event.preventDefault();
                                                                                                                                                                                                                                                                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                @endguest
            </div>
        </div>
    </nav>
</header>
