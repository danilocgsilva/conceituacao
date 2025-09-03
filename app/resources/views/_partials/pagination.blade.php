<div class="flex justify-center mt-6">
    <nav class="inline-flex rounded-md shadow @if ($viewData->getPaginationData()->isFirstPage()) empty-previous @endif @if ($viewData->getPaginationData()->isLastPage()) empty-next @endif">

        @if (!$viewData->getPaginationData()->isFirstPage())
            <a href="{{ url()->current() . '?page=' . ($viewData->getPaginationData()->getCurrentPage() - 1) }}"
                class="py-2 px-4 border border-gray-300 bg-white text-blue-500 hover:bg-gray-50 rounded-l-md">Anterior</a>

        @endif

        @for ($i = 1; $i <= $viewData->getPaginationData()->getTotalPages(); $i++)
            <a href="{{ url()->current() . '?page=' . $i }}"
                class="{{ paginationClasses(
                $i === $viewData->getPaginationData()->getCurrentPage(),
                $i === 1 && $viewData->getPaginationData()->getCurrentPage() === 1,
                $i === $viewData->getPaginationData()->getTotalPages() && $viewData->getPaginationData()->getCurrentPage() === $i
                ) }}">{{ $i }}</a>
        @endfor

        @if (!$viewData->getPaginationData()->isLastPage())
            <a href="{{ url()->current() . '?page=' . ($viewData->getPaginationData()->getCurrentPage() + 1) }}"
                class="py-2 px-4 border border-gray-300 bg-white text-blue-500 hover:bg-gray-50 rounded-r-md border-l-0">Próximo</a>
        @endif
    </nav>
</div>