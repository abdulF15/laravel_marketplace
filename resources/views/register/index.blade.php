@extends('layouts.main')
@section('content')
    <div class="container min-h-full mb-24 mt-24">
        <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
              <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900 dark:text-white">Register Form</h2>
            </div>
          
            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
              <form class="space-y-6" action="/register" method="POST">
                @csrf
                <div>
                  <label for="name" class="block text-sm font-medium leading-6 text-gray-900 dark:text-white">Name</label>
                  <div class="mt-2">
                    <input id="name" name="name" type="text"  required class="block w-full rounded-md  py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6 dark:bg-slate-800 dark:text-white @error('name') border-red-500  @enderror" value="{{ old('name') }}">
                  </div>
                  @error('name')
                    <p class="mt-2 text-xs text-red-600 dark:text-red-400">{{ $message }}<p>    
                  @enderror
                </div>
                <div>
                  <label for="username" class="block text-sm font-medium leading-6 text-gray-900 dark:text-white">Username</label>
                  <div class="mt-2">
                    <input id="username" name="username" type="text"  required class="block w-full rounded-md  py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6 dark:bg-slate-800 dark:text-white @error('username') border-red-500  @enderror " value="{{ old('username') }}">
                  </div>
                  @error('username')
                    <p class="mt-2 text-xs text-red-600 dark:text-red-400">{{ $message }}<p>    
                  @enderror
                </div>
                <div>
                  <label for="email" class="block text-sm font-medium leading-6 text-gray-900 dark:text-white">Email address</label>
                  <div class="mt-2">
                    <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md  py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6 dark:bg-slate-800 dark:text-white @error('email') border-red-500  @enderror "
                    value="{{ old('email') }}">
                  </div>
                  @error('email')
                    <p class="mt-2 text-xs text-red-600 dark:text-red-400">{{ $message }}<p>    
                  @enderror
                </div>
          
                <div>
                  <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900 dark:text-white">Password</label>
                   
                  </div>
                  <div class="mt-2">
                    <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md  py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6 dark:bg-slate-800 dark:text-white @error('password') border-red-500  @enderror ">
                  </div>
                  @error('password')
                    <p class="mt-2 text-xs text-red-600 dark:text-red-400">{{ $message }}<p>    
                  @enderror
                </div>
          
                <div>
                  <button type="submit" class="flex w-full justify-center rounded-md bg-green-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">Register</button>
                </div>
              </form>
          
              <p class="mt-10 text-center text-sm text-gray-500">
                Already registered ??
                <a href="/login" class="font-semibold leading-6 text-green-600 hover:text-green-500">Login!</a>
              </p>
            </div>
          </div>
        
    </div>
@endsection