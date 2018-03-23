@if ($paginator->hasPages())
    <ul class="list-reset flex flex-row items-center justify-between">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="cursor-not-allowed"><span>@lang('pagination.previous')</span></li>
        @else
            <li><a class="text-grey no-underline hover:text-teal" href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a></li>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li><a class="text-grey no-underline hover:text-teal" href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a></li>
        @else
            <li class="cursor-not-allowed"><span>@lang('pagination.next')</span></li>
        @endif
    </ul>
@endif
