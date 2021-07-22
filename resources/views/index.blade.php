@extends('layouts.app')

@section('content')
    <section class="background-image flex items-center">
        <div class="grid grid-cols-1 text-center mx-auto">
            <h1 class="text-gray-900 lg:text-white text-2xl md:text-4xl lg:text-6xl uppercase font-bold">Welkom op mijn blog
            </h1>
            <h3 class="text-gray-800 lg:text-white italic lowercase text-1xl md:text-3xl lg:text-5xl my-3 md:my-5">
                project in laravel!
            </h3>
            <div class="mt-5 mb-2">
                <a href="/blogs"
                    class="text-lg font-bold uppercase bg-gray-50 text-gray-700 rounded-full shadow-md py-2 px-4 md:px-10 hover:bg-gray-300 hover:text-gray-800 transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">Read
                    More...</a>
            </div>
        </div>
    </section>

    <section class="container mx-auto px-2 my-15 lg:px-0">
        <div class="grid grid-cols-1 md:grid-cols-2 md:gap-6 lg:gap-20">
            <div class="flex items-center justify-center">
                <img src="{{ asset('images/about_image.jpg') }}" class="object-cover md:h-full shadow-md" alt="">
            </div>
            <div class="flex flex-col mt-5 md:mt-0 2xl:justify-center">
                <h2 class="text-2xl lg:text-3xl xl:text-4xl text-gray-600 font-bold ">
                    About
                </h2>
                <p class="text-lg lg:text-xl text-gray-500 italic font-semibold py-4">
                    Full Stack Developer
                </p>
                <p class="text-base xl:w-9/12 text-gray-600 font-light pb-4">
                    Hallo, ik ben Angelino Verhaeghe uit Geluwe - Belgie.
                    Opzoek naar een #job in #development, mijn LinkedIn kun je via deze <a
                        href="https://www.linkedin.com/in/angelino-verhaeghe/" target="_blank"
                        class="italic font-medium text-blue-500">link</a> bekijken.</p>
                <p class="text-lg lg:text-xl text-gray-500 italic font-semibold py-4">
                    Verder...
                </p>
                <p class="text-base xl:w-9/12 text-gray-600 font-light pb-4"> Opleiding gevolgd bij <a
                        href="https://syntrawest.be/campussen/campus/syntra-west-roeselare" target="_blank"
                        class="italic font-medium text-blue-500">Syntra West
                        Roeselare</a> als Full Stack Developer. Technologieën aangeleerd zoals <a
                        href="https://laravel.com/" target="_blank" class="italic font-medium text-blue-500">Laravel</a>,
                    waaruit dit project
                    ook is uitgebouwd. De opmaak van dit project is met het <a href="https://tailwindcss.com/"
                        target="_blank" class="italic font-medium text-blue-500">Tailwindcss</a> framework. Probeer mijn
                    blog project even uit, registreer maak een blog post en vooral welkom!
                </p>
                {{-- <a href="/blog"
                    class="w-2/5 uppercase bg-blue-600 text-gray-100 text-sm font-extrabold py-3 px-8 rounded-3xl shadow-md hover:bg-blue-700 transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Lees
                    Meer</a> --}}
            </div>
        </div>
    </section>

    <section class="text-center p-15 bg-black text-white">
        <div class="mx-auto divide-y-2 divide-gray-800 xl:w-6/12 ">
            <h2 class="text-2xl pb-5">
                Skills...
            </h2>
            <span class="text-4xl font-extrabold block py-1">
                Frontend Development
            </span>
            <span class="text-4xl font-extrabold block py-1">
                Full Stack
            </span>
            <span class="text-4xl font-extrabold block py-1">
                Laravel
            </span>
            <span class="text-4xl font-extrabold block py-1">
                Backend Development
            </span>
        </div>
    </section>

    <section class="text-center py-15">
        <span class="uppercase text-2xl font-medium text-gray-400">Blog</span>
        <h2 class="text-4xl font-bold py-10">Recent Posts</h2>
        <p class="m-auto w-4/5 text-gray-500">
            An overview of some blog posts can be found below.
        </p>
    </section>

    @if (count($recentPosts) > 0)
        <section
            class="container mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-y-6 sm:gap-6 xl:gap-10 px-2 lg:px-0">
            @foreach ($recentPosts as $recentPost)
                <div class="bg-pink-800 text-gray-100 shadow-xl rounded-xl overflow-hidden">
                    <div class="">
                        <img src="{{ asset('posts/images/' . $recentPost->photo->file) }}"
                            class="object-cover h-72 w-full" alt="">
                    </div>
                    <div class="flex flex-col p-4">
                        <div>
                            <span
                                class="uppercase text-xs font-semibold bg-pink-500 rounded-full shadow-md py-1 px-3">{{ $recentPost->category->name }}</span>
                        </div>

                        <h3 class="text-2xl font-semibold mt-4">
                            {{ $recentPost->title }}
                        </h3>
                        <p class="font-light line-clamp-3 my-4">
                            {{ $recentPost->description }}
                        </p>
                        <div class="my-4">
                            <a href="/blogs/{{ $recentPost->slug }}"
                                class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs lg:text-sm font-extrabold py-3 px-6 lg:px-10 rounded-3xl shadow-md focus:outline-none focus:ring-2 focus:ring-pink-500 hover:bg-pink-600 transition duration-300 ease-in-out">Read
                                More</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </section>
    @else
        <div
            class="container mx-auto flex flex-col items-center text-center justify-center py-10 border-b border-gray-200 px-8">
            <p class="text-xl text-gray-600 font-medium">Er zijn geen blog posts op dit moment...</p>
            @guest
                <p class="text-xl text-gray-600 font-medium">Registreer of Login om een blog te creëren</p>
                <div class="flex space-x-4 mt-8">
                    <a href="/register"
                        class="uppercase bg-pink-600 text-gray-100 text-sm font-extrabold py-3 px-8 rounded-3xl shadow-md hover:bg-pink-700 transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2">Registreer</a>
                    <a href="/login"
                        class="uppercase border border-pink-600 text-pink-600 text-sm font-extrabold py-3 px-8 rounded-3xl shadow-md hover:bg-gray-200 transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2">Login</a>
                </div>
            @else
                <div class="my-12">
                    <a href="/blogs/create"
                        class="bg-green-500 uppercase bg-transparent text-gray-100 text-sm font-extrabold py-3 px-5 rounded-3xl shadow-md hover:bg-green-600 transition duration-300 ease-in-out">Create
                        Post</a>
                </div>
            @endguest
        </div>
    @endif

    {{-- Only show button when we got more than 3 recent posts --}}
    @if (count($recentPosts) == 3)
        <section class="container mx-auto mt-10">
            <div class="flex items-center justify-center lg:justify-end">
                <a href="/blogs"
                    class="bg-gray-700 text-gray-100 font-bold py-2 px-10 rounded-full shadow-lg hover:bg-gray-800 transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">More...</a>
            </div>
        </section>
    @endif


@endsection
