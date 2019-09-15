@if ($paginator->hasPages())
    <ul class="px-4 py-2 list-reset flex flex-row items-center justify-center">
        @if ($paginator->onFirstPage())
            <li class="cursor-not-allowed text-gray-500"><span>@lang('pagination.previous')</span></li>
        @else
            <li><a class="text-grey no-underline hover:text-gray-900 hover:underline" href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a></li>
        @endif
            <li class="px-4"></li>

        @if ($paginator->hasMorePages())
            <li><a class="text-grey no-underline hover:text-gray-900 hover:underline" href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a></li>
        @else
            <li class="cursor-not-allowed text-gray-500"><span>@lang('pagination.next')</span></li>
        @endif
    </ul>
@endif
