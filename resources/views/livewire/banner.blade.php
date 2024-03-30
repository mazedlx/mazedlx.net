<div
    x-cloak
    x-show="open"
    x-data="{
        open: @entangle('open').live
    }"
    class="relative bg-white"
>
    <div class="px-3 py-3 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="pr-16 sm:text-center sm:px-16">
            <p class="font-medium">
                <span>
                    Sign up for the &bdquo;From CodeIgniter To Laravel&ldquo; Newsletter
                </span>
                <span class="block sm:ml-2 sm:inline-block">
                    <a href="{{ route('sign-up') }}" class="font-bold underline"> Learn more <span aria-hidden="true">&rarr;</span></a>
                </span>
            </p>
        </div>
        <div
            class="absolute inset-y-0 right-0 flex items-start pr-1 sm:pr-2 sm:items-start"
        >
            <button
                wire:click="hide"
                type="button"
                class="flex p-2 rounded-md hover:text-green-400 focus:outline-none focus:ring-2"
            >
                <span class="sr-only">Dismiss</span>
                <span class="text-2xl">&times;</span>
            </button>
        </div>
    </div>
</div>
