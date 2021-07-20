@extends('layouts.admin')

@section('title')
    Dashboard | Posts
@endsection

@section('content')
    <section>
        <div class="flex items-center justify-between py-8 pb-6 sm:px-6 lg:px-8 bg-gray-300 shadow-md">
            <h1 class="text-3xl text-gray-700 font-medium ">Blog Posts</h1>
            <a href="{{ url('admin/posts/create') }}"
                class="uppercase bg-green-600 text-gray-100 text-md font-extrabold rounded-full p-3 shadow-md hover:bg-green-700 transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                <span class="flex items-center" title="Create Post">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                </span>
            </a>
        </div>
        @if (session()->has('message'))
            <div id="message" class="m-auto mt-10">
                <p
                    class="relative mb-4 text-green-500 bg-white/40 backdrop-blur-md border-l-2 border-green-500 py-7 pl-5 shadow-md">
                    {{ session()->get('message') }}
                    <span><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 absolute top-2 right-2 cursor-pointer"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" id="close">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg></span>
                </p>
            </div>
        @endif
        <div class="flex flex-col my-10">
            <div class="overflow-x-auto">
                @if (count($posts) > 0)
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            User
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Title
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Description
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Image
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Category
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($posts as $post)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm font-medium text-gray-900">
                                                    {{ $post->user->name }}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm font-medium text-gray-900">
                                                    {{ $post->title }}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 w-[450px]">
                                                <div class="text-sm font-medium text-gray-900 line-clamp-3">
                                                    {{ $post->description }}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm font-medium text-gray-900">
                                                    <img height="200" width="200"
                                                        src="{{ $post->photo ? asset('posts/images/' . $post->photo->file) : 'https://place-hold.it/200x200' }}"
                                                        alt="{{ $post->title }}">
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm font-medium text-gray-900">
                                                    {{ $post->category->name }}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-left text-sm font-medium space-x-3">
                                                <a href="/blogs/{{ $post->slug }}"
                                                    class="text-green-600 hover:text-green-900" target="_blank">View</a>
                                                <a href="{{ url('admin/posts/edit') }}"
                                                    class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                <a href="#" class="text-red-600 hover:text-red-900">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @else
                    <div class="sm:px-6 lg:px-8 mt-10">
                        <p>Geen posts gevonden.</p>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
