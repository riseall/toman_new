@if ($paginator->hasPages())
    <ul class="pagination justify-content-center mb-0">
        {{-- First (if far from current) --}}
        @if ($paginator->currentPage() > 4)
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->url(1) }}" aria-label="First">First</a>
            </li>
        @endif

        {{-- Previous --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled"><span class="page-link">&laquo;</span></li>
        @else
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev"
                    aria-label="Previous">&laquo;</a>
            </li>
        @endif

        {{-- Sliding window --}}
        @php
            $last = $paginator->lastPage();
            $current = $paginator->currentPage();
            $start = max(1, $current - 2);
            $end = min($last, $current + 2);

            if ($start <= 3) {
                $start = 1;
                $end = min(5, $last);
            }
            if ($end >= $last - 2) {
                $end = $last;
                $start = max(1, $last - 4);
            }
        @endphp

        @if ($start > 1)
            <li class="page-item disabled"><span class="page-link">...</span></li>
        @endif

        @for ($i = $start; $i <= $end; $i++)
            @if ($i == $current)
                <li class="page-item active" aria-current="page"><span class="page-link">{{ $i }}</span></li>
            @else
                <li class="page-item"><a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a></li>
            @endif
        @endfor

        @if ($end < $last)
            <li class="page-item disabled"><span class="page-link">...</span></li>
        @endif

        {{-- Next --}}
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="Next">&raquo;</a>
            </li>
        @else
            <li class="page-item disabled"><span class="page-link">&raquo;</span></li>
        @endif

        {{-- Last (if far from current) --}}
        @if ($current < $last - 3)
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->url($last) }}" aria-label="Last">Last</a>
            </li>
        @endif
    </ul>
@endif
