<div class="flex justify-between bg-gray-500 py-3 sm:px-6 lg:px-8">
    <nav>
        <ul class="flex items-center space-x-3">
            <div>
                <a href="{{ url('/') }}" target="_blank">
                    <span
                        class="flex items-center text-gray-100 font-medium px-2 py-2 hover:bg-gray-700 rounded-xl transition duration-300 ease-in-out hover:shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        Home
                    </span>
                </a>
            </div>
            <div>
                <a href="{{ url('/blogs') }}" target="_blank">
                    <span
                        class="flex items-center text-gray-100 space-x-2 font-medium px-2 py-2 hover:bg-gray-700 rounded-xl transition duration-300 ease-in-out hover:shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                        </svg>
                        Blogs
                    </span>
                </a>
            </div>
        </ul>
    </nav>
    <span class="flex items-center">
        <div class="flex-shrink-0 h-10 w-10 mr-3">
            <img class="h-10 w-10 rounded-full"
                src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60"
                alt="">
        </div>
        <a href="/profile/{{ Auth::user()->name }}"
            class="flex items-center text-gray-100 font-medium px-2 py-2 hover:bg-gray-700 rounded-xl transition duration-300 ease-in-out hover:shadow-md">
            {{ Auth::user()->name }}
        </a>
    </span>
</div>
