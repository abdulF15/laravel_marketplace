@extends('layouts.main')
@section('content')
    <div class="container min-h-full mb-24 mt-20">
        <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
              <a href="#" class=" flex items-center justify-center">
                <img src="img/tokped.png" class="h-12 mr-3" alt="TokoIjo" />
                <span class="self-center text-3xl font-semibold whitespace-nowrap text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">TokoIjo</span>
              </a>
              <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900 dark:text-white mb-3">Sign in to your account</h2>
              @if (session()->has('success'))
                <div id="alert-border-1" class="flex items-center p-4 mb-4 text-blue-800 border-t-4 border-blue-300 bg-blue-50 dark:text-blue-400 dark:bg-gray-800 dark:border-blue-800" role="alert">
                  <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                  </svg>
                  <div class="ml-3 text-sm font-medium">
                    {{ session('success') }}
                  </div>
                  <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-border-1" aria-label="Close">
                    <span class="sr-only">Dismiss</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                  </button>
                </div>
              @endif
              @if (session()->has('loginError'))
                <div class="p-4 mb-4 text-sm text-white rounded-lg bg-red-500 dark:bg-gray-800 dark:text-red-400" role="alert">
                  <span class="font-medium">{{ session('loginError') }}</span>
                </div>  
              @endif
            </div>
          
            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
              <form class="space-y-6" action="/login" method="POST">
                @csrf
                <div>
                  <label for="email" class="block text-sm font-medium leading-6 text-gray-900 dark:text-white">Email address</label>
                  <div class="mt-2">
                    <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md  py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6 dark:bg-slate-800 dark:text-white " autofocus>
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
                    <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md  py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6 dark:bg-slate-800 dark:text-white ">
                  </div>
                  @error('password')
                    <p class="mt-2 text-xs text-red-600 dark:text-red-400">{{ $message }}<p>    
                  @enderror
                </div>
          
                <div>
                  <button type="submit" class="flex w-full justify-center rounded-md bg-green-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">Sign in</button>
                </div>
              </form>
          
              <p class="mt-10 text-center text-sm text-gray-500">
                Not Registered ??
                <a href="/register" class="font-semibold leading-6 text-green-600 hover:text-green-500">Register Now!</a>
              </p>
            </div>
          </div>
        
    </div>
@endsection