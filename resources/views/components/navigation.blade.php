<!-- This example requires Tailwind CSS v2.0+ -->
<header class="bg-gradient-to-tr from-green-400 via-purple-500 to-blue-600">
    <div class="relative bg-white">
        <div class="px-3 py-3 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="pr-16 sm:text-center sm:px-16">
                <p class="font-medium">
                    <span class="md:hidden">
                        Sign up for the &bdquo;From CodeIgniter To Laravel&ldquo; Newsletter
                    </span>
                    <span class="hidden md:inline">
                        Big news! We're excited to announce a brand new product.
                    </span>
                    <span class="block sm:ml-2 sm:inline-block">
                        <a href="#" class="font-bold underline"> Learn more <span aria-hidden="true">&rarr;</span></a>
                    </span>
                </p>
            </div>
            <div
                class="absolute inset-y-0 right-0 flex items-start pt-1 pr-1 sm:pt-1 sm:pr-2 sm:items-start"
            >
                <button
                    type="button"
                    class="flex p-2 rounded-md hover:bg-gradient-to-tr hover:from-green-400 hover:via-purple-500 hover:to-blue-600 hover:text-white focus:outline-none focus:ring-2"
                >
                    <span class="sr-only">Dismiss</span>
                    <!-- Heroicon name: outline/x -->
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>


    <nav class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8" aria-label="Top">
        <div class="flex items-center justify-between w-full py-6 border-b border-green-500 lg:border-none">
            <div class="flex items-center">
                <a href="#">
                    <span class="sr-only">Home</span>
                    <x-bi-keyboard class="w-10 h-10 text-white" />
                </a>
                <div class="hidden ml-10 space-x-8 lg:block">
                    <a href="#" class="text-base font-medium text-white hover:text-green-50" key="Home">
                        Home
                    </a>

                    <a href="#" class="text-base font-medium text-white hover:text-green-50" key="Tags">
                        Tags
                    </a>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap justify-center py-4 space-x-6 lg:hidden">
            <a href="#" class="text-base font-medium text-white hover:text-green-50" key="Home">
                Home
            </a>

            <a href="#" class="text-base font-medium text-white hover:text-green-50" key="Tags">
                Tags
            </a>
        </div>
    </nav>
</header>
