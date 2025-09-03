@extends('base')

@section('content')

    @include('_partials.nav')

    @include('_partials.messages')

    <div class="container mx-auto px-4 py-6 flex items-center justify-center p-4">

        <div class="max-w-md w-full bg-white rounded-xl shadow-2xl overflow-hidden card-hover">

            <div class="py-6 px-8">

                <div class="text-center">
                    
                    <h2 class="text-3xl font-bold text-gray-800 mb-2">Bem vindo!</h2>
                    <p class="text-gray-600 mb-8">Se logue para continuar as atividades</p>
                </div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-6">
                        <label for="email" class="block text-gray-700 text-sm font-medium mb-2">Endereço de e-mail</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-envelope text-gray-400"></i>
                            </div>
                            <input id="email" class="w-full pr-3 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" type="email" name="email" value="{{ old('email') }}"
                                required
                                autofocus
                                autocomplete="username" />
                            @error('email')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        
                    </div>

                    <div class="mb-6">
                        <label for="password block text-gray-700 text-sm font-medium mb-2">
                            Password
                        </label>

                        <input id="password" class="block mt-1 w-full border border-gray-300 rounded-lg px-3 py-3 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" type="password" name="password" required autocomplete="current-password" />

                        @error('password')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                href="{{ route('password.request') }}">
                                Forgot your password?
                            </a>
                        @endif

                        <button type="submit" class="ms-3 bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 transition duration-200">
                            Log in
                        </button>
                    </div>
                </form>

            </div>


        </div>
    </div>


@endsection