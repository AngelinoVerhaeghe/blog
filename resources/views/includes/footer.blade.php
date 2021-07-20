<footer class="bg-gray-800">
    <div
        class="container mx-auto text-center sm:text-left sm:grid sm:grid-cols-3 sm:gap-10 border-b-2 border-gray-700 px-2 mt-15 py-10 lg:px-0">
        <div>
            <h3 class="text-lg sm:font-bold text-gray-100">Pages</h3>

            <ul class="py-4 sm:text-sm pt-4 text-gray-400">
                <li class="pb-1 hover:text-yellow-400 transition duration-300 ease-in-out">
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li class="pb-1 hover:text-yellow-400 transition duration-300 ease-in-out">
                    <a href="{{ url('/blogs') }}">Blog</a>
                </li>
                <li class="pb-1 hover:text-yellow-400 transition duration-300 ease-in-out">
                    <a href="{{ url('/login') }}">Login</a>
                </li>
                <li class="pb-1 hover:text-yellow-400 transition duration-300 ease-in-out">
                    <a href="{{ url('/register') }}">Register</a>
                </li>
            </ul>
        </div>

        <div>
            <h3 class="text-lg sm:font-bold text-gray-100">Find Us</h3>

            <ul class="py-4 sm:text-sm pt-4 text-gray-400">
                <li class="pb-1 hover:text-yellow-400 transition duration-300 ease-in-out">
                    <a href="{{ url('/') }}">Web Development</a>
                </li>
                <li class="pb-1 hover:text-yellow-400 transition duration-300 ease-in-out">
                    <a href="{{ url('/') }}">Address</a>
                </li>
                <li class="pb-1 hover:text-yellow-400 transition duration-300 ease-in-out">
                    <a href="{{ url('/') }}">Phone</a>
                </li>
                <li class="pb-1 hover:text-yellow-400 transition duration-300 ease-in-out">
                    <a href="{{ url('/') }}">Email</a>
                </li>
            </ul>
        </div>

        <div>
            <h3 class="text-lg sm:font-bold text-gray-100">Latest Posts</h3>
            <ul class="py-4 sm:text-sm pt-4 text-gray-400">
                {{-- @foreach ($recentPosts as $recentPost)
                    <li class="pb-1 hover:text-yellow-400 transition duration-300 ease-in-out">
                        <a href="/blogs/{{ $recentPost->slug }}">{{ $recentPost->title }}</a>
                    </li>
                @endforeach --}}
            </ul>
        </div>
    </div>
    <div class="container mx-auto px-2 lg:px-0">
        <div class="flex flex-col items-center justify-between py-5">
            <p class="text-xs text-gray-100">
                &copy; Copyright 2021 - All Rights Reserved.
            </p>
            <ul class="flex items-center text-white space-x-3 mt-3">
                <li class="hover:text-indigo-600 transition duration-300 ease-in-out">
                    <a href="{{ url('https://github.com/AngelinoVerhaeghe') }}">
                        <i class="ri-github-fill text-3xl"></i>
                    </a>
                </li>
                <li class="hover:text-indigo-600 transition duration-300 ease-in-out">
                    <a href="{{ url('https://www.linkedin.com/in/angelino-verhaeghe/') }}">
                        <i class="ri-linkedin-fill text-3xl"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>


</footer>
