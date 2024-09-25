@extends('auth.components.layouts')
@section('title', 'Login')
@section('content')

    <div class="container bg-gray-50 dark:bg-gray-800 p-5 rounded-lg border border-gray-300 dark:border-gray-700 max-w-lg  mx-4 ">
        <div class="">
            <h1 class=" text-2xl font-semibold text-gray-700  dark:text-gray-300 ">Sign in</h1>
            <p class="text-gray-700  dark:text-gray-300">Sign in to your account using email or username.</p>
        </div>

        @if (session('status'))
        <div id="status" class="mt-4 hs-removing:translate-x-5 hs-removing:opacity-0 transition duration-300 bg-teal-50 border border-teal-200 text-sm text-teal-800 rounded-lg p-4 dark:bg-teal-800/10 dark:border-teal-900 dark:text-teal-500" role="alert" tabindex="-1" aria-labelledby="hs-dismiss-button-label">
            <div class="flex">
              <div class="shrink-0">
                <svg class="shrink-0 size-4 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path>
                  <path d="m9 12 2 2 4-4"></path>
                </svg>
              </div>
              <div class="ms-2">
                <h3 id="hs-dismiss-button-label" class="text-sm font-medium">
                    {{ session('status') }}
                </h3>
              </div>
              <div class="ps-3 ms-auto">
                <div class="-mx-1.5 -my-1.5">
                  <button type="button" class="inline-flex bg-teal-50 rounded-lg p-1.5 text-teal-500 hover:bg-teal-100 focus:outline-none focus:bg-teal-100 dark:bg-transparent dark:text-teal-600 dark:hover:bg-teal-800/50 dark:focus:bg-teal-800/50" data-hs-remove-element="#status">
                    <span class="sr-only">Dismiss</span>
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M18 6 6 18"></path>
                      <path d="m6 6 12 12"></path>
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          </div>
        @endif


        <form action="{{ route('login') }}" method="post">
            @csrf

            <div class="space-y-4 mt-6">

                <div class="">
                    <div class="flex justify-between items-center">
                        <label for="email" class="block text-sm mb-2 dark:text-gray-300">Email or username</label>
                    </div>
                    <div class="relative">
                        <input name="email" value="{{ old('email') }}" type="text" class="peer py-3 px-4 ps-11 block w-full bg-gray-200 border-transparent rounded-lg text-sm focus:border-gray-400 focus:ring-gray-400 dark:focus:ring-gray-400/90 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-700 dark:border-transparent dark:text-neutral-400 dark:placeholder-neutral-400" placeholder="Email or username" autofocus>
                        <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                            <svg class="shrink-0 size-4 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                    </div>
                    @error('email')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="">
                    <div class="flex justify-between items-center">
                        <label for="password" class="block text-sm mb-2 dark:text-gray-300">Password</label>
                        @if (Route::has('password.request'))
                            <a class="inline-flex items-center gap-x-1 text-sm text-emerald-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium" href="{{ route('password.request') }}">Forgot password?</a>
                        @endif
                    </div>
                    <div class="relative">
                        <input name="password" type="password" class="peer py-3 px-4 ps-11 block w-full bg-gray-200 border-transparent rounded-lg text-sm focus:border-gray-400 focus:ring-gray-400 dark:focus:ring-gray-400/90 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-700 dark:border-transparent dark:text-neutral-400 dark:placeholder-neutral-400" placeholder="Password" autofocus>
                        <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                            <svg class="shrink-0 size-4 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M2 18v3c0 .6.4 1 1 1h4v-3h3v-3h2l1.4-1.4a6.5 6.5 0 1 0-4-4Z"></path>
                                <circle cx="16.5" cy="7.5" r=".5"></circle>
                            </svg>
                        </div>
                    </div>
                    @error('password')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex items-center">
                    <div class="flex">
                        <input id="remember_me" name="remember" type="checkbox" class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" checked>
                    </div>
                    <div class="ms-3">
                        <label for="remember_me" class="text-md dark:text-gray-300">Remember me</label>
                    </div>
                </div>

                <button type="submit" class="w-full py-2 px-4 inline-flex justify-center items-center gap-x-2 text-md font-medium rounded-lg border border-transparent bg-emerald-500 text-white hover:bg-emerald-600 focus:outline-none focus:bg-emerald-600 disabled:opacity-50 disabled:pointer-events-none">
                    Sign in
                </button>

                <p class="text-gray-700  dark:text-gray-300">
                    Don't have an account? <a class="font-semibold hover:underline" href="{{ route('register') }}">register</a> here.
                </p>
            </div>

        </form>
    </div>

@endsection
