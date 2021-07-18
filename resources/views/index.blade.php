@extends('layouts.app')

@section('content')
    <section class="background-image flex items-center">
        <div class="grid grid-cols-1 text-center mx-auto">
            <h1 class="text-gray-900 text-2xl md:text-4xl lg:text-6xl uppercase font-bold">Welkom op mijn blog</h1>
            <h3 class="text-gray-800 lg:text-white italic lowercase text-1xl md:text-3xl lg:text-5xl my-3 md:my-5">
                project in laravel!
            </h3>
            <div class="mt-5 mb-2">
                <a href="/blog"
                    class="text-lg font-bold uppercase bg-gray-50 text-gray-700 rounded-full shadow-md py-2 px-4 md:px-10 hover:bg-gray-300 hover:text-gray-800 transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">Lees
                    Meer</a>
            </div>
        </div>
    </section>

    <section class="container mx-auto px-2 my-15 lg:px-0">
        <div class="grid grid-cols-1 md:grid-cols-2 md:gap-6 lg:gap-20">
            <div class="flex items-center justify-center">
                <img src="https://cdn.pixabay.com/photo/2015/04/19/08/33/flower-729512_960_720.jpg"
                    class="object-cover md:h-full" alt="">
            </div>
            <div class="flex flex-col mt-5 md:mt-0 2xl:justify-center">
                <h2 class="text-2xl lg:text-3xl xl:text-4xl text-gray-600 font-bold ">
                    Bermooievaarsbek
                </h2>
                <p class="text-lg lg:text-xl text-gray-500 italic font-semibold py-4">
                    Geranium pyrenaicum
                </p>
                <p class="text-base xl:w-9/12 text-gray-600 font-light pb-4">
                    Bermooievaarsbek is een overblijvende, behaarde plant van 20 tot 60 cm hoog, oorspronkelijk afkomstig
                    uit de bergstreken van Zuid-Europa, het Zwarte Zeegebied en het Atlasgebied.
                    In 1836 werd ze voor het eerst in Nederland, bij Leiden gevonden.
                    Sindsdien heeft ze zich uitgebreid en komt nu vrij zeldzaam voor in Zuid-Limburg, het rivierengebied en
                    de stedelijke gebieden. Elders is ze zeldzaam en op de Waddeneilanden komt ze niet voor.
                </p>
                <a href="/blog"
                    class="w-2/5 uppercase bg-blue-600 text-gray-100 text-sm font-extrabold py-3 px-8 rounded-3xl shadow-md hover:bg-blue-700 transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Lees
                    Meer</a>
            </div>
        </div>
    </section>

    <section class="text-center p-15 bg-black text-white">
        <div class="mx-auto divide-y-2 divide-gray-500 xl:w-6/12 ">
            <h2 class="text-2xl pb-5">
                Vaardigheden...
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
            Overzicht van enkele blog posts, bevinden zich hier onder.
        </p>
    </section>

    <section
        class="container mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-y-6 sm:gap-6 xl:gap-10 px-2 lg:px-0">
        @foreach ($recentPosts as $recentPost)
            <div class="bg-pink-800 text-gray-100 shadow-xl rounded-xl overflow-hidden">
                <div class="">
                    <img src="{{ asset('posts/images/' . $recentPost->image_path) }}"
                        class="object-cover h-52 xl:h-56 w-full" alt="">
                </div>
                <div class="flex flex-col p-4">
                    <div>
                        <span
                            class="uppercase text-xs font-semibold bg-pink-500 rounded-full shadow-md py-1 px-3">#Games</span>
                    </div>

                    <h3 class="text-2xl font-semibold mt-4">
                        {{ $recentPost->title }}
                    </h3>
                    <p class="font-light line-clamp-3 my-4">
                        {{ $recentPost->description }}
                    </p>
                    <div class="my-4">
                        <a href="/blog/{{ $recentPost->slug }}"
                            class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs lg:text-sm font-extrabold py-3 px-6 lg:px-10 rounded-3xl shadow-md focus:outline-none focus:ring-2 focus:ring-pink-500">Lees
                            Meer</a>
                    </div>

                </div>
            </div>
        @endforeach
    </section>

    <section class="container mx-auto mt-10">
        <div class="flex items-center justify-center lg:justify-end">
            <a href="/blog"
                class="bg-gray-700 text-gray-100 font-bold py-2 px-10 rounded-full shadow-lg hover:bg-gray-800 transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">Meer...</a>
        </div>
    </section>

@endsection
