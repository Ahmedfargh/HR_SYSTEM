@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center justify-between">
        <div class="flex justify-between flex-1 sm:hidden">
            @if ($paginator->onFirstPage())
                <span class="btn disabled">{{ __('Previous') }}</span>
            @else
                <button wire:click="previousPage" class="btn">{{ __('Previous') }}</button>
            @endif

            @if ($paginator->hasMorePages())
                <button wire:click="nextPage" class="btn">{{ __('Next') }}</button>
            @else
                <span class="btn disabled">{{ __('Next') }}</span>
            @endif
        </div>

        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
            <div>
                <p class="text-sm text-gray-700 leading-5">
                    {!! __('Showing') !!}
                    <span class="font-medium">{{ $paginator->firstItem() }}</span>
                    {!! __('to') !!}
                    <span class="font-medium">{{ $paginator->lastItem() }}</span>
                    {!! __('of') !!}
                    <span class="font-medium">{{ $paginator->total() }}</span>
                    {!! __('results') !!}
                </p>
            </div>

            <div>
                <span class="relative z-0 inline-flex shadow-sm rounded-md">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <span class="btn disabled" aria-disabled="true" aria-label="{{ __('Previous') }}">
                            <span aria-hidden="true">&lsaquo;</span>
                        </span>
                    @else
                        <button wire:click="previousPage" class="btn" aria-label="{{ __('Previous') }}">
                            <span aria-hidden="true">&lsaquo;</span>
                        </button>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <span class="btn disabled">{{ $element }}</span>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <span class="btn active" aria-current="page">{{ $page }}</span>
                                @else
                                    <button wire:click="gotoPage({{ $page }})" class="btn">{{ $page }}</button>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <button wire:click="nextPage" class="btn" aria-label="{{ __('Next') }}">
                            <span aria-hidden="true">&rsaquo;</span>
                        </button>
                    @else
                        <span class="btn disabled" aria-disabled="true" aria-label="{{ __('Next') }}">
                            <span aria-hidden="true">&rsaquo;</span>
                        </span>
                    @endif
                </span>
            </div>
        </div>
    </nav>
@endif
