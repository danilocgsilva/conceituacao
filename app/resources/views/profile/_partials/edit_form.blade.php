<div class="px-4 py-0 mt-6 ">
    <div class="max-w-7xl mx-auto p-4 sm:p-8 bg-white shadow-md sm:rounded-lg">
        <section>
            <header>
                <h2 class="text-xl font-semibold text-gray-900">Altere o perfil</h2>
            </header>

            <form class="mt-6 space-y-6" action="{{ route('profile.store') }}" method="POST">
                @csrf

                <div>
                    <label for="name" class="block font-medium text-sm text-gray-700">Nome</label>

                    <input id="name" name="name" type="text"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                        value="{{ $viewData->getProfile()->name }}" required autofocus />
                    @error('name')
                        <div class="mt-2 text-sm text-red-600 space-y-1">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label for="description" class="block font-medium text-sm text-gray-700">Descrição</label>
                    <input id="description" name="description" type="text"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                        value="{{ $viewData->getProfile()->description }}" required />
                    @error('description')
                        <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
                    @enderror
                </div>

                <div class="flex items-center gap-4">
                    <button type="submit"
                        class="px-5 py-2.5 rounded-lg bg-blue-600 text-white font-medium hover:bg-blue-700 transition">Salvar</button>

                    @if (session('status') === 'profile-updated')
                        <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                            class="text-sm text-gray-600">Saved.</p>
                    @endif
                </div>
            </form>
        </section>
    </div>
</div>
