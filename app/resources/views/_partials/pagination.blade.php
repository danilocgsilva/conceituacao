<div class="flex justify-center mt-6">
    <nav class="inline-flex rounded-md shadow">

        @if (!$viewData->getPaginationData()->isFirstPage())
            <a href="{{ url()->current() . '?page=' . ($viewData->getPaginationData()->getCurrentPage() - 1) }}" class="py-2 px-4 border border-gray-300 bg-white text-blue-500 hover:bg-gray-50 rounded-l-md">Previous</a>
        @endif

        @for ($i = 1; $i <= $viewData->getPaginationData()->getTotalPages(); $i++)
            <a href="{{ url()->current() . '?page=' . $i }}" class="@if ($i === $viewData->getPaginationData()->getCurrentPage()) @currentPageClasses @else @notCurrentPageClasses @endif">{{ $i }}</a>
        @endfor

        @if (!$viewData->getPaginationData()->isLastPage())
            <a href="{{ url()->current() . '?page=' . ($viewData->getPaginationData()->getCurrentPage() + 1) }}" class="py-2 px-4 border border-gray-300 bg-white text-blue-500 hover:bg-gray-50 rounded-r-md border-l-0">Next</a>
        @endif
    </nav>
</div>
