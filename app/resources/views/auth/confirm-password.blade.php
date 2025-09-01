<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        Esta é uma área segura da aplicação. Por favor, confirme sua senha antes de continuar.
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <div>
            <label for="password" class="block font-medium text-sm text-gray-700">Senha</label>

            <input id="password" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            @error('password')
                <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
            @enderror
        </div>

        <div class="flex justify-end mt-4">
            <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                Confirmar
            </button>
        </div>
    </form>
</x-guest-layout>
