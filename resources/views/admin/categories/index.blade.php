@extends('layouts.admin')

@section('title')
    Dashboard | Categories
@endsection

@section('content')
    <section>
        <div class="flex items-center justify-between py-8 pb-6 sm:px-6 lg:px-8 bg-gray-300 shadow-md">
            <h1 class="text-3xl text-gray-700 font-medium ">Categories</h1>
            <a href="{{ url('admin/categories/create') }}"
                class="uppercase bg-green-600 text-gray-100 text-md font-extrabold py-3 px-8 rounded-3xl shadow-md hover:bg-green-700 transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                <span class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                    Create
                </span>
            </a>
        </div>
        <div class="flex flex-col">
            <div class="overflow-x-auto">
                @if (count($categories) > 0)
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Name
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm font-medium text-gray-900">
                                                    {{ $category->name }}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-left text-sm font-medium space-x-3">
                                                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
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
                        <p>Geen categories gevonden.</p>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
