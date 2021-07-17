@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">Do you want to become a
                    developer?</h1>
                <a href="/blog" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">Read
                    More</a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div class="flex">
            <img src="https://images.pexels.com/photos/261662/pexels-photo-261662.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                class="object-cover" width=700 alt="">
        </div>
        <div class="m-auto text-left w4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-700">
                Struggling to be a better web developer?
            </h2>
            <p class="py-8 text-gray-600 text-lg">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
            <p class="text-gray-500 leading-5 pb-9">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam nihil tenetur reiciendis tempora asperiores
                quaerat fugiat vel odit ullam laboriosam?
            </p>

            <a href="/blog"
                class="uppercase bg-blue-600 text-gray-100 text-sm font-extrabold py-3 px-8 rounded-3xl shadow-md hover:bg-blue-700 transition duration-300 ease-in-out">Find
                Out More</a>
        </div>
    </div>

    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5">
            I'm an expert in...
        </h2>
        <span class="text-4xl font-extrabold block py-1">
            Ux Design
        </span>
        <span class="text-4xl font-extrabold block py-1">
            Project Management
        </span>
        <span class="text-4xl font-extrabold block py-1">
            Digital Strategy
        </span>
        <span class="text-4xl font-extrabold block py-1">
            Backend Development
        </span>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-sm text-gray-400">Blog</span>
        <h2 class="text-4xl font-bold py-10">Recent Posts</h2>
        <p class="m-auto w-4/5 text-gray-500">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste dolorum quae, provident inventore exercitationem
            porro sint suscipit consectetur aspernatur tempore!
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 w-4/5 block">
                <span class="uppercase text-xs font-semibold bg-gray-500 rounded-full shadow-md py-1 px-3">#PHP</span>
                <h3 class="text-xl font-bold py-10">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam tempora delectus dolores commodi
                    molestiae hic, voluptas nam vero, ab nemo, aut blanditiis quam maxime quia cupiditate non natus saepe
                    porro?
                </h3>
                <a href="#"
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl shadow-md">Find
                    Out More</a>
            </div>
        </div>
        <div class="flex">
            <img src="https://images.pexels.com/photos/261662/pexels-photo-261662.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                class="object-cover" alt="">
        </div>
    </div>
@endsection
