@if(
        session()->has('success')
        || session()->has('status')
        || session()->has('error')
        || $errors->any()
    )
    <div class="px-4 py-0 mt-6 ">
        @if (session('success'))
            <div class="max-w-7xl mx-auto bg-green-50 border border-green-200 rounded-lg shadow-md p-4">
                <div class="flex flex-col md:flex-row gap-4">
                    {{ session('success') }}
                </div>
            </div>
        @endif
        @if (session('error'))
            <div class="max-w-7xl mx-auto bg-red-50 border border-red-200 rounded-lg shadow-md p-4">
                <div class="flex flex-col md:flex-row gap-4">
                    {{ session('error') }}
                </div>
            </div>
        @endif
        @if (session('status'))
            <div class="max-w-7xl mx-auto bg-blue-50 border border-blue-200 rounded-lg shadow-md p-4">
                <div class="flex flex-col md:flex-row gap-4">
                    {{ session('status') }}
                </div>
            </div>
        @endif
    </div>
@endif
