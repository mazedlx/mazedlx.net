@extends('layouts.app')

@section('content')
<x-page>
    <div class="prose">
        <h1>Want to read more?</h1>
        <p>
            Sign up for my &bdquo;From CodeIgniter To Laravel&ldquo; Newsletter and get updated every time I release a new article. You can cancel anytime.
        </p>
        <form
            action="{{ route('subscribe') }}"
            method="POST"
            class="mt-5 sm:flex sm:items-start"
        >
            @csrf
            <div class="flex flex-col w-full sm:max-w-xs">
                <div>
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" class="block w-full border-gray-300 rounded-md shadow-xs focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="you@example.com">
                </div>
                @error('email')
                    <span class="text-sm text-blue-600">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="inline-flex items-center justify-center w-full px-4 py-2 mt-3 font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-xs hover:bg-indigo-700 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                Hook me up!
            </button>
        </form>
    </div>
</x-page>
@endsection
