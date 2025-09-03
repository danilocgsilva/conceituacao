<div class="max-w-7xl mx-auto bg-white rounded-lg shadow-md p-4 mb-6">
    <form class="flex-grow" action="{{ route('users-registering.index') }}" method="get">
        <div class="flex flex-col md:flex-row gap-4">
            <input name="query" type="text" placeholder="Busca..."
                class="flex-1 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $viewData->getQuery() }}">
            <input
                class="w-full md:w-auto bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md transition-colors cursor-pointer"
                type="submit" value="Busca">
        </div>
    </form>
</div>