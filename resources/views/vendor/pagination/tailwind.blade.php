@if ($paginator->hasPages())
<nav class="pagination-a">
    <ul class="pagination justify-content-end">
        @if ($paginator->onFirstPage())
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">
                    <span class="ion-ios-arrow-back"></span>
                </a>
            </li>
        @else
        <li class="page-item">
            <a class="page-link" href="{{ $paginator->previousPageUrl() }}" tabindex="-1">
                <span class="ion-ios-arrow-back"></span>
            </a>
        </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)

        {{-- Array Of Links --}}
        @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item">
                            <a class="page-link bg-b" href="">{{ $page }}</a>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach
        @if ($paginator->hasMorePages())
        <li class="page-item next">
            <a class="page-link" href="{{ $paginator->nextPageUrl() }}">
                <span class="ion-ios-arrow-forward"></span>
            </a>
        </li>
        @else
        <li class="page-item next disabled">
            <a class="page-link" href="">
                <span class="ion-ios-arrow-forward"></span>
            </a>
        </li>
        @endif
    </ul>
</nav>
@endif
