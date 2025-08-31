<div class="flex justify-center mt-6">
    <nav class="inline-flex rounded-md shadow">

        @if (!$viewData->getPaginationData()->isFirstPage())
            <a href="{{ url()->current() . '?page=' . ($viewData->getPaginationData()->getCurrentPage() - 1) }}" class="py-2 px-4 border border-gray-300 bg-white text-blue-500 hover:bg-gray-50 rounded-l-md">Previous</a>
        @endif

        @for ($i = 1; $i <= $viewData->getPaginationData()->getTotalPages(); $i++)
            @if ($i === $viewData->getPaginationData()->getCurrentPage())
                @php
                    $classes = "py-2 px-4 border border-gray-300 bg-blue-500 text-white hover:bg-blue-600 border-l-0";
                @endphp
            @else
                @php
                    $classes = "py-2 px-4 border border-gray-300 bg-white text-blue-500 hover:bg-gray-50 border-l-0";
                @endphp
            @endif
            <a href="{{ url()->current() . '?page=' . $i }}" class="{{ $classes }}">{{ $i }}</a>
        @endfor

        @if (!$viewData->getPaginationData()->isLastPage())
            <a href="{{ url()->current() . '?page=' . ($viewData->getPaginationData()->getCurrentPage() + 1) }}" class="py-2 px-4 border border-gray-300 bg-white text-blue-500 hover:bg-gray-50 rounded-r-md border-l-0">Next</a>
        @endif
    </nav>
</div>
