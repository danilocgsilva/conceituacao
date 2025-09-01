<div class="max-w-7xl mx-auto p-4 sm:p-8 bg-white shadow-md sm:rounded-lg">
    <section>
        <header>
            <h2 class="text-xl font-semibold text-gray-900">Atualize a senha</h2>

            <p class="mt-1 text-sm text-gray-600">
                Certifique-se de que sua conta está usando uma senha longa e aleatória para permanecer segura.
            </p>
        </header>

        <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
            @csrf
            @method('put')

            <div>
                <label for="update_password_current_password" class="block font-medium text-sm text-gray-700">Senha atual</label>
                <input id="update_password_current_password" name="current_password" type="password"
                    class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" autocomplete="current-password" />
                @error('current_password', 'updatePassword')
                    <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="update_password_password" class="block font-medium text-sm text-gray-700">Nova senha</label>
                <input id="update_password_password" name="password" type="password" class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                    autocomplete="new-password" />
                @error('password', 'updatePassword')
                    <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="update_password_password_confirmation" class="block font-medium text-sm text-gray-700">Confirmar senha</label>
                <input id="update_password_password_confirmation" name="password_confirmation" type="password"
                    class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" autocomplete="new-password" />
                @error('password_confirmation', 'updatePassword')
                    <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>

            <div class="flex items-center gap-4">
                <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Salvar</button>

                @if (session('status') === 'password-updated')
                    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm text-gray-600">Salvo.</p>
                @endif
            </div>
        </form>
    </section>
</div>