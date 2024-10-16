@if ($paginator->hasPages())
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="paginate_button page-item previous disabled m-2" aria-disabled="true">
                <a href="#" tabindex="0" class="page-link">Previous</a>
            </li>
        @else
            <li class="paginate_button page-item previous m-2">
                <a href="{{ $paginator->previousPageUrl() }}" aria-controls="proposalList" tabindex="0" class="page-link">Previous</a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item disabled m-2" aria-disabled="true"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="paginate_button page-item active m-2" aria-current="page">
                            <a href="#" aria-controls="proposalList" tabindex="0" class="page-link">{{ $page }}</a>
                        </li>
                    @else
                        <li class="paginate_button page-item m-2">
                            <a href="{{ $url }}" aria-controls="proposalList" tabindex="0" class="page-link">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="paginate_button page-item next m-2">
                <a href="{{ $paginator->nextPageUrl() }}" aria-controls="proposalList" tabindex="0" class="page-link">Next</a>
            </li>
        @else
            <li class="paginate_button page-item next disabled m-2" aria-disabled="true">
                <a href="#" tabindex="0" class="page-link">Next</a>
            </li>
        @endif
    </ul>
@endif
