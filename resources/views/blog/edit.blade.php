@extends('layouts.app')

@section('title')
    Blog | Edit | {{ $post->title }}
@endsection

@section('content')


    <div class="flex justify-center bg-green-500 shadow-lg py-6">
        <h1 class="text-3xl text-gray-100 font-bold">Update Post</h1>
    </div>

    <div class="container mx-auto px-2 lg:px-0">

        <div class="bg-white rounded-lg shadow-lg overflow-hidden pb-4 px-4 mt-15">
            <form action="/blogs/{{ $post->id }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                @method('PUT')

                <div>
                    <label for="category_id" class="block text-sm font-medium text-gray-700">Blog Category</label>
                    <select id="category_id" name="category_id"
                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm">
                        <option>{{ $post->category->name }}</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                    <input type="text" name="title" id="title" autocomplete="title" value="{{ $post->title }}"
                        class="mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('title') is-invalid @enderror"
                        value="{{ old('title') }}">
                    @error('title')
                        <span class="text-red-500 text-xs italic mt-4">{{ $message }}</span>
                    @enderror
                </div>


                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700">
                        Message
                    </label>
                    <div class="mt-1">
                        <textarea id="description" name="description" rows="10"
                            class="shadow-sm focus:ring-green-500 focus:border-green-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md @error('description') is-invalid @enderror"
                            value="{{ old('description') }}">{{ $post->description }}</textarea>
                        @error('description')
                            <span class="text-red-500 text-xs italic mt-4">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">
                        Change Picture
                    </label>
                    <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                        <div class="space-y-1 text-center">
                            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                                viewBox="0 0 48 48" aria-hidden="true">
                                <path
                                    d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="flex justify-center text-sm text-gray-600">
                                <label for="photo_id"
                                    class="relative cursor-pointer bg-white rounded-md font-medium text-green-600 hover:text-green-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-green-500">
                                    <span>Upload a file</span>
                                    <input id="photo_id" name="photo_id" type="file"
                                        class="@error('photo_id') is-invalid @enderror hidden" class="sr-only">
                                </label>
                                @error('photo_id')
                                    <span class="text-red-500 text-xs italic mt-4">{{ $message }}</span>
                                @enderror
                            </div>
                            <p class="text-xs text-gray-500">
                                PNG, JPG, JEPG up to 5MB
                            </p>
                        </div>
                    </div>
                </div>

                <div class="px-4 py-3 border-t-2 border-gray-200 text-right space-x-3 mt-4">
                    <a href="{{ url('/blogs') }}"
                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-3xl text-white bg-gray-600 transition duration-300 ease-in-out hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">Cancel</a>
                    <button type="submit"
                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-3xl text-white bg-green-600 transition duration-300 ease-in-out hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
