@extends('layouts.main')
@section('content')

    <div class="px-14 py-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 justify-between content-center mt-32 mb-60">
        @foreach ($categories as $category)
            <a href="/categories/{{ $category->slug }}" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="https://source.unsplash.com/1200x600/?{{ $category->name }}" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $category->name }}</h5>
                </div>
            </a>
        @endforeach
    </div>
@endsection