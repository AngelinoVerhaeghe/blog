@extends('layouts.app')

@section('title')
    Blog | {{ $post->title }}
@endsection

@section('content')

    <div class="w-4/5 m-auto text-left">
        <div class="pt-15 pb-5">
            <h1 class="text-6xl">{{ $post->title }}</h1>
        </div>
    </div>

    <div class="w-4/5 m-auto pt-10">
        <p class="text-xl text-gray-700 font-light pt-8 pb-10 leading-8">
            {{ $post->description }}
        </p>
        <span class="text-gray-500 flex justify-end">
            By &nbsp;<span class="text-gray-800 font-bold italic">{{ $post->user->name }}</span>, -
            {{ $post->created_at->diffForHumans() }}
        </span>
    </div>


@endsection
