@extends('layouts.app')

@section('title')
    Blog | Overview
@endsection

@section('content')
    <section>
        <div class="flex justify-center bg-yellow-500 shadow-lg py-6">
            <h1 class="text-3xl text-gray-100 font-bold">Blog Posts</h1>
        </div>
        <div class="container mx-auto px-2 lg:px-0">


            @if (session()->has('message'))
                <div id="message" class="m-auto mt-10">
                    <p
                        class="relative mb-4 text-gray-100 bg-green-500/70 backdrop-blur-md border-l-4 border-gray-100 py-7 pl-5 shadow-md">
                        {{ session()->get('message') }}
                        <span><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 absolute top-2 right-2 cursor-pointer"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" id="close">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg></span>
                    </p>
                </div>
            @endif

            {{-- Show button only if user is logged in! --}}
            @if (Auth::check())
                <div class="flex items-center justify-end lg:justify-start py-10">
                    <a href="{{ url('/blogs/create') }}"
                        class="inline uppercase bg-green-600 text-gray-100 text-sm font-extrabold py-2 px-4 md:px-5 rounded-3xl shadow-md hover:bg-green-700 transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                        Create
                    </a>
                </div>
            @endif

            @if (count($posts) > 0)
                <div class="grid lg:grid-cols-2 gap-8 lg:gap-10 2xl:grid-cols-3 mb-5">
                    @foreach ($posts as $post)
                        <div class="overflow-hidden rounded-lg shadow-lg">
                            <div>
                                <img src="{{ asset('posts/images/' . $post->photo->file) }}"
                                    class="object-cover lg:h-72 lg:w-full" alt="">
                            </div>
                            <div class="p-4">
                                <div class="flex items-center justify-between">
                                    <h2 class="text-gray-500 text-xl font-bold">
                                        {{ $post->title }}
                                    </h2>

                                    {{-- Only show Edit button if user is logged in and the user have the same id of the post! --}}
                                    @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                                        <div class="flex items-center space-x-4">
                                            <a href="/blogs/{{ $post->id }}/edit"
                                                class="uppercase text-blue-600 text-sm font-extrabold hover:text-blue-800 rounded-3xl transition duration-300 ease-in-out focus:outline-none">
                                                <span class="flex items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                    </svg>
                                                    Edit
                                                </span>
                                            </a>

                                            <form action="/blogs/{{ $post->id }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="uppercase text-red-600 text-sm font-extrabold hover:text-red-800 rounded-3xl transition duration-300 ease-in-out focus:outline-none">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    @endif

                                </div>
                                <p class="text-gray-700 font-light line-clamp-5 my-4">
                                    {{ $post->description }}
                                </p>
                                <span class="flex justify-start text-sm xl:justify-end text-gray-400 mb-5">
                                    By &nbsp;<span class="text-gray-800 font-bold italic">{{ $post->user->name }}</span>,
                                    -
                                    {{-- {{ date('jS M Y', strtotime($post->updated_at)) }} --}}
                                    {{ $post->created_at->diffForHumans() }}
                                </span>
                                <div class="mb-2">
                                    <a href="/blogs/{{ $post->slug }}"
                                        class="inline uppercase bg-gray-600 text-gray-100 text-sm font-extrabold py-2 px-4 md:px-5 rounded-3xl shadow-md hover:bg-gray-700 transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="">
                    <p class="text-xl text-gray-600 font-medium">There a no posts at this moment...</p>
                </div>
            @endif
        </div>
    </section>
@endsection
