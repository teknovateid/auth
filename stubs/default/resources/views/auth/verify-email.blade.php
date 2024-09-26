@extends('auth.components.layouts')
@section('title', 'Verify Email')
@section('content')

    <div class="container bg-gray-50 dark:bg-gray-800 p-5 rounded-lg border border-gray-300 dark:border-gray-700 max-w-lg  mx-4 ">
        <div class="text-center">
            <h1 class=" text-2xl font-semibold text-gray-700  dark:text-gray-300 ">
                Verify your email address
            </h1>
        </div>

        @if (session('status') == 'verification-link-sent')
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
                            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
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


        <form action="{{ route('verification.send') }}" method="post" class="text-center">
            @csrf

            <div class="mt-6 text-gray-700  dark:text-gray-300 space-y-4">
                <div class="">
                    <h2 class="text-xl font-semibold">We have sent a verification link to
                        <span class="font-bold">{{ auth()->user()->email }}</span>
                    </h2>
                </div>

                <div class="">
                    <span class="text-md text-gray-700  dark:text-gray-300">
                        Click the link in your email {{ auth()->user()->email }} to verify your account. if you can`t find the email check your spam folder or click the button below to resend the email.
                    </span>
                </div>
            </div>


            <button type="submit" class="w-full mt-8 py-2 px-4 inline-flex justify-center items-center gap-x-2 text-md font-medium rounded-lg border border-transparent bg-emerald-500 text-white hover:bg-emerald-600 focus:outline-none focus:bg-emerald-600 disabled:opacity-50 disabled:pointer-events-none">
                {{ __('Resend Verification Email') }}
            </button>

        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="w-full mt-4 py-2 px-4 inline-flex justify-center items-center gap-x-2 text-md font-medium rounded-lg border border-transparent bg-gray-900 text-white hover:bg-gray-700 dark:bg-gray-100 dark:hover:bg-gray-400 dark:text-gray-800">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>

@endsection
