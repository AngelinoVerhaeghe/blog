@extends('layouts.app')

@section('title')
    Blog | Overview
@endsection

@section('content')

    <div class="w-4/5 m-auto text-center">
        <div class="py-15 border-b border-gray-200">
            <h1 class="text-6xl">Blog Posts</h1>
        </div>
    </div>

    @if (session()->has('message'))
        <div id="message" class="m-auto mt-10">
            <p
                class="relative mb-4 text-green-500 bg-white/40 backdrop-blur-md border-l-2 border-green-500 py-7 pl-5 shadow-md">
                {{ session()->get('message') }}
                <span><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 absolute top-2 right-2 cursor-pointer"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor" id="close">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg></span>
            </p>

        </div>
    @endif

    {{-- Show button only if user is logged in! --}}
    @if (Auth::check())
        <div class="pt-15 w-4/5 m-auto">
            <a href="/blog/create"
                class="bg-green-500 uppercase bg-transparent text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl shadow-md hover:bg-green-600 transition duration-300 ease-in-out">Create
                Post</a>
        </div>
    @endif
    @if (count($posts) > 0)
        <div class="">
            @foreach ($posts as $post)
                <div class="mb-10 border-b-2 border-gray-200">
                    <div class="mb-10 lg:mb-0">
                        <img src="{{ asset('posts/images/' . $post->image_path) }}" class="object-cover" alt="">
                    </div>
                    <div>
                        <div class="flex justify-between items-center">
                            <h2 class="text-5xl text-gray-500 font-bold">
                                {{ $post->title }}
                            </h2>
                            {{-- Only show Edit button if user is logged in and the user have the same id of the post! --}}
                            @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                                <span>
                                    <a href="/blog/{{ $post->slug }}/edit"
                                        class="text-sm text-gray-100 bg-blue-600 py-2 px-6 rounded-3xl shadow-md italic hover:bg-blue-700 transition duration-300 ease-in-out">Edit</a>
                                </span>
                                <span>
                                    <form action="/blog/{{ $post->slug }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="text-sm text-gray-100 bg-red-600 py-2 px-6 rounded-3xl shadow-md italic hover:bg-red-700 transition duration-300 ease-in-out">
                                            Delete
                                        </button>
                                    </form>
                                </span>
                            @endif
                        </div>

                        <p class="text-xl text-gray-700 my-10 leading-8 font-light line-clamp-5">
                            {{ $post->description }}
                        </p>
                        <span class="flex justify-start xl:justify-end text-gray-500 mb-5">
                            By &nbsp;<span class="text-gray-800 font-bold italic">{{ $post->user->name }}</span>, -
                            {{-- {{ date('jS M Y', strtotime($post->updated_at)) }} --}}
                            {{ $post->created_at->diffForHumans() }}
                        </span>
                        <div class="flex items-baseline my-10">
                            <a href="/blog/{{ $post->slug }}"
                                class="uppercase bg-blue-600 text-gray-100 text-md font-extrabold py-3 px-8 rounded-3xl shadow-md hover:bg-blue-700 transition duration-300 ease-in-out">Keep
                                Reading</a>
                        </div>

                    </div>
                </div>

            @endforeach
        </div>
    @else
        <div class="sm:grid grid-cols-2 w-4/5 gap-20 mx-auto py-15 border-b border-gray-200">
            <p class="text-xl text-gray-600 font-medium">There a no posts at this moment...</p>
        </div>
    @endif

@endsection
