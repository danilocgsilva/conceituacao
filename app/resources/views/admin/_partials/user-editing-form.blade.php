<div class="max-w-7xl mx-auto p-4 sm:p-8 bg-white shadow-md sm:rounded-lg">
    <section>
        <header>
            <h2 class="text-xl font-semibold text-gray-900">Alterações de {{ $viewData->getUser()->name }}</h2>
        </header>

        <form class="mt-6 space-y-6">
            @csrf
            @method('patch')

            <div>
                <label for="name" class="block font-medium text-sm text-gray-700">Nome</label>

                <input id="name" name="name" type="text"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                    value="{{ old('name', $viewData->getUser()->name) }}" required autofocus />
                @error('name')
                    <div class="mt-2 text-sm text-red-600 space-y-1">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="email" class="block font-medium text-sm text-gray-700">Email</label>
                <input id="email" name="email" type="email"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                    value="{{ old('email', $viewData->getUser()->email) }}" required autocomplete="username" />
                @error('email')
                    <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>


            <div>
                <label for="new-password" class="block font-medium text-sm text-gray-700">Nova senha</label>
                <input id="new-password" name="new-password"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                    required type="password" />
                @error('new-password')
                    <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>
        </form>



    </section>
</div>