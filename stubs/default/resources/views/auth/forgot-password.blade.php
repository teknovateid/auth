@extends('auth.components.layouts')
@section('title', 'Forgot Password')
@section('content')

    <div class="container bg-gray-50 dark:bg-gray-800 p-5 rounded-lg border border-gray-300 dark:border-gray-700 max-w-lg  mx-4 ">
        <div class="">
            <h1 class=" text-2xl font-semibold text-gray-700  dark:text-gray-300 ">
                Forgot Password
            </h1>
            <p class="text-gray-700  dark:text-gray-300">
                Enter your email address and we'll send you a link to reset your password.
            </p>
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


        <form action="{{ route('password.email') }}" method="post">
            @csrf

            <div class="space-y-4 mt-6">

                <div class="">
                    <div class="flex justify-between items-center">
                        <label for="email" class="block text-sm mb-2 dark:text-gray-300">Email</label>
                    </div>
                    <div class="relative">
                        <input name="email" value="{{ old('email') }}" type="text" class="peer py-3 px-4 ps-11 block w-full bg-gray-200 border-transparent rounded-lg text-sm focus:border-gray-400 focus:ring-gray-400 dark:focus:ring-gray-400/90 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-700 dark:border-transparent dark:text-neutral-400 dark:placeholder-neutral-400" placeholder="fahril@teknovate.co.id" autofocus>
                        <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">

                            <svg class="shrink-0 size-4 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16"><rect width="16" height="16" fill="none"/><path fill="currentColor" d="M1.75 2h12.5c.966 0 1.75.784 1.75 1.75v8.5A1.75 1.75 0 0 1 14.25 14H1.75A1.75 1.75 0 0 1 0 12.25v-8.5C0 2.784.784 2 1.75 2M1.5 12.251c0 .138.112.25.25.25h12.5a.25.25 0 0 0 .25-.25V5.809L8.38 9.397a.75.75 0 0 1-.76 0L1.5 5.809zm13-8.181v-.32a.25.25 0 0 0-.25-.25H1.75a.25.25 0 0 0-.25.25v.32L8 7.88Z"/></svg>

                        </div>
                    </div>
                    @error('email')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>



                <button type="submit" class="w-full py-2 px-4 inline-flex justify-center items-center gap-x-2 text-md font-medium rounded-lg border border-transparent bg-emerald-500 text-white hover:bg-emerald-600 focus:outline-none focus:bg-emerald-600 disabled:opacity-50 disabled:pointer-events-none">
                    Password Reset Link
                </button>

                <p class="text-gray-700  dark:text-gray-300">
                    Already have an account? <a class="font-semibold hover:underline" href="{{ route('login') }}">Login</a> here.
                </p>
            </div>

        </form>
    </div>

@endsection
