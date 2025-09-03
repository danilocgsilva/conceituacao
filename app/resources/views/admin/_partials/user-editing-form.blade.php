<div class="max-w-7xl mx-auto p-4 sm:p-8 bg-white shadow-md sm:rounded-lg">
    <section>
        <header>
            <h2 class="text-xl font-semibold text-gray-900">Alterações de {{ $viewData->getUser()->name }}</h2>
        </header>

        <form class="mt-6 space-y-6" action="{{ route('user.update', $viewData->getUser()) }}" method="post">
            @csrf
            @method('patch')

            <div>
                <label for="name" class="block font-medium text-sm text-gray-700">Nome</label>

                <input id="name" name="name" type="text"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                    value="{{ $viewData->getUser()->name }}" required autofocus />
                @error('name')
                    <div class="mt-2 text-sm text-red-600 space-y-1">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="email" class="block font-medium text-sm text-gray-700">Email</label>
                <input id="email" name="email" type="email"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                    value="{{ $viewData->getUser()->email }}" required autocomplete="username" />
                @error('email')
                    <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="new-password" class="block font-medium text-sm text-gray-700">Nova senha</label>
                <input id="new-password" name="password"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                    type="password" />
                @error('password')
                    <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="new-password_confirmation" class="block font-medium text-sm text-gray-700">Confirmar nova senha</label>
                <input id="new-password_confirmation" name="password_confirmation"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                    type="password" />
                @error('new-password_confirmation')
                    <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>

            @include('admin._partials.profiles_listing')

            <div class="flex items-center gap-4">
                <button type="submit"
                    class="px-5 py-2.5 rounded-lg bg-blue-600 text-white font-medium hover:bg-blue-700 transition">Atualizar</button>
                <a href="{{ route('users-registering.index') }}" class="px-5 py-2.5 rounded-lg bg-gray-500 text-white font-medium hover:bg-gray-600 transition">Cancelar</a>
            </div>

        </form>

    </section>
</div>