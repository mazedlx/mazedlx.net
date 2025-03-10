@extends('layouts.app')

@section('content')
    <x-page>
        <div class="prose">
            <h1>Contact</h1>
            <p>
                Are you ready to kick off your next project with me? Great! Please fill out the following form or contact me
                directly at <a href="tel:+436604563193">+43 660 4563193</a> or drop me an email at <a
                    href="mailto:mazedlx@gmail.com"
                >mazedlx@gmail.com</a>
            </p>
            <form
                action="{{ route('send') }}"
                method="POST"
            >
                @csrf
                <div>
                    <label
                        for="name"
                        class="sr-only"
                    >
                        Your name
                    </label>
                    <div class="mt-1">
                        <input
                            id="name"
                            name="name"
                            type="text"
                            autocomplete="name"
                            placeholder="Your name"
                            required
                            class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 rounded-md shadow-xs appearance-none focus:outline-hidden focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        >
                    </div>
                </div>

                <div>
                    <label
                        for="email"
                        class="sr-only"
                    >
                        Email address
                    </label>
                    <div class="mt-1">
                        <input
                            id="email"
                            name="email"
                            type="email"
                            autocomplete="email"
                            placeholder="Email address"
                            required
                            class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 rounded-md shadow-xs appearance-none focus:outline-hidden focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        >
                    </div>
                </div>

                <div class="space-y-1">
                    <label
                        for="message"
                        class="sr-only"
                    >
                        Your fantastic idea that needs realization
                    </label>
                    <div class="mt-1">
                        <textarea
                            id="message"
                            name="message"
                            placeholder="Your fantastic idea that needs realization"
                            required
                            class="block w-full h-32 px-3 py-2 placeholder-gray-400 border border-gray-300 rounded-md shadow-xs appearance-none focus:outline-hidden focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        ></textarea>
                    </div>
                </div>

                <input
                    type="hidden"
                    name="timestamp"
                    value="{{ time() }}"
                >

                <div class="space-y-1">
                    <div class="mt-1">
                        <label
                            for="check_that"
                            class="sr-only"
                        >
                            Fight spam and enter spam
                        </label>
                        <input
                            id="check_that"
                            name="check_that"
                            type="text"
                            placeholder="Fight spam and enter spam"
                            class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 rounded-md shadow-xs appearance-none focus:outline-hidden focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        >
                    </div>
                </div>

                <div class="flex w-full mt-1 sm:justify-end">
                    <button
                        type="submit"
                        class="inline-flex items-center justify-center w-full px-4 py-2 mt-3 font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-xs hover:bg-indigo-700 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:w-auto sm:text-sm"
                    >
                        Send message
                    </button>
                </div>
            </form>
        </div>
    </x-page>
@endsection
