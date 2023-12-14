@extends('dashboard.layouts.main')
@section('content')
    
<div class="mx-auto mt-24 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <a href="/dashboard">
        <img class="rounded-t-lg" src="https://source.unsplash.com/1200x600/?{{ $market->category->name }}" alt="" /> 
    </a>
    <div class="p-5">
        <a href="/dashboard">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $market->title }}</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">#{{ $market->category->name }}</p>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">${{ $market->price }}</p>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $market->desription }}</p>
        <a href="/dashboard/market" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">kembali</a>
    </div>
</div>

@endsection