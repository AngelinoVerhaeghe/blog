@extends('layouts.admin')

@section('title')
    Dashboard
@endsection

@section('content')
    <section>
        <div class="sm:px-6 lg:px-8 mt-5">
            <h1 class="text-2xl text-gray-700 font-medium">Dashboard</h1>
        </div>
        <div class="grid grid-cols-2 gap-10 sm:px-6 lg:px-8 mt-5">
            <div class="bg-white overflow-hidden rounded-lg shadow-md">
                <div class="bg-gray-100 border-b-2 border-gray-200 py-2 px-4">
                    <h2 class="uppercase text-sm text-gray-700 font-bold">Recent new users:</h2>
                </div>
                <div class="p-4 flex justify-around">
                    @foreach ($recentNewUsers as $recentNewUser)
                        <div class="flex flex-col items-center">
                            <img class="h-10 w-10 rounded-full"
                                src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60"
                                alt="">
                            <h4 class="text-gray-500 text-sm mt-2 font-medium">{{ $recentNewUser->name }}</h4>
                            <span class="text-gray-500 text-xs mt-2 font-medium">
                                {{ $recentNewUser->created_at->diffForHumans() }}</span>
                        </div>
                    @endforeach
                </div>

            </div>
            <div class="bg-white overflow-hidden rounded-lg shadow-md">
                <h2>Test</h2>
            </div>
        </div>
    </section>
@endsection
