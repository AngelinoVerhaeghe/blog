@extends('layouts.admin')

@section('title')
    Dashboard | Create Post
@endsection

@section('content')
    <section>
        <div class="py-8 pb-6 sm:px-6 lg:px-8 bg-gray-300 shadow-md">
            <h1 class="text-3xl text-gray-700 font-medium ">Create Blog</h1>
        </div>

        <div class="max-w-4xl sm:px-6 lg:px-8 my-10">
            <div class="bg-white rounded-lg shadow-md p-6">
                <form action="{{ route('post.store', 'store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="space-y-6">
                        <div class="col-span-6 sm:col-span-3">
                            <label for="category_id" class="block text-sm font-medium text-gray-700">Blog Category</label>

                            <select id="category_id" name="category_id" autocomplete="category"
                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                required>
                                <option>Select category...</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                            <input type="text" name="title" id="title" autocomplete="given-title"
                                value="{{ old('title') }}"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('title') is-invalid @enderror">
                            @error('title')
                                <span class="text-red-500 text-xs italic mt-4">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700">
                                Description
                            </label>
                            <div class="mt-1">
                                <textarea id="description" name="description" rows="10"
                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md @error('description') is-invalid @enderror"
                                    value="{{ old('description') }}" placeholder="Message">
                                                                                                                                                </textarea>
                                @error('description')
                                    <span class="text-red-500 text-xs italic mt-4">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mt-6">
                        <label class="block text-sm font-medium text-gray-700 mb-3">
                            Blog photo
                        </label>
                        <input type="file" name="photo_id" id="photo_id" class="@error('photo_id') is-invalid @enderror">
                        @error('image')
                            <span class="text-red-500 text-xs italic mt-4">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="px-4 py-3 border-t-2 border-gray-200 text-right space-x-3 mt-4">
                        <a href="{{ url('admin/posts') }}"
                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">Cancel</a>
                        <button type="submit"
                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </section>
@endsection
