@extends('base')

@section('content')

    @include('_partials.nav')

    <div class="container mx-auto px-4 py-6 flex items-center justify-center p-4">
        <div class="max-w-md w-full bg-white rounded-xl shadow-2xl overflow-hidden card-hover">
            <div class="p-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Cadastrar</h2>
                
                <form method="POST" action="{{ route('register') }}" class="space-y-4">
                    @csrf
                    
                    <div>
                        <input type="text" name="name" placeholder="Nome Completo" 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" 
                               value="{{ old('name') }}" required>
                        @error('name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div>
                        <input type="email" name="email" placeholder="Endereço de Email" 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" 
                               value="{{ old('email') }}" required>
                        @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div>
                        <input type="password" name="password" placeholder="Senha" 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" 
                               required>
                        @error('password')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div>
                        <input type="password" name="password_confirmation" placeholder="Confirmar Senha" 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" 
                               required>
                    </div>
                    
                    <button type="submit" 
                            class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition duration-200 font-medium">
                        Cadastrar
                    </button>
                </form>
                
                <p class="text-center text-gray-600 mt-4">
                    Já tem uma conta? 
                    <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Entrar</a>
                </p>
            </div>
        </div>
    </div>

@endsection