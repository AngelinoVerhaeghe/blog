<aside class="px-2">
    <div class="flex items-center space-x-3 text-white border-b-2 border-gray-700">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
        </svg>
        <a href="{{ url('admin') }}" class="text-2xl font-bold">Dashboard</a>
    </div>
    <div class="flex flex-col justify-between">
        <nav class="my-8">
            <ul class="space-y-3">
                <div>
                    <a href="{{ url('admin/users') }}">
                        <span
                            class="flex items-center text-gray-100 font-medium px-2 py-2 hover:bg-gray-700 rounded-xl transition duration-300 ease-in-out hover:shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                            Users
                        </span>
                    </a>
                </div>
                <div>
                    <a href="{{ url('admin/posts') }}">
                        <span
                            class="flex items-center text-gray-100 space-x-2 font-medium px-2 py-2 hover:bg-gray-700 rounded-xl transition duration-300 ease-in-out hover:shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                            Posts
                        </span>
                    </a>
                </div>
                <div>
                    <a href="{{ url('admin/categories') }}">
                        <span
                            class="flex items-center text-gray-100 space-x-2 font-medium px-2 py-2 hover:bg-gray-700 rounded-xl transition duration-300 ease-in-out hover:shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                            Categories
                        </span>
                    </a>
                </div>
            </ul>
        </nav>
        {{-- <div class="flex items-center space-x-3 text-white border-b-2 border-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
            </svg>
            <a href="{{ url('admin') }}" class="text-2xl font-bold">Pages</a>
        </div> --}}
        {{-- <nav class="my-8">
            <ul class="space-y-3">
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
        </nav> --}}
    </div>
    <div class="border-t-2 border-gray-700">
        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
            <span
                class="flex items-center text-gray-100 space-x-2 font-medium px-2 py-2 hover:bg-gray-700 rounded-xl transition duration-300 ease-in-out hover:shadow-md mt-5">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
                {{ __('Logout') }}
            </span>

        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
            {{ csrf_field() }}
        </form>
    </div>
</aside>
