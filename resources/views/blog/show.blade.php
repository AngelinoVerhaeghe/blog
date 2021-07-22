@extends('layouts.app')

@section('title')
    Blog | {{ $post->title }}
@endsection

@section('content')

    <section class="container mx-auto px-2 md:px-6 lg:px-0 py-15">
        <div class="bg-gray-200 rounded-md overflow-hidden shadow-sm">
            <div class="lg:grid lg:grid-cols-2 lg:gap-10">
                <div class="flex">
                    <img src="{{ $post->photo ? asset('posts/images/' . $post->photo->file) : 'https://place-hold.it/300x500' }}"
                        class="object-cover" alt="{{ $post->title }}">
                </div>

                <div class="p-4 space-y-4 xl:space-y-8 xl:mt-4">
                    <h1 class="text-xl xl:text-2xl font-semibold">{{ $post->title }}</h1>

                    <p class="text-gray-700 font-light">
                        {{ $post->description }}
                    </p>

                    <span class="text-gray-400 flex justify-end">
                        By &nbsp;<span class="text-gray-800 font-bold italic">{{ $post->user->name }}</span>, -
                        {{ $post->created_at->diffForHumans() }}
                    </span>
                    <div class="flex justify-end">
                        <a href="{{ url('/blogs') }}"
                            class="inline uppercase bg-gray-600 text-gray-100 text-sm font-extrabold py-2 px-4 md:px-5 xl:px-8 rounded-3xl shadow-md hover:bg-gray-700 transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container mx-auto px-2 md:px-6 lg:px-0 pb-15">
        <div>
            <h2 class="text-3xl text-gray-700 font-bold">Related Posts</h2>
            <p class="text-sm italic text-green-600">Under development....</p>
        </div>

        {{-- <div>
            @forelse ($relatedPosts as $relatedPost)
                <div>
                    <h1>{{ $relatedPost->title }}</h1>
                </div>
            @empty
                <div>
                    <p>There are no related posts at this moment...</p>
                </div>
            @endforelse
        </div> --}}
    </section>

@endsection
