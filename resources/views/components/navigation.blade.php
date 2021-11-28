<header class="bg-gradient-to-tr from-green-400 via-purple-500 to-blue-600">
    @livewire('banner')

    <nav class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8" aria-label="Top">
        <div class="flex items-center justify-between w-full py-6 border-b border-green-500 lg:border-none">
            <div class="flex items-center">
                <a href="{{ route('posts.index') }}">
                    <span class="sr-only">Home</span>
                    <x-bi-keyboard class="w-10 h-10 text-white" />
                </a>

                <div class="hidden ml-10 space-x-8 lg:block">
                    <a href="{{ route('posts.index') }}" class="text-base font-medium text-white hover:text-green-50" key="Home">
                        Home
                    </a>

                    <a href="#" class="text-base font-medium text-white hover:text-green-50" key="Talks">
                        Talks
                    </a>

                    <a href="#" class="text-base font-medium text-white hover:text-green-50" key="About">
                        About
                    </a>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap justify-center py-4 space-x-6 lg:hidden">
            <a href="{{ route('posts.index') }}" class="text-base font-medium text-white hover:text-green-50" key="Home">
                Home
            </a>

            <a href="#" class="text-base font-medium text-white hover:text-green-50" key="Talks">
                Talks
            </a>

            <a href="#" class="text-base font-medium text-white hover:text-green-50" key="About">
                About
            </a>
        </div>
    </nav>
</header>
