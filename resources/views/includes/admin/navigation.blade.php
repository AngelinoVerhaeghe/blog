<aside class="px-2">
    <div class="flex items-center space-x-3 text-white border-b-2 border-gray-500">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
        </svg>
        <a href="{{ url('admin') }}" class="text-2xl font-bold">Dashboard</a>
    </div>
    <nav class="my-8">
        <ul class="space-y-3">
            <div>
                <a href="{{ url('admin/users') }}">
                    <span
                        class="flex items-center text-gray-100 font-medium text-lg px-2 py-2 hover:bg-gray-700 rounded-xl transition duration-300 ease-in-out hover:shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24"
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
                        class="flex items-center text-gray-100 space-x-2 font-medium text-lg px-2 py-2 hover:bg-gray-700 rounded-xl transition duration-300 ease-in-out hover:shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24"
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
                        class="flex items-center text-gray-100 space-x-2 font-medium text-lg px-2 py-2 hover:bg-gray-700 rounded-xl transition duration-300 ease-in-out hover:shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24"
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
</aside>
