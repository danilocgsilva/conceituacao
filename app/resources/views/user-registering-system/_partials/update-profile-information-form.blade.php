<div class="px-4 py-6">
    <div class="max-w-7xl mx-auto p-4 sm:p-8 bg-white shadow-md sm:rounded-lg">
        <section>
            <header>

                <h2 class="text-xl font-semibold text-gray-900">Minhas informações</h2>

                <p class="mt-1 text-sm text-gray-600">
                    Atualize as informações de perfil e endereço de email da sua conta.
                </p>
            </header>

            <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                @csrf
            </form>

            <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
                @csrf
                @method('patch')

                <div>
                    <label for="name" class="block font-medium text-sm text-gray-700">Nome</label>

                    <input id="name" name="name" type="text"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                        value="{{ old('name', $viewData->getUser()->name) }}" required autofocus autocomplete="name" />
                    @error('name')
                        <div class="mt-2 text-sm text-red-600 space-y-1">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label for="email" class="block font-medium text-sm text-gray-700">{{ __('Email') }}</label>
                    <input id="email" name="email" type="email"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                        value="{{ old('email', $viewData->getUser()->email) }}" required autocomplete="username" />
                    @error('email')
                        <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
                    @enderror
                </div>

                <div class="flex items-center gap-4">
                    <button type="submit"
                        class="px-5 py-2.5 rounded-lg bg-blue-600 text-white font-medium hover:bg-blue-700 transition">Salvar</button>

                    @if (session('status') === 'profile-updated')
                        <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                            class="text-sm text-gray-600">{{ __('Saved.') }}</p>
                    @endif
                </div>
            </form>
        </section>

    </div>
</div>