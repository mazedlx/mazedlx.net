<div class="flex flex-col px-4 bg-gray-600 md:fixed md:right-0 md:top-0 md:bottom-0 md:justify-around md:w-1/3 lg:w-1/4 xl:w-1/5">
    <div class="py-4">
        <a class="text-3xl font-medium text-white underline cursor:pointer hover:text-gray-900" href="/">
            blog.mazedlx.net
        </a>

        <form
            action="{{ route('subscribe') }}"
            method="POST"
            class="flex flex-col mt-2 space-y-2"
        >
            @csrf
            <span class="prose text-white">Subscribe to the CodeIgniter to Laravel newsletter. I'll send you regular updates on my progress. You can cancel anytime!</span>
            <input
                type="email"
                name="email"
                autocomplete="email"
                value="{{ old('email') }}"
                placeholder="your email"
                class="p-2 placeholder-gray-500 rounded-lg"
            >
            @error('email')
                <span class="font-bold text-white">{{ $message }}</span>
            @enderror
            <button
                type="submit"
                class="p-2 text-xl font-bold text-white border-2 border-white rounded-lg hover:bg-white hover:text-gray-600"
            >Hook me up!</button>
        </form>
    </div>

    <div class="md:border-b-2 md:border-white"></div>

    <div class="flex justify-center prose text-justify text-white">
        Hallo! Ich heiße Christian und bin ein Webdeveloper aus Wien. Ich blogge über dies und das und manchmal auch über Code.
    </div>

    <div class="md:border-b-2 md:border-white"></div>

    <div class="flex justify-center">
        <img class="rounded-full" src="https://www.gravatar.com/avatar/{{md5('mazedlx@gmail.com')}}?s=200">
    </div>

    <div class="md:border-b-2 md:border-white"></div>

    <div class="flex justify-between py-4">
        <a target="_blank" href="https://twitter.com/mazedlx" class="text-white">
            <x-bi-twitter class="w-10 h-10 fill-current hover:text-gray-900" />
        </a>
        <a target="_blank" href="https://github.com/mazedlx" class="text-white">
            <x-bi-github class="w-10 h-10 fill-current hover:text-gray-900" />
        </a>
        <a target="_blank" href="https://mazedlx.net" class="text-white">
            <x-bi-link class="w-10 h-10 fill-current hover:text-gray-900" />
        </a>
        <a href="mailto:mazedlx@gmail.com" class="text-white">
            <x-bi-envelope class="w-10 h-10 fill-current hover:text-gray-900" />
        </a>
    </div>
</div>
