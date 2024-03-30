<header class="bg-gradient-to-tr from-green-400 via-purple-500 to-blue-600">


    <nav
        class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8"
        aria-label="Top"
    >
        <div class="flex items-center justify-between w-full py-6 border-b border-green-500 lg:border-none">
            <div class="flex items-center">
                <a
                    href="{{ route('posts.index') }}"
                    class="hidden lg:block"
                >
                    <span class="sr-only">Home</span>
                    <x-codicon-record-keys class="w-10 h-10 text-white" />

                </a>

                <div class="ml-10 space-x-8">
                    <a
                        href="{{ route('work') }}"
                        class="text-base font-medium text-white hover:text-green-50"
                        key="Work"
                    >
                        Work
                    </a>

                    <a
                        href="{{ route('posts.index') }}"
                        class="text-base font-medium text-white hover:text-green-50"
                        key="Home"
                    >
                        Blog
                    </a>

                    <a
                        href="{{ route('contact') }}"
                        class="text-base font-medium text-white hover:text-green-50"
                        key="Contact"
                    >
                        Contact
                    </a>

                    <a
                        href="{{ route('talks') }}"
                        class="text-base font-medium text-white hover:text-green-50"
                        key="Talks"
                    >
                        Talks
                    </a>

                    <a
                        href="{{ route('about') }}"
                        class="text-base font-medium text-white hover:text-green-50"
                        key="About"
                    >
                        About
                    </a>


                    <a
                        href="{{ route('uses') }}"
                        class="text-base font-medium text-white hover:text-green-50"
                        key="Uses"
                    >
                        Uses
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>
