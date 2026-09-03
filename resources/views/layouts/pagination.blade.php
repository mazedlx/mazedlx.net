@if ($paginator->hasPages())
    <ul class="flex flex-row items-center justify-center px-4 py-2 list-reset">
        @if ($paginator->onFirstPage())
            <li class="text-gray-500 cursor-not-allowed">
                <span>@lang('pagination.previous')</span>
            </li>
        @else
            <li>
                <a
                    class="no-underline text-grey hover:text-gray-900 hover:underline"
                    href="{{ $paginator->previousPageUrl() }}"
                    rel="prev"
                >@lang('pagination.previous')</a>
            </li>
        @endif
            <li class="px-4"></li>

        @if ($paginator->hasMorePages())
            <li>
                <a
                    class="no-underline text-grey hover:text-gray-900 hover:underline"
                    href="{{ $paginator->nextPageUrl() }}"
                    rel="next"
                >@lang('pagination.next')</a>
            </li>
        @else
            <li class="text-gray-500 cursor-not-allowed">
                <span>@lang('pagination.next')</span>
            </li>
        @endif
    </ul>
@endif
