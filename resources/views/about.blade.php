@extends('layouts.app')

@section('content')
<div class="flex flex-col-reverse md:flex-row">
    <div class="w-full mx-auto md:w-1/2">
        <div class="px-4 pt-16 pb-20 bg-white sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
            <div class="relative max-w-lg mx-auto divide-y-2 divide-gray-200 lg:max-w-7xl">
                <div>
                    <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                        About
                    </h2>
                    <p class="mt-3 text-xl text-gray-500 sm:mt-4">
                        Hi, I'm Christian and I do code. And other stuff too.<br><br>

                        If you would like to get in contact, drop me an email at <a class="text-blue-600" href="mailto:mazedlx@gmail.com">mazedlx@gmail.com</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
